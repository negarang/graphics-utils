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
 * Class PhotoUtils
 * @package Negarang\GraphicsUtils
 * @author Milad Abdollahnia (milad_abdollahnia@yahoo.com)
 */
class PhotoUtils {

    /**
     * Calculate Aspect Ratio Using Euclid's Algorithm.
     * @param int $width
     * @param int $height
     * @return bool|string
     */
    public static function calculateAspectRatio($width, $height) {
        // If entered values is not valid.
        if (($width <= 0) || ($height <= 0)) {
            return null;
        }

        // Take care of the simple case.
        if ($width == $height) {
            return "1:1";
        }

        // Calculate Greatest Common Divisor (gcd).
        $gmpGcd = gmp_gcd((string) $width, (string) $height);
        $gcd = gmp_intval($gmpGcd);
        // Calculate Aspect Ratio.
        $ratio = ($width / $gcd) . ":" . ($height / $gcd);

        return $ratio;
    }
}