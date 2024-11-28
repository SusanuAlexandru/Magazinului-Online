<?php

namespace Laravel\SerializableClosure;

use Closure;
<<<<<<< HEAD
=======
use Laravel\SerializableClosure\Exceptions\PhpVersionNotSupportedException;
>>>>>>> 237ee90fe8901cd981aeff80b2bd082edbe79ee7

class UnsignedSerializableClosure
{
    /**
     * The closure's serializable.
     *
     * @var \Laravel\SerializableClosure\Contracts\Serializable
     */
    protected $serializable;

    /**
     * Creates a new serializable closure instance.
     *
     * @param  \Closure  $closure
     * @return void
     */
    public function __construct(Closure $closure)
    {
<<<<<<< HEAD
=======
        if (\PHP_VERSION_ID < 70400) {
            throw new PhpVersionNotSupportedException();
        }

>>>>>>> 237ee90fe8901cd981aeff80b2bd082edbe79ee7
        $this->serializable = new Serializers\Native($closure);
    }

    /**
     * Resolve the closure with the given arguments.
     *
     * @return mixed
     */
    public function __invoke()
    {
<<<<<<< HEAD
=======
        if (\PHP_VERSION_ID < 70400) {
            throw new PhpVersionNotSupportedException();
        }

>>>>>>> 237ee90fe8901cd981aeff80b2bd082edbe79ee7
        return call_user_func_array($this->serializable, func_get_args());
    }

    /**
     * Gets the closure.
     *
     * @return \Closure
     */
    public function getClosure()
    {
<<<<<<< HEAD
=======
        if (\PHP_VERSION_ID < 70400) {
            throw new PhpVersionNotSupportedException();
        }

>>>>>>> 237ee90fe8901cd981aeff80b2bd082edbe79ee7
        return $this->serializable->getClosure();
    }

    /**
     * Get the serializable representation of the closure.
     *
<<<<<<< HEAD
     * @return array{serializable: \Laravel\SerializableClosure\Contracts\Serializable}
=======
     * @return array
>>>>>>> 237ee90fe8901cd981aeff80b2bd082edbe79ee7
     */
    public function __serialize()
    {
        return [
            'serializable' => $this->serializable,
        ];
    }

    /**
     * Restore the closure after serialization.
     *
<<<<<<< HEAD
     * @param  array{serializable: \Laravel\SerializableClosure\Contracts\Serializable}  $data
=======
     * @param  array  $data
>>>>>>> 237ee90fe8901cd981aeff80b2bd082edbe79ee7
     * @return void
     */
    public function __unserialize($data)
    {
        $this->serializable = $data['serializable'];
    }
}
