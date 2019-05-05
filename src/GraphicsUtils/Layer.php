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
 * Interface Layer
 * @package Negarang\GraphicsUtils
 * @author Milad Abdollahnia (milad_abdollahnia@yahoo.com)
 */
interface Layer {
    /**
     * @return resource
     */
    public function getImage();

    /**
     * @return int
     */
    public function getImageWidth();

    /**
     * @return int
     */
    public function getImageHeight();

    /**
     * @return int
     */
    public function getPositionX();

    /**
     * @return int
     */
    public function getPositionY();

    /**
     * @return bool
     */
    public function destroyImage();
}