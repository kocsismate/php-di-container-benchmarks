<?php

namespace DiContainerBenchmarks\Container\Symfony\Resource;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/*
 * CompiledSingletonContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class ContainerV3f5ozx extends Container
{
    private $parameters;
    private $targetDirs = array();

    /*
     * Constructor.
     */
    public function __construct()
    {
        $dir = $this->targetDirs[0] = dirname(__DIR__);
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->services = array();
        $this->fileMap = array(
            'class1' => __DIR__.'/getClass1Service.php',
            'class10' => __DIR__.'/getClass10Service.php',
            'class100' => __DIR__.'/getClass100Service.php',
            'class11' => __DIR__.'/getClass11Service.php',
            'class12' => __DIR__.'/getClass12Service.php',
            'class13' => __DIR__.'/getClass13Service.php',
            'class14' => __DIR__.'/getClass14Service.php',
            'class15' => __DIR__.'/getClass15Service.php',
            'class16' => __DIR__.'/getClass16Service.php',
            'class17' => __DIR__.'/getClass17Service.php',
            'class18' => __DIR__.'/getClass18Service.php',
            'class19' => __DIR__.'/getClass19Service.php',
            'class2' => __DIR__.'/getClass2Service.php',
            'class20' => __DIR__.'/getClass20Service.php',
            'class21' => __DIR__.'/getClass21Service.php',
            'class22' => __DIR__.'/getClass22Service.php',
            'class23' => __DIR__.'/getClass23Service.php',
            'class24' => __DIR__.'/getClass24Service.php',
            'class25' => __DIR__.'/getClass25Service.php',
            'class26' => __DIR__.'/getClass26Service.php',
            'class27' => __DIR__.'/getClass27Service.php',
            'class28' => __DIR__.'/getClass28Service.php',
            'class29' => __DIR__.'/getClass29Service.php',
            'class3' => __DIR__.'/getClass3Service.php',
            'class30' => __DIR__.'/getClass30Service.php',
            'class31' => __DIR__.'/getClass31Service.php',
            'class32' => __DIR__.'/getClass32Service.php',
            'class33' => __DIR__.'/getClass33Service.php',
            'class34' => __DIR__.'/getClass34Service.php',
            'class35' => __DIR__.'/getClass35Service.php',
            'class36' => __DIR__.'/getClass36Service.php',
            'class37' => __DIR__.'/getClass37Service.php',
            'class38' => __DIR__.'/getClass38Service.php',
            'class39' => __DIR__.'/getClass39Service.php',
            'class4' => __DIR__.'/getClass4Service.php',
            'class40' => __DIR__.'/getClass40Service.php',
            'class41' => __DIR__.'/getClass41Service.php',
            'class42' => __DIR__.'/getClass42Service.php',
            'class43' => __DIR__.'/getClass43Service.php',
            'class44' => __DIR__.'/getClass44Service.php',
            'class45' => __DIR__.'/getClass45Service.php',
            'class46' => __DIR__.'/getClass46Service.php',
            'class47' => __DIR__.'/getClass47Service.php',
            'class48' => __DIR__.'/getClass48Service.php',
            'class49' => __DIR__.'/getClass49Service.php',
            'class5' => __DIR__.'/getClass5Service.php',
            'class50' => __DIR__.'/getClass50Service.php',
            'class51' => __DIR__.'/getClass51Service.php',
            'class52' => __DIR__.'/getClass52Service.php',
            'class53' => __DIR__.'/getClass53Service.php',
            'class54' => __DIR__.'/getClass54Service.php',
            'class55' => __DIR__.'/getClass55Service.php',
            'class56' => __DIR__.'/getClass56Service.php',
            'class57' => __DIR__.'/getClass57Service.php',
            'class58' => __DIR__.'/getClass58Service.php',
            'class59' => __DIR__.'/getClass59Service.php',
            'class6' => __DIR__.'/getClass6Service.php',
            'class60' => __DIR__.'/getClass60Service.php',
            'class61' => __DIR__.'/getClass61Service.php',
            'class62' => __DIR__.'/getClass62Service.php',
            'class63' => __DIR__.'/getClass63Service.php',
            'class64' => __DIR__.'/getClass64Service.php',
            'class65' => __DIR__.'/getClass65Service.php',
            'class66' => __DIR__.'/getClass66Service.php',
            'class67' => __DIR__.'/getClass67Service.php',
            'class68' => __DIR__.'/getClass68Service.php',
            'class69' => __DIR__.'/getClass69Service.php',
            'class7' => __DIR__.'/getClass7Service.php',
            'class70' => __DIR__.'/getClass70Service.php',
            'class71' => __DIR__.'/getClass71Service.php',
            'class72' => __DIR__.'/getClass72Service.php',
            'class73' => __DIR__.'/getClass73Service.php',
            'class74' => __DIR__.'/getClass74Service.php',
            'class75' => __DIR__.'/getClass75Service.php',
            'class76' => __DIR__.'/getClass76Service.php',
            'class77' => __DIR__.'/getClass77Service.php',
            'class78' => __DIR__.'/getClass78Service.php',
            'class79' => __DIR__.'/getClass79Service.php',
            'class8' => __DIR__.'/getClass8Service.php',
            'class80' => __DIR__.'/getClass80Service.php',
            'class81' => __DIR__.'/getClass81Service.php',
            'class82' => __DIR__.'/getClass82Service.php',
            'class83' => __DIR__.'/getClass83Service.php',
            'class84' => __DIR__.'/getClass84Service.php',
            'class85' => __DIR__.'/getClass85Service.php',
            'class86' => __DIR__.'/getClass86Service.php',
            'class87' => __DIR__.'/getClass87Service.php',
            'class88' => __DIR__.'/getClass88Service.php',
            'class89' => __DIR__.'/getClass89Service.php',
            'class9' => __DIR__.'/getClass9Service.php',
            'class90' => __DIR__.'/getClass90Service.php',
            'class91' => __DIR__.'/getClass91Service.php',
            'class92' => __DIR__.'/getClass92Service.php',
            'class93' => __DIR__.'/getClass93Service.php',
            'class94' => __DIR__.'/getClass94Service.php',
            'class95' => __DIR__.'/getClass95Service.php',
            'class96' => __DIR__.'/getClass96Service.php',
            'class97' => __DIR__.'/getClass97Service.php',
            'class98' => __DIR__.'/getClass98Service.php',
            'class99' => __DIR__.'/getClass99Service.php',
        );
        $this->privates = array(
            'class1' => true,
            'class10' => true,
            'class100' => true,
            'class11' => true,
            'class12' => true,
            'class13' => true,
            'class14' => true,
            'class15' => true,
            'class16' => true,
            'class17' => true,
            'class18' => true,
            'class19' => true,
            'class2' => true,
            'class20' => true,
            'class21' => true,
            'class22' => true,
            'class23' => true,
            'class24' => true,
            'class25' => true,
            'class26' => true,
            'class27' => true,
            'class28' => true,
            'class29' => true,
            'class3' => true,
            'class30' => true,
            'class31' => true,
            'class32' => true,
            'class33' => true,
            'class34' => true,
            'class35' => true,
            'class36' => true,
            'class37' => true,
            'class38' => true,
            'class39' => true,
            'class4' => true,
            'class40' => true,
            'class41' => true,
            'class42' => true,
            'class43' => true,
            'class44' => true,
            'class45' => true,
            'class46' => true,
            'class47' => true,
            'class48' => true,
            'class49' => true,
            'class5' => true,
            'class50' => true,
            'class51' => true,
            'class52' => true,
            'class53' => true,
            'class54' => true,
            'class55' => true,
            'class56' => true,
            'class57' => true,
            'class58' => true,
            'class59' => true,
            'class6' => true,
            'class60' => true,
            'class61' => true,
            'class62' => true,
            'class63' => true,
            'class64' => true,
            'class65' => true,
            'class66' => true,
            'class67' => true,
            'class68' => true,
            'class69' => true,
            'class7' => true,
            'class70' => true,
            'class71' => true,
            'class72' => true,
            'class73' => true,
            'class74' => true,
            'class75' => true,
            'class76' => true,
            'class77' => true,
            'class78' => true,
            'class79' => true,
            'class8' => true,
            'class80' => true,
            'class81' => true,
            'class82' => true,
            'class83' => true,
            'class84' => true,
            'class85' => true,
            'class86' => true,
            'class87' => true,
            'class88' => true,
            'class89' => true,
            'class9' => true,
            'class90' => true,
            'class91' => true,
            'class92' => true,
            'class93' => true,
            'class94' => true,
            'class95' => true,
            'class96' => true,
            'class97' => true,
            'class98' => true,
            'class99' => true,
        );

        $this->aliases = array();
    }

    /*
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    /*
     * {@inheritdoc}
     */
    public function isCompiled()
    {
        return true;
    }

    /*
     * {@inheritdoc}
     */
    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since version 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    /*
     * {@inheritdoc}
     */
    protected function load($file, $lazyLoad = true)
    {
        return require $file;
    }
}
