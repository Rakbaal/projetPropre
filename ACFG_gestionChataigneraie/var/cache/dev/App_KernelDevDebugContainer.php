<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWkluExs\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWkluExs/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWkluExs.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWkluExs\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerWkluExs\App_KernelDevDebugContainer([
    'container.build_hash' => 'WkluExs',
    'container.build_id' => '3afb2eea',
    'container.build_time' => 1647378188,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWkluExs');
