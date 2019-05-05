<?php
/**
 * Project: Negarang Graphics Utils
 * This file is part of Negarang.
 *
 * (c) Milad Abdollahnia
 * http://milad-ab.ir
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Negarang\GraphicsUtils;

/**
 * Class File
 * @package Negarang\GraphicsUtils
 * @author Milad Abdollahnia (milad_abdollahnia@yahoo.com)
 */
class File {

    /**
     * @var string
     */
    private $name;

    /**
     * @var string Location in Storage.
     */
    private $path;

    /**
     * @var int Size in Bytes.
     */
    private $size;

    /**
     * @var string MIME Type.
     */
    private $type;

    /**
     * File constructor.
     * @param string $name
     * @param string $path
     * @param int $size
     * @param string $type
     */
    public function __construct($name, $path, $size, $type) {
        $this->name = $name;
        $this->path = $path;
        $this->size = $size;
        $this->type = $type;
    }

    /**
     * @param $path
     * @return File
     */
    public static function fromPath($path) {
        $name = pathinfo($path, PATHINFO_FILENAME);
        $size = filesize($path);
        $type = mime_content_type($path);
        return new self($name, $path, $size, $type);
    }

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPath() {
        return $this->path;
    }

    /**
     * @return string
     */
    public function getSize() {
        return $this->size;
    }

    /**
     * @return string
     */
    public function getType() {
        return $this->type;
    }
}