<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'services_resetter' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/DependencyInjection/ServicesResetter.php';

return $this->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () {
    if (isset($this->services['profiler'])) {
        yield 'profiler' => ${($_ = isset($this->services['profiler']) ? $this->services['profiler'] : null) && false ?: '_'};
    }
    if (isset($this->services['validator'])) {
        yield 'debug.validator' => ${($_ = isset($this->services['validator']) ? $this->services['validator'] : null) && false ?: '_'};
    }
    if (isset($this->services['debug.stopwatch'])) {
        yield 'debug.stopwatch' => ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : null) && false ?: '_'};
    }
    if (isset($this->services['security.token_storage'])) {
        yield 'security.token_storage' => ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : null) && false ?: '_'};
    }
    if (isset($this->services['monolog.handler.main'])) {
        yield 'monolog.handler.main' => ${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : null) && false ?: '_'};
    }
    if (isset($this->services['monolog.handler.console'])) {
        yield 'monolog.handler.console' => ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : null) && false ?: '_'};
    }
    if (isset($this->services['monolog.handler.server_log'])) {
        yield 'monolog.handler.server_log' => ${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : null) && false ?: '_'};
    }
    if (isset($this->services['swiftmailer.email_sender.listener'])) {
        yield 'swiftmailer.email_sender.listener' => ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : null) && false ?: '_'};
    }
    if (isset($this->services['form.type.entity'])) {
        yield 'form.type.entity' => ${($_ = isset($this->services['form.type.entity']) ? $this->services['form.type.entity'] : null) && false ?: '_'};
    }
}, function () {
    return 0 + (int) (isset($this->services['profiler'])) + (int) (isset($this->services['validator'])) + (int) (isset($this->services['debug.stopwatch'])) + (int) (isset($this->services['security.token_storage'])) + (int) (isset($this->services['monolog.handler.main'])) + (int) (isset($this->services['monolog.handler.console'])) + (int) (isset($this->services['monolog.handler.server_log'])) + (int) (isset($this->services['swiftmailer.email_sender.listener'])) + (int) (isset($this->services['form.type.entity']));
}), array('profiler' => 'reset', 'debug.validator' => 'reset', 'debug.stopwatch' => 'reset', 'security.token_storage' => 'setToken', 'monolog.handler.main' => 'reset', 'monolog.handler.console' => 'reset', 'monolog.handler.server_log' => 'reset', 'swiftmailer.email_sender.listener' => 'reset', 'form.type.entity' => 'reset'));
