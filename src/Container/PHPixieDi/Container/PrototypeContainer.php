<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\PHPixieDi\Container;

use DiContainerBenchmarks\Fixture;
use PHPixie\DI\Container\Root;

class PrototypeContainer extends Root
{
    protected function configure()
    {
        $this->callback('c1', function() {
            return new Fixture\Class1();
        });
        
        $this->callback('c2', function() {
            return new Fixture\Class2($this->getValue('c1', true, []));
        });

        $this->callback('c3', function() {
            return new Fixture\Class3($this->getValue('c2', true, []));
        });

        $this->callback('c4', function() {
            return new Fixture\Class4($this->getValue('c3', true, []));
        });

        $this->callback('c5', function() {
            return new Fixture\Class5($this->getValue('c4', true, []));
        });

        $this->callback('c6', function() {
            return new Fixture\Class6($this->getValue('c5', true, []));
        });

        $this->callback('c7', function() {
            return new Fixture\Class7($this->getValue('c6', true, []));
        });

        $this->callback('c8', function() {
            return new Fixture\Class8($this->getValue('c7', true, []));
        });

        $this->callback('c9', function() {
            return new Fixture\Class9($this->getValue('c8', true, []));
        });

        $this->callback('c10', function() {
            return new Fixture\Class10($this->getValue('c9', true, []));
        });

        $this->callback('c11', function() {
            return new Fixture\Class11($this->getValue('c10', true, []));
        });

        $this->callback('c12', function() {
            return new Fixture\Class12($this->getValue('c11', true, []));
        });

        $this->callback('c13', function() {
            return new Fixture\Class13($this->getValue('c12', true, []));
        });

        $this->callback('c14', function() {
            return new Fixture\Class14($this->getValue('c13', true, []));
        });

        $this->callback('c15', function() {
            return new Fixture\Class15($this->getValue('c14', true, []));
        });

        $this->callback('c16', function() {
            return new Fixture\Class16($this->getValue('c15', true, []));
        });

        $this->callback('c17', function() {
            return new Fixture\Class17($this->getValue('c16', true, []));
        });

        $this->callback('c18', function() {
            return new Fixture\Class18($this->getValue('c17', true, []));
        });

        $this->callback('c19', function() {
            return new Fixture\Class19($this->getValue('c18', true, []));
        });

        $this->callback('c20', function() {
            return new Fixture\Class20($this->getValue('c19', true, []));
        });

        $this->callback('c21', function() {
            return new Fixture\Class21($this->getValue('c20', true, []));
        });

        $this->callback('c22', function() {
            return new Fixture\Class22($this->getValue('c21', true, []));
        });

        $this->callback('c23', function() {
            return new Fixture\Class23($this->getValue('c22', true, []));
        });

        $this->callback('c24', function() {
            return new Fixture\Class24($this->getValue('c23', true, []));
        });

        $this->callback('c25', function() {
            return new Fixture\Class25($this->getValue('c24', true, []));
        });

        $this->callback('c26', function() {
            return new Fixture\Class26($this->getValue('c25', true, []));
        });

        $this->callback('c27', function() {
            return new Fixture\Class27($this->getValue('c26', true, []));
        });

        $this->callback('c28', function() {
            return new Fixture\Class28($this->getValue('c27', true, []));
        });

        $this->callback('c29', function() {
            return new Fixture\Class29($this->getValue('c28', true, []));
        });

        $this->callback('c30', function() {
            return new Fixture\Class30($this->getValue('c29', true, []));
        });

        $this->callback('c31', function() {
            return new Fixture\Class31($this->getValue('c30', true, []));
        });

        $this->callback('c32', function() {
            return new Fixture\Class32($this->getValue('c31', true, []));
        });

        $this->callback('c33', function() {
            return new Fixture\Class33($this->getValue('c32', true, []));
        });

        $this->callback('c34', function() {
            return new Fixture\Class34($this->getValue('c33', true, []));
        });

        $this->callback('c35', function() {
            return new Fixture\Class35($this->getValue('c34', true, []));
        });

        $this->callback('c36', function() {
            return new Fixture\Class36($this->getValue('c35', true, []));
        });

        $this->callback('c37', function() {
            return new Fixture\Class37($this->getValue('c36', true, []));
        });

        $this->callback('c38', function() {
            return new Fixture\Class38($this->getValue('c37', true, []));
        });

        $this->callback('c39', function() {
            return new Fixture\Class39($this->getValue('c38', true, []));
        });

        $this->callback('c40', function() {
            return new Fixture\Class40($this->getValue('c39', true, []));
        });

        $this->callback('c41', function() {
            return new Fixture\Class41($this->getValue('c40', true, []));
        });

        $this->callback('c42', function() {
            return new Fixture\Class42($this->getValue('c41', true, []));
        });

        $this->callback('c43', function() {
            return new Fixture\Class43($this->getValue('c42', true, []));
        });

        $this->callback('c44', function() {
            return new Fixture\Class44($this->getValue('c43', true, []));
        });

        $this->callback('c45', function() {
            return new Fixture\Class45($this->getValue('c44', true, []));
        });

        $this->callback('c46', function() {
            return new Fixture\Class46($this->getValue('c45', true, []));
        });

        $this->callback('c47', function() {
            return new Fixture\Class47($this->getValue('c46', true, []));
        });

        $this->callback('c48', function() {
            return new Fixture\Class48($this->getValue('c47', true, []));
        });

        $this->callback('c49', function() {
            return new Fixture\Class49($this->getValue('c48', true, []));
        });

        $this->callback('c50', function() {
            return new Fixture\Class50($this->getValue('c49', true, []));
        });

        $this->callback('c51', function() {
            return new Fixture\Class51($this->getValue('c50', true, []));
        });

        $this->callback('c52', function() {
            return new Fixture\Class52($this->getValue('c51', true, []));
        });

        $this->callback('c53', function() {
            return new Fixture\Class53($this->getValue('c52', true, []));
        });

        $this->callback('c54', function() {
            return new Fixture\Class54($this->getValue('c53', true, []));
        });

        $this->callback('c55', function() {
            return new Fixture\Class55($this->getValue('c54', true, []));
        });

        $this->callback('c56', function() {
            return new Fixture\Class56($this->getValue('c55', true, []));
        });

        $this->callback('c57', function() {
            return new Fixture\Class57($this->getValue('c56', true, []));
        });

        $this->callback('c58', function() {
            return new Fixture\Class58($this->getValue('c57', true, []));
        });

        $this->callback('c59', function() {
            return new Fixture\Class59($this->getValue('c58', true, []));
        });

        $this->callback('c60', function() {
            return new Fixture\Class60($this->getValue('c59', true, []));
        });

        $this->callback('c61', function() {
            return new Fixture\Class61($this->getValue('c60', true, []));
        });

        $this->callback('c62', function() {
            return new Fixture\Class62($this->getValue('c61', true, []));
        });

        $this->callback('c63', function() {
            return new Fixture\Class63($this->getValue('c62', true, []));
        });

        $this->callback('c64', function() {
            return new Fixture\Class64($this->getValue('c63', true, []));
        });

        $this->callback('c65', function() {
            return new Fixture\Class65($this->getValue('c64', true, []));
        });

        $this->callback('c66', function() {
            return new Fixture\Class66($this->getValue('c65', true, []));
        });

        $this->callback('c67', function() {
            return new Fixture\Class67($this->getValue('c66', true, []));
        });

        $this->callback('c68', function() {
            return new Fixture\Class68($this->getValue('c67', true, []));
        });

        $this->callback('c69', function() {
            return new Fixture\Class69($this->getValue('c68', true, []));
        });

        $this->callback('c70', function() {
            return new Fixture\Class70($this->getValue('c69', true, []));
        });

        $this->callback('c71', function() {
            return new Fixture\Class71($this->getValue('c70', true, []));
        });

        $this->callback('c72', function() {
            return new Fixture\Class72($this->getValue('c71', true, []));
        });

        $this->callback('c73', function() {
            return new Fixture\Class73($this->getValue('c72', true, []));
        });

        $this->callback('c74', function() {
            return new Fixture\Class74($this->getValue('c73', true, []));
        });

        $this->callback('c75', function() {
            return new Fixture\Class75($this->getValue('c74', true, []));
        });

        $this->callback('c76', function() {
            return new Fixture\Class76($this->getValue('c75', true, []));
        });

        $this->callback('c77', function() {
            return new Fixture\Class77($this->getValue('c76', true, []));
        });

        $this->callback('c78', function() {
            return new Fixture\Class78($this->getValue('c77', true, []));
        });

        $this->callback('c79', function() {
            return new Fixture\Class79($this->getValue('c78', true, []));
        });

        $this->callback('c80', function() {
            return new Fixture\Class80($this->getValue('c79', true, []));
        });

        $this->callback('c81', function() {
            return new Fixture\Class81($this->getValue('c80', true, []));
        });

        $this->callback('c82', function() {
            return new Fixture\Class82($this->getValue('c81', true, []));
        });

        $this->callback('c83', function() {
            return new Fixture\Class83($this->getValue('c82', true, []));
        });

        $this->callback('c84', function() {
            return new Fixture\Class84($this->getValue('c83', true, []));
        });

        $this->callback('c85', function() {
            return new Fixture\Class85($this->getValue('c84', true, []));
        });

        $this->callback('c86', function() {
            return new Fixture\Class86($this->getValue('c85', true, []));
        });

        $this->callback('c87', function() {
            return new Fixture\Class87($this->getValue('c86', true, []));
        });

        $this->callback('c88', function() {
            return new Fixture\Class88($this->getValue('c87', true, []));
        });

        $this->callback('c89', function() {
            return new Fixture\Class89($this->getValue('c88', true, []));
        });

        $this->callback('c90', function() {
            return new Fixture\Class90($this->getValue('c89', true, []));
        });

        $this->callback('c91', function() {
            return new Fixture\Class91($this->getValue('c90', true, []));
        });

        $this->callback('c92', function() {
            return new Fixture\Class92($this->getValue('c91', true, []));
        });

        $this->callback('c93', function() {
            return new Fixture\Class93($this->getValue('c92', true, []));
        });

        $this->callback('c94', function() {
            return new Fixture\Class94($this->getValue('c93', true, []));
        });

        $this->callback('c95', function() {
            return new Fixture\Class95($this->getValue('c94', true, []));
        });

        $this->callback('c96', function() {
            return new Fixture\Class96($this->getValue('c95', true, []));
        });

        $this->callback('c97', function() {
            return new Fixture\Class97($this->getValue('c96', true, []));
        });

        $this->callback('c98', function() {
            return new Fixture\Class98($this->getValue('c97', true, []));
        });

        $this->callback('c99', function() {
            return new Fixture\Class99($this->getValue('c98', true, []));
        });

        $this->callback('c100', function() {
            return new Fixture\Class100($this->getValue('c99', true, []));
        });
    }
}
