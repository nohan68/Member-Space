<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRut5Qhx\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRut5Qhx/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRut5Qhx.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRut5Qhx\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerRut5Qhx\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Rut5Qhx',
    'container.build_id' => 'dce54be4',
    'container.build_time' => 1570902012,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRut5Qhx');
