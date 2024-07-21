<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Salle extends \App\Entity\Salle implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as private;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    public function __load(): void
    {
        $this->initializeLazyObject();
    }
    

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'Caracteristique' => [parent::class, 'Caracteristique', null],
        "\0".parent::class."\0".'Cinema' => [parent::class, 'Cinema', null],
        "\0".parent::class."\0".'Nom' => [parent::class, 'Nom', null],
        "\0".parent::class."\0".'Probleme' => [parent::class, 'Probleme', null],
        "\0".parent::class."\0".'Siege' => [parent::class, 'Siege', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'seances' => [parent::class, 'seances', null],
        'Caracteristique' => [parent::class, 'Caracteristique', null],
        'Cinema' => [parent::class, 'Cinema', null],
        'Nom' => [parent::class, 'Nom', null],
        'Probleme' => [parent::class, 'Probleme', null],
        'Siege' => [parent::class, 'Siege', null],
        'id' => [parent::class, 'id', null],
        'seances' => [parent::class, 'seances', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
