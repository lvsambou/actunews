<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container05Njc1I\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container05Njc1I/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container05Njc1I.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container05Njc1I\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container05Njc1I\App_KernelDevDebugContainer([
    'container.build_hash' => '05Njc1I',
    'container.build_id' => '8d29837e',
    'container.build_time' => 1614234090,
], __DIR__.\DIRECTORY_SEPARATOR.'Container05Njc1I');
