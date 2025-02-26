<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\CoreBundle\Tests\EventListener;

use Contao\CoreBundle\EventListener\ExceptionConverterListener;
use Contao\CoreBundle\EventListener\UnwrapTwigExceptionListener;
use Contao\CoreBundle\Exception\NoContentResponseException;
use Contao\CoreBundle\Exception\RedirectResponseException;
use Contao\CoreBundle\Tests\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpKernel\KernelInterface;
use Twig\Error\RuntimeError;

class UnwrapTwigExceptionListenerTest extends TestCase
{
    #[DataProvider('provideExceptionsToUnwrap')]
    public function testUnwrapsException(\Exception $exception): void
    {
        $event = new ExceptionEvent(
            $this->createMock(KernelInterface::class),
            new Request(),
            HttpKernelInterface::MAIN_REQUEST,
            new RuntimeError('An exception has been thrown during rendering of a template.', -1, null, $exception),
        );

        (new UnwrapTwigExceptionListener())($event);

        $this->assertSame($exception, $event->getThrowable(), 'exception should be unwrapped');
    }

    public static function provideExceptionsToUnwrap(): iterable
    {
        yield 'NoContentResponseException' => [
            new NoContentResponseException(),
        ];

        yield 'RedirectResponseException' => [
            new RedirectResponseException('/foo'),
        ];

        foreach (array_unique(ExceptionConverterListener::MAPPER) as $exception) {
            yield $exception => [new $exception()];
        }
    }

    #[DataProvider('provideThrowableToIgnore')]
    public function testIgnoresOtherExceptions(\Throwable $throwable): void
    {
        $event = new ExceptionEvent(
            $this->createMock(KernelInterface::class),
            new Request(),
            HttpKernelInterface::MAIN_REQUEST,
            $throwable,
        );

        (new UnwrapTwigExceptionListener())($event);

        $this->assertSame($throwable, $event->getThrowable(), 'throwable should be left untouched');
    }

    public static function provideThrowableToIgnore(): iterable
    {
        $exception = new \LogicException('Something went wrong.');

        yield 'arbitrary exception' => [$exception];

        yield 'Twig RuntimeError with arbitrary exception' => [
            new RuntimeError('An exception has been thrown during rendering of a template.', -1, null, $exception),
        ];
    }
}
