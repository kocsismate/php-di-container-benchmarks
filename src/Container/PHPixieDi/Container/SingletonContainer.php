<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\PHPixieDi\Container;

use DiContainerBenchmarks\Fixture;
use PHPixie\DI\Container\Root;

class SingletonContainer extends Root
{
    protected function configure()
    {
        $this->build('c1', function() {
            return new Fixture\Class1();
        });
        
        $this->build('c2', function() {
            return new Fixture\Class2($this->getValue('c1', false));
        });

        $this->build('c3', function() {
            return new Fixture\Class3($this->getValue('c2', false));
        });

        $this->build('c4', function() {
            return new Fixture\Class4($this->getValue('c3', false));
        });

        $this->build('c5', function() {
            return new Fixture\Class5($this->getValue('c4', false));
        });

        $this->build('c6', function() {
            return new Fixture\Class6($this->getValue('c5', false));
        });

        $this->build('c7', function() {
            return new Fixture\Class7($this->getValue('c6', false));
        });

        $this->build('c8', function() {
            return new Fixture\Class8($this->getValue('c7', false));
        });

        $this->build('c9', function() {
            return new Fixture\Class9($this->getValue('c8', false));
        });

        $this->build('c10', function() {
            return new Fixture\Class10($this->getValue('c9', false));
        });

        $this->build('c11', function() {
            return new Fixture\Class11($this->getValue('c10', false));
        });

        $this->build('c12', function() {
            return new Fixture\Class12($this->getValue('c11', false));
        });

        $this->build('c13', function() {
            return new Fixture\Class13($this->getValue('c12', false));
        });

        $this->build('c14', function() {
            return new Fixture\Class14($this->getValue('c13', false));
        });

        $this->build('c15', function() {
            return new Fixture\Class15($this->getValue('c14', false));
        });

        $this->build('c16', function() {
            return new Fixture\Class16($this->getValue('c15', false));
        });

        $this->build('c17', function() {
            return new Fixture\Class17($this->getValue('c16', false));
        });

        $this->build('c18', function() {
            return new Fixture\Class18($this->getValue('c17', false));
        });

        $this->build('c19', function() {
            return new Fixture\Class19($this->getValue('c18', false));
        });

        $this->build('c20', function() {
            return new Fixture\Class20($this->getValue('c19', false));
        });

        $this->build('c21', function() {
            return new Fixture\Class21($this->getValue('c20', false));
        });

        $this->build('c22', function() {
            return new Fixture\Class22($this->getValue('c21', false));
        });

        $this->build('c23', function() {
            return new Fixture\Class23($this->getValue('c22', false));
        });

        $this->build('c24', function() {
            return new Fixture\Class24($this->getValue('c23', false));
        });

        $this->build('c25', function() {
            return new Fixture\Class25($this->getValue('c24', false));
        });

        $this->build('c26', function() {
            return new Fixture\Class26($this->getValue('c25', false));
        });

        $this->build('c27', function() {
            return new Fixture\Class27($this->getValue('c26', false));
        });

        $this->build('c28', function() {
            return new Fixture\Class28($this->getValue('c27', false));
        });

        $this->build('c29', function() {
            return new Fixture\Class29($this->getValue('c28', false));
        });

        $this->build('c30', function() {
            return new Fixture\Class30($this->getValue('c29', false));
        });

        $this->build('c31', function() {
            return new Fixture\Class31($this->getValue('c30', false));
        });

        $this->build('c32', function() {
            return new Fixture\Class32($this->getValue('c31', false));
        });

        $this->build('c33', function() {
            return new Fixture\Class33($this->getValue('c32', false));
        });

        $this->build('c34', function() {
            return new Fixture\Class34($this->getValue('c33', false));
        });

        $this->build('c35', function() {
            return new Fixture\Class35($this->getValue('c34', false));
        });

        $this->build('c36', function() {
            return new Fixture\Class36($this->getValue('c35', false));
        });

        $this->build('c37', function() {
            return new Fixture\Class37($this->getValue('c36', false));
        });

        $this->build('c38', function() {
            return new Fixture\Class38($this->getValue('c37', false));
        });

        $this->build('c39', function() {
            return new Fixture\Class39($this->getValue('c38', false));
        });

        $this->build('c40', function() {
            return new Fixture\Class40($this->getValue('c39', false));
        });

        $this->build('c41', function() {
            return new Fixture\Class41($this->getValue('c40', false));
        });

        $this->build('c42', function() {
            return new Fixture\Class42($this->getValue('c41', false));
        });

        $this->build('c43', function() {
            return new Fixture\Class43($this->getValue('c42', false));
        });

        $this->build('c44', function() {
            return new Fixture\Class44($this->getValue('c43', false));
        });

        $this->build('c45', function() {
            return new Fixture\Class45($this->getValue('c44', false));
        });

        $this->build('c46', function() {
            return new Fixture\Class46($this->getValue('c45', false));
        });

        $this->build('c47', function() {
            return new Fixture\Class47($this->getValue('c46', false));
        });

        $this->build('c48', function() {
            return new Fixture\Class48($this->getValue('c47', false));
        });

        $this->build('c49', function() {
            return new Fixture\Class49($this->getValue('c48', false));
        });

        $this->build('c50', function() {
            return new Fixture\Class50($this->getValue('c49', false));
        });

        $this->build('c51', function() {
            return new Fixture\Class51($this->getValue('c50', false));
        });

        $this->build('c52', function() {
            return new Fixture\Class52($this->getValue('c51', false));
        });

        $this->build('c53', function() {
            return new Fixture\Class53($this->getValue('c52', false));
        });

        $this->build('c54', function() {
            return new Fixture\Class54($this->getValue('c53', false));
        });

        $this->build('c55', function() {
            return new Fixture\Class55($this->getValue('c54', false));
        });

        $this->build('c56', function() {
            return new Fixture\Class56($this->getValue('c55', false));
        });

        $this->build('c57', function() {
            return new Fixture\Class57($this->getValue('c56', false));
        });

        $this->build('c58', function() {
            return new Fixture\Class58($this->getValue('c57', false));
        });

        $this->build('c59', function() {
            return new Fixture\Class59($this->getValue('c58', false));
        });

        $this->build('c60', function() {
            return new Fixture\Class60($this->getValue('c59', false));
        });

        $this->build('c61', function() {
            return new Fixture\Class61($this->getValue('c60', false));
        });

        $this->build('c62', function() {
            return new Fixture\Class62($this->getValue('c61', false));
        });

        $this->build('c63', function() {
            return new Fixture\Class63($this->getValue('c62', false));
        });

        $this->build('c64', function() {
            return new Fixture\Class64($this->getValue('c63', false));
        });

        $this->build('c65', function() {
            return new Fixture\Class65($this->getValue('c64', false));
        });

        $this->build('c66', function() {
            return new Fixture\Class66($this->getValue('c65', false));
        });

        $this->build('c67', function() {
            return new Fixture\Class67($this->getValue('c66', false));
        });

        $this->build('c68', function() {
            return new Fixture\Class68($this->getValue('c67', false));
        });

        $this->build('c69', function() {
            return new Fixture\Class69($this->getValue('c68', false));
        });

        $this->build('c70', function() {
            return new Fixture\Class70($this->getValue('c69', false));
        });

        $this->build('c71', function() {
            return new Fixture\Class71($this->getValue('c70', false));
        });

        $this->build('c72', function() {
            return new Fixture\Class72($this->getValue('c71', false));
        });

        $this->build('c73', function() {
            return new Fixture\Class73($this->getValue('c72', false));
        });

        $this->build('c74', function() {
            return new Fixture\Class74($this->getValue('c73', false));
        });

        $this->build('c75', function() {
            return new Fixture\Class75($this->getValue('c74', false));
        });

        $this->build('c76', function() {
            return new Fixture\Class76($this->getValue('c75', false));
        });

        $this->build('c77', function() {
            return new Fixture\Class77($this->getValue('c76', false));
        });

        $this->build('c78', function() {
            return new Fixture\Class78($this->getValue('c77', false));
        });

        $this->build('c79', function() {
            return new Fixture\Class79($this->getValue('c78', false));
        });

        $this->build('c80', function() {
            return new Fixture\Class80($this->getValue('c79', false));
        });

        $this->build('c81', function() {
            return new Fixture\Class81($this->getValue('c80', false));
        });

        $this->build('c82', function() {
            return new Fixture\Class82($this->getValue('c81', false));
        });

        $this->build('c83', function() {
            return new Fixture\Class83($this->getValue('c82', false));
        });

        $this->build('c84', function() {
            return new Fixture\Class84($this->getValue('c83', false));
        });

        $this->build('c85', function() {
            return new Fixture\Class85($this->getValue('c84', false));
        });

        $this->build('c86', function() {
            return new Fixture\Class86($this->getValue('c85', false));
        });

        $this->build('c87', function() {
            return new Fixture\Class87($this->getValue('c86', false));
        });

        $this->build('c88', function() {
            return new Fixture\Class88($this->getValue('c87', false));
        });

        $this->build('c89', function() {
            return new Fixture\Class89($this->getValue('c88', false));
        });

        $this->build('c90', function() {
            return new Fixture\Class90($this->getValue('c89', false));
        });

        $this->build('c91', function() {
            return new Fixture\Class91($this->getValue('c90', false));
        });

        $this->build('c92', function() {
            return new Fixture\Class92($this->getValue('c91', false));
        });

        $this->build('c93', function() {
            return new Fixture\Class93($this->getValue('c92', false));
        });

        $this->build('c94', function() {
            return new Fixture\Class94($this->getValue('c93', false));
        });

        $this->build('c95', function() {
            return new Fixture\Class95($this->getValue('c94', false));
        });

        $this->build('c96', function() {
            return new Fixture\Class96($this->getValue('c95', false));
        });

        $this->build('c97', function() {
            return new Fixture\Class97($this->getValue('c96', false));
        });

        $this->build('c98', function() {
            return new Fixture\Class98($this->getValue('c97', false));
        });

        $this->build('c99', function() {
            return new Fixture\Class99($this->getValue('c98', false));
        });

        $this->build('c100', function() {
            return new Fixture\Class100($this->getValue('c99', false));
        });
    }
}
