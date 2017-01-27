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
class CompiledSingletonContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /*
     * Constructor.
     */
    public function __construct()
    {
        $this->services = array();
        $this->methodMap = array(
            'class1' => 'getClass1Service',
            'class10' => 'getClass10Service',
            'class100' => 'getClass100Service',
            'class11' => 'getClass11Service',
            'class12' => 'getClass12Service',
            'class13' => 'getClass13Service',
            'class14' => 'getClass14Service',
            'class15' => 'getClass15Service',
            'class16' => 'getClass16Service',
            'class17' => 'getClass17Service',
            'class18' => 'getClass18Service',
            'class19' => 'getClass19Service',
            'class2' => 'getClass2Service',
            'class20' => 'getClass20Service',
            'class21' => 'getClass21Service',
            'class22' => 'getClass22Service',
            'class23' => 'getClass23Service',
            'class24' => 'getClass24Service',
            'class25' => 'getClass25Service',
            'class26' => 'getClass26Service',
            'class27' => 'getClass27Service',
            'class28' => 'getClass28Service',
            'class29' => 'getClass29Service',
            'class3' => 'getClass3Service',
            'class30' => 'getClass30Service',
            'class31' => 'getClass31Service',
            'class32' => 'getClass32Service',
            'class33' => 'getClass33Service',
            'class34' => 'getClass34Service',
            'class35' => 'getClass35Service',
            'class36' => 'getClass36Service',
            'class37' => 'getClass37Service',
            'class38' => 'getClass38Service',
            'class39' => 'getClass39Service',
            'class4' => 'getClass4Service',
            'class40' => 'getClass40Service',
            'class41' => 'getClass41Service',
            'class42' => 'getClass42Service',
            'class43' => 'getClass43Service',
            'class44' => 'getClass44Service',
            'class45' => 'getClass45Service',
            'class46' => 'getClass46Service',
            'class47' => 'getClass47Service',
            'class48' => 'getClass48Service',
            'class49' => 'getClass49Service',
            'class5' => 'getClass5Service',
            'class50' => 'getClass50Service',
            'class51' => 'getClass51Service',
            'class52' => 'getClass52Service',
            'class53' => 'getClass53Service',
            'class54' => 'getClass54Service',
            'class55' => 'getClass55Service',
            'class56' => 'getClass56Service',
            'class57' => 'getClass57Service',
            'class58' => 'getClass58Service',
            'class59' => 'getClass59Service',
            'class6' => 'getClass6Service',
            'class60' => 'getClass60Service',
            'class61' => 'getClass61Service',
            'class62' => 'getClass62Service',
            'class63' => 'getClass63Service',
            'class64' => 'getClass64Service',
            'class65' => 'getClass65Service',
            'class66' => 'getClass66Service',
            'class67' => 'getClass67Service',
            'class68' => 'getClass68Service',
            'class69' => 'getClass69Service',
            'class7' => 'getClass7Service',
            'class70' => 'getClass70Service',
            'class71' => 'getClass71Service',
            'class72' => 'getClass72Service',
            'class73' => 'getClass73Service',
            'class74' => 'getClass74Service',
            'class75' => 'getClass75Service',
            'class76' => 'getClass76Service',
            'class77' => 'getClass77Service',
            'class78' => 'getClass78Service',
            'class79' => 'getClass79Service',
            'class8' => 'getClass8Service',
            'class80' => 'getClass80Service',
            'class81' => 'getClass81Service',
            'class82' => 'getClass82Service',
            'class83' => 'getClass83Service',
            'class84' => 'getClass84Service',
            'class85' => 'getClass85Service',
            'class86' => 'getClass86Service',
            'class87' => 'getClass87Service',
            'class88' => 'getClass88Service',
            'class89' => 'getClass89Service',
            'class9' => 'getClass9Service',
            'class90' => 'getClass90Service',
            'class91' => 'getClass91Service',
            'class92' => 'getClass92Service',
            'class93' => 'getClass93Service',
            'class94' => 'getClass94Service',
            'class95' => 'getClass95Service',
            'class96' => 'getClass96Service',
            'class97' => 'getClass97Service',
            'class98' => 'getClass98Service',
            'class99' => 'getClass99Service',
        );

        $this->aliases = array();
    }

    /*
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }

    /*
     * {@inheritdoc}
     */
    public function isFrozen()
    {
        return true;
    }

    /*
     * Gets the 'class1' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class1 A DiContainerBenchmarks\Fixture\Class1 instance
     */
    protected function getClass1Service()
    {
        return $this->services['class1'] = new \DiContainerBenchmarks\Fixture\Class1();
    }

    /*
     * Gets the 'class10' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class10 A DiContainerBenchmarks\Fixture\Class10 instance
     */
    protected function getClass10Service()
    {
        return $this->services['class10'] = new \DiContainerBenchmarks\Fixture\Class10(${($_ = isset($this->services['class9']) ? $this->services['class9'] : $this->get('class9')) && false ?: '_'});
    }

    /*
     * Gets the 'class100' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class100 A DiContainerBenchmarks\Fixture\Class100 instance
     */
    protected function getClass100Service()
    {
        return $this->services['class100'] = new \DiContainerBenchmarks\Fixture\Class100(${($_ = isset($this->services['class99']) ? $this->services['class99'] : $this->get('class99')) && false ?: '_'});
    }

    /*
     * Gets the 'class11' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class11 A DiContainerBenchmarks\Fixture\Class11 instance
     */
    protected function getClass11Service()
    {
        return $this->services['class11'] = new \DiContainerBenchmarks\Fixture\Class11(${($_ = isset($this->services['class10']) ? $this->services['class10'] : $this->get('class10')) && false ?: '_'});
    }

    /*
     * Gets the 'class12' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class12 A DiContainerBenchmarks\Fixture\Class12 instance
     */
    protected function getClass12Service()
    {
        return $this->services['class12'] = new \DiContainerBenchmarks\Fixture\Class12(${($_ = isset($this->services['class11']) ? $this->services['class11'] : $this->get('class11')) && false ?: '_'});
    }

    /*
     * Gets the 'class13' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class13 A DiContainerBenchmarks\Fixture\Class13 instance
     */
    protected function getClass13Service()
    {
        return $this->services['class13'] = new \DiContainerBenchmarks\Fixture\Class13(${($_ = isset($this->services['class12']) ? $this->services['class12'] : $this->get('class12')) && false ?: '_'});
    }

    /*
     * Gets the 'class14' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class14 A DiContainerBenchmarks\Fixture\Class14 instance
     */
    protected function getClass14Service()
    {
        return $this->services['class14'] = new \DiContainerBenchmarks\Fixture\Class14(${($_ = isset($this->services['class13']) ? $this->services['class13'] : $this->get('class13')) && false ?: '_'});
    }

    /*
     * Gets the 'class15' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class15 A DiContainerBenchmarks\Fixture\Class15 instance
     */
    protected function getClass15Service()
    {
        return $this->services['class15'] = new \DiContainerBenchmarks\Fixture\Class15(${($_ = isset($this->services['class14']) ? $this->services['class14'] : $this->get('class14')) && false ?: '_'});
    }

    /*
     * Gets the 'class16' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class16 A DiContainerBenchmarks\Fixture\Class16 instance
     */
    protected function getClass16Service()
    {
        return $this->services['class16'] = new \DiContainerBenchmarks\Fixture\Class16(${($_ = isset($this->services['class15']) ? $this->services['class15'] : $this->get('class15')) && false ?: '_'});
    }

    /*
     * Gets the 'class17' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class17 A DiContainerBenchmarks\Fixture\Class17 instance
     */
    protected function getClass17Service()
    {
        return $this->services['class17'] = new \DiContainerBenchmarks\Fixture\Class17(${($_ = isset($this->services['class16']) ? $this->services['class16'] : $this->get('class16')) && false ?: '_'});
    }

    /*
     * Gets the 'class18' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class18 A DiContainerBenchmarks\Fixture\Class18 instance
     */
    protected function getClass18Service()
    {
        return $this->services['class18'] = new \DiContainerBenchmarks\Fixture\Class18(${($_ = isset($this->services['class17']) ? $this->services['class17'] : $this->get('class17')) && false ?: '_'});
    }

    /*
     * Gets the 'class19' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class19 A DiContainerBenchmarks\Fixture\Class19 instance
     */
    protected function getClass19Service()
    {
        return $this->services['class19'] = new \DiContainerBenchmarks\Fixture\Class19(${($_ = isset($this->services['class18']) ? $this->services['class18'] : $this->get('class18')) && false ?: '_'});
    }

    /*
     * Gets the 'class2' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class2 A DiContainerBenchmarks\Fixture\Class2 instance
     */
    protected function getClass2Service()
    {
        return $this->services['class2'] = new \DiContainerBenchmarks\Fixture\Class2(${($_ = isset($this->services['class1']) ? $this->services['class1'] : $this->get('class1')) && false ?: '_'});
    }

    /*
     * Gets the 'class20' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class20 A DiContainerBenchmarks\Fixture\Class20 instance
     */
    protected function getClass20Service()
    {
        return $this->services['class20'] = new \DiContainerBenchmarks\Fixture\Class20(${($_ = isset($this->services['class19']) ? $this->services['class19'] : $this->get('class19')) && false ?: '_'});
    }

    /*
     * Gets the 'class21' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class21 A DiContainerBenchmarks\Fixture\Class21 instance
     */
    protected function getClass21Service()
    {
        return $this->services['class21'] = new \DiContainerBenchmarks\Fixture\Class21(${($_ = isset($this->services['class20']) ? $this->services['class20'] : $this->get('class20')) && false ?: '_'});
    }

    /*
     * Gets the 'class22' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class22 A DiContainerBenchmarks\Fixture\Class22 instance
     */
    protected function getClass22Service()
    {
        return $this->services['class22'] = new \DiContainerBenchmarks\Fixture\Class22(${($_ = isset($this->services['class21']) ? $this->services['class21'] : $this->get('class21')) && false ?: '_'});
    }

    /*
     * Gets the 'class23' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class23 A DiContainerBenchmarks\Fixture\Class23 instance
     */
    protected function getClass23Service()
    {
        return $this->services['class23'] = new \DiContainerBenchmarks\Fixture\Class23(${($_ = isset($this->services['class22']) ? $this->services['class22'] : $this->get('class22')) && false ?: '_'});
    }

    /*
     * Gets the 'class24' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class24 A DiContainerBenchmarks\Fixture\Class24 instance
     */
    protected function getClass24Service()
    {
        return $this->services['class24'] = new \DiContainerBenchmarks\Fixture\Class24(${($_ = isset($this->services['class23']) ? $this->services['class23'] : $this->get('class23')) && false ?: '_'});
    }

    /*
     * Gets the 'class25' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class25 A DiContainerBenchmarks\Fixture\Class25 instance
     */
    protected function getClass25Service()
    {
        return $this->services['class25'] = new \DiContainerBenchmarks\Fixture\Class25(${($_ = isset($this->services['class24']) ? $this->services['class24'] : $this->get('class24')) && false ?: '_'});
    }

    /*
     * Gets the 'class26' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class26 A DiContainerBenchmarks\Fixture\Class26 instance
     */
    protected function getClass26Service()
    {
        return $this->services['class26'] = new \DiContainerBenchmarks\Fixture\Class26(${($_ = isset($this->services['class25']) ? $this->services['class25'] : $this->get('class25')) && false ?: '_'});
    }

    /*
     * Gets the 'class27' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class27 A DiContainerBenchmarks\Fixture\Class27 instance
     */
    protected function getClass27Service()
    {
        return $this->services['class27'] = new \DiContainerBenchmarks\Fixture\Class27(${($_ = isset($this->services['class26']) ? $this->services['class26'] : $this->get('class26')) && false ?: '_'});
    }

    /*
     * Gets the 'class28' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class28 A DiContainerBenchmarks\Fixture\Class28 instance
     */
    protected function getClass28Service()
    {
        return $this->services['class28'] = new \DiContainerBenchmarks\Fixture\Class28(${($_ = isset($this->services['class27']) ? $this->services['class27'] : $this->get('class27')) && false ?: '_'});
    }

    /*
     * Gets the 'class29' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class29 A DiContainerBenchmarks\Fixture\Class29 instance
     */
    protected function getClass29Service()
    {
        return $this->services['class29'] = new \DiContainerBenchmarks\Fixture\Class29(${($_ = isset($this->services['class28']) ? $this->services['class28'] : $this->get('class28')) && false ?: '_'});
    }

    /*
     * Gets the 'class3' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class3 A DiContainerBenchmarks\Fixture\Class3 instance
     */
    protected function getClass3Service()
    {
        return $this->services['class3'] = new \DiContainerBenchmarks\Fixture\Class3(${($_ = isset($this->services['class2']) ? $this->services['class2'] : $this->get('class2')) && false ?: '_'});
    }

    /*
     * Gets the 'class30' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class30 A DiContainerBenchmarks\Fixture\Class30 instance
     */
    protected function getClass30Service()
    {
        return $this->services['class30'] = new \DiContainerBenchmarks\Fixture\Class30(${($_ = isset($this->services['class29']) ? $this->services['class29'] : $this->get('class29')) && false ?: '_'});
    }

    /*
     * Gets the 'class31' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class31 A DiContainerBenchmarks\Fixture\Class31 instance
     */
    protected function getClass31Service()
    {
        return $this->services['class31'] = new \DiContainerBenchmarks\Fixture\Class31(${($_ = isset($this->services['class30']) ? $this->services['class30'] : $this->get('class30')) && false ?: '_'});
    }

    /*
     * Gets the 'class32' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class32 A DiContainerBenchmarks\Fixture\Class32 instance
     */
    protected function getClass32Service()
    {
        return $this->services['class32'] = new \DiContainerBenchmarks\Fixture\Class32(${($_ = isset($this->services['class31']) ? $this->services['class31'] : $this->get('class31')) && false ?: '_'});
    }

    /*
     * Gets the 'class33' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class33 A DiContainerBenchmarks\Fixture\Class33 instance
     */
    protected function getClass33Service()
    {
        return $this->services['class33'] = new \DiContainerBenchmarks\Fixture\Class33(${($_ = isset($this->services['class32']) ? $this->services['class32'] : $this->get('class32')) && false ?: '_'});
    }

    /*
     * Gets the 'class34' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class34 A DiContainerBenchmarks\Fixture\Class34 instance
     */
    protected function getClass34Service()
    {
        return $this->services['class34'] = new \DiContainerBenchmarks\Fixture\Class34(${($_ = isset($this->services['class33']) ? $this->services['class33'] : $this->get('class33')) && false ?: '_'});
    }

    /*
     * Gets the 'class35' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class35 A DiContainerBenchmarks\Fixture\Class35 instance
     */
    protected function getClass35Service()
    {
        return $this->services['class35'] = new \DiContainerBenchmarks\Fixture\Class35(${($_ = isset($this->services['class34']) ? $this->services['class34'] : $this->get('class34')) && false ?: '_'});
    }

    /*
     * Gets the 'class36' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class36 A DiContainerBenchmarks\Fixture\Class36 instance
     */
    protected function getClass36Service()
    {
        return $this->services['class36'] = new \DiContainerBenchmarks\Fixture\Class36(${($_ = isset($this->services['class35']) ? $this->services['class35'] : $this->get('class35')) && false ?: '_'});
    }

    /*
     * Gets the 'class37' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class37 A DiContainerBenchmarks\Fixture\Class37 instance
     */
    protected function getClass37Service()
    {
        return $this->services['class37'] = new \DiContainerBenchmarks\Fixture\Class37(${($_ = isset($this->services['class36']) ? $this->services['class36'] : $this->get('class36')) && false ?: '_'});
    }

    /*
     * Gets the 'class38' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class38 A DiContainerBenchmarks\Fixture\Class38 instance
     */
    protected function getClass38Service()
    {
        return $this->services['class38'] = new \DiContainerBenchmarks\Fixture\Class38(${($_ = isset($this->services['class37']) ? $this->services['class37'] : $this->get('class37')) && false ?: '_'});
    }

    /*
     * Gets the 'class39' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class39 A DiContainerBenchmarks\Fixture\Class39 instance
     */
    protected function getClass39Service()
    {
        return $this->services['class39'] = new \DiContainerBenchmarks\Fixture\Class39(${($_ = isset($this->services['class38']) ? $this->services['class38'] : $this->get('class38')) && false ?: '_'});
    }

    /*
     * Gets the 'class4' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class4 A DiContainerBenchmarks\Fixture\Class4 instance
     */
    protected function getClass4Service()
    {
        return $this->services['class4'] = new \DiContainerBenchmarks\Fixture\Class4(${($_ = isset($this->services['class3']) ? $this->services['class3'] : $this->get('class3')) && false ?: '_'});
    }

    /*
     * Gets the 'class40' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class40 A DiContainerBenchmarks\Fixture\Class40 instance
     */
    protected function getClass40Service()
    {
        return $this->services['class40'] = new \DiContainerBenchmarks\Fixture\Class40(${($_ = isset($this->services['class39']) ? $this->services['class39'] : $this->get('class39')) && false ?: '_'});
    }

    /*
     * Gets the 'class41' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class41 A DiContainerBenchmarks\Fixture\Class41 instance
     */
    protected function getClass41Service()
    {
        return $this->services['class41'] = new \DiContainerBenchmarks\Fixture\Class41(${($_ = isset($this->services['class40']) ? $this->services['class40'] : $this->get('class40')) && false ?: '_'});
    }

    /*
     * Gets the 'class42' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class42 A DiContainerBenchmarks\Fixture\Class42 instance
     */
    protected function getClass42Service()
    {
        return $this->services['class42'] = new \DiContainerBenchmarks\Fixture\Class42(${($_ = isset($this->services['class41']) ? $this->services['class41'] : $this->get('class41')) && false ?: '_'});
    }

    /*
     * Gets the 'class43' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class43 A DiContainerBenchmarks\Fixture\Class43 instance
     */
    protected function getClass43Service()
    {
        return $this->services['class43'] = new \DiContainerBenchmarks\Fixture\Class43(${($_ = isset($this->services['class42']) ? $this->services['class42'] : $this->get('class42')) && false ?: '_'});
    }

    /*
     * Gets the 'class44' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class44 A DiContainerBenchmarks\Fixture\Class44 instance
     */
    protected function getClass44Service()
    {
        return $this->services['class44'] = new \DiContainerBenchmarks\Fixture\Class44(${($_ = isset($this->services['class43']) ? $this->services['class43'] : $this->get('class43')) && false ?: '_'});
    }

    /*
     * Gets the 'class45' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class45 A DiContainerBenchmarks\Fixture\Class45 instance
     */
    protected function getClass45Service()
    {
        return $this->services['class45'] = new \DiContainerBenchmarks\Fixture\Class45(${($_ = isset($this->services['class44']) ? $this->services['class44'] : $this->get('class44')) && false ?: '_'});
    }

    /*
     * Gets the 'class46' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class46 A DiContainerBenchmarks\Fixture\Class46 instance
     */
    protected function getClass46Service()
    {
        return $this->services['class46'] = new \DiContainerBenchmarks\Fixture\Class46(${($_ = isset($this->services['class45']) ? $this->services['class45'] : $this->get('class45')) && false ?: '_'});
    }

    /*
     * Gets the 'class47' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class47 A DiContainerBenchmarks\Fixture\Class47 instance
     */
    protected function getClass47Service()
    {
        return $this->services['class47'] = new \DiContainerBenchmarks\Fixture\Class47(${($_ = isset($this->services['class46']) ? $this->services['class46'] : $this->get('class46')) && false ?: '_'});
    }

    /*
     * Gets the 'class48' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class48 A DiContainerBenchmarks\Fixture\Class48 instance
     */
    protected function getClass48Service()
    {
        return $this->services['class48'] = new \DiContainerBenchmarks\Fixture\Class48(${($_ = isset($this->services['class47']) ? $this->services['class47'] : $this->get('class47')) && false ?: '_'});
    }

    /*
     * Gets the 'class49' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class49 A DiContainerBenchmarks\Fixture\Class49 instance
     */
    protected function getClass49Service()
    {
        return $this->services['class49'] = new \DiContainerBenchmarks\Fixture\Class49(${($_ = isset($this->services['class48']) ? $this->services['class48'] : $this->get('class48')) && false ?: '_'});
    }

    /*
     * Gets the 'class5' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class5 A DiContainerBenchmarks\Fixture\Class5 instance
     */
    protected function getClass5Service()
    {
        return $this->services['class5'] = new \DiContainerBenchmarks\Fixture\Class5(${($_ = isset($this->services['class4']) ? $this->services['class4'] : $this->get('class4')) && false ?: '_'});
    }

    /*
     * Gets the 'class50' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class50 A DiContainerBenchmarks\Fixture\Class50 instance
     */
    protected function getClass50Service()
    {
        return $this->services['class50'] = new \DiContainerBenchmarks\Fixture\Class50(${($_ = isset($this->services['class49']) ? $this->services['class49'] : $this->get('class49')) && false ?: '_'});
    }

    /*
     * Gets the 'class51' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class51 A DiContainerBenchmarks\Fixture\Class51 instance
     */
    protected function getClass51Service()
    {
        return $this->services['class51'] = new \DiContainerBenchmarks\Fixture\Class51(${($_ = isset($this->services['class50']) ? $this->services['class50'] : $this->get('class50')) && false ?: '_'});
    }

    /*
     * Gets the 'class52' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class52 A DiContainerBenchmarks\Fixture\Class52 instance
     */
    protected function getClass52Service()
    {
        return $this->services['class52'] = new \DiContainerBenchmarks\Fixture\Class52(${($_ = isset($this->services['class51']) ? $this->services['class51'] : $this->get('class51')) && false ?: '_'});
    }

    /*
     * Gets the 'class53' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class53 A DiContainerBenchmarks\Fixture\Class53 instance
     */
    protected function getClass53Service()
    {
        return $this->services['class53'] = new \DiContainerBenchmarks\Fixture\Class53(${($_ = isset($this->services['class52']) ? $this->services['class52'] : $this->get('class52')) && false ?: '_'});
    }

    /*
     * Gets the 'class54' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class54 A DiContainerBenchmarks\Fixture\Class54 instance
     */
    protected function getClass54Service()
    {
        return $this->services['class54'] = new \DiContainerBenchmarks\Fixture\Class54(${($_ = isset($this->services['class53']) ? $this->services['class53'] : $this->get('class53')) && false ?: '_'});
    }

    /*
     * Gets the 'class55' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class55 A DiContainerBenchmarks\Fixture\Class55 instance
     */
    protected function getClass55Service()
    {
        return $this->services['class55'] = new \DiContainerBenchmarks\Fixture\Class55(${($_ = isset($this->services['class54']) ? $this->services['class54'] : $this->get('class54')) && false ?: '_'});
    }

    /*
     * Gets the 'class56' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class56 A DiContainerBenchmarks\Fixture\Class56 instance
     */
    protected function getClass56Service()
    {
        return $this->services['class56'] = new \DiContainerBenchmarks\Fixture\Class56(${($_ = isset($this->services['class55']) ? $this->services['class55'] : $this->get('class55')) && false ?: '_'});
    }

    /*
     * Gets the 'class57' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class57 A DiContainerBenchmarks\Fixture\Class57 instance
     */
    protected function getClass57Service()
    {
        return $this->services['class57'] = new \DiContainerBenchmarks\Fixture\Class57(${($_ = isset($this->services['class56']) ? $this->services['class56'] : $this->get('class56')) && false ?: '_'});
    }

    /*
     * Gets the 'class58' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class58 A DiContainerBenchmarks\Fixture\Class58 instance
     */
    protected function getClass58Service()
    {
        return $this->services['class58'] = new \DiContainerBenchmarks\Fixture\Class58(${($_ = isset($this->services['class57']) ? $this->services['class57'] : $this->get('class57')) && false ?: '_'});
    }

    /*
     * Gets the 'class59' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class59 A DiContainerBenchmarks\Fixture\Class59 instance
     */
    protected function getClass59Service()
    {
        return $this->services['class59'] = new \DiContainerBenchmarks\Fixture\Class59(${($_ = isset($this->services['class58']) ? $this->services['class58'] : $this->get('class58')) && false ?: '_'});
    }

    /*
     * Gets the 'class6' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class6 A DiContainerBenchmarks\Fixture\Class6 instance
     */
    protected function getClass6Service()
    {
        return $this->services['class6'] = new \DiContainerBenchmarks\Fixture\Class6(${($_ = isset($this->services['class5']) ? $this->services['class5'] : $this->get('class5')) && false ?: '_'});
    }

    /*
     * Gets the 'class60' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class60 A DiContainerBenchmarks\Fixture\Class60 instance
     */
    protected function getClass60Service()
    {
        return $this->services['class60'] = new \DiContainerBenchmarks\Fixture\Class60(${($_ = isset($this->services['class59']) ? $this->services['class59'] : $this->get('class59')) && false ?: '_'});
    }

    /*
     * Gets the 'class61' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class61 A DiContainerBenchmarks\Fixture\Class61 instance
     */
    protected function getClass61Service()
    {
        return $this->services['class61'] = new \DiContainerBenchmarks\Fixture\Class61(${($_ = isset($this->services['class60']) ? $this->services['class60'] : $this->get('class60')) && false ?: '_'});
    }

    /*
     * Gets the 'class62' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class62 A DiContainerBenchmarks\Fixture\Class62 instance
     */
    protected function getClass62Service()
    {
        return $this->services['class62'] = new \DiContainerBenchmarks\Fixture\Class62(${($_ = isset($this->services['class61']) ? $this->services['class61'] : $this->get('class61')) && false ?: '_'});
    }

    /*
     * Gets the 'class63' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class63 A DiContainerBenchmarks\Fixture\Class63 instance
     */
    protected function getClass63Service()
    {
        return $this->services['class63'] = new \DiContainerBenchmarks\Fixture\Class63(${($_ = isset($this->services['class62']) ? $this->services['class62'] : $this->get('class62')) && false ?: '_'});
    }

    /*
     * Gets the 'class64' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class64 A DiContainerBenchmarks\Fixture\Class64 instance
     */
    protected function getClass64Service()
    {
        return $this->services['class64'] = new \DiContainerBenchmarks\Fixture\Class64(${($_ = isset($this->services['class63']) ? $this->services['class63'] : $this->get('class63')) && false ?: '_'});
    }

    /*
     * Gets the 'class65' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class65 A DiContainerBenchmarks\Fixture\Class65 instance
     */
    protected function getClass65Service()
    {
        return $this->services['class65'] = new \DiContainerBenchmarks\Fixture\Class65(${($_ = isset($this->services['class64']) ? $this->services['class64'] : $this->get('class64')) && false ?: '_'});
    }

    /*
     * Gets the 'class66' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class66 A DiContainerBenchmarks\Fixture\Class66 instance
     */
    protected function getClass66Service()
    {
        return $this->services['class66'] = new \DiContainerBenchmarks\Fixture\Class66(${($_ = isset($this->services['class65']) ? $this->services['class65'] : $this->get('class65')) && false ?: '_'});
    }

    /*
     * Gets the 'class67' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class67 A DiContainerBenchmarks\Fixture\Class67 instance
     */
    protected function getClass67Service()
    {
        return $this->services['class67'] = new \DiContainerBenchmarks\Fixture\Class67(${($_ = isset($this->services['class66']) ? $this->services['class66'] : $this->get('class66')) && false ?: '_'});
    }

    /*
     * Gets the 'class68' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class68 A DiContainerBenchmarks\Fixture\Class68 instance
     */
    protected function getClass68Service()
    {
        return $this->services['class68'] = new \DiContainerBenchmarks\Fixture\Class68(${($_ = isset($this->services['class67']) ? $this->services['class67'] : $this->get('class67')) && false ?: '_'});
    }

    /*
     * Gets the 'class69' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class69 A DiContainerBenchmarks\Fixture\Class69 instance
     */
    protected function getClass69Service()
    {
        return $this->services['class69'] = new \DiContainerBenchmarks\Fixture\Class69(${($_ = isset($this->services['class68']) ? $this->services['class68'] : $this->get('class68')) && false ?: '_'});
    }

    /*
     * Gets the 'class7' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class7 A DiContainerBenchmarks\Fixture\Class7 instance
     */
    protected function getClass7Service()
    {
        return $this->services['class7'] = new \DiContainerBenchmarks\Fixture\Class7(${($_ = isset($this->services['class6']) ? $this->services['class6'] : $this->get('class6')) && false ?: '_'});
    }

    /*
     * Gets the 'class70' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class70 A DiContainerBenchmarks\Fixture\Class70 instance
     */
    protected function getClass70Service()
    {
        return $this->services['class70'] = new \DiContainerBenchmarks\Fixture\Class70(${($_ = isset($this->services['class69']) ? $this->services['class69'] : $this->get('class69')) && false ?: '_'});
    }

    /*
     * Gets the 'class71' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class71 A DiContainerBenchmarks\Fixture\Class71 instance
     */
    protected function getClass71Service()
    {
        return $this->services['class71'] = new \DiContainerBenchmarks\Fixture\Class71(${($_ = isset($this->services['class70']) ? $this->services['class70'] : $this->get('class70')) && false ?: '_'});
    }

    /*
     * Gets the 'class72' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class72 A DiContainerBenchmarks\Fixture\Class72 instance
     */
    protected function getClass72Service()
    {
        return $this->services['class72'] = new \DiContainerBenchmarks\Fixture\Class72(${($_ = isset($this->services['class71']) ? $this->services['class71'] : $this->get('class71')) && false ?: '_'});
    }

    /*
     * Gets the 'class73' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class73 A DiContainerBenchmarks\Fixture\Class73 instance
     */
    protected function getClass73Service()
    {
        return $this->services['class73'] = new \DiContainerBenchmarks\Fixture\Class73(${($_ = isset($this->services['class72']) ? $this->services['class72'] : $this->get('class72')) && false ?: '_'});
    }

    /*
     * Gets the 'class74' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class74 A DiContainerBenchmarks\Fixture\Class74 instance
     */
    protected function getClass74Service()
    {
        return $this->services['class74'] = new \DiContainerBenchmarks\Fixture\Class74(${($_ = isset($this->services['class73']) ? $this->services['class73'] : $this->get('class73')) && false ?: '_'});
    }

    /*
     * Gets the 'class75' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class75 A DiContainerBenchmarks\Fixture\Class75 instance
     */
    protected function getClass75Service()
    {
        return $this->services['class75'] = new \DiContainerBenchmarks\Fixture\Class75(${($_ = isset($this->services['class74']) ? $this->services['class74'] : $this->get('class74')) && false ?: '_'});
    }

    /*
     * Gets the 'class76' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class76 A DiContainerBenchmarks\Fixture\Class76 instance
     */
    protected function getClass76Service()
    {
        return $this->services['class76'] = new \DiContainerBenchmarks\Fixture\Class76(${($_ = isset($this->services['class75']) ? $this->services['class75'] : $this->get('class75')) && false ?: '_'});
    }

    /*
     * Gets the 'class77' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class77 A DiContainerBenchmarks\Fixture\Class77 instance
     */
    protected function getClass77Service()
    {
        return $this->services['class77'] = new \DiContainerBenchmarks\Fixture\Class77(${($_ = isset($this->services['class76']) ? $this->services['class76'] : $this->get('class76')) && false ?: '_'});
    }

    /*
     * Gets the 'class78' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class78 A DiContainerBenchmarks\Fixture\Class78 instance
     */
    protected function getClass78Service()
    {
        return $this->services['class78'] = new \DiContainerBenchmarks\Fixture\Class78(${($_ = isset($this->services['class77']) ? $this->services['class77'] : $this->get('class77')) && false ?: '_'});
    }

    /*
     * Gets the 'class79' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class79 A DiContainerBenchmarks\Fixture\Class79 instance
     */
    protected function getClass79Service()
    {
        return $this->services['class79'] = new \DiContainerBenchmarks\Fixture\Class79(${($_ = isset($this->services['class78']) ? $this->services['class78'] : $this->get('class78')) && false ?: '_'});
    }

    /*
     * Gets the 'class8' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class8 A DiContainerBenchmarks\Fixture\Class8 instance
     */
    protected function getClass8Service()
    {
        return $this->services['class8'] = new \DiContainerBenchmarks\Fixture\Class8(${($_ = isset($this->services['class7']) ? $this->services['class7'] : $this->get('class7')) && false ?: '_'});
    }

    /*
     * Gets the 'class80' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class80 A DiContainerBenchmarks\Fixture\Class80 instance
     */
    protected function getClass80Service()
    {
        return $this->services['class80'] = new \DiContainerBenchmarks\Fixture\Class80(${($_ = isset($this->services['class79']) ? $this->services['class79'] : $this->get('class79')) && false ?: '_'});
    }

    /*
     * Gets the 'class81' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class81 A DiContainerBenchmarks\Fixture\Class81 instance
     */
    protected function getClass81Service()
    {
        return $this->services['class81'] = new \DiContainerBenchmarks\Fixture\Class81(${($_ = isset($this->services['class80']) ? $this->services['class80'] : $this->get('class80')) && false ?: '_'});
    }

    /*
     * Gets the 'class82' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class82 A DiContainerBenchmarks\Fixture\Class82 instance
     */
    protected function getClass82Service()
    {
        return $this->services['class82'] = new \DiContainerBenchmarks\Fixture\Class82(${($_ = isset($this->services['class81']) ? $this->services['class81'] : $this->get('class81')) && false ?: '_'});
    }

    /*
     * Gets the 'class83' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class83 A DiContainerBenchmarks\Fixture\Class83 instance
     */
    protected function getClass83Service()
    {
        return $this->services['class83'] = new \DiContainerBenchmarks\Fixture\Class83(${($_ = isset($this->services['class82']) ? $this->services['class82'] : $this->get('class82')) && false ?: '_'});
    }

    /*
     * Gets the 'class84' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class84 A DiContainerBenchmarks\Fixture\Class84 instance
     */
    protected function getClass84Service()
    {
        return $this->services['class84'] = new \DiContainerBenchmarks\Fixture\Class84(${($_ = isset($this->services['class83']) ? $this->services['class83'] : $this->get('class83')) && false ?: '_'});
    }

    /*
     * Gets the 'class85' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class85 A DiContainerBenchmarks\Fixture\Class85 instance
     */
    protected function getClass85Service()
    {
        return $this->services['class85'] = new \DiContainerBenchmarks\Fixture\Class85(${($_ = isset($this->services['class84']) ? $this->services['class84'] : $this->get('class84')) && false ?: '_'});
    }

    /*
     * Gets the 'class86' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class86 A DiContainerBenchmarks\Fixture\Class86 instance
     */
    protected function getClass86Service()
    {
        return $this->services['class86'] = new \DiContainerBenchmarks\Fixture\Class86(${($_ = isset($this->services['class85']) ? $this->services['class85'] : $this->get('class85')) && false ?: '_'});
    }

    /*
     * Gets the 'class87' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class87 A DiContainerBenchmarks\Fixture\Class87 instance
     */
    protected function getClass87Service()
    {
        return $this->services['class87'] = new \DiContainerBenchmarks\Fixture\Class87(${($_ = isset($this->services['class86']) ? $this->services['class86'] : $this->get('class86')) && false ?: '_'});
    }

    /*
     * Gets the 'class88' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class88 A DiContainerBenchmarks\Fixture\Class88 instance
     */
    protected function getClass88Service()
    {
        return $this->services['class88'] = new \DiContainerBenchmarks\Fixture\Class88(${($_ = isset($this->services['class87']) ? $this->services['class87'] : $this->get('class87')) && false ?: '_'});
    }

    /*
     * Gets the 'class89' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class89 A DiContainerBenchmarks\Fixture\Class89 instance
     */
    protected function getClass89Service()
    {
        return $this->services['class89'] = new \DiContainerBenchmarks\Fixture\Class89(${($_ = isset($this->services['class88']) ? $this->services['class88'] : $this->get('class88')) && false ?: '_'});
    }

    /*
     * Gets the 'class9' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class9 A DiContainerBenchmarks\Fixture\Class9 instance
     */
    protected function getClass9Service()
    {
        return $this->services['class9'] = new \DiContainerBenchmarks\Fixture\Class9(${($_ = isset($this->services['class8']) ? $this->services['class8'] : $this->get('class8')) && false ?: '_'});
    }

    /*
     * Gets the 'class90' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class90 A DiContainerBenchmarks\Fixture\Class90 instance
     */
    protected function getClass90Service()
    {
        return $this->services['class90'] = new \DiContainerBenchmarks\Fixture\Class90(${($_ = isset($this->services['class89']) ? $this->services['class89'] : $this->get('class89')) && false ?: '_'});
    }

    /*
     * Gets the 'class91' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class91 A DiContainerBenchmarks\Fixture\Class91 instance
     */
    protected function getClass91Service()
    {
        return $this->services['class91'] = new \DiContainerBenchmarks\Fixture\Class91(${($_ = isset($this->services['class90']) ? $this->services['class90'] : $this->get('class90')) && false ?: '_'});
    }

    /*
     * Gets the 'class92' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class92 A DiContainerBenchmarks\Fixture\Class92 instance
     */
    protected function getClass92Service()
    {
        return $this->services['class92'] = new \DiContainerBenchmarks\Fixture\Class92(${($_ = isset($this->services['class91']) ? $this->services['class91'] : $this->get('class91')) && false ?: '_'});
    }

    /*
     * Gets the 'class93' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class93 A DiContainerBenchmarks\Fixture\Class93 instance
     */
    protected function getClass93Service()
    {
        return $this->services['class93'] = new \DiContainerBenchmarks\Fixture\Class93(${($_ = isset($this->services['class92']) ? $this->services['class92'] : $this->get('class92')) && false ?: '_'});
    }

    /*
     * Gets the 'class94' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class94 A DiContainerBenchmarks\Fixture\Class94 instance
     */
    protected function getClass94Service()
    {
        return $this->services['class94'] = new \DiContainerBenchmarks\Fixture\Class94(${($_ = isset($this->services['class93']) ? $this->services['class93'] : $this->get('class93')) && false ?: '_'});
    }

    /*
     * Gets the 'class95' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class95 A DiContainerBenchmarks\Fixture\Class95 instance
     */
    protected function getClass95Service()
    {
        return $this->services['class95'] = new \DiContainerBenchmarks\Fixture\Class95(${($_ = isset($this->services['class94']) ? $this->services['class94'] : $this->get('class94')) && false ?: '_'});
    }

    /*
     * Gets the 'class96' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class96 A DiContainerBenchmarks\Fixture\Class96 instance
     */
    protected function getClass96Service()
    {
        return $this->services['class96'] = new \DiContainerBenchmarks\Fixture\Class96(${($_ = isset($this->services['class95']) ? $this->services['class95'] : $this->get('class95')) && false ?: '_'});
    }

    /*
     * Gets the 'class97' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class97 A DiContainerBenchmarks\Fixture\Class97 instance
     */
    protected function getClass97Service()
    {
        return $this->services['class97'] = new \DiContainerBenchmarks\Fixture\Class97(${($_ = isset($this->services['class96']) ? $this->services['class96'] : $this->get('class96')) && false ?: '_'});
    }

    /*
     * Gets the 'class98' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class98 A DiContainerBenchmarks\Fixture\Class98 instance
     */
    protected function getClass98Service()
    {
        return $this->services['class98'] = new \DiContainerBenchmarks\Fixture\Class98(${($_ = isset($this->services['class97']) ? $this->services['class97'] : $this->get('class97')) && false ?: '_'});
    }

    /*
     * Gets the 'class99' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Class99 A DiContainerBenchmarks\Fixture\Class99 instance
     */
    protected function getClass99Service()
    {
        return $this->services['class99'] = new \DiContainerBenchmarks\Fixture\Class99(${($_ = isset($this->services['class98']) ? $this->services['class98'] : $this->get('class98')) && false ?: '_'});
    }
}
