<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Chubbyphp;

use Chubbyphp\Container\Container;
use Chubbyphp\Container\ContainerInterface;
use DiContainerBenchmarks\Container\ContainerAdapterInterface;
use DiContainerBenchmarks\Fixture\A\FixtureA1;
use DiContainerBenchmarks\Fixture\A\FixtureA10;
use DiContainerBenchmarks\Fixture\A\FixtureA100;
use DiContainerBenchmarks\Fixture\A\FixtureA11;
use DiContainerBenchmarks\Fixture\A\FixtureA12;
use DiContainerBenchmarks\Fixture\A\FixtureA13;
use DiContainerBenchmarks\Fixture\A\FixtureA14;
use DiContainerBenchmarks\Fixture\A\FixtureA15;
use DiContainerBenchmarks\Fixture\A\FixtureA16;
use DiContainerBenchmarks\Fixture\A\FixtureA17;
use DiContainerBenchmarks\Fixture\A\FixtureA18;
use DiContainerBenchmarks\Fixture\A\FixtureA19;
use DiContainerBenchmarks\Fixture\A\FixtureA2;
use DiContainerBenchmarks\Fixture\A\FixtureA20;
use DiContainerBenchmarks\Fixture\A\FixtureA21;
use DiContainerBenchmarks\Fixture\A\FixtureA22;
use DiContainerBenchmarks\Fixture\A\FixtureA23;
use DiContainerBenchmarks\Fixture\A\FixtureA24;
use DiContainerBenchmarks\Fixture\A\FixtureA25;
use DiContainerBenchmarks\Fixture\A\FixtureA26;
use DiContainerBenchmarks\Fixture\A\FixtureA27;
use DiContainerBenchmarks\Fixture\A\FixtureA28;
use DiContainerBenchmarks\Fixture\A\FixtureA29;
use DiContainerBenchmarks\Fixture\A\FixtureA3;
use DiContainerBenchmarks\Fixture\A\FixtureA30;
use DiContainerBenchmarks\Fixture\A\FixtureA31;
use DiContainerBenchmarks\Fixture\A\FixtureA32;
use DiContainerBenchmarks\Fixture\A\FixtureA33;
use DiContainerBenchmarks\Fixture\A\FixtureA34;
use DiContainerBenchmarks\Fixture\A\FixtureA35;
use DiContainerBenchmarks\Fixture\A\FixtureA36;
use DiContainerBenchmarks\Fixture\A\FixtureA37;
use DiContainerBenchmarks\Fixture\A\FixtureA38;
use DiContainerBenchmarks\Fixture\A\FixtureA39;
use DiContainerBenchmarks\Fixture\A\FixtureA4;
use DiContainerBenchmarks\Fixture\A\FixtureA40;
use DiContainerBenchmarks\Fixture\A\FixtureA41;
use DiContainerBenchmarks\Fixture\A\FixtureA42;
use DiContainerBenchmarks\Fixture\A\FixtureA43;
use DiContainerBenchmarks\Fixture\A\FixtureA44;
use DiContainerBenchmarks\Fixture\A\FixtureA45;
use DiContainerBenchmarks\Fixture\A\FixtureA46;
use DiContainerBenchmarks\Fixture\A\FixtureA47;
use DiContainerBenchmarks\Fixture\A\FixtureA48;
use DiContainerBenchmarks\Fixture\A\FixtureA49;
use DiContainerBenchmarks\Fixture\A\FixtureA5;
use DiContainerBenchmarks\Fixture\A\FixtureA50;
use DiContainerBenchmarks\Fixture\A\FixtureA51;
use DiContainerBenchmarks\Fixture\A\FixtureA52;
use DiContainerBenchmarks\Fixture\A\FixtureA53;
use DiContainerBenchmarks\Fixture\A\FixtureA54;
use DiContainerBenchmarks\Fixture\A\FixtureA55;
use DiContainerBenchmarks\Fixture\A\FixtureA56;
use DiContainerBenchmarks\Fixture\A\FixtureA57;
use DiContainerBenchmarks\Fixture\A\FixtureA58;
use DiContainerBenchmarks\Fixture\A\FixtureA59;
use DiContainerBenchmarks\Fixture\A\FixtureA6;
use DiContainerBenchmarks\Fixture\A\FixtureA60;
use DiContainerBenchmarks\Fixture\A\FixtureA61;
use DiContainerBenchmarks\Fixture\A\FixtureA62;
use DiContainerBenchmarks\Fixture\A\FixtureA63;
use DiContainerBenchmarks\Fixture\A\FixtureA64;
use DiContainerBenchmarks\Fixture\A\FixtureA65;
use DiContainerBenchmarks\Fixture\A\FixtureA66;
use DiContainerBenchmarks\Fixture\A\FixtureA67;
use DiContainerBenchmarks\Fixture\A\FixtureA68;
use DiContainerBenchmarks\Fixture\A\FixtureA69;
use DiContainerBenchmarks\Fixture\A\FixtureA7;
use DiContainerBenchmarks\Fixture\A\FixtureA70;
use DiContainerBenchmarks\Fixture\A\FixtureA71;
use DiContainerBenchmarks\Fixture\A\FixtureA72;
use DiContainerBenchmarks\Fixture\A\FixtureA73;
use DiContainerBenchmarks\Fixture\A\FixtureA74;
use DiContainerBenchmarks\Fixture\A\FixtureA75;
use DiContainerBenchmarks\Fixture\A\FixtureA76;
use DiContainerBenchmarks\Fixture\A\FixtureA77;
use DiContainerBenchmarks\Fixture\A\FixtureA78;
use DiContainerBenchmarks\Fixture\A\FixtureA79;
use DiContainerBenchmarks\Fixture\A\FixtureA8;
use DiContainerBenchmarks\Fixture\A\FixtureA80;
use DiContainerBenchmarks\Fixture\A\FixtureA81;
use DiContainerBenchmarks\Fixture\A\FixtureA82;
use DiContainerBenchmarks\Fixture\A\FixtureA83;
use DiContainerBenchmarks\Fixture\A\FixtureA84;
use DiContainerBenchmarks\Fixture\A\FixtureA85;
use DiContainerBenchmarks\Fixture\A\FixtureA86;
use DiContainerBenchmarks\Fixture\A\FixtureA87;
use DiContainerBenchmarks\Fixture\A\FixtureA88;
use DiContainerBenchmarks\Fixture\A\FixtureA89;
use DiContainerBenchmarks\Fixture\A\FixtureA9;
use DiContainerBenchmarks\Fixture\A\FixtureA90;
use DiContainerBenchmarks\Fixture\A\FixtureA91;
use DiContainerBenchmarks\Fixture\A\FixtureA92;
use DiContainerBenchmarks\Fixture\A\FixtureA93;
use DiContainerBenchmarks\Fixture\A\FixtureA94;
use DiContainerBenchmarks\Fixture\A\FixtureA95;
use DiContainerBenchmarks\Fixture\A\FixtureA96;
use DiContainerBenchmarks\Fixture\A\FixtureA97;
use DiContainerBenchmarks\Fixture\A\FixtureA98;
use DiContainerBenchmarks\Fixture\A\FixtureA99;
use DiContainerBenchmarks\Fixture\B\FixtureB1;
use DiContainerBenchmarks\Fixture\B\FixtureB10;
use DiContainerBenchmarks\Fixture\B\FixtureB100;
use DiContainerBenchmarks\Fixture\B\FixtureB1000;
use DiContainerBenchmarks\Fixture\B\FixtureB101;
use DiContainerBenchmarks\Fixture\B\FixtureB102;
use DiContainerBenchmarks\Fixture\B\FixtureB103;
use DiContainerBenchmarks\Fixture\B\FixtureB104;
use DiContainerBenchmarks\Fixture\B\FixtureB105;
use DiContainerBenchmarks\Fixture\B\FixtureB106;
use DiContainerBenchmarks\Fixture\B\FixtureB107;
use DiContainerBenchmarks\Fixture\B\FixtureB108;
use DiContainerBenchmarks\Fixture\B\FixtureB109;
use DiContainerBenchmarks\Fixture\B\FixtureB11;
use DiContainerBenchmarks\Fixture\B\FixtureB110;
use DiContainerBenchmarks\Fixture\B\FixtureB111;
use DiContainerBenchmarks\Fixture\B\FixtureB112;
use DiContainerBenchmarks\Fixture\B\FixtureB113;
use DiContainerBenchmarks\Fixture\B\FixtureB114;
use DiContainerBenchmarks\Fixture\B\FixtureB115;
use DiContainerBenchmarks\Fixture\B\FixtureB116;
use DiContainerBenchmarks\Fixture\B\FixtureB117;
use DiContainerBenchmarks\Fixture\B\FixtureB118;
use DiContainerBenchmarks\Fixture\B\FixtureB119;
use DiContainerBenchmarks\Fixture\B\FixtureB12;
use DiContainerBenchmarks\Fixture\B\FixtureB120;
use DiContainerBenchmarks\Fixture\B\FixtureB121;
use DiContainerBenchmarks\Fixture\B\FixtureB122;
use DiContainerBenchmarks\Fixture\B\FixtureB123;
use DiContainerBenchmarks\Fixture\B\FixtureB124;
use DiContainerBenchmarks\Fixture\B\FixtureB125;
use DiContainerBenchmarks\Fixture\B\FixtureB126;
use DiContainerBenchmarks\Fixture\B\FixtureB127;
use DiContainerBenchmarks\Fixture\B\FixtureB128;
use DiContainerBenchmarks\Fixture\B\FixtureB129;
use DiContainerBenchmarks\Fixture\B\FixtureB13;
use DiContainerBenchmarks\Fixture\B\FixtureB130;
use DiContainerBenchmarks\Fixture\B\FixtureB131;
use DiContainerBenchmarks\Fixture\B\FixtureB132;
use DiContainerBenchmarks\Fixture\B\FixtureB133;
use DiContainerBenchmarks\Fixture\B\FixtureB134;
use DiContainerBenchmarks\Fixture\B\FixtureB135;
use DiContainerBenchmarks\Fixture\B\FixtureB136;
use DiContainerBenchmarks\Fixture\B\FixtureB137;
use DiContainerBenchmarks\Fixture\B\FixtureB138;
use DiContainerBenchmarks\Fixture\B\FixtureB139;
use DiContainerBenchmarks\Fixture\B\FixtureB14;
use DiContainerBenchmarks\Fixture\B\FixtureB140;
use DiContainerBenchmarks\Fixture\B\FixtureB141;
use DiContainerBenchmarks\Fixture\B\FixtureB142;
use DiContainerBenchmarks\Fixture\B\FixtureB143;
use DiContainerBenchmarks\Fixture\B\FixtureB144;
use DiContainerBenchmarks\Fixture\B\FixtureB145;
use DiContainerBenchmarks\Fixture\B\FixtureB146;
use DiContainerBenchmarks\Fixture\B\FixtureB147;
use DiContainerBenchmarks\Fixture\B\FixtureB148;
use DiContainerBenchmarks\Fixture\B\FixtureB149;
use DiContainerBenchmarks\Fixture\B\FixtureB15;
use DiContainerBenchmarks\Fixture\B\FixtureB150;
use DiContainerBenchmarks\Fixture\B\FixtureB151;
use DiContainerBenchmarks\Fixture\B\FixtureB152;
use DiContainerBenchmarks\Fixture\B\FixtureB153;
use DiContainerBenchmarks\Fixture\B\FixtureB154;
use DiContainerBenchmarks\Fixture\B\FixtureB155;
use DiContainerBenchmarks\Fixture\B\FixtureB156;
use DiContainerBenchmarks\Fixture\B\FixtureB157;
use DiContainerBenchmarks\Fixture\B\FixtureB158;
use DiContainerBenchmarks\Fixture\B\FixtureB159;
use DiContainerBenchmarks\Fixture\B\FixtureB16;
use DiContainerBenchmarks\Fixture\B\FixtureB160;
use DiContainerBenchmarks\Fixture\B\FixtureB161;
use DiContainerBenchmarks\Fixture\B\FixtureB162;
use DiContainerBenchmarks\Fixture\B\FixtureB163;
use DiContainerBenchmarks\Fixture\B\FixtureB164;
use DiContainerBenchmarks\Fixture\B\FixtureB165;
use DiContainerBenchmarks\Fixture\B\FixtureB166;
use DiContainerBenchmarks\Fixture\B\FixtureB167;
use DiContainerBenchmarks\Fixture\B\FixtureB168;
use DiContainerBenchmarks\Fixture\B\FixtureB169;
use DiContainerBenchmarks\Fixture\B\FixtureB17;
use DiContainerBenchmarks\Fixture\B\FixtureB170;
use DiContainerBenchmarks\Fixture\B\FixtureB171;
use DiContainerBenchmarks\Fixture\B\FixtureB172;
use DiContainerBenchmarks\Fixture\B\FixtureB173;
use DiContainerBenchmarks\Fixture\B\FixtureB174;
use DiContainerBenchmarks\Fixture\B\FixtureB175;
use DiContainerBenchmarks\Fixture\B\FixtureB176;
use DiContainerBenchmarks\Fixture\B\FixtureB177;
use DiContainerBenchmarks\Fixture\B\FixtureB178;
use DiContainerBenchmarks\Fixture\B\FixtureB179;
use DiContainerBenchmarks\Fixture\B\FixtureB18;
use DiContainerBenchmarks\Fixture\B\FixtureB180;
use DiContainerBenchmarks\Fixture\B\FixtureB181;
use DiContainerBenchmarks\Fixture\B\FixtureB182;
use DiContainerBenchmarks\Fixture\B\FixtureB183;
use DiContainerBenchmarks\Fixture\B\FixtureB184;
use DiContainerBenchmarks\Fixture\B\FixtureB185;
use DiContainerBenchmarks\Fixture\B\FixtureB186;
use DiContainerBenchmarks\Fixture\B\FixtureB187;
use DiContainerBenchmarks\Fixture\B\FixtureB188;
use DiContainerBenchmarks\Fixture\B\FixtureB189;
use DiContainerBenchmarks\Fixture\B\FixtureB19;
use DiContainerBenchmarks\Fixture\B\FixtureB190;
use DiContainerBenchmarks\Fixture\B\FixtureB191;
use DiContainerBenchmarks\Fixture\B\FixtureB192;
use DiContainerBenchmarks\Fixture\B\FixtureB193;
use DiContainerBenchmarks\Fixture\B\FixtureB194;
use DiContainerBenchmarks\Fixture\B\FixtureB195;
use DiContainerBenchmarks\Fixture\B\FixtureB196;
use DiContainerBenchmarks\Fixture\B\FixtureB197;
use DiContainerBenchmarks\Fixture\B\FixtureB198;
use DiContainerBenchmarks\Fixture\B\FixtureB199;
use DiContainerBenchmarks\Fixture\B\FixtureB2;
use DiContainerBenchmarks\Fixture\B\FixtureB20;
use DiContainerBenchmarks\Fixture\B\FixtureB200;
use DiContainerBenchmarks\Fixture\B\FixtureB201;
use DiContainerBenchmarks\Fixture\B\FixtureB202;
use DiContainerBenchmarks\Fixture\B\FixtureB203;
use DiContainerBenchmarks\Fixture\B\FixtureB204;
use DiContainerBenchmarks\Fixture\B\FixtureB205;
use DiContainerBenchmarks\Fixture\B\FixtureB206;
use DiContainerBenchmarks\Fixture\B\FixtureB207;
use DiContainerBenchmarks\Fixture\B\FixtureB208;
use DiContainerBenchmarks\Fixture\B\FixtureB209;
use DiContainerBenchmarks\Fixture\B\FixtureB21;
use DiContainerBenchmarks\Fixture\B\FixtureB210;
use DiContainerBenchmarks\Fixture\B\FixtureB211;
use DiContainerBenchmarks\Fixture\B\FixtureB212;
use DiContainerBenchmarks\Fixture\B\FixtureB213;
use DiContainerBenchmarks\Fixture\B\FixtureB214;
use DiContainerBenchmarks\Fixture\B\FixtureB215;
use DiContainerBenchmarks\Fixture\B\FixtureB216;
use DiContainerBenchmarks\Fixture\B\FixtureB217;
use DiContainerBenchmarks\Fixture\B\FixtureB218;
use DiContainerBenchmarks\Fixture\B\FixtureB219;
use DiContainerBenchmarks\Fixture\B\FixtureB22;
use DiContainerBenchmarks\Fixture\B\FixtureB220;
use DiContainerBenchmarks\Fixture\B\FixtureB221;
use DiContainerBenchmarks\Fixture\B\FixtureB222;
use DiContainerBenchmarks\Fixture\B\FixtureB223;
use DiContainerBenchmarks\Fixture\B\FixtureB224;
use DiContainerBenchmarks\Fixture\B\FixtureB225;
use DiContainerBenchmarks\Fixture\B\FixtureB226;
use DiContainerBenchmarks\Fixture\B\FixtureB227;
use DiContainerBenchmarks\Fixture\B\FixtureB228;
use DiContainerBenchmarks\Fixture\B\FixtureB229;
use DiContainerBenchmarks\Fixture\B\FixtureB23;
use DiContainerBenchmarks\Fixture\B\FixtureB230;
use DiContainerBenchmarks\Fixture\B\FixtureB231;
use DiContainerBenchmarks\Fixture\B\FixtureB232;
use DiContainerBenchmarks\Fixture\B\FixtureB233;
use DiContainerBenchmarks\Fixture\B\FixtureB234;
use DiContainerBenchmarks\Fixture\B\FixtureB235;
use DiContainerBenchmarks\Fixture\B\FixtureB236;
use DiContainerBenchmarks\Fixture\B\FixtureB237;
use DiContainerBenchmarks\Fixture\B\FixtureB238;
use DiContainerBenchmarks\Fixture\B\FixtureB239;
use DiContainerBenchmarks\Fixture\B\FixtureB24;
use DiContainerBenchmarks\Fixture\B\FixtureB240;
use DiContainerBenchmarks\Fixture\B\FixtureB241;
use DiContainerBenchmarks\Fixture\B\FixtureB242;
use DiContainerBenchmarks\Fixture\B\FixtureB243;
use DiContainerBenchmarks\Fixture\B\FixtureB244;
use DiContainerBenchmarks\Fixture\B\FixtureB245;
use DiContainerBenchmarks\Fixture\B\FixtureB246;
use DiContainerBenchmarks\Fixture\B\FixtureB247;
use DiContainerBenchmarks\Fixture\B\FixtureB248;
use DiContainerBenchmarks\Fixture\B\FixtureB249;
use DiContainerBenchmarks\Fixture\B\FixtureB25;
use DiContainerBenchmarks\Fixture\B\FixtureB250;
use DiContainerBenchmarks\Fixture\B\FixtureB251;
use DiContainerBenchmarks\Fixture\B\FixtureB252;
use DiContainerBenchmarks\Fixture\B\FixtureB253;
use DiContainerBenchmarks\Fixture\B\FixtureB254;
use DiContainerBenchmarks\Fixture\B\FixtureB255;
use DiContainerBenchmarks\Fixture\B\FixtureB256;
use DiContainerBenchmarks\Fixture\B\FixtureB257;
use DiContainerBenchmarks\Fixture\B\FixtureB258;
use DiContainerBenchmarks\Fixture\B\FixtureB259;
use DiContainerBenchmarks\Fixture\B\FixtureB26;
use DiContainerBenchmarks\Fixture\B\FixtureB260;
use DiContainerBenchmarks\Fixture\B\FixtureB261;
use DiContainerBenchmarks\Fixture\B\FixtureB262;
use DiContainerBenchmarks\Fixture\B\FixtureB263;
use DiContainerBenchmarks\Fixture\B\FixtureB264;
use DiContainerBenchmarks\Fixture\B\FixtureB265;
use DiContainerBenchmarks\Fixture\B\FixtureB266;
use DiContainerBenchmarks\Fixture\B\FixtureB267;
use DiContainerBenchmarks\Fixture\B\FixtureB268;
use DiContainerBenchmarks\Fixture\B\FixtureB269;
use DiContainerBenchmarks\Fixture\B\FixtureB27;
use DiContainerBenchmarks\Fixture\B\FixtureB270;
use DiContainerBenchmarks\Fixture\B\FixtureB271;
use DiContainerBenchmarks\Fixture\B\FixtureB272;
use DiContainerBenchmarks\Fixture\B\FixtureB273;
use DiContainerBenchmarks\Fixture\B\FixtureB274;
use DiContainerBenchmarks\Fixture\B\FixtureB275;
use DiContainerBenchmarks\Fixture\B\FixtureB276;
use DiContainerBenchmarks\Fixture\B\FixtureB277;
use DiContainerBenchmarks\Fixture\B\FixtureB278;
use DiContainerBenchmarks\Fixture\B\FixtureB279;
use DiContainerBenchmarks\Fixture\B\FixtureB28;
use DiContainerBenchmarks\Fixture\B\FixtureB280;
use DiContainerBenchmarks\Fixture\B\FixtureB281;
use DiContainerBenchmarks\Fixture\B\FixtureB282;
use DiContainerBenchmarks\Fixture\B\FixtureB283;
use DiContainerBenchmarks\Fixture\B\FixtureB284;
use DiContainerBenchmarks\Fixture\B\FixtureB285;
use DiContainerBenchmarks\Fixture\B\FixtureB286;
use DiContainerBenchmarks\Fixture\B\FixtureB287;
use DiContainerBenchmarks\Fixture\B\FixtureB288;
use DiContainerBenchmarks\Fixture\B\FixtureB289;
use DiContainerBenchmarks\Fixture\B\FixtureB29;
use DiContainerBenchmarks\Fixture\B\FixtureB290;
use DiContainerBenchmarks\Fixture\B\FixtureB291;
use DiContainerBenchmarks\Fixture\B\FixtureB292;
use DiContainerBenchmarks\Fixture\B\FixtureB293;
use DiContainerBenchmarks\Fixture\B\FixtureB294;
use DiContainerBenchmarks\Fixture\B\FixtureB295;
use DiContainerBenchmarks\Fixture\B\FixtureB296;
use DiContainerBenchmarks\Fixture\B\FixtureB297;
use DiContainerBenchmarks\Fixture\B\FixtureB298;
use DiContainerBenchmarks\Fixture\B\FixtureB299;
use DiContainerBenchmarks\Fixture\B\FixtureB3;
use DiContainerBenchmarks\Fixture\B\FixtureB30;
use DiContainerBenchmarks\Fixture\B\FixtureB300;
use DiContainerBenchmarks\Fixture\B\FixtureB301;
use DiContainerBenchmarks\Fixture\B\FixtureB302;
use DiContainerBenchmarks\Fixture\B\FixtureB303;
use DiContainerBenchmarks\Fixture\B\FixtureB304;
use DiContainerBenchmarks\Fixture\B\FixtureB305;
use DiContainerBenchmarks\Fixture\B\FixtureB306;
use DiContainerBenchmarks\Fixture\B\FixtureB307;
use DiContainerBenchmarks\Fixture\B\FixtureB308;
use DiContainerBenchmarks\Fixture\B\FixtureB309;
use DiContainerBenchmarks\Fixture\B\FixtureB31;
use DiContainerBenchmarks\Fixture\B\FixtureB310;
use DiContainerBenchmarks\Fixture\B\FixtureB311;
use DiContainerBenchmarks\Fixture\B\FixtureB312;
use DiContainerBenchmarks\Fixture\B\FixtureB313;
use DiContainerBenchmarks\Fixture\B\FixtureB314;
use DiContainerBenchmarks\Fixture\B\FixtureB315;
use DiContainerBenchmarks\Fixture\B\FixtureB316;
use DiContainerBenchmarks\Fixture\B\FixtureB317;
use DiContainerBenchmarks\Fixture\B\FixtureB318;
use DiContainerBenchmarks\Fixture\B\FixtureB319;
use DiContainerBenchmarks\Fixture\B\FixtureB32;
use DiContainerBenchmarks\Fixture\B\FixtureB320;
use DiContainerBenchmarks\Fixture\B\FixtureB321;
use DiContainerBenchmarks\Fixture\B\FixtureB322;
use DiContainerBenchmarks\Fixture\B\FixtureB323;
use DiContainerBenchmarks\Fixture\B\FixtureB324;
use DiContainerBenchmarks\Fixture\B\FixtureB325;
use DiContainerBenchmarks\Fixture\B\FixtureB326;
use DiContainerBenchmarks\Fixture\B\FixtureB327;
use DiContainerBenchmarks\Fixture\B\FixtureB328;
use DiContainerBenchmarks\Fixture\B\FixtureB329;
use DiContainerBenchmarks\Fixture\B\FixtureB33;
use DiContainerBenchmarks\Fixture\B\FixtureB330;
use DiContainerBenchmarks\Fixture\B\FixtureB331;
use DiContainerBenchmarks\Fixture\B\FixtureB332;
use DiContainerBenchmarks\Fixture\B\FixtureB333;
use DiContainerBenchmarks\Fixture\B\FixtureB334;
use DiContainerBenchmarks\Fixture\B\FixtureB335;
use DiContainerBenchmarks\Fixture\B\FixtureB336;
use DiContainerBenchmarks\Fixture\B\FixtureB337;
use DiContainerBenchmarks\Fixture\B\FixtureB338;
use DiContainerBenchmarks\Fixture\B\FixtureB339;
use DiContainerBenchmarks\Fixture\B\FixtureB34;
use DiContainerBenchmarks\Fixture\B\FixtureB340;
use DiContainerBenchmarks\Fixture\B\FixtureB341;
use DiContainerBenchmarks\Fixture\B\FixtureB342;
use DiContainerBenchmarks\Fixture\B\FixtureB343;
use DiContainerBenchmarks\Fixture\B\FixtureB344;
use DiContainerBenchmarks\Fixture\B\FixtureB345;
use DiContainerBenchmarks\Fixture\B\FixtureB346;
use DiContainerBenchmarks\Fixture\B\FixtureB347;
use DiContainerBenchmarks\Fixture\B\FixtureB348;
use DiContainerBenchmarks\Fixture\B\FixtureB349;
use DiContainerBenchmarks\Fixture\B\FixtureB35;
use DiContainerBenchmarks\Fixture\B\FixtureB350;
use DiContainerBenchmarks\Fixture\B\FixtureB351;
use DiContainerBenchmarks\Fixture\B\FixtureB352;
use DiContainerBenchmarks\Fixture\B\FixtureB353;
use DiContainerBenchmarks\Fixture\B\FixtureB354;
use DiContainerBenchmarks\Fixture\B\FixtureB355;
use DiContainerBenchmarks\Fixture\B\FixtureB356;
use DiContainerBenchmarks\Fixture\B\FixtureB357;
use DiContainerBenchmarks\Fixture\B\FixtureB358;
use DiContainerBenchmarks\Fixture\B\FixtureB359;
use DiContainerBenchmarks\Fixture\B\FixtureB36;
use DiContainerBenchmarks\Fixture\B\FixtureB360;
use DiContainerBenchmarks\Fixture\B\FixtureB361;
use DiContainerBenchmarks\Fixture\B\FixtureB362;
use DiContainerBenchmarks\Fixture\B\FixtureB363;
use DiContainerBenchmarks\Fixture\B\FixtureB364;
use DiContainerBenchmarks\Fixture\B\FixtureB365;
use DiContainerBenchmarks\Fixture\B\FixtureB366;
use DiContainerBenchmarks\Fixture\B\FixtureB367;
use DiContainerBenchmarks\Fixture\B\FixtureB368;
use DiContainerBenchmarks\Fixture\B\FixtureB369;
use DiContainerBenchmarks\Fixture\B\FixtureB37;
use DiContainerBenchmarks\Fixture\B\FixtureB370;
use DiContainerBenchmarks\Fixture\B\FixtureB371;
use DiContainerBenchmarks\Fixture\B\FixtureB372;
use DiContainerBenchmarks\Fixture\B\FixtureB373;
use DiContainerBenchmarks\Fixture\B\FixtureB374;
use DiContainerBenchmarks\Fixture\B\FixtureB375;
use DiContainerBenchmarks\Fixture\B\FixtureB376;
use DiContainerBenchmarks\Fixture\B\FixtureB377;
use DiContainerBenchmarks\Fixture\B\FixtureB378;
use DiContainerBenchmarks\Fixture\B\FixtureB379;
use DiContainerBenchmarks\Fixture\B\FixtureB38;
use DiContainerBenchmarks\Fixture\B\FixtureB380;
use DiContainerBenchmarks\Fixture\B\FixtureB381;
use DiContainerBenchmarks\Fixture\B\FixtureB382;
use DiContainerBenchmarks\Fixture\B\FixtureB383;
use DiContainerBenchmarks\Fixture\B\FixtureB384;
use DiContainerBenchmarks\Fixture\B\FixtureB385;
use DiContainerBenchmarks\Fixture\B\FixtureB386;
use DiContainerBenchmarks\Fixture\B\FixtureB387;
use DiContainerBenchmarks\Fixture\B\FixtureB388;
use DiContainerBenchmarks\Fixture\B\FixtureB389;
use DiContainerBenchmarks\Fixture\B\FixtureB39;
use DiContainerBenchmarks\Fixture\B\FixtureB390;
use DiContainerBenchmarks\Fixture\B\FixtureB391;
use DiContainerBenchmarks\Fixture\B\FixtureB392;
use DiContainerBenchmarks\Fixture\B\FixtureB393;
use DiContainerBenchmarks\Fixture\B\FixtureB394;
use DiContainerBenchmarks\Fixture\B\FixtureB395;
use DiContainerBenchmarks\Fixture\B\FixtureB396;
use DiContainerBenchmarks\Fixture\B\FixtureB397;
use DiContainerBenchmarks\Fixture\B\FixtureB398;
use DiContainerBenchmarks\Fixture\B\FixtureB399;
use DiContainerBenchmarks\Fixture\B\FixtureB4;
use DiContainerBenchmarks\Fixture\B\FixtureB40;
use DiContainerBenchmarks\Fixture\B\FixtureB400;
use DiContainerBenchmarks\Fixture\B\FixtureB401;
use DiContainerBenchmarks\Fixture\B\FixtureB402;
use DiContainerBenchmarks\Fixture\B\FixtureB403;
use DiContainerBenchmarks\Fixture\B\FixtureB404;
use DiContainerBenchmarks\Fixture\B\FixtureB405;
use DiContainerBenchmarks\Fixture\B\FixtureB406;
use DiContainerBenchmarks\Fixture\B\FixtureB407;
use DiContainerBenchmarks\Fixture\B\FixtureB408;
use DiContainerBenchmarks\Fixture\B\FixtureB409;
use DiContainerBenchmarks\Fixture\B\FixtureB41;
use DiContainerBenchmarks\Fixture\B\FixtureB410;
use DiContainerBenchmarks\Fixture\B\FixtureB411;
use DiContainerBenchmarks\Fixture\B\FixtureB412;
use DiContainerBenchmarks\Fixture\B\FixtureB413;
use DiContainerBenchmarks\Fixture\B\FixtureB414;
use DiContainerBenchmarks\Fixture\B\FixtureB415;
use DiContainerBenchmarks\Fixture\B\FixtureB416;
use DiContainerBenchmarks\Fixture\B\FixtureB417;
use DiContainerBenchmarks\Fixture\B\FixtureB418;
use DiContainerBenchmarks\Fixture\B\FixtureB419;
use DiContainerBenchmarks\Fixture\B\FixtureB42;
use DiContainerBenchmarks\Fixture\B\FixtureB420;
use DiContainerBenchmarks\Fixture\B\FixtureB421;
use DiContainerBenchmarks\Fixture\B\FixtureB422;
use DiContainerBenchmarks\Fixture\B\FixtureB423;
use DiContainerBenchmarks\Fixture\B\FixtureB424;
use DiContainerBenchmarks\Fixture\B\FixtureB425;
use DiContainerBenchmarks\Fixture\B\FixtureB426;
use DiContainerBenchmarks\Fixture\B\FixtureB427;
use DiContainerBenchmarks\Fixture\B\FixtureB428;
use DiContainerBenchmarks\Fixture\B\FixtureB429;
use DiContainerBenchmarks\Fixture\B\FixtureB43;
use DiContainerBenchmarks\Fixture\B\FixtureB430;
use DiContainerBenchmarks\Fixture\B\FixtureB431;
use DiContainerBenchmarks\Fixture\B\FixtureB432;
use DiContainerBenchmarks\Fixture\B\FixtureB433;
use DiContainerBenchmarks\Fixture\B\FixtureB434;
use DiContainerBenchmarks\Fixture\B\FixtureB435;
use DiContainerBenchmarks\Fixture\B\FixtureB436;
use DiContainerBenchmarks\Fixture\B\FixtureB437;
use DiContainerBenchmarks\Fixture\B\FixtureB438;
use DiContainerBenchmarks\Fixture\B\FixtureB439;
use DiContainerBenchmarks\Fixture\B\FixtureB44;
use DiContainerBenchmarks\Fixture\B\FixtureB440;
use DiContainerBenchmarks\Fixture\B\FixtureB441;
use DiContainerBenchmarks\Fixture\B\FixtureB442;
use DiContainerBenchmarks\Fixture\B\FixtureB443;
use DiContainerBenchmarks\Fixture\B\FixtureB444;
use DiContainerBenchmarks\Fixture\B\FixtureB445;
use DiContainerBenchmarks\Fixture\B\FixtureB446;
use DiContainerBenchmarks\Fixture\B\FixtureB447;
use DiContainerBenchmarks\Fixture\B\FixtureB448;
use DiContainerBenchmarks\Fixture\B\FixtureB449;
use DiContainerBenchmarks\Fixture\B\FixtureB45;
use DiContainerBenchmarks\Fixture\B\FixtureB450;
use DiContainerBenchmarks\Fixture\B\FixtureB451;
use DiContainerBenchmarks\Fixture\B\FixtureB452;
use DiContainerBenchmarks\Fixture\B\FixtureB453;
use DiContainerBenchmarks\Fixture\B\FixtureB454;
use DiContainerBenchmarks\Fixture\B\FixtureB455;
use DiContainerBenchmarks\Fixture\B\FixtureB456;
use DiContainerBenchmarks\Fixture\B\FixtureB457;
use DiContainerBenchmarks\Fixture\B\FixtureB458;
use DiContainerBenchmarks\Fixture\B\FixtureB459;
use DiContainerBenchmarks\Fixture\B\FixtureB46;
use DiContainerBenchmarks\Fixture\B\FixtureB460;
use DiContainerBenchmarks\Fixture\B\FixtureB461;
use DiContainerBenchmarks\Fixture\B\FixtureB462;
use DiContainerBenchmarks\Fixture\B\FixtureB463;
use DiContainerBenchmarks\Fixture\B\FixtureB464;
use DiContainerBenchmarks\Fixture\B\FixtureB465;
use DiContainerBenchmarks\Fixture\B\FixtureB466;
use DiContainerBenchmarks\Fixture\B\FixtureB467;
use DiContainerBenchmarks\Fixture\B\FixtureB468;
use DiContainerBenchmarks\Fixture\B\FixtureB469;
use DiContainerBenchmarks\Fixture\B\FixtureB47;
use DiContainerBenchmarks\Fixture\B\FixtureB470;
use DiContainerBenchmarks\Fixture\B\FixtureB471;
use DiContainerBenchmarks\Fixture\B\FixtureB472;
use DiContainerBenchmarks\Fixture\B\FixtureB473;
use DiContainerBenchmarks\Fixture\B\FixtureB474;
use DiContainerBenchmarks\Fixture\B\FixtureB475;
use DiContainerBenchmarks\Fixture\B\FixtureB476;
use DiContainerBenchmarks\Fixture\B\FixtureB477;
use DiContainerBenchmarks\Fixture\B\FixtureB478;
use DiContainerBenchmarks\Fixture\B\FixtureB479;
use DiContainerBenchmarks\Fixture\B\FixtureB48;
use DiContainerBenchmarks\Fixture\B\FixtureB480;
use DiContainerBenchmarks\Fixture\B\FixtureB481;
use DiContainerBenchmarks\Fixture\B\FixtureB482;
use DiContainerBenchmarks\Fixture\B\FixtureB483;
use DiContainerBenchmarks\Fixture\B\FixtureB484;
use DiContainerBenchmarks\Fixture\B\FixtureB485;
use DiContainerBenchmarks\Fixture\B\FixtureB486;
use DiContainerBenchmarks\Fixture\B\FixtureB487;
use DiContainerBenchmarks\Fixture\B\FixtureB488;
use DiContainerBenchmarks\Fixture\B\FixtureB489;
use DiContainerBenchmarks\Fixture\B\FixtureB49;
use DiContainerBenchmarks\Fixture\B\FixtureB490;
use DiContainerBenchmarks\Fixture\B\FixtureB491;
use DiContainerBenchmarks\Fixture\B\FixtureB492;
use DiContainerBenchmarks\Fixture\B\FixtureB493;
use DiContainerBenchmarks\Fixture\B\FixtureB494;
use DiContainerBenchmarks\Fixture\B\FixtureB495;
use DiContainerBenchmarks\Fixture\B\FixtureB496;
use DiContainerBenchmarks\Fixture\B\FixtureB497;
use DiContainerBenchmarks\Fixture\B\FixtureB498;
use DiContainerBenchmarks\Fixture\B\FixtureB499;
use DiContainerBenchmarks\Fixture\B\FixtureB5;
use DiContainerBenchmarks\Fixture\B\FixtureB50;
use DiContainerBenchmarks\Fixture\B\FixtureB500;
use DiContainerBenchmarks\Fixture\B\FixtureB501;
use DiContainerBenchmarks\Fixture\B\FixtureB502;
use DiContainerBenchmarks\Fixture\B\FixtureB503;
use DiContainerBenchmarks\Fixture\B\FixtureB504;
use DiContainerBenchmarks\Fixture\B\FixtureB505;
use DiContainerBenchmarks\Fixture\B\FixtureB506;
use DiContainerBenchmarks\Fixture\B\FixtureB507;
use DiContainerBenchmarks\Fixture\B\FixtureB508;
use DiContainerBenchmarks\Fixture\B\FixtureB509;
use DiContainerBenchmarks\Fixture\B\FixtureB51;
use DiContainerBenchmarks\Fixture\B\FixtureB510;
use DiContainerBenchmarks\Fixture\B\FixtureB511;
use DiContainerBenchmarks\Fixture\B\FixtureB512;
use DiContainerBenchmarks\Fixture\B\FixtureB513;
use DiContainerBenchmarks\Fixture\B\FixtureB514;
use DiContainerBenchmarks\Fixture\B\FixtureB515;
use DiContainerBenchmarks\Fixture\B\FixtureB516;
use DiContainerBenchmarks\Fixture\B\FixtureB517;
use DiContainerBenchmarks\Fixture\B\FixtureB518;
use DiContainerBenchmarks\Fixture\B\FixtureB519;
use DiContainerBenchmarks\Fixture\B\FixtureB52;
use DiContainerBenchmarks\Fixture\B\FixtureB520;
use DiContainerBenchmarks\Fixture\B\FixtureB521;
use DiContainerBenchmarks\Fixture\B\FixtureB522;
use DiContainerBenchmarks\Fixture\B\FixtureB523;
use DiContainerBenchmarks\Fixture\B\FixtureB524;
use DiContainerBenchmarks\Fixture\B\FixtureB525;
use DiContainerBenchmarks\Fixture\B\FixtureB526;
use DiContainerBenchmarks\Fixture\B\FixtureB527;
use DiContainerBenchmarks\Fixture\B\FixtureB528;
use DiContainerBenchmarks\Fixture\B\FixtureB529;
use DiContainerBenchmarks\Fixture\B\FixtureB53;
use DiContainerBenchmarks\Fixture\B\FixtureB530;
use DiContainerBenchmarks\Fixture\B\FixtureB531;
use DiContainerBenchmarks\Fixture\B\FixtureB532;
use DiContainerBenchmarks\Fixture\B\FixtureB533;
use DiContainerBenchmarks\Fixture\B\FixtureB534;
use DiContainerBenchmarks\Fixture\B\FixtureB535;
use DiContainerBenchmarks\Fixture\B\FixtureB536;
use DiContainerBenchmarks\Fixture\B\FixtureB537;
use DiContainerBenchmarks\Fixture\B\FixtureB538;
use DiContainerBenchmarks\Fixture\B\FixtureB539;
use DiContainerBenchmarks\Fixture\B\FixtureB54;
use DiContainerBenchmarks\Fixture\B\FixtureB540;
use DiContainerBenchmarks\Fixture\B\FixtureB541;
use DiContainerBenchmarks\Fixture\B\FixtureB542;
use DiContainerBenchmarks\Fixture\B\FixtureB543;
use DiContainerBenchmarks\Fixture\B\FixtureB544;
use DiContainerBenchmarks\Fixture\B\FixtureB545;
use DiContainerBenchmarks\Fixture\B\FixtureB546;
use DiContainerBenchmarks\Fixture\B\FixtureB547;
use DiContainerBenchmarks\Fixture\B\FixtureB548;
use DiContainerBenchmarks\Fixture\B\FixtureB549;
use DiContainerBenchmarks\Fixture\B\FixtureB55;
use DiContainerBenchmarks\Fixture\B\FixtureB550;
use DiContainerBenchmarks\Fixture\B\FixtureB551;
use DiContainerBenchmarks\Fixture\B\FixtureB552;
use DiContainerBenchmarks\Fixture\B\FixtureB553;
use DiContainerBenchmarks\Fixture\B\FixtureB554;
use DiContainerBenchmarks\Fixture\B\FixtureB555;
use DiContainerBenchmarks\Fixture\B\FixtureB556;
use DiContainerBenchmarks\Fixture\B\FixtureB557;
use DiContainerBenchmarks\Fixture\B\FixtureB558;
use DiContainerBenchmarks\Fixture\B\FixtureB559;
use DiContainerBenchmarks\Fixture\B\FixtureB56;
use DiContainerBenchmarks\Fixture\B\FixtureB560;
use DiContainerBenchmarks\Fixture\B\FixtureB561;
use DiContainerBenchmarks\Fixture\B\FixtureB562;
use DiContainerBenchmarks\Fixture\B\FixtureB563;
use DiContainerBenchmarks\Fixture\B\FixtureB564;
use DiContainerBenchmarks\Fixture\B\FixtureB565;
use DiContainerBenchmarks\Fixture\B\FixtureB566;
use DiContainerBenchmarks\Fixture\B\FixtureB567;
use DiContainerBenchmarks\Fixture\B\FixtureB568;
use DiContainerBenchmarks\Fixture\B\FixtureB569;
use DiContainerBenchmarks\Fixture\B\FixtureB57;
use DiContainerBenchmarks\Fixture\B\FixtureB570;
use DiContainerBenchmarks\Fixture\B\FixtureB571;
use DiContainerBenchmarks\Fixture\B\FixtureB572;
use DiContainerBenchmarks\Fixture\B\FixtureB573;
use DiContainerBenchmarks\Fixture\B\FixtureB574;
use DiContainerBenchmarks\Fixture\B\FixtureB575;
use DiContainerBenchmarks\Fixture\B\FixtureB576;
use DiContainerBenchmarks\Fixture\B\FixtureB577;
use DiContainerBenchmarks\Fixture\B\FixtureB578;
use DiContainerBenchmarks\Fixture\B\FixtureB579;
use DiContainerBenchmarks\Fixture\B\FixtureB58;
use DiContainerBenchmarks\Fixture\B\FixtureB580;
use DiContainerBenchmarks\Fixture\B\FixtureB581;
use DiContainerBenchmarks\Fixture\B\FixtureB582;
use DiContainerBenchmarks\Fixture\B\FixtureB583;
use DiContainerBenchmarks\Fixture\B\FixtureB584;
use DiContainerBenchmarks\Fixture\B\FixtureB585;
use DiContainerBenchmarks\Fixture\B\FixtureB586;
use DiContainerBenchmarks\Fixture\B\FixtureB587;
use DiContainerBenchmarks\Fixture\B\FixtureB588;
use DiContainerBenchmarks\Fixture\B\FixtureB589;
use DiContainerBenchmarks\Fixture\B\FixtureB59;
use DiContainerBenchmarks\Fixture\B\FixtureB590;
use DiContainerBenchmarks\Fixture\B\FixtureB591;
use DiContainerBenchmarks\Fixture\B\FixtureB592;
use DiContainerBenchmarks\Fixture\B\FixtureB593;
use DiContainerBenchmarks\Fixture\B\FixtureB594;
use DiContainerBenchmarks\Fixture\B\FixtureB595;
use DiContainerBenchmarks\Fixture\B\FixtureB596;
use DiContainerBenchmarks\Fixture\B\FixtureB597;
use DiContainerBenchmarks\Fixture\B\FixtureB598;
use DiContainerBenchmarks\Fixture\B\FixtureB599;
use DiContainerBenchmarks\Fixture\B\FixtureB6;
use DiContainerBenchmarks\Fixture\B\FixtureB60;
use DiContainerBenchmarks\Fixture\B\FixtureB600;
use DiContainerBenchmarks\Fixture\B\FixtureB601;
use DiContainerBenchmarks\Fixture\B\FixtureB602;
use DiContainerBenchmarks\Fixture\B\FixtureB603;
use DiContainerBenchmarks\Fixture\B\FixtureB604;
use DiContainerBenchmarks\Fixture\B\FixtureB605;
use DiContainerBenchmarks\Fixture\B\FixtureB606;
use DiContainerBenchmarks\Fixture\B\FixtureB607;
use DiContainerBenchmarks\Fixture\B\FixtureB608;
use DiContainerBenchmarks\Fixture\B\FixtureB609;
use DiContainerBenchmarks\Fixture\B\FixtureB61;
use DiContainerBenchmarks\Fixture\B\FixtureB610;
use DiContainerBenchmarks\Fixture\B\FixtureB611;
use DiContainerBenchmarks\Fixture\B\FixtureB612;
use DiContainerBenchmarks\Fixture\B\FixtureB613;
use DiContainerBenchmarks\Fixture\B\FixtureB614;
use DiContainerBenchmarks\Fixture\B\FixtureB615;
use DiContainerBenchmarks\Fixture\B\FixtureB616;
use DiContainerBenchmarks\Fixture\B\FixtureB617;
use DiContainerBenchmarks\Fixture\B\FixtureB618;
use DiContainerBenchmarks\Fixture\B\FixtureB619;
use DiContainerBenchmarks\Fixture\B\FixtureB62;
use DiContainerBenchmarks\Fixture\B\FixtureB620;
use DiContainerBenchmarks\Fixture\B\FixtureB621;
use DiContainerBenchmarks\Fixture\B\FixtureB622;
use DiContainerBenchmarks\Fixture\B\FixtureB623;
use DiContainerBenchmarks\Fixture\B\FixtureB624;
use DiContainerBenchmarks\Fixture\B\FixtureB625;
use DiContainerBenchmarks\Fixture\B\FixtureB626;
use DiContainerBenchmarks\Fixture\B\FixtureB627;
use DiContainerBenchmarks\Fixture\B\FixtureB628;
use DiContainerBenchmarks\Fixture\B\FixtureB629;
use DiContainerBenchmarks\Fixture\B\FixtureB63;
use DiContainerBenchmarks\Fixture\B\FixtureB630;
use DiContainerBenchmarks\Fixture\B\FixtureB631;
use DiContainerBenchmarks\Fixture\B\FixtureB632;
use DiContainerBenchmarks\Fixture\B\FixtureB633;
use DiContainerBenchmarks\Fixture\B\FixtureB634;
use DiContainerBenchmarks\Fixture\B\FixtureB635;
use DiContainerBenchmarks\Fixture\B\FixtureB636;
use DiContainerBenchmarks\Fixture\B\FixtureB637;
use DiContainerBenchmarks\Fixture\B\FixtureB638;
use DiContainerBenchmarks\Fixture\B\FixtureB639;
use DiContainerBenchmarks\Fixture\B\FixtureB64;
use DiContainerBenchmarks\Fixture\B\FixtureB640;
use DiContainerBenchmarks\Fixture\B\FixtureB641;
use DiContainerBenchmarks\Fixture\B\FixtureB642;
use DiContainerBenchmarks\Fixture\B\FixtureB643;
use DiContainerBenchmarks\Fixture\B\FixtureB644;
use DiContainerBenchmarks\Fixture\B\FixtureB645;
use DiContainerBenchmarks\Fixture\B\FixtureB646;
use DiContainerBenchmarks\Fixture\B\FixtureB647;
use DiContainerBenchmarks\Fixture\B\FixtureB648;
use DiContainerBenchmarks\Fixture\B\FixtureB649;
use DiContainerBenchmarks\Fixture\B\FixtureB65;
use DiContainerBenchmarks\Fixture\B\FixtureB650;
use DiContainerBenchmarks\Fixture\B\FixtureB651;
use DiContainerBenchmarks\Fixture\B\FixtureB652;
use DiContainerBenchmarks\Fixture\B\FixtureB653;
use DiContainerBenchmarks\Fixture\B\FixtureB654;
use DiContainerBenchmarks\Fixture\B\FixtureB655;
use DiContainerBenchmarks\Fixture\B\FixtureB656;
use DiContainerBenchmarks\Fixture\B\FixtureB657;
use DiContainerBenchmarks\Fixture\B\FixtureB658;
use DiContainerBenchmarks\Fixture\B\FixtureB659;
use DiContainerBenchmarks\Fixture\B\FixtureB66;
use DiContainerBenchmarks\Fixture\B\FixtureB660;
use DiContainerBenchmarks\Fixture\B\FixtureB661;
use DiContainerBenchmarks\Fixture\B\FixtureB662;
use DiContainerBenchmarks\Fixture\B\FixtureB663;
use DiContainerBenchmarks\Fixture\B\FixtureB664;
use DiContainerBenchmarks\Fixture\B\FixtureB665;
use DiContainerBenchmarks\Fixture\B\FixtureB666;
use DiContainerBenchmarks\Fixture\B\FixtureB667;
use DiContainerBenchmarks\Fixture\B\FixtureB668;
use DiContainerBenchmarks\Fixture\B\FixtureB669;
use DiContainerBenchmarks\Fixture\B\FixtureB67;
use DiContainerBenchmarks\Fixture\B\FixtureB670;
use DiContainerBenchmarks\Fixture\B\FixtureB671;
use DiContainerBenchmarks\Fixture\B\FixtureB672;
use DiContainerBenchmarks\Fixture\B\FixtureB673;
use DiContainerBenchmarks\Fixture\B\FixtureB674;
use DiContainerBenchmarks\Fixture\B\FixtureB675;
use DiContainerBenchmarks\Fixture\B\FixtureB676;
use DiContainerBenchmarks\Fixture\B\FixtureB677;
use DiContainerBenchmarks\Fixture\B\FixtureB678;
use DiContainerBenchmarks\Fixture\B\FixtureB679;
use DiContainerBenchmarks\Fixture\B\FixtureB68;
use DiContainerBenchmarks\Fixture\B\FixtureB680;
use DiContainerBenchmarks\Fixture\B\FixtureB681;
use DiContainerBenchmarks\Fixture\B\FixtureB682;
use DiContainerBenchmarks\Fixture\B\FixtureB683;
use DiContainerBenchmarks\Fixture\B\FixtureB684;
use DiContainerBenchmarks\Fixture\B\FixtureB685;
use DiContainerBenchmarks\Fixture\B\FixtureB686;
use DiContainerBenchmarks\Fixture\B\FixtureB687;
use DiContainerBenchmarks\Fixture\B\FixtureB688;
use DiContainerBenchmarks\Fixture\B\FixtureB689;
use DiContainerBenchmarks\Fixture\B\FixtureB69;
use DiContainerBenchmarks\Fixture\B\FixtureB690;
use DiContainerBenchmarks\Fixture\B\FixtureB691;
use DiContainerBenchmarks\Fixture\B\FixtureB692;
use DiContainerBenchmarks\Fixture\B\FixtureB693;
use DiContainerBenchmarks\Fixture\B\FixtureB694;
use DiContainerBenchmarks\Fixture\B\FixtureB695;
use DiContainerBenchmarks\Fixture\B\FixtureB696;
use DiContainerBenchmarks\Fixture\B\FixtureB697;
use DiContainerBenchmarks\Fixture\B\FixtureB698;
use DiContainerBenchmarks\Fixture\B\FixtureB699;
use DiContainerBenchmarks\Fixture\B\FixtureB7;
use DiContainerBenchmarks\Fixture\B\FixtureB70;
use DiContainerBenchmarks\Fixture\B\FixtureB700;
use DiContainerBenchmarks\Fixture\B\FixtureB701;
use DiContainerBenchmarks\Fixture\B\FixtureB702;
use DiContainerBenchmarks\Fixture\B\FixtureB703;
use DiContainerBenchmarks\Fixture\B\FixtureB704;
use DiContainerBenchmarks\Fixture\B\FixtureB705;
use DiContainerBenchmarks\Fixture\B\FixtureB706;
use DiContainerBenchmarks\Fixture\B\FixtureB707;
use DiContainerBenchmarks\Fixture\B\FixtureB708;
use DiContainerBenchmarks\Fixture\B\FixtureB709;
use DiContainerBenchmarks\Fixture\B\FixtureB71;
use DiContainerBenchmarks\Fixture\B\FixtureB710;
use DiContainerBenchmarks\Fixture\B\FixtureB711;
use DiContainerBenchmarks\Fixture\B\FixtureB712;
use DiContainerBenchmarks\Fixture\B\FixtureB713;
use DiContainerBenchmarks\Fixture\B\FixtureB714;
use DiContainerBenchmarks\Fixture\B\FixtureB715;
use DiContainerBenchmarks\Fixture\B\FixtureB716;
use DiContainerBenchmarks\Fixture\B\FixtureB717;
use DiContainerBenchmarks\Fixture\B\FixtureB718;
use DiContainerBenchmarks\Fixture\B\FixtureB719;
use DiContainerBenchmarks\Fixture\B\FixtureB72;
use DiContainerBenchmarks\Fixture\B\FixtureB720;
use DiContainerBenchmarks\Fixture\B\FixtureB721;
use DiContainerBenchmarks\Fixture\B\FixtureB722;
use DiContainerBenchmarks\Fixture\B\FixtureB723;
use DiContainerBenchmarks\Fixture\B\FixtureB724;
use DiContainerBenchmarks\Fixture\B\FixtureB725;
use DiContainerBenchmarks\Fixture\B\FixtureB726;
use DiContainerBenchmarks\Fixture\B\FixtureB727;
use DiContainerBenchmarks\Fixture\B\FixtureB728;
use DiContainerBenchmarks\Fixture\B\FixtureB729;
use DiContainerBenchmarks\Fixture\B\FixtureB73;
use DiContainerBenchmarks\Fixture\B\FixtureB730;
use DiContainerBenchmarks\Fixture\B\FixtureB731;
use DiContainerBenchmarks\Fixture\B\FixtureB732;
use DiContainerBenchmarks\Fixture\B\FixtureB733;
use DiContainerBenchmarks\Fixture\B\FixtureB734;
use DiContainerBenchmarks\Fixture\B\FixtureB735;
use DiContainerBenchmarks\Fixture\B\FixtureB736;
use DiContainerBenchmarks\Fixture\B\FixtureB737;
use DiContainerBenchmarks\Fixture\B\FixtureB738;
use DiContainerBenchmarks\Fixture\B\FixtureB739;
use DiContainerBenchmarks\Fixture\B\FixtureB74;
use DiContainerBenchmarks\Fixture\B\FixtureB740;
use DiContainerBenchmarks\Fixture\B\FixtureB741;
use DiContainerBenchmarks\Fixture\B\FixtureB742;
use DiContainerBenchmarks\Fixture\B\FixtureB743;
use DiContainerBenchmarks\Fixture\B\FixtureB744;
use DiContainerBenchmarks\Fixture\B\FixtureB745;
use DiContainerBenchmarks\Fixture\B\FixtureB746;
use DiContainerBenchmarks\Fixture\B\FixtureB747;
use DiContainerBenchmarks\Fixture\B\FixtureB748;
use DiContainerBenchmarks\Fixture\B\FixtureB749;
use DiContainerBenchmarks\Fixture\B\FixtureB75;
use DiContainerBenchmarks\Fixture\B\FixtureB750;
use DiContainerBenchmarks\Fixture\B\FixtureB751;
use DiContainerBenchmarks\Fixture\B\FixtureB752;
use DiContainerBenchmarks\Fixture\B\FixtureB753;
use DiContainerBenchmarks\Fixture\B\FixtureB754;
use DiContainerBenchmarks\Fixture\B\FixtureB755;
use DiContainerBenchmarks\Fixture\B\FixtureB756;
use DiContainerBenchmarks\Fixture\B\FixtureB757;
use DiContainerBenchmarks\Fixture\B\FixtureB758;
use DiContainerBenchmarks\Fixture\B\FixtureB759;
use DiContainerBenchmarks\Fixture\B\FixtureB76;
use DiContainerBenchmarks\Fixture\B\FixtureB760;
use DiContainerBenchmarks\Fixture\B\FixtureB761;
use DiContainerBenchmarks\Fixture\B\FixtureB762;
use DiContainerBenchmarks\Fixture\B\FixtureB763;
use DiContainerBenchmarks\Fixture\B\FixtureB764;
use DiContainerBenchmarks\Fixture\B\FixtureB765;
use DiContainerBenchmarks\Fixture\B\FixtureB766;
use DiContainerBenchmarks\Fixture\B\FixtureB767;
use DiContainerBenchmarks\Fixture\B\FixtureB768;
use DiContainerBenchmarks\Fixture\B\FixtureB769;
use DiContainerBenchmarks\Fixture\B\FixtureB77;
use DiContainerBenchmarks\Fixture\B\FixtureB770;
use DiContainerBenchmarks\Fixture\B\FixtureB771;
use DiContainerBenchmarks\Fixture\B\FixtureB772;
use DiContainerBenchmarks\Fixture\B\FixtureB773;
use DiContainerBenchmarks\Fixture\B\FixtureB774;
use DiContainerBenchmarks\Fixture\B\FixtureB775;
use DiContainerBenchmarks\Fixture\B\FixtureB776;
use DiContainerBenchmarks\Fixture\B\FixtureB777;
use DiContainerBenchmarks\Fixture\B\FixtureB778;
use DiContainerBenchmarks\Fixture\B\FixtureB779;
use DiContainerBenchmarks\Fixture\B\FixtureB78;
use DiContainerBenchmarks\Fixture\B\FixtureB780;
use DiContainerBenchmarks\Fixture\B\FixtureB781;
use DiContainerBenchmarks\Fixture\B\FixtureB782;
use DiContainerBenchmarks\Fixture\B\FixtureB783;
use DiContainerBenchmarks\Fixture\B\FixtureB784;
use DiContainerBenchmarks\Fixture\B\FixtureB785;
use DiContainerBenchmarks\Fixture\B\FixtureB786;
use DiContainerBenchmarks\Fixture\B\FixtureB787;
use DiContainerBenchmarks\Fixture\B\FixtureB788;
use DiContainerBenchmarks\Fixture\B\FixtureB789;
use DiContainerBenchmarks\Fixture\B\FixtureB79;
use DiContainerBenchmarks\Fixture\B\FixtureB790;
use DiContainerBenchmarks\Fixture\B\FixtureB791;
use DiContainerBenchmarks\Fixture\B\FixtureB792;
use DiContainerBenchmarks\Fixture\B\FixtureB793;
use DiContainerBenchmarks\Fixture\B\FixtureB794;
use DiContainerBenchmarks\Fixture\B\FixtureB795;
use DiContainerBenchmarks\Fixture\B\FixtureB796;
use DiContainerBenchmarks\Fixture\B\FixtureB797;
use DiContainerBenchmarks\Fixture\B\FixtureB798;
use DiContainerBenchmarks\Fixture\B\FixtureB799;
use DiContainerBenchmarks\Fixture\B\FixtureB8;
use DiContainerBenchmarks\Fixture\B\FixtureB80;
use DiContainerBenchmarks\Fixture\B\FixtureB800;
use DiContainerBenchmarks\Fixture\B\FixtureB801;
use DiContainerBenchmarks\Fixture\B\FixtureB802;
use DiContainerBenchmarks\Fixture\B\FixtureB803;
use DiContainerBenchmarks\Fixture\B\FixtureB804;
use DiContainerBenchmarks\Fixture\B\FixtureB805;
use DiContainerBenchmarks\Fixture\B\FixtureB806;
use DiContainerBenchmarks\Fixture\B\FixtureB807;
use DiContainerBenchmarks\Fixture\B\FixtureB808;
use DiContainerBenchmarks\Fixture\B\FixtureB809;
use DiContainerBenchmarks\Fixture\B\FixtureB81;
use DiContainerBenchmarks\Fixture\B\FixtureB810;
use DiContainerBenchmarks\Fixture\B\FixtureB811;
use DiContainerBenchmarks\Fixture\B\FixtureB812;
use DiContainerBenchmarks\Fixture\B\FixtureB813;
use DiContainerBenchmarks\Fixture\B\FixtureB814;
use DiContainerBenchmarks\Fixture\B\FixtureB815;
use DiContainerBenchmarks\Fixture\B\FixtureB816;
use DiContainerBenchmarks\Fixture\B\FixtureB817;
use DiContainerBenchmarks\Fixture\B\FixtureB818;
use DiContainerBenchmarks\Fixture\B\FixtureB819;
use DiContainerBenchmarks\Fixture\B\FixtureB82;
use DiContainerBenchmarks\Fixture\B\FixtureB820;
use DiContainerBenchmarks\Fixture\B\FixtureB821;
use DiContainerBenchmarks\Fixture\B\FixtureB822;
use DiContainerBenchmarks\Fixture\B\FixtureB823;
use DiContainerBenchmarks\Fixture\B\FixtureB824;
use DiContainerBenchmarks\Fixture\B\FixtureB825;
use DiContainerBenchmarks\Fixture\B\FixtureB826;
use DiContainerBenchmarks\Fixture\B\FixtureB827;
use DiContainerBenchmarks\Fixture\B\FixtureB828;
use DiContainerBenchmarks\Fixture\B\FixtureB829;
use DiContainerBenchmarks\Fixture\B\FixtureB83;
use DiContainerBenchmarks\Fixture\B\FixtureB830;
use DiContainerBenchmarks\Fixture\B\FixtureB831;
use DiContainerBenchmarks\Fixture\B\FixtureB832;
use DiContainerBenchmarks\Fixture\B\FixtureB833;
use DiContainerBenchmarks\Fixture\B\FixtureB834;
use DiContainerBenchmarks\Fixture\B\FixtureB835;
use DiContainerBenchmarks\Fixture\B\FixtureB836;
use DiContainerBenchmarks\Fixture\B\FixtureB837;
use DiContainerBenchmarks\Fixture\B\FixtureB838;
use DiContainerBenchmarks\Fixture\B\FixtureB839;
use DiContainerBenchmarks\Fixture\B\FixtureB84;
use DiContainerBenchmarks\Fixture\B\FixtureB840;
use DiContainerBenchmarks\Fixture\B\FixtureB841;
use DiContainerBenchmarks\Fixture\B\FixtureB842;
use DiContainerBenchmarks\Fixture\B\FixtureB843;
use DiContainerBenchmarks\Fixture\B\FixtureB844;
use DiContainerBenchmarks\Fixture\B\FixtureB845;
use DiContainerBenchmarks\Fixture\B\FixtureB846;
use DiContainerBenchmarks\Fixture\B\FixtureB847;
use DiContainerBenchmarks\Fixture\B\FixtureB848;
use DiContainerBenchmarks\Fixture\B\FixtureB849;
use DiContainerBenchmarks\Fixture\B\FixtureB85;
use DiContainerBenchmarks\Fixture\B\FixtureB850;
use DiContainerBenchmarks\Fixture\B\FixtureB851;
use DiContainerBenchmarks\Fixture\B\FixtureB852;
use DiContainerBenchmarks\Fixture\B\FixtureB853;
use DiContainerBenchmarks\Fixture\B\FixtureB854;
use DiContainerBenchmarks\Fixture\B\FixtureB855;
use DiContainerBenchmarks\Fixture\B\FixtureB856;
use DiContainerBenchmarks\Fixture\B\FixtureB857;
use DiContainerBenchmarks\Fixture\B\FixtureB858;
use DiContainerBenchmarks\Fixture\B\FixtureB859;
use DiContainerBenchmarks\Fixture\B\FixtureB86;
use DiContainerBenchmarks\Fixture\B\FixtureB860;
use DiContainerBenchmarks\Fixture\B\FixtureB861;
use DiContainerBenchmarks\Fixture\B\FixtureB862;
use DiContainerBenchmarks\Fixture\B\FixtureB863;
use DiContainerBenchmarks\Fixture\B\FixtureB864;
use DiContainerBenchmarks\Fixture\B\FixtureB865;
use DiContainerBenchmarks\Fixture\B\FixtureB866;
use DiContainerBenchmarks\Fixture\B\FixtureB867;
use DiContainerBenchmarks\Fixture\B\FixtureB868;
use DiContainerBenchmarks\Fixture\B\FixtureB869;
use DiContainerBenchmarks\Fixture\B\FixtureB87;
use DiContainerBenchmarks\Fixture\B\FixtureB870;
use DiContainerBenchmarks\Fixture\B\FixtureB871;
use DiContainerBenchmarks\Fixture\B\FixtureB872;
use DiContainerBenchmarks\Fixture\B\FixtureB873;
use DiContainerBenchmarks\Fixture\B\FixtureB874;
use DiContainerBenchmarks\Fixture\B\FixtureB875;
use DiContainerBenchmarks\Fixture\B\FixtureB876;
use DiContainerBenchmarks\Fixture\B\FixtureB877;
use DiContainerBenchmarks\Fixture\B\FixtureB878;
use DiContainerBenchmarks\Fixture\B\FixtureB879;
use DiContainerBenchmarks\Fixture\B\FixtureB88;
use DiContainerBenchmarks\Fixture\B\FixtureB880;
use DiContainerBenchmarks\Fixture\B\FixtureB881;
use DiContainerBenchmarks\Fixture\B\FixtureB882;
use DiContainerBenchmarks\Fixture\B\FixtureB883;
use DiContainerBenchmarks\Fixture\B\FixtureB884;
use DiContainerBenchmarks\Fixture\B\FixtureB885;
use DiContainerBenchmarks\Fixture\B\FixtureB886;
use DiContainerBenchmarks\Fixture\B\FixtureB887;
use DiContainerBenchmarks\Fixture\B\FixtureB888;
use DiContainerBenchmarks\Fixture\B\FixtureB889;
use DiContainerBenchmarks\Fixture\B\FixtureB89;
use DiContainerBenchmarks\Fixture\B\FixtureB890;
use DiContainerBenchmarks\Fixture\B\FixtureB891;
use DiContainerBenchmarks\Fixture\B\FixtureB892;
use DiContainerBenchmarks\Fixture\B\FixtureB893;
use DiContainerBenchmarks\Fixture\B\FixtureB894;
use DiContainerBenchmarks\Fixture\B\FixtureB895;
use DiContainerBenchmarks\Fixture\B\FixtureB896;
use DiContainerBenchmarks\Fixture\B\FixtureB897;
use DiContainerBenchmarks\Fixture\B\FixtureB898;
use DiContainerBenchmarks\Fixture\B\FixtureB899;
use DiContainerBenchmarks\Fixture\B\FixtureB9;
use DiContainerBenchmarks\Fixture\B\FixtureB90;
use DiContainerBenchmarks\Fixture\B\FixtureB900;
use DiContainerBenchmarks\Fixture\B\FixtureB901;
use DiContainerBenchmarks\Fixture\B\FixtureB902;
use DiContainerBenchmarks\Fixture\B\FixtureB903;
use DiContainerBenchmarks\Fixture\B\FixtureB904;
use DiContainerBenchmarks\Fixture\B\FixtureB905;
use DiContainerBenchmarks\Fixture\B\FixtureB906;
use DiContainerBenchmarks\Fixture\B\FixtureB907;
use DiContainerBenchmarks\Fixture\B\FixtureB908;
use DiContainerBenchmarks\Fixture\B\FixtureB909;
use DiContainerBenchmarks\Fixture\B\FixtureB91;
use DiContainerBenchmarks\Fixture\B\FixtureB910;
use DiContainerBenchmarks\Fixture\B\FixtureB911;
use DiContainerBenchmarks\Fixture\B\FixtureB912;
use DiContainerBenchmarks\Fixture\B\FixtureB913;
use DiContainerBenchmarks\Fixture\B\FixtureB914;
use DiContainerBenchmarks\Fixture\B\FixtureB915;
use DiContainerBenchmarks\Fixture\B\FixtureB916;
use DiContainerBenchmarks\Fixture\B\FixtureB917;
use DiContainerBenchmarks\Fixture\B\FixtureB918;
use DiContainerBenchmarks\Fixture\B\FixtureB919;
use DiContainerBenchmarks\Fixture\B\FixtureB92;
use DiContainerBenchmarks\Fixture\B\FixtureB920;
use DiContainerBenchmarks\Fixture\B\FixtureB921;
use DiContainerBenchmarks\Fixture\B\FixtureB922;
use DiContainerBenchmarks\Fixture\B\FixtureB923;
use DiContainerBenchmarks\Fixture\B\FixtureB924;
use DiContainerBenchmarks\Fixture\B\FixtureB925;
use DiContainerBenchmarks\Fixture\B\FixtureB926;
use DiContainerBenchmarks\Fixture\B\FixtureB927;
use DiContainerBenchmarks\Fixture\B\FixtureB928;
use DiContainerBenchmarks\Fixture\B\FixtureB929;
use DiContainerBenchmarks\Fixture\B\FixtureB93;
use DiContainerBenchmarks\Fixture\B\FixtureB930;
use DiContainerBenchmarks\Fixture\B\FixtureB931;
use DiContainerBenchmarks\Fixture\B\FixtureB932;
use DiContainerBenchmarks\Fixture\B\FixtureB933;
use DiContainerBenchmarks\Fixture\B\FixtureB934;
use DiContainerBenchmarks\Fixture\B\FixtureB935;
use DiContainerBenchmarks\Fixture\B\FixtureB936;
use DiContainerBenchmarks\Fixture\B\FixtureB937;
use DiContainerBenchmarks\Fixture\B\FixtureB938;
use DiContainerBenchmarks\Fixture\B\FixtureB939;
use DiContainerBenchmarks\Fixture\B\FixtureB94;
use DiContainerBenchmarks\Fixture\B\FixtureB940;
use DiContainerBenchmarks\Fixture\B\FixtureB941;
use DiContainerBenchmarks\Fixture\B\FixtureB942;
use DiContainerBenchmarks\Fixture\B\FixtureB943;
use DiContainerBenchmarks\Fixture\B\FixtureB944;
use DiContainerBenchmarks\Fixture\B\FixtureB945;
use DiContainerBenchmarks\Fixture\B\FixtureB946;
use DiContainerBenchmarks\Fixture\B\FixtureB947;
use DiContainerBenchmarks\Fixture\B\FixtureB948;
use DiContainerBenchmarks\Fixture\B\FixtureB949;
use DiContainerBenchmarks\Fixture\B\FixtureB95;
use DiContainerBenchmarks\Fixture\B\FixtureB950;
use DiContainerBenchmarks\Fixture\B\FixtureB951;
use DiContainerBenchmarks\Fixture\B\FixtureB952;
use DiContainerBenchmarks\Fixture\B\FixtureB953;
use DiContainerBenchmarks\Fixture\B\FixtureB954;
use DiContainerBenchmarks\Fixture\B\FixtureB955;
use DiContainerBenchmarks\Fixture\B\FixtureB956;
use DiContainerBenchmarks\Fixture\B\FixtureB957;
use DiContainerBenchmarks\Fixture\B\FixtureB958;
use DiContainerBenchmarks\Fixture\B\FixtureB959;
use DiContainerBenchmarks\Fixture\B\FixtureB96;
use DiContainerBenchmarks\Fixture\B\FixtureB960;
use DiContainerBenchmarks\Fixture\B\FixtureB961;
use DiContainerBenchmarks\Fixture\B\FixtureB962;
use DiContainerBenchmarks\Fixture\B\FixtureB963;
use DiContainerBenchmarks\Fixture\B\FixtureB964;
use DiContainerBenchmarks\Fixture\B\FixtureB965;
use DiContainerBenchmarks\Fixture\B\FixtureB966;
use DiContainerBenchmarks\Fixture\B\FixtureB967;
use DiContainerBenchmarks\Fixture\B\FixtureB968;
use DiContainerBenchmarks\Fixture\B\FixtureB969;
use DiContainerBenchmarks\Fixture\B\FixtureB97;
use DiContainerBenchmarks\Fixture\B\FixtureB970;
use DiContainerBenchmarks\Fixture\B\FixtureB971;
use DiContainerBenchmarks\Fixture\B\FixtureB972;
use DiContainerBenchmarks\Fixture\B\FixtureB973;
use DiContainerBenchmarks\Fixture\B\FixtureB974;
use DiContainerBenchmarks\Fixture\B\FixtureB975;
use DiContainerBenchmarks\Fixture\B\FixtureB976;
use DiContainerBenchmarks\Fixture\B\FixtureB977;
use DiContainerBenchmarks\Fixture\B\FixtureB978;
use DiContainerBenchmarks\Fixture\B\FixtureB979;
use DiContainerBenchmarks\Fixture\B\FixtureB98;
use DiContainerBenchmarks\Fixture\B\FixtureB980;
use DiContainerBenchmarks\Fixture\B\FixtureB981;
use DiContainerBenchmarks\Fixture\B\FixtureB982;
use DiContainerBenchmarks\Fixture\B\FixtureB983;
use DiContainerBenchmarks\Fixture\B\FixtureB984;
use DiContainerBenchmarks\Fixture\B\FixtureB985;
use DiContainerBenchmarks\Fixture\B\FixtureB986;
use DiContainerBenchmarks\Fixture\B\FixtureB987;
use DiContainerBenchmarks\Fixture\B\FixtureB988;
use DiContainerBenchmarks\Fixture\B\FixtureB989;
use DiContainerBenchmarks\Fixture\B\FixtureB99;
use DiContainerBenchmarks\Fixture\B\FixtureB990;
use DiContainerBenchmarks\Fixture\B\FixtureB991;
use DiContainerBenchmarks\Fixture\B\FixtureB992;
use DiContainerBenchmarks\Fixture\B\FixtureB993;
use DiContainerBenchmarks\Fixture\B\FixtureB994;
use DiContainerBenchmarks\Fixture\B\FixtureB995;
use DiContainerBenchmarks\Fixture\B\FixtureB996;
use DiContainerBenchmarks\Fixture\B\FixtureB997;
use DiContainerBenchmarks\Fixture\B\FixtureB998;
use DiContainerBenchmarks\Fixture\B\FixtureB999;
use DiContainerBenchmarks\Fixture\C\FixtureC1;
use DiContainerBenchmarks\Fixture\C\FixtureC10;
use DiContainerBenchmarks\Fixture\C\FixtureC100;
use DiContainerBenchmarks\Fixture\C\FixtureC1000;
use DiContainerBenchmarks\Fixture\C\FixtureC101;
use DiContainerBenchmarks\Fixture\C\FixtureC102;
use DiContainerBenchmarks\Fixture\C\FixtureC103;
use DiContainerBenchmarks\Fixture\C\FixtureC104;
use DiContainerBenchmarks\Fixture\C\FixtureC105;
use DiContainerBenchmarks\Fixture\C\FixtureC106;
use DiContainerBenchmarks\Fixture\C\FixtureC107;
use DiContainerBenchmarks\Fixture\C\FixtureC108;
use DiContainerBenchmarks\Fixture\C\FixtureC109;
use DiContainerBenchmarks\Fixture\C\FixtureC11;
use DiContainerBenchmarks\Fixture\C\FixtureC110;
use DiContainerBenchmarks\Fixture\C\FixtureC111;
use DiContainerBenchmarks\Fixture\C\FixtureC112;
use DiContainerBenchmarks\Fixture\C\FixtureC113;
use DiContainerBenchmarks\Fixture\C\FixtureC114;
use DiContainerBenchmarks\Fixture\C\FixtureC115;
use DiContainerBenchmarks\Fixture\C\FixtureC116;
use DiContainerBenchmarks\Fixture\C\FixtureC117;
use DiContainerBenchmarks\Fixture\C\FixtureC118;
use DiContainerBenchmarks\Fixture\C\FixtureC119;
use DiContainerBenchmarks\Fixture\C\FixtureC12;
use DiContainerBenchmarks\Fixture\C\FixtureC120;
use DiContainerBenchmarks\Fixture\C\FixtureC121;
use DiContainerBenchmarks\Fixture\C\FixtureC122;
use DiContainerBenchmarks\Fixture\C\FixtureC123;
use DiContainerBenchmarks\Fixture\C\FixtureC124;
use DiContainerBenchmarks\Fixture\C\FixtureC125;
use DiContainerBenchmarks\Fixture\C\FixtureC126;
use DiContainerBenchmarks\Fixture\C\FixtureC127;
use DiContainerBenchmarks\Fixture\C\FixtureC128;
use DiContainerBenchmarks\Fixture\C\FixtureC129;
use DiContainerBenchmarks\Fixture\C\FixtureC13;
use DiContainerBenchmarks\Fixture\C\FixtureC130;
use DiContainerBenchmarks\Fixture\C\FixtureC131;
use DiContainerBenchmarks\Fixture\C\FixtureC132;
use DiContainerBenchmarks\Fixture\C\FixtureC133;
use DiContainerBenchmarks\Fixture\C\FixtureC134;
use DiContainerBenchmarks\Fixture\C\FixtureC135;
use DiContainerBenchmarks\Fixture\C\FixtureC136;
use DiContainerBenchmarks\Fixture\C\FixtureC137;
use DiContainerBenchmarks\Fixture\C\FixtureC138;
use DiContainerBenchmarks\Fixture\C\FixtureC139;
use DiContainerBenchmarks\Fixture\C\FixtureC14;
use DiContainerBenchmarks\Fixture\C\FixtureC140;
use DiContainerBenchmarks\Fixture\C\FixtureC141;
use DiContainerBenchmarks\Fixture\C\FixtureC142;
use DiContainerBenchmarks\Fixture\C\FixtureC143;
use DiContainerBenchmarks\Fixture\C\FixtureC144;
use DiContainerBenchmarks\Fixture\C\FixtureC145;
use DiContainerBenchmarks\Fixture\C\FixtureC146;
use DiContainerBenchmarks\Fixture\C\FixtureC147;
use DiContainerBenchmarks\Fixture\C\FixtureC148;
use DiContainerBenchmarks\Fixture\C\FixtureC149;
use DiContainerBenchmarks\Fixture\C\FixtureC15;
use DiContainerBenchmarks\Fixture\C\FixtureC150;
use DiContainerBenchmarks\Fixture\C\FixtureC151;
use DiContainerBenchmarks\Fixture\C\FixtureC152;
use DiContainerBenchmarks\Fixture\C\FixtureC153;
use DiContainerBenchmarks\Fixture\C\FixtureC154;
use DiContainerBenchmarks\Fixture\C\FixtureC155;
use DiContainerBenchmarks\Fixture\C\FixtureC156;
use DiContainerBenchmarks\Fixture\C\FixtureC157;
use DiContainerBenchmarks\Fixture\C\FixtureC158;
use DiContainerBenchmarks\Fixture\C\FixtureC159;
use DiContainerBenchmarks\Fixture\C\FixtureC16;
use DiContainerBenchmarks\Fixture\C\FixtureC160;
use DiContainerBenchmarks\Fixture\C\FixtureC161;
use DiContainerBenchmarks\Fixture\C\FixtureC162;
use DiContainerBenchmarks\Fixture\C\FixtureC163;
use DiContainerBenchmarks\Fixture\C\FixtureC164;
use DiContainerBenchmarks\Fixture\C\FixtureC165;
use DiContainerBenchmarks\Fixture\C\FixtureC166;
use DiContainerBenchmarks\Fixture\C\FixtureC167;
use DiContainerBenchmarks\Fixture\C\FixtureC168;
use DiContainerBenchmarks\Fixture\C\FixtureC169;
use DiContainerBenchmarks\Fixture\C\FixtureC17;
use DiContainerBenchmarks\Fixture\C\FixtureC170;
use DiContainerBenchmarks\Fixture\C\FixtureC171;
use DiContainerBenchmarks\Fixture\C\FixtureC172;
use DiContainerBenchmarks\Fixture\C\FixtureC173;
use DiContainerBenchmarks\Fixture\C\FixtureC174;
use DiContainerBenchmarks\Fixture\C\FixtureC175;
use DiContainerBenchmarks\Fixture\C\FixtureC176;
use DiContainerBenchmarks\Fixture\C\FixtureC177;
use DiContainerBenchmarks\Fixture\C\FixtureC178;
use DiContainerBenchmarks\Fixture\C\FixtureC179;
use DiContainerBenchmarks\Fixture\C\FixtureC18;
use DiContainerBenchmarks\Fixture\C\FixtureC180;
use DiContainerBenchmarks\Fixture\C\FixtureC181;
use DiContainerBenchmarks\Fixture\C\FixtureC182;
use DiContainerBenchmarks\Fixture\C\FixtureC183;
use DiContainerBenchmarks\Fixture\C\FixtureC184;
use DiContainerBenchmarks\Fixture\C\FixtureC185;
use DiContainerBenchmarks\Fixture\C\FixtureC186;
use DiContainerBenchmarks\Fixture\C\FixtureC187;
use DiContainerBenchmarks\Fixture\C\FixtureC188;
use DiContainerBenchmarks\Fixture\C\FixtureC189;
use DiContainerBenchmarks\Fixture\C\FixtureC19;
use DiContainerBenchmarks\Fixture\C\FixtureC190;
use DiContainerBenchmarks\Fixture\C\FixtureC191;
use DiContainerBenchmarks\Fixture\C\FixtureC192;
use DiContainerBenchmarks\Fixture\C\FixtureC193;
use DiContainerBenchmarks\Fixture\C\FixtureC194;
use DiContainerBenchmarks\Fixture\C\FixtureC195;
use DiContainerBenchmarks\Fixture\C\FixtureC196;
use DiContainerBenchmarks\Fixture\C\FixtureC197;
use DiContainerBenchmarks\Fixture\C\FixtureC198;
use DiContainerBenchmarks\Fixture\C\FixtureC199;
use DiContainerBenchmarks\Fixture\C\FixtureC2;
use DiContainerBenchmarks\Fixture\C\FixtureC20;
use DiContainerBenchmarks\Fixture\C\FixtureC200;
use DiContainerBenchmarks\Fixture\C\FixtureC201;
use DiContainerBenchmarks\Fixture\C\FixtureC202;
use DiContainerBenchmarks\Fixture\C\FixtureC203;
use DiContainerBenchmarks\Fixture\C\FixtureC204;
use DiContainerBenchmarks\Fixture\C\FixtureC205;
use DiContainerBenchmarks\Fixture\C\FixtureC206;
use DiContainerBenchmarks\Fixture\C\FixtureC207;
use DiContainerBenchmarks\Fixture\C\FixtureC208;
use DiContainerBenchmarks\Fixture\C\FixtureC209;
use DiContainerBenchmarks\Fixture\C\FixtureC21;
use DiContainerBenchmarks\Fixture\C\FixtureC210;
use DiContainerBenchmarks\Fixture\C\FixtureC211;
use DiContainerBenchmarks\Fixture\C\FixtureC212;
use DiContainerBenchmarks\Fixture\C\FixtureC213;
use DiContainerBenchmarks\Fixture\C\FixtureC214;
use DiContainerBenchmarks\Fixture\C\FixtureC215;
use DiContainerBenchmarks\Fixture\C\FixtureC216;
use DiContainerBenchmarks\Fixture\C\FixtureC217;
use DiContainerBenchmarks\Fixture\C\FixtureC218;
use DiContainerBenchmarks\Fixture\C\FixtureC219;
use DiContainerBenchmarks\Fixture\C\FixtureC22;
use DiContainerBenchmarks\Fixture\C\FixtureC220;
use DiContainerBenchmarks\Fixture\C\FixtureC221;
use DiContainerBenchmarks\Fixture\C\FixtureC222;
use DiContainerBenchmarks\Fixture\C\FixtureC223;
use DiContainerBenchmarks\Fixture\C\FixtureC224;
use DiContainerBenchmarks\Fixture\C\FixtureC225;
use DiContainerBenchmarks\Fixture\C\FixtureC226;
use DiContainerBenchmarks\Fixture\C\FixtureC227;
use DiContainerBenchmarks\Fixture\C\FixtureC228;
use DiContainerBenchmarks\Fixture\C\FixtureC229;
use DiContainerBenchmarks\Fixture\C\FixtureC23;
use DiContainerBenchmarks\Fixture\C\FixtureC230;
use DiContainerBenchmarks\Fixture\C\FixtureC231;
use DiContainerBenchmarks\Fixture\C\FixtureC232;
use DiContainerBenchmarks\Fixture\C\FixtureC233;
use DiContainerBenchmarks\Fixture\C\FixtureC234;
use DiContainerBenchmarks\Fixture\C\FixtureC235;
use DiContainerBenchmarks\Fixture\C\FixtureC236;
use DiContainerBenchmarks\Fixture\C\FixtureC237;
use DiContainerBenchmarks\Fixture\C\FixtureC238;
use DiContainerBenchmarks\Fixture\C\FixtureC239;
use DiContainerBenchmarks\Fixture\C\FixtureC24;
use DiContainerBenchmarks\Fixture\C\FixtureC240;
use DiContainerBenchmarks\Fixture\C\FixtureC241;
use DiContainerBenchmarks\Fixture\C\FixtureC242;
use DiContainerBenchmarks\Fixture\C\FixtureC243;
use DiContainerBenchmarks\Fixture\C\FixtureC244;
use DiContainerBenchmarks\Fixture\C\FixtureC245;
use DiContainerBenchmarks\Fixture\C\FixtureC246;
use DiContainerBenchmarks\Fixture\C\FixtureC247;
use DiContainerBenchmarks\Fixture\C\FixtureC248;
use DiContainerBenchmarks\Fixture\C\FixtureC249;
use DiContainerBenchmarks\Fixture\C\FixtureC25;
use DiContainerBenchmarks\Fixture\C\FixtureC250;
use DiContainerBenchmarks\Fixture\C\FixtureC251;
use DiContainerBenchmarks\Fixture\C\FixtureC252;
use DiContainerBenchmarks\Fixture\C\FixtureC253;
use DiContainerBenchmarks\Fixture\C\FixtureC254;
use DiContainerBenchmarks\Fixture\C\FixtureC255;
use DiContainerBenchmarks\Fixture\C\FixtureC256;
use DiContainerBenchmarks\Fixture\C\FixtureC257;
use DiContainerBenchmarks\Fixture\C\FixtureC258;
use DiContainerBenchmarks\Fixture\C\FixtureC259;
use DiContainerBenchmarks\Fixture\C\FixtureC26;
use DiContainerBenchmarks\Fixture\C\FixtureC260;
use DiContainerBenchmarks\Fixture\C\FixtureC261;
use DiContainerBenchmarks\Fixture\C\FixtureC262;
use DiContainerBenchmarks\Fixture\C\FixtureC263;
use DiContainerBenchmarks\Fixture\C\FixtureC264;
use DiContainerBenchmarks\Fixture\C\FixtureC265;
use DiContainerBenchmarks\Fixture\C\FixtureC266;
use DiContainerBenchmarks\Fixture\C\FixtureC267;
use DiContainerBenchmarks\Fixture\C\FixtureC268;
use DiContainerBenchmarks\Fixture\C\FixtureC269;
use DiContainerBenchmarks\Fixture\C\FixtureC27;
use DiContainerBenchmarks\Fixture\C\FixtureC270;
use DiContainerBenchmarks\Fixture\C\FixtureC271;
use DiContainerBenchmarks\Fixture\C\FixtureC272;
use DiContainerBenchmarks\Fixture\C\FixtureC273;
use DiContainerBenchmarks\Fixture\C\FixtureC274;
use DiContainerBenchmarks\Fixture\C\FixtureC275;
use DiContainerBenchmarks\Fixture\C\FixtureC276;
use DiContainerBenchmarks\Fixture\C\FixtureC277;
use DiContainerBenchmarks\Fixture\C\FixtureC278;
use DiContainerBenchmarks\Fixture\C\FixtureC279;
use DiContainerBenchmarks\Fixture\C\FixtureC28;
use DiContainerBenchmarks\Fixture\C\FixtureC280;
use DiContainerBenchmarks\Fixture\C\FixtureC281;
use DiContainerBenchmarks\Fixture\C\FixtureC282;
use DiContainerBenchmarks\Fixture\C\FixtureC283;
use DiContainerBenchmarks\Fixture\C\FixtureC284;
use DiContainerBenchmarks\Fixture\C\FixtureC285;
use DiContainerBenchmarks\Fixture\C\FixtureC286;
use DiContainerBenchmarks\Fixture\C\FixtureC287;
use DiContainerBenchmarks\Fixture\C\FixtureC288;
use DiContainerBenchmarks\Fixture\C\FixtureC289;
use DiContainerBenchmarks\Fixture\C\FixtureC29;
use DiContainerBenchmarks\Fixture\C\FixtureC290;
use DiContainerBenchmarks\Fixture\C\FixtureC291;
use DiContainerBenchmarks\Fixture\C\FixtureC292;
use DiContainerBenchmarks\Fixture\C\FixtureC293;
use DiContainerBenchmarks\Fixture\C\FixtureC294;
use DiContainerBenchmarks\Fixture\C\FixtureC295;
use DiContainerBenchmarks\Fixture\C\FixtureC296;
use DiContainerBenchmarks\Fixture\C\FixtureC297;
use DiContainerBenchmarks\Fixture\C\FixtureC298;
use DiContainerBenchmarks\Fixture\C\FixtureC299;
use DiContainerBenchmarks\Fixture\C\FixtureC3;
use DiContainerBenchmarks\Fixture\C\FixtureC30;
use DiContainerBenchmarks\Fixture\C\FixtureC300;
use DiContainerBenchmarks\Fixture\C\FixtureC301;
use DiContainerBenchmarks\Fixture\C\FixtureC302;
use DiContainerBenchmarks\Fixture\C\FixtureC303;
use DiContainerBenchmarks\Fixture\C\FixtureC304;
use DiContainerBenchmarks\Fixture\C\FixtureC305;
use DiContainerBenchmarks\Fixture\C\FixtureC306;
use DiContainerBenchmarks\Fixture\C\FixtureC307;
use DiContainerBenchmarks\Fixture\C\FixtureC308;
use DiContainerBenchmarks\Fixture\C\FixtureC309;
use DiContainerBenchmarks\Fixture\C\FixtureC31;
use DiContainerBenchmarks\Fixture\C\FixtureC310;
use DiContainerBenchmarks\Fixture\C\FixtureC311;
use DiContainerBenchmarks\Fixture\C\FixtureC312;
use DiContainerBenchmarks\Fixture\C\FixtureC313;
use DiContainerBenchmarks\Fixture\C\FixtureC314;
use DiContainerBenchmarks\Fixture\C\FixtureC315;
use DiContainerBenchmarks\Fixture\C\FixtureC316;
use DiContainerBenchmarks\Fixture\C\FixtureC317;
use DiContainerBenchmarks\Fixture\C\FixtureC318;
use DiContainerBenchmarks\Fixture\C\FixtureC319;
use DiContainerBenchmarks\Fixture\C\FixtureC32;
use DiContainerBenchmarks\Fixture\C\FixtureC320;
use DiContainerBenchmarks\Fixture\C\FixtureC321;
use DiContainerBenchmarks\Fixture\C\FixtureC322;
use DiContainerBenchmarks\Fixture\C\FixtureC323;
use DiContainerBenchmarks\Fixture\C\FixtureC324;
use DiContainerBenchmarks\Fixture\C\FixtureC325;
use DiContainerBenchmarks\Fixture\C\FixtureC326;
use DiContainerBenchmarks\Fixture\C\FixtureC327;
use DiContainerBenchmarks\Fixture\C\FixtureC328;
use DiContainerBenchmarks\Fixture\C\FixtureC329;
use DiContainerBenchmarks\Fixture\C\FixtureC33;
use DiContainerBenchmarks\Fixture\C\FixtureC330;
use DiContainerBenchmarks\Fixture\C\FixtureC331;
use DiContainerBenchmarks\Fixture\C\FixtureC332;
use DiContainerBenchmarks\Fixture\C\FixtureC333;
use DiContainerBenchmarks\Fixture\C\FixtureC334;
use DiContainerBenchmarks\Fixture\C\FixtureC335;
use DiContainerBenchmarks\Fixture\C\FixtureC336;
use DiContainerBenchmarks\Fixture\C\FixtureC337;
use DiContainerBenchmarks\Fixture\C\FixtureC338;
use DiContainerBenchmarks\Fixture\C\FixtureC339;
use DiContainerBenchmarks\Fixture\C\FixtureC34;
use DiContainerBenchmarks\Fixture\C\FixtureC340;
use DiContainerBenchmarks\Fixture\C\FixtureC341;
use DiContainerBenchmarks\Fixture\C\FixtureC342;
use DiContainerBenchmarks\Fixture\C\FixtureC343;
use DiContainerBenchmarks\Fixture\C\FixtureC344;
use DiContainerBenchmarks\Fixture\C\FixtureC345;
use DiContainerBenchmarks\Fixture\C\FixtureC346;
use DiContainerBenchmarks\Fixture\C\FixtureC347;
use DiContainerBenchmarks\Fixture\C\FixtureC348;
use DiContainerBenchmarks\Fixture\C\FixtureC349;
use DiContainerBenchmarks\Fixture\C\FixtureC35;
use DiContainerBenchmarks\Fixture\C\FixtureC350;
use DiContainerBenchmarks\Fixture\C\FixtureC351;
use DiContainerBenchmarks\Fixture\C\FixtureC352;
use DiContainerBenchmarks\Fixture\C\FixtureC353;
use DiContainerBenchmarks\Fixture\C\FixtureC354;
use DiContainerBenchmarks\Fixture\C\FixtureC355;
use DiContainerBenchmarks\Fixture\C\FixtureC356;
use DiContainerBenchmarks\Fixture\C\FixtureC357;
use DiContainerBenchmarks\Fixture\C\FixtureC358;
use DiContainerBenchmarks\Fixture\C\FixtureC359;
use DiContainerBenchmarks\Fixture\C\FixtureC36;
use DiContainerBenchmarks\Fixture\C\FixtureC360;
use DiContainerBenchmarks\Fixture\C\FixtureC361;
use DiContainerBenchmarks\Fixture\C\FixtureC362;
use DiContainerBenchmarks\Fixture\C\FixtureC363;
use DiContainerBenchmarks\Fixture\C\FixtureC364;
use DiContainerBenchmarks\Fixture\C\FixtureC365;
use DiContainerBenchmarks\Fixture\C\FixtureC366;
use DiContainerBenchmarks\Fixture\C\FixtureC367;
use DiContainerBenchmarks\Fixture\C\FixtureC368;
use DiContainerBenchmarks\Fixture\C\FixtureC369;
use DiContainerBenchmarks\Fixture\C\FixtureC37;
use DiContainerBenchmarks\Fixture\C\FixtureC370;
use DiContainerBenchmarks\Fixture\C\FixtureC371;
use DiContainerBenchmarks\Fixture\C\FixtureC372;
use DiContainerBenchmarks\Fixture\C\FixtureC373;
use DiContainerBenchmarks\Fixture\C\FixtureC374;
use DiContainerBenchmarks\Fixture\C\FixtureC375;
use DiContainerBenchmarks\Fixture\C\FixtureC376;
use DiContainerBenchmarks\Fixture\C\FixtureC377;
use DiContainerBenchmarks\Fixture\C\FixtureC378;
use DiContainerBenchmarks\Fixture\C\FixtureC379;
use DiContainerBenchmarks\Fixture\C\FixtureC38;
use DiContainerBenchmarks\Fixture\C\FixtureC380;
use DiContainerBenchmarks\Fixture\C\FixtureC381;
use DiContainerBenchmarks\Fixture\C\FixtureC382;
use DiContainerBenchmarks\Fixture\C\FixtureC383;
use DiContainerBenchmarks\Fixture\C\FixtureC384;
use DiContainerBenchmarks\Fixture\C\FixtureC385;
use DiContainerBenchmarks\Fixture\C\FixtureC386;
use DiContainerBenchmarks\Fixture\C\FixtureC387;
use DiContainerBenchmarks\Fixture\C\FixtureC388;
use DiContainerBenchmarks\Fixture\C\FixtureC389;
use DiContainerBenchmarks\Fixture\C\FixtureC39;
use DiContainerBenchmarks\Fixture\C\FixtureC390;
use DiContainerBenchmarks\Fixture\C\FixtureC391;
use DiContainerBenchmarks\Fixture\C\FixtureC392;
use DiContainerBenchmarks\Fixture\C\FixtureC393;
use DiContainerBenchmarks\Fixture\C\FixtureC394;
use DiContainerBenchmarks\Fixture\C\FixtureC395;
use DiContainerBenchmarks\Fixture\C\FixtureC396;
use DiContainerBenchmarks\Fixture\C\FixtureC397;
use DiContainerBenchmarks\Fixture\C\FixtureC398;
use DiContainerBenchmarks\Fixture\C\FixtureC399;
use DiContainerBenchmarks\Fixture\C\FixtureC4;
use DiContainerBenchmarks\Fixture\C\FixtureC40;
use DiContainerBenchmarks\Fixture\C\FixtureC400;
use DiContainerBenchmarks\Fixture\C\FixtureC401;
use DiContainerBenchmarks\Fixture\C\FixtureC402;
use DiContainerBenchmarks\Fixture\C\FixtureC403;
use DiContainerBenchmarks\Fixture\C\FixtureC404;
use DiContainerBenchmarks\Fixture\C\FixtureC405;
use DiContainerBenchmarks\Fixture\C\FixtureC406;
use DiContainerBenchmarks\Fixture\C\FixtureC407;
use DiContainerBenchmarks\Fixture\C\FixtureC408;
use DiContainerBenchmarks\Fixture\C\FixtureC409;
use DiContainerBenchmarks\Fixture\C\FixtureC41;
use DiContainerBenchmarks\Fixture\C\FixtureC410;
use DiContainerBenchmarks\Fixture\C\FixtureC411;
use DiContainerBenchmarks\Fixture\C\FixtureC412;
use DiContainerBenchmarks\Fixture\C\FixtureC413;
use DiContainerBenchmarks\Fixture\C\FixtureC414;
use DiContainerBenchmarks\Fixture\C\FixtureC415;
use DiContainerBenchmarks\Fixture\C\FixtureC416;
use DiContainerBenchmarks\Fixture\C\FixtureC417;
use DiContainerBenchmarks\Fixture\C\FixtureC418;
use DiContainerBenchmarks\Fixture\C\FixtureC419;
use DiContainerBenchmarks\Fixture\C\FixtureC42;
use DiContainerBenchmarks\Fixture\C\FixtureC420;
use DiContainerBenchmarks\Fixture\C\FixtureC421;
use DiContainerBenchmarks\Fixture\C\FixtureC422;
use DiContainerBenchmarks\Fixture\C\FixtureC423;
use DiContainerBenchmarks\Fixture\C\FixtureC424;
use DiContainerBenchmarks\Fixture\C\FixtureC425;
use DiContainerBenchmarks\Fixture\C\FixtureC426;
use DiContainerBenchmarks\Fixture\C\FixtureC427;
use DiContainerBenchmarks\Fixture\C\FixtureC428;
use DiContainerBenchmarks\Fixture\C\FixtureC429;
use DiContainerBenchmarks\Fixture\C\FixtureC43;
use DiContainerBenchmarks\Fixture\C\FixtureC430;
use DiContainerBenchmarks\Fixture\C\FixtureC431;
use DiContainerBenchmarks\Fixture\C\FixtureC432;
use DiContainerBenchmarks\Fixture\C\FixtureC433;
use DiContainerBenchmarks\Fixture\C\FixtureC434;
use DiContainerBenchmarks\Fixture\C\FixtureC435;
use DiContainerBenchmarks\Fixture\C\FixtureC436;
use DiContainerBenchmarks\Fixture\C\FixtureC437;
use DiContainerBenchmarks\Fixture\C\FixtureC438;
use DiContainerBenchmarks\Fixture\C\FixtureC439;
use DiContainerBenchmarks\Fixture\C\FixtureC44;
use DiContainerBenchmarks\Fixture\C\FixtureC440;
use DiContainerBenchmarks\Fixture\C\FixtureC441;
use DiContainerBenchmarks\Fixture\C\FixtureC442;
use DiContainerBenchmarks\Fixture\C\FixtureC443;
use DiContainerBenchmarks\Fixture\C\FixtureC444;
use DiContainerBenchmarks\Fixture\C\FixtureC445;
use DiContainerBenchmarks\Fixture\C\FixtureC446;
use DiContainerBenchmarks\Fixture\C\FixtureC447;
use DiContainerBenchmarks\Fixture\C\FixtureC448;
use DiContainerBenchmarks\Fixture\C\FixtureC449;
use DiContainerBenchmarks\Fixture\C\FixtureC45;
use DiContainerBenchmarks\Fixture\C\FixtureC450;
use DiContainerBenchmarks\Fixture\C\FixtureC451;
use DiContainerBenchmarks\Fixture\C\FixtureC452;
use DiContainerBenchmarks\Fixture\C\FixtureC453;
use DiContainerBenchmarks\Fixture\C\FixtureC454;
use DiContainerBenchmarks\Fixture\C\FixtureC455;
use DiContainerBenchmarks\Fixture\C\FixtureC456;
use DiContainerBenchmarks\Fixture\C\FixtureC457;
use DiContainerBenchmarks\Fixture\C\FixtureC458;
use DiContainerBenchmarks\Fixture\C\FixtureC459;
use DiContainerBenchmarks\Fixture\C\FixtureC46;
use DiContainerBenchmarks\Fixture\C\FixtureC460;
use DiContainerBenchmarks\Fixture\C\FixtureC461;
use DiContainerBenchmarks\Fixture\C\FixtureC462;
use DiContainerBenchmarks\Fixture\C\FixtureC463;
use DiContainerBenchmarks\Fixture\C\FixtureC464;
use DiContainerBenchmarks\Fixture\C\FixtureC465;
use DiContainerBenchmarks\Fixture\C\FixtureC466;
use DiContainerBenchmarks\Fixture\C\FixtureC467;
use DiContainerBenchmarks\Fixture\C\FixtureC468;
use DiContainerBenchmarks\Fixture\C\FixtureC469;
use DiContainerBenchmarks\Fixture\C\FixtureC47;
use DiContainerBenchmarks\Fixture\C\FixtureC470;
use DiContainerBenchmarks\Fixture\C\FixtureC471;
use DiContainerBenchmarks\Fixture\C\FixtureC472;
use DiContainerBenchmarks\Fixture\C\FixtureC473;
use DiContainerBenchmarks\Fixture\C\FixtureC474;
use DiContainerBenchmarks\Fixture\C\FixtureC475;
use DiContainerBenchmarks\Fixture\C\FixtureC476;
use DiContainerBenchmarks\Fixture\C\FixtureC477;
use DiContainerBenchmarks\Fixture\C\FixtureC478;
use DiContainerBenchmarks\Fixture\C\FixtureC479;
use DiContainerBenchmarks\Fixture\C\FixtureC48;
use DiContainerBenchmarks\Fixture\C\FixtureC480;
use DiContainerBenchmarks\Fixture\C\FixtureC481;
use DiContainerBenchmarks\Fixture\C\FixtureC482;
use DiContainerBenchmarks\Fixture\C\FixtureC483;
use DiContainerBenchmarks\Fixture\C\FixtureC484;
use DiContainerBenchmarks\Fixture\C\FixtureC485;
use DiContainerBenchmarks\Fixture\C\FixtureC486;
use DiContainerBenchmarks\Fixture\C\FixtureC487;
use DiContainerBenchmarks\Fixture\C\FixtureC488;
use DiContainerBenchmarks\Fixture\C\FixtureC489;
use DiContainerBenchmarks\Fixture\C\FixtureC49;
use DiContainerBenchmarks\Fixture\C\FixtureC490;
use DiContainerBenchmarks\Fixture\C\FixtureC491;
use DiContainerBenchmarks\Fixture\C\FixtureC492;
use DiContainerBenchmarks\Fixture\C\FixtureC493;
use DiContainerBenchmarks\Fixture\C\FixtureC494;
use DiContainerBenchmarks\Fixture\C\FixtureC495;
use DiContainerBenchmarks\Fixture\C\FixtureC496;
use DiContainerBenchmarks\Fixture\C\FixtureC497;
use DiContainerBenchmarks\Fixture\C\FixtureC498;
use DiContainerBenchmarks\Fixture\C\FixtureC499;
use DiContainerBenchmarks\Fixture\C\FixtureC5;
use DiContainerBenchmarks\Fixture\C\FixtureC50;
use DiContainerBenchmarks\Fixture\C\FixtureC500;
use DiContainerBenchmarks\Fixture\C\FixtureC501;
use DiContainerBenchmarks\Fixture\C\FixtureC502;
use DiContainerBenchmarks\Fixture\C\FixtureC503;
use DiContainerBenchmarks\Fixture\C\FixtureC504;
use DiContainerBenchmarks\Fixture\C\FixtureC505;
use DiContainerBenchmarks\Fixture\C\FixtureC506;
use DiContainerBenchmarks\Fixture\C\FixtureC507;
use DiContainerBenchmarks\Fixture\C\FixtureC508;
use DiContainerBenchmarks\Fixture\C\FixtureC509;
use DiContainerBenchmarks\Fixture\C\FixtureC51;
use DiContainerBenchmarks\Fixture\C\FixtureC510;
use DiContainerBenchmarks\Fixture\C\FixtureC511;
use DiContainerBenchmarks\Fixture\C\FixtureC512;
use DiContainerBenchmarks\Fixture\C\FixtureC513;
use DiContainerBenchmarks\Fixture\C\FixtureC514;
use DiContainerBenchmarks\Fixture\C\FixtureC515;
use DiContainerBenchmarks\Fixture\C\FixtureC516;
use DiContainerBenchmarks\Fixture\C\FixtureC517;
use DiContainerBenchmarks\Fixture\C\FixtureC518;
use DiContainerBenchmarks\Fixture\C\FixtureC519;
use DiContainerBenchmarks\Fixture\C\FixtureC52;
use DiContainerBenchmarks\Fixture\C\FixtureC520;
use DiContainerBenchmarks\Fixture\C\FixtureC521;
use DiContainerBenchmarks\Fixture\C\FixtureC522;
use DiContainerBenchmarks\Fixture\C\FixtureC523;
use DiContainerBenchmarks\Fixture\C\FixtureC524;
use DiContainerBenchmarks\Fixture\C\FixtureC525;
use DiContainerBenchmarks\Fixture\C\FixtureC526;
use DiContainerBenchmarks\Fixture\C\FixtureC527;
use DiContainerBenchmarks\Fixture\C\FixtureC528;
use DiContainerBenchmarks\Fixture\C\FixtureC529;
use DiContainerBenchmarks\Fixture\C\FixtureC53;
use DiContainerBenchmarks\Fixture\C\FixtureC530;
use DiContainerBenchmarks\Fixture\C\FixtureC531;
use DiContainerBenchmarks\Fixture\C\FixtureC532;
use DiContainerBenchmarks\Fixture\C\FixtureC533;
use DiContainerBenchmarks\Fixture\C\FixtureC534;
use DiContainerBenchmarks\Fixture\C\FixtureC535;
use DiContainerBenchmarks\Fixture\C\FixtureC536;
use DiContainerBenchmarks\Fixture\C\FixtureC537;
use DiContainerBenchmarks\Fixture\C\FixtureC538;
use DiContainerBenchmarks\Fixture\C\FixtureC539;
use DiContainerBenchmarks\Fixture\C\FixtureC54;
use DiContainerBenchmarks\Fixture\C\FixtureC540;
use DiContainerBenchmarks\Fixture\C\FixtureC541;
use DiContainerBenchmarks\Fixture\C\FixtureC542;
use DiContainerBenchmarks\Fixture\C\FixtureC543;
use DiContainerBenchmarks\Fixture\C\FixtureC544;
use DiContainerBenchmarks\Fixture\C\FixtureC545;
use DiContainerBenchmarks\Fixture\C\FixtureC546;
use DiContainerBenchmarks\Fixture\C\FixtureC547;
use DiContainerBenchmarks\Fixture\C\FixtureC548;
use DiContainerBenchmarks\Fixture\C\FixtureC549;
use DiContainerBenchmarks\Fixture\C\FixtureC55;
use DiContainerBenchmarks\Fixture\C\FixtureC550;
use DiContainerBenchmarks\Fixture\C\FixtureC551;
use DiContainerBenchmarks\Fixture\C\FixtureC552;
use DiContainerBenchmarks\Fixture\C\FixtureC553;
use DiContainerBenchmarks\Fixture\C\FixtureC554;
use DiContainerBenchmarks\Fixture\C\FixtureC555;
use DiContainerBenchmarks\Fixture\C\FixtureC556;
use DiContainerBenchmarks\Fixture\C\FixtureC557;
use DiContainerBenchmarks\Fixture\C\FixtureC558;
use DiContainerBenchmarks\Fixture\C\FixtureC559;
use DiContainerBenchmarks\Fixture\C\FixtureC56;
use DiContainerBenchmarks\Fixture\C\FixtureC560;
use DiContainerBenchmarks\Fixture\C\FixtureC561;
use DiContainerBenchmarks\Fixture\C\FixtureC562;
use DiContainerBenchmarks\Fixture\C\FixtureC563;
use DiContainerBenchmarks\Fixture\C\FixtureC564;
use DiContainerBenchmarks\Fixture\C\FixtureC565;
use DiContainerBenchmarks\Fixture\C\FixtureC566;
use DiContainerBenchmarks\Fixture\C\FixtureC567;
use DiContainerBenchmarks\Fixture\C\FixtureC568;
use DiContainerBenchmarks\Fixture\C\FixtureC569;
use DiContainerBenchmarks\Fixture\C\FixtureC57;
use DiContainerBenchmarks\Fixture\C\FixtureC570;
use DiContainerBenchmarks\Fixture\C\FixtureC571;
use DiContainerBenchmarks\Fixture\C\FixtureC572;
use DiContainerBenchmarks\Fixture\C\FixtureC573;
use DiContainerBenchmarks\Fixture\C\FixtureC574;
use DiContainerBenchmarks\Fixture\C\FixtureC575;
use DiContainerBenchmarks\Fixture\C\FixtureC576;
use DiContainerBenchmarks\Fixture\C\FixtureC577;
use DiContainerBenchmarks\Fixture\C\FixtureC578;
use DiContainerBenchmarks\Fixture\C\FixtureC579;
use DiContainerBenchmarks\Fixture\C\FixtureC58;
use DiContainerBenchmarks\Fixture\C\FixtureC580;
use DiContainerBenchmarks\Fixture\C\FixtureC581;
use DiContainerBenchmarks\Fixture\C\FixtureC582;
use DiContainerBenchmarks\Fixture\C\FixtureC583;
use DiContainerBenchmarks\Fixture\C\FixtureC584;
use DiContainerBenchmarks\Fixture\C\FixtureC585;
use DiContainerBenchmarks\Fixture\C\FixtureC586;
use DiContainerBenchmarks\Fixture\C\FixtureC587;
use DiContainerBenchmarks\Fixture\C\FixtureC588;
use DiContainerBenchmarks\Fixture\C\FixtureC589;
use DiContainerBenchmarks\Fixture\C\FixtureC59;
use DiContainerBenchmarks\Fixture\C\FixtureC590;
use DiContainerBenchmarks\Fixture\C\FixtureC591;
use DiContainerBenchmarks\Fixture\C\FixtureC592;
use DiContainerBenchmarks\Fixture\C\FixtureC593;
use DiContainerBenchmarks\Fixture\C\FixtureC594;
use DiContainerBenchmarks\Fixture\C\FixtureC595;
use DiContainerBenchmarks\Fixture\C\FixtureC596;
use DiContainerBenchmarks\Fixture\C\FixtureC597;
use DiContainerBenchmarks\Fixture\C\FixtureC598;
use DiContainerBenchmarks\Fixture\C\FixtureC599;
use DiContainerBenchmarks\Fixture\C\FixtureC6;
use DiContainerBenchmarks\Fixture\C\FixtureC60;
use DiContainerBenchmarks\Fixture\C\FixtureC600;
use DiContainerBenchmarks\Fixture\C\FixtureC601;
use DiContainerBenchmarks\Fixture\C\FixtureC602;
use DiContainerBenchmarks\Fixture\C\FixtureC603;
use DiContainerBenchmarks\Fixture\C\FixtureC604;
use DiContainerBenchmarks\Fixture\C\FixtureC605;
use DiContainerBenchmarks\Fixture\C\FixtureC606;
use DiContainerBenchmarks\Fixture\C\FixtureC607;
use DiContainerBenchmarks\Fixture\C\FixtureC608;
use DiContainerBenchmarks\Fixture\C\FixtureC609;
use DiContainerBenchmarks\Fixture\C\FixtureC61;
use DiContainerBenchmarks\Fixture\C\FixtureC610;
use DiContainerBenchmarks\Fixture\C\FixtureC611;
use DiContainerBenchmarks\Fixture\C\FixtureC612;
use DiContainerBenchmarks\Fixture\C\FixtureC613;
use DiContainerBenchmarks\Fixture\C\FixtureC614;
use DiContainerBenchmarks\Fixture\C\FixtureC615;
use DiContainerBenchmarks\Fixture\C\FixtureC616;
use DiContainerBenchmarks\Fixture\C\FixtureC617;
use DiContainerBenchmarks\Fixture\C\FixtureC618;
use DiContainerBenchmarks\Fixture\C\FixtureC619;
use DiContainerBenchmarks\Fixture\C\FixtureC62;
use DiContainerBenchmarks\Fixture\C\FixtureC620;
use DiContainerBenchmarks\Fixture\C\FixtureC621;
use DiContainerBenchmarks\Fixture\C\FixtureC622;
use DiContainerBenchmarks\Fixture\C\FixtureC623;
use DiContainerBenchmarks\Fixture\C\FixtureC624;
use DiContainerBenchmarks\Fixture\C\FixtureC625;
use DiContainerBenchmarks\Fixture\C\FixtureC626;
use DiContainerBenchmarks\Fixture\C\FixtureC627;
use DiContainerBenchmarks\Fixture\C\FixtureC628;
use DiContainerBenchmarks\Fixture\C\FixtureC629;
use DiContainerBenchmarks\Fixture\C\FixtureC63;
use DiContainerBenchmarks\Fixture\C\FixtureC630;
use DiContainerBenchmarks\Fixture\C\FixtureC631;
use DiContainerBenchmarks\Fixture\C\FixtureC632;
use DiContainerBenchmarks\Fixture\C\FixtureC633;
use DiContainerBenchmarks\Fixture\C\FixtureC634;
use DiContainerBenchmarks\Fixture\C\FixtureC635;
use DiContainerBenchmarks\Fixture\C\FixtureC636;
use DiContainerBenchmarks\Fixture\C\FixtureC637;
use DiContainerBenchmarks\Fixture\C\FixtureC638;
use DiContainerBenchmarks\Fixture\C\FixtureC639;
use DiContainerBenchmarks\Fixture\C\FixtureC64;
use DiContainerBenchmarks\Fixture\C\FixtureC640;
use DiContainerBenchmarks\Fixture\C\FixtureC641;
use DiContainerBenchmarks\Fixture\C\FixtureC642;
use DiContainerBenchmarks\Fixture\C\FixtureC643;
use DiContainerBenchmarks\Fixture\C\FixtureC644;
use DiContainerBenchmarks\Fixture\C\FixtureC645;
use DiContainerBenchmarks\Fixture\C\FixtureC646;
use DiContainerBenchmarks\Fixture\C\FixtureC647;
use DiContainerBenchmarks\Fixture\C\FixtureC648;
use DiContainerBenchmarks\Fixture\C\FixtureC649;
use DiContainerBenchmarks\Fixture\C\FixtureC65;
use DiContainerBenchmarks\Fixture\C\FixtureC650;
use DiContainerBenchmarks\Fixture\C\FixtureC651;
use DiContainerBenchmarks\Fixture\C\FixtureC652;
use DiContainerBenchmarks\Fixture\C\FixtureC653;
use DiContainerBenchmarks\Fixture\C\FixtureC654;
use DiContainerBenchmarks\Fixture\C\FixtureC655;
use DiContainerBenchmarks\Fixture\C\FixtureC656;
use DiContainerBenchmarks\Fixture\C\FixtureC657;
use DiContainerBenchmarks\Fixture\C\FixtureC658;
use DiContainerBenchmarks\Fixture\C\FixtureC659;
use DiContainerBenchmarks\Fixture\C\FixtureC66;
use DiContainerBenchmarks\Fixture\C\FixtureC660;
use DiContainerBenchmarks\Fixture\C\FixtureC661;
use DiContainerBenchmarks\Fixture\C\FixtureC662;
use DiContainerBenchmarks\Fixture\C\FixtureC663;
use DiContainerBenchmarks\Fixture\C\FixtureC664;
use DiContainerBenchmarks\Fixture\C\FixtureC665;
use DiContainerBenchmarks\Fixture\C\FixtureC666;
use DiContainerBenchmarks\Fixture\C\FixtureC667;
use DiContainerBenchmarks\Fixture\C\FixtureC668;
use DiContainerBenchmarks\Fixture\C\FixtureC669;
use DiContainerBenchmarks\Fixture\C\FixtureC67;
use DiContainerBenchmarks\Fixture\C\FixtureC670;
use DiContainerBenchmarks\Fixture\C\FixtureC671;
use DiContainerBenchmarks\Fixture\C\FixtureC672;
use DiContainerBenchmarks\Fixture\C\FixtureC673;
use DiContainerBenchmarks\Fixture\C\FixtureC674;
use DiContainerBenchmarks\Fixture\C\FixtureC675;
use DiContainerBenchmarks\Fixture\C\FixtureC676;
use DiContainerBenchmarks\Fixture\C\FixtureC677;
use DiContainerBenchmarks\Fixture\C\FixtureC678;
use DiContainerBenchmarks\Fixture\C\FixtureC679;
use DiContainerBenchmarks\Fixture\C\FixtureC68;
use DiContainerBenchmarks\Fixture\C\FixtureC680;
use DiContainerBenchmarks\Fixture\C\FixtureC681;
use DiContainerBenchmarks\Fixture\C\FixtureC682;
use DiContainerBenchmarks\Fixture\C\FixtureC683;
use DiContainerBenchmarks\Fixture\C\FixtureC684;
use DiContainerBenchmarks\Fixture\C\FixtureC685;
use DiContainerBenchmarks\Fixture\C\FixtureC686;
use DiContainerBenchmarks\Fixture\C\FixtureC687;
use DiContainerBenchmarks\Fixture\C\FixtureC688;
use DiContainerBenchmarks\Fixture\C\FixtureC689;
use DiContainerBenchmarks\Fixture\C\FixtureC69;
use DiContainerBenchmarks\Fixture\C\FixtureC690;
use DiContainerBenchmarks\Fixture\C\FixtureC691;
use DiContainerBenchmarks\Fixture\C\FixtureC692;
use DiContainerBenchmarks\Fixture\C\FixtureC693;
use DiContainerBenchmarks\Fixture\C\FixtureC694;
use DiContainerBenchmarks\Fixture\C\FixtureC695;
use DiContainerBenchmarks\Fixture\C\FixtureC696;
use DiContainerBenchmarks\Fixture\C\FixtureC697;
use DiContainerBenchmarks\Fixture\C\FixtureC698;
use DiContainerBenchmarks\Fixture\C\FixtureC699;
use DiContainerBenchmarks\Fixture\C\FixtureC7;
use DiContainerBenchmarks\Fixture\C\FixtureC70;
use DiContainerBenchmarks\Fixture\C\FixtureC700;
use DiContainerBenchmarks\Fixture\C\FixtureC701;
use DiContainerBenchmarks\Fixture\C\FixtureC702;
use DiContainerBenchmarks\Fixture\C\FixtureC703;
use DiContainerBenchmarks\Fixture\C\FixtureC704;
use DiContainerBenchmarks\Fixture\C\FixtureC705;
use DiContainerBenchmarks\Fixture\C\FixtureC706;
use DiContainerBenchmarks\Fixture\C\FixtureC707;
use DiContainerBenchmarks\Fixture\C\FixtureC708;
use DiContainerBenchmarks\Fixture\C\FixtureC709;
use DiContainerBenchmarks\Fixture\C\FixtureC71;
use DiContainerBenchmarks\Fixture\C\FixtureC710;
use DiContainerBenchmarks\Fixture\C\FixtureC711;
use DiContainerBenchmarks\Fixture\C\FixtureC712;
use DiContainerBenchmarks\Fixture\C\FixtureC713;
use DiContainerBenchmarks\Fixture\C\FixtureC714;
use DiContainerBenchmarks\Fixture\C\FixtureC715;
use DiContainerBenchmarks\Fixture\C\FixtureC716;
use DiContainerBenchmarks\Fixture\C\FixtureC717;
use DiContainerBenchmarks\Fixture\C\FixtureC718;
use DiContainerBenchmarks\Fixture\C\FixtureC719;
use DiContainerBenchmarks\Fixture\C\FixtureC72;
use DiContainerBenchmarks\Fixture\C\FixtureC720;
use DiContainerBenchmarks\Fixture\C\FixtureC721;
use DiContainerBenchmarks\Fixture\C\FixtureC722;
use DiContainerBenchmarks\Fixture\C\FixtureC723;
use DiContainerBenchmarks\Fixture\C\FixtureC724;
use DiContainerBenchmarks\Fixture\C\FixtureC725;
use DiContainerBenchmarks\Fixture\C\FixtureC726;
use DiContainerBenchmarks\Fixture\C\FixtureC727;
use DiContainerBenchmarks\Fixture\C\FixtureC728;
use DiContainerBenchmarks\Fixture\C\FixtureC729;
use DiContainerBenchmarks\Fixture\C\FixtureC73;
use DiContainerBenchmarks\Fixture\C\FixtureC730;
use DiContainerBenchmarks\Fixture\C\FixtureC731;
use DiContainerBenchmarks\Fixture\C\FixtureC732;
use DiContainerBenchmarks\Fixture\C\FixtureC733;
use DiContainerBenchmarks\Fixture\C\FixtureC734;
use DiContainerBenchmarks\Fixture\C\FixtureC735;
use DiContainerBenchmarks\Fixture\C\FixtureC736;
use DiContainerBenchmarks\Fixture\C\FixtureC737;
use DiContainerBenchmarks\Fixture\C\FixtureC738;
use DiContainerBenchmarks\Fixture\C\FixtureC739;
use DiContainerBenchmarks\Fixture\C\FixtureC74;
use DiContainerBenchmarks\Fixture\C\FixtureC740;
use DiContainerBenchmarks\Fixture\C\FixtureC741;
use DiContainerBenchmarks\Fixture\C\FixtureC742;
use DiContainerBenchmarks\Fixture\C\FixtureC743;
use DiContainerBenchmarks\Fixture\C\FixtureC744;
use DiContainerBenchmarks\Fixture\C\FixtureC745;
use DiContainerBenchmarks\Fixture\C\FixtureC746;
use DiContainerBenchmarks\Fixture\C\FixtureC747;
use DiContainerBenchmarks\Fixture\C\FixtureC748;
use DiContainerBenchmarks\Fixture\C\FixtureC749;
use DiContainerBenchmarks\Fixture\C\FixtureC75;
use DiContainerBenchmarks\Fixture\C\FixtureC750;
use DiContainerBenchmarks\Fixture\C\FixtureC751;
use DiContainerBenchmarks\Fixture\C\FixtureC752;
use DiContainerBenchmarks\Fixture\C\FixtureC753;
use DiContainerBenchmarks\Fixture\C\FixtureC754;
use DiContainerBenchmarks\Fixture\C\FixtureC755;
use DiContainerBenchmarks\Fixture\C\FixtureC756;
use DiContainerBenchmarks\Fixture\C\FixtureC757;
use DiContainerBenchmarks\Fixture\C\FixtureC758;
use DiContainerBenchmarks\Fixture\C\FixtureC759;
use DiContainerBenchmarks\Fixture\C\FixtureC76;
use DiContainerBenchmarks\Fixture\C\FixtureC760;
use DiContainerBenchmarks\Fixture\C\FixtureC761;
use DiContainerBenchmarks\Fixture\C\FixtureC762;
use DiContainerBenchmarks\Fixture\C\FixtureC763;
use DiContainerBenchmarks\Fixture\C\FixtureC764;
use DiContainerBenchmarks\Fixture\C\FixtureC765;
use DiContainerBenchmarks\Fixture\C\FixtureC766;
use DiContainerBenchmarks\Fixture\C\FixtureC767;
use DiContainerBenchmarks\Fixture\C\FixtureC768;
use DiContainerBenchmarks\Fixture\C\FixtureC769;
use DiContainerBenchmarks\Fixture\C\FixtureC77;
use DiContainerBenchmarks\Fixture\C\FixtureC770;
use DiContainerBenchmarks\Fixture\C\FixtureC771;
use DiContainerBenchmarks\Fixture\C\FixtureC772;
use DiContainerBenchmarks\Fixture\C\FixtureC773;
use DiContainerBenchmarks\Fixture\C\FixtureC774;
use DiContainerBenchmarks\Fixture\C\FixtureC775;
use DiContainerBenchmarks\Fixture\C\FixtureC776;
use DiContainerBenchmarks\Fixture\C\FixtureC777;
use DiContainerBenchmarks\Fixture\C\FixtureC778;
use DiContainerBenchmarks\Fixture\C\FixtureC779;
use DiContainerBenchmarks\Fixture\C\FixtureC78;
use DiContainerBenchmarks\Fixture\C\FixtureC780;
use DiContainerBenchmarks\Fixture\C\FixtureC781;
use DiContainerBenchmarks\Fixture\C\FixtureC782;
use DiContainerBenchmarks\Fixture\C\FixtureC783;
use DiContainerBenchmarks\Fixture\C\FixtureC784;
use DiContainerBenchmarks\Fixture\C\FixtureC785;
use DiContainerBenchmarks\Fixture\C\FixtureC786;
use DiContainerBenchmarks\Fixture\C\FixtureC787;
use DiContainerBenchmarks\Fixture\C\FixtureC788;
use DiContainerBenchmarks\Fixture\C\FixtureC789;
use DiContainerBenchmarks\Fixture\C\FixtureC79;
use DiContainerBenchmarks\Fixture\C\FixtureC790;
use DiContainerBenchmarks\Fixture\C\FixtureC791;
use DiContainerBenchmarks\Fixture\C\FixtureC792;
use DiContainerBenchmarks\Fixture\C\FixtureC793;
use DiContainerBenchmarks\Fixture\C\FixtureC794;
use DiContainerBenchmarks\Fixture\C\FixtureC795;
use DiContainerBenchmarks\Fixture\C\FixtureC796;
use DiContainerBenchmarks\Fixture\C\FixtureC797;
use DiContainerBenchmarks\Fixture\C\FixtureC798;
use DiContainerBenchmarks\Fixture\C\FixtureC799;
use DiContainerBenchmarks\Fixture\C\FixtureC8;
use DiContainerBenchmarks\Fixture\C\FixtureC80;
use DiContainerBenchmarks\Fixture\C\FixtureC800;
use DiContainerBenchmarks\Fixture\C\FixtureC801;
use DiContainerBenchmarks\Fixture\C\FixtureC802;
use DiContainerBenchmarks\Fixture\C\FixtureC803;
use DiContainerBenchmarks\Fixture\C\FixtureC804;
use DiContainerBenchmarks\Fixture\C\FixtureC805;
use DiContainerBenchmarks\Fixture\C\FixtureC806;
use DiContainerBenchmarks\Fixture\C\FixtureC807;
use DiContainerBenchmarks\Fixture\C\FixtureC808;
use DiContainerBenchmarks\Fixture\C\FixtureC809;
use DiContainerBenchmarks\Fixture\C\FixtureC81;
use DiContainerBenchmarks\Fixture\C\FixtureC810;
use DiContainerBenchmarks\Fixture\C\FixtureC811;
use DiContainerBenchmarks\Fixture\C\FixtureC812;
use DiContainerBenchmarks\Fixture\C\FixtureC813;
use DiContainerBenchmarks\Fixture\C\FixtureC814;
use DiContainerBenchmarks\Fixture\C\FixtureC815;
use DiContainerBenchmarks\Fixture\C\FixtureC816;
use DiContainerBenchmarks\Fixture\C\FixtureC817;
use DiContainerBenchmarks\Fixture\C\FixtureC818;
use DiContainerBenchmarks\Fixture\C\FixtureC819;
use DiContainerBenchmarks\Fixture\C\FixtureC82;
use DiContainerBenchmarks\Fixture\C\FixtureC820;
use DiContainerBenchmarks\Fixture\C\FixtureC821;
use DiContainerBenchmarks\Fixture\C\FixtureC822;
use DiContainerBenchmarks\Fixture\C\FixtureC823;
use DiContainerBenchmarks\Fixture\C\FixtureC824;
use DiContainerBenchmarks\Fixture\C\FixtureC825;
use DiContainerBenchmarks\Fixture\C\FixtureC826;
use DiContainerBenchmarks\Fixture\C\FixtureC827;
use DiContainerBenchmarks\Fixture\C\FixtureC828;
use DiContainerBenchmarks\Fixture\C\FixtureC829;
use DiContainerBenchmarks\Fixture\C\FixtureC83;
use DiContainerBenchmarks\Fixture\C\FixtureC830;
use DiContainerBenchmarks\Fixture\C\FixtureC831;
use DiContainerBenchmarks\Fixture\C\FixtureC832;
use DiContainerBenchmarks\Fixture\C\FixtureC833;
use DiContainerBenchmarks\Fixture\C\FixtureC834;
use DiContainerBenchmarks\Fixture\C\FixtureC835;
use DiContainerBenchmarks\Fixture\C\FixtureC836;
use DiContainerBenchmarks\Fixture\C\FixtureC837;
use DiContainerBenchmarks\Fixture\C\FixtureC838;
use DiContainerBenchmarks\Fixture\C\FixtureC839;
use DiContainerBenchmarks\Fixture\C\FixtureC84;
use DiContainerBenchmarks\Fixture\C\FixtureC840;
use DiContainerBenchmarks\Fixture\C\FixtureC841;
use DiContainerBenchmarks\Fixture\C\FixtureC842;
use DiContainerBenchmarks\Fixture\C\FixtureC843;
use DiContainerBenchmarks\Fixture\C\FixtureC844;
use DiContainerBenchmarks\Fixture\C\FixtureC845;
use DiContainerBenchmarks\Fixture\C\FixtureC846;
use DiContainerBenchmarks\Fixture\C\FixtureC847;
use DiContainerBenchmarks\Fixture\C\FixtureC848;
use DiContainerBenchmarks\Fixture\C\FixtureC849;
use DiContainerBenchmarks\Fixture\C\FixtureC85;
use DiContainerBenchmarks\Fixture\C\FixtureC850;
use DiContainerBenchmarks\Fixture\C\FixtureC851;
use DiContainerBenchmarks\Fixture\C\FixtureC852;
use DiContainerBenchmarks\Fixture\C\FixtureC853;
use DiContainerBenchmarks\Fixture\C\FixtureC854;
use DiContainerBenchmarks\Fixture\C\FixtureC855;
use DiContainerBenchmarks\Fixture\C\FixtureC856;
use DiContainerBenchmarks\Fixture\C\FixtureC857;
use DiContainerBenchmarks\Fixture\C\FixtureC858;
use DiContainerBenchmarks\Fixture\C\FixtureC859;
use DiContainerBenchmarks\Fixture\C\FixtureC86;
use DiContainerBenchmarks\Fixture\C\FixtureC860;
use DiContainerBenchmarks\Fixture\C\FixtureC861;
use DiContainerBenchmarks\Fixture\C\FixtureC862;
use DiContainerBenchmarks\Fixture\C\FixtureC863;
use DiContainerBenchmarks\Fixture\C\FixtureC864;
use DiContainerBenchmarks\Fixture\C\FixtureC865;
use DiContainerBenchmarks\Fixture\C\FixtureC866;
use DiContainerBenchmarks\Fixture\C\FixtureC867;
use DiContainerBenchmarks\Fixture\C\FixtureC868;
use DiContainerBenchmarks\Fixture\C\FixtureC869;
use DiContainerBenchmarks\Fixture\C\FixtureC87;
use DiContainerBenchmarks\Fixture\C\FixtureC870;
use DiContainerBenchmarks\Fixture\C\FixtureC871;
use DiContainerBenchmarks\Fixture\C\FixtureC872;
use DiContainerBenchmarks\Fixture\C\FixtureC873;
use DiContainerBenchmarks\Fixture\C\FixtureC874;
use DiContainerBenchmarks\Fixture\C\FixtureC875;
use DiContainerBenchmarks\Fixture\C\FixtureC876;
use DiContainerBenchmarks\Fixture\C\FixtureC877;
use DiContainerBenchmarks\Fixture\C\FixtureC878;
use DiContainerBenchmarks\Fixture\C\FixtureC879;
use DiContainerBenchmarks\Fixture\C\FixtureC88;
use DiContainerBenchmarks\Fixture\C\FixtureC880;
use DiContainerBenchmarks\Fixture\C\FixtureC881;
use DiContainerBenchmarks\Fixture\C\FixtureC882;
use DiContainerBenchmarks\Fixture\C\FixtureC883;
use DiContainerBenchmarks\Fixture\C\FixtureC884;
use DiContainerBenchmarks\Fixture\C\FixtureC885;
use DiContainerBenchmarks\Fixture\C\FixtureC886;
use DiContainerBenchmarks\Fixture\C\FixtureC887;
use DiContainerBenchmarks\Fixture\C\FixtureC888;
use DiContainerBenchmarks\Fixture\C\FixtureC889;
use DiContainerBenchmarks\Fixture\C\FixtureC89;
use DiContainerBenchmarks\Fixture\C\FixtureC890;
use DiContainerBenchmarks\Fixture\C\FixtureC891;
use DiContainerBenchmarks\Fixture\C\FixtureC892;
use DiContainerBenchmarks\Fixture\C\FixtureC893;
use DiContainerBenchmarks\Fixture\C\FixtureC894;
use DiContainerBenchmarks\Fixture\C\FixtureC895;
use DiContainerBenchmarks\Fixture\C\FixtureC896;
use DiContainerBenchmarks\Fixture\C\FixtureC897;
use DiContainerBenchmarks\Fixture\C\FixtureC898;
use DiContainerBenchmarks\Fixture\C\FixtureC899;
use DiContainerBenchmarks\Fixture\C\FixtureC9;
use DiContainerBenchmarks\Fixture\C\FixtureC90;
use DiContainerBenchmarks\Fixture\C\FixtureC900;
use DiContainerBenchmarks\Fixture\C\FixtureC901;
use DiContainerBenchmarks\Fixture\C\FixtureC902;
use DiContainerBenchmarks\Fixture\C\FixtureC903;
use DiContainerBenchmarks\Fixture\C\FixtureC904;
use DiContainerBenchmarks\Fixture\C\FixtureC905;
use DiContainerBenchmarks\Fixture\C\FixtureC906;
use DiContainerBenchmarks\Fixture\C\FixtureC907;
use DiContainerBenchmarks\Fixture\C\FixtureC908;
use DiContainerBenchmarks\Fixture\C\FixtureC909;
use DiContainerBenchmarks\Fixture\C\FixtureC91;
use DiContainerBenchmarks\Fixture\C\FixtureC910;
use DiContainerBenchmarks\Fixture\C\FixtureC911;
use DiContainerBenchmarks\Fixture\C\FixtureC912;
use DiContainerBenchmarks\Fixture\C\FixtureC913;
use DiContainerBenchmarks\Fixture\C\FixtureC914;
use DiContainerBenchmarks\Fixture\C\FixtureC915;
use DiContainerBenchmarks\Fixture\C\FixtureC916;
use DiContainerBenchmarks\Fixture\C\FixtureC917;
use DiContainerBenchmarks\Fixture\C\FixtureC918;
use DiContainerBenchmarks\Fixture\C\FixtureC919;
use DiContainerBenchmarks\Fixture\C\FixtureC92;
use DiContainerBenchmarks\Fixture\C\FixtureC920;
use DiContainerBenchmarks\Fixture\C\FixtureC921;
use DiContainerBenchmarks\Fixture\C\FixtureC922;
use DiContainerBenchmarks\Fixture\C\FixtureC923;
use DiContainerBenchmarks\Fixture\C\FixtureC924;
use DiContainerBenchmarks\Fixture\C\FixtureC925;
use DiContainerBenchmarks\Fixture\C\FixtureC926;
use DiContainerBenchmarks\Fixture\C\FixtureC927;
use DiContainerBenchmarks\Fixture\C\FixtureC928;
use DiContainerBenchmarks\Fixture\C\FixtureC929;
use DiContainerBenchmarks\Fixture\C\FixtureC93;
use DiContainerBenchmarks\Fixture\C\FixtureC930;
use DiContainerBenchmarks\Fixture\C\FixtureC931;
use DiContainerBenchmarks\Fixture\C\FixtureC932;
use DiContainerBenchmarks\Fixture\C\FixtureC933;
use DiContainerBenchmarks\Fixture\C\FixtureC934;
use DiContainerBenchmarks\Fixture\C\FixtureC935;
use DiContainerBenchmarks\Fixture\C\FixtureC936;
use DiContainerBenchmarks\Fixture\C\FixtureC937;
use DiContainerBenchmarks\Fixture\C\FixtureC938;
use DiContainerBenchmarks\Fixture\C\FixtureC939;
use DiContainerBenchmarks\Fixture\C\FixtureC94;
use DiContainerBenchmarks\Fixture\C\FixtureC940;
use DiContainerBenchmarks\Fixture\C\FixtureC941;
use DiContainerBenchmarks\Fixture\C\FixtureC942;
use DiContainerBenchmarks\Fixture\C\FixtureC943;
use DiContainerBenchmarks\Fixture\C\FixtureC944;
use DiContainerBenchmarks\Fixture\C\FixtureC945;
use DiContainerBenchmarks\Fixture\C\FixtureC946;
use DiContainerBenchmarks\Fixture\C\FixtureC947;
use DiContainerBenchmarks\Fixture\C\FixtureC948;
use DiContainerBenchmarks\Fixture\C\FixtureC949;
use DiContainerBenchmarks\Fixture\C\FixtureC95;
use DiContainerBenchmarks\Fixture\C\FixtureC950;
use DiContainerBenchmarks\Fixture\C\FixtureC951;
use DiContainerBenchmarks\Fixture\C\FixtureC952;
use DiContainerBenchmarks\Fixture\C\FixtureC953;
use DiContainerBenchmarks\Fixture\C\FixtureC954;
use DiContainerBenchmarks\Fixture\C\FixtureC955;
use DiContainerBenchmarks\Fixture\C\FixtureC956;
use DiContainerBenchmarks\Fixture\C\FixtureC957;
use DiContainerBenchmarks\Fixture\C\FixtureC958;
use DiContainerBenchmarks\Fixture\C\FixtureC959;
use DiContainerBenchmarks\Fixture\C\FixtureC96;
use DiContainerBenchmarks\Fixture\C\FixtureC960;
use DiContainerBenchmarks\Fixture\C\FixtureC961;
use DiContainerBenchmarks\Fixture\C\FixtureC962;
use DiContainerBenchmarks\Fixture\C\FixtureC963;
use DiContainerBenchmarks\Fixture\C\FixtureC964;
use DiContainerBenchmarks\Fixture\C\FixtureC965;
use DiContainerBenchmarks\Fixture\C\FixtureC966;
use DiContainerBenchmarks\Fixture\C\FixtureC967;
use DiContainerBenchmarks\Fixture\C\FixtureC968;
use DiContainerBenchmarks\Fixture\C\FixtureC969;
use DiContainerBenchmarks\Fixture\C\FixtureC97;
use DiContainerBenchmarks\Fixture\C\FixtureC970;
use DiContainerBenchmarks\Fixture\C\FixtureC971;
use DiContainerBenchmarks\Fixture\C\FixtureC972;
use DiContainerBenchmarks\Fixture\C\FixtureC973;
use DiContainerBenchmarks\Fixture\C\FixtureC974;
use DiContainerBenchmarks\Fixture\C\FixtureC975;
use DiContainerBenchmarks\Fixture\C\FixtureC976;
use DiContainerBenchmarks\Fixture\C\FixtureC977;
use DiContainerBenchmarks\Fixture\C\FixtureC978;
use DiContainerBenchmarks\Fixture\C\FixtureC979;
use DiContainerBenchmarks\Fixture\C\FixtureC98;
use DiContainerBenchmarks\Fixture\C\FixtureC980;
use DiContainerBenchmarks\Fixture\C\FixtureC981;
use DiContainerBenchmarks\Fixture\C\FixtureC982;
use DiContainerBenchmarks\Fixture\C\FixtureC983;
use DiContainerBenchmarks\Fixture\C\FixtureC984;
use DiContainerBenchmarks\Fixture\C\FixtureC985;
use DiContainerBenchmarks\Fixture\C\FixtureC986;
use DiContainerBenchmarks\Fixture\C\FixtureC987;
use DiContainerBenchmarks\Fixture\C\FixtureC988;
use DiContainerBenchmarks\Fixture\C\FixtureC989;
use DiContainerBenchmarks\Fixture\C\FixtureC99;
use DiContainerBenchmarks\Fixture\C\FixtureC990;
use DiContainerBenchmarks\Fixture\C\FixtureC991;
use DiContainerBenchmarks\Fixture\C\FixtureC992;
use DiContainerBenchmarks\Fixture\C\FixtureC993;
use DiContainerBenchmarks\Fixture\C\FixtureC994;
use DiContainerBenchmarks\Fixture\C\FixtureC995;
use DiContainerBenchmarks\Fixture\C\FixtureC996;
use DiContainerBenchmarks\Fixture\C\FixtureC997;
use DiContainerBenchmarks\Fixture\C\FixtureC998;
use DiContainerBenchmarks\Fixture\C\FixtureC999;

final class ChubbyphpContainerAdapter implements ContainerAdapterInterface
{
    public function build(): void
    {
    }

    public function bootstrapSingletonContainer()
    {
        /* Generated with:
            for ($i = 1; $i <= 100; $i++) {
               echo "use DiContainerBenchmarks\\Fixture\\A\\FixtureA$i";\n";
            }

            for ($i = 1; $i <= 1000; $i++) {
               echo "use DiContainerBenchmarks\\Fixture\\B\\FixtureB$i";\n";
            }

            for ($i = 1; $i <= 1000; $i++) {
               echo "use DiContainerBenchmarks\\Fixture\\C\\FixtureC$i";\n";
            }

            for ($i = 1; $i <= 100; $i++) {
               echo "\$container->factory(FixtureA" . $i . "::class, static function (ContainerInterface \$container) {\n";
               echo "    return new FixtureA{$i}(\$container->get(FixtureA" . ($i-1) . "::class));\n";
               echo "});\n\n";
            }

            for ($i = 1; $i <= 1000; $i++) {
               echo "\$container->factory(FixtureB" . $i . "::class, static function () {\n";
               echo "    return new FixtureB{$i}();\n";
               echo "});\n\n";
            }

            for ($i = 1; $i <= 1000; $i++) {
               echo "\$container->factory(FixtureC" . $i . "::class, static function (ContainerInterface \$container) {\n";
               echo "    return new FixtureC{$i}(\$container->get(FixtureC" . ($i-1) . "::class));\n";
               echo "});\n\n";
            }
        */
        $container = new Container();

        $container->factory(FixtureA1::class, static function () {
            return new FixtureA1();
        });

        $container->factory(FixtureA2::class, static function (ContainerInterface $container) {
            return new FixtureA2($container->get(FixtureA1::class));
        });

        $container->factory(FixtureA3::class, static function (ContainerInterface $container) {
            return new FixtureA3($container->get(FixtureA2::class));
        });

        $container->factory(FixtureA4::class, static function (ContainerInterface $container) {
            return new FixtureA4($container->get(FixtureA3::class));
        });

        $container->factory(FixtureA5::class, static function (ContainerInterface $container) {
            return new FixtureA5($container->get(FixtureA4::class));
        });

        $container->factory(FixtureA6::class, static function (ContainerInterface $container) {
            return new FixtureA6($container->get(FixtureA5::class));
        });

        $container->factory(FixtureA7::class, static function (ContainerInterface $container) {
            return new FixtureA7($container->get(FixtureA6::class));
        });

        $container->factory(FixtureA8::class, static function (ContainerInterface $container) {
            return new FixtureA8($container->get(FixtureA7::class));
        });

        $container->factory(FixtureA9::class, static function (ContainerInterface $container) {
            return new FixtureA9($container->get(FixtureA8::class));
        });

        $container->factory(FixtureA10::class, static function (ContainerInterface $container) {
            return new FixtureA10($container->get(FixtureA9::class));
        });

        $container->factory(FixtureA11::class, static function (ContainerInterface $container) {
            return new FixtureA11($container->get(FixtureA10::class));
        });

        $container->factory(FixtureA12::class, static function (ContainerInterface $container) {
            return new FixtureA12($container->get(FixtureA11::class));
        });

        $container->factory(FixtureA13::class, static function (ContainerInterface $container) {
            return new FixtureA13($container->get(FixtureA12::class));
        });

        $container->factory(FixtureA14::class, static function (ContainerInterface $container) {
            return new FixtureA14($container->get(FixtureA13::class));
        });

        $container->factory(FixtureA15::class, static function (ContainerInterface $container) {
            return new FixtureA15($container->get(FixtureA14::class));
        });

        $container->factory(FixtureA16::class, static function (ContainerInterface $container) {
            return new FixtureA16($container->get(FixtureA15::class));
        });

        $container->factory(FixtureA17::class, static function (ContainerInterface $container) {
            return new FixtureA17($container->get(FixtureA16::class));
        });

        $container->factory(FixtureA18::class, static function (ContainerInterface $container) {
            return new FixtureA18($container->get(FixtureA17::class));
        });

        $container->factory(FixtureA19::class, static function (ContainerInterface $container) {
            return new FixtureA19($container->get(FixtureA18::class));
        });

        $container->factory(FixtureA20::class, static function (ContainerInterface $container) {
            return new FixtureA20($container->get(FixtureA19::class));
        });

        $container->factory(FixtureA21::class, static function (ContainerInterface $container) {
            return new FixtureA21($container->get(FixtureA20::class));
        });

        $container->factory(FixtureA22::class, static function (ContainerInterface $container) {
            return new FixtureA22($container->get(FixtureA21::class));
        });

        $container->factory(FixtureA23::class, static function (ContainerInterface $container) {
            return new FixtureA23($container->get(FixtureA22::class));
        });

        $container->factory(FixtureA24::class, static function (ContainerInterface $container) {
            return new FixtureA24($container->get(FixtureA23::class));
        });

        $container->factory(FixtureA25::class, static function (ContainerInterface $container) {
            return new FixtureA25($container->get(FixtureA24::class));
        });

        $container->factory(FixtureA26::class, static function (ContainerInterface $container) {
            return new FixtureA26($container->get(FixtureA25::class));
        });

        $container->factory(FixtureA27::class, static function (ContainerInterface $container) {
            return new FixtureA27($container->get(FixtureA26::class));
        });

        $container->factory(FixtureA28::class, static function (ContainerInterface $container) {
            return new FixtureA28($container->get(FixtureA27::class));
        });

        $container->factory(FixtureA29::class, static function (ContainerInterface $container) {
            return new FixtureA29($container->get(FixtureA28::class));
        });

        $container->factory(FixtureA30::class, static function (ContainerInterface $container) {
            return new FixtureA30($container->get(FixtureA29::class));
        });

        $container->factory(FixtureA31::class, static function (ContainerInterface $container) {
            return new FixtureA31($container->get(FixtureA30::class));
        });

        $container->factory(FixtureA32::class, static function (ContainerInterface $container) {
            return new FixtureA32($container->get(FixtureA31::class));
        });

        $container->factory(FixtureA33::class, static function (ContainerInterface $container) {
            return new FixtureA33($container->get(FixtureA32::class));
        });

        $container->factory(FixtureA34::class, static function (ContainerInterface $container) {
            return new FixtureA34($container->get(FixtureA33::class));
        });

        $container->factory(FixtureA35::class, static function (ContainerInterface $container) {
            return new FixtureA35($container->get(FixtureA34::class));
        });

        $container->factory(FixtureA36::class, static function (ContainerInterface $container) {
            return new FixtureA36($container->get(FixtureA35::class));
        });

        $container->factory(FixtureA37::class, static function (ContainerInterface $container) {
            return new FixtureA37($container->get(FixtureA36::class));
        });

        $container->factory(FixtureA38::class, static function (ContainerInterface $container) {
            return new FixtureA38($container->get(FixtureA37::class));
        });

        $container->factory(FixtureA39::class, static function (ContainerInterface $container) {
            return new FixtureA39($container->get(FixtureA38::class));
        });

        $container->factory(FixtureA40::class, static function (ContainerInterface $container) {
            return new FixtureA40($container->get(FixtureA39::class));
        });

        $container->factory(FixtureA41::class, static function (ContainerInterface $container) {
            return new FixtureA41($container->get(FixtureA40::class));
        });

        $container->factory(FixtureA42::class, static function (ContainerInterface $container) {
            return new FixtureA42($container->get(FixtureA41::class));
        });

        $container->factory(FixtureA43::class, static function (ContainerInterface $container) {
            return new FixtureA43($container->get(FixtureA42::class));
        });

        $container->factory(FixtureA44::class, static function (ContainerInterface $container) {
            return new FixtureA44($container->get(FixtureA43::class));
        });

        $container->factory(FixtureA45::class, static function (ContainerInterface $container) {
            return new FixtureA45($container->get(FixtureA44::class));
        });

        $container->factory(FixtureA46::class, static function (ContainerInterface $container) {
            return new FixtureA46($container->get(FixtureA45::class));
        });

        $container->factory(FixtureA47::class, static function (ContainerInterface $container) {
            return new FixtureA47($container->get(FixtureA46::class));
        });

        $container->factory(FixtureA48::class, static function (ContainerInterface $container) {
            return new FixtureA48($container->get(FixtureA47::class));
        });

        $container->factory(FixtureA49::class, static function (ContainerInterface $container) {
            return new FixtureA49($container->get(FixtureA48::class));
        });

        $container->factory(FixtureA50::class, static function (ContainerInterface $container) {
            return new FixtureA50($container->get(FixtureA49::class));
        });

        $container->factory(FixtureA51::class, static function (ContainerInterface $container) {
            return new FixtureA51($container->get(FixtureA50::class));
        });

        $container->factory(FixtureA52::class, static function (ContainerInterface $container) {
            return new FixtureA52($container->get(FixtureA51::class));
        });

        $container->factory(FixtureA53::class, static function (ContainerInterface $container) {
            return new FixtureA53($container->get(FixtureA52::class));
        });

        $container->factory(FixtureA54::class, static function (ContainerInterface $container) {
            return new FixtureA54($container->get(FixtureA53::class));
        });

        $container->factory(FixtureA55::class, static function (ContainerInterface $container) {
            return new FixtureA55($container->get(FixtureA54::class));
        });

        $container->factory(FixtureA56::class, static function (ContainerInterface $container) {
            return new FixtureA56($container->get(FixtureA55::class));
        });

        $container->factory(FixtureA57::class, static function (ContainerInterface $container) {
            return new FixtureA57($container->get(FixtureA56::class));
        });

        $container->factory(FixtureA58::class, static function (ContainerInterface $container) {
            return new FixtureA58($container->get(FixtureA57::class));
        });

        $container->factory(FixtureA59::class, static function (ContainerInterface $container) {
            return new FixtureA59($container->get(FixtureA58::class));
        });

        $container->factory(FixtureA60::class, static function (ContainerInterface $container) {
            return new FixtureA60($container->get(FixtureA59::class));
        });

        $container->factory(FixtureA61::class, static function (ContainerInterface $container) {
            return new FixtureA61($container->get(FixtureA60::class));
        });

        $container->factory(FixtureA62::class, static function (ContainerInterface $container) {
            return new FixtureA62($container->get(FixtureA61::class));
        });

        $container->factory(FixtureA63::class, static function (ContainerInterface $container) {
            return new FixtureA63($container->get(FixtureA62::class));
        });

        $container->factory(FixtureA64::class, static function (ContainerInterface $container) {
            return new FixtureA64($container->get(FixtureA63::class));
        });

        $container->factory(FixtureA65::class, static function (ContainerInterface $container) {
            return new FixtureA65($container->get(FixtureA64::class));
        });

        $container->factory(FixtureA66::class, static function (ContainerInterface $container) {
            return new FixtureA66($container->get(FixtureA65::class));
        });

        $container->factory(FixtureA67::class, static function (ContainerInterface $container) {
            return new FixtureA67($container->get(FixtureA66::class));
        });

        $container->factory(FixtureA68::class, static function (ContainerInterface $container) {
            return new FixtureA68($container->get(FixtureA67::class));
        });

        $container->factory(FixtureA69::class, static function (ContainerInterface $container) {
            return new FixtureA69($container->get(FixtureA68::class));
        });

        $container->factory(FixtureA70::class, static function (ContainerInterface $container) {
            return new FixtureA70($container->get(FixtureA69::class));
        });

        $container->factory(FixtureA71::class, static function (ContainerInterface $container) {
            return new FixtureA71($container->get(FixtureA70::class));
        });

        $container->factory(FixtureA72::class, static function (ContainerInterface $container) {
            return new FixtureA72($container->get(FixtureA71::class));
        });

        $container->factory(FixtureA73::class, static function (ContainerInterface $container) {
            return new FixtureA73($container->get(FixtureA72::class));
        });

        $container->factory(FixtureA74::class, static function (ContainerInterface $container) {
            return new FixtureA74($container->get(FixtureA73::class));
        });

        $container->factory(FixtureA75::class, static function (ContainerInterface $container) {
            return new FixtureA75($container->get(FixtureA74::class));
        });

        $container->factory(FixtureA76::class, static function (ContainerInterface $container) {
            return new FixtureA76($container->get(FixtureA75::class));
        });

        $container->factory(FixtureA77::class, static function (ContainerInterface $container) {
            return new FixtureA77($container->get(FixtureA76::class));
        });

        $container->factory(FixtureA78::class, static function (ContainerInterface $container) {
            return new FixtureA78($container->get(FixtureA77::class));
        });

        $container->factory(FixtureA79::class, static function (ContainerInterface $container) {
            return new FixtureA79($container->get(FixtureA78::class));
        });

        $container->factory(FixtureA80::class, static function (ContainerInterface $container) {
            return new FixtureA80($container->get(FixtureA79::class));
        });

        $container->factory(FixtureA81::class, static function (ContainerInterface $container) {
            return new FixtureA81($container->get(FixtureA80::class));
        });

        $container->factory(FixtureA82::class, static function (ContainerInterface $container) {
            return new FixtureA82($container->get(FixtureA81::class));
        });

        $container->factory(FixtureA83::class, static function (ContainerInterface $container) {
            return new FixtureA83($container->get(FixtureA82::class));
        });

        $container->factory(FixtureA84::class, static function (ContainerInterface $container) {
            return new FixtureA84($container->get(FixtureA83::class));
        });

        $container->factory(FixtureA85::class, static function (ContainerInterface $container) {
            return new FixtureA85($container->get(FixtureA84::class));
        });

        $container->factory(FixtureA86::class, static function (ContainerInterface $container) {
            return new FixtureA86($container->get(FixtureA85::class));
        });

        $container->factory(FixtureA87::class, static function (ContainerInterface $container) {
            return new FixtureA87($container->get(FixtureA86::class));
        });

        $container->factory(FixtureA88::class, static function (ContainerInterface $container) {
            return new FixtureA88($container->get(FixtureA87::class));
        });

        $container->factory(FixtureA89::class, static function (ContainerInterface $container) {
            return new FixtureA89($container->get(FixtureA88::class));
        });

        $container->factory(FixtureA90::class, static function (ContainerInterface $container) {
            return new FixtureA90($container->get(FixtureA89::class));
        });

        $container->factory(FixtureA91::class, static function (ContainerInterface $container) {
            return new FixtureA91($container->get(FixtureA90::class));
        });

        $container->factory(FixtureA92::class, static function (ContainerInterface $container) {
            return new FixtureA92($container->get(FixtureA91::class));
        });

        $container->factory(FixtureA93::class, static function (ContainerInterface $container) {
            return new FixtureA93($container->get(FixtureA92::class));
        });

        $container->factory(FixtureA94::class, static function (ContainerInterface $container) {
            return new FixtureA94($container->get(FixtureA93::class));
        });

        $container->factory(FixtureA95::class, static function (ContainerInterface $container) {
            return new FixtureA95($container->get(FixtureA94::class));
        });

        $container->factory(FixtureA96::class, static function (ContainerInterface $container) {
            return new FixtureA96($container->get(FixtureA95::class));
        });

        $container->factory(FixtureA97::class, static function (ContainerInterface $container) {
            return new FixtureA97($container->get(FixtureA96::class));
        });

        $container->factory(FixtureA98::class, static function (ContainerInterface $container) {
            return new FixtureA98($container->get(FixtureA97::class));
        });

        $container->factory(FixtureA99::class, static function (ContainerInterface $container) {
            return new FixtureA99($container->get(FixtureA98::class));
        });

        $container->factory(FixtureA100::class, static function (ContainerInterface $container) {
            return new FixtureA100($container->get(FixtureA99::class));
        });

        $container->factory(FixtureB1::class, static function () {
            return new FixtureB1();
        });

        $container->factory(FixtureB2::class, static function () {
            return new FixtureB2();
        });

        $container->factory(FixtureB3::class, static function () {
            return new FixtureB3();
        });

        $container->factory(FixtureB4::class, static function () {
            return new FixtureB4();
        });

        $container->factory(FixtureB5::class, static function () {
            return new FixtureB5();
        });

        $container->factory(FixtureB6::class, static function () {
            return new FixtureB6();
        });

        $container->factory(FixtureB7::class, static function () {
            return new FixtureB7();
        });

        $container->factory(FixtureB8::class, static function () {
            return new FixtureB8();
        });

        $container->factory(FixtureB9::class, static function () {
            return new FixtureB9();
        });

        $container->factory(FixtureB10::class, static function () {
            return new FixtureB10();
        });

        $container->factory(FixtureB11::class, static function () {
            return new FixtureB11();
        });

        $container->factory(FixtureB12::class, static function () {
            return new FixtureB12();
        });

        $container->factory(FixtureB13::class, static function () {
            return new FixtureB13();
        });

        $container->factory(FixtureB14::class, static function () {
            return new FixtureB14();
        });

        $container->factory(FixtureB15::class, static function () {
            return new FixtureB15();
        });

        $container->factory(FixtureB16::class, static function () {
            return new FixtureB16();
        });

        $container->factory(FixtureB17::class, static function () {
            return new FixtureB17();
        });

        $container->factory(FixtureB18::class, static function () {
            return new FixtureB18();
        });

        $container->factory(FixtureB19::class, static function () {
            return new FixtureB19();
        });

        $container->factory(FixtureB20::class, static function () {
            return new FixtureB20();
        });

        $container->factory(FixtureB21::class, static function () {
            return new FixtureB21();
        });

        $container->factory(FixtureB22::class, static function () {
            return new FixtureB22();
        });

        $container->factory(FixtureB23::class, static function () {
            return new FixtureB23();
        });

        $container->factory(FixtureB24::class, static function () {
            return new FixtureB24();
        });

        $container->factory(FixtureB25::class, static function () {
            return new FixtureB25();
        });

        $container->factory(FixtureB26::class, static function () {
            return new FixtureB26();
        });

        $container->factory(FixtureB27::class, static function () {
            return new FixtureB27();
        });

        $container->factory(FixtureB28::class, static function () {
            return new FixtureB28();
        });

        $container->factory(FixtureB29::class, static function () {
            return new FixtureB29();
        });

        $container->factory(FixtureB30::class, static function () {
            return new FixtureB30();
        });

        $container->factory(FixtureB31::class, static function () {
            return new FixtureB31();
        });

        $container->factory(FixtureB32::class, static function () {
            return new FixtureB32();
        });

        $container->factory(FixtureB33::class, static function () {
            return new FixtureB33();
        });

        $container->factory(FixtureB34::class, static function () {
            return new FixtureB34();
        });

        $container->factory(FixtureB35::class, static function () {
            return new FixtureB35();
        });

        $container->factory(FixtureB36::class, static function () {
            return new FixtureB36();
        });

        $container->factory(FixtureB37::class, static function () {
            return new FixtureB37();
        });

        $container->factory(FixtureB38::class, static function () {
            return new FixtureB38();
        });

        $container->factory(FixtureB39::class, static function () {
            return new FixtureB39();
        });

        $container->factory(FixtureB40::class, static function () {
            return new FixtureB40();
        });

        $container->factory(FixtureB41::class, static function () {
            return new FixtureB41();
        });

        $container->factory(FixtureB42::class, static function () {
            return new FixtureB42();
        });

        $container->factory(FixtureB43::class, static function () {
            return new FixtureB43();
        });

        $container->factory(FixtureB44::class, static function () {
            return new FixtureB44();
        });

        $container->factory(FixtureB45::class, static function () {
            return new FixtureB45();
        });

        $container->factory(FixtureB46::class, static function () {
            return new FixtureB46();
        });

        $container->factory(FixtureB47::class, static function () {
            return new FixtureB47();
        });

        $container->factory(FixtureB48::class, static function () {
            return new FixtureB48();
        });

        $container->factory(FixtureB49::class, static function () {
            return new FixtureB49();
        });

        $container->factory(FixtureB50::class, static function () {
            return new FixtureB50();
        });

        $container->factory(FixtureB51::class, static function () {
            return new FixtureB51();
        });

        $container->factory(FixtureB52::class, static function () {
            return new FixtureB52();
        });

        $container->factory(FixtureB53::class, static function () {
            return new FixtureB53();
        });

        $container->factory(FixtureB54::class, static function () {
            return new FixtureB54();
        });

        $container->factory(FixtureB55::class, static function () {
            return new FixtureB55();
        });

        $container->factory(FixtureB56::class, static function () {
            return new FixtureB56();
        });

        $container->factory(FixtureB57::class, static function () {
            return new FixtureB57();
        });

        $container->factory(FixtureB58::class, static function () {
            return new FixtureB58();
        });

        $container->factory(FixtureB59::class, static function () {
            return new FixtureB59();
        });

        $container->factory(FixtureB60::class, static function () {
            return new FixtureB60();
        });

        $container->factory(FixtureB61::class, static function () {
            return new FixtureB61();
        });

        $container->factory(FixtureB62::class, static function () {
            return new FixtureB62();
        });

        $container->factory(FixtureB63::class, static function () {
            return new FixtureB63();
        });

        $container->factory(FixtureB64::class, static function () {
            return new FixtureB64();
        });

        $container->factory(FixtureB65::class, static function () {
            return new FixtureB65();
        });

        $container->factory(FixtureB66::class, static function () {
            return new FixtureB66();
        });

        $container->factory(FixtureB67::class, static function () {
            return new FixtureB67();
        });

        $container->factory(FixtureB68::class, static function () {
            return new FixtureB68();
        });

        $container->factory(FixtureB69::class, static function () {
            return new FixtureB69();
        });

        $container->factory(FixtureB70::class, static function () {
            return new FixtureB70();
        });

        $container->factory(FixtureB71::class, static function () {
            return new FixtureB71();
        });

        $container->factory(FixtureB72::class, static function () {
            return new FixtureB72();
        });

        $container->factory(FixtureB73::class, static function () {
            return new FixtureB73();
        });

        $container->factory(FixtureB74::class, static function () {
            return new FixtureB74();
        });

        $container->factory(FixtureB75::class, static function () {
            return new FixtureB75();
        });

        $container->factory(FixtureB76::class, static function () {
            return new FixtureB76();
        });

        $container->factory(FixtureB77::class, static function () {
            return new FixtureB77();
        });

        $container->factory(FixtureB78::class, static function () {
            return new FixtureB78();
        });

        $container->factory(FixtureB79::class, static function () {
            return new FixtureB79();
        });

        $container->factory(FixtureB80::class, static function () {
            return new FixtureB80();
        });

        $container->factory(FixtureB81::class, static function () {
            return new FixtureB81();
        });

        $container->factory(FixtureB82::class, static function () {
            return new FixtureB82();
        });

        $container->factory(FixtureB83::class, static function () {
            return new FixtureB83();
        });

        $container->factory(FixtureB84::class, static function () {
            return new FixtureB84();
        });

        $container->factory(FixtureB85::class, static function () {
            return new FixtureB85();
        });

        $container->factory(FixtureB86::class, static function () {
            return new FixtureB86();
        });

        $container->factory(FixtureB87::class, static function () {
            return new FixtureB87();
        });

        $container->factory(FixtureB88::class, static function () {
            return new FixtureB88();
        });

        $container->factory(FixtureB89::class, static function () {
            return new FixtureB89();
        });

        $container->factory(FixtureB90::class, static function () {
            return new FixtureB90();
        });

        $container->factory(FixtureB91::class, static function () {
            return new FixtureB91();
        });

        $container->factory(FixtureB92::class, static function () {
            return new FixtureB92();
        });

        $container->factory(FixtureB93::class, static function () {
            return new FixtureB93();
        });

        $container->factory(FixtureB94::class, static function () {
            return new FixtureB94();
        });

        $container->factory(FixtureB95::class, static function () {
            return new FixtureB95();
        });

        $container->factory(FixtureB96::class, static function () {
            return new FixtureB96();
        });

        $container->factory(FixtureB97::class, static function () {
            return new FixtureB97();
        });

        $container->factory(FixtureB98::class, static function () {
            return new FixtureB98();
        });

        $container->factory(FixtureB99::class, static function () {
            return new FixtureB99();
        });

        $container->factory(FixtureB100::class, static function () {
            return new FixtureB100();
        });

        $container->factory(FixtureB101::class, static function () {
            return new FixtureB101();
        });

        $container->factory(FixtureB102::class, static function () {
            return new FixtureB102();
        });

        $container->factory(FixtureB103::class, static function () {
            return new FixtureB103();
        });

        $container->factory(FixtureB104::class, static function () {
            return new FixtureB104();
        });

        $container->factory(FixtureB105::class, static function () {
            return new FixtureB105();
        });

        $container->factory(FixtureB106::class, static function () {
            return new FixtureB106();
        });

        $container->factory(FixtureB107::class, static function () {
            return new FixtureB107();
        });

        $container->factory(FixtureB108::class, static function () {
            return new FixtureB108();
        });

        $container->factory(FixtureB109::class, static function () {
            return new FixtureB109();
        });

        $container->factory(FixtureB110::class, static function () {
            return new FixtureB110();
        });

        $container->factory(FixtureB111::class, static function () {
            return new FixtureB111();
        });

        $container->factory(FixtureB112::class, static function () {
            return new FixtureB112();
        });

        $container->factory(FixtureB113::class, static function () {
            return new FixtureB113();
        });

        $container->factory(FixtureB114::class, static function () {
            return new FixtureB114();
        });

        $container->factory(FixtureB115::class, static function () {
            return new FixtureB115();
        });

        $container->factory(FixtureB116::class, static function () {
            return new FixtureB116();
        });

        $container->factory(FixtureB117::class, static function () {
            return new FixtureB117();
        });

        $container->factory(FixtureB118::class, static function () {
            return new FixtureB118();
        });

        $container->factory(FixtureB119::class, static function () {
            return new FixtureB119();
        });

        $container->factory(FixtureB120::class, static function () {
            return new FixtureB120();
        });

        $container->factory(FixtureB121::class, static function () {
            return new FixtureB121();
        });

        $container->factory(FixtureB122::class, static function () {
            return new FixtureB122();
        });

        $container->factory(FixtureB123::class, static function () {
            return new FixtureB123();
        });

        $container->factory(FixtureB124::class, static function () {
            return new FixtureB124();
        });

        $container->factory(FixtureB125::class, static function () {
            return new FixtureB125();
        });

        $container->factory(FixtureB126::class, static function () {
            return new FixtureB126();
        });

        $container->factory(FixtureB127::class, static function () {
            return new FixtureB127();
        });

        $container->factory(FixtureB128::class, static function () {
            return new FixtureB128();
        });

        $container->factory(FixtureB129::class, static function () {
            return new FixtureB129();
        });

        $container->factory(FixtureB130::class, static function () {
            return new FixtureB130();
        });

        $container->factory(FixtureB131::class, static function () {
            return new FixtureB131();
        });

        $container->factory(FixtureB132::class, static function () {
            return new FixtureB132();
        });

        $container->factory(FixtureB133::class, static function () {
            return new FixtureB133();
        });

        $container->factory(FixtureB134::class, static function () {
            return new FixtureB134();
        });

        $container->factory(FixtureB135::class, static function () {
            return new FixtureB135();
        });

        $container->factory(FixtureB136::class, static function () {
            return new FixtureB136();
        });

        $container->factory(FixtureB137::class, static function () {
            return new FixtureB137();
        });

        $container->factory(FixtureB138::class, static function () {
            return new FixtureB138();
        });

        $container->factory(FixtureB139::class, static function () {
            return new FixtureB139();
        });

        $container->factory(FixtureB140::class, static function () {
            return new FixtureB140();
        });

        $container->factory(FixtureB141::class, static function () {
            return new FixtureB141();
        });

        $container->factory(FixtureB142::class, static function () {
            return new FixtureB142();
        });

        $container->factory(FixtureB143::class, static function () {
            return new FixtureB143();
        });

        $container->factory(FixtureB144::class, static function () {
            return new FixtureB144();
        });

        $container->factory(FixtureB145::class, static function () {
            return new FixtureB145();
        });

        $container->factory(FixtureB146::class, static function () {
            return new FixtureB146();
        });

        $container->factory(FixtureB147::class, static function () {
            return new FixtureB147();
        });

        $container->factory(FixtureB148::class, static function () {
            return new FixtureB148();
        });

        $container->factory(FixtureB149::class, static function () {
            return new FixtureB149();
        });

        $container->factory(FixtureB150::class, static function () {
            return new FixtureB150();
        });

        $container->factory(FixtureB151::class, static function () {
            return new FixtureB151();
        });

        $container->factory(FixtureB152::class, static function () {
            return new FixtureB152();
        });

        $container->factory(FixtureB153::class, static function () {
            return new FixtureB153();
        });

        $container->factory(FixtureB154::class, static function () {
            return new FixtureB154();
        });

        $container->factory(FixtureB155::class, static function () {
            return new FixtureB155();
        });

        $container->factory(FixtureB156::class, static function () {
            return new FixtureB156();
        });

        $container->factory(FixtureB157::class, static function () {
            return new FixtureB157();
        });

        $container->factory(FixtureB158::class, static function () {
            return new FixtureB158();
        });

        $container->factory(FixtureB159::class, static function () {
            return new FixtureB159();
        });

        $container->factory(FixtureB160::class, static function () {
            return new FixtureB160();
        });

        $container->factory(FixtureB161::class, static function () {
            return new FixtureB161();
        });

        $container->factory(FixtureB162::class, static function () {
            return new FixtureB162();
        });

        $container->factory(FixtureB163::class, static function () {
            return new FixtureB163();
        });

        $container->factory(FixtureB164::class, static function () {
            return new FixtureB164();
        });

        $container->factory(FixtureB165::class, static function () {
            return new FixtureB165();
        });

        $container->factory(FixtureB166::class, static function () {
            return new FixtureB166();
        });

        $container->factory(FixtureB167::class, static function () {
            return new FixtureB167();
        });

        $container->factory(FixtureB168::class, static function () {
            return new FixtureB168();
        });

        $container->factory(FixtureB169::class, static function () {
            return new FixtureB169();
        });

        $container->factory(FixtureB170::class, static function () {
            return new FixtureB170();
        });

        $container->factory(FixtureB171::class, static function () {
            return new FixtureB171();
        });

        $container->factory(FixtureB172::class, static function () {
            return new FixtureB172();
        });

        $container->factory(FixtureB173::class, static function () {
            return new FixtureB173();
        });

        $container->factory(FixtureB174::class, static function () {
            return new FixtureB174();
        });

        $container->factory(FixtureB175::class, static function () {
            return new FixtureB175();
        });

        $container->factory(FixtureB176::class, static function () {
            return new FixtureB176();
        });

        $container->factory(FixtureB177::class, static function () {
            return new FixtureB177();
        });

        $container->factory(FixtureB178::class, static function () {
            return new FixtureB178();
        });

        $container->factory(FixtureB179::class, static function () {
            return new FixtureB179();
        });

        $container->factory(FixtureB180::class, static function () {
            return new FixtureB180();
        });

        $container->factory(FixtureB181::class, static function () {
            return new FixtureB181();
        });

        $container->factory(FixtureB182::class, static function () {
            return new FixtureB182();
        });

        $container->factory(FixtureB183::class, static function () {
            return new FixtureB183();
        });

        $container->factory(FixtureB184::class, static function () {
            return new FixtureB184();
        });

        $container->factory(FixtureB185::class, static function () {
            return new FixtureB185();
        });

        $container->factory(FixtureB186::class, static function () {
            return new FixtureB186();
        });

        $container->factory(FixtureB187::class, static function () {
            return new FixtureB187();
        });

        $container->factory(FixtureB188::class, static function () {
            return new FixtureB188();
        });

        $container->factory(FixtureB189::class, static function () {
            return new FixtureB189();
        });

        $container->factory(FixtureB190::class, static function () {
            return new FixtureB190();
        });

        $container->factory(FixtureB191::class, static function () {
            return new FixtureB191();
        });

        $container->factory(FixtureB192::class, static function () {
            return new FixtureB192();
        });

        $container->factory(FixtureB193::class, static function () {
            return new FixtureB193();
        });

        $container->factory(FixtureB194::class, static function () {
            return new FixtureB194();
        });

        $container->factory(FixtureB195::class, static function () {
            return new FixtureB195();
        });

        $container->factory(FixtureB196::class, static function () {
            return new FixtureB196();
        });

        $container->factory(FixtureB197::class, static function () {
            return new FixtureB197();
        });

        $container->factory(FixtureB198::class, static function () {
            return new FixtureB198();
        });

        $container->factory(FixtureB199::class, static function () {
            return new FixtureB199();
        });

        $container->factory(FixtureB200::class, static function () {
            return new FixtureB200();
        });

        $container->factory(FixtureB201::class, static function () {
            return new FixtureB201();
        });

        $container->factory(FixtureB202::class, static function () {
            return new FixtureB202();
        });

        $container->factory(FixtureB203::class, static function () {
            return new FixtureB203();
        });

        $container->factory(FixtureB204::class, static function () {
            return new FixtureB204();
        });

        $container->factory(FixtureB205::class, static function () {
            return new FixtureB205();
        });

        $container->factory(FixtureB206::class, static function () {
            return new FixtureB206();
        });

        $container->factory(FixtureB207::class, static function () {
            return new FixtureB207();
        });

        $container->factory(FixtureB208::class, static function () {
            return new FixtureB208();
        });

        $container->factory(FixtureB209::class, static function () {
            return new FixtureB209();
        });

        $container->factory(FixtureB210::class, static function () {
            return new FixtureB210();
        });

        $container->factory(FixtureB211::class, static function () {
            return new FixtureB211();
        });

        $container->factory(FixtureB212::class, static function () {
            return new FixtureB212();
        });

        $container->factory(FixtureB213::class, static function () {
            return new FixtureB213();
        });

        $container->factory(FixtureB214::class, static function () {
            return new FixtureB214();
        });

        $container->factory(FixtureB215::class, static function () {
            return new FixtureB215();
        });

        $container->factory(FixtureB216::class, static function () {
            return new FixtureB216();
        });

        $container->factory(FixtureB217::class, static function () {
            return new FixtureB217();
        });

        $container->factory(FixtureB218::class, static function () {
            return new FixtureB218();
        });

        $container->factory(FixtureB219::class, static function () {
            return new FixtureB219();
        });

        $container->factory(FixtureB220::class, static function () {
            return new FixtureB220();
        });

        $container->factory(FixtureB221::class, static function () {
            return new FixtureB221();
        });

        $container->factory(FixtureB222::class, static function () {
            return new FixtureB222();
        });

        $container->factory(FixtureB223::class, static function () {
            return new FixtureB223();
        });

        $container->factory(FixtureB224::class, static function () {
            return new FixtureB224();
        });

        $container->factory(FixtureB225::class, static function () {
            return new FixtureB225();
        });

        $container->factory(FixtureB226::class, static function () {
            return new FixtureB226();
        });

        $container->factory(FixtureB227::class, static function () {
            return new FixtureB227();
        });

        $container->factory(FixtureB228::class, static function () {
            return new FixtureB228();
        });

        $container->factory(FixtureB229::class, static function () {
            return new FixtureB229();
        });

        $container->factory(FixtureB230::class, static function () {
            return new FixtureB230();
        });

        $container->factory(FixtureB231::class, static function () {
            return new FixtureB231();
        });

        $container->factory(FixtureB232::class, static function () {
            return new FixtureB232();
        });

        $container->factory(FixtureB233::class, static function () {
            return new FixtureB233();
        });

        $container->factory(FixtureB234::class, static function () {
            return new FixtureB234();
        });

        $container->factory(FixtureB235::class, static function () {
            return new FixtureB235();
        });

        $container->factory(FixtureB236::class, static function () {
            return new FixtureB236();
        });

        $container->factory(FixtureB237::class, static function () {
            return new FixtureB237();
        });

        $container->factory(FixtureB238::class, static function () {
            return new FixtureB238();
        });

        $container->factory(FixtureB239::class, static function () {
            return new FixtureB239();
        });

        $container->factory(FixtureB240::class, static function () {
            return new FixtureB240();
        });

        $container->factory(FixtureB241::class, static function () {
            return new FixtureB241();
        });

        $container->factory(FixtureB242::class, static function () {
            return new FixtureB242();
        });

        $container->factory(FixtureB243::class, static function () {
            return new FixtureB243();
        });

        $container->factory(FixtureB244::class, static function () {
            return new FixtureB244();
        });

        $container->factory(FixtureB245::class, static function () {
            return new FixtureB245();
        });

        $container->factory(FixtureB246::class, static function () {
            return new FixtureB246();
        });

        $container->factory(FixtureB247::class, static function () {
            return new FixtureB247();
        });

        $container->factory(FixtureB248::class, static function () {
            return new FixtureB248();
        });

        $container->factory(FixtureB249::class, static function () {
            return new FixtureB249();
        });

        $container->factory(FixtureB250::class, static function () {
            return new FixtureB250();
        });

        $container->factory(FixtureB251::class, static function () {
            return new FixtureB251();
        });

        $container->factory(FixtureB252::class, static function () {
            return new FixtureB252();
        });

        $container->factory(FixtureB253::class, static function () {
            return new FixtureB253();
        });

        $container->factory(FixtureB254::class, static function () {
            return new FixtureB254();
        });

        $container->factory(FixtureB255::class, static function () {
            return new FixtureB255();
        });

        $container->factory(FixtureB256::class, static function () {
            return new FixtureB256();
        });

        $container->factory(FixtureB257::class, static function () {
            return new FixtureB257();
        });

        $container->factory(FixtureB258::class, static function () {
            return new FixtureB258();
        });

        $container->factory(FixtureB259::class, static function () {
            return new FixtureB259();
        });

        $container->factory(FixtureB260::class, static function () {
            return new FixtureB260();
        });

        $container->factory(FixtureB261::class, static function () {
            return new FixtureB261();
        });

        $container->factory(FixtureB262::class, static function () {
            return new FixtureB262();
        });

        $container->factory(FixtureB263::class, static function () {
            return new FixtureB263();
        });

        $container->factory(FixtureB264::class, static function () {
            return new FixtureB264();
        });

        $container->factory(FixtureB265::class, static function () {
            return new FixtureB265();
        });

        $container->factory(FixtureB266::class, static function () {
            return new FixtureB266();
        });

        $container->factory(FixtureB267::class, static function () {
            return new FixtureB267();
        });

        $container->factory(FixtureB268::class, static function () {
            return new FixtureB268();
        });

        $container->factory(FixtureB269::class, static function () {
            return new FixtureB269();
        });

        $container->factory(FixtureB270::class, static function () {
            return new FixtureB270();
        });

        $container->factory(FixtureB271::class, static function () {
            return new FixtureB271();
        });

        $container->factory(FixtureB272::class, static function () {
            return new FixtureB272();
        });

        $container->factory(FixtureB273::class, static function () {
            return new FixtureB273();
        });

        $container->factory(FixtureB274::class, static function () {
            return new FixtureB274();
        });

        $container->factory(FixtureB275::class, static function () {
            return new FixtureB275();
        });

        $container->factory(FixtureB276::class, static function () {
            return new FixtureB276();
        });

        $container->factory(FixtureB277::class, static function () {
            return new FixtureB277();
        });

        $container->factory(FixtureB278::class, static function () {
            return new FixtureB278();
        });

        $container->factory(FixtureB279::class, static function () {
            return new FixtureB279();
        });

        $container->factory(FixtureB280::class, static function () {
            return new FixtureB280();
        });

        $container->factory(FixtureB281::class, static function () {
            return new FixtureB281();
        });

        $container->factory(FixtureB282::class, static function () {
            return new FixtureB282();
        });

        $container->factory(FixtureB283::class, static function () {
            return new FixtureB283();
        });

        $container->factory(FixtureB284::class, static function () {
            return new FixtureB284();
        });

        $container->factory(FixtureB285::class, static function () {
            return new FixtureB285();
        });

        $container->factory(FixtureB286::class, static function () {
            return new FixtureB286();
        });

        $container->factory(FixtureB287::class, static function () {
            return new FixtureB287();
        });

        $container->factory(FixtureB288::class, static function () {
            return new FixtureB288();
        });

        $container->factory(FixtureB289::class, static function () {
            return new FixtureB289();
        });

        $container->factory(FixtureB290::class, static function () {
            return new FixtureB290();
        });

        $container->factory(FixtureB291::class, static function () {
            return new FixtureB291();
        });

        $container->factory(FixtureB292::class, static function () {
            return new FixtureB292();
        });

        $container->factory(FixtureB293::class, static function () {
            return new FixtureB293();
        });

        $container->factory(FixtureB294::class, static function () {
            return new FixtureB294();
        });

        $container->factory(FixtureB295::class, static function () {
            return new FixtureB295();
        });

        $container->factory(FixtureB296::class, static function () {
            return new FixtureB296();
        });

        $container->factory(FixtureB297::class, static function () {
            return new FixtureB297();
        });

        $container->factory(FixtureB298::class, static function () {
            return new FixtureB298();
        });

        $container->factory(FixtureB299::class, static function () {
            return new FixtureB299();
        });

        $container->factory(FixtureB300::class, static function () {
            return new FixtureB300();
        });

        $container->factory(FixtureB301::class, static function () {
            return new FixtureB301();
        });

        $container->factory(FixtureB302::class, static function () {
            return new FixtureB302();
        });

        $container->factory(FixtureB303::class, static function () {
            return new FixtureB303();
        });

        $container->factory(FixtureB304::class, static function () {
            return new FixtureB304();
        });

        $container->factory(FixtureB305::class, static function () {
            return new FixtureB305();
        });

        $container->factory(FixtureB306::class, static function () {
            return new FixtureB306();
        });

        $container->factory(FixtureB307::class, static function () {
            return new FixtureB307();
        });

        $container->factory(FixtureB308::class, static function () {
            return new FixtureB308();
        });

        $container->factory(FixtureB309::class, static function () {
            return new FixtureB309();
        });

        $container->factory(FixtureB310::class, static function () {
            return new FixtureB310();
        });

        $container->factory(FixtureB311::class, static function () {
            return new FixtureB311();
        });

        $container->factory(FixtureB312::class, static function () {
            return new FixtureB312();
        });

        $container->factory(FixtureB313::class, static function () {
            return new FixtureB313();
        });

        $container->factory(FixtureB314::class, static function () {
            return new FixtureB314();
        });

        $container->factory(FixtureB315::class, static function () {
            return new FixtureB315();
        });

        $container->factory(FixtureB316::class, static function () {
            return new FixtureB316();
        });

        $container->factory(FixtureB317::class, static function () {
            return new FixtureB317();
        });

        $container->factory(FixtureB318::class, static function () {
            return new FixtureB318();
        });

        $container->factory(FixtureB319::class, static function () {
            return new FixtureB319();
        });

        $container->factory(FixtureB320::class, static function () {
            return new FixtureB320();
        });

        $container->factory(FixtureB321::class, static function () {
            return new FixtureB321();
        });

        $container->factory(FixtureB322::class, static function () {
            return new FixtureB322();
        });

        $container->factory(FixtureB323::class, static function () {
            return new FixtureB323();
        });

        $container->factory(FixtureB324::class, static function () {
            return new FixtureB324();
        });

        $container->factory(FixtureB325::class, static function () {
            return new FixtureB325();
        });

        $container->factory(FixtureB326::class, static function () {
            return new FixtureB326();
        });

        $container->factory(FixtureB327::class, static function () {
            return new FixtureB327();
        });

        $container->factory(FixtureB328::class, static function () {
            return new FixtureB328();
        });

        $container->factory(FixtureB329::class, static function () {
            return new FixtureB329();
        });

        $container->factory(FixtureB330::class, static function () {
            return new FixtureB330();
        });

        $container->factory(FixtureB331::class, static function () {
            return new FixtureB331();
        });

        $container->factory(FixtureB332::class, static function () {
            return new FixtureB332();
        });

        $container->factory(FixtureB333::class, static function () {
            return new FixtureB333();
        });

        $container->factory(FixtureB334::class, static function () {
            return new FixtureB334();
        });

        $container->factory(FixtureB335::class, static function () {
            return new FixtureB335();
        });

        $container->factory(FixtureB336::class, static function () {
            return new FixtureB336();
        });

        $container->factory(FixtureB337::class, static function () {
            return new FixtureB337();
        });

        $container->factory(FixtureB338::class, static function () {
            return new FixtureB338();
        });

        $container->factory(FixtureB339::class, static function () {
            return new FixtureB339();
        });

        $container->factory(FixtureB340::class, static function () {
            return new FixtureB340();
        });

        $container->factory(FixtureB341::class, static function () {
            return new FixtureB341();
        });

        $container->factory(FixtureB342::class, static function () {
            return new FixtureB342();
        });

        $container->factory(FixtureB343::class, static function () {
            return new FixtureB343();
        });

        $container->factory(FixtureB344::class, static function () {
            return new FixtureB344();
        });

        $container->factory(FixtureB345::class, static function () {
            return new FixtureB345();
        });

        $container->factory(FixtureB346::class, static function () {
            return new FixtureB346();
        });

        $container->factory(FixtureB347::class, static function () {
            return new FixtureB347();
        });

        $container->factory(FixtureB348::class, static function () {
            return new FixtureB348();
        });

        $container->factory(FixtureB349::class, static function () {
            return new FixtureB349();
        });

        $container->factory(FixtureB350::class, static function () {
            return new FixtureB350();
        });

        $container->factory(FixtureB351::class, static function () {
            return new FixtureB351();
        });

        $container->factory(FixtureB352::class, static function () {
            return new FixtureB352();
        });

        $container->factory(FixtureB353::class, static function () {
            return new FixtureB353();
        });

        $container->factory(FixtureB354::class, static function () {
            return new FixtureB354();
        });

        $container->factory(FixtureB355::class, static function () {
            return new FixtureB355();
        });

        $container->factory(FixtureB356::class, static function () {
            return new FixtureB356();
        });

        $container->factory(FixtureB357::class, static function () {
            return new FixtureB357();
        });

        $container->factory(FixtureB358::class, static function () {
            return new FixtureB358();
        });

        $container->factory(FixtureB359::class, static function () {
            return new FixtureB359();
        });

        $container->factory(FixtureB360::class, static function () {
            return new FixtureB360();
        });

        $container->factory(FixtureB361::class, static function () {
            return new FixtureB361();
        });

        $container->factory(FixtureB362::class, static function () {
            return new FixtureB362();
        });

        $container->factory(FixtureB363::class, static function () {
            return new FixtureB363();
        });

        $container->factory(FixtureB364::class, static function () {
            return new FixtureB364();
        });

        $container->factory(FixtureB365::class, static function () {
            return new FixtureB365();
        });

        $container->factory(FixtureB366::class, static function () {
            return new FixtureB366();
        });

        $container->factory(FixtureB367::class, static function () {
            return new FixtureB367();
        });

        $container->factory(FixtureB368::class, static function () {
            return new FixtureB368();
        });

        $container->factory(FixtureB369::class, static function () {
            return new FixtureB369();
        });

        $container->factory(FixtureB370::class, static function () {
            return new FixtureB370();
        });

        $container->factory(FixtureB371::class, static function () {
            return new FixtureB371();
        });

        $container->factory(FixtureB372::class, static function () {
            return new FixtureB372();
        });

        $container->factory(FixtureB373::class, static function () {
            return new FixtureB373();
        });

        $container->factory(FixtureB374::class, static function () {
            return new FixtureB374();
        });

        $container->factory(FixtureB375::class, static function () {
            return new FixtureB375();
        });

        $container->factory(FixtureB376::class, static function () {
            return new FixtureB376();
        });

        $container->factory(FixtureB377::class, static function () {
            return new FixtureB377();
        });

        $container->factory(FixtureB378::class, static function () {
            return new FixtureB378();
        });

        $container->factory(FixtureB379::class, static function () {
            return new FixtureB379();
        });

        $container->factory(FixtureB380::class, static function () {
            return new FixtureB380();
        });

        $container->factory(FixtureB381::class, static function () {
            return new FixtureB381();
        });

        $container->factory(FixtureB382::class, static function () {
            return new FixtureB382();
        });

        $container->factory(FixtureB383::class, static function () {
            return new FixtureB383();
        });

        $container->factory(FixtureB384::class, static function () {
            return new FixtureB384();
        });

        $container->factory(FixtureB385::class, static function () {
            return new FixtureB385();
        });

        $container->factory(FixtureB386::class, static function () {
            return new FixtureB386();
        });

        $container->factory(FixtureB387::class, static function () {
            return new FixtureB387();
        });

        $container->factory(FixtureB388::class, static function () {
            return new FixtureB388();
        });

        $container->factory(FixtureB389::class, static function () {
            return new FixtureB389();
        });

        $container->factory(FixtureB390::class, static function () {
            return new FixtureB390();
        });

        $container->factory(FixtureB391::class, static function () {
            return new FixtureB391();
        });

        $container->factory(FixtureB392::class, static function () {
            return new FixtureB392();
        });

        $container->factory(FixtureB393::class, static function () {
            return new FixtureB393();
        });

        $container->factory(FixtureB394::class, static function () {
            return new FixtureB394();
        });

        $container->factory(FixtureB395::class, static function () {
            return new FixtureB395();
        });

        $container->factory(FixtureB396::class, static function () {
            return new FixtureB396();
        });

        $container->factory(FixtureB397::class, static function () {
            return new FixtureB397();
        });

        $container->factory(FixtureB398::class, static function () {
            return new FixtureB398();
        });

        $container->factory(FixtureB399::class, static function () {
            return new FixtureB399();
        });

        $container->factory(FixtureB400::class, static function () {
            return new FixtureB400();
        });

        $container->factory(FixtureB401::class, static function () {
            return new FixtureB401();
        });

        $container->factory(FixtureB402::class, static function () {
            return new FixtureB402();
        });

        $container->factory(FixtureB403::class, static function () {
            return new FixtureB403();
        });

        $container->factory(FixtureB404::class, static function () {
            return new FixtureB404();
        });

        $container->factory(FixtureB405::class, static function () {
            return new FixtureB405();
        });

        $container->factory(FixtureB406::class, static function () {
            return new FixtureB406();
        });

        $container->factory(FixtureB407::class, static function () {
            return new FixtureB407();
        });

        $container->factory(FixtureB408::class, static function () {
            return new FixtureB408();
        });

        $container->factory(FixtureB409::class, static function () {
            return new FixtureB409();
        });

        $container->factory(FixtureB410::class, static function () {
            return new FixtureB410();
        });

        $container->factory(FixtureB411::class, static function () {
            return new FixtureB411();
        });

        $container->factory(FixtureB412::class, static function () {
            return new FixtureB412();
        });

        $container->factory(FixtureB413::class, static function () {
            return new FixtureB413();
        });

        $container->factory(FixtureB414::class, static function () {
            return new FixtureB414();
        });

        $container->factory(FixtureB415::class, static function () {
            return new FixtureB415();
        });

        $container->factory(FixtureB416::class, static function () {
            return new FixtureB416();
        });

        $container->factory(FixtureB417::class, static function () {
            return new FixtureB417();
        });

        $container->factory(FixtureB418::class, static function () {
            return new FixtureB418();
        });

        $container->factory(FixtureB419::class, static function () {
            return new FixtureB419();
        });

        $container->factory(FixtureB420::class, static function () {
            return new FixtureB420();
        });

        $container->factory(FixtureB421::class, static function () {
            return new FixtureB421();
        });

        $container->factory(FixtureB422::class, static function () {
            return new FixtureB422();
        });

        $container->factory(FixtureB423::class, static function () {
            return new FixtureB423();
        });

        $container->factory(FixtureB424::class, static function () {
            return new FixtureB424();
        });

        $container->factory(FixtureB425::class, static function () {
            return new FixtureB425();
        });

        $container->factory(FixtureB426::class, static function () {
            return new FixtureB426();
        });

        $container->factory(FixtureB427::class, static function () {
            return new FixtureB427();
        });

        $container->factory(FixtureB428::class, static function () {
            return new FixtureB428();
        });

        $container->factory(FixtureB429::class, static function () {
            return new FixtureB429();
        });

        $container->factory(FixtureB430::class, static function () {
            return new FixtureB430();
        });

        $container->factory(FixtureB431::class, static function () {
            return new FixtureB431();
        });

        $container->factory(FixtureB432::class, static function () {
            return new FixtureB432();
        });

        $container->factory(FixtureB433::class, static function () {
            return new FixtureB433();
        });

        $container->factory(FixtureB434::class, static function () {
            return new FixtureB434();
        });

        $container->factory(FixtureB435::class, static function () {
            return new FixtureB435();
        });

        $container->factory(FixtureB436::class, static function () {
            return new FixtureB436();
        });

        $container->factory(FixtureB437::class, static function () {
            return new FixtureB437();
        });

        $container->factory(FixtureB438::class, static function () {
            return new FixtureB438();
        });

        $container->factory(FixtureB439::class, static function () {
            return new FixtureB439();
        });

        $container->factory(FixtureB440::class, static function () {
            return new FixtureB440();
        });

        $container->factory(FixtureB441::class, static function () {
            return new FixtureB441();
        });

        $container->factory(FixtureB442::class, static function () {
            return new FixtureB442();
        });

        $container->factory(FixtureB443::class, static function () {
            return new FixtureB443();
        });

        $container->factory(FixtureB444::class, static function () {
            return new FixtureB444();
        });

        $container->factory(FixtureB445::class, static function () {
            return new FixtureB445();
        });

        $container->factory(FixtureB446::class, static function () {
            return new FixtureB446();
        });

        $container->factory(FixtureB447::class, static function () {
            return new FixtureB447();
        });

        $container->factory(FixtureB448::class, static function () {
            return new FixtureB448();
        });

        $container->factory(FixtureB449::class, static function () {
            return new FixtureB449();
        });

        $container->factory(FixtureB450::class, static function () {
            return new FixtureB450();
        });

        $container->factory(FixtureB451::class, static function () {
            return new FixtureB451();
        });

        $container->factory(FixtureB452::class, static function () {
            return new FixtureB452();
        });

        $container->factory(FixtureB453::class, static function () {
            return new FixtureB453();
        });

        $container->factory(FixtureB454::class, static function () {
            return new FixtureB454();
        });

        $container->factory(FixtureB455::class, static function () {
            return new FixtureB455();
        });

        $container->factory(FixtureB456::class, static function () {
            return new FixtureB456();
        });

        $container->factory(FixtureB457::class, static function () {
            return new FixtureB457();
        });

        $container->factory(FixtureB458::class, static function () {
            return new FixtureB458();
        });

        $container->factory(FixtureB459::class, static function () {
            return new FixtureB459();
        });

        $container->factory(FixtureB460::class, static function () {
            return new FixtureB460();
        });

        $container->factory(FixtureB461::class, static function () {
            return new FixtureB461();
        });

        $container->factory(FixtureB462::class, static function () {
            return new FixtureB462();
        });

        $container->factory(FixtureB463::class, static function () {
            return new FixtureB463();
        });

        $container->factory(FixtureB464::class, static function () {
            return new FixtureB464();
        });

        $container->factory(FixtureB465::class, static function () {
            return new FixtureB465();
        });

        $container->factory(FixtureB466::class, static function () {
            return new FixtureB466();
        });

        $container->factory(FixtureB467::class, static function () {
            return new FixtureB467();
        });

        $container->factory(FixtureB468::class, static function () {
            return new FixtureB468();
        });

        $container->factory(FixtureB469::class, static function () {
            return new FixtureB469();
        });

        $container->factory(FixtureB470::class, static function () {
            return new FixtureB470();
        });

        $container->factory(FixtureB471::class, static function () {
            return new FixtureB471();
        });

        $container->factory(FixtureB472::class, static function () {
            return new FixtureB472();
        });

        $container->factory(FixtureB473::class, static function () {
            return new FixtureB473();
        });

        $container->factory(FixtureB474::class, static function () {
            return new FixtureB474();
        });

        $container->factory(FixtureB475::class, static function () {
            return new FixtureB475();
        });

        $container->factory(FixtureB476::class, static function () {
            return new FixtureB476();
        });

        $container->factory(FixtureB477::class, static function () {
            return new FixtureB477();
        });

        $container->factory(FixtureB478::class, static function () {
            return new FixtureB478();
        });

        $container->factory(FixtureB479::class, static function () {
            return new FixtureB479();
        });

        $container->factory(FixtureB480::class, static function () {
            return new FixtureB480();
        });

        $container->factory(FixtureB481::class, static function () {
            return new FixtureB481();
        });

        $container->factory(FixtureB482::class, static function () {
            return new FixtureB482();
        });

        $container->factory(FixtureB483::class, static function () {
            return new FixtureB483();
        });

        $container->factory(FixtureB484::class, static function () {
            return new FixtureB484();
        });

        $container->factory(FixtureB485::class, static function () {
            return new FixtureB485();
        });

        $container->factory(FixtureB486::class, static function () {
            return new FixtureB486();
        });

        $container->factory(FixtureB487::class, static function () {
            return new FixtureB487();
        });

        $container->factory(FixtureB488::class, static function () {
            return new FixtureB488();
        });

        $container->factory(FixtureB489::class, static function () {
            return new FixtureB489();
        });

        $container->factory(FixtureB490::class, static function () {
            return new FixtureB490();
        });

        $container->factory(FixtureB491::class, static function () {
            return new FixtureB491();
        });

        $container->factory(FixtureB492::class, static function () {
            return new FixtureB492();
        });

        $container->factory(FixtureB493::class, static function () {
            return new FixtureB493();
        });

        $container->factory(FixtureB494::class, static function () {
            return new FixtureB494();
        });

        $container->factory(FixtureB495::class, static function () {
            return new FixtureB495();
        });

        $container->factory(FixtureB496::class, static function () {
            return new FixtureB496();
        });

        $container->factory(FixtureB497::class, static function () {
            return new FixtureB497();
        });

        $container->factory(FixtureB498::class, static function () {
            return new FixtureB498();
        });

        $container->factory(FixtureB499::class, static function () {
            return new FixtureB499();
        });

        $container->factory(FixtureB500::class, static function () {
            return new FixtureB500();
        });

        $container->factory(FixtureB501::class, static function () {
            return new FixtureB501();
        });

        $container->factory(FixtureB502::class, static function () {
            return new FixtureB502();
        });

        $container->factory(FixtureB503::class, static function () {
            return new FixtureB503();
        });

        $container->factory(FixtureB504::class, static function () {
            return new FixtureB504();
        });

        $container->factory(FixtureB505::class, static function () {
            return new FixtureB505();
        });

        $container->factory(FixtureB506::class, static function () {
            return new FixtureB506();
        });

        $container->factory(FixtureB507::class, static function () {
            return new FixtureB507();
        });

        $container->factory(FixtureB508::class, static function () {
            return new FixtureB508();
        });

        $container->factory(FixtureB509::class, static function () {
            return new FixtureB509();
        });

        $container->factory(FixtureB510::class, static function () {
            return new FixtureB510();
        });

        $container->factory(FixtureB511::class, static function () {
            return new FixtureB511();
        });

        $container->factory(FixtureB512::class, static function () {
            return new FixtureB512();
        });

        $container->factory(FixtureB513::class, static function () {
            return new FixtureB513();
        });

        $container->factory(FixtureB514::class, static function () {
            return new FixtureB514();
        });

        $container->factory(FixtureB515::class, static function () {
            return new FixtureB515();
        });

        $container->factory(FixtureB516::class, static function () {
            return new FixtureB516();
        });

        $container->factory(FixtureB517::class, static function () {
            return new FixtureB517();
        });

        $container->factory(FixtureB518::class, static function () {
            return new FixtureB518();
        });

        $container->factory(FixtureB519::class, static function () {
            return new FixtureB519();
        });

        $container->factory(FixtureB520::class, static function () {
            return new FixtureB520();
        });

        $container->factory(FixtureB521::class, static function () {
            return new FixtureB521();
        });

        $container->factory(FixtureB522::class, static function () {
            return new FixtureB522();
        });

        $container->factory(FixtureB523::class, static function () {
            return new FixtureB523();
        });

        $container->factory(FixtureB524::class, static function () {
            return new FixtureB524();
        });

        $container->factory(FixtureB525::class, static function () {
            return new FixtureB525();
        });

        $container->factory(FixtureB526::class, static function () {
            return new FixtureB526();
        });

        $container->factory(FixtureB527::class, static function () {
            return new FixtureB527();
        });

        $container->factory(FixtureB528::class, static function () {
            return new FixtureB528();
        });

        $container->factory(FixtureB529::class, static function () {
            return new FixtureB529();
        });

        $container->factory(FixtureB530::class, static function () {
            return new FixtureB530();
        });

        $container->factory(FixtureB531::class, static function () {
            return new FixtureB531();
        });

        $container->factory(FixtureB532::class, static function () {
            return new FixtureB532();
        });

        $container->factory(FixtureB533::class, static function () {
            return new FixtureB533();
        });

        $container->factory(FixtureB534::class, static function () {
            return new FixtureB534();
        });

        $container->factory(FixtureB535::class, static function () {
            return new FixtureB535();
        });

        $container->factory(FixtureB536::class, static function () {
            return new FixtureB536();
        });

        $container->factory(FixtureB537::class, static function () {
            return new FixtureB537();
        });

        $container->factory(FixtureB538::class, static function () {
            return new FixtureB538();
        });

        $container->factory(FixtureB539::class, static function () {
            return new FixtureB539();
        });

        $container->factory(FixtureB540::class, static function () {
            return new FixtureB540();
        });

        $container->factory(FixtureB541::class, static function () {
            return new FixtureB541();
        });

        $container->factory(FixtureB542::class, static function () {
            return new FixtureB542();
        });

        $container->factory(FixtureB543::class, static function () {
            return new FixtureB543();
        });

        $container->factory(FixtureB544::class, static function () {
            return new FixtureB544();
        });

        $container->factory(FixtureB545::class, static function () {
            return new FixtureB545();
        });

        $container->factory(FixtureB546::class, static function () {
            return new FixtureB546();
        });

        $container->factory(FixtureB547::class, static function () {
            return new FixtureB547();
        });

        $container->factory(FixtureB548::class, static function () {
            return new FixtureB548();
        });

        $container->factory(FixtureB549::class, static function () {
            return new FixtureB549();
        });

        $container->factory(FixtureB550::class, static function () {
            return new FixtureB550();
        });

        $container->factory(FixtureB551::class, static function () {
            return new FixtureB551();
        });

        $container->factory(FixtureB552::class, static function () {
            return new FixtureB552();
        });

        $container->factory(FixtureB553::class, static function () {
            return new FixtureB553();
        });

        $container->factory(FixtureB554::class, static function () {
            return new FixtureB554();
        });

        $container->factory(FixtureB555::class, static function () {
            return new FixtureB555();
        });

        $container->factory(FixtureB556::class, static function () {
            return new FixtureB556();
        });

        $container->factory(FixtureB557::class, static function () {
            return new FixtureB557();
        });

        $container->factory(FixtureB558::class, static function () {
            return new FixtureB558();
        });

        $container->factory(FixtureB559::class, static function () {
            return new FixtureB559();
        });

        $container->factory(FixtureB560::class, static function () {
            return new FixtureB560();
        });

        $container->factory(FixtureB561::class, static function () {
            return new FixtureB561();
        });

        $container->factory(FixtureB562::class, static function () {
            return new FixtureB562();
        });

        $container->factory(FixtureB563::class, static function () {
            return new FixtureB563();
        });

        $container->factory(FixtureB564::class, static function () {
            return new FixtureB564();
        });

        $container->factory(FixtureB565::class, static function () {
            return new FixtureB565();
        });

        $container->factory(FixtureB566::class, static function () {
            return new FixtureB566();
        });

        $container->factory(FixtureB567::class, static function () {
            return new FixtureB567();
        });

        $container->factory(FixtureB568::class, static function () {
            return new FixtureB568();
        });

        $container->factory(FixtureB569::class, static function () {
            return new FixtureB569();
        });

        $container->factory(FixtureB570::class, static function () {
            return new FixtureB570();
        });

        $container->factory(FixtureB571::class, static function () {
            return new FixtureB571();
        });

        $container->factory(FixtureB572::class, static function () {
            return new FixtureB572();
        });

        $container->factory(FixtureB573::class, static function () {
            return new FixtureB573();
        });

        $container->factory(FixtureB574::class, static function () {
            return new FixtureB574();
        });

        $container->factory(FixtureB575::class, static function () {
            return new FixtureB575();
        });

        $container->factory(FixtureB576::class, static function () {
            return new FixtureB576();
        });

        $container->factory(FixtureB577::class, static function () {
            return new FixtureB577();
        });

        $container->factory(FixtureB578::class, static function () {
            return new FixtureB578();
        });

        $container->factory(FixtureB579::class, static function () {
            return new FixtureB579();
        });

        $container->factory(FixtureB580::class, static function () {
            return new FixtureB580();
        });

        $container->factory(FixtureB581::class, static function () {
            return new FixtureB581();
        });

        $container->factory(FixtureB582::class, static function () {
            return new FixtureB582();
        });

        $container->factory(FixtureB583::class, static function () {
            return new FixtureB583();
        });

        $container->factory(FixtureB584::class, static function () {
            return new FixtureB584();
        });

        $container->factory(FixtureB585::class, static function () {
            return new FixtureB585();
        });

        $container->factory(FixtureB586::class, static function () {
            return new FixtureB586();
        });

        $container->factory(FixtureB587::class, static function () {
            return new FixtureB587();
        });

        $container->factory(FixtureB588::class, static function () {
            return new FixtureB588();
        });

        $container->factory(FixtureB589::class, static function () {
            return new FixtureB589();
        });

        $container->factory(FixtureB590::class, static function () {
            return new FixtureB590();
        });

        $container->factory(FixtureB591::class, static function () {
            return new FixtureB591();
        });

        $container->factory(FixtureB592::class, static function () {
            return new FixtureB592();
        });

        $container->factory(FixtureB593::class, static function () {
            return new FixtureB593();
        });

        $container->factory(FixtureB594::class, static function () {
            return new FixtureB594();
        });

        $container->factory(FixtureB595::class, static function () {
            return new FixtureB595();
        });

        $container->factory(FixtureB596::class, static function () {
            return new FixtureB596();
        });

        $container->factory(FixtureB597::class, static function () {
            return new FixtureB597();
        });

        $container->factory(FixtureB598::class, static function () {
            return new FixtureB598();
        });

        $container->factory(FixtureB599::class, static function () {
            return new FixtureB599();
        });

        $container->factory(FixtureB600::class, static function () {
            return new FixtureB600();
        });

        $container->factory(FixtureB601::class, static function () {
            return new FixtureB601();
        });

        $container->factory(FixtureB602::class, static function () {
            return new FixtureB602();
        });

        $container->factory(FixtureB603::class, static function () {
            return new FixtureB603();
        });

        $container->factory(FixtureB604::class, static function () {
            return new FixtureB604();
        });

        $container->factory(FixtureB605::class, static function () {
            return new FixtureB605();
        });

        $container->factory(FixtureB606::class, static function () {
            return new FixtureB606();
        });

        $container->factory(FixtureB607::class, static function () {
            return new FixtureB607();
        });

        $container->factory(FixtureB608::class, static function () {
            return new FixtureB608();
        });

        $container->factory(FixtureB609::class, static function () {
            return new FixtureB609();
        });

        $container->factory(FixtureB610::class, static function () {
            return new FixtureB610();
        });

        $container->factory(FixtureB611::class, static function () {
            return new FixtureB611();
        });

        $container->factory(FixtureB612::class, static function () {
            return new FixtureB612();
        });

        $container->factory(FixtureB613::class, static function () {
            return new FixtureB613();
        });

        $container->factory(FixtureB614::class, static function () {
            return new FixtureB614();
        });

        $container->factory(FixtureB615::class, static function () {
            return new FixtureB615();
        });

        $container->factory(FixtureB616::class, static function () {
            return new FixtureB616();
        });

        $container->factory(FixtureB617::class, static function () {
            return new FixtureB617();
        });

        $container->factory(FixtureB618::class, static function () {
            return new FixtureB618();
        });

        $container->factory(FixtureB619::class, static function () {
            return new FixtureB619();
        });

        $container->factory(FixtureB620::class, static function () {
            return new FixtureB620();
        });

        $container->factory(FixtureB621::class, static function () {
            return new FixtureB621();
        });

        $container->factory(FixtureB622::class, static function () {
            return new FixtureB622();
        });

        $container->factory(FixtureB623::class, static function () {
            return new FixtureB623();
        });

        $container->factory(FixtureB624::class, static function () {
            return new FixtureB624();
        });

        $container->factory(FixtureB625::class, static function () {
            return new FixtureB625();
        });

        $container->factory(FixtureB626::class, static function () {
            return new FixtureB626();
        });

        $container->factory(FixtureB627::class, static function () {
            return new FixtureB627();
        });

        $container->factory(FixtureB628::class, static function () {
            return new FixtureB628();
        });

        $container->factory(FixtureB629::class, static function () {
            return new FixtureB629();
        });

        $container->factory(FixtureB630::class, static function () {
            return new FixtureB630();
        });

        $container->factory(FixtureB631::class, static function () {
            return new FixtureB631();
        });

        $container->factory(FixtureB632::class, static function () {
            return new FixtureB632();
        });

        $container->factory(FixtureB633::class, static function () {
            return new FixtureB633();
        });

        $container->factory(FixtureB634::class, static function () {
            return new FixtureB634();
        });

        $container->factory(FixtureB635::class, static function () {
            return new FixtureB635();
        });

        $container->factory(FixtureB636::class, static function () {
            return new FixtureB636();
        });

        $container->factory(FixtureB637::class, static function () {
            return new FixtureB637();
        });

        $container->factory(FixtureB638::class, static function () {
            return new FixtureB638();
        });

        $container->factory(FixtureB639::class, static function () {
            return new FixtureB639();
        });

        $container->factory(FixtureB640::class, static function () {
            return new FixtureB640();
        });

        $container->factory(FixtureB641::class, static function () {
            return new FixtureB641();
        });

        $container->factory(FixtureB642::class, static function () {
            return new FixtureB642();
        });

        $container->factory(FixtureB643::class, static function () {
            return new FixtureB643();
        });

        $container->factory(FixtureB644::class, static function () {
            return new FixtureB644();
        });

        $container->factory(FixtureB645::class, static function () {
            return new FixtureB645();
        });

        $container->factory(FixtureB646::class, static function () {
            return new FixtureB646();
        });

        $container->factory(FixtureB647::class, static function () {
            return new FixtureB647();
        });

        $container->factory(FixtureB648::class, static function () {
            return new FixtureB648();
        });

        $container->factory(FixtureB649::class, static function () {
            return new FixtureB649();
        });

        $container->factory(FixtureB650::class, static function () {
            return new FixtureB650();
        });

        $container->factory(FixtureB651::class, static function () {
            return new FixtureB651();
        });

        $container->factory(FixtureB652::class, static function () {
            return new FixtureB652();
        });

        $container->factory(FixtureB653::class, static function () {
            return new FixtureB653();
        });

        $container->factory(FixtureB654::class, static function () {
            return new FixtureB654();
        });

        $container->factory(FixtureB655::class, static function () {
            return new FixtureB655();
        });

        $container->factory(FixtureB656::class, static function () {
            return new FixtureB656();
        });

        $container->factory(FixtureB657::class, static function () {
            return new FixtureB657();
        });

        $container->factory(FixtureB658::class, static function () {
            return new FixtureB658();
        });

        $container->factory(FixtureB659::class, static function () {
            return new FixtureB659();
        });

        $container->factory(FixtureB660::class, static function () {
            return new FixtureB660();
        });

        $container->factory(FixtureB661::class, static function () {
            return new FixtureB661();
        });

        $container->factory(FixtureB662::class, static function () {
            return new FixtureB662();
        });

        $container->factory(FixtureB663::class, static function () {
            return new FixtureB663();
        });

        $container->factory(FixtureB664::class, static function () {
            return new FixtureB664();
        });

        $container->factory(FixtureB665::class, static function () {
            return new FixtureB665();
        });

        $container->factory(FixtureB666::class, static function () {
            return new FixtureB666();
        });

        $container->factory(FixtureB667::class, static function () {
            return new FixtureB667();
        });

        $container->factory(FixtureB668::class, static function () {
            return new FixtureB668();
        });

        $container->factory(FixtureB669::class, static function () {
            return new FixtureB669();
        });

        $container->factory(FixtureB670::class, static function () {
            return new FixtureB670();
        });

        $container->factory(FixtureB671::class, static function () {
            return new FixtureB671();
        });

        $container->factory(FixtureB672::class, static function () {
            return new FixtureB672();
        });

        $container->factory(FixtureB673::class, static function () {
            return new FixtureB673();
        });

        $container->factory(FixtureB674::class, static function () {
            return new FixtureB674();
        });

        $container->factory(FixtureB675::class, static function () {
            return new FixtureB675();
        });

        $container->factory(FixtureB676::class, static function () {
            return new FixtureB676();
        });

        $container->factory(FixtureB677::class, static function () {
            return new FixtureB677();
        });

        $container->factory(FixtureB678::class, static function () {
            return new FixtureB678();
        });

        $container->factory(FixtureB679::class, static function () {
            return new FixtureB679();
        });

        $container->factory(FixtureB680::class, static function () {
            return new FixtureB680();
        });

        $container->factory(FixtureB681::class, static function () {
            return new FixtureB681();
        });

        $container->factory(FixtureB682::class, static function () {
            return new FixtureB682();
        });

        $container->factory(FixtureB683::class, static function () {
            return new FixtureB683();
        });

        $container->factory(FixtureB684::class, static function () {
            return new FixtureB684();
        });

        $container->factory(FixtureB685::class, static function () {
            return new FixtureB685();
        });

        $container->factory(FixtureB686::class, static function () {
            return new FixtureB686();
        });

        $container->factory(FixtureB687::class, static function () {
            return new FixtureB687();
        });

        $container->factory(FixtureB688::class, static function () {
            return new FixtureB688();
        });

        $container->factory(FixtureB689::class, static function () {
            return new FixtureB689();
        });

        $container->factory(FixtureB690::class, static function () {
            return new FixtureB690();
        });

        $container->factory(FixtureB691::class, static function () {
            return new FixtureB691();
        });

        $container->factory(FixtureB692::class, static function () {
            return new FixtureB692();
        });

        $container->factory(FixtureB693::class, static function () {
            return new FixtureB693();
        });

        $container->factory(FixtureB694::class, static function () {
            return new FixtureB694();
        });

        $container->factory(FixtureB695::class, static function () {
            return new FixtureB695();
        });

        $container->factory(FixtureB696::class, static function () {
            return new FixtureB696();
        });

        $container->factory(FixtureB697::class, static function () {
            return new FixtureB697();
        });

        $container->factory(FixtureB698::class, static function () {
            return new FixtureB698();
        });

        $container->factory(FixtureB699::class, static function () {
            return new FixtureB699();
        });

        $container->factory(FixtureB700::class, static function () {
            return new FixtureB700();
        });

        $container->factory(FixtureB701::class, static function () {
            return new FixtureB701();
        });

        $container->factory(FixtureB702::class, static function () {
            return new FixtureB702();
        });

        $container->factory(FixtureB703::class, static function () {
            return new FixtureB703();
        });

        $container->factory(FixtureB704::class, static function () {
            return new FixtureB704();
        });

        $container->factory(FixtureB705::class, static function () {
            return new FixtureB705();
        });

        $container->factory(FixtureB706::class, static function () {
            return new FixtureB706();
        });

        $container->factory(FixtureB707::class, static function () {
            return new FixtureB707();
        });

        $container->factory(FixtureB708::class, static function () {
            return new FixtureB708();
        });

        $container->factory(FixtureB709::class, static function () {
            return new FixtureB709();
        });

        $container->factory(FixtureB710::class, static function () {
            return new FixtureB710();
        });

        $container->factory(FixtureB711::class, static function () {
            return new FixtureB711();
        });

        $container->factory(FixtureB712::class, static function () {
            return new FixtureB712();
        });

        $container->factory(FixtureB713::class, static function () {
            return new FixtureB713();
        });

        $container->factory(FixtureB714::class, static function () {
            return new FixtureB714();
        });

        $container->factory(FixtureB715::class, static function () {
            return new FixtureB715();
        });

        $container->factory(FixtureB716::class, static function () {
            return new FixtureB716();
        });

        $container->factory(FixtureB717::class, static function () {
            return new FixtureB717();
        });

        $container->factory(FixtureB718::class, static function () {
            return new FixtureB718();
        });

        $container->factory(FixtureB719::class, static function () {
            return new FixtureB719();
        });

        $container->factory(FixtureB720::class, static function () {
            return new FixtureB720();
        });

        $container->factory(FixtureB721::class, static function () {
            return new FixtureB721();
        });

        $container->factory(FixtureB722::class, static function () {
            return new FixtureB722();
        });

        $container->factory(FixtureB723::class, static function () {
            return new FixtureB723();
        });

        $container->factory(FixtureB724::class, static function () {
            return new FixtureB724();
        });

        $container->factory(FixtureB725::class, static function () {
            return new FixtureB725();
        });

        $container->factory(FixtureB726::class, static function () {
            return new FixtureB726();
        });

        $container->factory(FixtureB727::class, static function () {
            return new FixtureB727();
        });

        $container->factory(FixtureB728::class, static function () {
            return new FixtureB728();
        });

        $container->factory(FixtureB729::class, static function () {
            return new FixtureB729();
        });

        $container->factory(FixtureB730::class, static function () {
            return new FixtureB730();
        });

        $container->factory(FixtureB731::class, static function () {
            return new FixtureB731();
        });

        $container->factory(FixtureB732::class, static function () {
            return new FixtureB732();
        });

        $container->factory(FixtureB733::class, static function () {
            return new FixtureB733();
        });

        $container->factory(FixtureB734::class, static function () {
            return new FixtureB734();
        });

        $container->factory(FixtureB735::class, static function () {
            return new FixtureB735();
        });

        $container->factory(FixtureB736::class, static function () {
            return new FixtureB736();
        });

        $container->factory(FixtureB737::class, static function () {
            return new FixtureB737();
        });

        $container->factory(FixtureB738::class, static function () {
            return new FixtureB738();
        });

        $container->factory(FixtureB739::class, static function () {
            return new FixtureB739();
        });

        $container->factory(FixtureB740::class, static function () {
            return new FixtureB740();
        });

        $container->factory(FixtureB741::class, static function () {
            return new FixtureB741();
        });

        $container->factory(FixtureB742::class, static function () {
            return new FixtureB742();
        });

        $container->factory(FixtureB743::class, static function () {
            return new FixtureB743();
        });

        $container->factory(FixtureB744::class, static function () {
            return new FixtureB744();
        });

        $container->factory(FixtureB745::class, static function () {
            return new FixtureB745();
        });

        $container->factory(FixtureB746::class, static function () {
            return new FixtureB746();
        });

        $container->factory(FixtureB747::class, static function () {
            return new FixtureB747();
        });

        $container->factory(FixtureB748::class, static function () {
            return new FixtureB748();
        });

        $container->factory(FixtureB749::class, static function () {
            return new FixtureB749();
        });

        $container->factory(FixtureB750::class, static function () {
            return new FixtureB750();
        });

        $container->factory(FixtureB751::class, static function () {
            return new FixtureB751();
        });

        $container->factory(FixtureB752::class, static function () {
            return new FixtureB752();
        });

        $container->factory(FixtureB753::class, static function () {
            return new FixtureB753();
        });

        $container->factory(FixtureB754::class, static function () {
            return new FixtureB754();
        });

        $container->factory(FixtureB755::class, static function () {
            return new FixtureB755();
        });

        $container->factory(FixtureB756::class, static function () {
            return new FixtureB756();
        });

        $container->factory(FixtureB757::class, static function () {
            return new FixtureB757();
        });

        $container->factory(FixtureB758::class, static function () {
            return new FixtureB758();
        });

        $container->factory(FixtureB759::class, static function () {
            return new FixtureB759();
        });

        $container->factory(FixtureB760::class, static function () {
            return new FixtureB760();
        });

        $container->factory(FixtureB761::class, static function () {
            return new FixtureB761();
        });

        $container->factory(FixtureB762::class, static function () {
            return new FixtureB762();
        });

        $container->factory(FixtureB763::class, static function () {
            return new FixtureB763();
        });

        $container->factory(FixtureB764::class, static function () {
            return new FixtureB764();
        });

        $container->factory(FixtureB765::class, static function () {
            return new FixtureB765();
        });

        $container->factory(FixtureB766::class, static function () {
            return new FixtureB766();
        });

        $container->factory(FixtureB767::class, static function () {
            return new FixtureB767();
        });

        $container->factory(FixtureB768::class, static function () {
            return new FixtureB768();
        });

        $container->factory(FixtureB769::class, static function () {
            return new FixtureB769();
        });

        $container->factory(FixtureB770::class, static function () {
            return new FixtureB770();
        });

        $container->factory(FixtureB771::class, static function () {
            return new FixtureB771();
        });

        $container->factory(FixtureB772::class, static function () {
            return new FixtureB772();
        });

        $container->factory(FixtureB773::class, static function () {
            return new FixtureB773();
        });

        $container->factory(FixtureB774::class, static function () {
            return new FixtureB774();
        });

        $container->factory(FixtureB775::class, static function () {
            return new FixtureB775();
        });

        $container->factory(FixtureB776::class, static function () {
            return new FixtureB776();
        });

        $container->factory(FixtureB777::class, static function () {
            return new FixtureB777();
        });

        $container->factory(FixtureB778::class, static function () {
            return new FixtureB778();
        });

        $container->factory(FixtureB779::class, static function () {
            return new FixtureB779();
        });

        $container->factory(FixtureB780::class, static function () {
            return new FixtureB780();
        });

        $container->factory(FixtureB781::class, static function () {
            return new FixtureB781();
        });

        $container->factory(FixtureB782::class, static function () {
            return new FixtureB782();
        });

        $container->factory(FixtureB783::class, static function () {
            return new FixtureB783();
        });

        $container->factory(FixtureB784::class, static function () {
            return new FixtureB784();
        });

        $container->factory(FixtureB785::class, static function () {
            return new FixtureB785();
        });

        $container->factory(FixtureB786::class, static function () {
            return new FixtureB786();
        });

        $container->factory(FixtureB787::class, static function () {
            return new FixtureB787();
        });

        $container->factory(FixtureB788::class, static function () {
            return new FixtureB788();
        });

        $container->factory(FixtureB789::class, static function () {
            return new FixtureB789();
        });

        $container->factory(FixtureB790::class, static function () {
            return new FixtureB790();
        });

        $container->factory(FixtureB791::class, static function () {
            return new FixtureB791();
        });

        $container->factory(FixtureB792::class, static function () {
            return new FixtureB792();
        });

        $container->factory(FixtureB793::class, static function () {
            return new FixtureB793();
        });

        $container->factory(FixtureB794::class, static function () {
            return new FixtureB794();
        });

        $container->factory(FixtureB795::class, static function () {
            return new FixtureB795();
        });

        $container->factory(FixtureB796::class, static function () {
            return new FixtureB796();
        });

        $container->factory(FixtureB797::class, static function () {
            return new FixtureB797();
        });

        $container->factory(FixtureB798::class, static function () {
            return new FixtureB798();
        });

        $container->factory(FixtureB799::class, static function () {
            return new FixtureB799();
        });

        $container->factory(FixtureB800::class, static function () {
            return new FixtureB800();
        });

        $container->factory(FixtureB801::class, static function () {
            return new FixtureB801();
        });

        $container->factory(FixtureB802::class, static function () {
            return new FixtureB802();
        });

        $container->factory(FixtureB803::class, static function () {
            return new FixtureB803();
        });

        $container->factory(FixtureB804::class, static function () {
            return new FixtureB804();
        });

        $container->factory(FixtureB805::class, static function () {
            return new FixtureB805();
        });

        $container->factory(FixtureB806::class, static function () {
            return new FixtureB806();
        });

        $container->factory(FixtureB807::class, static function () {
            return new FixtureB807();
        });

        $container->factory(FixtureB808::class, static function () {
            return new FixtureB808();
        });

        $container->factory(FixtureB809::class, static function () {
            return new FixtureB809();
        });

        $container->factory(FixtureB810::class, static function () {
            return new FixtureB810();
        });

        $container->factory(FixtureB811::class, static function () {
            return new FixtureB811();
        });

        $container->factory(FixtureB812::class, static function () {
            return new FixtureB812();
        });

        $container->factory(FixtureB813::class, static function () {
            return new FixtureB813();
        });

        $container->factory(FixtureB814::class, static function () {
            return new FixtureB814();
        });

        $container->factory(FixtureB815::class, static function () {
            return new FixtureB815();
        });

        $container->factory(FixtureB816::class, static function () {
            return new FixtureB816();
        });

        $container->factory(FixtureB817::class, static function () {
            return new FixtureB817();
        });

        $container->factory(FixtureB818::class, static function () {
            return new FixtureB818();
        });

        $container->factory(FixtureB819::class, static function () {
            return new FixtureB819();
        });

        $container->factory(FixtureB820::class, static function () {
            return new FixtureB820();
        });

        $container->factory(FixtureB821::class, static function () {
            return new FixtureB821();
        });

        $container->factory(FixtureB822::class, static function () {
            return new FixtureB822();
        });

        $container->factory(FixtureB823::class, static function () {
            return new FixtureB823();
        });

        $container->factory(FixtureB824::class, static function () {
            return new FixtureB824();
        });

        $container->factory(FixtureB825::class, static function () {
            return new FixtureB825();
        });

        $container->factory(FixtureB826::class, static function () {
            return new FixtureB826();
        });

        $container->factory(FixtureB827::class, static function () {
            return new FixtureB827();
        });

        $container->factory(FixtureB828::class, static function () {
            return new FixtureB828();
        });

        $container->factory(FixtureB829::class, static function () {
            return new FixtureB829();
        });

        $container->factory(FixtureB830::class, static function () {
            return new FixtureB830();
        });

        $container->factory(FixtureB831::class, static function () {
            return new FixtureB831();
        });

        $container->factory(FixtureB832::class, static function () {
            return new FixtureB832();
        });

        $container->factory(FixtureB833::class, static function () {
            return new FixtureB833();
        });

        $container->factory(FixtureB834::class, static function () {
            return new FixtureB834();
        });

        $container->factory(FixtureB835::class, static function () {
            return new FixtureB835();
        });

        $container->factory(FixtureB836::class, static function () {
            return new FixtureB836();
        });

        $container->factory(FixtureB837::class, static function () {
            return new FixtureB837();
        });

        $container->factory(FixtureB838::class, static function () {
            return new FixtureB838();
        });

        $container->factory(FixtureB839::class, static function () {
            return new FixtureB839();
        });

        $container->factory(FixtureB840::class, static function () {
            return new FixtureB840();
        });

        $container->factory(FixtureB841::class, static function () {
            return new FixtureB841();
        });

        $container->factory(FixtureB842::class, static function () {
            return new FixtureB842();
        });

        $container->factory(FixtureB843::class, static function () {
            return new FixtureB843();
        });

        $container->factory(FixtureB844::class, static function () {
            return new FixtureB844();
        });

        $container->factory(FixtureB845::class, static function () {
            return new FixtureB845();
        });

        $container->factory(FixtureB846::class, static function () {
            return new FixtureB846();
        });

        $container->factory(FixtureB847::class, static function () {
            return new FixtureB847();
        });

        $container->factory(FixtureB848::class, static function () {
            return new FixtureB848();
        });

        $container->factory(FixtureB849::class, static function () {
            return new FixtureB849();
        });

        $container->factory(FixtureB850::class, static function () {
            return new FixtureB850();
        });

        $container->factory(FixtureB851::class, static function () {
            return new FixtureB851();
        });

        $container->factory(FixtureB852::class, static function () {
            return new FixtureB852();
        });

        $container->factory(FixtureB853::class, static function () {
            return new FixtureB853();
        });

        $container->factory(FixtureB854::class, static function () {
            return new FixtureB854();
        });

        $container->factory(FixtureB855::class, static function () {
            return new FixtureB855();
        });

        $container->factory(FixtureB856::class, static function () {
            return new FixtureB856();
        });

        $container->factory(FixtureB857::class, static function () {
            return new FixtureB857();
        });

        $container->factory(FixtureB858::class, static function () {
            return new FixtureB858();
        });

        $container->factory(FixtureB859::class, static function () {
            return new FixtureB859();
        });

        $container->factory(FixtureB860::class, static function () {
            return new FixtureB860();
        });

        $container->factory(FixtureB861::class, static function () {
            return new FixtureB861();
        });

        $container->factory(FixtureB862::class, static function () {
            return new FixtureB862();
        });

        $container->factory(FixtureB863::class, static function () {
            return new FixtureB863();
        });

        $container->factory(FixtureB864::class, static function () {
            return new FixtureB864();
        });

        $container->factory(FixtureB865::class, static function () {
            return new FixtureB865();
        });

        $container->factory(FixtureB866::class, static function () {
            return new FixtureB866();
        });

        $container->factory(FixtureB867::class, static function () {
            return new FixtureB867();
        });

        $container->factory(FixtureB868::class, static function () {
            return new FixtureB868();
        });

        $container->factory(FixtureB869::class, static function () {
            return new FixtureB869();
        });

        $container->factory(FixtureB870::class, static function () {
            return new FixtureB870();
        });

        $container->factory(FixtureB871::class, static function () {
            return new FixtureB871();
        });

        $container->factory(FixtureB872::class, static function () {
            return new FixtureB872();
        });

        $container->factory(FixtureB873::class, static function () {
            return new FixtureB873();
        });

        $container->factory(FixtureB874::class, static function () {
            return new FixtureB874();
        });

        $container->factory(FixtureB875::class, static function () {
            return new FixtureB875();
        });

        $container->factory(FixtureB876::class, static function () {
            return new FixtureB876();
        });

        $container->factory(FixtureB877::class, static function () {
            return new FixtureB877();
        });

        $container->factory(FixtureB878::class, static function () {
            return new FixtureB878();
        });

        $container->factory(FixtureB879::class, static function () {
            return new FixtureB879();
        });

        $container->factory(FixtureB880::class, static function () {
            return new FixtureB880();
        });

        $container->factory(FixtureB881::class, static function () {
            return new FixtureB881();
        });

        $container->factory(FixtureB882::class, static function () {
            return new FixtureB882();
        });

        $container->factory(FixtureB883::class, static function () {
            return new FixtureB883();
        });

        $container->factory(FixtureB884::class, static function () {
            return new FixtureB884();
        });

        $container->factory(FixtureB885::class, static function () {
            return new FixtureB885();
        });

        $container->factory(FixtureB886::class, static function () {
            return new FixtureB886();
        });

        $container->factory(FixtureB887::class, static function () {
            return new FixtureB887();
        });

        $container->factory(FixtureB888::class, static function () {
            return new FixtureB888();
        });

        $container->factory(FixtureB889::class, static function () {
            return new FixtureB889();
        });

        $container->factory(FixtureB890::class, static function () {
            return new FixtureB890();
        });

        $container->factory(FixtureB891::class, static function () {
            return new FixtureB891();
        });

        $container->factory(FixtureB892::class, static function () {
            return new FixtureB892();
        });

        $container->factory(FixtureB893::class, static function () {
            return new FixtureB893();
        });

        $container->factory(FixtureB894::class, static function () {
            return new FixtureB894();
        });

        $container->factory(FixtureB895::class, static function () {
            return new FixtureB895();
        });

        $container->factory(FixtureB896::class, static function () {
            return new FixtureB896();
        });

        $container->factory(FixtureB897::class, static function () {
            return new FixtureB897();
        });

        $container->factory(FixtureB898::class, static function () {
            return new FixtureB898();
        });

        $container->factory(FixtureB899::class, static function () {
            return new FixtureB899();
        });

        $container->factory(FixtureB900::class, static function () {
            return new FixtureB900();
        });

        $container->factory(FixtureB901::class, static function () {
            return new FixtureB901();
        });

        $container->factory(FixtureB902::class, static function () {
            return new FixtureB902();
        });

        $container->factory(FixtureB903::class, static function () {
            return new FixtureB903();
        });

        $container->factory(FixtureB904::class, static function () {
            return new FixtureB904();
        });

        $container->factory(FixtureB905::class, static function () {
            return new FixtureB905();
        });

        $container->factory(FixtureB906::class, static function () {
            return new FixtureB906();
        });

        $container->factory(FixtureB907::class, static function () {
            return new FixtureB907();
        });

        $container->factory(FixtureB908::class, static function () {
            return new FixtureB908();
        });

        $container->factory(FixtureB909::class, static function () {
            return new FixtureB909();
        });

        $container->factory(FixtureB910::class, static function () {
            return new FixtureB910();
        });

        $container->factory(FixtureB911::class, static function () {
            return new FixtureB911();
        });

        $container->factory(FixtureB912::class, static function () {
            return new FixtureB912();
        });

        $container->factory(FixtureB913::class, static function () {
            return new FixtureB913();
        });

        $container->factory(FixtureB914::class, static function () {
            return new FixtureB914();
        });

        $container->factory(FixtureB915::class, static function () {
            return new FixtureB915();
        });

        $container->factory(FixtureB916::class, static function () {
            return new FixtureB916();
        });

        $container->factory(FixtureB917::class, static function () {
            return new FixtureB917();
        });

        $container->factory(FixtureB918::class, static function () {
            return new FixtureB918();
        });

        $container->factory(FixtureB919::class, static function () {
            return new FixtureB919();
        });

        $container->factory(FixtureB920::class, static function () {
            return new FixtureB920();
        });

        $container->factory(FixtureB921::class, static function () {
            return new FixtureB921();
        });

        $container->factory(FixtureB922::class, static function () {
            return new FixtureB922();
        });

        $container->factory(FixtureB923::class, static function () {
            return new FixtureB923();
        });

        $container->factory(FixtureB924::class, static function () {
            return new FixtureB924();
        });

        $container->factory(FixtureB925::class, static function () {
            return new FixtureB925();
        });

        $container->factory(FixtureB926::class, static function () {
            return new FixtureB926();
        });

        $container->factory(FixtureB927::class, static function () {
            return new FixtureB927();
        });

        $container->factory(FixtureB928::class, static function () {
            return new FixtureB928();
        });

        $container->factory(FixtureB929::class, static function () {
            return new FixtureB929();
        });

        $container->factory(FixtureB930::class, static function () {
            return new FixtureB930();
        });

        $container->factory(FixtureB931::class, static function () {
            return new FixtureB931();
        });

        $container->factory(FixtureB932::class, static function () {
            return new FixtureB932();
        });

        $container->factory(FixtureB933::class, static function () {
            return new FixtureB933();
        });

        $container->factory(FixtureB934::class, static function () {
            return new FixtureB934();
        });

        $container->factory(FixtureB935::class, static function () {
            return new FixtureB935();
        });

        $container->factory(FixtureB936::class, static function () {
            return new FixtureB936();
        });

        $container->factory(FixtureB937::class, static function () {
            return new FixtureB937();
        });

        $container->factory(FixtureB938::class, static function () {
            return new FixtureB938();
        });

        $container->factory(FixtureB939::class, static function () {
            return new FixtureB939();
        });

        $container->factory(FixtureB940::class, static function () {
            return new FixtureB940();
        });

        $container->factory(FixtureB941::class, static function () {
            return new FixtureB941();
        });

        $container->factory(FixtureB942::class, static function () {
            return new FixtureB942();
        });

        $container->factory(FixtureB943::class, static function () {
            return new FixtureB943();
        });

        $container->factory(FixtureB944::class, static function () {
            return new FixtureB944();
        });

        $container->factory(FixtureB945::class, static function () {
            return new FixtureB945();
        });

        $container->factory(FixtureB946::class, static function () {
            return new FixtureB946();
        });

        $container->factory(FixtureB947::class, static function () {
            return new FixtureB947();
        });

        $container->factory(FixtureB948::class, static function () {
            return new FixtureB948();
        });

        $container->factory(FixtureB949::class, static function () {
            return new FixtureB949();
        });

        $container->factory(FixtureB950::class, static function () {
            return new FixtureB950();
        });

        $container->factory(FixtureB951::class, static function () {
            return new FixtureB951();
        });

        $container->factory(FixtureB952::class, static function () {
            return new FixtureB952();
        });

        $container->factory(FixtureB953::class, static function () {
            return new FixtureB953();
        });

        $container->factory(FixtureB954::class, static function () {
            return new FixtureB954();
        });

        $container->factory(FixtureB955::class, static function () {
            return new FixtureB955();
        });

        $container->factory(FixtureB956::class, static function () {
            return new FixtureB956();
        });

        $container->factory(FixtureB957::class, static function () {
            return new FixtureB957();
        });

        $container->factory(FixtureB958::class, static function () {
            return new FixtureB958();
        });

        $container->factory(FixtureB959::class, static function () {
            return new FixtureB959();
        });

        $container->factory(FixtureB960::class, static function () {
            return new FixtureB960();
        });

        $container->factory(FixtureB961::class, static function () {
            return new FixtureB961();
        });

        $container->factory(FixtureB962::class, static function () {
            return new FixtureB962();
        });

        $container->factory(FixtureB963::class, static function () {
            return new FixtureB963();
        });

        $container->factory(FixtureB964::class, static function () {
            return new FixtureB964();
        });

        $container->factory(FixtureB965::class, static function () {
            return new FixtureB965();
        });

        $container->factory(FixtureB966::class, static function () {
            return new FixtureB966();
        });

        $container->factory(FixtureB967::class, static function () {
            return new FixtureB967();
        });

        $container->factory(FixtureB968::class, static function () {
            return new FixtureB968();
        });

        $container->factory(FixtureB969::class, static function () {
            return new FixtureB969();
        });

        $container->factory(FixtureB970::class, static function () {
            return new FixtureB970();
        });

        $container->factory(FixtureB971::class, static function () {
            return new FixtureB971();
        });

        $container->factory(FixtureB972::class, static function () {
            return new FixtureB972();
        });

        $container->factory(FixtureB973::class, static function () {
            return new FixtureB973();
        });

        $container->factory(FixtureB974::class, static function () {
            return new FixtureB974();
        });

        $container->factory(FixtureB975::class, static function () {
            return new FixtureB975();
        });

        $container->factory(FixtureB976::class, static function () {
            return new FixtureB976();
        });

        $container->factory(FixtureB977::class, static function () {
            return new FixtureB977();
        });

        $container->factory(FixtureB978::class, static function () {
            return new FixtureB978();
        });

        $container->factory(FixtureB979::class, static function () {
            return new FixtureB979();
        });

        $container->factory(FixtureB980::class, static function () {
            return new FixtureB980();
        });

        $container->factory(FixtureB981::class, static function () {
            return new FixtureB981();
        });

        $container->factory(FixtureB982::class, static function () {
            return new FixtureB982();
        });

        $container->factory(FixtureB983::class, static function () {
            return new FixtureB983();
        });

        $container->factory(FixtureB984::class, static function () {
            return new FixtureB984();
        });

        $container->factory(FixtureB985::class, static function () {
            return new FixtureB985();
        });

        $container->factory(FixtureB986::class, static function () {
            return new FixtureB986();
        });

        $container->factory(FixtureB987::class, static function () {
            return new FixtureB987();
        });

        $container->factory(FixtureB988::class, static function () {
            return new FixtureB988();
        });

        $container->factory(FixtureB989::class, static function () {
            return new FixtureB989();
        });

        $container->factory(FixtureB990::class, static function () {
            return new FixtureB990();
        });

        $container->factory(FixtureB991::class, static function () {
            return new FixtureB991();
        });

        $container->factory(FixtureB992::class, static function () {
            return new FixtureB992();
        });

        $container->factory(FixtureB993::class, static function () {
            return new FixtureB993();
        });

        $container->factory(FixtureB994::class, static function () {
            return new FixtureB994();
        });

        $container->factory(FixtureB995::class, static function () {
            return new FixtureB995();
        });

        $container->factory(FixtureB996::class, static function () {
            return new FixtureB996();
        });

        $container->factory(FixtureB997::class, static function () {
            return new FixtureB997();
        });

        $container->factory(FixtureB998::class, static function () {
            return new FixtureB998();
        });

        $container->factory(FixtureB999::class, static function () {
            return new FixtureB999();
        });

        $container->factory(FixtureB1000::class, static function () {
            return new FixtureB1000();
        });

        $container->factory(FixtureC1::class, static function () {
            return new FixtureC1();
        });

        $container->factory(FixtureC2::class, static function (ContainerInterface $container) {
            return new FixtureC2($container->get(FixtureC1::class));
        });

        $container->factory(FixtureC3::class, static function (ContainerInterface $container) {
            return new FixtureC3($container->get(FixtureC2::class));
        });

        $container->factory(FixtureC4::class, static function (ContainerInterface $container) {
            return new FixtureC4($container->get(FixtureC3::class));
        });

        $container->factory(FixtureC5::class, static function (ContainerInterface $container) {
            return new FixtureC5($container->get(FixtureC4::class));
        });

        $container->factory(FixtureC6::class, static function (ContainerInterface $container) {
            return new FixtureC6($container->get(FixtureC5::class));
        });

        $container->factory(FixtureC7::class, static function (ContainerInterface $container) {
            return new FixtureC7($container->get(FixtureC6::class));
        });

        $container->factory(FixtureC8::class, static function (ContainerInterface $container) {
            return new FixtureC8($container->get(FixtureC7::class));
        });

        $container->factory(FixtureC9::class, static function (ContainerInterface $container) {
            return new FixtureC9($container->get(FixtureC8::class));
        });

        $container->factory(FixtureC10::class, static function (ContainerInterface $container) {
            return new FixtureC10($container->get(FixtureC9::class));
        });

        $container->factory(FixtureC11::class, static function (ContainerInterface $container) {
            return new FixtureC11($container->get(FixtureC10::class));
        });

        $container->factory(FixtureC12::class, static function (ContainerInterface $container) {
            return new FixtureC12($container->get(FixtureC11::class));
        });

        $container->factory(FixtureC13::class, static function (ContainerInterface $container) {
            return new FixtureC13($container->get(FixtureC12::class));
        });

        $container->factory(FixtureC14::class, static function (ContainerInterface $container) {
            return new FixtureC14($container->get(FixtureC13::class));
        });

        $container->factory(FixtureC15::class, static function (ContainerInterface $container) {
            return new FixtureC15($container->get(FixtureC14::class));
        });

        $container->factory(FixtureC16::class, static function (ContainerInterface $container) {
            return new FixtureC16($container->get(FixtureC15::class));
        });

        $container->factory(FixtureC17::class, static function (ContainerInterface $container) {
            return new FixtureC17($container->get(FixtureC16::class));
        });

        $container->factory(FixtureC18::class, static function (ContainerInterface $container) {
            return new FixtureC18($container->get(FixtureC17::class));
        });

        $container->factory(FixtureC19::class, static function (ContainerInterface $container) {
            return new FixtureC19($container->get(FixtureC18::class));
        });

        $container->factory(FixtureC20::class, static function (ContainerInterface $container) {
            return new FixtureC20($container->get(FixtureC19::class));
        });

        $container->factory(FixtureC21::class, static function (ContainerInterface $container) {
            return new FixtureC21($container->get(FixtureC20::class));
        });

        $container->factory(FixtureC22::class, static function (ContainerInterface $container) {
            return new FixtureC22($container->get(FixtureC21::class));
        });

        $container->factory(FixtureC23::class, static function (ContainerInterface $container) {
            return new FixtureC23($container->get(FixtureC22::class));
        });

        $container->factory(FixtureC24::class, static function (ContainerInterface $container) {
            return new FixtureC24($container->get(FixtureC23::class));
        });

        $container->factory(FixtureC25::class, static function (ContainerInterface $container) {
            return new FixtureC25($container->get(FixtureC24::class));
        });

        $container->factory(FixtureC26::class, static function (ContainerInterface $container) {
            return new FixtureC26($container->get(FixtureC25::class));
        });

        $container->factory(FixtureC27::class, static function (ContainerInterface $container) {
            return new FixtureC27($container->get(FixtureC26::class));
        });

        $container->factory(FixtureC28::class, static function (ContainerInterface $container) {
            return new FixtureC28($container->get(FixtureC27::class));
        });

        $container->factory(FixtureC29::class, static function (ContainerInterface $container) {
            return new FixtureC29($container->get(FixtureC28::class));
        });

        $container->factory(FixtureC30::class, static function (ContainerInterface $container) {
            return new FixtureC30($container->get(FixtureC29::class));
        });

        $container->factory(FixtureC31::class, static function (ContainerInterface $container) {
            return new FixtureC31($container->get(FixtureC30::class));
        });

        $container->factory(FixtureC32::class, static function (ContainerInterface $container) {
            return new FixtureC32($container->get(FixtureC31::class));
        });

        $container->factory(FixtureC33::class, static function (ContainerInterface $container) {
            return new FixtureC33($container->get(FixtureC32::class));
        });

        $container->factory(FixtureC34::class, static function (ContainerInterface $container) {
            return new FixtureC34($container->get(FixtureC33::class));
        });

        $container->factory(FixtureC35::class, static function (ContainerInterface $container) {
            return new FixtureC35($container->get(FixtureC34::class));
        });

        $container->factory(FixtureC36::class, static function (ContainerInterface $container) {
            return new FixtureC36($container->get(FixtureC35::class));
        });

        $container->factory(FixtureC37::class, static function (ContainerInterface $container) {
            return new FixtureC37($container->get(FixtureC36::class));
        });

        $container->factory(FixtureC38::class, static function (ContainerInterface $container) {
            return new FixtureC38($container->get(FixtureC37::class));
        });

        $container->factory(FixtureC39::class, static function (ContainerInterface $container) {
            return new FixtureC39($container->get(FixtureC38::class));
        });

        $container->factory(FixtureC40::class, static function (ContainerInterface $container) {
            return new FixtureC40($container->get(FixtureC39::class));
        });

        $container->factory(FixtureC41::class, static function (ContainerInterface $container) {
            return new FixtureC41($container->get(FixtureC40::class));
        });

        $container->factory(FixtureC42::class, static function (ContainerInterface $container) {
            return new FixtureC42($container->get(FixtureC41::class));
        });

        $container->factory(FixtureC43::class, static function (ContainerInterface $container) {
            return new FixtureC43($container->get(FixtureC42::class));
        });

        $container->factory(FixtureC44::class, static function (ContainerInterface $container) {
            return new FixtureC44($container->get(FixtureC43::class));
        });

        $container->factory(FixtureC45::class, static function (ContainerInterface $container) {
            return new FixtureC45($container->get(FixtureC44::class));
        });

        $container->factory(FixtureC46::class, static function (ContainerInterface $container) {
            return new FixtureC46($container->get(FixtureC45::class));
        });

        $container->factory(FixtureC47::class, static function (ContainerInterface $container) {
            return new FixtureC47($container->get(FixtureC46::class));
        });

        $container->factory(FixtureC48::class, static function (ContainerInterface $container) {
            return new FixtureC48($container->get(FixtureC47::class));
        });

        $container->factory(FixtureC49::class, static function (ContainerInterface $container) {
            return new FixtureC49($container->get(FixtureC48::class));
        });

        $container->factory(FixtureC50::class, static function (ContainerInterface $container) {
            return new FixtureC50($container->get(FixtureC49::class));
        });

        $container->factory(FixtureC51::class, static function (ContainerInterface $container) {
            return new FixtureC51($container->get(FixtureC50::class));
        });

        $container->factory(FixtureC52::class, static function (ContainerInterface $container) {
            return new FixtureC52($container->get(FixtureC51::class));
        });

        $container->factory(FixtureC53::class, static function (ContainerInterface $container) {
            return new FixtureC53($container->get(FixtureC52::class));
        });

        $container->factory(FixtureC54::class, static function (ContainerInterface $container) {
            return new FixtureC54($container->get(FixtureC53::class));
        });

        $container->factory(FixtureC55::class, static function (ContainerInterface $container) {
            return new FixtureC55($container->get(FixtureC54::class));
        });

        $container->factory(FixtureC56::class, static function (ContainerInterface $container) {
            return new FixtureC56($container->get(FixtureC55::class));
        });

        $container->factory(FixtureC57::class, static function (ContainerInterface $container) {
            return new FixtureC57($container->get(FixtureC56::class));
        });

        $container->factory(FixtureC58::class, static function (ContainerInterface $container) {
            return new FixtureC58($container->get(FixtureC57::class));
        });

        $container->factory(FixtureC59::class, static function (ContainerInterface $container) {
            return new FixtureC59($container->get(FixtureC58::class));
        });

        $container->factory(FixtureC60::class, static function (ContainerInterface $container) {
            return new FixtureC60($container->get(FixtureC59::class));
        });

        $container->factory(FixtureC61::class, static function (ContainerInterface $container) {
            return new FixtureC61($container->get(FixtureC60::class));
        });

        $container->factory(FixtureC62::class, static function (ContainerInterface $container) {
            return new FixtureC62($container->get(FixtureC61::class));
        });

        $container->factory(FixtureC63::class, static function (ContainerInterface $container) {
            return new FixtureC63($container->get(FixtureC62::class));
        });

        $container->factory(FixtureC64::class, static function (ContainerInterface $container) {
            return new FixtureC64($container->get(FixtureC63::class));
        });

        $container->factory(FixtureC65::class, static function (ContainerInterface $container) {
            return new FixtureC65($container->get(FixtureC64::class));
        });

        $container->factory(FixtureC66::class, static function (ContainerInterface $container) {
            return new FixtureC66($container->get(FixtureC65::class));
        });

        $container->factory(FixtureC67::class, static function (ContainerInterface $container) {
            return new FixtureC67($container->get(FixtureC66::class));
        });

        $container->factory(FixtureC68::class, static function (ContainerInterface $container) {
            return new FixtureC68($container->get(FixtureC67::class));
        });

        $container->factory(FixtureC69::class, static function (ContainerInterface $container) {
            return new FixtureC69($container->get(FixtureC68::class));
        });

        $container->factory(FixtureC70::class, static function (ContainerInterface $container) {
            return new FixtureC70($container->get(FixtureC69::class));
        });

        $container->factory(FixtureC71::class, static function (ContainerInterface $container) {
            return new FixtureC71($container->get(FixtureC70::class));
        });

        $container->factory(FixtureC72::class, static function (ContainerInterface $container) {
            return new FixtureC72($container->get(FixtureC71::class));
        });

        $container->factory(FixtureC73::class, static function (ContainerInterface $container) {
            return new FixtureC73($container->get(FixtureC72::class));
        });

        $container->factory(FixtureC74::class, static function (ContainerInterface $container) {
            return new FixtureC74($container->get(FixtureC73::class));
        });

        $container->factory(FixtureC75::class, static function (ContainerInterface $container) {
            return new FixtureC75($container->get(FixtureC74::class));
        });

        $container->factory(FixtureC76::class, static function (ContainerInterface $container) {
            return new FixtureC76($container->get(FixtureC75::class));
        });

        $container->factory(FixtureC77::class, static function (ContainerInterface $container) {
            return new FixtureC77($container->get(FixtureC76::class));
        });

        $container->factory(FixtureC78::class, static function (ContainerInterface $container) {
            return new FixtureC78($container->get(FixtureC77::class));
        });

        $container->factory(FixtureC79::class, static function (ContainerInterface $container) {
            return new FixtureC79($container->get(FixtureC78::class));
        });

        $container->factory(FixtureC80::class, static function (ContainerInterface $container) {
            return new FixtureC80($container->get(FixtureC79::class));
        });

        $container->factory(FixtureC81::class, static function (ContainerInterface $container) {
            return new FixtureC81($container->get(FixtureC80::class));
        });

        $container->factory(FixtureC82::class, static function (ContainerInterface $container) {
            return new FixtureC82($container->get(FixtureC81::class));
        });

        $container->factory(FixtureC83::class, static function (ContainerInterface $container) {
            return new FixtureC83($container->get(FixtureC82::class));
        });

        $container->factory(FixtureC84::class, static function (ContainerInterface $container) {
            return new FixtureC84($container->get(FixtureC83::class));
        });

        $container->factory(FixtureC85::class, static function (ContainerInterface $container) {
            return new FixtureC85($container->get(FixtureC84::class));
        });

        $container->factory(FixtureC86::class, static function (ContainerInterface $container) {
            return new FixtureC86($container->get(FixtureC85::class));
        });

        $container->factory(FixtureC87::class, static function (ContainerInterface $container) {
            return new FixtureC87($container->get(FixtureC86::class));
        });

        $container->factory(FixtureC88::class, static function (ContainerInterface $container) {
            return new FixtureC88($container->get(FixtureC87::class));
        });

        $container->factory(FixtureC89::class, static function (ContainerInterface $container) {
            return new FixtureC89($container->get(FixtureC88::class));
        });

        $container->factory(FixtureC90::class, static function (ContainerInterface $container) {
            return new FixtureC90($container->get(FixtureC89::class));
        });

        $container->factory(FixtureC91::class, static function (ContainerInterface $container) {
            return new FixtureC91($container->get(FixtureC90::class));
        });

        $container->factory(FixtureC92::class, static function (ContainerInterface $container) {
            return new FixtureC92($container->get(FixtureC91::class));
        });

        $container->factory(FixtureC93::class, static function (ContainerInterface $container) {
            return new FixtureC93($container->get(FixtureC92::class));
        });

        $container->factory(FixtureC94::class, static function (ContainerInterface $container) {
            return new FixtureC94($container->get(FixtureC93::class));
        });

        $container->factory(FixtureC95::class, static function (ContainerInterface $container) {
            return new FixtureC95($container->get(FixtureC94::class));
        });

        $container->factory(FixtureC96::class, static function (ContainerInterface $container) {
            return new FixtureC96($container->get(FixtureC95::class));
        });

        $container->factory(FixtureC97::class, static function (ContainerInterface $container) {
            return new FixtureC97($container->get(FixtureC96::class));
        });

        $container->factory(FixtureC98::class, static function (ContainerInterface $container) {
            return new FixtureC98($container->get(FixtureC97::class));
        });

        $container->factory(FixtureC99::class, static function (ContainerInterface $container) {
            return new FixtureC99($container->get(FixtureC98::class));
        });

        $container->factory(FixtureC100::class, static function (ContainerInterface $container) {
            return new FixtureC100($container->get(FixtureC99::class));
        });

        $container->factory(FixtureC101::class, static function (ContainerInterface $container) {
            return new FixtureC101($container->get(FixtureC100::class));
        });

        $container->factory(FixtureC102::class, static function (ContainerInterface $container) {
            return new FixtureC102($container->get(FixtureC101::class));
        });

        $container->factory(FixtureC103::class, static function (ContainerInterface $container) {
            return new FixtureC103($container->get(FixtureC102::class));
        });

        $container->factory(FixtureC104::class, static function (ContainerInterface $container) {
            return new FixtureC104($container->get(FixtureC103::class));
        });

        $container->factory(FixtureC105::class, static function (ContainerInterface $container) {
            return new FixtureC105($container->get(FixtureC104::class));
        });

        $container->factory(FixtureC106::class, static function (ContainerInterface $container) {
            return new FixtureC106($container->get(FixtureC105::class));
        });

        $container->factory(FixtureC107::class, static function (ContainerInterface $container) {
            return new FixtureC107($container->get(FixtureC106::class));
        });

        $container->factory(FixtureC108::class, static function (ContainerInterface $container) {
            return new FixtureC108($container->get(FixtureC107::class));
        });

        $container->factory(FixtureC109::class, static function (ContainerInterface $container) {
            return new FixtureC109($container->get(FixtureC108::class));
        });

        $container->factory(FixtureC110::class, static function (ContainerInterface $container) {
            return new FixtureC110($container->get(FixtureC109::class));
        });

        $container->factory(FixtureC111::class, static function (ContainerInterface $container) {
            return new FixtureC111($container->get(FixtureC110::class));
        });

        $container->factory(FixtureC112::class, static function (ContainerInterface $container) {
            return new FixtureC112($container->get(FixtureC111::class));
        });

        $container->factory(FixtureC113::class, static function (ContainerInterface $container) {
            return new FixtureC113($container->get(FixtureC112::class));
        });

        $container->factory(FixtureC114::class, static function (ContainerInterface $container) {
            return new FixtureC114($container->get(FixtureC113::class));
        });

        $container->factory(FixtureC115::class, static function (ContainerInterface $container) {
            return new FixtureC115($container->get(FixtureC114::class));
        });

        $container->factory(FixtureC116::class, static function (ContainerInterface $container) {
            return new FixtureC116($container->get(FixtureC115::class));
        });

        $container->factory(FixtureC117::class, static function (ContainerInterface $container) {
            return new FixtureC117($container->get(FixtureC116::class));
        });

        $container->factory(FixtureC118::class, static function (ContainerInterface $container) {
            return new FixtureC118($container->get(FixtureC117::class));
        });

        $container->factory(FixtureC119::class, static function (ContainerInterface $container) {
            return new FixtureC119($container->get(FixtureC118::class));
        });

        $container->factory(FixtureC120::class, static function (ContainerInterface $container) {
            return new FixtureC120($container->get(FixtureC119::class));
        });

        $container->factory(FixtureC121::class, static function (ContainerInterface $container) {
            return new FixtureC121($container->get(FixtureC120::class));
        });

        $container->factory(FixtureC122::class, static function (ContainerInterface $container) {
            return new FixtureC122($container->get(FixtureC121::class));
        });

        $container->factory(FixtureC123::class, static function (ContainerInterface $container) {
            return new FixtureC123($container->get(FixtureC122::class));
        });

        $container->factory(FixtureC124::class, static function (ContainerInterface $container) {
            return new FixtureC124($container->get(FixtureC123::class));
        });

        $container->factory(FixtureC125::class, static function (ContainerInterface $container) {
            return new FixtureC125($container->get(FixtureC124::class));
        });

        $container->factory(FixtureC126::class, static function (ContainerInterface $container) {
            return new FixtureC126($container->get(FixtureC125::class));
        });

        $container->factory(FixtureC127::class, static function (ContainerInterface $container) {
            return new FixtureC127($container->get(FixtureC126::class));
        });

        $container->factory(FixtureC128::class, static function (ContainerInterface $container) {
            return new FixtureC128($container->get(FixtureC127::class));
        });

        $container->factory(FixtureC129::class, static function (ContainerInterface $container) {
            return new FixtureC129($container->get(FixtureC128::class));
        });

        $container->factory(FixtureC130::class, static function (ContainerInterface $container) {
            return new FixtureC130($container->get(FixtureC129::class));
        });

        $container->factory(FixtureC131::class, static function (ContainerInterface $container) {
            return new FixtureC131($container->get(FixtureC130::class));
        });

        $container->factory(FixtureC132::class, static function (ContainerInterface $container) {
            return new FixtureC132($container->get(FixtureC131::class));
        });

        $container->factory(FixtureC133::class, static function (ContainerInterface $container) {
            return new FixtureC133($container->get(FixtureC132::class));
        });

        $container->factory(FixtureC134::class, static function (ContainerInterface $container) {
            return new FixtureC134($container->get(FixtureC133::class));
        });

        $container->factory(FixtureC135::class, static function (ContainerInterface $container) {
            return new FixtureC135($container->get(FixtureC134::class));
        });

        $container->factory(FixtureC136::class, static function (ContainerInterface $container) {
            return new FixtureC136($container->get(FixtureC135::class));
        });

        $container->factory(FixtureC137::class, static function (ContainerInterface $container) {
            return new FixtureC137($container->get(FixtureC136::class));
        });

        $container->factory(FixtureC138::class, static function (ContainerInterface $container) {
            return new FixtureC138($container->get(FixtureC137::class));
        });

        $container->factory(FixtureC139::class, static function (ContainerInterface $container) {
            return new FixtureC139($container->get(FixtureC138::class));
        });

        $container->factory(FixtureC140::class, static function (ContainerInterface $container) {
            return new FixtureC140($container->get(FixtureC139::class));
        });

        $container->factory(FixtureC141::class, static function (ContainerInterface $container) {
            return new FixtureC141($container->get(FixtureC140::class));
        });

        $container->factory(FixtureC142::class, static function (ContainerInterface $container) {
            return new FixtureC142($container->get(FixtureC141::class));
        });

        $container->factory(FixtureC143::class, static function (ContainerInterface $container) {
            return new FixtureC143($container->get(FixtureC142::class));
        });

        $container->factory(FixtureC144::class, static function (ContainerInterface $container) {
            return new FixtureC144($container->get(FixtureC143::class));
        });

        $container->factory(FixtureC145::class, static function (ContainerInterface $container) {
            return new FixtureC145($container->get(FixtureC144::class));
        });

        $container->factory(FixtureC146::class, static function (ContainerInterface $container) {
            return new FixtureC146($container->get(FixtureC145::class));
        });

        $container->factory(FixtureC147::class, static function (ContainerInterface $container) {
            return new FixtureC147($container->get(FixtureC146::class));
        });

        $container->factory(FixtureC148::class, static function (ContainerInterface $container) {
            return new FixtureC148($container->get(FixtureC147::class));
        });

        $container->factory(FixtureC149::class, static function (ContainerInterface $container) {
            return new FixtureC149($container->get(FixtureC148::class));
        });

        $container->factory(FixtureC150::class, static function (ContainerInterface $container) {
            return new FixtureC150($container->get(FixtureC149::class));
        });

        $container->factory(FixtureC151::class, static function (ContainerInterface $container) {
            return new FixtureC151($container->get(FixtureC150::class));
        });

        $container->factory(FixtureC152::class, static function (ContainerInterface $container) {
            return new FixtureC152($container->get(FixtureC151::class));
        });

        $container->factory(FixtureC153::class, static function (ContainerInterface $container) {
            return new FixtureC153($container->get(FixtureC152::class));
        });

        $container->factory(FixtureC154::class, static function (ContainerInterface $container) {
            return new FixtureC154($container->get(FixtureC153::class));
        });

        $container->factory(FixtureC155::class, static function (ContainerInterface $container) {
            return new FixtureC155($container->get(FixtureC154::class));
        });

        $container->factory(FixtureC156::class, static function (ContainerInterface $container) {
            return new FixtureC156($container->get(FixtureC155::class));
        });

        $container->factory(FixtureC157::class, static function (ContainerInterface $container) {
            return new FixtureC157($container->get(FixtureC156::class));
        });

        $container->factory(FixtureC158::class, static function (ContainerInterface $container) {
            return new FixtureC158($container->get(FixtureC157::class));
        });

        $container->factory(FixtureC159::class, static function (ContainerInterface $container) {
            return new FixtureC159($container->get(FixtureC158::class));
        });

        $container->factory(FixtureC160::class, static function (ContainerInterface $container) {
            return new FixtureC160($container->get(FixtureC159::class));
        });

        $container->factory(FixtureC161::class, static function (ContainerInterface $container) {
            return new FixtureC161($container->get(FixtureC160::class));
        });

        $container->factory(FixtureC162::class, static function (ContainerInterface $container) {
            return new FixtureC162($container->get(FixtureC161::class));
        });

        $container->factory(FixtureC163::class, static function (ContainerInterface $container) {
            return new FixtureC163($container->get(FixtureC162::class));
        });

        $container->factory(FixtureC164::class, static function (ContainerInterface $container) {
            return new FixtureC164($container->get(FixtureC163::class));
        });

        $container->factory(FixtureC165::class, static function (ContainerInterface $container) {
            return new FixtureC165($container->get(FixtureC164::class));
        });

        $container->factory(FixtureC166::class, static function (ContainerInterface $container) {
            return new FixtureC166($container->get(FixtureC165::class));
        });

        $container->factory(FixtureC167::class, static function (ContainerInterface $container) {
            return new FixtureC167($container->get(FixtureC166::class));
        });

        $container->factory(FixtureC168::class, static function (ContainerInterface $container) {
            return new FixtureC168($container->get(FixtureC167::class));
        });

        $container->factory(FixtureC169::class, static function (ContainerInterface $container) {
            return new FixtureC169($container->get(FixtureC168::class));
        });

        $container->factory(FixtureC170::class, static function (ContainerInterface $container) {
            return new FixtureC170($container->get(FixtureC169::class));
        });

        $container->factory(FixtureC171::class, static function (ContainerInterface $container) {
            return new FixtureC171($container->get(FixtureC170::class));
        });

        $container->factory(FixtureC172::class, static function (ContainerInterface $container) {
            return new FixtureC172($container->get(FixtureC171::class));
        });

        $container->factory(FixtureC173::class, static function (ContainerInterface $container) {
            return new FixtureC173($container->get(FixtureC172::class));
        });

        $container->factory(FixtureC174::class, static function (ContainerInterface $container) {
            return new FixtureC174($container->get(FixtureC173::class));
        });

        $container->factory(FixtureC175::class, static function (ContainerInterface $container) {
            return new FixtureC175($container->get(FixtureC174::class));
        });

        $container->factory(FixtureC176::class, static function (ContainerInterface $container) {
            return new FixtureC176($container->get(FixtureC175::class));
        });

        $container->factory(FixtureC177::class, static function (ContainerInterface $container) {
            return new FixtureC177($container->get(FixtureC176::class));
        });

        $container->factory(FixtureC178::class, static function (ContainerInterface $container) {
            return new FixtureC178($container->get(FixtureC177::class));
        });

        $container->factory(FixtureC179::class, static function (ContainerInterface $container) {
            return new FixtureC179($container->get(FixtureC178::class));
        });

        $container->factory(FixtureC180::class, static function (ContainerInterface $container) {
            return new FixtureC180($container->get(FixtureC179::class));
        });

        $container->factory(FixtureC181::class, static function (ContainerInterface $container) {
            return new FixtureC181($container->get(FixtureC180::class));
        });

        $container->factory(FixtureC182::class, static function (ContainerInterface $container) {
            return new FixtureC182($container->get(FixtureC181::class));
        });

        $container->factory(FixtureC183::class, static function (ContainerInterface $container) {
            return new FixtureC183($container->get(FixtureC182::class));
        });

        $container->factory(FixtureC184::class, static function (ContainerInterface $container) {
            return new FixtureC184($container->get(FixtureC183::class));
        });

        $container->factory(FixtureC185::class, static function (ContainerInterface $container) {
            return new FixtureC185($container->get(FixtureC184::class));
        });

        $container->factory(FixtureC186::class, static function (ContainerInterface $container) {
            return new FixtureC186($container->get(FixtureC185::class));
        });

        $container->factory(FixtureC187::class, static function (ContainerInterface $container) {
            return new FixtureC187($container->get(FixtureC186::class));
        });

        $container->factory(FixtureC188::class, static function (ContainerInterface $container) {
            return new FixtureC188($container->get(FixtureC187::class));
        });

        $container->factory(FixtureC189::class, static function (ContainerInterface $container) {
            return new FixtureC189($container->get(FixtureC188::class));
        });

        $container->factory(FixtureC190::class, static function (ContainerInterface $container) {
            return new FixtureC190($container->get(FixtureC189::class));
        });

        $container->factory(FixtureC191::class, static function (ContainerInterface $container) {
            return new FixtureC191($container->get(FixtureC190::class));
        });

        $container->factory(FixtureC192::class, static function (ContainerInterface $container) {
            return new FixtureC192($container->get(FixtureC191::class));
        });

        $container->factory(FixtureC193::class, static function (ContainerInterface $container) {
            return new FixtureC193($container->get(FixtureC192::class));
        });

        $container->factory(FixtureC194::class, static function (ContainerInterface $container) {
            return new FixtureC194($container->get(FixtureC193::class));
        });

        $container->factory(FixtureC195::class, static function (ContainerInterface $container) {
            return new FixtureC195($container->get(FixtureC194::class));
        });

        $container->factory(FixtureC196::class, static function (ContainerInterface $container) {
            return new FixtureC196($container->get(FixtureC195::class));
        });

        $container->factory(FixtureC197::class, static function (ContainerInterface $container) {
            return new FixtureC197($container->get(FixtureC196::class));
        });

        $container->factory(FixtureC198::class, static function (ContainerInterface $container) {
            return new FixtureC198($container->get(FixtureC197::class));
        });

        $container->factory(FixtureC199::class, static function (ContainerInterface $container) {
            return new FixtureC199($container->get(FixtureC198::class));
        });

        $container->factory(FixtureC200::class, static function (ContainerInterface $container) {
            return new FixtureC200($container->get(FixtureC199::class));
        });

        $container->factory(FixtureC201::class, static function (ContainerInterface $container) {
            return new FixtureC201($container->get(FixtureC200::class));
        });

        $container->factory(FixtureC202::class, static function (ContainerInterface $container) {
            return new FixtureC202($container->get(FixtureC201::class));
        });

        $container->factory(FixtureC203::class, static function (ContainerInterface $container) {
            return new FixtureC203($container->get(FixtureC202::class));
        });

        $container->factory(FixtureC204::class, static function (ContainerInterface $container) {
            return new FixtureC204($container->get(FixtureC203::class));
        });

        $container->factory(FixtureC205::class, static function (ContainerInterface $container) {
            return new FixtureC205($container->get(FixtureC204::class));
        });

        $container->factory(FixtureC206::class, static function (ContainerInterface $container) {
            return new FixtureC206($container->get(FixtureC205::class));
        });

        $container->factory(FixtureC207::class, static function (ContainerInterface $container) {
            return new FixtureC207($container->get(FixtureC206::class));
        });

        $container->factory(FixtureC208::class, static function (ContainerInterface $container) {
            return new FixtureC208($container->get(FixtureC207::class));
        });

        $container->factory(FixtureC209::class, static function (ContainerInterface $container) {
            return new FixtureC209($container->get(FixtureC208::class));
        });

        $container->factory(FixtureC210::class, static function (ContainerInterface $container) {
            return new FixtureC210($container->get(FixtureC209::class));
        });

        $container->factory(FixtureC211::class, static function (ContainerInterface $container) {
            return new FixtureC211($container->get(FixtureC210::class));
        });

        $container->factory(FixtureC212::class, static function (ContainerInterface $container) {
            return new FixtureC212($container->get(FixtureC211::class));
        });

        $container->factory(FixtureC213::class, static function (ContainerInterface $container) {
            return new FixtureC213($container->get(FixtureC212::class));
        });

        $container->factory(FixtureC214::class, static function (ContainerInterface $container) {
            return new FixtureC214($container->get(FixtureC213::class));
        });

        $container->factory(FixtureC215::class, static function (ContainerInterface $container) {
            return new FixtureC215($container->get(FixtureC214::class));
        });

        $container->factory(FixtureC216::class, static function (ContainerInterface $container) {
            return new FixtureC216($container->get(FixtureC215::class));
        });

        $container->factory(FixtureC217::class, static function (ContainerInterface $container) {
            return new FixtureC217($container->get(FixtureC216::class));
        });

        $container->factory(FixtureC218::class, static function (ContainerInterface $container) {
            return new FixtureC218($container->get(FixtureC217::class));
        });

        $container->factory(FixtureC219::class, static function (ContainerInterface $container) {
            return new FixtureC219($container->get(FixtureC218::class));
        });

        $container->factory(FixtureC220::class, static function (ContainerInterface $container) {
            return new FixtureC220($container->get(FixtureC219::class));
        });

        $container->factory(FixtureC221::class, static function (ContainerInterface $container) {
            return new FixtureC221($container->get(FixtureC220::class));
        });

        $container->factory(FixtureC222::class, static function (ContainerInterface $container) {
            return new FixtureC222($container->get(FixtureC221::class));
        });

        $container->factory(FixtureC223::class, static function (ContainerInterface $container) {
            return new FixtureC223($container->get(FixtureC222::class));
        });

        $container->factory(FixtureC224::class, static function (ContainerInterface $container) {
            return new FixtureC224($container->get(FixtureC223::class));
        });

        $container->factory(FixtureC225::class, static function (ContainerInterface $container) {
            return new FixtureC225($container->get(FixtureC224::class));
        });

        $container->factory(FixtureC226::class, static function (ContainerInterface $container) {
            return new FixtureC226($container->get(FixtureC225::class));
        });

        $container->factory(FixtureC227::class, static function (ContainerInterface $container) {
            return new FixtureC227($container->get(FixtureC226::class));
        });

        $container->factory(FixtureC228::class, static function (ContainerInterface $container) {
            return new FixtureC228($container->get(FixtureC227::class));
        });

        $container->factory(FixtureC229::class, static function (ContainerInterface $container) {
            return new FixtureC229($container->get(FixtureC228::class));
        });

        $container->factory(FixtureC230::class, static function (ContainerInterface $container) {
            return new FixtureC230($container->get(FixtureC229::class));
        });

        $container->factory(FixtureC231::class, static function (ContainerInterface $container) {
            return new FixtureC231($container->get(FixtureC230::class));
        });

        $container->factory(FixtureC232::class, static function (ContainerInterface $container) {
            return new FixtureC232($container->get(FixtureC231::class));
        });

        $container->factory(FixtureC233::class, static function (ContainerInterface $container) {
            return new FixtureC233($container->get(FixtureC232::class));
        });

        $container->factory(FixtureC234::class, static function (ContainerInterface $container) {
            return new FixtureC234($container->get(FixtureC233::class));
        });

        $container->factory(FixtureC235::class, static function (ContainerInterface $container) {
            return new FixtureC235($container->get(FixtureC234::class));
        });

        $container->factory(FixtureC236::class, static function (ContainerInterface $container) {
            return new FixtureC236($container->get(FixtureC235::class));
        });

        $container->factory(FixtureC237::class, static function (ContainerInterface $container) {
            return new FixtureC237($container->get(FixtureC236::class));
        });

        $container->factory(FixtureC238::class, static function (ContainerInterface $container) {
            return new FixtureC238($container->get(FixtureC237::class));
        });

        $container->factory(FixtureC239::class, static function (ContainerInterface $container) {
            return new FixtureC239($container->get(FixtureC238::class));
        });

        $container->factory(FixtureC240::class, static function (ContainerInterface $container) {
            return new FixtureC240($container->get(FixtureC239::class));
        });

        $container->factory(FixtureC241::class, static function (ContainerInterface $container) {
            return new FixtureC241($container->get(FixtureC240::class));
        });

        $container->factory(FixtureC242::class, static function (ContainerInterface $container) {
            return new FixtureC242($container->get(FixtureC241::class));
        });

        $container->factory(FixtureC243::class, static function (ContainerInterface $container) {
            return new FixtureC243($container->get(FixtureC242::class));
        });

        $container->factory(FixtureC244::class, static function (ContainerInterface $container) {
            return new FixtureC244($container->get(FixtureC243::class));
        });

        $container->factory(FixtureC245::class, static function (ContainerInterface $container) {
            return new FixtureC245($container->get(FixtureC244::class));
        });

        $container->factory(FixtureC246::class, static function (ContainerInterface $container) {
            return new FixtureC246($container->get(FixtureC245::class));
        });

        $container->factory(FixtureC247::class, static function (ContainerInterface $container) {
            return new FixtureC247($container->get(FixtureC246::class));
        });

        $container->factory(FixtureC248::class, static function (ContainerInterface $container) {
            return new FixtureC248($container->get(FixtureC247::class));
        });

        $container->factory(FixtureC249::class, static function (ContainerInterface $container) {
            return new FixtureC249($container->get(FixtureC248::class));
        });

        $container->factory(FixtureC250::class, static function (ContainerInterface $container) {
            return new FixtureC250($container->get(FixtureC249::class));
        });

        $container->factory(FixtureC251::class, static function (ContainerInterface $container) {
            return new FixtureC251($container->get(FixtureC250::class));
        });

        $container->factory(FixtureC252::class, static function (ContainerInterface $container) {
            return new FixtureC252($container->get(FixtureC251::class));
        });

        $container->factory(FixtureC253::class, static function (ContainerInterface $container) {
            return new FixtureC253($container->get(FixtureC252::class));
        });

        $container->factory(FixtureC254::class, static function (ContainerInterface $container) {
            return new FixtureC254($container->get(FixtureC253::class));
        });

        $container->factory(FixtureC255::class, static function (ContainerInterface $container) {
            return new FixtureC255($container->get(FixtureC254::class));
        });

        $container->factory(FixtureC256::class, static function (ContainerInterface $container) {
            return new FixtureC256($container->get(FixtureC255::class));
        });

        $container->factory(FixtureC257::class, static function (ContainerInterface $container) {
            return new FixtureC257($container->get(FixtureC256::class));
        });

        $container->factory(FixtureC258::class, static function (ContainerInterface $container) {
            return new FixtureC258($container->get(FixtureC257::class));
        });

        $container->factory(FixtureC259::class, static function (ContainerInterface $container) {
            return new FixtureC259($container->get(FixtureC258::class));
        });

        $container->factory(FixtureC260::class, static function (ContainerInterface $container) {
            return new FixtureC260($container->get(FixtureC259::class));
        });

        $container->factory(FixtureC261::class, static function (ContainerInterface $container) {
            return new FixtureC261($container->get(FixtureC260::class));
        });

        $container->factory(FixtureC262::class, static function (ContainerInterface $container) {
            return new FixtureC262($container->get(FixtureC261::class));
        });

        $container->factory(FixtureC263::class, static function (ContainerInterface $container) {
            return new FixtureC263($container->get(FixtureC262::class));
        });

        $container->factory(FixtureC264::class, static function (ContainerInterface $container) {
            return new FixtureC264($container->get(FixtureC263::class));
        });

        $container->factory(FixtureC265::class, static function (ContainerInterface $container) {
            return new FixtureC265($container->get(FixtureC264::class));
        });

        $container->factory(FixtureC266::class, static function (ContainerInterface $container) {
            return new FixtureC266($container->get(FixtureC265::class));
        });

        $container->factory(FixtureC267::class, static function (ContainerInterface $container) {
            return new FixtureC267($container->get(FixtureC266::class));
        });

        $container->factory(FixtureC268::class, static function (ContainerInterface $container) {
            return new FixtureC268($container->get(FixtureC267::class));
        });

        $container->factory(FixtureC269::class, static function (ContainerInterface $container) {
            return new FixtureC269($container->get(FixtureC268::class));
        });

        $container->factory(FixtureC270::class, static function (ContainerInterface $container) {
            return new FixtureC270($container->get(FixtureC269::class));
        });

        $container->factory(FixtureC271::class, static function (ContainerInterface $container) {
            return new FixtureC271($container->get(FixtureC270::class));
        });

        $container->factory(FixtureC272::class, static function (ContainerInterface $container) {
            return new FixtureC272($container->get(FixtureC271::class));
        });

        $container->factory(FixtureC273::class, static function (ContainerInterface $container) {
            return new FixtureC273($container->get(FixtureC272::class));
        });

        $container->factory(FixtureC274::class, static function (ContainerInterface $container) {
            return new FixtureC274($container->get(FixtureC273::class));
        });

        $container->factory(FixtureC275::class, static function (ContainerInterface $container) {
            return new FixtureC275($container->get(FixtureC274::class));
        });

        $container->factory(FixtureC276::class, static function (ContainerInterface $container) {
            return new FixtureC276($container->get(FixtureC275::class));
        });

        $container->factory(FixtureC277::class, static function (ContainerInterface $container) {
            return new FixtureC277($container->get(FixtureC276::class));
        });

        $container->factory(FixtureC278::class, static function (ContainerInterface $container) {
            return new FixtureC278($container->get(FixtureC277::class));
        });

        $container->factory(FixtureC279::class, static function (ContainerInterface $container) {
            return new FixtureC279($container->get(FixtureC278::class));
        });

        $container->factory(FixtureC280::class, static function (ContainerInterface $container) {
            return new FixtureC280($container->get(FixtureC279::class));
        });

        $container->factory(FixtureC281::class, static function (ContainerInterface $container) {
            return new FixtureC281($container->get(FixtureC280::class));
        });

        $container->factory(FixtureC282::class, static function (ContainerInterface $container) {
            return new FixtureC282($container->get(FixtureC281::class));
        });

        $container->factory(FixtureC283::class, static function (ContainerInterface $container) {
            return new FixtureC283($container->get(FixtureC282::class));
        });

        $container->factory(FixtureC284::class, static function (ContainerInterface $container) {
            return new FixtureC284($container->get(FixtureC283::class));
        });

        $container->factory(FixtureC285::class, static function (ContainerInterface $container) {
            return new FixtureC285($container->get(FixtureC284::class));
        });

        $container->factory(FixtureC286::class, static function (ContainerInterface $container) {
            return new FixtureC286($container->get(FixtureC285::class));
        });

        $container->factory(FixtureC287::class, static function (ContainerInterface $container) {
            return new FixtureC287($container->get(FixtureC286::class));
        });

        $container->factory(FixtureC288::class, static function (ContainerInterface $container) {
            return new FixtureC288($container->get(FixtureC287::class));
        });

        $container->factory(FixtureC289::class, static function (ContainerInterface $container) {
            return new FixtureC289($container->get(FixtureC288::class));
        });

        $container->factory(FixtureC290::class, static function (ContainerInterface $container) {
            return new FixtureC290($container->get(FixtureC289::class));
        });

        $container->factory(FixtureC291::class, static function (ContainerInterface $container) {
            return new FixtureC291($container->get(FixtureC290::class));
        });

        $container->factory(FixtureC292::class, static function (ContainerInterface $container) {
            return new FixtureC292($container->get(FixtureC291::class));
        });

        $container->factory(FixtureC293::class, static function (ContainerInterface $container) {
            return new FixtureC293($container->get(FixtureC292::class));
        });

        $container->factory(FixtureC294::class, static function (ContainerInterface $container) {
            return new FixtureC294($container->get(FixtureC293::class));
        });

        $container->factory(FixtureC295::class, static function (ContainerInterface $container) {
            return new FixtureC295($container->get(FixtureC294::class));
        });

        $container->factory(FixtureC296::class, static function (ContainerInterface $container) {
            return new FixtureC296($container->get(FixtureC295::class));
        });

        $container->factory(FixtureC297::class, static function (ContainerInterface $container) {
            return new FixtureC297($container->get(FixtureC296::class));
        });

        $container->factory(FixtureC298::class, static function (ContainerInterface $container) {
            return new FixtureC298($container->get(FixtureC297::class));
        });

        $container->factory(FixtureC299::class, static function (ContainerInterface $container) {
            return new FixtureC299($container->get(FixtureC298::class));
        });

        $container->factory(FixtureC300::class, static function (ContainerInterface $container) {
            return new FixtureC300($container->get(FixtureC299::class));
        });

        $container->factory(FixtureC301::class, static function (ContainerInterface $container) {
            return new FixtureC301($container->get(FixtureC300::class));
        });

        $container->factory(FixtureC302::class, static function (ContainerInterface $container) {
            return new FixtureC302($container->get(FixtureC301::class));
        });

        $container->factory(FixtureC303::class, static function (ContainerInterface $container) {
            return new FixtureC303($container->get(FixtureC302::class));
        });

        $container->factory(FixtureC304::class, static function (ContainerInterface $container) {
            return new FixtureC304($container->get(FixtureC303::class));
        });

        $container->factory(FixtureC305::class, static function (ContainerInterface $container) {
            return new FixtureC305($container->get(FixtureC304::class));
        });

        $container->factory(FixtureC306::class, static function (ContainerInterface $container) {
            return new FixtureC306($container->get(FixtureC305::class));
        });

        $container->factory(FixtureC307::class, static function (ContainerInterface $container) {
            return new FixtureC307($container->get(FixtureC306::class));
        });

        $container->factory(FixtureC308::class, static function (ContainerInterface $container) {
            return new FixtureC308($container->get(FixtureC307::class));
        });

        $container->factory(FixtureC309::class, static function (ContainerInterface $container) {
            return new FixtureC309($container->get(FixtureC308::class));
        });

        $container->factory(FixtureC310::class, static function (ContainerInterface $container) {
            return new FixtureC310($container->get(FixtureC309::class));
        });

        $container->factory(FixtureC311::class, static function (ContainerInterface $container) {
            return new FixtureC311($container->get(FixtureC310::class));
        });

        $container->factory(FixtureC312::class, static function (ContainerInterface $container) {
            return new FixtureC312($container->get(FixtureC311::class));
        });

        $container->factory(FixtureC313::class, static function (ContainerInterface $container) {
            return new FixtureC313($container->get(FixtureC312::class));
        });

        $container->factory(FixtureC314::class, static function (ContainerInterface $container) {
            return new FixtureC314($container->get(FixtureC313::class));
        });

        $container->factory(FixtureC315::class, static function (ContainerInterface $container) {
            return new FixtureC315($container->get(FixtureC314::class));
        });

        $container->factory(FixtureC316::class, static function (ContainerInterface $container) {
            return new FixtureC316($container->get(FixtureC315::class));
        });

        $container->factory(FixtureC317::class, static function (ContainerInterface $container) {
            return new FixtureC317($container->get(FixtureC316::class));
        });

        $container->factory(FixtureC318::class, static function (ContainerInterface $container) {
            return new FixtureC318($container->get(FixtureC317::class));
        });

        $container->factory(FixtureC319::class, static function (ContainerInterface $container) {
            return new FixtureC319($container->get(FixtureC318::class));
        });

        $container->factory(FixtureC320::class, static function (ContainerInterface $container) {
            return new FixtureC320($container->get(FixtureC319::class));
        });

        $container->factory(FixtureC321::class, static function (ContainerInterface $container) {
            return new FixtureC321($container->get(FixtureC320::class));
        });

        $container->factory(FixtureC322::class, static function (ContainerInterface $container) {
            return new FixtureC322($container->get(FixtureC321::class));
        });

        $container->factory(FixtureC323::class, static function (ContainerInterface $container) {
            return new FixtureC323($container->get(FixtureC322::class));
        });

        $container->factory(FixtureC324::class, static function (ContainerInterface $container) {
            return new FixtureC324($container->get(FixtureC323::class));
        });

        $container->factory(FixtureC325::class, static function (ContainerInterface $container) {
            return new FixtureC325($container->get(FixtureC324::class));
        });

        $container->factory(FixtureC326::class, static function (ContainerInterface $container) {
            return new FixtureC326($container->get(FixtureC325::class));
        });

        $container->factory(FixtureC327::class, static function (ContainerInterface $container) {
            return new FixtureC327($container->get(FixtureC326::class));
        });

        $container->factory(FixtureC328::class, static function (ContainerInterface $container) {
            return new FixtureC328($container->get(FixtureC327::class));
        });

        $container->factory(FixtureC329::class, static function (ContainerInterface $container) {
            return new FixtureC329($container->get(FixtureC328::class));
        });

        $container->factory(FixtureC330::class, static function (ContainerInterface $container) {
            return new FixtureC330($container->get(FixtureC329::class));
        });

        $container->factory(FixtureC331::class, static function (ContainerInterface $container) {
            return new FixtureC331($container->get(FixtureC330::class));
        });

        $container->factory(FixtureC332::class, static function (ContainerInterface $container) {
            return new FixtureC332($container->get(FixtureC331::class));
        });

        $container->factory(FixtureC333::class, static function (ContainerInterface $container) {
            return new FixtureC333($container->get(FixtureC332::class));
        });

        $container->factory(FixtureC334::class, static function (ContainerInterface $container) {
            return new FixtureC334($container->get(FixtureC333::class));
        });

        $container->factory(FixtureC335::class, static function (ContainerInterface $container) {
            return new FixtureC335($container->get(FixtureC334::class));
        });

        $container->factory(FixtureC336::class, static function (ContainerInterface $container) {
            return new FixtureC336($container->get(FixtureC335::class));
        });

        $container->factory(FixtureC337::class, static function (ContainerInterface $container) {
            return new FixtureC337($container->get(FixtureC336::class));
        });

        $container->factory(FixtureC338::class, static function (ContainerInterface $container) {
            return new FixtureC338($container->get(FixtureC337::class));
        });

        $container->factory(FixtureC339::class, static function (ContainerInterface $container) {
            return new FixtureC339($container->get(FixtureC338::class));
        });

        $container->factory(FixtureC340::class, static function (ContainerInterface $container) {
            return new FixtureC340($container->get(FixtureC339::class));
        });

        $container->factory(FixtureC341::class, static function (ContainerInterface $container) {
            return new FixtureC341($container->get(FixtureC340::class));
        });

        $container->factory(FixtureC342::class, static function (ContainerInterface $container) {
            return new FixtureC342($container->get(FixtureC341::class));
        });

        $container->factory(FixtureC343::class, static function (ContainerInterface $container) {
            return new FixtureC343($container->get(FixtureC342::class));
        });

        $container->factory(FixtureC344::class, static function (ContainerInterface $container) {
            return new FixtureC344($container->get(FixtureC343::class));
        });

        $container->factory(FixtureC345::class, static function (ContainerInterface $container) {
            return new FixtureC345($container->get(FixtureC344::class));
        });

        $container->factory(FixtureC346::class, static function (ContainerInterface $container) {
            return new FixtureC346($container->get(FixtureC345::class));
        });

        $container->factory(FixtureC347::class, static function (ContainerInterface $container) {
            return new FixtureC347($container->get(FixtureC346::class));
        });

        $container->factory(FixtureC348::class, static function (ContainerInterface $container) {
            return new FixtureC348($container->get(FixtureC347::class));
        });

        $container->factory(FixtureC349::class, static function (ContainerInterface $container) {
            return new FixtureC349($container->get(FixtureC348::class));
        });

        $container->factory(FixtureC350::class, static function (ContainerInterface $container) {
            return new FixtureC350($container->get(FixtureC349::class));
        });

        $container->factory(FixtureC351::class, static function (ContainerInterface $container) {
            return new FixtureC351($container->get(FixtureC350::class));
        });

        $container->factory(FixtureC352::class, static function (ContainerInterface $container) {
            return new FixtureC352($container->get(FixtureC351::class));
        });

        $container->factory(FixtureC353::class, static function (ContainerInterface $container) {
            return new FixtureC353($container->get(FixtureC352::class));
        });

        $container->factory(FixtureC354::class, static function (ContainerInterface $container) {
            return new FixtureC354($container->get(FixtureC353::class));
        });

        $container->factory(FixtureC355::class, static function (ContainerInterface $container) {
            return new FixtureC355($container->get(FixtureC354::class));
        });

        $container->factory(FixtureC356::class, static function (ContainerInterface $container) {
            return new FixtureC356($container->get(FixtureC355::class));
        });

        $container->factory(FixtureC357::class, static function (ContainerInterface $container) {
            return new FixtureC357($container->get(FixtureC356::class));
        });

        $container->factory(FixtureC358::class, static function (ContainerInterface $container) {
            return new FixtureC358($container->get(FixtureC357::class));
        });

        $container->factory(FixtureC359::class, static function (ContainerInterface $container) {
            return new FixtureC359($container->get(FixtureC358::class));
        });

        $container->factory(FixtureC360::class, static function (ContainerInterface $container) {
            return new FixtureC360($container->get(FixtureC359::class));
        });

        $container->factory(FixtureC361::class, static function (ContainerInterface $container) {
            return new FixtureC361($container->get(FixtureC360::class));
        });

        $container->factory(FixtureC362::class, static function (ContainerInterface $container) {
            return new FixtureC362($container->get(FixtureC361::class));
        });

        $container->factory(FixtureC363::class, static function (ContainerInterface $container) {
            return new FixtureC363($container->get(FixtureC362::class));
        });

        $container->factory(FixtureC364::class, static function (ContainerInterface $container) {
            return new FixtureC364($container->get(FixtureC363::class));
        });

        $container->factory(FixtureC365::class, static function (ContainerInterface $container) {
            return new FixtureC365($container->get(FixtureC364::class));
        });

        $container->factory(FixtureC366::class, static function (ContainerInterface $container) {
            return new FixtureC366($container->get(FixtureC365::class));
        });

        $container->factory(FixtureC367::class, static function (ContainerInterface $container) {
            return new FixtureC367($container->get(FixtureC366::class));
        });

        $container->factory(FixtureC368::class, static function (ContainerInterface $container) {
            return new FixtureC368($container->get(FixtureC367::class));
        });

        $container->factory(FixtureC369::class, static function (ContainerInterface $container) {
            return new FixtureC369($container->get(FixtureC368::class));
        });

        $container->factory(FixtureC370::class, static function (ContainerInterface $container) {
            return new FixtureC370($container->get(FixtureC369::class));
        });

        $container->factory(FixtureC371::class, static function (ContainerInterface $container) {
            return new FixtureC371($container->get(FixtureC370::class));
        });

        $container->factory(FixtureC372::class, static function (ContainerInterface $container) {
            return new FixtureC372($container->get(FixtureC371::class));
        });

        $container->factory(FixtureC373::class, static function (ContainerInterface $container) {
            return new FixtureC373($container->get(FixtureC372::class));
        });

        $container->factory(FixtureC374::class, static function (ContainerInterface $container) {
            return new FixtureC374($container->get(FixtureC373::class));
        });

        $container->factory(FixtureC375::class, static function (ContainerInterface $container) {
            return new FixtureC375($container->get(FixtureC374::class));
        });

        $container->factory(FixtureC376::class, static function (ContainerInterface $container) {
            return new FixtureC376($container->get(FixtureC375::class));
        });

        $container->factory(FixtureC377::class, static function (ContainerInterface $container) {
            return new FixtureC377($container->get(FixtureC376::class));
        });

        $container->factory(FixtureC378::class, static function (ContainerInterface $container) {
            return new FixtureC378($container->get(FixtureC377::class));
        });

        $container->factory(FixtureC379::class, static function (ContainerInterface $container) {
            return new FixtureC379($container->get(FixtureC378::class));
        });

        $container->factory(FixtureC380::class, static function (ContainerInterface $container) {
            return new FixtureC380($container->get(FixtureC379::class));
        });

        $container->factory(FixtureC381::class, static function (ContainerInterface $container) {
            return new FixtureC381($container->get(FixtureC380::class));
        });

        $container->factory(FixtureC382::class, static function (ContainerInterface $container) {
            return new FixtureC382($container->get(FixtureC381::class));
        });

        $container->factory(FixtureC383::class, static function (ContainerInterface $container) {
            return new FixtureC383($container->get(FixtureC382::class));
        });

        $container->factory(FixtureC384::class, static function (ContainerInterface $container) {
            return new FixtureC384($container->get(FixtureC383::class));
        });

        $container->factory(FixtureC385::class, static function (ContainerInterface $container) {
            return new FixtureC385($container->get(FixtureC384::class));
        });

        $container->factory(FixtureC386::class, static function (ContainerInterface $container) {
            return new FixtureC386($container->get(FixtureC385::class));
        });

        $container->factory(FixtureC387::class, static function (ContainerInterface $container) {
            return new FixtureC387($container->get(FixtureC386::class));
        });

        $container->factory(FixtureC388::class, static function (ContainerInterface $container) {
            return new FixtureC388($container->get(FixtureC387::class));
        });

        $container->factory(FixtureC389::class, static function (ContainerInterface $container) {
            return new FixtureC389($container->get(FixtureC388::class));
        });

        $container->factory(FixtureC390::class, static function (ContainerInterface $container) {
            return new FixtureC390($container->get(FixtureC389::class));
        });

        $container->factory(FixtureC391::class, static function (ContainerInterface $container) {
            return new FixtureC391($container->get(FixtureC390::class));
        });

        $container->factory(FixtureC392::class, static function (ContainerInterface $container) {
            return new FixtureC392($container->get(FixtureC391::class));
        });

        $container->factory(FixtureC393::class, static function (ContainerInterface $container) {
            return new FixtureC393($container->get(FixtureC392::class));
        });

        $container->factory(FixtureC394::class, static function (ContainerInterface $container) {
            return new FixtureC394($container->get(FixtureC393::class));
        });

        $container->factory(FixtureC395::class, static function (ContainerInterface $container) {
            return new FixtureC395($container->get(FixtureC394::class));
        });

        $container->factory(FixtureC396::class, static function (ContainerInterface $container) {
            return new FixtureC396($container->get(FixtureC395::class));
        });

        $container->factory(FixtureC397::class, static function (ContainerInterface $container) {
            return new FixtureC397($container->get(FixtureC396::class));
        });

        $container->factory(FixtureC398::class, static function (ContainerInterface $container) {
            return new FixtureC398($container->get(FixtureC397::class));
        });

        $container->factory(FixtureC399::class, static function (ContainerInterface $container) {
            return new FixtureC399($container->get(FixtureC398::class));
        });

        $container->factory(FixtureC400::class, static function (ContainerInterface $container) {
            return new FixtureC400($container->get(FixtureC399::class));
        });

        $container->factory(FixtureC401::class, static function (ContainerInterface $container) {
            return new FixtureC401($container->get(FixtureC400::class));
        });

        $container->factory(FixtureC402::class, static function (ContainerInterface $container) {
            return new FixtureC402($container->get(FixtureC401::class));
        });

        $container->factory(FixtureC403::class, static function (ContainerInterface $container) {
            return new FixtureC403($container->get(FixtureC402::class));
        });

        $container->factory(FixtureC404::class, static function (ContainerInterface $container) {
            return new FixtureC404($container->get(FixtureC403::class));
        });

        $container->factory(FixtureC405::class, static function (ContainerInterface $container) {
            return new FixtureC405($container->get(FixtureC404::class));
        });

        $container->factory(FixtureC406::class, static function (ContainerInterface $container) {
            return new FixtureC406($container->get(FixtureC405::class));
        });

        $container->factory(FixtureC407::class, static function (ContainerInterface $container) {
            return new FixtureC407($container->get(FixtureC406::class));
        });

        $container->factory(FixtureC408::class, static function (ContainerInterface $container) {
            return new FixtureC408($container->get(FixtureC407::class));
        });

        $container->factory(FixtureC409::class, static function (ContainerInterface $container) {
            return new FixtureC409($container->get(FixtureC408::class));
        });

        $container->factory(FixtureC410::class, static function (ContainerInterface $container) {
            return new FixtureC410($container->get(FixtureC409::class));
        });

        $container->factory(FixtureC411::class, static function (ContainerInterface $container) {
            return new FixtureC411($container->get(FixtureC410::class));
        });

        $container->factory(FixtureC412::class, static function (ContainerInterface $container) {
            return new FixtureC412($container->get(FixtureC411::class));
        });

        $container->factory(FixtureC413::class, static function (ContainerInterface $container) {
            return new FixtureC413($container->get(FixtureC412::class));
        });

        $container->factory(FixtureC414::class, static function (ContainerInterface $container) {
            return new FixtureC414($container->get(FixtureC413::class));
        });

        $container->factory(FixtureC415::class, static function (ContainerInterface $container) {
            return new FixtureC415($container->get(FixtureC414::class));
        });

        $container->factory(FixtureC416::class, static function (ContainerInterface $container) {
            return new FixtureC416($container->get(FixtureC415::class));
        });

        $container->factory(FixtureC417::class, static function (ContainerInterface $container) {
            return new FixtureC417($container->get(FixtureC416::class));
        });

        $container->factory(FixtureC418::class, static function (ContainerInterface $container) {
            return new FixtureC418($container->get(FixtureC417::class));
        });

        $container->factory(FixtureC419::class, static function (ContainerInterface $container) {
            return new FixtureC419($container->get(FixtureC418::class));
        });

        $container->factory(FixtureC420::class, static function (ContainerInterface $container) {
            return new FixtureC420($container->get(FixtureC419::class));
        });

        $container->factory(FixtureC421::class, static function (ContainerInterface $container) {
            return new FixtureC421($container->get(FixtureC420::class));
        });

        $container->factory(FixtureC422::class, static function (ContainerInterface $container) {
            return new FixtureC422($container->get(FixtureC421::class));
        });

        $container->factory(FixtureC423::class, static function (ContainerInterface $container) {
            return new FixtureC423($container->get(FixtureC422::class));
        });

        $container->factory(FixtureC424::class, static function (ContainerInterface $container) {
            return new FixtureC424($container->get(FixtureC423::class));
        });

        $container->factory(FixtureC425::class, static function (ContainerInterface $container) {
            return new FixtureC425($container->get(FixtureC424::class));
        });

        $container->factory(FixtureC426::class, static function (ContainerInterface $container) {
            return new FixtureC426($container->get(FixtureC425::class));
        });

        $container->factory(FixtureC427::class, static function (ContainerInterface $container) {
            return new FixtureC427($container->get(FixtureC426::class));
        });

        $container->factory(FixtureC428::class, static function (ContainerInterface $container) {
            return new FixtureC428($container->get(FixtureC427::class));
        });

        $container->factory(FixtureC429::class, static function (ContainerInterface $container) {
            return new FixtureC429($container->get(FixtureC428::class));
        });

        $container->factory(FixtureC430::class, static function (ContainerInterface $container) {
            return new FixtureC430($container->get(FixtureC429::class));
        });

        $container->factory(FixtureC431::class, static function (ContainerInterface $container) {
            return new FixtureC431($container->get(FixtureC430::class));
        });

        $container->factory(FixtureC432::class, static function (ContainerInterface $container) {
            return new FixtureC432($container->get(FixtureC431::class));
        });

        $container->factory(FixtureC433::class, static function (ContainerInterface $container) {
            return new FixtureC433($container->get(FixtureC432::class));
        });

        $container->factory(FixtureC434::class, static function (ContainerInterface $container) {
            return new FixtureC434($container->get(FixtureC433::class));
        });

        $container->factory(FixtureC435::class, static function (ContainerInterface $container) {
            return new FixtureC435($container->get(FixtureC434::class));
        });

        $container->factory(FixtureC436::class, static function (ContainerInterface $container) {
            return new FixtureC436($container->get(FixtureC435::class));
        });

        $container->factory(FixtureC437::class, static function (ContainerInterface $container) {
            return new FixtureC437($container->get(FixtureC436::class));
        });

        $container->factory(FixtureC438::class, static function (ContainerInterface $container) {
            return new FixtureC438($container->get(FixtureC437::class));
        });

        $container->factory(FixtureC439::class, static function (ContainerInterface $container) {
            return new FixtureC439($container->get(FixtureC438::class));
        });

        $container->factory(FixtureC440::class, static function (ContainerInterface $container) {
            return new FixtureC440($container->get(FixtureC439::class));
        });

        $container->factory(FixtureC441::class, static function (ContainerInterface $container) {
            return new FixtureC441($container->get(FixtureC440::class));
        });

        $container->factory(FixtureC442::class, static function (ContainerInterface $container) {
            return new FixtureC442($container->get(FixtureC441::class));
        });

        $container->factory(FixtureC443::class, static function (ContainerInterface $container) {
            return new FixtureC443($container->get(FixtureC442::class));
        });

        $container->factory(FixtureC444::class, static function (ContainerInterface $container) {
            return new FixtureC444($container->get(FixtureC443::class));
        });

        $container->factory(FixtureC445::class, static function (ContainerInterface $container) {
            return new FixtureC445($container->get(FixtureC444::class));
        });

        $container->factory(FixtureC446::class, static function (ContainerInterface $container) {
            return new FixtureC446($container->get(FixtureC445::class));
        });

        $container->factory(FixtureC447::class, static function (ContainerInterface $container) {
            return new FixtureC447($container->get(FixtureC446::class));
        });

        $container->factory(FixtureC448::class, static function (ContainerInterface $container) {
            return new FixtureC448($container->get(FixtureC447::class));
        });

        $container->factory(FixtureC449::class, static function (ContainerInterface $container) {
            return new FixtureC449($container->get(FixtureC448::class));
        });

        $container->factory(FixtureC450::class, static function (ContainerInterface $container) {
            return new FixtureC450($container->get(FixtureC449::class));
        });

        $container->factory(FixtureC451::class, static function (ContainerInterface $container) {
            return new FixtureC451($container->get(FixtureC450::class));
        });

        $container->factory(FixtureC452::class, static function (ContainerInterface $container) {
            return new FixtureC452($container->get(FixtureC451::class));
        });

        $container->factory(FixtureC453::class, static function (ContainerInterface $container) {
            return new FixtureC453($container->get(FixtureC452::class));
        });

        $container->factory(FixtureC454::class, static function (ContainerInterface $container) {
            return new FixtureC454($container->get(FixtureC453::class));
        });

        $container->factory(FixtureC455::class, static function (ContainerInterface $container) {
            return new FixtureC455($container->get(FixtureC454::class));
        });

        $container->factory(FixtureC456::class, static function (ContainerInterface $container) {
            return new FixtureC456($container->get(FixtureC455::class));
        });

        $container->factory(FixtureC457::class, static function (ContainerInterface $container) {
            return new FixtureC457($container->get(FixtureC456::class));
        });

        $container->factory(FixtureC458::class, static function (ContainerInterface $container) {
            return new FixtureC458($container->get(FixtureC457::class));
        });

        $container->factory(FixtureC459::class, static function (ContainerInterface $container) {
            return new FixtureC459($container->get(FixtureC458::class));
        });

        $container->factory(FixtureC460::class, static function (ContainerInterface $container) {
            return new FixtureC460($container->get(FixtureC459::class));
        });

        $container->factory(FixtureC461::class, static function (ContainerInterface $container) {
            return new FixtureC461($container->get(FixtureC460::class));
        });

        $container->factory(FixtureC462::class, static function (ContainerInterface $container) {
            return new FixtureC462($container->get(FixtureC461::class));
        });

        $container->factory(FixtureC463::class, static function (ContainerInterface $container) {
            return new FixtureC463($container->get(FixtureC462::class));
        });

        $container->factory(FixtureC464::class, static function (ContainerInterface $container) {
            return new FixtureC464($container->get(FixtureC463::class));
        });

        $container->factory(FixtureC465::class, static function (ContainerInterface $container) {
            return new FixtureC465($container->get(FixtureC464::class));
        });

        $container->factory(FixtureC466::class, static function (ContainerInterface $container) {
            return new FixtureC466($container->get(FixtureC465::class));
        });

        $container->factory(FixtureC467::class, static function (ContainerInterface $container) {
            return new FixtureC467($container->get(FixtureC466::class));
        });

        $container->factory(FixtureC468::class, static function (ContainerInterface $container) {
            return new FixtureC468($container->get(FixtureC467::class));
        });

        $container->factory(FixtureC469::class, static function (ContainerInterface $container) {
            return new FixtureC469($container->get(FixtureC468::class));
        });

        $container->factory(FixtureC470::class, static function (ContainerInterface $container) {
            return new FixtureC470($container->get(FixtureC469::class));
        });

        $container->factory(FixtureC471::class, static function (ContainerInterface $container) {
            return new FixtureC471($container->get(FixtureC470::class));
        });

        $container->factory(FixtureC472::class, static function (ContainerInterface $container) {
            return new FixtureC472($container->get(FixtureC471::class));
        });

        $container->factory(FixtureC473::class, static function (ContainerInterface $container) {
            return new FixtureC473($container->get(FixtureC472::class));
        });

        $container->factory(FixtureC474::class, static function (ContainerInterface $container) {
            return new FixtureC474($container->get(FixtureC473::class));
        });

        $container->factory(FixtureC475::class, static function (ContainerInterface $container) {
            return new FixtureC475($container->get(FixtureC474::class));
        });

        $container->factory(FixtureC476::class, static function (ContainerInterface $container) {
            return new FixtureC476($container->get(FixtureC475::class));
        });

        $container->factory(FixtureC477::class, static function (ContainerInterface $container) {
            return new FixtureC477($container->get(FixtureC476::class));
        });

        $container->factory(FixtureC478::class, static function (ContainerInterface $container) {
            return new FixtureC478($container->get(FixtureC477::class));
        });

        $container->factory(FixtureC479::class, static function (ContainerInterface $container) {
            return new FixtureC479($container->get(FixtureC478::class));
        });

        $container->factory(FixtureC480::class, static function (ContainerInterface $container) {
            return new FixtureC480($container->get(FixtureC479::class));
        });

        $container->factory(FixtureC481::class, static function (ContainerInterface $container) {
            return new FixtureC481($container->get(FixtureC480::class));
        });

        $container->factory(FixtureC482::class, static function (ContainerInterface $container) {
            return new FixtureC482($container->get(FixtureC481::class));
        });

        $container->factory(FixtureC483::class, static function (ContainerInterface $container) {
            return new FixtureC483($container->get(FixtureC482::class));
        });

        $container->factory(FixtureC484::class, static function (ContainerInterface $container) {
            return new FixtureC484($container->get(FixtureC483::class));
        });

        $container->factory(FixtureC485::class, static function (ContainerInterface $container) {
            return new FixtureC485($container->get(FixtureC484::class));
        });

        $container->factory(FixtureC486::class, static function (ContainerInterface $container) {
            return new FixtureC486($container->get(FixtureC485::class));
        });

        $container->factory(FixtureC487::class, static function (ContainerInterface $container) {
            return new FixtureC487($container->get(FixtureC486::class));
        });

        $container->factory(FixtureC488::class, static function (ContainerInterface $container) {
            return new FixtureC488($container->get(FixtureC487::class));
        });

        $container->factory(FixtureC489::class, static function (ContainerInterface $container) {
            return new FixtureC489($container->get(FixtureC488::class));
        });

        $container->factory(FixtureC490::class, static function (ContainerInterface $container) {
            return new FixtureC490($container->get(FixtureC489::class));
        });

        $container->factory(FixtureC491::class, static function (ContainerInterface $container) {
            return new FixtureC491($container->get(FixtureC490::class));
        });

        $container->factory(FixtureC492::class, static function (ContainerInterface $container) {
            return new FixtureC492($container->get(FixtureC491::class));
        });

        $container->factory(FixtureC493::class, static function (ContainerInterface $container) {
            return new FixtureC493($container->get(FixtureC492::class));
        });

        $container->factory(FixtureC494::class, static function (ContainerInterface $container) {
            return new FixtureC494($container->get(FixtureC493::class));
        });

        $container->factory(FixtureC495::class, static function (ContainerInterface $container) {
            return new FixtureC495($container->get(FixtureC494::class));
        });

        $container->factory(FixtureC496::class, static function (ContainerInterface $container) {
            return new FixtureC496($container->get(FixtureC495::class));
        });

        $container->factory(FixtureC497::class, static function (ContainerInterface $container) {
            return new FixtureC497($container->get(FixtureC496::class));
        });

        $container->factory(FixtureC498::class, static function (ContainerInterface $container) {
            return new FixtureC498($container->get(FixtureC497::class));
        });

        $container->factory(FixtureC499::class, static function (ContainerInterface $container) {
            return new FixtureC499($container->get(FixtureC498::class));
        });

        $container->factory(FixtureC500::class, static function (ContainerInterface $container) {
            return new FixtureC500($container->get(FixtureC499::class));
        });

        $container->factory(FixtureC501::class, static function (ContainerInterface $container) {
            return new FixtureC501($container->get(FixtureC500::class));
        });

        $container->factory(FixtureC502::class, static function (ContainerInterface $container) {
            return new FixtureC502($container->get(FixtureC501::class));
        });

        $container->factory(FixtureC503::class, static function (ContainerInterface $container) {
            return new FixtureC503($container->get(FixtureC502::class));
        });

        $container->factory(FixtureC504::class, static function (ContainerInterface $container) {
            return new FixtureC504($container->get(FixtureC503::class));
        });

        $container->factory(FixtureC505::class, static function (ContainerInterface $container) {
            return new FixtureC505($container->get(FixtureC504::class));
        });

        $container->factory(FixtureC506::class, static function (ContainerInterface $container) {
            return new FixtureC506($container->get(FixtureC505::class));
        });

        $container->factory(FixtureC507::class, static function (ContainerInterface $container) {
            return new FixtureC507($container->get(FixtureC506::class));
        });

        $container->factory(FixtureC508::class, static function (ContainerInterface $container) {
            return new FixtureC508($container->get(FixtureC507::class));
        });

        $container->factory(FixtureC509::class, static function (ContainerInterface $container) {
            return new FixtureC509($container->get(FixtureC508::class));
        });

        $container->factory(FixtureC510::class, static function (ContainerInterface $container) {
            return new FixtureC510($container->get(FixtureC509::class));
        });

        $container->factory(FixtureC511::class, static function (ContainerInterface $container) {
            return new FixtureC511($container->get(FixtureC510::class));
        });

        $container->factory(FixtureC512::class, static function (ContainerInterface $container) {
            return new FixtureC512($container->get(FixtureC511::class));
        });

        $container->factory(FixtureC513::class, static function (ContainerInterface $container) {
            return new FixtureC513($container->get(FixtureC512::class));
        });

        $container->factory(FixtureC514::class, static function (ContainerInterface $container) {
            return new FixtureC514($container->get(FixtureC513::class));
        });

        $container->factory(FixtureC515::class, static function (ContainerInterface $container) {
            return new FixtureC515($container->get(FixtureC514::class));
        });

        $container->factory(FixtureC516::class, static function (ContainerInterface $container) {
            return new FixtureC516($container->get(FixtureC515::class));
        });

        $container->factory(FixtureC517::class, static function (ContainerInterface $container) {
            return new FixtureC517($container->get(FixtureC516::class));
        });

        $container->factory(FixtureC518::class, static function (ContainerInterface $container) {
            return new FixtureC518($container->get(FixtureC517::class));
        });

        $container->factory(FixtureC519::class, static function (ContainerInterface $container) {
            return new FixtureC519($container->get(FixtureC518::class));
        });

        $container->factory(FixtureC520::class, static function (ContainerInterface $container) {
            return new FixtureC520($container->get(FixtureC519::class));
        });

        $container->factory(FixtureC521::class, static function (ContainerInterface $container) {
            return new FixtureC521($container->get(FixtureC520::class));
        });

        $container->factory(FixtureC522::class, static function (ContainerInterface $container) {
            return new FixtureC522($container->get(FixtureC521::class));
        });

        $container->factory(FixtureC523::class, static function (ContainerInterface $container) {
            return new FixtureC523($container->get(FixtureC522::class));
        });

        $container->factory(FixtureC524::class, static function (ContainerInterface $container) {
            return new FixtureC524($container->get(FixtureC523::class));
        });

        $container->factory(FixtureC525::class, static function (ContainerInterface $container) {
            return new FixtureC525($container->get(FixtureC524::class));
        });

        $container->factory(FixtureC526::class, static function (ContainerInterface $container) {
            return new FixtureC526($container->get(FixtureC525::class));
        });

        $container->factory(FixtureC527::class, static function (ContainerInterface $container) {
            return new FixtureC527($container->get(FixtureC526::class));
        });

        $container->factory(FixtureC528::class, static function (ContainerInterface $container) {
            return new FixtureC528($container->get(FixtureC527::class));
        });

        $container->factory(FixtureC529::class, static function (ContainerInterface $container) {
            return new FixtureC529($container->get(FixtureC528::class));
        });

        $container->factory(FixtureC530::class, static function (ContainerInterface $container) {
            return new FixtureC530($container->get(FixtureC529::class));
        });

        $container->factory(FixtureC531::class, static function (ContainerInterface $container) {
            return new FixtureC531($container->get(FixtureC530::class));
        });

        $container->factory(FixtureC532::class, static function (ContainerInterface $container) {
            return new FixtureC532($container->get(FixtureC531::class));
        });

        $container->factory(FixtureC533::class, static function (ContainerInterface $container) {
            return new FixtureC533($container->get(FixtureC532::class));
        });

        $container->factory(FixtureC534::class, static function (ContainerInterface $container) {
            return new FixtureC534($container->get(FixtureC533::class));
        });

        $container->factory(FixtureC535::class, static function (ContainerInterface $container) {
            return new FixtureC535($container->get(FixtureC534::class));
        });

        $container->factory(FixtureC536::class, static function (ContainerInterface $container) {
            return new FixtureC536($container->get(FixtureC535::class));
        });

        $container->factory(FixtureC537::class, static function (ContainerInterface $container) {
            return new FixtureC537($container->get(FixtureC536::class));
        });

        $container->factory(FixtureC538::class, static function (ContainerInterface $container) {
            return new FixtureC538($container->get(FixtureC537::class));
        });

        $container->factory(FixtureC539::class, static function (ContainerInterface $container) {
            return new FixtureC539($container->get(FixtureC538::class));
        });

        $container->factory(FixtureC540::class, static function (ContainerInterface $container) {
            return new FixtureC540($container->get(FixtureC539::class));
        });

        $container->factory(FixtureC541::class, static function (ContainerInterface $container) {
            return new FixtureC541($container->get(FixtureC540::class));
        });

        $container->factory(FixtureC542::class, static function (ContainerInterface $container) {
            return new FixtureC542($container->get(FixtureC541::class));
        });

        $container->factory(FixtureC543::class, static function (ContainerInterface $container) {
            return new FixtureC543($container->get(FixtureC542::class));
        });

        $container->factory(FixtureC544::class, static function (ContainerInterface $container) {
            return new FixtureC544($container->get(FixtureC543::class));
        });

        $container->factory(FixtureC545::class, static function (ContainerInterface $container) {
            return new FixtureC545($container->get(FixtureC544::class));
        });

        $container->factory(FixtureC546::class, static function (ContainerInterface $container) {
            return new FixtureC546($container->get(FixtureC545::class));
        });

        $container->factory(FixtureC547::class, static function (ContainerInterface $container) {
            return new FixtureC547($container->get(FixtureC546::class));
        });

        $container->factory(FixtureC548::class, static function (ContainerInterface $container) {
            return new FixtureC548($container->get(FixtureC547::class));
        });

        $container->factory(FixtureC549::class, static function (ContainerInterface $container) {
            return new FixtureC549($container->get(FixtureC548::class));
        });

        $container->factory(FixtureC550::class, static function (ContainerInterface $container) {
            return new FixtureC550($container->get(FixtureC549::class));
        });

        $container->factory(FixtureC551::class, static function (ContainerInterface $container) {
            return new FixtureC551($container->get(FixtureC550::class));
        });

        $container->factory(FixtureC552::class, static function (ContainerInterface $container) {
            return new FixtureC552($container->get(FixtureC551::class));
        });

        $container->factory(FixtureC553::class, static function (ContainerInterface $container) {
            return new FixtureC553($container->get(FixtureC552::class));
        });

        $container->factory(FixtureC554::class, static function (ContainerInterface $container) {
            return new FixtureC554($container->get(FixtureC553::class));
        });

        $container->factory(FixtureC555::class, static function (ContainerInterface $container) {
            return new FixtureC555($container->get(FixtureC554::class));
        });

        $container->factory(FixtureC556::class, static function (ContainerInterface $container) {
            return new FixtureC556($container->get(FixtureC555::class));
        });

        $container->factory(FixtureC557::class, static function (ContainerInterface $container) {
            return new FixtureC557($container->get(FixtureC556::class));
        });

        $container->factory(FixtureC558::class, static function (ContainerInterface $container) {
            return new FixtureC558($container->get(FixtureC557::class));
        });

        $container->factory(FixtureC559::class, static function (ContainerInterface $container) {
            return new FixtureC559($container->get(FixtureC558::class));
        });

        $container->factory(FixtureC560::class, static function (ContainerInterface $container) {
            return new FixtureC560($container->get(FixtureC559::class));
        });

        $container->factory(FixtureC561::class, static function (ContainerInterface $container) {
            return new FixtureC561($container->get(FixtureC560::class));
        });

        $container->factory(FixtureC562::class, static function (ContainerInterface $container) {
            return new FixtureC562($container->get(FixtureC561::class));
        });

        $container->factory(FixtureC563::class, static function (ContainerInterface $container) {
            return new FixtureC563($container->get(FixtureC562::class));
        });

        $container->factory(FixtureC564::class, static function (ContainerInterface $container) {
            return new FixtureC564($container->get(FixtureC563::class));
        });

        $container->factory(FixtureC565::class, static function (ContainerInterface $container) {
            return new FixtureC565($container->get(FixtureC564::class));
        });

        $container->factory(FixtureC566::class, static function (ContainerInterface $container) {
            return new FixtureC566($container->get(FixtureC565::class));
        });

        $container->factory(FixtureC567::class, static function (ContainerInterface $container) {
            return new FixtureC567($container->get(FixtureC566::class));
        });

        $container->factory(FixtureC568::class, static function (ContainerInterface $container) {
            return new FixtureC568($container->get(FixtureC567::class));
        });

        $container->factory(FixtureC569::class, static function (ContainerInterface $container) {
            return new FixtureC569($container->get(FixtureC568::class));
        });

        $container->factory(FixtureC570::class, static function (ContainerInterface $container) {
            return new FixtureC570($container->get(FixtureC569::class));
        });

        $container->factory(FixtureC571::class, static function (ContainerInterface $container) {
            return new FixtureC571($container->get(FixtureC570::class));
        });

        $container->factory(FixtureC572::class, static function (ContainerInterface $container) {
            return new FixtureC572($container->get(FixtureC571::class));
        });

        $container->factory(FixtureC573::class, static function (ContainerInterface $container) {
            return new FixtureC573($container->get(FixtureC572::class));
        });

        $container->factory(FixtureC574::class, static function (ContainerInterface $container) {
            return new FixtureC574($container->get(FixtureC573::class));
        });

        $container->factory(FixtureC575::class, static function (ContainerInterface $container) {
            return new FixtureC575($container->get(FixtureC574::class));
        });

        $container->factory(FixtureC576::class, static function (ContainerInterface $container) {
            return new FixtureC576($container->get(FixtureC575::class));
        });

        $container->factory(FixtureC577::class, static function (ContainerInterface $container) {
            return new FixtureC577($container->get(FixtureC576::class));
        });

        $container->factory(FixtureC578::class, static function (ContainerInterface $container) {
            return new FixtureC578($container->get(FixtureC577::class));
        });

        $container->factory(FixtureC579::class, static function (ContainerInterface $container) {
            return new FixtureC579($container->get(FixtureC578::class));
        });

        $container->factory(FixtureC580::class, static function (ContainerInterface $container) {
            return new FixtureC580($container->get(FixtureC579::class));
        });

        $container->factory(FixtureC581::class, static function (ContainerInterface $container) {
            return new FixtureC581($container->get(FixtureC580::class));
        });

        $container->factory(FixtureC582::class, static function (ContainerInterface $container) {
            return new FixtureC582($container->get(FixtureC581::class));
        });

        $container->factory(FixtureC583::class, static function (ContainerInterface $container) {
            return new FixtureC583($container->get(FixtureC582::class));
        });

        $container->factory(FixtureC584::class, static function (ContainerInterface $container) {
            return new FixtureC584($container->get(FixtureC583::class));
        });

        $container->factory(FixtureC585::class, static function (ContainerInterface $container) {
            return new FixtureC585($container->get(FixtureC584::class));
        });

        $container->factory(FixtureC586::class, static function (ContainerInterface $container) {
            return new FixtureC586($container->get(FixtureC585::class));
        });

        $container->factory(FixtureC587::class, static function (ContainerInterface $container) {
            return new FixtureC587($container->get(FixtureC586::class));
        });

        $container->factory(FixtureC588::class, static function (ContainerInterface $container) {
            return new FixtureC588($container->get(FixtureC587::class));
        });

        $container->factory(FixtureC589::class, static function (ContainerInterface $container) {
            return new FixtureC589($container->get(FixtureC588::class));
        });

        $container->factory(FixtureC590::class, static function (ContainerInterface $container) {
            return new FixtureC590($container->get(FixtureC589::class));
        });

        $container->factory(FixtureC591::class, static function (ContainerInterface $container) {
            return new FixtureC591($container->get(FixtureC590::class));
        });

        $container->factory(FixtureC592::class, static function (ContainerInterface $container) {
            return new FixtureC592($container->get(FixtureC591::class));
        });

        $container->factory(FixtureC593::class, static function (ContainerInterface $container) {
            return new FixtureC593($container->get(FixtureC592::class));
        });

        $container->factory(FixtureC594::class, static function (ContainerInterface $container) {
            return new FixtureC594($container->get(FixtureC593::class));
        });

        $container->factory(FixtureC595::class, static function (ContainerInterface $container) {
            return new FixtureC595($container->get(FixtureC594::class));
        });

        $container->factory(FixtureC596::class, static function (ContainerInterface $container) {
            return new FixtureC596($container->get(FixtureC595::class));
        });

        $container->factory(FixtureC597::class, static function (ContainerInterface $container) {
            return new FixtureC597($container->get(FixtureC596::class));
        });

        $container->factory(FixtureC598::class, static function (ContainerInterface $container) {
            return new FixtureC598($container->get(FixtureC597::class));
        });

        $container->factory(FixtureC599::class, static function (ContainerInterface $container) {
            return new FixtureC599($container->get(FixtureC598::class));
        });

        $container->factory(FixtureC600::class, static function (ContainerInterface $container) {
            return new FixtureC600($container->get(FixtureC599::class));
        });

        $container->factory(FixtureC601::class, static function (ContainerInterface $container) {
            return new FixtureC601($container->get(FixtureC600::class));
        });

        $container->factory(FixtureC602::class, static function (ContainerInterface $container) {
            return new FixtureC602($container->get(FixtureC601::class));
        });

        $container->factory(FixtureC603::class, static function (ContainerInterface $container) {
            return new FixtureC603($container->get(FixtureC602::class));
        });

        $container->factory(FixtureC604::class, static function (ContainerInterface $container) {
            return new FixtureC604($container->get(FixtureC603::class));
        });

        $container->factory(FixtureC605::class, static function (ContainerInterface $container) {
            return new FixtureC605($container->get(FixtureC604::class));
        });

        $container->factory(FixtureC606::class, static function (ContainerInterface $container) {
            return new FixtureC606($container->get(FixtureC605::class));
        });

        $container->factory(FixtureC607::class, static function (ContainerInterface $container) {
            return new FixtureC607($container->get(FixtureC606::class));
        });

        $container->factory(FixtureC608::class, static function (ContainerInterface $container) {
            return new FixtureC608($container->get(FixtureC607::class));
        });

        $container->factory(FixtureC609::class, static function (ContainerInterface $container) {
            return new FixtureC609($container->get(FixtureC608::class));
        });

        $container->factory(FixtureC610::class, static function (ContainerInterface $container) {
            return new FixtureC610($container->get(FixtureC609::class));
        });

        $container->factory(FixtureC611::class, static function (ContainerInterface $container) {
            return new FixtureC611($container->get(FixtureC610::class));
        });

        $container->factory(FixtureC612::class, static function (ContainerInterface $container) {
            return new FixtureC612($container->get(FixtureC611::class));
        });

        $container->factory(FixtureC613::class, static function (ContainerInterface $container) {
            return new FixtureC613($container->get(FixtureC612::class));
        });

        $container->factory(FixtureC614::class, static function (ContainerInterface $container) {
            return new FixtureC614($container->get(FixtureC613::class));
        });

        $container->factory(FixtureC615::class, static function (ContainerInterface $container) {
            return new FixtureC615($container->get(FixtureC614::class));
        });

        $container->factory(FixtureC616::class, static function (ContainerInterface $container) {
            return new FixtureC616($container->get(FixtureC615::class));
        });

        $container->factory(FixtureC617::class, static function (ContainerInterface $container) {
            return new FixtureC617($container->get(FixtureC616::class));
        });

        $container->factory(FixtureC618::class, static function (ContainerInterface $container) {
            return new FixtureC618($container->get(FixtureC617::class));
        });

        $container->factory(FixtureC619::class, static function (ContainerInterface $container) {
            return new FixtureC619($container->get(FixtureC618::class));
        });

        $container->factory(FixtureC620::class, static function (ContainerInterface $container) {
            return new FixtureC620($container->get(FixtureC619::class));
        });

        $container->factory(FixtureC621::class, static function (ContainerInterface $container) {
            return new FixtureC621($container->get(FixtureC620::class));
        });

        $container->factory(FixtureC622::class, static function (ContainerInterface $container) {
            return new FixtureC622($container->get(FixtureC621::class));
        });

        $container->factory(FixtureC623::class, static function (ContainerInterface $container) {
            return new FixtureC623($container->get(FixtureC622::class));
        });

        $container->factory(FixtureC624::class, static function (ContainerInterface $container) {
            return new FixtureC624($container->get(FixtureC623::class));
        });

        $container->factory(FixtureC625::class, static function (ContainerInterface $container) {
            return new FixtureC625($container->get(FixtureC624::class));
        });

        $container->factory(FixtureC626::class, static function (ContainerInterface $container) {
            return new FixtureC626($container->get(FixtureC625::class));
        });

        $container->factory(FixtureC627::class, static function (ContainerInterface $container) {
            return new FixtureC627($container->get(FixtureC626::class));
        });

        $container->factory(FixtureC628::class, static function (ContainerInterface $container) {
            return new FixtureC628($container->get(FixtureC627::class));
        });

        $container->factory(FixtureC629::class, static function (ContainerInterface $container) {
            return new FixtureC629($container->get(FixtureC628::class));
        });

        $container->factory(FixtureC630::class, static function (ContainerInterface $container) {
            return new FixtureC630($container->get(FixtureC629::class));
        });

        $container->factory(FixtureC631::class, static function (ContainerInterface $container) {
            return new FixtureC631($container->get(FixtureC630::class));
        });

        $container->factory(FixtureC632::class, static function (ContainerInterface $container) {
            return new FixtureC632($container->get(FixtureC631::class));
        });

        $container->factory(FixtureC633::class, static function (ContainerInterface $container) {
            return new FixtureC633($container->get(FixtureC632::class));
        });

        $container->factory(FixtureC634::class, static function (ContainerInterface $container) {
            return new FixtureC634($container->get(FixtureC633::class));
        });

        $container->factory(FixtureC635::class, static function (ContainerInterface $container) {
            return new FixtureC635($container->get(FixtureC634::class));
        });

        $container->factory(FixtureC636::class, static function (ContainerInterface $container) {
            return new FixtureC636($container->get(FixtureC635::class));
        });

        $container->factory(FixtureC637::class, static function (ContainerInterface $container) {
            return new FixtureC637($container->get(FixtureC636::class));
        });

        $container->factory(FixtureC638::class, static function (ContainerInterface $container) {
            return new FixtureC638($container->get(FixtureC637::class));
        });

        $container->factory(FixtureC639::class, static function (ContainerInterface $container) {
            return new FixtureC639($container->get(FixtureC638::class));
        });

        $container->factory(FixtureC640::class, static function (ContainerInterface $container) {
            return new FixtureC640($container->get(FixtureC639::class));
        });

        $container->factory(FixtureC641::class, static function (ContainerInterface $container) {
            return new FixtureC641($container->get(FixtureC640::class));
        });

        $container->factory(FixtureC642::class, static function (ContainerInterface $container) {
            return new FixtureC642($container->get(FixtureC641::class));
        });

        $container->factory(FixtureC643::class, static function (ContainerInterface $container) {
            return new FixtureC643($container->get(FixtureC642::class));
        });

        $container->factory(FixtureC644::class, static function (ContainerInterface $container) {
            return new FixtureC644($container->get(FixtureC643::class));
        });

        $container->factory(FixtureC645::class, static function (ContainerInterface $container) {
            return new FixtureC645($container->get(FixtureC644::class));
        });

        $container->factory(FixtureC646::class, static function (ContainerInterface $container) {
            return new FixtureC646($container->get(FixtureC645::class));
        });

        $container->factory(FixtureC647::class, static function (ContainerInterface $container) {
            return new FixtureC647($container->get(FixtureC646::class));
        });

        $container->factory(FixtureC648::class, static function (ContainerInterface $container) {
            return new FixtureC648($container->get(FixtureC647::class));
        });

        $container->factory(FixtureC649::class, static function (ContainerInterface $container) {
            return new FixtureC649($container->get(FixtureC648::class));
        });

        $container->factory(FixtureC650::class, static function (ContainerInterface $container) {
            return new FixtureC650($container->get(FixtureC649::class));
        });

        $container->factory(FixtureC651::class, static function (ContainerInterface $container) {
            return new FixtureC651($container->get(FixtureC650::class));
        });

        $container->factory(FixtureC652::class, static function (ContainerInterface $container) {
            return new FixtureC652($container->get(FixtureC651::class));
        });

        $container->factory(FixtureC653::class, static function (ContainerInterface $container) {
            return new FixtureC653($container->get(FixtureC652::class));
        });

        $container->factory(FixtureC654::class, static function (ContainerInterface $container) {
            return new FixtureC654($container->get(FixtureC653::class));
        });

        $container->factory(FixtureC655::class, static function (ContainerInterface $container) {
            return new FixtureC655($container->get(FixtureC654::class));
        });

        $container->factory(FixtureC656::class, static function (ContainerInterface $container) {
            return new FixtureC656($container->get(FixtureC655::class));
        });

        $container->factory(FixtureC657::class, static function (ContainerInterface $container) {
            return new FixtureC657($container->get(FixtureC656::class));
        });

        $container->factory(FixtureC658::class, static function (ContainerInterface $container) {
            return new FixtureC658($container->get(FixtureC657::class));
        });

        $container->factory(FixtureC659::class, static function (ContainerInterface $container) {
            return new FixtureC659($container->get(FixtureC658::class));
        });

        $container->factory(FixtureC660::class, static function (ContainerInterface $container) {
            return new FixtureC660($container->get(FixtureC659::class));
        });

        $container->factory(FixtureC661::class, static function (ContainerInterface $container) {
            return new FixtureC661($container->get(FixtureC660::class));
        });

        $container->factory(FixtureC662::class, static function (ContainerInterface $container) {
            return new FixtureC662($container->get(FixtureC661::class));
        });

        $container->factory(FixtureC663::class, static function (ContainerInterface $container) {
            return new FixtureC663($container->get(FixtureC662::class));
        });

        $container->factory(FixtureC664::class, static function (ContainerInterface $container) {
            return new FixtureC664($container->get(FixtureC663::class));
        });

        $container->factory(FixtureC665::class, static function (ContainerInterface $container) {
            return new FixtureC665($container->get(FixtureC664::class));
        });

        $container->factory(FixtureC666::class, static function (ContainerInterface $container) {
            return new FixtureC666($container->get(FixtureC665::class));
        });

        $container->factory(FixtureC667::class, static function (ContainerInterface $container) {
            return new FixtureC667($container->get(FixtureC666::class));
        });

        $container->factory(FixtureC668::class, static function (ContainerInterface $container) {
            return new FixtureC668($container->get(FixtureC667::class));
        });

        $container->factory(FixtureC669::class, static function (ContainerInterface $container) {
            return new FixtureC669($container->get(FixtureC668::class));
        });

        $container->factory(FixtureC670::class, static function (ContainerInterface $container) {
            return new FixtureC670($container->get(FixtureC669::class));
        });

        $container->factory(FixtureC671::class, static function (ContainerInterface $container) {
            return new FixtureC671($container->get(FixtureC670::class));
        });

        $container->factory(FixtureC672::class, static function (ContainerInterface $container) {
            return new FixtureC672($container->get(FixtureC671::class));
        });

        $container->factory(FixtureC673::class, static function (ContainerInterface $container) {
            return new FixtureC673($container->get(FixtureC672::class));
        });

        $container->factory(FixtureC674::class, static function (ContainerInterface $container) {
            return new FixtureC674($container->get(FixtureC673::class));
        });

        $container->factory(FixtureC675::class, static function (ContainerInterface $container) {
            return new FixtureC675($container->get(FixtureC674::class));
        });

        $container->factory(FixtureC676::class, static function (ContainerInterface $container) {
            return new FixtureC676($container->get(FixtureC675::class));
        });

        $container->factory(FixtureC677::class, static function (ContainerInterface $container) {
            return new FixtureC677($container->get(FixtureC676::class));
        });

        $container->factory(FixtureC678::class, static function (ContainerInterface $container) {
            return new FixtureC678($container->get(FixtureC677::class));
        });

        $container->factory(FixtureC679::class, static function (ContainerInterface $container) {
            return new FixtureC679($container->get(FixtureC678::class));
        });

        $container->factory(FixtureC680::class, static function (ContainerInterface $container) {
            return new FixtureC680($container->get(FixtureC679::class));
        });

        $container->factory(FixtureC681::class, static function (ContainerInterface $container) {
            return new FixtureC681($container->get(FixtureC680::class));
        });

        $container->factory(FixtureC682::class, static function (ContainerInterface $container) {
            return new FixtureC682($container->get(FixtureC681::class));
        });

        $container->factory(FixtureC683::class, static function (ContainerInterface $container) {
            return new FixtureC683($container->get(FixtureC682::class));
        });

        $container->factory(FixtureC684::class, static function (ContainerInterface $container) {
            return new FixtureC684($container->get(FixtureC683::class));
        });

        $container->factory(FixtureC685::class, static function (ContainerInterface $container) {
            return new FixtureC685($container->get(FixtureC684::class));
        });

        $container->factory(FixtureC686::class, static function (ContainerInterface $container) {
            return new FixtureC686($container->get(FixtureC685::class));
        });

        $container->factory(FixtureC687::class, static function (ContainerInterface $container) {
            return new FixtureC687($container->get(FixtureC686::class));
        });

        $container->factory(FixtureC688::class, static function (ContainerInterface $container) {
            return new FixtureC688($container->get(FixtureC687::class));
        });

        $container->factory(FixtureC689::class, static function (ContainerInterface $container) {
            return new FixtureC689($container->get(FixtureC688::class));
        });

        $container->factory(FixtureC690::class, static function (ContainerInterface $container) {
            return new FixtureC690($container->get(FixtureC689::class));
        });

        $container->factory(FixtureC691::class, static function (ContainerInterface $container) {
            return new FixtureC691($container->get(FixtureC690::class));
        });

        $container->factory(FixtureC692::class, static function (ContainerInterface $container) {
            return new FixtureC692($container->get(FixtureC691::class));
        });

        $container->factory(FixtureC693::class, static function (ContainerInterface $container) {
            return new FixtureC693($container->get(FixtureC692::class));
        });

        $container->factory(FixtureC694::class, static function (ContainerInterface $container) {
            return new FixtureC694($container->get(FixtureC693::class));
        });

        $container->factory(FixtureC695::class, static function (ContainerInterface $container) {
            return new FixtureC695($container->get(FixtureC694::class));
        });

        $container->factory(FixtureC696::class, static function (ContainerInterface $container) {
            return new FixtureC696($container->get(FixtureC695::class));
        });

        $container->factory(FixtureC697::class, static function (ContainerInterface $container) {
            return new FixtureC697($container->get(FixtureC696::class));
        });

        $container->factory(FixtureC698::class, static function (ContainerInterface $container) {
            return new FixtureC698($container->get(FixtureC697::class));
        });

        $container->factory(FixtureC699::class, static function (ContainerInterface $container) {
            return new FixtureC699($container->get(FixtureC698::class));
        });

        $container->factory(FixtureC700::class, static function (ContainerInterface $container) {
            return new FixtureC700($container->get(FixtureC699::class));
        });

        $container->factory(FixtureC701::class, static function (ContainerInterface $container) {
            return new FixtureC701($container->get(FixtureC700::class));
        });

        $container->factory(FixtureC702::class, static function (ContainerInterface $container) {
            return new FixtureC702($container->get(FixtureC701::class));
        });

        $container->factory(FixtureC703::class, static function (ContainerInterface $container) {
            return new FixtureC703($container->get(FixtureC702::class));
        });

        $container->factory(FixtureC704::class, static function (ContainerInterface $container) {
            return new FixtureC704($container->get(FixtureC703::class));
        });

        $container->factory(FixtureC705::class, static function (ContainerInterface $container) {
            return new FixtureC705($container->get(FixtureC704::class));
        });

        $container->factory(FixtureC706::class, static function (ContainerInterface $container) {
            return new FixtureC706($container->get(FixtureC705::class));
        });

        $container->factory(FixtureC707::class, static function (ContainerInterface $container) {
            return new FixtureC707($container->get(FixtureC706::class));
        });

        $container->factory(FixtureC708::class, static function (ContainerInterface $container) {
            return new FixtureC708($container->get(FixtureC707::class));
        });

        $container->factory(FixtureC709::class, static function (ContainerInterface $container) {
            return new FixtureC709($container->get(FixtureC708::class));
        });

        $container->factory(FixtureC710::class, static function (ContainerInterface $container) {
            return new FixtureC710($container->get(FixtureC709::class));
        });

        $container->factory(FixtureC711::class, static function (ContainerInterface $container) {
            return new FixtureC711($container->get(FixtureC710::class));
        });

        $container->factory(FixtureC712::class, static function (ContainerInterface $container) {
            return new FixtureC712($container->get(FixtureC711::class));
        });

        $container->factory(FixtureC713::class, static function (ContainerInterface $container) {
            return new FixtureC713($container->get(FixtureC712::class));
        });

        $container->factory(FixtureC714::class, static function (ContainerInterface $container) {
            return new FixtureC714($container->get(FixtureC713::class));
        });

        $container->factory(FixtureC715::class, static function (ContainerInterface $container) {
            return new FixtureC715($container->get(FixtureC714::class));
        });

        $container->factory(FixtureC716::class, static function (ContainerInterface $container) {
            return new FixtureC716($container->get(FixtureC715::class));
        });

        $container->factory(FixtureC717::class, static function (ContainerInterface $container) {
            return new FixtureC717($container->get(FixtureC716::class));
        });

        $container->factory(FixtureC718::class, static function (ContainerInterface $container) {
            return new FixtureC718($container->get(FixtureC717::class));
        });

        $container->factory(FixtureC719::class, static function (ContainerInterface $container) {
            return new FixtureC719($container->get(FixtureC718::class));
        });

        $container->factory(FixtureC720::class, static function (ContainerInterface $container) {
            return new FixtureC720($container->get(FixtureC719::class));
        });

        $container->factory(FixtureC721::class, static function (ContainerInterface $container) {
            return new FixtureC721($container->get(FixtureC720::class));
        });

        $container->factory(FixtureC722::class, static function (ContainerInterface $container) {
            return new FixtureC722($container->get(FixtureC721::class));
        });

        $container->factory(FixtureC723::class, static function (ContainerInterface $container) {
            return new FixtureC723($container->get(FixtureC722::class));
        });

        $container->factory(FixtureC724::class, static function (ContainerInterface $container) {
            return new FixtureC724($container->get(FixtureC723::class));
        });

        $container->factory(FixtureC725::class, static function (ContainerInterface $container) {
            return new FixtureC725($container->get(FixtureC724::class));
        });

        $container->factory(FixtureC726::class, static function (ContainerInterface $container) {
            return new FixtureC726($container->get(FixtureC725::class));
        });

        $container->factory(FixtureC727::class, static function (ContainerInterface $container) {
            return new FixtureC727($container->get(FixtureC726::class));
        });

        $container->factory(FixtureC728::class, static function (ContainerInterface $container) {
            return new FixtureC728($container->get(FixtureC727::class));
        });

        $container->factory(FixtureC729::class, static function (ContainerInterface $container) {
            return new FixtureC729($container->get(FixtureC728::class));
        });

        $container->factory(FixtureC730::class, static function (ContainerInterface $container) {
            return new FixtureC730($container->get(FixtureC729::class));
        });

        $container->factory(FixtureC731::class, static function (ContainerInterface $container) {
            return new FixtureC731($container->get(FixtureC730::class));
        });

        $container->factory(FixtureC732::class, static function (ContainerInterface $container) {
            return new FixtureC732($container->get(FixtureC731::class));
        });

        $container->factory(FixtureC733::class, static function (ContainerInterface $container) {
            return new FixtureC733($container->get(FixtureC732::class));
        });

        $container->factory(FixtureC734::class, static function (ContainerInterface $container) {
            return new FixtureC734($container->get(FixtureC733::class));
        });

        $container->factory(FixtureC735::class, static function (ContainerInterface $container) {
            return new FixtureC735($container->get(FixtureC734::class));
        });

        $container->factory(FixtureC736::class, static function (ContainerInterface $container) {
            return new FixtureC736($container->get(FixtureC735::class));
        });

        $container->factory(FixtureC737::class, static function (ContainerInterface $container) {
            return new FixtureC737($container->get(FixtureC736::class));
        });

        $container->factory(FixtureC738::class, static function (ContainerInterface $container) {
            return new FixtureC738($container->get(FixtureC737::class));
        });

        $container->factory(FixtureC739::class, static function (ContainerInterface $container) {
            return new FixtureC739($container->get(FixtureC738::class));
        });

        $container->factory(FixtureC740::class, static function (ContainerInterface $container) {
            return new FixtureC740($container->get(FixtureC739::class));
        });

        $container->factory(FixtureC741::class, static function (ContainerInterface $container) {
            return new FixtureC741($container->get(FixtureC740::class));
        });

        $container->factory(FixtureC742::class, static function (ContainerInterface $container) {
            return new FixtureC742($container->get(FixtureC741::class));
        });

        $container->factory(FixtureC743::class, static function (ContainerInterface $container) {
            return new FixtureC743($container->get(FixtureC742::class));
        });

        $container->factory(FixtureC744::class, static function (ContainerInterface $container) {
            return new FixtureC744($container->get(FixtureC743::class));
        });

        $container->factory(FixtureC745::class, static function (ContainerInterface $container) {
            return new FixtureC745($container->get(FixtureC744::class));
        });

        $container->factory(FixtureC746::class, static function (ContainerInterface $container) {
            return new FixtureC746($container->get(FixtureC745::class));
        });

        $container->factory(FixtureC747::class, static function (ContainerInterface $container) {
            return new FixtureC747($container->get(FixtureC746::class));
        });

        $container->factory(FixtureC748::class, static function (ContainerInterface $container) {
            return new FixtureC748($container->get(FixtureC747::class));
        });

        $container->factory(FixtureC749::class, static function (ContainerInterface $container) {
            return new FixtureC749($container->get(FixtureC748::class));
        });

        $container->factory(FixtureC750::class, static function (ContainerInterface $container) {
            return new FixtureC750($container->get(FixtureC749::class));
        });

        $container->factory(FixtureC751::class, static function (ContainerInterface $container) {
            return new FixtureC751($container->get(FixtureC750::class));
        });

        $container->factory(FixtureC752::class, static function (ContainerInterface $container) {
            return new FixtureC752($container->get(FixtureC751::class));
        });

        $container->factory(FixtureC753::class, static function (ContainerInterface $container) {
            return new FixtureC753($container->get(FixtureC752::class));
        });

        $container->factory(FixtureC754::class, static function (ContainerInterface $container) {
            return new FixtureC754($container->get(FixtureC753::class));
        });

        $container->factory(FixtureC755::class, static function (ContainerInterface $container) {
            return new FixtureC755($container->get(FixtureC754::class));
        });

        $container->factory(FixtureC756::class, static function (ContainerInterface $container) {
            return new FixtureC756($container->get(FixtureC755::class));
        });

        $container->factory(FixtureC757::class, static function (ContainerInterface $container) {
            return new FixtureC757($container->get(FixtureC756::class));
        });

        $container->factory(FixtureC758::class, static function (ContainerInterface $container) {
            return new FixtureC758($container->get(FixtureC757::class));
        });

        $container->factory(FixtureC759::class, static function (ContainerInterface $container) {
            return new FixtureC759($container->get(FixtureC758::class));
        });

        $container->factory(FixtureC760::class, static function (ContainerInterface $container) {
            return new FixtureC760($container->get(FixtureC759::class));
        });

        $container->factory(FixtureC761::class, static function (ContainerInterface $container) {
            return new FixtureC761($container->get(FixtureC760::class));
        });

        $container->factory(FixtureC762::class, static function (ContainerInterface $container) {
            return new FixtureC762($container->get(FixtureC761::class));
        });

        $container->factory(FixtureC763::class, static function (ContainerInterface $container) {
            return new FixtureC763($container->get(FixtureC762::class));
        });

        $container->factory(FixtureC764::class, static function (ContainerInterface $container) {
            return new FixtureC764($container->get(FixtureC763::class));
        });

        $container->factory(FixtureC765::class, static function (ContainerInterface $container) {
            return new FixtureC765($container->get(FixtureC764::class));
        });

        $container->factory(FixtureC766::class, static function (ContainerInterface $container) {
            return new FixtureC766($container->get(FixtureC765::class));
        });

        $container->factory(FixtureC767::class, static function (ContainerInterface $container) {
            return new FixtureC767($container->get(FixtureC766::class));
        });

        $container->factory(FixtureC768::class, static function (ContainerInterface $container) {
            return new FixtureC768($container->get(FixtureC767::class));
        });

        $container->factory(FixtureC769::class, static function (ContainerInterface $container) {
            return new FixtureC769($container->get(FixtureC768::class));
        });

        $container->factory(FixtureC770::class, static function (ContainerInterface $container) {
            return new FixtureC770($container->get(FixtureC769::class));
        });

        $container->factory(FixtureC771::class, static function (ContainerInterface $container) {
            return new FixtureC771($container->get(FixtureC770::class));
        });

        $container->factory(FixtureC772::class, static function (ContainerInterface $container) {
            return new FixtureC772($container->get(FixtureC771::class));
        });

        $container->factory(FixtureC773::class, static function (ContainerInterface $container) {
            return new FixtureC773($container->get(FixtureC772::class));
        });

        $container->factory(FixtureC774::class, static function (ContainerInterface $container) {
            return new FixtureC774($container->get(FixtureC773::class));
        });

        $container->factory(FixtureC775::class, static function (ContainerInterface $container) {
            return new FixtureC775($container->get(FixtureC774::class));
        });

        $container->factory(FixtureC776::class, static function (ContainerInterface $container) {
            return new FixtureC776($container->get(FixtureC775::class));
        });

        $container->factory(FixtureC777::class, static function (ContainerInterface $container) {
            return new FixtureC777($container->get(FixtureC776::class));
        });

        $container->factory(FixtureC778::class, static function (ContainerInterface $container) {
            return new FixtureC778($container->get(FixtureC777::class));
        });

        $container->factory(FixtureC779::class, static function (ContainerInterface $container) {
            return new FixtureC779($container->get(FixtureC778::class));
        });

        $container->factory(FixtureC780::class, static function (ContainerInterface $container) {
            return new FixtureC780($container->get(FixtureC779::class));
        });

        $container->factory(FixtureC781::class, static function (ContainerInterface $container) {
            return new FixtureC781($container->get(FixtureC780::class));
        });

        $container->factory(FixtureC782::class, static function (ContainerInterface $container) {
            return new FixtureC782($container->get(FixtureC781::class));
        });

        $container->factory(FixtureC783::class, static function (ContainerInterface $container) {
            return new FixtureC783($container->get(FixtureC782::class));
        });

        $container->factory(FixtureC784::class, static function (ContainerInterface $container) {
            return new FixtureC784($container->get(FixtureC783::class));
        });

        $container->factory(FixtureC785::class, static function (ContainerInterface $container) {
            return new FixtureC785($container->get(FixtureC784::class));
        });

        $container->factory(FixtureC786::class, static function (ContainerInterface $container) {
            return new FixtureC786($container->get(FixtureC785::class));
        });

        $container->factory(FixtureC787::class, static function (ContainerInterface $container) {
            return new FixtureC787($container->get(FixtureC786::class));
        });

        $container->factory(FixtureC788::class, static function (ContainerInterface $container) {
            return new FixtureC788($container->get(FixtureC787::class));
        });

        $container->factory(FixtureC789::class, static function (ContainerInterface $container) {
            return new FixtureC789($container->get(FixtureC788::class));
        });

        $container->factory(FixtureC790::class, static function (ContainerInterface $container) {
            return new FixtureC790($container->get(FixtureC789::class));
        });

        $container->factory(FixtureC791::class, static function (ContainerInterface $container) {
            return new FixtureC791($container->get(FixtureC790::class));
        });

        $container->factory(FixtureC792::class, static function (ContainerInterface $container) {
            return new FixtureC792($container->get(FixtureC791::class));
        });

        $container->factory(FixtureC793::class, static function (ContainerInterface $container) {
            return new FixtureC793($container->get(FixtureC792::class));
        });

        $container->factory(FixtureC794::class, static function (ContainerInterface $container) {
            return new FixtureC794($container->get(FixtureC793::class));
        });

        $container->factory(FixtureC795::class, static function (ContainerInterface $container) {
            return new FixtureC795($container->get(FixtureC794::class));
        });

        $container->factory(FixtureC796::class, static function (ContainerInterface $container) {
            return new FixtureC796($container->get(FixtureC795::class));
        });

        $container->factory(FixtureC797::class, static function (ContainerInterface $container) {
            return new FixtureC797($container->get(FixtureC796::class));
        });

        $container->factory(FixtureC798::class, static function (ContainerInterface $container) {
            return new FixtureC798($container->get(FixtureC797::class));
        });

        $container->factory(FixtureC799::class, static function (ContainerInterface $container) {
            return new FixtureC799($container->get(FixtureC798::class));
        });

        $container->factory(FixtureC800::class, static function (ContainerInterface $container) {
            return new FixtureC800($container->get(FixtureC799::class));
        });

        $container->factory(FixtureC801::class, static function (ContainerInterface $container) {
            return new FixtureC801($container->get(FixtureC800::class));
        });

        $container->factory(FixtureC802::class, static function (ContainerInterface $container) {
            return new FixtureC802($container->get(FixtureC801::class));
        });

        $container->factory(FixtureC803::class, static function (ContainerInterface $container) {
            return new FixtureC803($container->get(FixtureC802::class));
        });

        $container->factory(FixtureC804::class, static function (ContainerInterface $container) {
            return new FixtureC804($container->get(FixtureC803::class));
        });

        $container->factory(FixtureC805::class, static function (ContainerInterface $container) {
            return new FixtureC805($container->get(FixtureC804::class));
        });

        $container->factory(FixtureC806::class, static function (ContainerInterface $container) {
            return new FixtureC806($container->get(FixtureC805::class));
        });

        $container->factory(FixtureC807::class, static function (ContainerInterface $container) {
            return new FixtureC807($container->get(FixtureC806::class));
        });

        $container->factory(FixtureC808::class, static function (ContainerInterface $container) {
            return new FixtureC808($container->get(FixtureC807::class));
        });

        $container->factory(FixtureC809::class, static function (ContainerInterface $container) {
            return new FixtureC809($container->get(FixtureC808::class));
        });

        $container->factory(FixtureC810::class, static function (ContainerInterface $container) {
            return new FixtureC810($container->get(FixtureC809::class));
        });

        $container->factory(FixtureC811::class, static function (ContainerInterface $container) {
            return new FixtureC811($container->get(FixtureC810::class));
        });

        $container->factory(FixtureC812::class, static function (ContainerInterface $container) {
            return new FixtureC812($container->get(FixtureC811::class));
        });

        $container->factory(FixtureC813::class, static function (ContainerInterface $container) {
            return new FixtureC813($container->get(FixtureC812::class));
        });

        $container->factory(FixtureC814::class, static function (ContainerInterface $container) {
            return new FixtureC814($container->get(FixtureC813::class));
        });

        $container->factory(FixtureC815::class, static function (ContainerInterface $container) {
            return new FixtureC815($container->get(FixtureC814::class));
        });

        $container->factory(FixtureC816::class, static function (ContainerInterface $container) {
            return new FixtureC816($container->get(FixtureC815::class));
        });

        $container->factory(FixtureC817::class, static function (ContainerInterface $container) {
            return new FixtureC817($container->get(FixtureC816::class));
        });

        $container->factory(FixtureC818::class, static function (ContainerInterface $container) {
            return new FixtureC818($container->get(FixtureC817::class));
        });

        $container->factory(FixtureC819::class, static function (ContainerInterface $container) {
            return new FixtureC819($container->get(FixtureC818::class));
        });

        $container->factory(FixtureC820::class, static function (ContainerInterface $container) {
            return new FixtureC820($container->get(FixtureC819::class));
        });

        $container->factory(FixtureC821::class, static function (ContainerInterface $container) {
            return new FixtureC821($container->get(FixtureC820::class));
        });

        $container->factory(FixtureC822::class, static function (ContainerInterface $container) {
            return new FixtureC822($container->get(FixtureC821::class));
        });

        $container->factory(FixtureC823::class, static function (ContainerInterface $container) {
            return new FixtureC823($container->get(FixtureC822::class));
        });

        $container->factory(FixtureC824::class, static function (ContainerInterface $container) {
            return new FixtureC824($container->get(FixtureC823::class));
        });

        $container->factory(FixtureC825::class, static function (ContainerInterface $container) {
            return new FixtureC825($container->get(FixtureC824::class));
        });

        $container->factory(FixtureC826::class, static function (ContainerInterface $container) {
            return new FixtureC826($container->get(FixtureC825::class));
        });

        $container->factory(FixtureC827::class, static function (ContainerInterface $container) {
            return new FixtureC827($container->get(FixtureC826::class));
        });

        $container->factory(FixtureC828::class, static function (ContainerInterface $container) {
            return new FixtureC828($container->get(FixtureC827::class));
        });

        $container->factory(FixtureC829::class, static function (ContainerInterface $container) {
            return new FixtureC829($container->get(FixtureC828::class));
        });

        $container->factory(FixtureC830::class, static function (ContainerInterface $container) {
            return new FixtureC830($container->get(FixtureC829::class));
        });

        $container->factory(FixtureC831::class, static function (ContainerInterface $container) {
            return new FixtureC831($container->get(FixtureC830::class));
        });

        $container->factory(FixtureC832::class, static function (ContainerInterface $container) {
            return new FixtureC832($container->get(FixtureC831::class));
        });

        $container->factory(FixtureC833::class, static function (ContainerInterface $container) {
            return new FixtureC833($container->get(FixtureC832::class));
        });

        $container->factory(FixtureC834::class, static function (ContainerInterface $container) {
            return new FixtureC834($container->get(FixtureC833::class));
        });

        $container->factory(FixtureC835::class, static function (ContainerInterface $container) {
            return new FixtureC835($container->get(FixtureC834::class));
        });

        $container->factory(FixtureC836::class, static function (ContainerInterface $container) {
            return new FixtureC836($container->get(FixtureC835::class));
        });

        $container->factory(FixtureC837::class, static function (ContainerInterface $container) {
            return new FixtureC837($container->get(FixtureC836::class));
        });

        $container->factory(FixtureC838::class, static function (ContainerInterface $container) {
            return new FixtureC838($container->get(FixtureC837::class));
        });

        $container->factory(FixtureC839::class, static function (ContainerInterface $container) {
            return new FixtureC839($container->get(FixtureC838::class));
        });

        $container->factory(FixtureC840::class, static function (ContainerInterface $container) {
            return new FixtureC840($container->get(FixtureC839::class));
        });

        $container->factory(FixtureC841::class, static function (ContainerInterface $container) {
            return new FixtureC841($container->get(FixtureC840::class));
        });

        $container->factory(FixtureC842::class, static function (ContainerInterface $container) {
            return new FixtureC842($container->get(FixtureC841::class));
        });

        $container->factory(FixtureC843::class, static function (ContainerInterface $container) {
            return new FixtureC843($container->get(FixtureC842::class));
        });

        $container->factory(FixtureC844::class, static function (ContainerInterface $container) {
            return new FixtureC844($container->get(FixtureC843::class));
        });

        $container->factory(FixtureC845::class, static function (ContainerInterface $container) {
            return new FixtureC845($container->get(FixtureC844::class));
        });

        $container->factory(FixtureC846::class, static function (ContainerInterface $container) {
            return new FixtureC846($container->get(FixtureC845::class));
        });

        $container->factory(FixtureC847::class, static function (ContainerInterface $container) {
            return new FixtureC847($container->get(FixtureC846::class));
        });

        $container->factory(FixtureC848::class, static function (ContainerInterface $container) {
            return new FixtureC848($container->get(FixtureC847::class));
        });

        $container->factory(FixtureC849::class, static function (ContainerInterface $container) {
            return new FixtureC849($container->get(FixtureC848::class));
        });

        $container->factory(FixtureC850::class, static function (ContainerInterface $container) {
            return new FixtureC850($container->get(FixtureC849::class));
        });

        $container->factory(FixtureC851::class, static function (ContainerInterface $container) {
            return new FixtureC851($container->get(FixtureC850::class));
        });

        $container->factory(FixtureC852::class, static function (ContainerInterface $container) {
            return new FixtureC852($container->get(FixtureC851::class));
        });

        $container->factory(FixtureC853::class, static function (ContainerInterface $container) {
            return new FixtureC853($container->get(FixtureC852::class));
        });

        $container->factory(FixtureC854::class, static function (ContainerInterface $container) {
            return new FixtureC854($container->get(FixtureC853::class));
        });

        $container->factory(FixtureC855::class, static function (ContainerInterface $container) {
            return new FixtureC855($container->get(FixtureC854::class));
        });

        $container->factory(FixtureC856::class, static function (ContainerInterface $container) {
            return new FixtureC856($container->get(FixtureC855::class));
        });

        $container->factory(FixtureC857::class, static function (ContainerInterface $container) {
            return new FixtureC857($container->get(FixtureC856::class));
        });

        $container->factory(FixtureC858::class, static function (ContainerInterface $container) {
            return new FixtureC858($container->get(FixtureC857::class));
        });

        $container->factory(FixtureC859::class, static function (ContainerInterface $container) {
            return new FixtureC859($container->get(FixtureC858::class));
        });

        $container->factory(FixtureC860::class, static function (ContainerInterface $container) {
            return new FixtureC860($container->get(FixtureC859::class));
        });

        $container->factory(FixtureC861::class, static function (ContainerInterface $container) {
            return new FixtureC861($container->get(FixtureC860::class));
        });

        $container->factory(FixtureC862::class, static function (ContainerInterface $container) {
            return new FixtureC862($container->get(FixtureC861::class));
        });

        $container->factory(FixtureC863::class, static function (ContainerInterface $container) {
            return new FixtureC863($container->get(FixtureC862::class));
        });

        $container->factory(FixtureC864::class, static function (ContainerInterface $container) {
            return new FixtureC864($container->get(FixtureC863::class));
        });

        $container->factory(FixtureC865::class, static function (ContainerInterface $container) {
            return new FixtureC865($container->get(FixtureC864::class));
        });

        $container->factory(FixtureC866::class, static function (ContainerInterface $container) {
            return new FixtureC866($container->get(FixtureC865::class));
        });

        $container->factory(FixtureC867::class, static function (ContainerInterface $container) {
            return new FixtureC867($container->get(FixtureC866::class));
        });

        $container->factory(FixtureC868::class, static function (ContainerInterface $container) {
            return new FixtureC868($container->get(FixtureC867::class));
        });

        $container->factory(FixtureC869::class, static function (ContainerInterface $container) {
            return new FixtureC869($container->get(FixtureC868::class));
        });

        $container->factory(FixtureC870::class, static function (ContainerInterface $container) {
            return new FixtureC870($container->get(FixtureC869::class));
        });

        $container->factory(FixtureC871::class, static function (ContainerInterface $container) {
            return new FixtureC871($container->get(FixtureC870::class));
        });

        $container->factory(FixtureC872::class, static function (ContainerInterface $container) {
            return new FixtureC872($container->get(FixtureC871::class));
        });

        $container->factory(FixtureC873::class, static function (ContainerInterface $container) {
            return new FixtureC873($container->get(FixtureC872::class));
        });

        $container->factory(FixtureC874::class, static function (ContainerInterface $container) {
            return new FixtureC874($container->get(FixtureC873::class));
        });

        $container->factory(FixtureC875::class, static function (ContainerInterface $container) {
            return new FixtureC875($container->get(FixtureC874::class));
        });

        $container->factory(FixtureC876::class, static function (ContainerInterface $container) {
            return new FixtureC876($container->get(FixtureC875::class));
        });

        $container->factory(FixtureC877::class, static function (ContainerInterface $container) {
            return new FixtureC877($container->get(FixtureC876::class));
        });

        $container->factory(FixtureC878::class, static function (ContainerInterface $container) {
            return new FixtureC878($container->get(FixtureC877::class));
        });

        $container->factory(FixtureC879::class, static function (ContainerInterface $container) {
            return new FixtureC879($container->get(FixtureC878::class));
        });

        $container->factory(FixtureC880::class, static function (ContainerInterface $container) {
            return new FixtureC880($container->get(FixtureC879::class));
        });

        $container->factory(FixtureC881::class, static function (ContainerInterface $container) {
            return new FixtureC881($container->get(FixtureC880::class));
        });

        $container->factory(FixtureC882::class, static function (ContainerInterface $container) {
            return new FixtureC882($container->get(FixtureC881::class));
        });

        $container->factory(FixtureC883::class, static function (ContainerInterface $container) {
            return new FixtureC883($container->get(FixtureC882::class));
        });

        $container->factory(FixtureC884::class, static function (ContainerInterface $container) {
            return new FixtureC884($container->get(FixtureC883::class));
        });

        $container->factory(FixtureC885::class, static function (ContainerInterface $container) {
            return new FixtureC885($container->get(FixtureC884::class));
        });

        $container->factory(FixtureC886::class, static function (ContainerInterface $container) {
            return new FixtureC886($container->get(FixtureC885::class));
        });

        $container->factory(FixtureC887::class, static function (ContainerInterface $container) {
            return new FixtureC887($container->get(FixtureC886::class));
        });

        $container->factory(FixtureC888::class, static function (ContainerInterface $container) {
            return new FixtureC888($container->get(FixtureC887::class));
        });

        $container->factory(FixtureC889::class, static function (ContainerInterface $container) {
            return new FixtureC889($container->get(FixtureC888::class));
        });

        $container->factory(FixtureC890::class, static function (ContainerInterface $container) {
            return new FixtureC890($container->get(FixtureC889::class));
        });

        $container->factory(FixtureC891::class, static function (ContainerInterface $container) {
            return new FixtureC891($container->get(FixtureC890::class));
        });

        $container->factory(FixtureC892::class, static function (ContainerInterface $container) {
            return new FixtureC892($container->get(FixtureC891::class));
        });

        $container->factory(FixtureC893::class, static function (ContainerInterface $container) {
            return new FixtureC893($container->get(FixtureC892::class));
        });

        $container->factory(FixtureC894::class, static function (ContainerInterface $container) {
            return new FixtureC894($container->get(FixtureC893::class));
        });

        $container->factory(FixtureC895::class, static function (ContainerInterface $container) {
            return new FixtureC895($container->get(FixtureC894::class));
        });

        $container->factory(FixtureC896::class, static function (ContainerInterface $container) {
            return new FixtureC896($container->get(FixtureC895::class));
        });

        $container->factory(FixtureC897::class, static function (ContainerInterface $container) {
            return new FixtureC897($container->get(FixtureC896::class));
        });

        $container->factory(FixtureC898::class, static function (ContainerInterface $container) {
            return new FixtureC898($container->get(FixtureC897::class));
        });

        $container->factory(FixtureC899::class, static function (ContainerInterface $container) {
            return new FixtureC899($container->get(FixtureC898::class));
        });

        $container->factory(FixtureC900::class, static function (ContainerInterface $container) {
            return new FixtureC900($container->get(FixtureC899::class));
        });

        $container->factory(FixtureC901::class, static function (ContainerInterface $container) {
            return new FixtureC901($container->get(FixtureC900::class));
        });

        $container->factory(FixtureC902::class, static function (ContainerInterface $container) {
            return new FixtureC902($container->get(FixtureC901::class));
        });

        $container->factory(FixtureC903::class, static function (ContainerInterface $container) {
            return new FixtureC903($container->get(FixtureC902::class));
        });

        $container->factory(FixtureC904::class, static function (ContainerInterface $container) {
            return new FixtureC904($container->get(FixtureC903::class));
        });

        $container->factory(FixtureC905::class, static function (ContainerInterface $container) {
            return new FixtureC905($container->get(FixtureC904::class));
        });

        $container->factory(FixtureC906::class, static function (ContainerInterface $container) {
            return new FixtureC906($container->get(FixtureC905::class));
        });

        $container->factory(FixtureC907::class, static function (ContainerInterface $container) {
            return new FixtureC907($container->get(FixtureC906::class));
        });

        $container->factory(FixtureC908::class, static function (ContainerInterface $container) {
            return new FixtureC908($container->get(FixtureC907::class));
        });

        $container->factory(FixtureC909::class, static function (ContainerInterface $container) {
            return new FixtureC909($container->get(FixtureC908::class));
        });

        $container->factory(FixtureC910::class, static function (ContainerInterface $container) {
            return new FixtureC910($container->get(FixtureC909::class));
        });

        $container->factory(FixtureC911::class, static function (ContainerInterface $container) {
            return new FixtureC911($container->get(FixtureC910::class));
        });

        $container->factory(FixtureC912::class, static function (ContainerInterface $container) {
            return new FixtureC912($container->get(FixtureC911::class));
        });

        $container->factory(FixtureC913::class, static function (ContainerInterface $container) {
            return new FixtureC913($container->get(FixtureC912::class));
        });

        $container->factory(FixtureC914::class, static function (ContainerInterface $container) {
            return new FixtureC914($container->get(FixtureC913::class));
        });

        $container->factory(FixtureC915::class, static function (ContainerInterface $container) {
            return new FixtureC915($container->get(FixtureC914::class));
        });

        $container->factory(FixtureC916::class, static function (ContainerInterface $container) {
            return new FixtureC916($container->get(FixtureC915::class));
        });

        $container->factory(FixtureC917::class, static function (ContainerInterface $container) {
            return new FixtureC917($container->get(FixtureC916::class));
        });

        $container->factory(FixtureC918::class, static function (ContainerInterface $container) {
            return new FixtureC918($container->get(FixtureC917::class));
        });

        $container->factory(FixtureC919::class, static function (ContainerInterface $container) {
            return new FixtureC919($container->get(FixtureC918::class));
        });

        $container->factory(FixtureC920::class, static function (ContainerInterface $container) {
            return new FixtureC920($container->get(FixtureC919::class));
        });

        $container->factory(FixtureC921::class, static function (ContainerInterface $container) {
            return new FixtureC921($container->get(FixtureC920::class));
        });

        $container->factory(FixtureC922::class, static function (ContainerInterface $container) {
            return new FixtureC922($container->get(FixtureC921::class));
        });

        $container->factory(FixtureC923::class, static function (ContainerInterface $container) {
            return new FixtureC923($container->get(FixtureC922::class));
        });

        $container->factory(FixtureC924::class, static function (ContainerInterface $container) {
            return new FixtureC924($container->get(FixtureC923::class));
        });

        $container->factory(FixtureC925::class, static function (ContainerInterface $container) {
            return new FixtureC925($container->get(FixtureC924::class));
        });

        $container->factory(FixtureC926::class, static function (ContainerInterface $container) {
            return new FixtureC926($container->get(FixtureC925::class));
        });

        $container->factory(FixtureC927::class, static function (ContainerInterface $container) {
            return new FixtureC927($container->get(FixtureC926::class));
        });

        $container->factory(FixtureC928::class, static function (ContainerInterface $container) {
            return new FixtureC928($container->get(FixtureC927::class));
        });

        $container->factory(FixtureC929::class, static function (ContainerInterface $container) {
            return new FixtureC929($container->get(FixtureC928::class));
        });

        $container->factory(FixtureC930::class, static function (ContainerInterface $container) {
            return new FixtureC930($container->get(FixtureC929::class));
        });

        $container->factory(FixtureC931::class, static function (ContainerInterface $container) {
            return new FixtureC931($container->get(FixtureC930::class));
        });

        $container->factory(FixtureC932::class, static function (ContainerInterface $container) {
            return new FixtureC932($container->get(FixtureC931::class));
        });

        $container->factory(FixtureC933::class, static function (ContainerInterface $container) {
            return new FixtureC933($container->get(FixtureC932::class));
        });

        $container->factory(FixtureC934::class, static function (ContainerInterface $container) {
            return new FixtureC934($container->get(FixtureC933::class));
        });

        $container->factory(FixtureC935::class, static function (ContainerInterface $container) {
            return new FixtureC935($container->get(FixtureC934::class));
        });

        $container->factory(FixtureC936::class, static function (ContainerInterface $container) {
            return new FixtureC936($container->get(FixtureC935::class));
        });

        $container->factory(FixtureC937::class, static function (ContainerInterface $container) {
            return new FixtureC937($container->get(FixtureC936::class));
        });

        $container->factory(FixtureC938::class, static function (ContainerInterface $container) {
            return new FixtureC938($container->get(FixtureC937::class));
        });

        $container->factory(FixtureC939::class, static function (ContainerInterface $container) {
            return new FixtureC939($container->get(FixtureC938::class));
        });

        $container->factory(FixtureC940::class, static function (ContainerInterface $container) {
            return new FixtureC940($container->get(FixtureC939::class));
        });

        $container->factory(FixtureC941::class, static function (ContainerInterface $container) {
            return new FixtureC941($container->get(FixtureC940::class));
        });

        $container->factory(FixtureC942::class, static function (ContainerInterface $container) {
            return new FixtureC942($container->get(FixtureC941::class));
        });

        $container->factory(FixtureC943::class, static function (ContainerInterface $container) {
            return new FixtureC943($container->get(FixtureC942::class));
        });

        $container->factory(FixtureC944::class, static function (ContainerInterface $container) {
            return new FixtureC944($container->get(FixtureC943::class));
        });

        $container->factory(FixtureC945::class, static function (ContainerInterface $container) {
            return new FixtureC945($container->get(FixtureC944::class));
        });

        $container->factory(FixtureC946::class, static function (ContainerInterface $container) {
            return new FixtureC946($container->get(FixtureC945::class));
        });

        $container->factory(FixtureC947::class, static function (ContainerInterface $container) {
            return new FixtureC947($container->get(FixtureC946::class));
        });

        $container->factory(FixtureC948::class, static function (ContainerInterface $container) {
            return new FixtureC948($container->get(FixtureC947::class));
        });

        $container->factory(FixtureC949::class, static function (ContainerInterface $container) {
            return new FixtureC949($container->get(FixtureC948::class));
        });

        $container->factory(FixtureC950::class, static function (ContainerInterface $container) {
            return new FixtureC950($container->get(FixtureC949::class));
        });

        $container->factory(FixtureC951::class, static function (ContainerInterface $container) {
            return new FixtureC951($container->get(FixtureC950::class));
        });

        $container->factory(FixtureC952::class, static function (ContainerInterface $container) {
            return new FixtureC952($container->get(FixtureC951::class));
        });

        $container->factory(FixtureC953::class, static function (ContainerInterface $container) {
            return new FixtureC953($container->get(FixtureC952::class));
        });

        $container->factory(FixtureC954::class, static function (ContainerInterface $container) {
            return new FixtureC954($container->get(FixtureC953::class));
        });

        $container->factory(FixtureC955::class, static function (ContainerInterface $container) {
            return new FixtureC955($container->get(FixtureC954::class));
        });

        $container->factory(FixtureC956::class, static function (ContainerInterface $container) {
            return new FixtureC956($container->get(FixtureC955::class));
        });

        $container->factory(FixtureC957::class, static function (ContainerInterface $container) {
            return new FixtureC957($container->get(FixtureC956::class));
        });

        $container->factory(FixtureC958::class, static function (ContainerInterface $container) {
            return new FixtureC958($container->get(FixtureC957::class));
        });

        $container->factory(FixtureC959::class, static function (ContainerInterface $container) {
            return new FixtureC959($container->get(FixtureC958::class));
        });

        $container->factory(FixtureC960::class, static function (ContainerInterface $container) {
            return new FixtureC960($container->get(FixtureC959::class));
        });

        $container->factory(FixtureC961::class, static function (ContainerInterface $container) {
            return new FixtureC961($container->get(FixtureC960::class));
        });

        $container->factory(FixtureC962::class, static function (ContainerInterface $container) {
            return new FixtureC962($container->get(FixtureC961::class));
        });

        $container->factory(FixtureC963::class, static function (ContainerInterface $container) {
            return new FixtureC963($container->get(FixtureC962::class));
        });

        $container->factory(FixtureC964::class, static function (ContainerInterface $container) {
            return new FixtureC964($container->get(FixtureC963::class));
        });

        $container->factory(FixtureC965::class, static function (ContainerInterface $container) {
            return new FixtureC965($container->get(FixtureC964::class));
        });

        $container->factory(FixtureC966::class, static function (ContainerInterface $container) {
            return new FixtureC966($container->get(FixtureC965::class));
        });

        $container->factory(FixtureC967::class, static function (ContainerInterface $container) {
            return new FixtureC967($container->get(FixtureC966::class));
        });

        $container->factory(FixtureC968::class, static function (ContainerInterface $container) {
            return new FixtureC968($container->get(FixtureC967::class));
        });

        $container->factory(FixtureC969::class, static function (ContainerInterface $container) {
            return new FixtureC969($container->get(FixtureC968::class));
        });

        $container->factory(FixtureC970::class, static function (ContainerInterface $container) {
            return new FixtureC970($container->get(FixtureC969::class));
        });

        $container->factory(FixtureC971::class, static function (ContainerInterface $container) {
            return new FixtureC971($container->get(FixtureC970::class));
        });

        $container->factory(FixtureC972::class, static function (ContainerInterface $container) {
            return new FixtureC972($container->get(FixtureC971::class));
        });

        $container->factory(FixtureC973::class, static function (ContainerInterface $container) {
            return new FixtureC973($container->get(FixtureC972::class));
        });

        $container->factory(FixtureC974::class, static function (ContainerInterface $container) {
            return new FixtureC974($container->get(FixtureC973::class));
        });

        $container->factory(FixtureC975::class, static function (ContainerInterface $container) {
            return new FixtureC975($container->get(FixtureC974::class));
        });

        $container->factory(FixtureC976::class, static function (ContainerInterface $container) {
            return new FixtureC976($container->get(FixtureC975::class));
        });

        $container->factory(FixtureC977::class, static function (ContainerInterface $container) {
            return new FixtureC977($container->get(FixtureC976::class));
        });

        $container->factory(FixtureC978::class, static function (ContainerInterface $container) {
            return new FixtureC978($container->get(FixtureC977::class));
        });

        $container->factory(FixtureC979::class, static function (ContainerInterface $container) {
            return new FixtureC979($container->get(FixtureC978::class));
        });

        $container->factory(FixtureC980::class, static function (ContainerInterface $container) {
            return new FixtureC980($container->get(FixtureC979::class));
        });

        $container->factory(FixtureC981::class, static function (ContainerInterface $container) {
            return new FixtureC981($container->get(FixtureC980::class));
        });

        $container->factory(FixtureC982::class, static function (ContainerInterface $container) {
            return new FixtureC982($container->get(FixtureC981::class));
        });

        $container->factory(FixtureC983::class, static function (ContainerInterface $container) {
            return new FixtureC983($container->get(FixtureC982::class));
        });

        $container->factory(FixtureC984::class, static function (ContainerInterface $container) {
            return new FixtureC984($container->get(FixtureC983::class));
        });

        $container->factory(FixtureC985::class, static function (ContainerInterface $container) {
            return new FixtureC985($container->get(FixtureC984::class));
        });

        $container->factory(FixtureC986::class, static function (ContainerInterface $container) {
            return new FixtureC986($container->get(FixtureC985::class));
        });

        $container->factory(FixtureC987::class, static function (ContainerInterface $container) {
            return new FixtureC987($container->get(FixtureC986::class));
        });

        $container->factory(FixtureC988::class, static function (ContainerInterface $container) {
            return new FixtureC988($container->get(FixtureC987::class));
        });

        $container->factory(FixtureC989::class, static function (ContainerInterface $container) {
            return new FixtureC989($container->get(FixtureC988::class));
        });

        $container->factory(FixtureC990::class, static function (ContainerInterface $container) {
            return new FixtureC990($container->get(FixtureC989::class));
        });

        $container->factory(FixtureC991::class, static function (ContainerInterface $container) {
            return new FixtureC991($container->get(FixtureC990::class));
        });

        $container->factory(FixtureC992::class, static function (ContainerInterface $container) {
            return new FixtureC992($container->get(FixtureC991::class));
        });

        $container->factory(FixtureC993::class, static function (ContainerInterface $container) {
            return new FixtureC993($container->get(FixtureC992::class));
        });

        $container->factory(FixtureC994::class, static function (ContainerInterface $container) {
            return new FixtureC994($container->get(FixtureC993::class));
        });

        $container->factory(FixtureC995::class, static function (ContainerInterface $container) {
            return new FixtureC995($container->get(FixtureC994::class));
        });

        $container->factory(FixtureC996::class, static function (ContainerInterface $container) {
            return new FixtureC996($container->get(FixtureC995::class));
        });

        $container->factory(FixtureC997::class, static function (ContainerInterface $container) {
            return new FixtureC997($container->get(FixtureC996::class));
        });

        $container->factory(FixtureC998::class, static function (ContainerInterface $container) {
            return new FixtureC998($container->get(FixtureC997::class));
        });

        $container->factory(FixtureC999::class, static function (ContainerInterface $container) {
            return new FixtureC999($container->get(FixtureC998::class));
        });

        $container->factory(FixtureC1000::class, static function (ContainerInterface $container) {
            return new FixtureC1000($container->get(FixtureC999::class));
        });

        return $container;
    }

    public function bootstrapPrototypeContainer()
    {
        /* Generated with:
            for ($i = 1; $i <= 100; $i++) {
               echo "use DiContainerBenchmarks\\Fixture\\A\\FixtureA$i";\n";
            }

            for ($i = 1; $i <= 1000; $i++) {
               echo "use DiContainerBenchmarks\\Fixture\\B\\FixtureB$i";\n";
            }

            for ($i = 1; $i <= 1000; $i++) {
               echo "use DiContainerBenchmarks\\Fixture\\C\\FixtureC$i";\n";
            }

            for ($i = 1; $i <= 100; $i++) {
               echo "\$container->prototypeFactory(FixtureA" . $i . "::class, static function (Container \$container) {\n";
               echo "    return new FixtureA{$i}(\$container->get(FixtureA" . ($i-1) . "::class));\n";
               echo "});\n\n";
            }

            for ($i = 1; $i <= 1000; $i++) {
               echo "\$container->prototypeFactory(FixtureB" . $i . "::class, static function () {\n";
               echo "    return new FixtureB{$i}();\n";
               echo "});\n\n";
            }

            for ($i = 1; $i <= 1000; $i++) {
               echo "\$container->prototypeFactory(FixtureC" . $i . "::class, static function (ContainerInterface \$container) {\n";
               echo "    return new FixtureC{$i}(\$container->get(FixtureC" . ($i-1) . "::class));\n";
               echo "});\n\n";
            }
        */

        $container = new Container();

        $container->prototypeFactory(FixtureA1::class, static function () {
            return new FixtureA1();
        });

        $container->prototypeFactory(FixtureA2::class, static function (ContainerInterface $container) {
            return new FixtureA2($container->get(FixtureA1::class));
        });

        $container->prototypeFactory(FixtureA3::class, static function (ContainerInterface $container) {
            return new FixtureA3($container->get(FixtureA2::class));
        });

        $container->prototypeFactory(FixtureA4::class, static function (ContainerInterface $container) {
            return new FixtureA4($container->get(FixtureA3::class));
        });

        $container->prototypeFactory(FixtureA5::class, static function (ContainerInterface $container) {
            return new FixtureA5($container->get(FixtureA4::class));
        });

        $container->prototypeFactory(FixtureA6::class, static function (ContainerInterface $container) {
            return new FixtureA6($container->get(FixtureA5::class));
        });

        $container->prototypeFactory(FixtureA7::class, static function (ContainerInterface $container) {
            return new FixtureA7($container->get(FixtureA6::class));
        });

        $container->prototypeFactory(FixtureA8::class, static function (ContainerInterface $container) {
            return new FixtureA8($container->get(FixtureA7::class));
        });

        $container->prototypeFactory(FixtureA9::class, static function (ContainerInterface $container) {
            return new FixtureA9($container->get(FixtureA8::class));
        });

        $container->prototypeFactory(FixtureA10::class, static function (ContainerInterface $container) {
            return new FixtureA10($container->get(FixtureA9::class));
        });

        $container->prototypeFactory(FixtureA11::class, static function (ContainerInterface $container) {
            return new FixtureA11($container->get(FixtureA10::class));
        });

        $container->prototypeFactory(FixtureA12::class, static function (ContainerInterface $container) {
            return new FixtureA12($container->get(FixtureA11::class));
        });

        $container->prototypeFactory(FixtureA13::class, static function (ContainerInterface $container) {
            return new FixtureA13($container->get(FixtureA12::class));
        });

        $container->prototypeFactory(FixtureA14::class, static function (ContainerInterface $container) {
            return new FixtureA14($container->get(FixtureA13::class));
        });

        $container->prototypeFactory(FixtureA15::class, static function (ContainerInterface $container) {
            return new FixtureA15($container->get(FixtureA14::class));
        });

        $container->prototypeFactory(FixtureA16::class, static function (ContainerInterface $container) {
            return new FixtureA16($container->get(FixtureA15::class));
        });

        $container->prototypeFactory(FixtureA17::class, static function (ContainerInterface $container) {
            return new FixtureA17($container->get(FixtureA16::class));
        });

        $container->prototypeFactory(FixtureA18::class, static function (ContainerInterface $container) {
            return new FixtureA18($container->get(FixtureA17::class));
        });

        $container->prototypeFactory(FixtureA19::class, static function (ContainerInterface $container) {
            return new FixtureA19($container->get(FixtureA18::class));
        });

        $container->prototypeFactory(FixtureA20::class, static function (ContainerInterface $container) {
            return new FixtureA20($container->get(FixtureA19::class));
        });

        $container->prototypeFactory(FixtureA21::class, static function (ContainerInterface $container) {
            return new FixtureA21($container->get(FixtureA20::class));
        });

        $container->prototypeFactory(FixtureA22::class, static function (ContainerInterface $container) {
            return new FixtureA22($container->get(FixtureA21::class));
        });

        $container->prototypeFactory(FixtureA23::class, static function (ContainerInterface $container) {
            return new FixtureA23($container->get(FixtureA22::class));
        });

        $container->prototypeFactory(FixtureA24::class, static function (ContainerInterface $container) {
            return new FixtureA24($container->get(FixtureA23::class));
        });

        $container->prototypeFactory(FixtureA25::class, static function (ContainerInterface $container) {
            return new FixtureA25($container->get(FixtureA24::class));
        });

        $container->prototypeFactory(FixtureA26::class, static function (ContainerInterface $container) {
            return new FixtureA26($container->get(FixtureA25::class));
        });

        $container->prototypeFactory(FixtureA27::class, static function (ContainerInterface $container) {
            return new FixtureA27($container->get(FixtureA26::class));
        });

        $container->prototypeFactory(FixtureA28::class, static function (ContainerInterface $container) {
            return new FixtureA28($container->get(FixtureA27::class));
        });

        $container->prototypeFactory(FixtureA29::class, static function (ContainerInterface $container) {
            return new FixtureA29($container->get(FixtureA28::class));
        });

        $container->prototypeFactory(FixtureA30::class, static function (ContainerInterface $container) {
            return new FixtureA30($container->get(FixtureA29::class));
        });

        $container->prototypeFactory(FixtureA31::class, static function (ContainerInterface $container) {
            return new FixtureA31($container->get(FixtureA30::class));
        });

        $container->prototypeFactory(FixtureA32::class, static function (ContainerInterface $container) {
            return new FixtureA32($container->get(FixtureA31::class));
        });

        $container->prototypeFactory(FixtureA33::class, static function (ContainerInterface $container) {
            return new FixtureA33($container->get(FixtureA32::class));
        });

        $container->prototypeFactory(FixtureA34::class, static function (ContainerInterface $container) {
            return new FixtureA34($container->get(FixtureA33::class));
        });

        $container->prototypeFactory(FixtureA35::class, static function (ContainerInterface $container) {
            return new FixtureA35($container->get(FixtureA34::class));
        });

        $container->prototypeFactory(FixtureA36::class, static function (ContainerInterface $container) {
            return new FixtureA36($container->get(FixtureA35::class));
        });

        $container->prototypeFactory(FixtureA37::class, static function (ContainerInterface $container) {
            return new FixtureA37($container->get(FixtureA36::class));
        });

        $container->prototypeFactory(FixtureA38::class, static function (ContainerInterface $container) {
            return new FixtureA38($container->get(FixtureA37::class));
        });

        $container->prototypeFactory(FixtureA39::class, static function (ContainerInterface $container) {
            return new FixtureA39($container->get(FixtureA38::class));
        });

        $container->prototypeFactory(FixtureA40::class, static function (ContainerInterface $container) {
            return new FixtureA40($container->get(FixtureA39::class));
        });

        $container->prototypeFactory(FixtureA41::class, static function (ContainerInterface $container) {
            return new FixtureA41($container->get(FixtureA40::class));
        });

        $container->prototypeFactory(FixtureA42::class, static function (ContainerInterface $container) {
            return new FixtureA42($container->get(FixtureA41::class));
        });

        $container->prototypeFactory(FixtureA43::class, static function (ContainerInterface $container) {
            return new FixtureA43($container->get(FixtureA42::class));
        });

        $container->prototypeFactory(FixtureA44::class, static function (ContainerInterface $container) {
            return new FixtureA44($container->get(FixtureA43::class));
        });

        $container->prototypeFactory(FixtureA45::class, static function (ContainerInterface $container) {
            return new FixtureA45($container->get(FixtureA44::class));
        });

        $container->prototypeFactory(FixtureA46::class, static function (ContainerInterface $container) {
            return new FixtureA46($container->get(FixtureA45::class));
        });

        $container->prototypeFactory(FixtureA47::class, static function (ContainerInterface $container) {
            return new FixtureA47($container->get(FixtureA46::class));
        });

        $container->prototypeFactory(FixtureA48::class, static function (ContainerInterface $container) {
            return new FixtureA48($container->get(FixtureA47::class));
        });

        $container->prototypeFactory(FixtureA49::class, static function (ContainerInterface $container) {
            return new FixtureA49($container->get(FixtureA48::class));
        });

        $container->prototypeFactory(FixtureA50::class, static function (ContainerInterface $container) {
            return new FixtureA50($container->get(FixtureA49::class));
        });

        $container->prototypeFactory(FixtureA51::class, static function (ContainerInterface $container) {
            return new FixtureA51($container->get(FixtureA50::class));
        });

        $container->prototypeFactory(FixtureA52::class, static function (ContainerInterface $container) {
            return new FixtureA52($container->get(FixtureA51::class));
        });

        $container->prototypeFactory(FixtureA53::class, static function (ContainerInterface $container) {
            return new FixtureA53($container->get(FixtureA52::class));
        });

        $container->prototypeFactory(FixtureA54::class, static function (ContainerInterface $container) {
            return new FixtureA54($container->get(FixtureA53::class));
        });

        $container->prototypeFactory(FixtureA55::class, static function (ContainerInterface $container) {
            return new FixtureA55($container->get(FixtureA54::class));
        });

        $container->prototypeFactory(FixtureA56::class, static function (ContainerInterface $container) {
            return new FixtureA56($container->get(FixtureA55::class));
        });

        $container->prototypeFactory(FixtureA57::class, static function (ContainerInterface $container) {
            return new FixtureA57($container->get(FixtureA56::class));
        });

        $container->prototypeFactory(FixtureA58::class, static function (ContainerInterface $container) {
            return new FixtureA58($container->get(FixtureA57::class));
        });

        $container->prototypeFactory(FixtureA59::class, static function (ContainerInterface $container) {
            return new FixtureA59($container->get(FixtureA58::class));
        });

        $container->prototypeFactory(FixtureA60::class, static function (ContainerInterface $container) {
            return new FixtureA60($container->get(FixtureA59::class));
        });

        $container->prototypeFactory(FixtureA61::class, static function (ContainerInterface $container) {
            return new FixtureA61($container->get(FixtureA60::class));
        });

        $container->prototypeFactory(FixtureA62::class, static function (ContainerInterface $container) {
            return new FixtureA62($container->get(FixtureA61::class));
        });

        $container->prototypeFactory(FixtureA63::class, static function (ContainerInterface $container) {
            return new FixtureA63($container->get(FixtureA62::class));
        });

        $container->prototypeFactory(FixtureA64::class, static function (ContainerInterface $container) {
            return new FixtureA64($container->get(FixtureA63::class));
        });

        $container->prototypeFactory(FixtureA65::class, static function (ContainerInterface $container) {
            return new FixtureA65($container->get(FixtureA64::class));
        });

        $container->prototypeFactory(FixtureA66::class, static function (ContainerInterface $container) {
            return new FixtureA66($container->get(FixtureA65::class));
        });

        $container->prototypeFactory(FixtureA67::class, static function (ContainerInterface $container) {
            return new FixtureA67($container->get(FixtureA66::class));
        });

        $container->prototypeFactory(FixtureA68::class, static function (ContainerInterface $container) {
            return new FixtureA68($container->get(FixtureA67::class));
        });

        $container->prototypeFactory(FixtureA69::class, static function (ContainerInterface $container) {
            return new FixtureA69($container->get(FixtureA68::class));
        });

        $container->prototypeFactory(FixtureA70::class, static function (ContainerInterface $container) {
            return new FixtureA70($container->get(FixtureA69::class));
        });

        $container->prototypeFactory(FixtureA71::class, static function (ContainerInterface $container) {
            return new FixtureA71($container->get(FixtureA70::class));
        });

        $container->prototypeFactory(FixtureA72::class, static function (ContainerInterface $container) {
            return new FixtureA72($container->get(FixtureA71::class));
        });

        $container->prototypeFactory(FixtureA73::class, static function (ContainerInterface $container) {
            return new FixtureA73($container->get(FixtureA72::class));
        });

        $container->prototypeFactory(FixtureA74::class, static function (ContainerInterface $container) {
            return new FixtureA74($container->get(FixtureA73::class));
        });

        $container->prototypeFactory(FixtureA75::class, static function (ContainerInterface $container) {
            return new FixtureA75($container->get(FixtureA74::class));
        });

        $container->prototypeFactory(FixtureA76::class, static function (ContainerInterface $container) {
            return new FixtureA76($container->get(FixtureA75::class));
        });

        $container->prototypeFactory(FixtureA77::class, static function (ContainerInterface $container) {
            return new FixtureA77($container->get(FixtureA76::class));
        });

        $container->prototypeFactory(FixtureA78::class, static function (ContainerInterface $container) {
            return new FixtureA78($container->get(FixtureA77::class));
        });

        $container->prototypeFactory(FixtureA79::class, static function (ContainerInterface $container) {
            return new FixtureA79($container->get(FixtureA78::class));
        });

        $container->prototypeFactory(FixtureA80::class, static function (ContainerInterface $container) {
            return new FixtureA80($container->get(FixtureA79::class));
        });

        $container->prototypeFactory(FixtureA81::class, static function (ContainerInterface $container) {
            return new FixtureA81($container->get(FixtureA80::class));
        });

        $container->prototypeFactory(FixtureA82::class, static function (ContainerInterface $container) {
            return new FixtureA82($container->get(FixtureA81::class));
        });

        $container->prototypeFactory(FixtureA83::class, static function (ContainerInterface $container) {
            return new FixtureA83($container->get(FixtureA82::class));
        });

        $container->prototypeFactory(FixtureA84::class, static function (ContainerInterface $container) {
            return new FixtureA84($container->get(FixtureA83::class));
        });

        $container->prototypeFactory(FixtureA85::class, static function (ContainerInterface $container) {
            return new FixtureA85($container->get(FixtureA84::class));
        });

        $container->prototypeFactory(FixtureA86::class, static function (ContainerInterface $container) {
            return new FixtureA86($container->get(FixtureA85::class));
        });

        $container->prototypeFactory(FixtureA87::class, static function (ContainerInterface $container) {
            return new FixtureA87($container->get(FixtureA86::class));
        });

        $container->prototypeFactory(FixtureA88::class, static function (ContainerInterface $container) {
            return new FixtureA88($container->get(FixtureA87::class));
        });

        $container->prototypeFactory(FixtureA89::class, static function (ContainerInterface $container) {
            return new FixtureA89($container->get(FixtureA88::class));
        });

        $container->prototypeFactory(FixtureA90::class, static function (ContainerInterface $container) {
            return new FixtureA90($container->get(FixtureA89::class));
        });

        $container->prototypeFactory(FixtureA91::class, static function (ContainerInterface $container) {
            return new FixtureA91($container->get(FixtureA90::class));
        });

        $container->prototypeFactory(FixtureA92::class, static function (ContainerInterface $container) {
            return new FixtureA92($container->get(FixtureA91::class));
        });

        $container->prototypeFactory(FixtureA93::class, static function (ContainerInterface $container) {
            return new FixtureA93($container->get(FixtureA92::class));
        });

        $container->prototypeFactory(FixtureA94::class, static function (ContainerInterface $container) {
            return new FixtureA94($container->get(FixtureA93::class));
        });

        $container->prototypeFactory(FixtureA95::class, static function (ContainerInterface $container) {
            return new FixtureA95($container->get(FixtureA94::class));
        });

        $container->prototypeFactory(FixtureA96::class, static function (ContainerInterface $container) {
            return new FixtureA96($container->get(FixtureA95::class));
        });

        $container->prototypeFactory(FixtureA97::class, static function (ContainerInterface $container) {
            return new FixtureA97($container->get(FixtureA96::class));
        });

        $container->prototypeFactory(FixtureA98::class, static function (ContainerInterface $container) {
            return new FixtureA98($container->get(FixtureA97::class));
        });

        $container->prototypeFactory(FixtureA99::class, static function (ContainerInterface $container) {
            return new FixtureA99($container->get(FixtureA98::class));
        });

        $container->prototypeFactory(FixtureA100::class, static function (ContainerInterface $container) {
            return new FixtureA100($container->get(FixtureA99::class));
        });

        $container->prototypeFactory(FixtureB1::class, static function () {
            return new FixtureB1();
        });

        $container->prototypeFactory(FixtureB2::class, static function () {
            return new FixtureB2();
        });

        $container->prototypeFactory(FixtureB3::class, static function () {
            return new FixtureB3();
        });

        $container->prototypeFactory(FixtureB4::class, static function () {
            return new FixtureB4();
        });

        $container->prototypeFactory(FixtureB5::class, static function () {
            return new FixtureB5();
        });

        $container->prototypeFactory(FixtureB6::class, static function () {
            return new FixtureB6();
        });

        $container->prototypeFactory(FixtureB7::class, static function () {
            return new FixtureB7();
        });

        $container->prototypeFactory(FixtureB8::class, static function () {
            return new FixtureB8();
        });

        $container->prototypeFactory(FixtureB9::class, static function () {
            return new FixtureB9();
        });

        $container->prototypeFactory(FixtureB10::class, static function () {
            return new FixtureB10();
        });

        $container->prototypeFactory(FixtureB11::class, static function () {
            return new FixtureB11();
        });

        $container->prototypeFactory(FixtureB12::class, static function () {
            return new FixtureB12();
        });

        $container->prototypeFactory(FixtureB13::class, static function () {
            return new FixtureB13();
        });

        $container->prototypeFactory(FixtureB14::class, static function () {
            return new FixtureB14();
        });

        $container->prototypeFactory(FixtureB15::class, static function () {
            return new FixtureB15();
        });

        $container->prototypeFactory(FixtureB16::class, static function () {
            return new FixtureB16();
        });

        $container->prototypeFactory(FixtureB17::class, static function () {
            return new FixtureB17();
        });

        $container->prototypeFactory(FixtureB18::class, static function () {
            return new FixtureB18();
        });

        $container->prototypeFactory(FixtureB19::class, static function () {
            return new FixtureB19();
        });

        $container->prototypeFactory(FixtureB20::class, static function () {
            return new FixtureB20();
        });

        $container->prototypeFactory(FixtureB21::class, static function () {
            return new FixtureB21();
        });

        $container->prototypeFactory(FixtureB22::class, static function () {
            return new FixtureB22();
        });

        $container->prototypeFactory(FixtureB23::class, static function () {
            return new FixtureB23();
        });

        $container->prototypeFactory(FixtureB24::class, static function () {
            return new FixtureB24();
        });

        $container->prototypeFactory(FixtureB25::class, static function () {
            return new FixtureB25();
        });

        $container->prototypeFactory(FixtureB26::class, static function () {
            return new FixtureB26();
        });

        $container->prototypeFactory(FixtureB27::class, static function () {
            return new FixtureB27();
        });

        $container->prototypeFactory(FixtureB28::class, static function () {
            return new FixtureB28();
        });

        $container->prototypeFactory(FixtureB29::class, static function () {
            return new FixtureB29();
        });

        $container->prototypeFactory(FixtureB30::class, static function () {
            return new FixtureB30();
        });

        $container->prototypeFactory(FixtureB31::class, static function () {
            return new FixtureB31();
        });

        $container->prototypeFactory(FixtureB32::class, static function () {
            return new FixtureB32();
        });

        $container->prototypeFactory(FixtureB33::class, static function () {
            return new FixtureB33();
        });

        $container->prototypeFactory(FixtureB34::class, static function () {
            return new FixtureB34();
        });

        $container->prototypeFactory(FixtureB35::class, static function () {
            return new FixtureB35();
        });

        $container->prototypeFactory(FixtureB36::class, static function () {
            return new FixtureB36();
        });

        $container->prototypeFactory(FixtureB37::class, static function () {
            return new FixtureB37();
        });

        $container->prototypeFactory(FixtureB38::class, static function () {
            return new FixtureB38();
        });

        $container->prototypeFactory(FixtureB39::class, static function () {
            return new FixtureB39();
        });

        $container->prototypeFactory(FixtureB40::class, static function () {
            return new FixtureB40();
        });

        $container->prototypeFactory(FixtureB41::class, static function () {
            return new FixtureB41();
        });

        $container->prototypeFactory(FixtureB42::class, static function () {
            return new FixtureB42();
        });

        $container->prototypeFactory(FixtureB43::class, static function () {
            return new FixtureB43();
        });

        $container->prototypeFactory(FixtureB44::class, static function () {
            return new FixtureB44();
        });

        $container->prototypeFactory(FixtureB45::class, static function () {
            return new FixtureB45();
        });

        $container->prototypeFactory(FixtureB46::class, static function () {
            return new FixtureB46();
        });

        $container->prototypeFactory(FixtureB47::class, static function () {
            return new FixtureB47();
        });

        $container->prototypeFactory(FixtureB48::class, static function () {
            return new FixtureB48();
        });

        $container->prototypeFactory(FixtureB49::class, static function () {
            return new FixtureB49();
        });

        $container->prototypeFactory(FixtureB50::class, static function () {
            return new FixtureB50();
        });

        $container->prototypeFactory(FixtureB51::class, static function () {
            return new FixtureB51();
        });

        $container->prototypeFactory(FixtureB52::class, static function () {
            return new FixtureB52();
        });

        $container->prototypeFactory(FixtureB53::class, static function () {
            return new FixtureB53();
        });

        $container->prototypeFactory(FixtureB54::class, static function () {
            return new FixtureB54();
        });

        $container->prototypeFactory(FixtureB55::class, static function () {
            return new FixtureB55();
        });

        $container->prototypeFactory(FixtureB56::class, static function () {
            return new FixtureB56();
        });

        $container->prototypeFactory(FixtureB57::class, static function () {
            return new FixtureB57();
        });

        $container->prototypeFactory(FixtureB58::class, static function () {
            return new FixtureB58();
        });

        $container->prototypeFactory(FixtureB59::class, static function () {
            return new FixtureB59();
        });

        $container->prototypeFactory(FixtureB60::class, static function () {
            return new FixtureB60();
        });

        $container->prototypeFactory(FixtureB61::class, static function () {
            return new FixtureB61();
        });

        $container->prototypeFactory(FixtureB62::class, static function () {
            return new FixtureB62();
        });

        $container->prototypeFactory(FixtureB63::class, static function () {
            return new FixtureB63();
        });

        $container->prototypeFactory(FixtureB64::class, static function () {
            return new FixtureB64();
        });

        $container->prototypeFactory(FixtureB65::class, static function () {
            return new FixtureB65();
        });

        $container->prototypeFactory(FixtureB66::class, static function () {
            return new FixtureB66();
        });

        $container->prototypeFactory(FixtureB67::class, static function () {
            return new FixtureB67();
        });

        $container->prototypeFactory(FixtureB68::class, static function () {
            return new FixtureB68();
        });

        $container->prototypeFactory(FixtureB69::class, static function () {
            return new FixtureB69();
        });

        $container->prototypeFactory(FixtureB70::class, static function () {
            return new FixtureB70();
        });

        $container->prototypeFactory(FixtureB71::class, static function () {
            return new FixtureB71();
        });

        $container->prototypeFactory(FixtureB72::class, static function () {
            return new FixtureB72();
        });

        $container->prototypeFactory(FixtureB73::class, static function () {
            return new FixtureB73();
        });

        $container->prototypeFactory(FixtureB74::class, static function () {
            return new FixtureB74();
        });

        $container->prototypeFactory(FixtureB75::class, static function () {
            return new FixtureB75();
        });

        $container->prototypeFactory(FixtureB76::class, static function () {
            return new FixtureB76();
        });

        $container->prototypeFactory(FixtureB77::class, static function () {
            return new FixtureB77();
        });

        $container->prototypeFactory(FixtureB78::class, static function () {
            return new FixtureB78();
        });

        $container->prototypeFactory(FixtureB79::class, static function () {
            return new FixtureB79();
        });

        $container->prototypeFactory(FixtureB80::class, static function () {
            return new FixtureB80();
        });

        $container->prototypeFactory(FixtureB81::class, static function () {
            return new FixtureB81();
        });

        $container->prototypeFactory(FixtureB82::class, static function () {
            return new FixtureB82();
        });

        $container->prototypeFactory(FixtureB83::class, static function () {
            return new FixtureB83();
        });

        $container->prototypeFactory(FixtureB84::class, static function () {
            return new FixtureB84();
        });

        $container->prototypeFactory(FixtureB85::class, static function () {
            return new FixtureB85();
        });

        $container->prototypeFactory(FixtureB86::class, static function () {
            return new FixtureB86();
        });

        $container->prototypeFactory(FixtureB87::class, static function () {
            return new FixtureB87();
        });

        $container->prototypeFactory(FixtureB88::class, static function () {
            return new FixtureB88();
        });

        $container->prototypeFactory(FixtureB89::class, static function () {
            return new FixtureB89();
        });

        $container->prototypeFactory(FixtureB90::class, static function () {
            return new FixtureB90();
        });

        $container->prototypeFactory(FixtureB91::class, static function () {
            return new FixtureB91();
        });

        $container->prototypeFactory(FixtureB92::class, static function () {
            return new FixtureB92();
        });

        $container->prototypeFactory(FixtureB93::class, static function () {
            return new FixtureB93();
        });

        $container->prototypeFactory(FixtureB94::class, static function () {
            return new FixtureB94();
        });

        $container->prototypeFactory(FixtureB95::class, static function () {
            return new FixtureB95();
        });

        $container->prototypeFactory(FixtureB96::class, static function () {
            return new FixtureB96();
        });

        $container->prototypeFactory(FixtureB97::class, static function () {
            return new FixtureB97();
        });

        $container->prototypeFactory(FixtureB98::class, static function () {
            return new FixtureB98();
        });

        $container->prototypeFactory(FixtureB99::class, static function () {
            return new FixtureB99();
        });

        $container->prototypeFactory(FixtureB100::class, static function () {
            return new FixtureB100();
        });

        $container->prototypeFactory(FixtureB101::class, static function () {
            return new FixtureB101();
        });

        $container->prototypeFactory(FixtureB102::class, static function () {
            return new FixtureB102();
        });

        $container->prototypeFactory(FixtureB103::class, static function () {
            return new FixtureB103();
        });

        $container->prototypeFactory(FixtureB104::class, static function () {
            return new FixtureB104();
        });

        $container->prototypeFactory(FixtureB105::class, static function () {
            return new FixtureB105();
        });

        $container->prototypeFactory(FixtureB106::class, static function () {
            return new FixtureB106();
        });

        $container->prototypeFactory(FixtureB107::class, static function () {
            return new FixtureB107();
        });

        $container->prototypeFactory(FixtureB108::class, static function () {
            return new FixtureB108();
        });

        $container->prototypeFactory(FixtureB109::class, static function () {
            return new FixtureB109();
        });

        $container->prototypeFactory(FixtureB110::class, static function () {
            return new FixtureB110();
        });

        $container->prototypeFactory(FixtureB111::class, static function () {
            return new FixtureB111();
        });

        $container->prototypeFactory(FixtureB112::class, static function () {
            return new FixtureB112();
        });

        $container->prototypeFactory(FixtureB113::class, static function () {
            return new FixtureB113();
        });

        $container->prototypeFactory(FixtureB114::class, static function () {
            return new FixtureB114();
        });

        $container->prototypeFactory(FixtureB115::class, static function () {
            return new FixtureB115();
        });

        $container->prototypeFactory(FixtureB116::class, static function () {
            return new FixtureB116();
        });

        $container->prototypeFactory(FixtureB117::class, static function () {
            return new FixtureB117();
        });

        $container->prototypeFactory(FixtureB118::class, static function () {
            return new FixtureB118();
        });

        $container->prototypeFactory(FixtureB119::class, static function () {
            return new FixtureB119();
        });

        $container->prototypeFactory(FixtureB120::class, static function () {
            return new FixtureB120();
        });

        $container->prototypeFactory(FixtureB121::class, static function () {
            return new FixtureB121();
        });

        $container->prototypeFactory(FixtureB122::class, static function () {
            return new FixtureB122();
        });

        $container->prototypeFactory(FixtureB123::class, static function () {
            return new FixtureB123();
        });

        $container->prototypeFactory(FixtureB124::class, static function () {
            return new FixtureB124();
        });

        $container->prototypeFactory(FixtureB125::class, static function () {
            return new FixtureB125();
        });

        $container->prototypeFactory(FixtureB126::class, static function () {
            return new FixtureB126();
        });

        $container->prototypeFactory(FixtureB127::class, static function () {
            return new FixtureB127();
        });

        $container->prototypeFactory(FixtureB128::class, static function () {
            return new FixtureB128();
        });

        $container->prototypeFactory(FixtureB129::class, static function () {
            return new FixtureB129();
        });

        $container->prototypeFactory(FixtureB130::class, static function () {
            return new FixtureB130();
        });

        $container->prototypeFactory(FixtureB131::class, static function () {
            return new FixtureB131();
        });

        $container->prototypeFactory(FixtureB132::class, static function () {
            return new FixtureB132();
        });

        $container->prototypeFactory(FixtureB133::class, static function () {
            return new FixtureB133();
        });

        $container->prototypeFactory(FixtureB134::class, static function () {
            return new FixtureB134();
        });

        $container->prototypeFactory(FixtureB135::class, static function () {
            return new FixtureB135();
        });

        $container->prototypeFactory(FixtureB136::class, static function () {
            return new FixtureB136();
        });

        $container->prototypeFactory(FixtureB137::class, static function () {
            return new FixtureB137();
        });

        $container->prototypeFactory(FixtureB138::class, static function () {
            return new FixtureB138();
        });

        $container->prototypeFactory(FixtureB139::class, static function () {
            return new FixtureB139();
        });

        $container->prototypeFactory(FixtureB140::class, static function () {
            return new FixtureB140();
        });

        $container->prototypeFactory(FixtureB141::class, static function () {
            return new FixtureB141();
        });

        $container->prototypeFactory(FixtureB142::class, static function () {
            return new FixtureB142();
        });

        $container->prototypeFactory(FixtureB143::class, static function () {
            return new FixtureB143();
        });

        $container->prototypeFactory(FixtureB144::class, static function () {
            return new FixtureB144();
        });

        $container->prototypeFactory(FixtureB145::class, static function () {
            return new FixtureB145();
        });

        $container->prototypeFactory(FixtureB146::class, static function () {
            return new FixtureB146();
        });

        $container->prototypeFactory(FixtureB147::class, static function () {
            return new FixtureB147();
        });

        $container->prototypeFactory(FixtureB148::class, static function () {
            return new FixtureB148();
        });

        $container->prototypeFactory(FixtureB149::class, static function () {
            return new FixtureB149();
        });

        $container->prototypeFactory(FixtureB150::class, static function () {
            return new FixtureB150();
        });

        $container->prototypeFactory(FixtureB151::class, static function () {
            return new FixtureB151();
        });

        $container->prototypeFactory(FixtureB152::class, static function () {
            return new FixtureB152();
        });

        $container->prototypeFactory(FixtureB153::class, static function () {
            return new FixtureB153();
        });

        $container->prototypeFactory(FixtureB154::class, static function () {
            return new FixtureB154();
        });

        $container->prototypeFactory(FixtureB155::class, static function () {
            return new FixtureB155();
        });

        $container->prototypeFactory(FixtureB156::class, static function () {
            return new FixtureB156();
        });

        $container->prototypeFactory(FixtureB157::class, static function () {
            return new FixtureB157();
        });

        $container->prototypeFactory(FixtureB158::class, static function () {
            return new FixtureB158();
        });

        $container->prototypeFactory(FixtureB159::class, static function () {
            return new FixtureB159();
        });

        $container->prototypeFactory(FixtureB160::class, static function () {
            return new FixtureB160();
        });

        $container->prototypeFactory(FixtureB161::class, static function () {
            return new FixtureB161();
        });

        $container->prototypeFactory(FixtureB162::class, static function () {
            return new FixtureB162();
        });

        $container->prototypeFactory(FixtureB163::class, static function () {
            return new FixtureB163();
        });

        $container->prototypeFactory(FixtureB164::class, static function () {
            return new FixtureB164();
        });

        $container->prototypeFactory(FixtureB165::class, static function () {
            return new FixtureB165();
        });

        $container->prototypeFactory(FixtureB166::class, static function () {
            return new FixtureB166();
        });

        $container->prototypeFactory(FixtureB167::class, static function () {
            return new FixtureB167();
        });

        $container->prototypeFactory(FixtureB168::class, static function () {
            return new FixtureB168();
        });

        $container->prototypeFactory(FixtureB169::class, static function () {
            return new FixtureB169();
        });

        $container->prototypeFactory(FixtureB170::class, static function () {
            return new FixtureB170();
        });

        $container->prototypeFactory(FixtureB171::class, static function () {
            return new FixtureB171();
        });

        $container->prototypeFactory(FixtureB172::class, static function () {
            return new FixtureB172();
        });

        $container->prototypeFactory(FixtureB173::class, static function () {
            return new FixtureB173();
        });

        $container->prototypeFactory(FixtureB174::class, static function () {
            return new FixtureB174();
        });

        $container->prototypeFactory(FixtureB175::class, static function () {
            return new FixtureB175();
        });

        $container->prototypeFactory(FixtureB176::class, static function () {
            return new FixtureB176();
        });

        $container->prototypeFactory(FixtureB177::class, static function () {
            return new FixtureB177();
        });

        $container->prototypeFactory(FixtureB178::class, static function () {
            return new FixtureB178();
        });

        $container->prototypeFactory(FixtureB179::class, static function () {
            return new FixtureB179();
        });

        $container->prototypeFactory(FixtureB180::class, static function () {
            return new FixtureB180();
        });

        $container->prototypeFactory(FixtureB181::class, static function () {
            return new FixtureB181();
        });

        $container->prototypeFactory(FixtureB182::class, static function () {
            return new FixtureB182();
        });

        $container->prototypeFactory(FixtureB183::class, static function () {
            return new FixtureB183();
        });

        $container->prototypeFactory(FixtureB184::class, static function () {
            return new FixtureB184();
        });

        $container->prototypeFactory(FixtureB185::class, static function () {
            return new FixtureB185();
        });

        $container->prototypeFactory(FixtureB186::class, static function () {
            return new FixtureB186();
        });

        $container->prototypeFactory(FixtureB187::class, static function () {
            return new FixtureB187();
        });

        $container->prototypeFactory(FixtureB188::class, static function () {
            return new FixtureB188();
        });

        $container->prototypeFactory(FixtureB189::class, static function () {
            return new FixtureB189();
        });

        $container->prototypeFactory(FixtureB190::class, static function () {
            return new FixtureB190();
        });

        $container->prototypeFactory(FixtureB191::class, static function () {
            return new FixtureB191();
        });

        $container->prototypeFactory(FixtureB192::class, static function () {
            return new FixtureB192();
        });

        $container->prototypeFactory(FixtureB193::class, static function () {
            return new FixtureB193();
        });

        $container->prototypeFactory(FixtureB194::class, static function () {
            return new FixtureB194();
        });

        $container->prototypeFactory(FixtureB195::class, static function () {
            return new FixtureB195();
        });

        $container->prototypeFactory(FixtureB196::class, static function () {
            return new FixtureB196();
        });

        $container->prototypeFactory(FixtureB197::class, static function () {
            return new FixtureB197();
        });

        $container->prototypeFactory(FixtureB198::class, static function () {
            return new FixtureB198();
        });

        $container->prototypeFactory(FixtureB199::class, static function () {
            return new FixtureB199();
        });

        $container->prototypeFactory(FixtureB200::class, static function () {
            return new FixtureB200();
        });

        $container->prototypeFactory(FixtureB201::class, static function () {
            return new FixtureB201();
        });

        $container->prototypeFactory(FixtureB202::class, static function () {
            return new FixtureB202();
        });

        $container->prototypeFactory(FixtureB203::class, static function () {
            return new FixtureB203();
        });

        $container->prototypeFactory(FixtureB204::class, static function () {
            return new FixtureB204();
        });

        $container->prototypeFactory(FixtureB205::class, static function () {
            return new FixtureB205();
        });

        $container->prototypeFactory(FixtureB206::class, static function () {
            return new FixtureB206();
        });

        $container->prototypeFactory(FixtureB207::class, static function () {
            return new FixtureB207();
        });

        $container->prototypeFactory(FixtureB208::class, static function () {
            return new FixtureB208();
        });

        $container->prototypeFactory(FixtureB209::class, static function () {
            return new FixtureB209();
        });

        $container->prototypeFactory(FixtureB210::class, static function () {
            return new FixtureB210();
        });

        $container->prototypeFactory(FixtureB211::class, static function () {
            return new FixtureB211();
        });

        $container->prototypeFactory(FixtureB212::class, static function () {
            return new FixtureB212();
        });

        $container->prototypeFactory(FixtureB213::class, static function () {
            return new FixtureB213();
        });

        $container->prototypeFactory(FixtureB214::class, static function () {
            return new FixtureB214();
        });

        $container->prototypeFactory(FixtureB215::class, static function () {
            return new FixtureB215();
        });

        $container->prototypeFactory(FixtureB216::class, static function () {
            return new FixtureB216();
        });

        $container->prototypeFactory(FixtureB217::class, static function () {
            return new FixtureB217();
        });

        $container->prototypeFactory(FixtureB218::class, static function () {
            return new FixtureB218();
        });

        $container->prototypeFactory(FixtureB219::class, static function () {
            return new FixtureB219();
        });

        $container->prototypeFactory(FixtureB220::class, static function () {
            return new FixtureB220();
        });

        $container->prototypeFactory(FixtureB221::class, static function () {
            return new FixtureB221();
        });

        $container->prototypeFactory(FixtureB222::class, static function () {
            return new FixtureB222();
        });

        $container->prototypeFactory(FixtureB223::class, static function () {
            return new FixtureB223();
        });

        $container->prototypeFactory(FixtureB224::class, static function () {
            return new FixtureB224();
        });

        $container->prototypeFactory(FixtureB225::class, static function () {
            return new FixtureB225();
        });

        $container->prototypeFactory(FixtureB226::class, static function () {
            return new FixtureB226();
        });

        $container->prototypeFactory(FixtureB227::class, static function () {
            return new FixtureB227();
        });

        $container->prototypeFactory(FixtureB228::class, static function () {
            return new FixtureB228();
        });

        $container->prototypeFactory(FixtureB229::class, static function () {
            return new FixtureB229();
        });

        $container->prototypeFactory(FixtureB230::class, static function () {
            return new FixtureB230();
        });

        $container->prototypeFactory(FixtureB231::class, static function () {
            return new FixtureB231();
        });

        $container->prototypeFactory(FixtureB232::class, static function () {
            return new FixtureB232();
        });

        $container->prototypeFactory(FixtureB233::class, static function () {
            return new FixtureB233();
        });

        $container->prototypeFactory(FixtureB234::class, static function () {
            return new FixtureB234();
        });

        $container->prototypeFactory(FixtureB235::class, static function () {
            return new FixtureB235();
        });

        $container->prototypeFactory(FixtureB236::class, static function () {
            return new FixtureB236();
        });

        $container->prototypeFactory(FixtureB237::class, static function () {
            return new FixtureB237();
        });

        $container->prototypeFactory(FixtureB238::class, static function () {
            return new FixtureB238();
        });

        $container->prototypeFactory(FixtureB239::class, static function () {
            return new FixtureB239();
        });

        $container->prototypeFactory(FixtureB240::class, static function () {
            return new FixtureB240();
        });

        $container->prototypeFactory(FixtureB241::class, static function () {
            return new FixtureB241();
        });

        $container->prototypeFactory(FixtureB242::class, static function () {
            return new FixtureB242();
        });

        $container->prototypeFactory(FixtureB243::class, static function () {
            return new FixtureB243();
        });

        $container->prototypeFactory(FixtureB244::class, static function () {
            return new FixtureB244();
        });

        $container->prototypeFactory(FixtureB245::class, static function () {
            return new FixtureB245();
        });

        $container->prototypeFactory(FixtureB246::class, static function () {
            return new FixtureB246();
        });

        $container->prototypeFactory(FixtureB247::class, static function () {
            return new FixtureB247();
        });

        $container->prototypeFactory(FixtureB248::class, static function () {
            return new FixtureB248();
        });

        $container->prototypeFactory(FixtureB249::class, static function () {
            return new FixtureB249();
        });

        $container->prototypeFactory(FixtureB250::class, static function () {
            return new FixtureB250();
        });

        $container->prototypeFactory(FixtureB251::class, static function () {
            return new FixtureB251();
        });

        $container->prototypeFactory(FixtureB252::class, static function () {
            return new FixtureB252();
        });

        $container->prototypeFactory(FixtureB253::class, static function () {
            return new FixtureB253();
        });

        $container->prototypeFactory(FixtureB254::class, static function () {
            return new FixtureB254();
        });

        $container->prototypeFactory(FixtureB255::class, static function () {
            return new FixtureB255();
        });

        $container->prototypeFactory(FixtureB256::class, static function () {
            return new FixtureB256();
        });

        $container->prototypeFactory(FixtureB257::class, static function () {
            return new FixtureB257();
        });

        $container->prototypeFactory(FixtureB258::class, static function () {
            return new FixtureB258();
        });

        $container->prototypeFactory(FixtureB259::class, static function () {
            return new FixtureB259();
        });

        $container->prototypeFactory(FixtureB260::class, static function () {
            return new FixtureB260();
        });

        $container->prototypeFactory(FixtureB261::class, static function () {
            return new FixtureB261();
        });

        $container->prototypeFactory(FixtureB262::class, static function () {
            return new FixtureB262();
        });

        $container->prototypeFactory(FixtureB263::class, static function () {
            return new FixtureB263();
        });

        $container->prototypeFactory(FixtureB264::class, static function () {
            return new FixtureB264();
        });

        $container->prototypeFactory(FixtureB265::class, static function () {
            return new FixtureB265();
        });

        $container->prototypeFactory(FixtureB266::class, static function () {
            return new FixtureB266();
        });

        $container->prototypeFactory(FixtureB267::class, static function () {
            return new FixtureB267();
        });

        $container->prototypeFactory(FixtureB268::class, static function () {
            return new FixtureB268();
        });

        $container->prototypeFactory(FixtureB269::class, static function () {
            return new FixtureB269();
        });

        $container->prototypeFactory(FixtureB270::class, static function () {
            return new FixtureB270();
        });

        $container->prototypeFactory(FixtureB271::class, static function () {
            return new FixtureB271();
        });

        $container->prototypeFactory(FixtureB272::class, static function () {
            return new FixtureB272();
        });

        $container->prototypeFactory(FixtureB273::class, static function () {
            return new FixtureB273();
        });

        $container->prototypeFactory(FixtureB274::class, static function () {
            return new FixtureB274();
        });

        $container->prototypeFactory(FixtureB275::class, static function () {
            return new FixtureB275();
        });

        $container->prototypeFactory(FixtureB276::class, static function () {
            return new FixtureB276();
        });

        $container->prototypeFactory(FixtureB277::class, static function () {
            return new FixtureB277();
        });

        $container->prototypeFactory(FixtureB278::class, static function () {
            return new FixtureB278();
        });

        $container->prototypeFactory(FixtureB279::class, static function () {
            return new FixtureB279();
        });

        $container->prototypeFactory(FixtureB280::class, static function () {
            return new FixtureB280();
        });

        $container->prototypeFactory(FixtureB281::class, static function () {
            return new FixtureB281();
        });

        $container->prototypeFactory(FixtureB282::class, static function () {
            return new FixtureB282();
        });

        $container->prototypeFactory(FixtureB283::class, static function () {
            return new FixtureB283();
        });

        $container->prototypeFactory(FixtureB284::class, static function () {
            return new FixtureB284();
        });

        $container->prototypeFactory(FixtureB285::class, static function () {
            return new FixtureB285();
        });

        $container->prototypeFactory(FixtureB286::class, static function () {
            return new FixtureB286();
        });

        $container->prototypeFactory(FixtureB287::class, static function () {
            return new FixtureB287();
        });

        $container->prototypeFactory(FixtureB288::class, static function () {
            return new FixtureB288();
        });

        $container->prototypeFactory(FixtureB289::class, static function () {
            return new FixtureB289();
        });

        $container->prototypeFactory(FixtureB290::class, static function () {
            return new FixtureB290();
        });

        $container->prototypeFactory(FixtureB291::class, static function () {
            return new FixtureB291();
        });

        $container->prototypeFactory(FixtureB292::class, static function () {
            return new FixtureB292();
        });

        $container->prototypeFactory(FixtureB293::class, static function () {
            return new FixtureB293();
        });

        $container->prototypeFactory(FixtureB294::class, static function () {
            return new FixtureB294();
        });

        $container->prototypeFactory(FixtureB295::class, static function () {
            return new FixtureB295();
        });

        $container->prototypeFactory(FixtureB296::class, static function () {
            return new FixtureB296();
        });

        $container->prototypeFactory(FixtureB297::class, static function () {
            return new FixtureB297();
        });

        $container->prototypeFactory(FixtureB298::class, static function () {
            return new FixtureB298();
        });

        $container->prototypeFactory(FixtureB299::class, static function () {
            return new FixtureB299();
        });

        $container->prototypeFactory(FixtureB300::class, static function () {
            return new FixtureB300();
        });

        $container->prototypeFactory(FixtureB301::class, static function () {
            return new FixtureB301();
        });

        $container->prototypeFactory(FixtureB302::class, static function () {
            return new FixtureB302();
        });

        $container->prototypeFactory(FixtureB303::class, static function () {
            return new FixtureB303();
        });

        $container->prototypeFactory(FixtureB304::class, static function () {
            return new FixtureB304();
        });

        $container->prototypeFactory(FixtureB305::class, static function () {
            return new FixtureB305();
        });

        $container->prototypeFactory(FixtureB306::class, static function () {
            return new FixtureB306();
        });

        $container->prototypeFactory(FixtureB307::class, static function () {
            return new FixtureB307();
        });

        $container->prototypeFactory(FixtureB308::class, static function () {
            return new FixtureB308();
        });

        $container->prototypeFactory(FixtureB309::class, static function () {
            return new FixtureB309();
        });

        $container->prototypeFactory(FixtureB310::class, static function () {
            return new FixtureB310();
        });

        $container->prototypeFactory(FixtureB311::class, static function () {
            return new FixtureB311();
        });

        $container->prototypeFactory(FixtureB312::class, static function () {
            return new FixtureB312();
        });

        $container->prototypeFactory(FixtureB313::class, static function () {
            return new FixtureB313();
        });

        $container->prototypeFactory(FixtureB314::class, static function () {
            return new FixtureB314();
        });

        $container->prototypeFactory(FixtureB315::class, static function () {
            return new FixtureB315();
        });

        $container->prototypeFactory(FixtureB316::class, static function () {
            return new FixtureB316();
        });

        $container->prototypeFactory(FixtureB317::class, static function () {
            return new FixtureB317();
        });

        $container->prototypeFactory(FixtureB318::class, static function () {
            return new FixtureB318();
        });

        $container->prototypeFactory(FixtureB319::class, static function () {
            return new FixtureB319();
        });

        $container->prototypeFactory(FixtureB320::class, static function () {
            return new FixtureB320();
        });

        $container->prototypeFactory(FixtureB321::class, static function () {
            return new FixtureB321();
        });

        $container->prototypeFactory(FixtureB322::class, static function () {
            return new FixtureB322();
        });

        $container->prototypeFactory(FixtureB323::class, static function () {
            return new FixtureB323();
        });

        $container->prototypeFactory(FixtureB324::class, static function () {
            return new FixtureB324();
        });

        $container->prototypeFactory(FixtureB325::class, static function () {
            return new FixtureB325();
        });

        $container->prototypeFactory(FixtureB326::class, static function () {
            return new FixtureB326();
        });

        $container->prototypeFactory(FixtureB327::class, static function () {
            return new FixtureB327();
        });

        $container->prototypeFactory(FixtureB328::class, static function () {
            return new FixtureB328();
        });

        $container->prototypeFactory(FixtureB329::class, static function () {
            return new FixtureB329();
        });

        $container->prototypeFactory(FixtureB330::class, static function () {
            return new FixtureB330();
        });

        $container->prototypeFactory(FixtureB331::class, static function () {
            return new FixtureB331();
        });

        $container->prototypeFactory(FixtureB332::class, static function () {
            return new FixtureB332();
        });

        $container->prototypeFactory(FixtureB333::class, static function () {
            return new FixtureB333();
        });

        $container->prototypeFactory(FixtureB334::class, static function () {
            return new FixtureB334();
        });

        $container->prototypeFactory(FixtureB335::class, static function () {
            return new FixtureB335();
        });

        $container->prototypeFactory(FixtureB336::class, static function () {
            return new FixtureB336();
        });

        $container->prototypeFactory(FixtureB337::class, static function () {
            return new FixtureB337();
        });

        $container->prototypeFactory(FixtureB338::class, static function () {
            return new FixtureB338();
        });

        $container->prototypeFactory(FixtureB339::class, static function () {
            return new FixtureB339();
        });

        $container->prototypeFactory(FixtureB340::class, static function () {
            return new FixtureB340();
        });

        $container->prototypeFactory(FixtureB341::class, static function () {
            return new FixtureB341();
        });

        $container->prototypeFactory(FixtureB342::class, static function () {
            return new FixtureB342();
        });

        $container->prototypeFactory(FixtureB343::class, static function () {
            return new FixtureB343();
        });

        $container->prototypeFactory(FixtureB344::class, static function () {
            return new FixtureB344();
        });

        $container->prototypeFactory(FixtureB345::class, static function () {
            return new FixtureB345();
        });

        $container->prototypeFactory(FixtureB346::class, static function () {
            return new FixtureB346();
        });

        $container->prototypeFactory(FixtureB347::class, static function () {
            return new FixtureB347();
        });

        $container->prototypeFactory(FixtureB348::class, static function () {
            return new FixtureB348();
        });

        $container->prototypeFactory(FixtureB349::class, static function () {
            return new FixtureB349();
        });

        $container->prototypeFactory(FixtureB350::class, static function () {
            return new FixtureB350();
        });

        $container->prototypeFactory(FixtureB351::class, static function () {
            return new FixtureB351();
        });

        $container->prototypeFactory(FixtureB352::class, static function () {
            return new FixtureB352();
        });

        $container->prototypeFactory(FixtureB353::class, static function () {
            return new FixtureB353();
        });

        $container->prototypeFactory(FixtureB354::class, static function () {
            return new FixtureB354();
        });

        $container->prototypeFactory(FixtureB355::class, static function () {
            return new FixtureB355();
        });

        $container->prototypeFactory(FixtureB356::class, static function () {
            return new FixtureB356();
        });

        $container->prototypeFactory(FixtureB357::class, static function () {
            return new FixtureB357();
        });

        $container->prototypeFactory(FixtureB358::class, static function () {
            return new FixtureB358();
        });

        $container->prototypeFactory(FixtureB359::class, static function () {
            return new FixtureB359();
        });

        $container->prototypeFactory(FixtureB360::class, static function () {
            return new FixtureB360();
        });

        $container->prototypeFactory(FixtureB361::class, static function () {
            return new FixtureB361();
        });

        $container->prototypeFactory(FixtureB362::class, static function () {
            return new FixtureB362();
        });

        $container->prototypeFactory(FixtureB363::class, static function () {
            return new FixtureB363();
        });

        $container->prototypeFactory(FixtureB364::class, static function () {
            return new FixtureB364();
        });

        $container->prototypeFactory(FixtureB365::class, static function () {
            return new FixtureB365();
        });

        $container->prototypeFactory(FixtureB366::class, static function () {
            return new FixtureB366();
        });

        $container->prototypeFactory(FixtureB367::class, static function () {
            return new FixtureB367();
        });

        $container->prototypeFactory(FixtureB368::class, static function () {
            return new FixtureB368();
        });

        $container->prototypeFactory(FixtureB369::class, static function () {
            return new FixtureB369();
        });

        $container->prototypeFactory(FixtureB370::class, static function () {
            return new FixtureB370();
        });

        $container->prototypeFactory(FixtureB371::class, static function () {
            return new FixtureB371();
        });

        $container->prototypeFactory(FixtureB372::class, static function () {
            return new FixtureB372();
        });

        $container->prototypeFactory(FixtureB373::class, static function () {
            return new FixtureB373();
        });

        $container->prototypeFactory(FixtureB374::class, static function () {
            return new FixtureB374();
        });

        $container->prototypeFactory(FixtureB375::class, static function () {
            return new FixtureB375();
        });

        $container->prototypeFactory(FixtureB376::class, static function () {
            return new FixtureB376();
        });

        $container->prototypeFactory(FixtureB377::class, static function () {
            return new FixtureB377();
        });

        $container->prototypeFactory(FixtureB378::class, static function () {
            return new FixtureB378();
        });

        $container->prototypeFactory(FixtureB379::class, static function () {
            return new FixtureB379();
        });

        $container->prototypeFactory(FixtureB380::class, static function () {
            return new FixtureB380();
        });

        $container->prototypeFactory(FixtureB381::class, static function () {
            return new FixtureB381();
        });

        $container->prototypeFactory(FixtureB382::class, static function () {
            return new FixtureB382();
        });

        $container->prototypeFactory(FixtureB383::class, static function () {
            return new FixtureB383();
        });

        $container->prototypeFactory(FixtureB384::class, static function () {
            return new FixtureB384();
        });

        $container->prototypeFactory(FixtureB385::class, static function () {
            return new FixtureB385();
        });

        $container->prototypeFactory(FixtureB386::class, static function () {
            return new FixtureB386();
        });

        $container->prototypeFactory(FixtureB387::class, static function () {
            return new FixtureB387();
        });

        $container->prototypeFactory(FixtureB388::class, static function () {
            return new FixtureB388();
        });

        $container->prototypeFactory(FixtureB389::class, static function () {
            return new FixtureB389();
        });

        $container->prototypeFactory(FixtureB390::class, static function () {
            return new FixtureB390();
        });

        $container->prototypeFactory(FixtureB391::class, static function () {
            return new FixtureB391();
        });

        $container->prototypeFactory(FixtureB392::class, static function () {
            return new FixtureB392();
        });

        $container->prototypeFactory(FixtureB393::class, static function () {
            return new FixtureB393();
        });

        $container->prototypeFactory(FixtureB394::class, static function () {
            return new FixtureB394();
        });

        $container->prototypeFactory(FixtureB395::class, static function () {
            return new FixtureB395();
        });

        $container->prototypeFactory(FixtureB396::class, static function () {
            return new FixtureB396();
        });

        $container->prototypeFactory(FixtureB397::class, static function () {
            return new FixtureB397();
        });

        $container->prototypeFactory(FixtureB398::class, static function () {
            return new FixtureB398();
        });

        $container->prototypeFactory(FixtureB399::class, static function () {
            return new FixtureB399();
        });

        $container->prototypeFactory(FixtureB400::class, static function () {
            return new FixtureB400();
        });

        $container->prototypeFactory(FixtureB401::class, static function () {
            return new FixtureB401();
        });

        $container->prototypeFactory(FixtureB402::class, static function () {
            return new FixtureB402();
        });

        $container->prototypeFactory(FixtureB403::class, static function () {
            return new FixtureB403();
        });

        $container->prototypeFactory(FixtureB404::class, static function () {
            return new FixtureB404();
        });

        $container->prototypeFactory(FixtureB405::class, static function () {
            return new FixtureB405();
        });

        $container->prototypeFactory(FixtureB406::class, static function () {
            return new FixtureB406();
        });

        $container->prototypeFactory(FixtureB407::class, static function () {
            return new FixtureB407();
        });

        $container->prototypeFactory(FixtureB408::class, static function () {
            return new FixtureB408();
        });

        $container->prototypeFactory(FixtureB409::class, static function () {
            return new FixtureB409();
        });

        $container->prototypeFactory(FixtureB410::class, static function () {
            return new FixtureB410();
        });

        $container->prototypeFactory(FixtureB411::class, static function () {
            return new FixtureB411();
        });

        $container->prototypeFactory(FixtureB412::class, static function () {
            return new FixtureB412();
        });

        $container->prototypeFactory(FixtureB413::class, static function () {
            return new FixtureB413();
        });

        $container->prototypeFactory(FixtureB414::class, static function () {
            return new FixtureB414();
        });

        $container->prototypeFactory(FixtureB415::class, static function () {
            return new FixtureB415();
        });

        $container->prototypeFactory(FixtureB416::class, static function () {
            return new FixtureB416();
        });

        $container->prototypeFactory(FixtureB417::class, static function () {
            return new FixtureB417();
        });

        $container->prototypeFactory(FixtureB418::class, static function () {
            return new FixtureB418();
        });

        $container->prototypeFactory(FixtureB419::class, static function () {
            return new FixtureB419();
        });

        $container->prototypeFactory(FixtureB420::class, static function () {
            return new FixtureB420();
        });

        $container->prototypeFactory(FixtureB421::class, static function () {
            return new FixtureB421();
        });

        $container->prototypeFactory(FixtureB422::class, static function () {
            return new FixtureB422();
        });

        $container->prototypeFactory(FixtureB423::class, static function () {
            return new FixtureB423();
        });

        $container->prototypeFactory(FixtureB424::class, static function () {
            return new FixtureB424();
        });

        $container->prototypeFactory(FixtureB425::class, static function () {
            return new FixtureB425();
        });

        $container->prototypeFactory(FixtureB426::class, static function () {
            return new FixtureB426();
        });

        $container->prototypeFactory(FixtureB427::class, static function () {
            return new FixtureB427();
        });

        $container->prototypeFactory(FixtureB428::class, static function () {
            return new FixtureB428();
        });

        $container->prototypeFactory(FixtureB429::class, static function () {
            return new FixtureB429();
        });

        $container->prototypeFactory(FixtureB430::class, static function () {
            return new FixtureB430();
        });

        $container->prototypeFactory(FixtureB431::class, static function () {
            return new FixtureB431();
        });

        $container->prototypeFactory(FixtureB432::class, static function () {
            return new FixtureB432();
        });

        $container->prototypeFactory(FixtureB433::class, static function () {
            return new FixtureB433();
        });

        $container->prototypeFactory(FixtureB434::class, static function () {
            return new FixtureB434();
        });

        $container->prototypeFactory(FixtureB435::class, static function () {
            return new FixtureB435();
        });

        $container->prototypeFactory(FixtureB436::class, static function () {
            return new FixtureB436();
        });

        $container->prototypeFactory(FixtureB437::class, static function () {
            return new FixtureB437();
        });

        $container->prototypeFactory(FixtureB438::class, static function () {
            return new FixtureB438();
        });

        $container->prototypeFactory(FixtureB439::class, static function () {
            return new FixtureB439();
        });

        $container->prototypeFactory(FixtureB440::class, static function () {
            return new FixtureB440();
        });

        $container->prototypeFactory(FixtureB441::class, static function () {
            return new FixtureB441();
        });

        $container->prototypeFactory(FixtureB442::class, static function () {
            return new FixtureB442();
        });

        $container->prototypeFactory(FixtureB443::class, static function () {
            return new FixtureB443();
        });

        $container->prototypeFactory(FixtureB444::class, static function () {
            return new FixtureB444();
        });

        $container->prototypeFactory(FixtureB445::class, static function () {
            return new FixtureB445();
        });

        $container->prototypeFactory(FixtureB446::class, static function () {
            return new FixtureB446();
        });

        $container->prototypeFactory(FixtureB447::class, static function () {
            return new FixtureB447();
        });

        $container->prototypeFactory(FixtureB448::class, static function () {
            return new FixtureB448();
        });

        $container->prototypeFactory(FixtureB449::class, static function () {
            return new FixtureB449();
        });

        $container->prototypeFactory(FixtureB450::class, static function () {
            return new FixtureB450();
        });

        $container->prototypeFactory(FixtureB451::class, static function () {
            return new FixtureB451();
        });

        $container->prototypeFactory(FixtureB452::class, static function () {
            return new FixtureB452();
        });

        $container->prototypeFactory(FixtureB453::class, static function () {
            return new FixtureB453();
        });

        $container->prototypeFactory(FixtureB454::class, static function () {
            return new FixtureB454();
        });

        $container->prototypeFactory(FixtureB455::class, static function () {
            return new FixtureB455();
        });

        $container->prototypeFactory(FixtureB456::class, static function () {
            return new FixtureB456();
        });

        $container->prototypeFactory(FixtureB457::class, static function () {
            return new FixtureB457();
        });

        $container->prototypeFactory(FixtureB458::class, static function () {
            return new FixtureB458();
        });

        $container->prototypeFactory(FixtureB459::class, static function () {
            return new FixtureB459();
        });

        $container->prototypeFactory(FixtureB460::class, static function () {
            return new FixtureB460();
        });

        $container->prototypeFactory(FixtureB461::class, static function () {
            return new FixtureB461();
        });

        $container->prototypeFactory(FixtureB462::class, static function () {
            return new FixtureB462();
        });

        $container->prototypeFactory(FixtureB463::class, static function () {
            return new FixtureB463();
        });

        $container->prototypeFactory(FixtureB464::class, static function () {
            return new FixtureB464();
        });

        $container->prototypeFactory(FixtureB465::class, static function () {
            return new FixtureB465();
        });

        $container->prototypeFactory(FixtureB466::class, static function () {
            return new FixtureB466();
        });

        $container->prototypeFactory(FixtureB467::class, static function () {
            return new FixtureB467();
        });

        $container->prototypeFactory(FixtureB468::class, static function () {
            return new FixtureB468();
        });

        $container->prototypeFactory(FixtureB469::class, static function () {
            return new FixtureB469();
        });

        $container->prototypeFactory(FixtureB470::class, static function () {
            return new FixtureB470();
        });

        $container->prototypeFactory(FixtureB471::class, static function () {
            return new FixtureB471();
        });

        $container->prototypeFactory(FixtureB472::class, static function () {
            return new FixtureB472();
        });

        $container->prototypeFactory(FixtureB473::class, static function () {
            return new FixtureB473();
        });

        $container->prototypeFactory(FixtureB474::class, static function () {
            return new FixtureB474();
        });

        $container->prototypeFactory(FixtureB475::class, static function () {
            return new FixtureB475();
        });

        $container->prototypeFactory(FixtureB476::class, static function () {
            return new FixtureB476();
        });

        $container->prototypeFactory(FixtureB477::class, static function () {
            return new FixtureB477();
        });

        $container->prototypeFactory(FixtureB478::class, static function () {
            return new FixtureB478();
        });

        $container->prototypeFactory(FixtureB479::class, static function () {
            return new FixtureB479();
        });

        $container->prototypeFactory(FixtureB480::class, static function () {
            return new FixtureB480();
        });

        $container->prototypeFactory(FixtureB481::class, static function () {
            return new FixtureB481();
        });

        $container->prototypeFactory(FixtureB482::class, static function () {
            return new FixtureB482();
        });

        $container->prototypeFactory(FixtureB483::class, static function () {
            return new FixtureB483();
        });

        $container->prototypeFactory(FixtureB484::class, static function () {
            return new FixtureB484();
        });

        $container->prototypeFactory(FixtureB485::class, static function () {
            return new FixtureB485();
        });

        $container->prototypeFactory(FixtureB486::class, static function () {
            return new FixtureB486();
        });

        $container->prototypeFactory(FixtureB487::class, static function () {
            return new FixtureB487();
        });

        $container->prototypeFactory(FixtureB488::class, static function () {
            return new FixtureB488();
        });

        $container->prototypeFactory(FixtureB489::class, static function () {
            return new FixtureB489();
        });

        $container->prototypeFactory(FixtureB490::class, static function () {
            return new FixtureB490();
        });

        $container->prototypeFactory(FixtureB491::class, static function () {
            return new FixtureB491();
        });

        $container->prototypeFactory(FixtureB492::class, static function () {
            return new FixtureB492();
        });

        $container->prototypeFactory(FixtureB493::class, static function () {
            return new FixtureB493();
        });

        $container->prototypeFactory(FixtureB494::class, static function () {
            return new FixtureB494();
        });

        $container->prototypeFactory(FixtureB495::class, static function () {
            return new FixtureB495();
        });

        $container->prototypeFactory(FixtureB496::class, static function () {
            return new FixtureB496();
        });

        $container->prototypeFactory(FixtureB497::class, static function () {
            return new FixtureB497();
        });

        $container->prototypeFactory(FixtureB498::class, static function () {
            return new FixtureB498();
        });

        $container->prototypeFactory(FixtureB499::class, static function () {
            return new FixtureB499();
        });

        $container->prototypeFactory(FixtureB500::class, static function () {
            return new FixtureB500();
        });

        $container->prototypeFactory(FixtureB501::class, static function () {
            return new FixtureB501();
        });

        $container->prototypeFactory(FixtureB502::class, static function () {
            return new FixtureB502();
        });

        $container->prototypeFactory(FixtureB503::class, static function () {
            return new FixtureB503();
        });

        $container->prototypeFactory(FixtureB504::class, static function () {
            return new FixtureB504();
        });

        $container->prototypeFactory(FixtureB505::class, static function () {
            return new FixtureB505();
        });

        $container->prototypeFactory(FixtureB506::class, static function () {
            return new FixtureB506();
        });

        $container->prototypeFactory(FixtureB507::class, static function () {
            return new FixtureB507();
        });

        $container->prototypeFactory(FixtureB508::class, static function () {
            return new FixtureB508();
        });

        $container->prototypeFactory(FixtureB509::class, static function () {
            return new FixtureB509();
        });

        $container->prototypeFactory(FixtureB510::class, static function () {
            return new FixtureB510();
        });

        $container->prototypeFactory(FixtureB511::class, static function () {
            return new FixtureB511();
        });

        $container->prototypeFactory(FixtureB512::class, static function () {
            return new FixtureB512();
        });

        $container->prototypeFactory(FixtureB513::class, static function () {
            return new FixtureB513();
        });

        $container->prototypeFactory(FixtureB514::class, static function () {
            return new FixtureB514();
        });

        $container->prototypeFactory(FixtureB515::class, static function () {
            return new FixtureB515();
        });

        $container->prototypeFactory(FixtureB516::class, static function () {
            return new FixtureB516();
        });

        $container->prototypeFactory(FixtureB517::class, static function () {
            return new FixtureB517();
        });

        $container->prototypeFactory(FixtureB518::class, static function () {
            return new FixtureB518();
        });

        $container->prototypeFactory(FixtureB519::class, static function () {
            return new FixtureB519();
        });

        $container->prototypeFactory(FixtureB520::class, static function () {
            return new FixtureB520();
        });

        $container->prototypeFactory(FixtureB521::class, static function () {
            return new FixtureB521();
        });

        $container->prototypeFactory(FixtureB522::class, static function () {
            return new FixtureB522();
        });

        $container->prototypeFactory(FixtureB523::class, static function () {
            return new FixtureB523();
        });

        $container->prototypeFactory(FixtureB524::class, static function () {
            return new FixtureB524();
        });

        $container->prototypeFactory(FixtureB525::class, static function () {
            return new FixtureB525();
        });

        $container->prototypeFactory(FixtureB526::class, static function () {
            return new FixtureB526();
        });

        $container->prototypeFactory(FixtureB527::class, static function () {
            return new FixtureB527();
        });

        $container->prototypeFactory(FixtureB528::class, static function () {
            return new FixtureB528();
        });

        $container->prototypeFactory(FixtureB529::class, static function () {
            return new FixtureB529();
        });

        $container->prototypeFactory(FixtureB530::class, static function () {
            return new FixtureB530();
        });

        $container->prototypeFactory(FixtureB531::class, static function () {
            return new FixtureB531();
        });

        $container->prototypeFactory(FixtureB532::class, static function () {
            return new FixtureB532();
        });

        $container->prototypeFactory(FixtureB533::class, static function () {
            return new FixtureB533();
        });

        $container->prototypeFactory(FixtureB534::class, static function () {
            return new FixtureB534();
        });

        $container->prototypeFactory(FixtureB535::class, static function () {
            return new FixtureB535();
        });

        $container->prototypeFactory(FixtureB536::class, static function () {
            return new FixtureB536();
        });

        $container->prototypeFactory(FixtureB537::class, static function () {
            return new FixtureB537();
        });

        $container->prototypeFactory(FixtureB538::class, static function () {
            return new FixtureB538();
        });

        $container->prototypeFactory(FixtureB539::class, static function () {
            return new FixtureB539();
        });

        $container->prototypeFactory(FixtureB540::class, static function () {
            return new FixtureB540();
        });

        $container->prototypeFactory(FixtureB541::class, static function () {
            return new FixtureB541();
        });

        $container->prototypeFactory(FixtureB542::class, static function () {
            return new FixtureB542();
        });

        $container->prototypeFactory(FixtureB543::class, static function () {
            return new FixtureB543();
        });

        $container->prototypeFactory(FixtureB544::class, static function () {
            return new FixtureB544();
        });

        $container->prototypeFactory(FixtureB545::class, static function () {
            return new FixtureB545();
        });

        $container->prototypeFactory(FixtureB546::class, static function () {
            return new FixtureB546();
        });

        $container->prototypeFactory(FixtureB547::class, static function () {
            return new FixtureB547();
        });

        $container->prototypeFactory(FixtureB548::class, static function () {
            return new FixtureB548();
        });

        $container->prototypeFactory(FixtureB549::class, static function () {
            return new FixtureB549();
        });

        $container->prototypeFactory(FixtureB550::class, static function () {
            return new FixtureB550();
        });

        $container->prototypeFactory(FixtureB551::class, static function () {
            return new FixtureB551();
        });

        $container->prototypeFactory(FixtureB552::class, static function () {
            return new FixtureB552();
        });

        $container->prototypeFactory(FixtureB553::class, static function () {
            return new FixtureB553();
        });

        $container->prototypeFactory(FixtureB554::class, static function () {
            return new FixtureB554();
        });

        $container->prototypeFactory(FixtureB555::class, static function () {
            return new FixtureB555();
        });

        $container->prototypeFactory(FixtureB556::class, static function () {
            return new FixtureB556();
        });

        $container->prototypeFactory(FixtureB557::class, static function () {
            return new FixtureB557();
        });

        $container->prototypeFactory(FixtureB558::class, static function () {
            return new FixtureB558();
        });

        $container->prototypeFactory(FixtureB559::class, static function () {
            return new FixtureB559();
        });

        $container->prototypeFactory(FixtureB560::class, static function () {
            return new FixtureB560();
        });

        $container->prototypeFactory(FixtureB561::class, static function () {
            return new FixtureB561();
        });

        $container->prototypeFactory(FixtureB562::class, static function () {
            return new FixtureB562();
        });

        $container->prototypeFactory(FixtureB563::class, static function () {
            return new FixtureB563();
        });

        $container->prototypeFactory(FixtureB564::class, static function () {
            return new FixtureB564();
        });

        $container->prototypeFactory(FixtureB565::class, static function () {
            return new FixtureB565();
        });

        $container->prototypeFactory(FixtureB566::class, static function () {
            return new FixtureB566();
        });

        $container->prototypeFactory(FixtureB567::class, static function () {
            return new FixtureB567();
        });

        $container->prototypeFactory(FixtureB568::class, static function () {
            return new FixtureB568();
        });

        $container->prototypeFactory(FixtureB569::class, static function () {
            return new FixtureB569();
        });

        $container->prototypeFactory(FixtureB570::class, static function () {
            return new FixtureB570();
        });

        $container->prototypeFactory(FixtureB571::class, static function () {
            return new FixtureB571();
        });

        $container->prototypeFactory(FixtureB572::class, static function () {
            return new FixtureB572();
        });

        $container->prototypeFactory(FixtureB573::class, static function () {
            return new FixtureB573();
        });

        $container->prototypeFactory(FixtureB574::class, static function () {
            return new FixtureB574();
        });

        $container->prototypeFactory(FixtureB575::class, static function () {
            return new FixtureB575();
        });

        $container->prototypeFactory(FixtureB576::class, static function () {
            return new FixtureB576();
        });

        $container->prototypeFactory(FixtureB577::class, static function () {
            return new FixtureB577();
        });

        $container->prototypeFactory(FixtureB578::class, static function () {
            return new FixtureB578();
        });

        $container->prototypeFactory(FixtureB579::class, static function () {
            return new FixtureB579();
        });

        $container->prototypeFactory(FixtureB580::class, static function () {
            return new FixtureB580();
        });

        $container->prototypeFactory(FixtureB581::class, static function () {
            return new FixtureB581();
        });

        $container->prototypeFactory(FixtureB582::class, static function () {
            return new FixtureB582();
        });

        $container->prototypeFactory(FixtureB583::class, static function () {
            return new FixtureB583();
        });

        $container->prototypeFactory(FixtureB584::class, static function () {
            return new FixtureB584();
        });

        $container->prototypeFactory(FixtureB585::class, static function () {
            return new FixtureB585();
        });

        $container->prototypeFactory(FixtureB586::class, static function () {
            return new FixtureB586();
        });

        $container->prototypeFactory(FixtureB587::class, static function () {
            return new FixtureB587();
        });

        $container->prototypeFactory(FixtureB588::class, static function () {
            return new FixtureB588();
        });

        $container->prototypeFactory(FixtureB589::class, static function () {
            return new FixtureB589();
        });

        $container->prototypeFactory(FixtureB590::class, static function () {
            return new FixtureB590();
        });

        $container->prototypeFactory(FixtureB591::class, static function () {
            return new FixtureB591();
        });

        $container->prototypeFactory(FixtureB592::class, static function () {
            return new FixtureB592();
        });

        $container->prototypeFactory(FixtureB593::class, static function () {
            return new FixtureB593();
        });

        $container->prototypeFactory(FixtureB594::class, static function () {
            return new FixtureB594();
        });

        $container->prototypeFactory(FixtureB595::class, static function () {
            return new FixtureB595();
        });

        $container->prototypeFactory(FixtureB596::class, static function () {
            return new FixtureB596();
        });

        $container->prototypeFactory(FixtureB597::class, static function () {
            return new FixtureB597();
        });

        $container->prototypeFactory(FixtureB598::class, static function () {
            return new FixtureB598();
        });

        $container->prototypeFactory(FixtureB599::class, static function () {
            return new FixtureB599();
        });

        $container->prototypeFactory(FixtureB600::class, static function () {
            return new FixtureB600();
        });

        $container->prototypeFactory(FixtureB601::class, static function () {
            return new FixtureB601();
        });

        $container->prototypeFactory(FixtureB602::class, static function () {
            return new FixtureB602();
        });

        $container->prototypeFactory(FixtureB603::class, static function () {
            return new FixtureB603();
        });

        $container->prototypeFactory(FixtureB604::class, static function () {
            return new FixtureB604();
        });

        $container->prototypeFactory(FixtureB605::class, static function () {
            return new FixtureB605();
        });

        $container->prototypeFactory(FixtureB606::class, static function () {
            return new FixtureB606();
        });

        $container->prototypeFactory(FixtureB607::class, static function () {
            return new FixtureB607();
        });

        $container->prototypeFactory(FixtureB608::class, static function () {
            return new FixtureB608();
        });

        $container->prototypeFactory(FixtureB609::class, static function () {
            return new FixtureB609();
        });

        $container->prototypeFactory(FixtureB610::class, static function () {
            return new FixtureB610();
        });

        $container->prototypeFactory(FixtureB611::class, static function () {
            return new FixtureB611();
        });

        $container->prototypeFactory(FixtureB612::class, static function () {
            return new FixtureB612();
        });

        $container->prototypeFactory(FixtureB613::class, static function () {
            return new FixtureB613();
        });

        $container->prototypeFactory(FixtureB614::class, static function () {
            return new FixtureB614();
        });

        $container->prototypeFactory(FixtureB615::class, static function () {
            return new FixtureB615();
        });

        $container->prototypeFactory(FixtureB616::class, static function () {
            return new FixtureB616();
        });

        $container->prototypeFactory(FixtureB617::class, static function () {
            return new FixtureB617();
        });

        $container->prototypeFactory(FixtureB618::class, static function () {
            return new FixtureB618();
        });

        $container->prototypeFactory(FixtureB619::class, static function () {
            return new FixtureB619();
        });

        $container->prototypeFactory(FixtureB620::class, static function () {
            return new FixtureB620();
        });

        $container->prototypeFactory(FixtureB621::class, static function () {
            return new FixtureB621();
        });

        $container->prototypeFactory(FixtureB622::class, static function () {
            return new FixtureB622();
        });

        $container->prototypeFactory(FixtureB623::class, static function () {
            return new FixtureB623();
        });

        $container->prototypeFactory(FixtureB624::class, static function () {
            return new FixtureB624();
        });

        $container->prototypeFactory(FixtureB625::class, static function () {
            return new FixtureB625();
        });

        $container->prototypeFactory(FixtureB626::class, static function () {
            return new FixtureB626();
        });

        $container->prototypeFactory(FixtureB627::class, static function () {
            return new FixtureB627();
        });

        $container->prototypeFactory(FixtureB628::class, static function () {
            return new FixtureB628();
        });

        $container->prototypeFactory(FixtureB629::class, static function () {
            return new FixtureB629();
        });

        $container->prototypeFactory(FixtureB630::class, static function () {
            return new FixtureB630();
        });

        $container->prototypeFactory(FixtureB631::class, static function () {
            return new FixtureB631();
        });

        $container->prototypeFactory(FixtureB632::class, static function () {
            return new FixtureB632();
        });

        $container->prototypeFactory(FixtureB633::class, static function () {
            return new FixtureB633();
        });

        $container->prototypeFactory(FixtureB634::class, static function () {
            return new FixtureB634();
        });

        $container->prototypeFactory(FixtureB635::class, static function () {
            return new FixtureB635();
        });

        $container->prototypeFactory(FixtureB636::class, static function () {
            return new FixtureB636();
        });

        $container->prototypeFactory(FixtureB637::class, static function () {
            return new FixtureB637();
        });

        $container->prototypeFactory(FixtureB638::class, static function () {
            return new FixtureB638();
        });

        $container->prototypeFactory(FixtureB639::class, static function () {
            return new FixtureB639();
        });

        $container->prototypeFactory(FixtureB640::class, static function () {
            return new FixtureB640();
        });

        $container->prototypeFactory(FixtureB641::class, static function () {
            return new FixtureB641();
        });

        $container->prototypeFactory(FixtureB642::class, static function () {
            return new FixtureB642();
        });

        $container->prototypeFactory(FixtureB643::class, static function () {
            return new FixtureB643();
        });

        $container->prototypeFactory(FixtureB644::class, static function () {
            return new FixtureB644();
        });

        $container->prototypeFactory(FixtureB645::class, static function () {
            return new FixtureB645();
        });

        $container->prototypeFactory(FixtureB646::class, static function () {
            return new FixtureB646();
        });

        $container->prototypeFactory(FixtureB647::class, static function () {
            return new FixtureB647();
        });

        $container->prototypeFactory(FixtureB648::class, static function () {
            return new FixtureB648();
        });

        $container->prototypeFactory(FixtureB649::class, static function () {
            return new FixtureB649();
        });

        $container->prototypeFactory(FixtureB650::class, static function () {
            return new FixtureB650();
        });

        $container->prototypeFactory(FixtureB651::class, static function () {
            return new FixtureB651();
        });

        $container->prototypeFactory(FixtureB652::class, static function () {
            return new FixtureB652();
        });

        $container->prototypeFactory(FixtureB653::class, static function () {
            return new FixtureB653();
        });

        $container->prototypeFactory(FixtureB654::class, static function () {
            return new FixtureB654();
        });

        $container->prototypeFactory(FixtureB655::class, static function () {
            return new FixtureB655();
        });

        $container->prototypeFactory(FixtureB656::class, static function () {
            return new FixtureB656();
        });

        $container->prototypeFactory(FixtureB657::class, static function () {
            return new FixtureB657();
        });

        $container->prototypeFactory(FixtureB658::class, static function () {
            return new FixtureB658();
        });

        $container->prototypeFactory(FixtureB659::class, static function () {
            return new FixtureB659();
        });

        $container->prototypeFactory(FixtureB660::class, static function () {
            return new FixtureB660();
        });

        $container->prototypeFactory(FixtureB661::class, static function () {
            return new FixtureB661();
        });

        $container->prototypeFactory(FixtureB662::class, static function () {
            return new FixtureB662();
        });

        $container->prototypeFactory(FixtureB663::class, static function () {
            return new FixtureB663();
        });

        $container->prototypeFactory(FixtureB664::class, static function () {
            return new FixtureB664();
        });

        $container->prototypeFactory(FixtureB665::class, static function () {
            return new FixtureB665();
        });

        $container->prototypeFactory(FixtureB666::class, static function () {
            return new FixtureB666();
        });

        $container->prototypeFactory(FixtureB667::class, static function () {
            return new FixtureB667();
        });

        $container->prototypeFactory(FixtureB668::class, static function () {
            return new FixtureB668();
        });

        $container->prototypeFactory(FixtureB669::class, static function () {
            return new FixtureB669();
        });

        $container->prototypeFactory(FixtureB670::class, static function () {
            return new FixtureB670();
        });

        $container->prototypeFactory(FixtureB671::class, static function () {
            return new FixtureB671();
        });

        $container->prototypeFactory(FixtureB672::class, static function () {
            return new FixtureB672();
        });

        $container->prototypeFactory(FixtureB673::class, static function () {
            return new FixtureB673();
        });

        $container->prototypeFactory(FixtureB674::class, static function () {
            return new FixtureB674();
        });

        $container->prototypeFactory(FixtureB675::class, static function () {
            return new FixtureB675();
        });

        $container->prototypeFactory(FixtureB676::class, static function () {
            return new FixtureB676();
        });

        $container->prototypeFactory(FixtureB677::class, static function () {
            return new FixtureB677();
        });

        $container->prototypeFactory(FixtureB678::class, static function () {
            return new FixtureB678();
        });

        $container->prototypeFactory(FixtureB679::class, static function () {
            return new FixtureB679();
        });

        $container->prototypeFactory(FixtureB680::class, static function () {
            return new FixtureB680();
        });

        $container->prototypeFactory(FixtureB681::class, static function () {
            return new FixtureB681();
        });

        $container->prototypeFactory(FixtureB682::class, static function () {
            return new FixtureB682();
        });

        $container->prototypeFactory(FixtureB683::class, static function () {
            return new FixtureB683();
        });

        $container->prototypeFactory(FixtureB684::class, static function () {
            return new FixtureB684();
        });

        $container->prototypeFactory(FixtureB685::class, static function () {
            return new FixtureB685();
        });

        $container->prototypeFactory(FixtureB686::class, static function () {
            return new FixtureB686();
        });

        $container->prototypeFactory(FixtureB687::class, static function () {
            return new FixtureB687();
        });

        $container->prototypeFactory(FixtureB688::class, static function () {
            return new FixtureB688();
        });

        $container->prototypeFactory(FixtureB689::class, static function () {
            return new FixtureB689();
        });

        $container->prototypeFactory(FixtureB690::class, static function () {
            return new FixtureB690();
        });

        $container->prototypeFactory(FixtureB691::class, static function () {
            return new FixtureB691();
        });

        $container->prototypeFactory(FixtureB692::class, static function () {
            return new FixtureB692();
        });

        $container->prototypeFactory(FixtureB693::class, static function () {
            return new FixtureB693();
        });

        $container->prototypeFactory(FixtureB694::class, static function () {
            return new FixtureB694();
        });

        $container->prototypeFactory(FixtureB695::class, static function () {
            return new FixtureB695();
        });

        $container->prototypeFactory(FixtureB696::class, static function () {
            return new FixtureB696();
        });

        $container->prototypeFactory(FixtureB697::class, static function () {
            return new FixtureB697();
        });

        $container->prototypeFactory(FixtureB698::class, static function () {
            return new FixtureB698();
        });

        $container->prototypeFactory(FixtureB699::class, static function () {
            return new FixtureB699();
        });

        $container->prototypeFactory(FixtureB700::class, static function () {
            return new FixtureB700();
        });

        $container->prototypeFactory(FixtureB701::class, static function () {
            return new FixtureB701();
        });

        $container->prototypeFactory(FixtureB702::class, static function () {
            return new FixtureB702();
        });

        $container->prototypeFactory(FixtureB703::class, static function () {
            return new FixtureB703();
        });

        $container->prototypeFactory(FixtureB704::class, static function () {
            return new FixtureB704();
        });

        $container->prototypeFactory(FixtureB705::class, static function () {
            return new FixtureB705();
        });

        $container->prototypeFactory(FixtureB706::class, static function () {
            return new FixtureB706();
        });

        $container->prototypeFactory(FixtureB707::class, static function () {
            return new FixtureB707();
        });

        $container->prototypeFactory(FixtureB708::class, static function () {
            return new FixtureB708();
        });

        $container->prototypeFactory(FixtureB709::class, static function () {
            return new FixtureB709();
        });

        $container->prototypeFactory(FixtureB710::class, static function () {
            return new FixtureB710();
        });

        $container->prototypeFactory(FixtureB711::class, static function () {
            return new FixtureB711();
        });

        $container->prototypeFactory(FixtureB712::class, static function () {
            return new FixtureB712();
        });

        $container->prototypeFactory(FixtureB713::class, static function () {
            return new FixtureB713();
        });

        $container->prototypeFactory(FixtureB714::class, static function () {
            return new FixtureB714();
        });

        $container->prototypeFactory(FixtureB715::class, static function () {
            return new FixtureB715();
        });

        $container->prototypeFactory(FixtureB716::class, static function () {
            return new FixtureB716();
        });

        $container->prototypeFactory(FixtureB717::class, static function () {
            return new FixtureB717();
        });

        $container->prototypeFactory(FixtureB718::class, static function () {
            return new FixtureB718();
        });

        $container->prototypeFactory(FixtureB719::class, static function () {
            return new FixtureB719();
        });

        $container->prototypeFactory(FixtureB720::class, static function () {
            return new FixtureB720();
        });

        $container->prototypeFactory(FixtureB721::class, static function () {
            return new FixtureB721();
        });

        $container->prototypeFactory(FixtureB722::class, static function () {
            return new FixtureB722();
        });

        $container->prototypeFactory(FixtureB723::class, static function () {
            return new FixtureB723();
        });

        $container->prototypeFactory(FixtureB724::class, static function () {
            return new FixtureB724();
        });

        $container->prototypeFactory(FixtureB725::class, static function () {
            return new FixtureB725();
        });

        $container->prototypeFactory(FixtureB726::class, static function () {
            return new FixtureB726();
        });

        $container->prototypeFactory(FixtureB727::class, static function () {
            return new FixtureB727();
        });

        $container->prototypeFactory(FixtureB728::class, static function () {
            return new FixtureB728();
        });

        $container->prototypeFactory(FixtureB729::class, static function () {
            return new FixtureB729();
        });

        $container->prototypeFactory(FixtureB730::class, static function () {
            return new FixtureB730();
        });

        $container->prototypeFactory(FixtureB731::class, static function () {
            return new FixtureB731();
        });

        $container->prototypeFactory(FixtureB732::class, static function () {
            return new FixtureB732();
        });

        $container->prototypeFactory(FixtureB733::class, static function () {
            return new FixtureB733();
        });

        $container->prototypeFactory(FixtureB734::class, static function () {
            return new FixtureB734();
        });

        $container->prototypeFactory(FixtureB735::class, static function () {
            return new FixtureB735();
        });

        $container->prototypeFactory(FixtureB736::class, static function () {
            return new FixtureB736();
        });

        $container->prototypeFactory(FixtureB737::class, static function () {
            return new FixtureB737();
        });

        $container->prototypeFactory(FixtureB738::class, static function () {
            return new FixtureB738();
        });

        $container->prototypeFactory(FixtureB739::class, static function () {
            return new FixtureB739();
        });

        $container->prototypeFactory(FixtureB740::class, static function () {
            return new FixtureB740();
        });

        $container->prototypeFactory(FixtureB741::class, static function () {
            return new FixtureB741();
        });

        $container->prototypeFactory(FixtureB742::class, static function () {
            return new FixtureB742();
        });

        $container->prototypeFactory(FixtureB743::class, static function () {
            return new FixtureB743();
        });

        $container->prototypeFactory(FixtureB744::class, static function () {
            return new FixtureB744();
        });

        $container->prototypeFactory(FixtureB745::class, static function () {
            return new FixtureB745();
        });

        $container->prototypeFactory(FixtureB746::class, static function () {
            return new FixtureB746();
        });

        $container->prototypeFactory(FixtureB747::class, static function () {
            return new FixtureB747();
        });

        $container->prototypeFactory(FixtureB748::class, static function () {
            return new FixtureB748();
        });

        $container->prototypeFactory(FixtureB749::class, static function () {
            return new FixtureB749();
        });

        $container->prototypeFactory(FixtureB750::class, static function () {
            return new FixtureB750();
        });

        $container->prototypeFactory(FixtureB751::class, static function () {
            return new FixtureB751();
        });

        $container->prototypeFactory(FixtureB752::class, static function () {
            return new FixtureB752();
        });

        $container->prototypeFactory(FixtureB753::class, static function () {
            return new FixtureB753();
        });

        $container->prototypeFactory(FixtureB754::class, static function () {
            return new FixtureB754();
        });

        $container->prototypeFactory(FixtureB755::class, static function () {
            return new FixtureB755();
        });

        $container->prototypeFactory(FixtureB756::class, static function () {
            return new FixtureB756();
        });

        $container->prototypeFactory(FixtureB757::class, static function () {
            return new FixtureB757();
        });

        $container->prototypeFactory(FixtureB758::class, static function () {
            return new FixtureB758();
        });

        $container->prototypeFactory(FixtureB759::class, static function () {
            return new FixtureB759();
        });

        $container->prototypeFactory(FixtureB760::class, static function () {
            return new FixtureB760();
        });

        $container->prototypeFactory(FixtureB761::class, static function () {
            return new FixtureB761();
        });

        $container->prototypeFactory(FixtureB762::class, static function () {
            return new FixtureB762();
        });

        $container->prototypeFactory(FixtureB763::class, static function () {
            return new FixtureB763();
        });

        $container->prototypeFactory(FixtureB764::class, static function () {
            return new FixtureB764();
        });

        $container->prototypeFactory(FixtureB765::class, static function () {
            return new FixtureB765();
        });

        $container->prototypeFactory(FixtureB766::class, static function () {
            return new FixtureB766();
        });

        $container->prototypeFactory(FixtureB767::class, static function () {
            return new FixtureB767();
        });

        $container->prototypeFactory(FixtureB768::class, static function () {
            return new FixtureB768();
        });

        $container->prototypeFactory(FixtureB769::class, static function () {
            return new FixtureB769();
        });

        $container->prototypeFactory(FixtureB770::class, static function () {
            return new FixtureB770();
        });

        $container->prototypeFactory(FixtureB771::class, static function () {
            return new FixtureB771();
        });

        $container->prototypeFactory(FixtureB772::class, static function () {
            return new FixtureB772();
        });

        $container->prototypeFactory(FixtureB773::class, static function () {
            return new FixtureB773();
        });

        $container->prototypeFactory(FixtureB774::class, static function () {
            return new FixtureB774();
        });

        $container->prototypeFactory(FixtureB775::class, static function () {
            return new FixtureB775();
        });

        $container->prototypeFactory(FixtureB776::class, static function () {
            return new FixtureB776();
        });

        $container->prototypeFactory(FixtureB777::class, static function () {
            return new FixtureB777();
        });

        $container->prototypeFactory(FixtureB778::class, static function () {
            return new FixtureB778();
        });

        $container->prototypeFactory(FixtureB779::class, static function () {
            return new FixtureB779();
        });

        $container->prototypeFactory(FixtureB780::class, static function () {
            return new FixtureB780();
        });

        $container->prototypeFactory(FixtureB781::class, static function () {
            return new FixtureB781();
        });

        $container->prototypeFactory(FixtureB782::class, static function () {
            return new FixtureB782();
        });

        $container->prototypeFactory(FixtureB783::class, static function () {
            return new FixtureB783();
        });

        $container->prototypeFactory(FixtureB784::class, static function () {
            return new FixtureB784();
        });

        $container->prototypeFactory(FixtureB785::class, static function () {
            return new FixtureB785();
        });

        $container->prototypeFactory(FixtureB786::class, static function () {
            return new FixtureB786();
        });

        $container->prototypeFactory(FixtureB787::class, static function () {
            return new FixtureB787();
        });

        $container->prototypeFactory(FixtureB788::class, static function () {
            return new FixtureB788();
        });

        $container->prototypeFactory(FixtureB789::class, static function () {
            return new FixtureB789();
        });

        $container->prototypeFactory(FixtureB790::class, static function () {
            return new FixtureB790();
        });

        $container->prototypeFactory(FixtureB791::class, static function () {
            return new FixtureB791();
        });

        $container->prototypeFactory(FixtureB792::class, static function () {
            return new FixtureB792();
        });

        $container->prototypeFactory(FixtureB793::class, static function () {
            return new FixtureB793();
        });

        $container->prototypeFactory(FixtureB794::class, static function () {
            return new FixtureB794();
        });

        $container->prototypeFactory(FixtureB795::class, static function () {
            return new FixtureB795();
        });

        $container->prototypeFactory(FixtureB796::class, static function () {
            return new FixtureB796();
        });

        $container->prototypeFactory(FixtureB797::class, static function () {
            return new FixtureB797();
        });

        $container->prototypeFactory(FixtureB798::class, static function () {
            return new FixtureB798();
        });

        $container->prototypeFactory(FixtureB799::class, static function () {
            return new FixtureB799();
        });

        $container->prototypeFactory(FixtureB800::class, static function () {
            return new FixtureB800();
        });

        $container->prototypeFactory(FixtureB801::class, static function () {
            return new FixtureB801();
        });

        $container->prototypeFactory(FixtureB802::class, static function () {
            return new FixtureB802();
        });

        $container->prototypeFactory(FixtureB803::class, static function () {
            return new FixtureB803();
        });

        $container->prototypeFactory(FixtureB804::class, static function () {
            return new FixtureB804();
        });

        $container->prototypeFactory(FixtureB805::class, static function () {
            return new FixtureB805();
        });

        $container->prototypeFactory(FixtureB806::class, static function () {
            return new FixtureB806();
        });

        $container->prototypeFactory(FixtureB807::class, static function () {
            return new FixtureB807();
        });

        $container->prototypeFactory(FixtureB808::class, static function () {
            return new FixtureB808();
        });

        $container->prototypeFactory(FixtureB809::class, static function () {
            return new FixtureB809();
        });

        $container->prototypeFactory(FixtureB810::class, static function () {
            return new FixtureB810();
        });

        $container->prototypeFactory(FixtureB811::class, static function () {
            return new FixtureB811();
        });

        $container->prototypeFactory(FixtureB812::class, static function () {
            return new FixtureB812();
        });

        $container->prototypeFactory(FixtureB813::class, static function () {
            return new FixtureB813();
        });

        $container->prototypeFactory(FixtureB814::class, static function () {
            return new FixtureB814();
        });

        $container->prototypeFactory(FixtureB815::class, static function () {
            return new FixtureB815();
        });

        $container->prototypeFactory(FixtureB816::class, static function () {
            return new FixtureB816();
        });

        $container->prototypeFactory(FixtureB817::class, static function () {
            return new FixtureB817();
        });

        $container->prototypeFactory(FixtureB818::class, static function () {
            return new FixtureB818();
        });

        $container->prototypeFactory(FixtureB819::class, static function () {
            return new FixtureB819();
        });

        $container->prototypeFactory(FixtureB820::class, static function () {
            return new FixtureB820();
        });

        $container->prototypeFactory(FixtureB821::class, static function () {
            return new FixtureB821();
        });

        $container->prototypeFactory(FixtureB822::class, static function () {
            return new FixtureB822();
        });

        $container->prototypeFactory(FixtureB823::class, static function () {
            return new FixtureB823();
        });

        $container->prototypeFactory(FixtureB824::class, static function () {
            return new FixtureB824();
        });

        $container->prototypeFactory(FixtureB825::class, static function () {
            return new FixtureB825();
        });

        $container->prototypeFactory(FixtureB826::class, static function () {
            return new FixtureB826();
        });

        $container->prototypeFactory(FixtureB827::class, static function () {
            return new FixtureB827();
        });

        $container->prototypeFactory(FixtureB828::class, static function () {
            return new FixtureB828();
        });

        $container->prototypeFactory(FixtureB829::class, static function () {
            return new FixtureB829();
        });

        $container->prototypeFactory(FixtureB830::class, static function () {
            return new FixtureB830();
        });

        $container->prototypeFactory(FixtureB831::class, static function () {
            return new FixtureB831();
        });

        $container->prototypeFactory(FixtureB832::class, static function () {
            return new FixtureB832();
        });

        $container->prototypeFactory(FixtureB833::class, static function () {
            return new FixtureB833();
        });

        $container->prototypeFactory(FixtureB834::class, static function () {
            return new FixtureB834();
        });

        $container->prototypeFactory(FixtureB835::class, static function () {
            return new FixtureB835();
        });

        $container->prototypeFactory(FixtureB836::class, static function () {
            return new FixtureB836();
        });

        $container->prototypeFactory(FixtureB837::class, static function () {
            return new FixtureB837();
        });

        $container->prototypeFactory(FixtureB838::class, static function () {
            return new FixtureB838();
        });

        $container->prototypeFactory(FixtureB839::class, static function () {
            return new FixtureB839();
        });

        $container->prototypeFactory(FixtureB840::class, static function () {
            return new FixtureB840();
        });

        $container->prototypeFactory(FixtureB841::class, static function () {
            return new FixtureB841();
        });

        $container->prototypeFactory(FixtureB842::class, static function () {
            return new FixtureB842();
        });

        $container->prototypeFactory(FixtureB843::class, static function () {
            return new FixtureB843();
        });

        $container->prototypeFactory(FixtureB844::class, static function () {
            return new FixtureB844();
        });

        $container->prototypeFactory(FixtureB845::class, static function () {
            return new FixtureB845();
        });

        $container->prototypeFactory(FixtureB846::class, static function () {
            return new FixtureB846();
        });

        $container->prototypeFactory(FixtureB847::class, static function () {
            return new FixtureB847();
        });

        $container->prototypeFactory(FixtureB848::class, static function () {
            return new FixtureB848();
        });

        $container->prototypeFactory(FixtureB849::class, static function () {
            return new FixtureB849();
        });

        $container->prototypeFactory(FixtureB850::class, static function () {
            return new FixtureB850();
        });

        $container->prototypeFactory(FixtureB851::class, static function () {
            return new FixtureB851();
        });

        $container->prototypeFactory(FixtureB852::class, static function () {
            return new FixtureB852();
        });

        $container->prototypeFactory(FixtureB853::class, static function () {
            return new FixtureB853();
        });

        $container->prototypeFactory(FixtureB854::class, static function () {
            return new FixtureB854();
        });

        $container->prototypeFactory(FixtureB855::class, static function () {
            return new FixtureB855();
        });

        $container->prototypeFactory(FixtureB856::class, static function () {
            return new FixtureB856();
        });

        $container->prototypeFactory(FixtureB857::class, static function () {
            return new FixtureB857();
        });

        $container->prototypeFactory(FixtureB858::class, static function () {
            return new FixtureB858();
        });

        $container->prototypeFactory(FixtureB859::class, static function () {
            return new FixtureB859();
        });

        $container->prototypeFactory(FixtureB860::class, static function () {
            return new FixtureB860();
        });

        $container->prototypeFactory(FixtureB861::class, static function () {
            return new FixtureB861();
        });

        $container->prototypeFactory(FixtureB862::class, static function () {
            return new FixtureB862();
        });

        $container->prototypeFactory(FixtureB863::class, static function () {
            return new FixtureB863();
        });

        $container->prototypeFactory(FixtureB864::class, static function () {
            return new FixtureB864();
        });

        $container->prototypeFactory(FixtureB865::class, static function () {
            return new FixtureB865();
        });

        $container->prototypeFactory(FixtureB866::class, static function () {
            return new FixtureB866();
        });

        $container->prototypeFactory(FixtureB867::class, static function () {
            return new FixtureB867();
        });

        $container->prototypeFactory(FixtureB868::class, static function () {
            return new FixtureB868();
        });

        $container->prototypeFactory(FixtureB869::class, static function () {
            return new FixtureB869();
        });

        $container->prototypeFactory(FixtureB870::class, static function () {
            return new FixtureB870();
        });

        $container->prototypeFactory(FixtureB871::class, static function () {
            return new FixtureB871();
        });

        $container->prototypeFactory(FixtureB872::class, static function () {
            return new FixtureB872();
        });

        $container->prototypeFactory(FixtureB873::class, static function () {
            return new FixtureB873();
        });

        $container->prototypeFactory(FixtureB874::class, static function () {
            return new FixtureB874();
        });

        $container->prototypeFactory(FixtureB875::class, static function () {
            return new FixtureB875();
        });

        $container->prototypeFactory(FixtureB876::class, static function () {
            return new FixtureB876();
        });

        $container->prototypeFactory(FixtureB877::class, static function () {
            return new FixtureB877();
        });

        $container->prototypeFactory(FixtureB878::class, static function () {
            return new FixtureB878();
        });

        $container->prototypeFactory(FixtureB879::class, static function () {
            return new FixtureB879();
        });

        $container->prototypeFactory(FixtureB880::class, static function () {
            return new FixtureB880();
        });

        $container->prototypeFactory(FixtureB881::class, static function () {
            return new FixtureB881();
        });

        $container->prototypeFactory(FixtureB882::class, static function () {
            return new FixtureB882();
        });

        $container->prototypeFactory(FixtureB883::class, static function () {
            return new FixtureB883();
        });

        $container->prototypeFactory(FixtureB884::class, static function () {
            return new FixtureB884();
        });

        $container->prototypeFactory(FixtureB885::class, static function () {
            return new FixtureB885();
        });

        $container->prototypeFactory(FixtureB886::class, static function () {
            return new FixtureB886();
        });

        $container->prototypeFactory(FixtureB887::class, static function () {
            return new FixtureB887();
        });

        $container->prototypeFactory(FixtureB888::class, static function () {
            return new FixtureB888();
        });

        $container->prototypeFactory(FixtureB889::class, static function () {
            return new FixtureB889();
        });

        $container->prototypeFactory(FixtureB890::class, static function () {
            return new FixtureB890();
        });

        $container->prototypeFactory(FixtureB891::class, static function () {
            return new FixtureB891();
        });

        $container->prototypeFactory(FixtureB892::class, static function () {
            return new FixtureB892();
        });

        $container->prototypeFactory(FixtureB893::class, static function () {
            return new FixtureB893();
        });

        $container->prototypeFactory(FixtureB894::class, static function () {
            return new FixtureB894();
        });

        $container->prototypeFactory(FixtureB895::class, static function () {
            return new FixtureB895();
        });

        $container->prototypeFactory(FixtureB896::class, static function () {
            return new FixtureB896();
        });

        $container->prototypeFactory(FixtureB897::class, static function () {
            return new FixtureB897();
        });

        $container->prototypeFactory(FixtureB898::class, static function () {
            return new FixtureB898();
        });

        $container->prototypeFactory(FixtureB899::class, static function () {
            return new FixtureB899();
        });

        $container->prototypeFactory(FixtureB900::class, static function () {
            return new FixtureB900();
        });

        $container->prototypeFactory(FixtureB901::class, static function () {
            return new FixtureB901();
        });

        $container->prototypeFactory(FixtureB902::class, static function () {
            return new FixtureB902();
        });

        $container->prototypeFactory(FixtureB903::class, static function () {
            return new FixtureB903();
        });

        $container->prototypeFactory(FixtureB904::class, static function () {
            return new FixtureB904();
        });

        $container->prototypeFactory(FixtureB905::class, static function () {
            return new FixtureB905();
        });

        $container->prototypeFactory(FixtureB906::class, static function () {
            return new FixtureB906();
        });

        $container->prototypeFactory(FixtureB907::class, static function () {
            return new FixtureB907();
        });

        $container->prototypeFactory(FixtureB908::class, static function () {
            return new FixtureB908();
        });

        $container->prototypeFactory(FixtureB909::class, static function () {
            return new FixtureB909();
        });

        $container->prototypeFactory(FixtureB910::class, static function () {
            return new FixtureB910();
        });

        $container->prototypeFactory(FixtureB911::class, static function () {
            return new FixtureB911();
        });

        $container->prototypeFactory(FixtureB912::class, static function () {
            return new FixtureB912();
        });

        $container->prototypeFactory(FixtureB913::class, static function () {
            return new FixtureB913();
        });

        $container->prototypeFactory(FixtureB914::class, static function () {
            return new FixtureB914();
        });

        $container->prototypeFactory(FixtureB915::class, static function () {
            return new FixtureB915();
        });

        $container->prototypeFactory(FixtureB916::class, static function () {
            return new FixtureB916();
        });

        $container->prototypeFactory(FixtureB917::class, static function () {
            return new FixtureB917();
        });

        $container->prototypeFactory(FixtureB918::class, static function () {
            return new FixtureB918();
        });

        $container->prototypeFactory(FixtureB919::class, static function () {
            return new FixtureB919();
        });

        $container->prototypeFactory(FixtureB920::class, static function () {
            return new FixtureB920();
        });

        $container->prototypeFactory(FixtureB921::class, static function () {
            return new FixtureB921();
        });

        $container->prototypeFactory(FixtureB922::class, static function () {
            return new FixtureB922();
        });

        $container->prototypeFactory(FixtureB923::class, static function () {
            return new FixtureB923();
        });

        $container->prototypeFactory(FixtureB924::class, static function () {
            return new FixtureB924();
        });

        $container->prototypeFactory(FixtureB925::class, static function () {
            return new FixtureB925();
        });

        $container->prototypeFactory(FixtureB926::class, static function () {
            return new FixtureB926();
        });

        $container->prototypeFactory(FixtureB927::class, static function () {
            return new FixtureB927();
        });

        $container->prototypeFactory(FixtureB928::class, static function () {
            return new FixtureB928();
        });

        $container->prototypeFactory(FixtureB929::class, static function () {
            return new FixtureB929();
        });

        $container->prototypeFactory(FixtureB930::class, static function () {
            return new FixtureB930();
        });

        $container->prototypeFactory(FixtureB931::class, static function () {
            return new FixtureB931();
        });

        $container->prototypeFactory(FixtureB932::class, static function () {
            return new FixtureB932();
        });

        $container->prototypeFactory(FixtureB933::class, static function () {
            return new FixtureB933();
        });

        $container->prototypeFactory(FixtureB934::class, static function () {
            return new FixtureB934();
        });

        $container->prototypeFactory(FixtureB935::class, static function () {
            return new FixtureB935();
        });

        $container->prototypeFactory(FixtureB936::class, static function () {
            return new FixtureB936();
        });

        $container->prototypeFactory(FixtureB937::class, static function () {
            return new FixtureB937();
        });

        $container->prototypeFactory(FixtureB938::class, static function () {
            return new FixtureB938();
        });

        $container->prototypeFactory(FixtureB939::class, static function () {
            return new FixtureB939();
        });

        $container->prototypeFactory(FixtureB940::class, static function () {
            return new FixtureB940();
        });

        $container->prototypeFactory(FixtureB941::class, static function () {
            return new FixtureB941();
        });

        $container->prototypeFactory(FixtureB942::class, static function () {
            return new FixtureB942();
        });

        $container->prototypeFactory(FixtureB943::class, static function () {
            return new FixtureB943();
        });

        $container->prototypeFactory(FixtureB944::class, static function () {
            return new FixtureB944();
        });

        $container->prototypeFactory(FixtureB945::class, static function () {
            return new FixtureB945();
        });

        $container->prototypeFactory(FixtureB946::class, static function () {
            return new FixtureB946();
        });

        $container->prototypeFactory(FixtureB947::class, static function () {
            return new FixtureB947();
        });

        $container->prototypeFactory(FixtureB948::class, static function () {
            return new FixtureB948();
        });

        $container->prototypeFactory(FixtureB949::class, static function () {
            return new FixtureB949();
        });

        $container->prototypeFactory(FixtureB950::class, static function () {
            return new FixtureB950();
        });

        $container->prototypeFactory(FixtureB951::class, static function () {
            return new FixtureB951();
        });

        $container->prototypeFactory(FixtureB952::class, static function () {
            return new FixtureB952();
        });

        $container->prototypeFactory(FixtureB953::class, static function () {
            return new FixtureB953();
        });

        $container->prototypeFactory(FixtureB954::class, static function () {
            return new FixtureB954();
        });

        $container->prototypeFactory(FixtureB955::class, static function () {
            return new FixtureB955();
        });

        $container->prototypeFactory(FixtureB956::class, static function () {
            return new FixtureB956();
        });

        $container->prototypeFactory(FixtureB957::class, static function () {
            return new FixtureB957();
        });

        $container->prototypeFactory(FixtureB958::class, static function () {
            return new FixtureB958();
        });

        $container->prototypeFactory(FixtureB959::class, static function () {
            return new FixtureB959();
        });

        $container->prototypeFactory(FixtureB960::class, static function () {
            return new FixtureB960();
        });

        $container->prototypeFactory(FixtureB961::class, static function () {
            return new FixtureB961();
        });

        $container->prototypeFactory(FixtureB962::class, static function () {
            return new FixtureB962();
        });

        $container->prototypeFactory(FixtureB963::class, static function () {
            return new FixtureB963();
        });

        $container->prototypeFactory(FixtureB964::class, static function () {
            return new FixtureB964();
        });

        $container->prototypeFactory(FixtureB965::class, static function () {
            return new FixtureB965();
        });

        $container->prototypeFactory(FixtureB966::class, static function () {
            return new FixtureB966();
        });

        $container->prototypeFactory(FixtureB967::class, static function () {
            return new FixtureB967();
        });

        $container->prototypeFactory(FixtureB968::class, static function () {
            return new FixtureB968();
        });

        $container->prototypeFactory(FixtureB969::class, static function () {
            return new FixtureB969();
        });

        $container->prototypeFactory(FixtureB970::class, static function () {
            return new FixtureB970();
        });

        $container->prototypeFactory(FixtureB971::class, static function () {
            return new FixtureB971();
        });

        $container->prototypeFactory(FixtureB972::class, static function () {
            return new FixtureB972();
        });

        $container->prototypeFactory(FixtureB973::class, static function () {
            return new FixtureB973();
        });

        $container->prototypeFactory(FixtureB974::class, static function () {
            return new FixtureB974();
        });

        $container->prototypeFactory(FixtureB975::class, static function () {
            return new FixtureB975();
        });

        $container->prototypeFactory(FixtureB976::class, static function () {
            return new FixtureB976();
        });

        $container->prototypeFactory(FixtureB977::class, static function () {
            return new FixtureB977();
        });

        $container->prototypeFactory(FixtureB978::class, static function () {
            return new FixtureB978();
        });

        $container->prototypeFactory(FixtureB979::class, static function () {
            return new FixtureB979();
        });

        $container->prototypeFactory(FixtureB980::class, static function () {
            return new FixtureB980();
        });

        $container->prototypeFactory(FixtureB981::class, static function () {
            return new FixtureB981();
        });

        $container->prototypeFactory(FixtureB982::class, static function () {
            return new FixtureB982();
        });

        $container->prototypeFactory(FixtureB983::class, static function () {
            return new FixtureB983();
        });

        $container->prototypeFactory(FixtureB984::class, static function () {
            return new FixtureB984();
        });

        $container->prototypeFactory(FixtureB985::class, static function () {
            return new FixtureB985();
        });

        $container->prototypeFactory(FixtureB986::class, static function () {
            return new FixtureB986();
        });

        $container->prototypeFactory(FixtureB987::class, static function () {
            return new FixtureB987();
        });

        $container->prototypeFactory(FixtureB988::class, static function () {
            return new FixtureB988();
        });

        $container->prototypeFactory(FixtureB989::class, static function () {
            return new FixtureB989();
        });

        $container->prototypeFactory(FixtureB990::class, static function () {
            return new FixtureB990();
        });

        $container->prototypeFactory(FixtureB991::class, static function () {
            return new FixtureB991();
        });

        $container->prototypeFactory(FixtureB992::class, static function () {
            return new FixtureB992();
        });

        $container->prototypeFactory(FixtureB993::class, static function () {
            return new FixtureB993();
        });

        $container->prototypeFactory(FixtureB994::class, static function () {
            return new FixtureB994();
        });

        $container->prototypeFactory(FixtureB995::class, static function () {
            return new FixtureB995();
        });

        $container->prototypeFactory(FixtureB996::class, static function () {
            return new FixtureB996();
        });

        $container->prototypeFactory(FixtureB997::class, static function () {
            return new FixtureB997();
        });

        $container->prototypeFactory(FixtureB998::class, static function () {
            return new FixtureB998();
        });

        $container->prototypeFactory(FixtureB999::class, static function () {
            return new FixtureB999();
        });

        $container->prototypeFactory(FixtureB1000::class, static function () {
            return new FixtureB1000();
        });

        $container->prototypeFactory(FixtureC1::class, static function (ContainerInterface $container) {
            return new FixtureC1();
        });

        $container->prototypeFactory(FixtureC2::class, static function (ContainerInterface $container) {
            return new FixtureC2($container->get(FixtureC1::class));
        });

        $container->prototypeFactory(FixtureC3::class, static function (ContainerInterface $container) {
            return new FixtureC3($container->get(FixtureC2::class));
        });

        $container->prototypeFactory(FixtureC4::class, static function (ContainerInterface $container) {
            return new FixtureC4($container->get(FixtureC3::class));
        });

        $container->prototypeFactory(FixtureC5::class, static function (ContainerInterface $container) {
            return new FixtureC5($container->get(FixtureC4::class));
        });

        $container->prototypeFactory(FixtureC6::class, static function (ContainerInterface $container) {
            return new FixtureC6($container->get(FixtureC5::class));
        });

        $container->prototypeFactory(FixtureC7::class, static function (ContainerInterface $container) {
            return new FixtureC7($container->get(FixtureC6::class));
        });

        $container->prototypeFactory(FixtureC8::class, static function (ContainerInterface $container) {
            return new FixtureC8($container->get(FixtureC7::class));
        });

        $container->prototypeFactory(FixtureC9::class, static function (ContainerInterface $container) {
            return new FixtureC9($container->get(FixtureC8::class));
        });

        $container->prototypeFactory(FixtureC10::class, static function (ContainerInterface $container) {
            return new FixtureC10($container->get(FixtureC9::class));
        });

        $container->prototypeFactory(FixtureC11::class, static function (ContainerInterface $container) {
            return new FixtureC11($container->get(FixtureC10::class));
        });

        $container->prototypeFactory(FixtureC12::class, static function (ContainerInterface $container) {
            return new FixtureC12($container->get(FixtureC11::class));
        });

        $container->prototypeFactory(FixtureC13::class, static function (ContainerInterface $container) {
            return new FixtureC13($container->get(FixtureC12::class));
        });

        $container->prototypeFactory(FixtureC14::class, static function (ContainerInterface $container) {
            return new FixtureC14($container->get(FixtureC13::class));
        });

        $container->prototypeFactory(FixtureC15::class, static function (ContainerInterface $container) {
            return new FixtureC15($container->get(FixtureC14::class));
        });

        $container->prototypeFactory(FixtureC16::class, static function (ContainerInterface $container) {
            return new FixtureC16($container->get(FixtureC15::class));
        });

        $container->prototypeFactory(FixtureC17::class, static function (ContainerInterface $container) {
            return new FixtureC17($container->get(FixtureC16::class));
        });

        $container->prototypeFactory(FixtureC18::class, static function (ContainerInterface $container) {
            return new FixtureC18($container->get(FixtureC17::class));
        });

        $container->prototypeFactory(FixtureC19::class, static function (ContainerInterface $container) {
            return new FixtureC19($container->get(FixtureC18::class));
        });

        $container->prototypeFactory(FixtureC20::class, static function (ContainerInterface $container) {
            return new FixtureC20($container->get(FixtureC19::class));
        });

        $container->prototypeFactory(FixtureC21::class, static function (ContainerInterface $container) {
            return new FixtureC21($container->get(FixtureC20::class));
        });

        $container->prototypeFactory(FixtureC22::class, static function (ContainerInterface $container) {
            return new FixtureC22($container->get(FixtureC21::class));
        });

        $container->prototypeFactory(FixtureC23::class, static function (ContainerInterface $container) {
            return new FixtureC23($container->get(FixtureC22::class));
        });

        $container->prototypeFactory(FixtureC24::class, static function (ContainerInterface $container) {
            return new FixtureC24($container->get(FixtureC23::class));
        });

        $container->prototypeFactory(FixtureC25::class, static function (ContainerInterface $container) {
            return new FixtureC25($container->get(FixtureC24::class));
        });

        $container->prototypeFactory(FixtureC26::class, static function (ContainerInterface $container) {
            return new FixtureC26($container->get(FixtureC25::class));
        });

        $container->prototypeFactory(FixtureC27::class, static function (ContainerInterface $container) {
            return new FixtureC27($container->get(FixtureC26::class));
        });

        $container->prototypeFactory(FixtureC28::class, static function (ContainerInterface $container) {
            return new FixtureC28($container->get(FixtureC27::class));
        });

        $container->prototypeFactory(FixtureC29::class, static function (ContainerInterface $container) {
            return new FixtureC29($container->get(FixtureC28::class));
        });

        $container->prototypeFactory(FixtureC30::class, static function (ContainerInterface $container) {
            return new FixtureC30($container->get(FixtureC29::class));
        });

        $container->prototypeFactory(FixtureC31::class, static function (ContainerInterface $container) {
            return new FixtureC31($container->get(FixtureC30::class));
        });

        $container->prototypeFactory(FixtureC32::class, static function (ContainerInterface $container) {
            return new FixtureC32($container->get(FixtureC31::class));
        });

        $container->prototypeFactory(FixtureC33::class, static function (ContainerInterface $container) {
            return new FixtureC33($container->get(FixtureC32::class));
        });

        $container->prototypeFactory(FixtureC34::class, static function (ContainerInterface $container) {
            return new FixtureC34($container->get(FixtureC33::class));
        });

        $container->prototypeFactory(FixtureC35::class, static function (ContainerInterface $container) {
            return new FixtureC35($container->get(FixtureC34::class));
        });

        $container->prototypeFactory(FixtureC36::class, static function (ContainerInterface $container) {
            return new FixtureC36($container->get(FixtureC35::class));
        });

        $container->prototypeFactory(FixtureC37::class, static function (ContainerInterface $container) {
            return new FixtureC37($container->get(FixtureC36::class));
        });

        $container->prototypeFactory(FixtureC38::class, static function (ContainerInterface $container) {
            return new FixtureC38($container->get(FixtureC37::class));
        });

        $container->prototypeFactory(FixtureC39::class, static function (ContainerInterface $container) {
            return new FixtureC39($container->get(FixtureC38::class));
        });

        $container->prototypeFactory(FixtureC40::class, static function (ContainerInterface $container) {
            return new FixtureC40($container->get(FixtureC39::class));
        });

        $container->prototypeFactory(FixtureC41::class, static function (ContainerInterface $container) {
            return new FixtureC41($container->get(FixtureC40::class));
        });

        $container->prototypeFactory(FixtureC42::class, static function (ContainerInterface $container) {
            return new FixtureC42($container->get(FixtureC41::class));
        });

        $container->prototypeFactory(FixtureC43::class, static function (ContainerInterface $container) {
            return new FixtureC43($container->get(FixtureC42::class));
        });

        $container->prototypeFactory(FixtureC44::class, static function (ContainerInterface $container) {
            return new FixtureC44($container->get(FixtureC43::class));
        });

        $container->prototypeFactory(FixtureC45::class, static function (ContainerInterface $container) {
            return new FixtureC45($container->get(FixtureC44::class));
        });

        $container->prototypeFactory(FixtureC46::class, static function (ContainerInterface $container) {
            return new FixtureC46($container->get(FixtureC45::class));
        });

        $container->prototypeFactory(FixtureC47::class, static function (ContainerInterface $container) {
            return new FixtureC47($container->get(FixtureC46::class));
        });

        $container->prototypeFactory(FixtureC48::class, static function (ContainerInterface $container) {
            return new FixtureC48($container->get(FixtureC47::class));
        });

        $container->prototypeFactory(FixtureC49::class, static function (ContainerInterface $container) {
            return new FixtureC49($container->get(FixtureC48::class));
        });

        $container->prototypeFactory(FixtureC50::class, static function (ContainerInterface $container) {
            return new FixtureC50($container->get(FixtureC49::class));
        });

        $container->prototypeFactory(FixtureC51::class, static function (ContainerInterface $container) {
            return new FixtureC51($container->get(FixtureC50::class));
        });

        $container->prototypeFactory(FixtureC52::class, static function (ContainerInterface $container) {
            return new FixtureC52($container->get(FixtureC51::class));
        });

        $container->prototypeFactory(FixtureC53::class, static function (ContainerInterface $container) {
            return new FixtureC53($container->get(FixtureC52::class));
        });

        $container->prototypeFactory(FixtureC54::class, static function (ContainerInterface $container) {
            return new FixtureC54($container->get(FixtureC53::class));
        });

        $container->prototypeFactory(FixtureC55::class, static function (ContainerInterface $container) {
            return new FixtureC55($container->get(FixtureC54::class));
        });

        $container->prototypeFactory(FixtureC56::class, static function (ContainerInterface $container) {
            return new FixtureC56($container->get(FixtureC55::class));
        });

        $container->prototypeFactory(FixtureC57::class, static function (ContainerInterface $container) {
            return new FixtureC57($container->get(FixtureC56::class));
        });

        $container->prototypeFactory(FixtureC58::class, static function (ContainerInterface $container) {
            return new FixtureC58($container->get(FixtureC57::class));
        });

        $container->prototypeFactory(FixtureC59::class, static function (ContainerInterface $container) {
            return new FixtureC59($container->get(FixtureC58::class));
        });

        $container->prototypeFactory(FixtureC60::class, static function (ContainerInterface $container) {
            return new FixtureC60($container->get(FixtureC59::class));
        });

        $container->prototypeFactory(FixtureC61::class, static function (ContainerInterface $container) {
            return new FixtureC61($container->get(FixtureC60::class));
        });

        $container->prototypeFactory(FixtureC62::class, static function (ContainerInterface $container) {
            return new FixtureC62($container->get(FixtureC61::class));
        });

        $container->prototypeFactory(FixtureC63::class, static function (ContainerInterface $container) {
            return new FixtureC63($container->get(FixtureC62::class));
        });

        $container->prototypeFactory(FixtureC64::class, static function (ContainerInterface $container) {
            return new FixtureC64($container->get(FixtureC63::class));
        });

        $container->prototypeFactory(FixtureC65::class, static function (ContainerInterface $container) {
            return new FixtureC65($container->get(FixtureC64::class));
        });

        $container->prototypeFactory(FixtureC66::class, static function (ContainerInterface $container) {
            return new FixtureC66($container->get(FixtureC65::class));
        });

        $container->prototypeFactory(FixtureC67::class, static function (ContainerInterface $container) {
            return new FixtureC67($container->get(FixtureC66::class));
        });

        $container->prototypeFactory(FixtureC68::class, static function (ContainerInterface $container) {
            return new FixtureC68($container->get(FixtureC67::class));
        });

        $container->prototypeFactory(FixtureC69::class, static function (ContainerInterface $container) {
            return new FixtureC69($container->get(FixtureC68::class));
        });

        $container->prototypeFactory(FixtureC70::class, static function (ContainerInterface $container) {
            return new FixtureC70($container->get(FixtureC69::class));
        });

        $container->prototypeFactory(FixtureC71::class, static function (ContainerInterface $container) {
            return new FixtureC71($container->get(FixtureC70::class));
        });

        $container->prototypeFactory(FixtureC72::class, static function (ContainerInterface $container) {
            return new FixtureC72($container->get(FixtureC71::class));
        });

        $container->prototypeFactory(FixtureC73::class, static function (ContainerInterface $container) {
            return new FixtureC73($container->get(FixtureC72::class));
        });

        $container->prototypeFactory(FixtureC74::class, static function (ContainerInterface $container) {
            return new FixtureC74($container->get(FixtureC73::class));
        });

        $container->prototypeFactory(FixtureC75::class, static function (ContainerInterface $container) {
            return new FixtureC75($container->get(FixtureC74::class));
        });

        $container->prototypeFactory(FixtureC76::class, static function (ContainerInterface $container) {
            return new FixtureC76($container->get(FixtureC75::class));
        });

        $container->prototypeFactory(FixtureC77::class, static function (ContainerInterface $container) {
            return new FixtureC77($container->get(FixtureC76::class));
        });

        $container->prototypeFactory(FixtureC78::class, static function (ContainerInterface $container) {
            return new FixtureC78($container->get(FixtureC77::class));
        });

        $container->prototypeFactory(FixtureC79::class, static function (ContainerInterface $container) {
            return new FixtureC79($container->get(FixtureC78::class));
        });

        $container->prototypeFactory(FixtureC80::class, static function (ContainerInterface $container) {
            return new FixtureC80($container->get(FixtureC79::class));
        });

        $container->prototypeFactory(FixtureC81::class, static function (ContainerInterface $container) {
            return new FixtureC81($container->get(FixtureC80::class));
        });

        $container->prototypeFactory(FixtureC82::class, static function (ContainerInterface $container) {
            return new FixtureC82($container->get(FixtureC81::class));
        });

        $container->prototypeFactory(FixtureC83::class, static function (ContainerInterface $container) {
            return new FixtureC83($container->get(FixtureC82::class));
        });

        $container->prototypeFactory(FixtureC84::class, static function (ContainerInterface $container) {
            return new FixtureC84($container->get(FixtureC83::class));
        });

        $container->prototypeFactory(FixtureC85::class, static function (ContainerInterface $container) {
            return new FixtureC85($container->get(FixtureC84::class));
        });

        $container->prototypeFactory(FixtureC86::class, static function (ContainerInterface $container) {
            return new FixtureC86($container->get(FixtureC85::class));
        });

        $container->prototypeFactory(FixtureC87::class, static function (ContainerInterface $container) {
            return new FixtureC87($container->get(FixtureC86::class));
        });

        $container->prototypeFactory(FixtureC88::class, static function (ContainerInterface $container) {
            return new FixtureC88($container->get(FixtureC87::class));
        });

        $container->prototypeFactory(FixtureC89::class, static function (ContainerInterface $container) {
            return new FixtureC89($container->get(FixtureC88::class));
        });

        $container->prototypeFactory(FixtureC90::class, static function (ContainerInterface $container) {
            return new FixtureC90($container->get(FixtureC89::class));
        });

        $container->prototypeFactory(FixtureC91::class, static function (ContainerInterface $container) {
            return new FixtureC91($container->get(FixtureC90::class));
        });

        $container->prototypeFactory(FixtureC92::class, static function (ContainerInterface $container) {
            return new FixtureC92($container->get(FixtureC91::class));
        });

        $container->prototypeFactory(FixtureC93::class, static function (ContainerInterface $container) {
            return new FixtureC93($container->get(FixtureC92::class));
        });

        $container->prototypeFactory(FixtureC94::class, static function (ContainerInterface $container) {
            return new FixtureC94($container->get(FixtureC93::class));
        });

        $container->prototypeFactory(FixtureC95::class, static function (ContainerInterface $container) {
            return new FixtureC95($container->get(FixtureC94::class));
        });

        $container->prototypeFactory(FixtureC96::class, static function (ContainerInterface $container) {
            return new FixtureC96($container->get(FixtureC95::class));
        });

        $container->prototypeFactory(FixtureC97::class, static function (ContainerInterface $container) {
            return new FixtureC97($container->get(FixtureC96::class));
        });

        $container->prototypeFactory(FixtureC98::class, static function (ContainerInterface $container) {
            return new FixtureC98($container->get(FixtureC97::class));
        });

        $container->prototypeFactory(FixtureC99::class, static function (ContainerInterface $container) {
            return new FixtureC99($container->get(FixtureC98::class));
        });

        $container->prototypeFactory(FixtureC100::class, static function (ContainerInterface $container) {
            return new FixtureC100($container->get(FixtureC99::class));
        });

        $container->prototypeFactory(FixtureC101::class, static function (ContainerInterface $container) {
            return new FixtureC101($container->get(FixtureC100::class));
        });

        $container->prototypeFactory(FixtureC102::class, static function (ContainerInterface $container) {
            return new FixtureC102($container->get(FixtureC101::class));
        });

        $container->prototypeFactory(FixtureC103::class, static function (ContainerInterface $container) {
            return new FixtureC103($container->get(FixtureC102::class));
        });

        $container->prototypeFactory(FixtureC104::class, static function (ContainerInterface $container) {
            return new FixtureC104($container->get(FixtureC103::class));
        });

        $container->prototypeFactory(FixtureC105::class, static function (ContainerInterface $container) {
            return new FixtureC105($container->get(FixtureC104::class));
        });

        $container->prototypeFactory(FixtureC106::class, static function (ContainerInterface $container) {
            return new FixtureC106($container->get(FixtureC105::class));
        });

        $container->prototypeFactory(FixtureC107::class, static function (ContainerInterface $container) {
            return new FixtureC107($container->get(FixtureC106::class));
        });

        $container->prototypeFactory(FixtureC108::class, static function (ContainerInterface $container) {
            return new FixtureC108($container->get(FixtureC107::class));
        });

        $container->prototypeFactory(FixtureC109::class, static function (ContainerInterface $container) {
            return new FixtureC109($container->get(FixtureC108::class));
        });

        $container->prototypeFactory(FixtureC110::class, static function (ContainerInterface $container) {
            return new FixtureC110($container->get(FixtureC109::class));
        });

        $container->prototypeFactory(FixtureC111::class, static function (ContainerInterface $container) {
            return new FixtureC111($container->get(FixtureC110::class));
        });

        $container->prototypeFactory(FixtureC112::class, static function (ContainerInterface $container) {
            return new FixtureC112($container->get(FixtureC111::class));
        });

        $container->prototypeFactory(FixtureC113::class, static function (ContainerInterface $container) {
            return new FixtureC113($container->get(FixtureC112::class));
        });

        $container->prototypeFactory(FixtureC114::class, static function (ContainerInterface $container) {
            return new FixtureC114($container->get(FixtureC113::class));
        });

        $container->prototypeFactory(FixtureC115::class, static function (ContainerInterface $container) {
            return new FixtureC115($container->get(FixtureC114::class));
        });

        $container->prototypeFactory(FixtureC116::class, static function (ContainerInterface $container) {
            return new FixtureC116($container->get(FixtureC115::class));
        });

        $container->prototypeFactory(FixtureC117::class, static function (ContainerInterface $container) {
            return new FixtureC117($container->get(FixtureC116::class));
        });

        $container->prototypeFactory(FixtureC118::class, static function (ContainerInterface $container) {
            return new FixtureC118($container->get(FixtureC117::class));
        });

        $container->prototypeFactory(FixtureC119::class, static function (ContainerInterface $container) {
            return new FixtureC119($container->get(FixtureC118::class));
        });

        $container->prototypeFactory(FixtureC120::class, static function (ContainerInterface $container) {
            return new FixtureC120($container->get(FixtureC119::class));
        });

        $container->prototypeFactory(FixtureC121::class, static function (ContainerInterface $container) {
            return new FixtureC121($container->get(FixtureC120::class));
        });

        $container->prototypeFactory(FixtureC122::class, static function (ContainerInterface $container) {
            return new FixtureC122($container->get(FixtureC121::class));
        });

        $container->prototypeFactory(FixtureC123::class, static function (ContainerInterface $container) {
            return new FixtureC123($container->get(FixtureC122::class));
        });

        $container->prototypeFactory(FixtureC124::class, static function (ContainerInterface $container) {
            return new FixtureC124($container->get(FixtureC123::class));
        });

        $container->prototypeFactory(FixtureC125::class, static function (ContainerInterface $container) {
            return new FixtureC125($container->get(FixtureC124::class));
        });

        $container->prototypeFactory(FixtureC126::class, static function (ContainerInterface $container) {
            return new FixtureC126($container->get(FixtureC125::class));
        });

        $container->prototypeFactory(FixtureC127::class, static function (ContainerInterface $container) {
            return new FixtureC127($container->get(FixtureC126::class));
        });

        $container->prototypeFactory(FixtureC128::class, static function (ContainerInterface $container) {
            return new FixtureC128($container->get(FixtureC127::class));
        });

        $container->prototypeFactory(FixtureC129::class, static function (ContainerInterface $container) {
            return new FixtureC129($container->get(FixtureC128::class));
        });

        $container->prototypeFactory(FixtureC130::class, static function (ContainerInterface $container) {
            return new FixtureC130($container->get(FixtureC129::class));
        });

        $container->prototypeFactory(FixtureC131::class, static function (ContainerInterface $container) {
            return new FixtureC131($container->get(FixtureC130::class));
        });

        $container->prototypeFactory(FixtureC132::class, static function (ContainerInterface $container) {
            return new FixtureC132($container->get(FixtureC131::class));
        });

        $container->prototypeFactory(FixtureC133::class, static function (ContainerInterface $container) {
            return new FixtureC133($container->get(FixtureC132::class));
        });

        $container->prototypeFactory(FixtureC134::class, static function (ContainerInterface $container) {
            return new FixtureC134($container->get(FixtureC133::class));
        });

        $container->prototypeFactory(FixtureC135::class, static function (ContainerInterface $container) {
            return new FixtureC135($container->get(FixtureC134::class));
        });

        $container->prototypeFactory(FixtureC136::class, static function (ContainerInterface $container) {
            return new FixtureC136($container->get(FixtureC135::class));
        });

        $container->prototypeFactory(FixtureC137::class, static function (ContainerInterface $container) {
            return new FixtureC137($container->get(FixtureC136::class));
        });

        $container->prototypeFactory(FixtureC138::class, static function (ContainerInterface $container) {
            return new FixtureC138($container->get(FixtureC137::class));
        });

        $container->prototypeFactory(FixtureC139::class, static function (ContainerInterface $container) {
            return new FixtureC139($container->get(FixtureC138::class));
        });

        $container->prototypeFactory(FixtureC140::class, static function (ContainerInterface $container) {
            return new FixtureC140($container->get(FixtureC139::class));
        });

        $container->prototypeFactory(FixtureC141::class, static function (ContainerInterface $container) {
            return new FixtureC141($container->get(FixtureC140::class));
        });

        $container->prototypeFactory(FixtureC142::class, static function (ContainerInterface $container) {
            return new FixtureC142($container->get(FixtureC141::class));
        });

        $container->prototypeFactory(FixtureC143::class, static function (ContainerInterface $container) {
            return new FixtureC143($container->get(FixtureC142::class));
        });

        $container->prototypeFactory(FixtureC144::class, static function (ContainerInterface $container) {
            return new FixtureC144($container->get(FixtureC143::class));
        });

        $container->prototypeFactory(FixtureC145::class, static function (ContainerInterface $container) {
            return new FixtureC145($container->get(FixtureC144::class));
        });

        $container->prototypeFactory(FixtureC146::class, static function (ContainerInterface $container) {
            return new FixtureC146($container->get(FixtureC145::class));
        });

        $container->prototypeFactory(FixtureC147::class, static function (ContainerInterface $container) {
            return new FixtureC147($container->get(FixtureC146::class));
        });

        $container->prototypeFactory(FixtureC148::class, static function (ContainerInterface $container) {
            return new FixtureC148($container->get(FixtureC147::class));
        });

        $container->prototypeFactory(FixtureC149::class, static function (ContainerInterface $container) {
            return new FixtureC149($container->get(FixtureC148::class));
        });

        $container->prototypeFactory(FixtureC150::class, static function (ContainerInterface $container) {
            return new FixtureC150($container->get(FixtureC149::class));
        });

        $container->prototypeFactory(FixtureC151::class, static function (ContainerInterface $container) {
            return new FixtureC151($container->get(FixtureC150::class));
        });

        $container->prototypeFactory(FixtureC152::class, static function (ContainerInterface $container) {
            return new FixtureC152($container->get(FixtureC151::class));
        });

        $container->prototypeFactory(FixtureC153::class, static function (ContainerInterface $container) {
            return new FixtureC153($container->get(FixtureC152::class));
        });

        $container->prototypeFactory(FixtureC154::class, static function (ContainerInterface $container) {
            return new FixtureC154($container->get(FixtureC153::class));
        });

        $container->prototypeFactory(FixtureC155::class, static function (ContainerInterface $container) {
            return new FixtureC155($container->get(FixtureC154::class));
        });

        $container->prototypeFactory(FixtureC156::class, static function (ContainerInterface $container) {
            return new FixtureC156($container->get(FixtureC155::class));
        });

        $container->prototypeFactory(FixtureC157::class, static function (ContainerInterface $container) {
            return new FixtureC157($container->get(FixtureC156::class));
        });

        $container->prototypeFactory(FixtureC158::class, static function (ContainerInterface $container) {
            return new FixtureC158($container->get(FixtureC157::class));
        });

        $container->prototypeFactory(FixtureC159::class, static function (ContainerInterface $container) {
            return new FixtureC159($container->get(FixtureC158::class));
        });

        $container->prototypeFactory(FixtureC160::class, static function (ContainerInterface $container) {
            return new FixtureC160($container->get(FixtureC159::class));
        });

        $container->prototypeFactory(FixtureC161::class, static function (ContainerInterface $container) {
            return new FixtureC161($container->get(FixtureC160::class));
        });

        $container->prototypeFactory(FixtureC162::class, static function (ContainerInterface $container) {
            return new FixtureC162($container->get(FixtureC161::class));
        });

        $container->prototypeFactory(FixtureC163::class, static function (ContainerInterface $container) {
            return new FixtureC163($container->get(FixtureC162::class));
        });

        $container->prototypeFactory(FixtureC164::class, static function (ContainerInterface $container) {
            return new FixtureC164($container->get(FixtureC163::class));
        });

        $container->prototypeFactory(FixtureC165::class, static function (ContainerInterface $container) {
            return new FixtureC165($container->get(FixtureC164::class));
        });

        $container->prototypeFactory(FixtureC166::class, static function (ContainerInterface $container) {
            return new FixtureC166($container->get(FixtureC165::class));
        });

        $container->prototypeFactory(FixtureC167::class, static function (ContainerInterface $container) {
            return new FixtureC167($container->get(FixtureC166::class));
        });

        $container->prototypeFactory(FixtureC168::class, static function (ContainerInterface $container) {
            return new FixtureC168($container->get(FixtureC167::class));
        });

        $container->prototypeFactory(FixtureC169::class, static function (ContainerInterface $container) {
            return new FixtureC169($container->get(FixtureC168::class));
        });

        $container->prototypeFactory(FixtureC170::class, static function (ContainerInterface $container) {
            return new FixtureC170($container->get(FixtureC169::class));
        });

        $container->prototypeFactory(FixtureC171::class, static function (ContainerInterface $container) {
            return new FixtureC171($container->get(FixtureC170::class));
        });

        $container->prototypeFactory(FixtureC172::class, static function (ContainerInterface $container) {
            return new FixtureC172($container->get(FixtureC171::class));
        });

        $container->prototypeFactory(FixtureC173::class, static function (ContainerInterface $container) {
            return new FixtureC173($container->get(FixtureC172::class));
        });

        $container->prototypeFactory(FixtureC174::class, static function (ContainerInterface $container) {
            return new FixtureC174($container->get(FixtureC173::class));
        });

        $container->prototypeFactory(FixtureC175::class, static function (ContainerInterface $container) {
            return new FixtureC175($container->get(FixtureC174::class));
        });

        $container->prototypeFactory(FixtureC176::class, static function (ContainerInterface $container) {
            return new FixtureC176($container->get(FixtureC175::class));
        });

        $container->prototypeFactory(FixtureC177::class, static function (ContainerInterface $container) {
            return new FixtureC177($container->get(FixtureC176::class));
        });

        $container->prototypeFactory(FixtureC178::class, static function (ContainerInterface $container) {
            return new FixtureC178($container->get(FixtureC177::class));
        });

        $container->prototypeFactory(FixtureC179::class, static function (ContainerInterface $container) {
            return new FixtureC179($container->get(FixtureC178::class));
        });

        $container->prototypeFactory(FixtureC180::class, static function (ContainerInterface $container) {
            return new FixtureC180($container->get(FixtureC179::class));
        });

        $container->prototypeFactory(FixtureC181::class, static function (ContainerInterface $container) {
            return new FixtureC181($container->get(FixtureC180::class));
        });

        $container->prototypeFactory(FixtureC182::class, static function (ContainerInterface $container) {
            return new FixtureC182($container->get(FixtureC181::class));
        });

        $container->prototypeFactory(FixtureC183::class, static function (ContainerInterface $container) {
            return new FixtureC183($container->get(FixtureC182::class));
        });

        $container->prototypeFactory(FixtureC184::class, static function (ContainerInterface $container) {
            return new FixtureC184($container->get(FixtureC183::class));
        });

        $container->prototypeFactory(FixtureC185::class, static function (ContainerInterface $container) {
            return new FixtureC185($container->get(FixtureC184::class));
        });

        $container->prototypeFactory(FixtureC186::class, static function (ContainerInterface $container) {
            return new FixtureC186($container->get(FixtureC185::class));
        });

        $container->prototypeFactory(FixtureC187::class, static function (ContainerInterface $container) {
            return new FixtureC187($container->get(FixtureC186::class));
        });

        $container->prototypeFactory(FixtureC188::class, static function (ContainerInterface $container) {
            return new FixtureC188($container->get(FixtureC187::class));
        });

        $container->prototypeFactory(FixtureC189::class, static function (ContainerInterface $container) {
            return new FixtureC189($container->get(FixtureC188::class));
        });

        $container->prototypeFactory(FixtureC190::class, static function (ContainerInterface $container) {
            return new FixtureC190($container->get(FixtureC189::class));
        });

        $container->prototypeFactory(FixtureC191::class, static function (ContainerInterface $container) {
            return new FixtureC191($container->get(FixtureC190::class));
        });

        $container->prototypeFactory(FixtureC192::class, static function (ContainerInterface $container) {
            return new FixtureC192($container->get(FixtureC191::class));
        });

        $container->prototypeFactory(FixtureC193::class, static function (ContainerInterface $container) {
            return new FixtureC193($container->get(FixtureC192::class));
        });

        $container->prototypeFactory(FixtureC194::class, static function (ContainerInterface $container) {
            return new FixtureC194($container->get(FixtureC193::class));
        });

        $container->prototypeFactory(FixtureC195::class, static function (ContainerInterface $container) {
            return new FixtureC195($container->get(FixtureC194::class));
        });

        $container->prototypeFactory(FixtureC196::class, static function (ContainerInterface $container) {
            return new FixtureC196($container->get(FixtureC195::class));
        });

        $container->prototypeFactory(FixtureC197::class, static function (ContainerInterface $container) {
            return new FixtureC197($container->get(FixtureC196::class));
        });

        $container->prototypeFactory(FixtureC198::class, static function (ContainerInterface $container) {
            return new FixtureC198($container->get(FixtureC197::class));
        });

        $container->prototypeFactory(FixtureC199::class, static function (ContainerInterface $container) {
            return new FixtureC199($container->get(FixtureC198::class));
        });

        $container->prototypeFactory(FixtureC200::class, static function (ContainerInterface $container) {
            return new FixtureC200($container->get(FixtureC199::class));
        });

        $container->prototypeFactory(FixtureC201::class, static function (ContainerInterface $container) {
            return new FixtureC201($container->get(FixtureC200::class));
        });

        $container->prototypeFactory(FixtureC202::class, static function (ContainerInterface $container) {
            return new FixtureC202($container->get(FixtureC201::class));
        });

        $container->prototypeFactory(FixtureC203::class, static function (ContainerInterface $container) {
            return new FixtureC203($container->get(FixtureC202::class));
        });

        $container->prototypeFactory(FixtureC204::class, static function (ContainerInterface $container) {
            return new FixtureC204($container->get(FixtureC203::class));
        });

        $container->prototypeFactory(FixtureC205::class, static function (ContainerInterface $container) {
            return new FixtureC205($container->get(FixtureC204::class));
        });

        $container->prototypeFactory(FixtureC206::class, static function (ContainerInterface $container) {
            return new FixtureC206($container->get(FixtureC205::class));
        });

        $container->prototypeFactory(FixtureC207::class, static function (ContainerInterface $container) {
            return new FixtureC207($container->get(FixtureC206::class));
        });

        $container->prototypeFactory(FixtureC208::class, static function (ContainerInterface $container) {
            return new FixtureC208($container->get(FixtureC207::class));
        });

        $container->prototypeFactory(FixtureC209::class, static function (ContainerInterface $container) {
            return new FixtureC209($container->get(FixtureC208::class));
        });

        $container->prototypeFactory(FixtureC210::class, static function (ContainerInterface $container) {
            return new FixtureC210($container->get(FixtureC209::class));
        });

        $container->prototypeFactory(FixtureC211::class, static function (ContainerInterface $container) {
            return new FixtureC211($container->get(FixtureC210::class));
        });

        $container->prototypeFactory(FixtureC212::class, static function (ContainerInterface $container) {
            return new FixtureC212($container->get(FixtureC211::class));
        });

        $container->prototypeFactory(FixtureC213::class, static function (ContainerInterface $container) {
            return new FixtureC213($container->get(FixtureC212::class));
        });

        $container->prototypeFactory(FixtureC214::class, static function (ContainerInterface $container) {
            return new FixtureC214($container->get(FixtureC213::class));
        });

        $container->prototypeFactory(FixtureC215::class, static function (ContainerInterface $container) {
            return new FixtureC215($container->get(FixtureC214::class));
        });

        $container->prototypeFactory(FixtureC216::class, static function (ContainerInterface $container) {
            return new FixtureC216($container->get(FixtureC215::class));
        });

        $container->prototypeFactory(FixtureC217::class, static function (ContainerInterface $container) {
            return new FixtureC217($container->get(FixtureC216::class));
        });

        $container->prototypeFactory(FixtureC218::class, static function (ContainerInterface $container) {
            return new FixtureC218($container->get(FixtureC217::class));
        });

        $container->prototypeFactory(FixtureC219::class, static function (ContainerInterface $container) {
            return new FixtureC219($container->get(FixtureC218::class));
        });

        $container->prototypeFactory(FixtureC220::class, static function (ContainerInterface $container) {
            return new FixtureC220($container->get(FixtureC219::class));
        });

        $container->prototypeFactory(FixtureC221::class, static function (ContainerInterface $container) {
            return new FixtureC221($container->get(FixtureC220::class));
        });

        $container->prototypeFactory(FixtureC222::class, static function (ContainerInterface $container) {
            return new FixtureC222($container->get(FixtureC221::class));
        });

        $container->prototypeFactory(FixtureC223::class, static function (ContainerInterface $container) {
            return new FixtureC223($container->get(FixtureC222::class));
        });

        $container->prototypeFactory(FixtureC224::class, static function (ContainerInterface $container) {
            return new FixtureC224($container->get(FixtureC223::class));
        });

        $container->prototypeFactory(FixtureC225::class, static function (ContainerInterface $container) {
            return new FixtureC225($container->get(FixtureC224::class));
        });

        $container->prototypeFactory(FixtureC226::class, static function (ContainerInterface $container) {
            return new FixtureC226($container->get(FixtureC225::class));
        });

        $container->prototypeFactory(FixtureC227::class, static function (ContainerInterface $container) {
            return new FixtureC227($container->get(FixtureC226::class));
        });

        $container->prototypeFactory(FixtureC228::class, static function (ContainerInterface $container) {
            return new FixtureC228($container->get(FixtureC227::class));
        });

        $container->prototypeFactory(FixtureC229::class, static function (ContainerInterface $container) {
            return new FixtureC229($container->get(FixtureC228::class));
        });

        $container->prototypeFactory(FixtureC230::class, static function (ContainerInterface $container) {
            return new FixtureC230($container->get(FixtureC229::class));
        });

        $container->prototypeFactory(FixtureC231::class, static function (ContainerInterface $container) {
            return new FixtureC231($container->get(FixtureC230::class));
        });

        $container->prototypeFactory(FixtureC232::class, static function (ContainerInterface $container) {
            return new FixtureC232($container->get(FixtureC231::class));
        });

        $container->prototypeFactory(FixtureC233::class, static function (ContainerInterface $container) {
            return new FixtureC233($container->get(FixtureC232::class));
        });

        $container->prototypeFactory(FixtureC234::class, static function (ContainerInterface $container) {
            return new FixtureC234($container->get(FixtureC233::class));
        });

        $container->prototypeFactory(FixtureC235::class, static function (ContainerInterface $container) {
            return new FixtureC235($container->get(FixtureC234::class));
        });

        $container->prototypeFactory(FixtureC236::class, static function (ContainerInterface $container) {
            return new FixtureC236($container->get(FixtureC235::class));
        });

        $container->prototypeFactory(FixtureC237::class, static function (ContainerInterface $container) {
            return new FixtureC237($container->get(FixtureC236::class));
        });

        $container->prototypeFactory(FixtureC238::class, static function (ContainerInterface $container) {
            return new FixtureC238($container->get(FixtureC237::class));
        });

        $container->prototypeFactory(FixtureC239::class, static function (ContainerInterface $container) {
            return new FixtureC239($container->get(FixtureC238::class));
        });

        $container->prototypeFactory(FixtureC240::class, static function (ContainerInterface $container) {
            return new FixtureC240($container->get(FixtureC239::class));
        });

        $container->prototypeFactory(FixtureC241::class, static function (ContainerInterface $container) {
            return new FixtureC241($container->get(FixtureC240::class));
        });

        $container->prototypeFactory(FixtureC242::class, static function (ContainerInterface $container) {
            return new FixtureC242($container->get(FixtureC241::class));
        });

        $container->prototypeFactory(FixtureC243::class, static function (ContainerInterface $container) {
            return new FixtureC243($container->get(FixtureC242::class));
        });

        $container->prototypeFactory(FixtureC244::class, static function (ContainerInterface $container) {
            return new FixtureC244($container->get(FixtureC243::class));
        });

        $container->prototypeFactory(FixtureC245::class, static function (ContainerInterface $container) {
            return new FixtureC245($container->get(FixtureC244::class));
        });

        $container->prototypeFactory(FixtureC246::class, static function (ContainerInterface $container) {
            return new FixtureC246($container->get(FixtureC245::class));
        });

        $container->prototypeFactory(FixtureC247::class, static function (ContainerInterface $container) {
            return new FixtureC247($container->get(FixtureC246::class));
        });

        $container->prototypeFactory(FixtureC248::class, static function (ContainerInterface $container) {
            return new FixtureC248($container->get(FixtureC247::class));
        });

        $container->prototypeFactory(FixtureC249::class, static function (ContainerInterface $container) {
            return new FixtureC249($container->get(FixtureC248::class));
        });

        $container->prototypeFactory(FixtureC250::class, static function (ContainerInterface $container) {
            return new FixtureC250($container->get(FixtureC249::class));
        });

        $container->prototypeFactory(FixtureC251::class, static function (ContainerInterface $container) {
            return new FixtureC251($container->get(FixtureC250::class));
        });

        $container->prototypeFactory(FixtureC252::class, static function (ContainerInterface $container) {
            return new FixtureC252($container->get(FixtureC251::class));
        });

        $container->prototypeFactory(FixtureC253::class, static function (ContainerInterface $container) {
            return new FixtureC253($container->get(FixtureC252::class));
        });

        $container->prototypeFactory(FixtureC254::class, static function (ContainerInterface $container) {
            return new FixtureC254($container->get(FixtureC253::class));
        });

        $container->prototypeFactory(FixtureC255::class, static function (ContainerInterface $container) {
            return new FixtureC255($container->get(FixtureC254::class));
        });

        $container->prototypeFactory(FixtureC256::class, static function (ContainerInterface $container) {
            return new FixtureC256($container->get(FixtureC255::class));
        });

        $container->prototypeFactory(FixtureC257::class, static function (ContainerInterface $container) {
            return new FixtureC257($container->get(FixtureC256::class));
        });

        $container->prototypeFactory(FixtureC258::class, static function (ContainerInterface $container) {
            return new FixtureC258($container->get(FixtureC257::class));
        });

        $container->prototypeFactory(FixtureC259::class, static function (ContainerInterface $container) {
            return new FixtureC259($container->get(FixtureC258::class));
        });

        $container->prototypeFactory(FixtureC260::class, static function (ContainerInterface $container) {
            return new FixtureC260($container->get(FixtureC259::class));
        });

        $container->prototypeFactory(FixtureC261::class, static function (ContainerInterface $container) {
            return new FixtureC261($container->get(FixtureC260::class));
        });

        $container->prototypeFactory(FixtureC262::class, static function (ContainerInterface $container) {
            return new FixtureC262($container->get(FixtureC261::class));
        });

        $container->prototypeFactory(FixtureC263::class, static function (ContainerInterface $container) {
            return new FixtureC263($container->get(FixtureC262::class));
        });

        $container->prototypeFactory(FixtureC264::class, static function (ContainerInterface $container) {
            return new FixtureC264($container->get(FixtureC263::class));
        });

        $container->prototypeFactory(FixtureC265::class, static function (ContainerInterface $container) {
            return new FixtureC265($container->get(FixtureC264::class));
        });

        $container->prototypeFactory(FixtureC266::class, static function (ContainerInterface $container) {
            return new FixtureC266($container->get(FixtureC265::class));
        });

        $container->prototypeFactory(FixtureC267::class, static function (ContainerInterface $container) {
            return new FixtureC267($container->get(FixtureC266::class));
        });

        $container->prototypeFactory(FixtureC268::class, static function (ContainerInterface $container) {
            return new FixtureC268($container->get(FixtureC267::class));
        });

        $container->prototypeFactory(FixtureC269::class, static function (ContainerInterface $container) {
            return new FixtureC269($container->get(FixtureC268::class));
        });

        $container->prototypeFactory(FixtureC270::class, static function (ContainerInterface $container) {
            return new FixtureC270($container->get(FixtureC269::class));
        });

        $container->prototypeFactory(FixtureC271::class, static function (ContainerInterface $container) {
            return new FixtureC271($container->get(FixtureC270::class));
        });

        $container->prototypeFactory(FixtureC272::class, static function (ContainerInterface $container) {
            return new FixtureC272($container->get(FixtureC271::class));
        });

        $container->prototypeFactory(FixtureC273::class, static function (ContainerInterface $container) {
            return new FixtureC273($container->get(FixtureC272::class));
        });

        $container->prototypeFactory(FixtureC274::class, static function (ContainerInterface $container) {
            return new FixtureC274($container->get(FixtureC273::class));
        });

        $container->prototypeFactory(FixtureC275::class, static function (ContainerInterface $container) {
            return new FixtureC275($container->get(FixtureC274::class));
        });

        $container->prototypeFactory(FixtureC276::class, static function (ContainerInterface $container) {
            return new FixtureC276($container->get(FixtureC275::class));
        });

        $container->prototypeFactory(FixtureC277::class, static function (ContainerInterface $container) {
            return new FixtureC277($container->get(FixtureC276::class));
        });

        $container->prototypeFactory(FixtureC278::class, static function (ContainerInterface $container) {
            return new FixtureC278($container->get(FixtureC277::class));
        });

        $container->prototypeFactory(FixtureC279::class, static function (ContainerInterface $container) {
            return new FixtureC279($container->get(FixtureC278::class));
        });

        $container->prototypeFactory(FixtureC280::class, static function (ContainerInterface $container) {
            return new FixtureC280($container->get(FixtureC279::class));
        });

        $container->prototypeFactory(FixtureC281::class, static function (ContainerInterface $container) {
            return new FixtureC281($container->get(FixtureC280::class));
        });

        $container->prototypeFactory(FixtureC282::class, static function (ContainerInterface $container) {
            return new FixtureC282($container->get(FixtureC281::class));
        });

        $container->prototypeFactory(FixtureC283::class, static function (ContainerInterface $container) {
            return new FixtureC283($container->get(FixtureC282::class));
        });

        $container->prototypeFactory(FixtureC284::class, static function (ContainerInterface $container) {
            return new FixtureC284($container->get(FixtureC283::class));
        });

        $container->prototypeFactory(FixtureC285::class, static function (ContainerInterface $container) {
            return new FixtureC285($container->get(FixtureC284::class));
        });

        $container->prototypeFactory(FixtureC286::class, static function (ContainerInterface $container) {
            return new FixtureC286($container->get(FixtureC285::class));
        });

        $container->prototypeFactory(FixtureC287::class, static function (ContainerInterface $container) {
            return new FixtureC287($container->get(FixtureC286::class));
        });

        $container->prototypeFactory(FixtureC288::class, static function (ContainerInterface $container) {
            return new FixtureC288($container->get(FixtureC287::class));
        });

        $container->prototypeFactory(FixtureC289::class, static function (ContainerInterface $container) {
            return new FixtureC289($container->get(FixtureC288::class));
        });

        $container->prototypeFactory(FixtureC290::class, static function (ContainerInterface $container) {
            return new FixtureC290($container->get(FixtureC289::class));
        });

        $container->prototypeFactory(FixtureC291::class, static function (ContainerInterface $container) {
            return new FixtureC291($container->get(FixtureC290::class));
        });

        $container->prototypeFactory(FixtureC292::class, static function (ContainerInterface $container) {
            return new FixtureC292($container->get(FixtureC291::class));
        });

        $container->prototypeFactory(FixtureC293::class, static function (ContainerInterface $container) {
            return new FixtureC293($container->get(FixtureC292::class));
        });

        $container->prototypeFactory(FixtureC294::class, static function (ContainerInterface $container) {
            return new FixtureC294($container->get(FixtureC293::class));
        });

        $container->prototypeFactory(FixtureC295::class, static function (ContainerInterface $container) {
            return new FixtureC295($container->get(FixtureC294::class));
        });

        $container->prototypeFactory(FixtureC296::class, static function (ContainerInterface $container) {
            return new FixtureC296($container->get(FixtureC295::class));
        });

        $container->prototypeFactory(FixtureC297::class, static function (ContainerInterface $container) {
            return new FixtureC297($container->get(FixtureC296::class));
        });

        $container->prototypeFactory(FixtureC298::class, static function (ContainerInterface $container) {
            return new FixtureC298($container->get(FixtureC297::class));
        });

        $container->prototypeFactory(FixtureC299::class, static function (ContainerInterface $container) {
            return new FixtureC299($container->get(FixtureC298::class));
        });

        $container->prototypeFactory(FixtureC300::class, static function (ContainerInterface $container) {
            return new FixtureC300($container->get(FixtureC299::class));
        });

        $container->prototypeFactory(FixtureC301::class, static function (ContainerInterface $container) {
            return new FixtureC301($container->get(FixtureC300::class));
        });

        $container->prototypeFactory(FixtureC302::class, static function (ContainerInterface $container) {
            return new FixtureC302($container->get(FixtureC301::class));
        });

        $container->prototypeFactory(FixtureC303::class, static function (ContainerInterface $container) {
            return new FixtureC303($container->get(FixtureC302::class));
        });

        $container->prototypeFactory(FixtureC304::class, static function (ContainerInterface $container) {
            return new FixtureC304($container->get(FixtureC303::class));
        });

        $container->prototypeFactory(FixtureC305::class, static function (ContainerInterface $container) {
            return new FixtureC305($container->get(FixtureC304::class));
        });

        $container->prototypeFactory(FixtureC306::class, static function (ContainerInterface $container) {
            return new FixtureC306($container->get(FixtureC305::class));
        });

        $container->prototypeFactory(FixtureC307::class, static function (ContainerInterface $container) {
            return new FixtureC307($container->get(FixtureC306::class));
        });

        $container->prototypeFactory(FixtureC308::class, static function (ContainerInterface $container) {
            return new FixtureC308($container->get(FixtureC307::class));
        });

        $container->prototypeFactory(FixtureC309::class, static function (ContainerInterface $container) {
            return new FixtureC309($container->get(FixtureC308::class));
        });

        $container->prototypeFactory(FixtureC310::class, static function (ContainerInterface $container) {
            return new FixtureC310($container->get(FixtureC309::class));
        });

        $container->prototypeFactory(FixtureC311::class, static function (ContainerInterface $container) {
            return new FixtureC311($container->get(FixtureC310::class));
        });

        $container->prototypeFactory(FixtureC312::class, static function (ContainerInterface $container) {
            return new FixtureC312($container->get(FixtureC311::class));
        });

        $container->prototypeFactory(FixtureC313::class, static function (ContainerInterface $container) {
            return new FixtureC313($container->get(FixtureC312::class));
        });

        $container->prototypeFactory(FixtureC314::class, static function (ContainerInterface $container) {
            return new FixtureC314($container->get(FixtureC313::class));
        });

        $container->prototypeFactory(FixtureC315::class, static function (ContainerInterface $container) {
            return new FixtureC315($container->get(FixtureC314::class));
        });

        $container->prototypeFactory(FixtureC316::class, static function (ContainerInterface $container) {
            return new FixtureC316($container->get(FixtureC315::class));
        });

        $container->prototypeFactory(FixtureC317::class, static function (ContainerInterface $container) {
            return new FixtureC317($container->get(FixtureC316::class));
        });

        $container->prototypeFactory(FixtureC318::class, static function (ContainerInterface $container) {
            return new FixtureC318($container->get(FixtureC317::class));
        });

        $container->prototypeFactory(FixtureC319::class, static function (ContainerInterface $container) {
            return new FixtureC319($container->get(FixtureC318::class));
        });

        $container->prototypeFactory(FixtureC320::class, static function (ContainerInterface $container) {
            return new FixtureC320($container->get(FixtureC319::class));
        });

        $container->prototypeFactory(FixtureC321::class, static function (ContainerInterface $container) {
            return new FixtureC321($container->get(FixtureC320::class));
        });

        $container->prototypeFactory(FixtureC322::class, static function (ContainerInterface $container) {
            return new FixtureC322($container->get(FixtureC321::class));
        });

        $container->prototypeFactory(FixtureC323::class, static function (ContainerInterface $container) {
            return new FixtureC323($container->get(FixtureC322::class));
        });

        $container->prototypeFactory(FixtureC324::class, static function (ContainerInterface $container) {
            return new FixtureC324($container->get(FixtureC323::class));
        });

        $container->prototypeFactory(FixtureC325::class, static function (ContainerInterface $container) {
            return new FixtureC325($container->get(FixtureC324::class));
        });

        $container->prototypeFactory(FixtureC326::class, static function (ContainerInterface $container) {
            return new FixtureC326($container->get(FixtureC325::class));
        });

        $container->prototypeFactory(FixtureC327::class, static function (ContainerInterface $container) {
            return new FixtureC327($container->get(FixtureC326::class));
        });

        $container->prototypeFactory(FixtureC328::class, static function (ContainerInterface $container) {
            return new FixtureC328($container->get(FixtureC327::class));
        });

        $container->prototypeFactory(FixtureC329::class, static function (ContainerInterface $container) {
            return new FixtureC329($container->get(FixtureC328::class));
        });

        $container->prototypeFactory(FixtureC330::class, static function (ContainerInterface $container) {
            return new FixtureC330($container->get(FixtureC329::class));
        });

        $container->prototypeFactory(FixtureC331::class, static function (ContainerInterface $container) {
            return new FixtureC331($container->get(FixtureC330::class));
        });

        $container->prototypeFactory(FixtureC332::class, static function (ContainerInterface $container) {
            return new FixtureC332($container->get(FixtureC331::class));
        });

        $container->prototypeFactory(FixtureC333::class, static function (ContainerInterface $container) {
            return new FixtureC333($container->get(FixtureC332::class));
        });

        $container->prototypeFactory(FixtureC334::class, static function (ContainerInterface $container) {
            return new FixtureC334($container->get(FixtureC333::class));
        });

        $container->prototypeFactory(FixtureC335::class, static function (ContainerInterface $container) {
            return new FixtureC335($container->get(FixtureC334::class));
        });

        $container->prototypeFactory(FixtureC336::class, static function (ContainerInterface $container) {
            return new FixtureC336($container->get(FixtureC335::class));
        });

        $container->prototypeFactory(FixtureC337::class, static function (ContainerInterface $container) {
            return new FixtureC337($container->get(FixtureC336::class));
        });

        $container->prototypeFactory(FixtureC338::class, static function (ContainerInterface $container) {
            return new FixtureC338($container->get(FixtureC337::class));
        });

        $container->prototypeFactory(FixtureC339::class, static function (ContainerInterface $container) {
            return new FixtureC339($container->get(FixtureC338::class));
        });

        $container->prototypeFactory(FixtureC340::class, static function (ContainerInterface $container) {
            return new FixtureC340($container->get(FixtureC339::class));
        });

        $container->prototypeFactory(FixtureC341::class, static function (ContainerInterface $container) {
            return new FixtureC341($container->get(FixtureC340::class));
        });

        $container->prototypeFactory(FixtureC342::class, static function (ContainerInterface $container) {
            return new FixtureC342($container->get(FixtureC341::class));
        });

        $container->prototypeFactory(FixtureC343::class, static function (ContainerInterface $container) {
            return new FixtureC343($container->get(FixtureC342::class));
        });

        $container->prototypeFactory(FixtureC344::class, static function (ContainerInterface $container) {
            return new FixtureC344($container->get(FixtureC343::class));
        });

        $container->prototypeFactory(FixtureC345::class, static function (ContainerInterface $container) {
            return new FixtureC345($container->get(FixtureC344::class));
        });

        $container->prototypeFactory(FixtureC346::class, static function (ContainerInterface $container) {
            return new FixtureC346($container->get(FixtureC345::class));
        });

        $container->prototypeFactory(FixtureC347::class, static function (ContainerInterface $container) {
            return new FixtureC347($container->get(FixtureC346::class));
        });

        $container->prototypeFactory(FixtureC348::class, static function (ContainerInterface $container) {
            return new FixtureC348($container->get(FixtureC347::class));
        });

        $container->prototypeFactory(FixtureC349::class, static function (ContainerInterface $container) {
            return new FixtureC349($container->get(FixtureC348::class));
        });

        $container->prototypeFactory(FixtureC350::class, static function (ContainerInterface $container) {
            return new FixtureC350($container->get(FixtureC349::class));
        });

        $container->prototypeFactory(FixtureC351::class, static function (ContainerInterface $container) {
            return new FixtureC351($container->get(FixtureC350::class));
        });

        $container->prototypeFactory(FixtureC352::class, static function (ContainerInterface $container) {
            return new FixtureC352($container->get(FixtureC351::class));
        });

        $container->prototypeFactory(FixtureC353::class, static function (ContainerInterface $container) {
            return new FixtureC353($container->get(FixtureC352::class));
        });

        $container->prototypeFactory(FixtureC354::class, static function (ContainerInterface $container) {
            return new FixtureC354($container->get(FixtureC353::class));
        });

        $container->prototypeFactory(FixtureC355::class, static function (ContainerInterface $container) {
            return new FixtureC355($container->get(FixtureC354::class));
        });

        $container->prototypeFactory(FixtureC356::class, static function (ContainerInterface $container) {
            return new FixtureC356($container->get(FixtureC355::class));
        });

        $container->prototypeFactory(FixtureC357::class, static function (ContainerInterface $container) {
            return new FixtureC357($container->get(FixtureC356::class));
        });

        $container->prototypeFactory(FixtureC358::class, static function (ContainerInterface $container) {
            return new FixtureC358($container->get(FixtureC357::class));
        });

        $container->prototypeFactory(FixtureC359::class, static function (ContainerInterface $container) {
            return new FixtureC359($container->get(FixtureC358::class));
        });

        $container->prototypeFactory(FixtureC360::class, static function (ContainerInterface $container) {
            return new FixtureC360($container->get(FixtureC359::class));
        });

        $container->prototypeFactory(FixtureC361::class, static function (ContainerInterface $container) {
            return new FixtureC361($container->get(FixtureC360::class));
        });

        $container->prototypeFactory(FixtureC362::class, static function (ContainerInterface $container) {
            return new FixtureC362($container->get(FixtureC361::class));
        });

        $container->prototypeFactory(FixtureC363::class, static function (ContainerInterface $container) {
            return new FixtureC363($container->get(FixtureC362::class));
        });

        $container->prototypeFactory(FixtureC364::class, static function (ContainerInterface $container) {
            return new FixtureC364($container->get(FixtureC363::class));
        });

        $container->prototypeFactory(FixtureC365::class, static function (ContainerInterface $container) {
            return new FixtureC365($container->get(FixtureC364::class));
        });

        $container->prototypeFactory(FixtureC366::class, static function (ContainerInterface $container) {
            return new FixtureC366($container->get(FixtureC365::class));
        });

        $container->prototypeFactory(FixtureC367::class, static function (ContainerInterface $container) {
            return new FixtureC367($container->get(FixtureC366::class));
        });

        $container->prototypeFactory(FixtureC368::class, static function (ContainerInterface $container) {
            return new FixtureC368($container->get(FixtureC367::class));
        });

        $container->prototypeFactory(FixtureC369::class, static function (ContainerInterface $container) {
            return new FixtureC369($container->get(FixtureC368::class));
        });

        $container->prototypeFactory(FixtureC370::class, static function (ContainerInterface $container) {
            return new FixtureC370($container->get(FixtureC369::class));
        });

        $container->prototypeFactory(FixtureC371::class, static function (ContainerInterface $container) {
            return new FixtureC371($container->get(FixtureC370::class));
        });

        $container->prototypeFactory(FixtureC372::class, static function (ContainerInterface $container) {
            return new FixtureC372($container->get(FixtureC371::class));
        });

        $container->prototypeFactory(FixtureC373::class, static function (ContainerInterface $container) {
            return new FixtureC373($container->get(FixtureC372::class));
        });

        $container->prototypeFactory(FixtureC374::class, static function (ContainerInterface $container) {
            return new FixtureC374($container->get(FixtureC373::class));
        });

        $container->prototypeFactory(FixtureC375::class, static function (ContainerInterface $container) {
            return new FixtureC375($container->get(FixtureC374::class));
        });

        $container->prototypeFactory(FixtureC376::class, static function (ContainerInterface $container) {
            return new FixtureC376($container->get(FixtureC375::class));
        });

        $container->prototypeFactory(FixtureC377::class, static function (ContainerInterface $container) {
            return new FixtureC377($container->get(FixtureC376::class));
        });

        $container->prototypeFactory(FixtureC378::class, static function (ContainerInterface $container) {
            return new FixtureC378($container->get(FixtureC377::class));
        });

        $container->prototypeFactory(FixtureC379::class, static function (ContainerInterface $container) {
            return new FixtureC379($container->get(FixtureC378::class));
        });

        $container->prototypeFactory(FixtureC380::class, static function (ContainerInterface $container) {
            return new FixtureC380($container->get(FixtureC379::class));
        });

        $container->prototypeFactory(FixtureC381::class, static function (ContainerInterface $container) {
            return new FixtureC381($container->get(FixtureC380::class));
        });

        $container->prototypeFactory(FixtureC382::class, static function (ContainerInterface $container) {
            return new FixtureC382($container->get(FixtureC381::class));
        });

        $container->prototypeFactory(FixtureC383::class, static function (ContainerInterface $container) {
            return new FixtureC383($container->get(FixtureC382::class));
        });

        $container->prototypeFactory(FixtureC384::class, static function (ContainerInterface $container) {
            return new FixtureC384($container->get(FixtureC383::class));
        });

        $container->prototypeFactory(FixtureC385::class, static function (ContainerInterface $container) {
            return new FixtureC385($container->get(FixtureC384::class));
        });

        $container->prototypeFactory(FixtureC386::class, static function (ContainerInterface $container) {
            return new FixtureC386($container->get(FixtureC385::class));
        });

        $container->prototypeFactory(FixtureC387::class, static function (ContainerInterface $container) {
            return new FixtureC387($container->get(FixtureC386::class));
        });

        $container->prototypeFactory(FixtureC388::class, static function (ContainerInterface $container) {
            return new FixtureC388($container->get(FixtureC387::class));
        });

        $container->prototypeFactory(FixtureC389::class, static function (ContainerInterface $container) {
            return new FixtureC389($container->get(FixtureC388::class));
        });

        $container->prototypeFactory(FixtureC390::class, static function (ContainerInterface $container) {
            return new FixtureC390($container->get(FixtureC389::class));
        });

        $container->prototypeFactory(FixtureC391::class, static function (ContainerInterface $container) {
            return new FixtureC391($container->get(FixtureC390::class));
        });

        $container->prototypeFactory(FixtureC392::class, static function (ContainerInterface $container) {
            return new FixtureC392($container->get(FixtureC391::class));
        });

        $container->prototypeFactory(FixtureC393::class, static function (ContainerInterface $container) {
            return new FixtureC393($container->get(FixtureC392::class));
        });

        $container->prototypeFactory(FixtureC394::class, static function (ContainerInterface $container) {
            return new FixtureC394($container->get(FixtureC393::class));
        });

        $container->prototypeFactory(FixtureC395::class, static function (ContainerInterface $container) {
            return new FixtureC395($container->get(FixtureC394::class));
        });

        $container->prototypeFactory(FixtureC396::class, static function (ContainerInterface $container) {
            return new FixtureC396($container->get(FixtureC395::class));
        });

        $container->prototypeFactory(FixtureC397::class, static function (ContainerInterface $container) {
            return new FixtureC397($container->get(FixtureC396::class));
        });

        $container->prototypeFactory(FixtureC398::class, static function (ContainerInterface $container) {
            return new FixtureC398($container->get(FixtureC397::class));
        });

        $container->prototypeFactory(FixtureC399::class, static function (ContainerInterface $container) {
            return new FixtureC399($container->get(FixtureC398::class));
        });

        $container->prototypeFactory(FixtureC400::class, static function (ContainerInterface $container) {
            return new FixtureC400($container->get(FixtureC399::class));
        });

        $container->prototypeFactory(FixtureC401::class, static function (ContainerInterface $container) {
            return new FixtureC401($container->get(FixtureC400::class));
        });

        $container->prototypeFactory(FixtureC402::class, static function (ContainerInterface $container) {
            return new FixtureC402($container->get(FixtureC401::class));
        });

        $container->prototypeFactory(FixtureC403::class, static function (ContainerInterface $container) {
            return new FixtureC403($container->get(FixtureC402::class));
        });

        $container->prototypeFactory(FixtureC404::class, static function (ContainerInterface $container) {
            return new FixtureC404($container->get(FixtureC403::class));
        });

        $container->prototypeFactory(FixtureC405::class, static function (ContainerInterface $container) {
            return new FixtureC405($container->get(FixtureC404::class));
        });

        $container->prototypeFactory(FixtureC406::class, static function (ContainerInterface $container) {
            return new FixtureC406($container->get(FixtureC405::class));
        });

        $container->prototypeFactory(FixtureC407::class, static function (ContainerInterface $container) {
            return new FixtureC407($container->get(FixtureC406::class));
        });

        $container->prototypeFactory(FixtureC408::class, static function (ContainerInterface $container) {
            return new FixtureC408($container->get(FixtureC407::class));
        });

        $container->prototypeFactory(FixtureC409::class, static function (ContainerInterface $container) {
            return new FixtureC409($container->get(FixtureC408::class));
        });

        $container->prototypeFactory(FixtureC410::class, static function (ContainerInterface $container) {
            return new FixtureC410($container->get(FixtureC409::class));
        });

        $container->prototypeFactory(FixtureC411::class, static function (ContainerInterface $container) {
            return new FixtureC411($container->get(FixtureC410::class));
        });

        $container->prototypeFactory(FixtureC412::class, static function (ContainerInterface $container) {
            return new FixtureC412($container->get(FixtureC411::class));
        });

        $container->prototypeFactory(FixtureC413::class, static function (ContainerInterface $container) {
            return new FixtureC413($container->get(FixtureC412::class));
        });

        $container->prototypeFactory(FixtureC414::class, static function (ContainerInterface $container) {
            return new FixtureC414($container->get(FixtureC413::class));
        });

        $container->prototypeFactory(FixtureC415::class, static function (ContainerInterface $container) {
            return new FixtureC415($container->get(FixtureC414::class));
        });

        $container->prototypeFactory(FixtureC416::class, static function (ContainerInterface $container) {
            return new FixtureC416($container->get(FixtureC415::class));
        });

        $container->prototypeFactory(FixtureC417::class, static function (ContainerInterface $container) {
            return new FixtureC417($container->get(FixtureC416::class));
        });

        $container->prototypeFactory(FixtureC418::class, static function (ContainerInterface $container) {
            return new FixtureC418($container->get(FixtureC417::class));
        });

        $container->prototypeFactory(FixtureC419::class, static function (ContainerInterface $container) {
            return new FixtureC419($container->get(FixtureC418::class));
        });

        $container->prototypeFactory(FixtureC420::class, static function (ContainerInterface $container) {
            return new FixtureC420($container->get(FixtureC419::class));
        });

        $container->prototypeFactory(FixtureC421::class, static function (ContainerInterface $container) {
            return new FixtureC421($container->get(FixtureC420::class));
        });

        $container->prototypeFactory(FixtureC422::class, static function (ContainerInterface $container) {
            return new FixtureC422($container->get(FixtureC421::class));
        });

        $container->prototypeFactory(FixtureC423::class, static function (ContainerInterface $container) {
            return new FixtureC423($container->get(FixtureC422::class));
        });

        $container->prototypeFactory(FixtureC424::class, static function (ContainerInterface $container) {
            return new FixtureC424($container->get(FixtureC423::class));
        });

        $container->prototypeFactory(FixtureC425::class, static function (ContainerInterface $container) {
            return new FixtureC425($container->get(FixtureC424::class));
        });

        $container->prototypeFactory(FixtureC426::class, static function (ContainerInterface $container) {
            return new FixtureC426($container->get(FixtureC425::class));
        });

        $container->prototypeFactory(FixtureC427::class, static function (ContainerInterface $container) {
            return new FixtureC427($container->get(FixtureC426::class));
        });

        $container->prototypeFactory(FixtureC428::class, static function (ContainerInterface $container) {
            return new FixtureC428($container->get(FixtureC427::class));
        });

        $container->prototypeFactory(FixtureC429::class, static function (ContainerInterface $container) {
            return new FixtureC429($container->get(FixtureC428::class));
        });

        $container->prototypeFactory(FixtureC430::class, static function (ContainerInterface $container) {
            return new FixtureC430($container->get(FixtureC429::class));
        });

        $container->prototypeFactory(FixtureC431::class, static function (ContainerInterface $container) {
            return new FixtureC431($container->get(FixtureC430::class));
        });

        $container->prototypeFactory(FixtureC432::class, static function (ContainerInterface $container) {
            return new FixtureC432($container->get(FixtureC431::class));
        });

        $container->prototypeFactory(FixtureC433::class, static function (ContainerInterface $container) {
            return new FixtureC433($container->get(FixtureC432::class));
        });

        $container->prototypeFactory(FixtureC434::class, static function (ContainerInterface $container) {
            return new FixtureC434($container->get(FixtureC433::class));
        });

        $container->prototypeFactory(FixtureC435::class, static function (ContainerInterface $container) {
            return new FixtureC435($container->get(FixtureC434::class));
        });

        $container->prototypeFactory(FixtureC436::class, static function (ContainerInterface $container) {
            return new FixtureC436($container->get(FixtureC435::class));
        });

        $container->prototypeFactory(FixtureC437::class, static function (ContainerInterface $container) {
            return new FixtureC437($container->get(FixtureC436::class));
        });

        $container->prototypeFactory(FixtureC438::class, static function (ContainerInterface $container) {
            return new FixtureC438($container->get(FixtureC437::class));
        });

        $container->prototypeFactory(FixtureC439::class, static function (ContainerInterface $container) {
            return new FixtureC439($container->get(FixtureC438::class));
        });

        $container->prototypeFactory(FixtureC440::class, static function (ContainerInterface $container) {
            return new FixtureC440($container->get(FixtureC439::class));
        });

        $container->prototypeFactory(FixtureC441::class, static function (ContainerInterface $container) {
            return new FixtureC441($container->get(FixtureC440::class));
        });

        $container->prototypeFactory(FixtureC442::class, static function (ContainerInterface $container) {
            return new FixtureC442($container->get(FixtureC441::class));
        });

        $container->prototypeFactory(FixtureC443::class, static function (ContainerInterface $container) {
            return new FixtureC443($container->get(FixtureC442::class));
        });

        $container->prototypeFactory(FixtureC444::class, static function (ContainerInterface $container) {
            return new FixtureC444($container->get(FixtureC443::class));
        });

        $container->prototypeFactory(FixtureC445::class, static function (ContainerInterface $container) {
            return new FixtureC445($container->get(FixtureC444::class));
        });

        $container->prototypeFactory(FixtureC446::class, static function (ContainerInterface $container) {
            return new FixtureC446($container->get(FixtureC445::class));
        });

        $container->prototypeFactory(FixtureC447::class, static function (ContainerInterface $container) {
            return new FixtureC447($container->get(FixtureC446::class));
        });

        $container->prototypeFactory(FixtureC448::class, static function (ContainerInterface $container) {
            return new FixtureC448($container->get(FixtureC447::class));
        });

        $container->prototypeFactory(FixtureC449::class, static function (ContainerInterface $container) {
            return new FixtureC449($container->get(FixtureC448::class));
        });

        $container->prototypeFactory(FixtureC450::class, static function (ContainerInterface $container) {
            return new FixtureC450($container->get(FixtureC449::class));
        });

        $container->prototypeFactory(FixtureC451::class, static function (ContainerInterface $container) {
            return new FixtureC451($container->get(FixtureC450::class));
        });

        $container->prototypeFactory(FixtureC452::class, static function (ContainerInterface $container) {
            return new FixtureC452($container->get(FixtureC451::class));
        });

        $container->prototypeFactory(FixtureC453::class, static function (ContainerInterface $container) {
            return new FixtureC453($container->get(FixtureC452::class));
        });

        $container->prototypeFactory(FixtureC454::class, static function (ContainerInterface $container) {
            return new FixtureC454($container->get(FixtureC453::class));
        });

        $container->prototypeFactory(FixtureC455::class, static function (ContainerInterface $container) {
            return new FixtureC455($container->get(FixtureC454::class));
        });

        $container->prototypeFactory(FixtureC456::class, static function (ContainerInterface $container) {
            return new FixtureC456($container->get(FixtureC455::class));
        });

        $container->prototypeFactory(FixtureC457::class, static function (ContainerInterface $container) {
            return new FixtureC457($container->get(FixtureC456::class));
        });

        $container->prototypeFactory(FixtureC458::class, static function (ContainerInterface $container) {
            return new FixtureC458($container->get(FixtureC457::class));
        });

        $container->prototypeFactory(FixtureC459::class, static function (ContainerInterface $container) {
            return new FixtureC459($container->get(FixtureC458::class));
        });

        $container->prototypeFactory(FixtureC460::class, static function (ContainerInterface $container) {
            return new FixtureC460($container->get(FixtureC459::class));
        });

        $container->prototypeFactory(FixtureC461::class, static function (ContainerInterface $container) {
            return new FixtureC461($container->get(FixtureC460::class));
        });

        $container->prototypeFactory(FixtureC462::class, static function (ContainerInterface $container) {
            return new FixtureC462($container->get(FixtureC461::class));
        });

        $container->prototypeFactory(FixtureC463::class, static function (ContainerInterface $container) {
            return new FixtureC463($container->get(FixtureC462::class));
        });

        $container->prototypeFactory(FixtureC464::class, static function (ContainerInterface $container) {
            return new FixtureC464($container->get(FixtureC463::class));
        });

        $container->prototypeFactory(FixtureC465::class, static function (ContainerInterface $container) {
            return new FixtureC465($container->get(FixtureC464::class));
        });

        $container->prototypeFactory(FixtureC466::class, static function (ContainerInterface $container) {
            return new FixtureC466($container->get(FixtureC465::class));
        });

        $container->prototypeFactory(FixtureC467::class, static function (ContainerInterface $container) {
            return new FixtureC467($container->get(FixtureC466::class));
        });

        $container->prototypeFactory(FixtureC468::class, static function (ContainerInterface $container) {
            return new FixtureC468($container->get(FixtureC467::class));
        });

        $container->prototypeFactory(FixtureC469::class, static function (ContainerInterface $container) {
            return new FixtureC469($container->get(FixtureC468::class));
        });

        $container->prototypeFactory(FixtureC470::class, static function (ContainerInterface $container) {
            return new FixtureC470($container->get(FixtureC469::class));
        });

        $container->prototypeFactory(FixtureC471::class, static function (ContainerInterface $container) {
            return new FixtureC471($container->get(FixtureC470::class));
        });

        $container->prototypeFactory(FixtureC472::class, static function (ContainerInterface $container) {
            return new FixtureC472($container->get(FixtureC471::class));
        });

        $container->prototypeFactory(FixtureC473::class, static function (ContainerInterface $container) {
            return new FixtureC473($container->get(FixtureC472::class));
        });

        $container->prototypeFactory(FixtureC474::class, static function (ContainerInterface $container) {
            return new FixtureC474($container->get(FixtureC473::class));
        });

        $container->prototypeFactory(FixtureC475::class, static function (ContainerInterface $container) {
            return new FixtureC475($container->get(FixtureC474::class));
        });

        $container->prototypeFactory(FixtureC476::class, static function (ContainerInterface $container) {
            return new FixtureC476($container->get(FixtureC475::class));
        });

        $container->prototypeFactory(FixtureC477::class, static function (ContainerInterface $container) {
            return new FixtureC477($container->get(FixtureC476::class));
        });

        $container->prototypeFactory(FixtureC478::class, static function (ContainerInterface $container) {
            return new FixtureC478($container->get(FixtureC477::class));
        });

        $container->prototypeFactory(FixtureC479::class, static function (ContainerInterface $container) {
            return new FixtureC479($container->get(FixtureC478::class));
        });

        $container->prototypeFactory(FixtureC480::class, static function (ContainerInterface $container) {
            return new FixtureC480($container->get(FixtureC479::class));
        });

        $container->prototypeFactory(FixtureC481::class, static function (ContainerInterface $container) {
            return new FixtureC481($container->get(FixtureC480::class));
        });

        $container->prototypeFactory(FixtureC482::class, static function (ContainerInterface $container) {
            return new FixtureC482($container->get(FixtureC481::class));
        });

        $container->prototypeFactory(FixtureC483::class, static function (ContainerInterface $container) {
            return new FixtureC483($container->get(FixtureC482::class));
        });

        $container->prototypeFactory(FixtureC484::class, static function (ContainerInterface $container) {
            return new FixtureC484($container->get(FixtureC483::class));
        });

        $container->prototypeFactory(FixtureC485::class, static function (ContainerInterface $container) {
            return new FixtureC485($container->get(FixtureC484::class));
        });

        $container->prototypeFactory(FixtureC486::class, static function (ContainerInterface $container) {
            return new FixtureC486($container->get(FixtureC485::class));
        });

        $container->prototypeFactory(FixtureC487::class, static function (ContainerInterface $container) {
            return new FixtureC487($container->get(FixtureC486::class));
        });

        $container->prototypeFactory(FixtureC488::class, static function (ContainerInterface $container) {
            return new FixtureC488($container->get(FixtureC487::class));
        });

        $container->prototypeFactory(FixtureC489::class, static function (ContainerInterface $container) {
            return new FixtureC489($container->get(FixtureC488::class));
        });

        $container->prototypeFactory(FixtureC490::class, static function (ContainerInterface $container) {
            return new FixtureC490($container->get(FixtureC489::class));
        });

        $container->prototypeFactory(FixtureC491::class, static function (ContainerInterface $container) {
            return new FixtureC491($container->get(FixtureC490::class));
        });

        $container->prototypeFactory(FixtureC492::class, static function (ContainerInterface $container) {
            return new FixtureC492($container->get(FixtureC491::class));
        });

        $container->prototypeFactory(FixtureC493::class, static function (ContainerInterface $container) {
            return new FixtureC493($container->get(FixtureC492::class));
        });

        $container->prototypeFactory(FixtureC494::class, static function (ContainerInterface $container) {
            return new FixtureC494($container->get(FixtureC493::class));
        });

        $container->prototypeFactory(FixtureC495::class, static function (ContainerInterface $container) {
            return new FixtureC495($container->get(FixtureC494::class));
        });

        $container->prototypeFactory(FixtureC496::class, static function (ContainerInterface $container) {
            return new FixtureC496($container->get(FixtureC495::class));
        });

        $container->prototypeFactory(FixtureC497::class, static function (ContainerInterface $container) {
            return new FixtureC497($container->get(FixtureC496::class));
        });

        $container->prototypeFactory(FixtureC498::class, static function (ContainerInterface $container) {
            return new FixtureC498($container->get(FixtureC497::class));
        });

        $container->prototypeFactory(FixtureC499::class, static function (ContainerInterface $container) {
            return new FixtureC499($container->get(FixtureC498::class));
        });

        $container->prototypeFactory(FixtureC500::class, static function (ContainerInterface $container) {
            return new FixtureC500($container->get(FixtureC499::class));
        });

        $container->prototypeFactory(FixtureC501::class, static function (ContainerInterface $container) {
            return new FixtureC501($container->get(FixtureC500::class));
        });

        $container->prototypeFactory(FixtureC502::class, static function (ContainerInterface $container) {
            return new FixtureC502($container->get(FixtureC501::class));
        });

        $container->prototypeFactory(FixtureC503::class, static function (ContainerInterface $container) {
            return new FixtureC503($container->get(FixtureC502::class));
        });

        $container->prototypeFactory(FixtureC504::class, static function (ContainerInterface $container) {
            return new FixtureC504($container->get(FixtureC503::class));
        });

        $container->prototypeFactory(FixtureC505::class, static function (ContainerInterface $container) {
            return new FixtureC505($container->get(FixtureC504::class));
        });

        $container->prototypeFactory(FixtureC506::class, static function (ContainerInterface $container) {
            return new FixtureC506($container->get(FixtureC505::class));
        });

        $container->prototypeFactory(FixtureC507::class, static function (ContainerInterface $container) {
            return new FixtureC507($container->get(FixtureC506::class));
        });

        $container->prototypeFactory(FixtureC508::class, static function (ContainerInterface $container) {
            return new FixtureC508($container->get(FixtureC507::class));
        });

        $container->prototypeFactory(FixtureC509::class, static function (ContainerInterface $container) {
            return new FixtureC509($container->get(FixtureC508::class));
        });

        $container->prototypeFactory(FixtureC510::class, static function (ContainerInterface $container) {
            return new FixtureC510($container->get(FixtureC509::class));
        });

        $container->prototypeFactory(FixtureC511::class, static function (ContainerInterface $container) {
            return new FixtureC511($container->get(FixtureC510::class));
        });

        $container->prototypeFactory(FixtureC512::class, static function (ContainerInterface $container) {
            return new FixtureC512($container->get(FixtureC511::class));
        });

        $container->prototypeFactory(FixtureC513::class, static function (ContainerInterface $container) {
            return new FixtureC513($container->get(FixtureC512::class));
        });

        $container->prototypeFactory(FixtureC514::class, static function (ContainerInterface $container) {
            return new FixtureC514($container->get(FixtureC513::class));
        });

        $container->prototypeFactory(FixtureC515::class, static function (ContainerInterface $container) {
            return new FixtureC515($container->get(FixtureC514::class));
        });

        $container->prototypeFactory(FixtureC516::class, static function (ContainerInterface $container) {
            return new FixtureC516($container->get(FixtureC515::class));
        });

        $container->prototypeFactory(FixtureC517::class, static function (ContainerInterface $container) {
            return new FixtureC517($container->get(FixtureC516::class));
        });

        $container->prototypeFactory(FixtureC518::class, static function (ContainerInterface $container) {
            return new FixtureC518($container->get(FixtureC517::class));
        });

        $container->prototypeFactory(FixtureC519::class, static function (ContainerInterface $container) {
            return new FixtureC519($container->get(FixtureC518::class));
        });

        $container->prototypeFactory(FixtureC520::class, static function (ContainerInterface $container) {
            return new FixtureC520($container->get(FixtureC519::class));
        });

        $container->prototypeFactory(FixtureC521::class, static function (ContainerInterface $container) {
            return new FixtureC521($container->get(FixtureC520::class));
        });

        $container->prototypeFactory(FixtureC522::class, static function (ContainerInterface $container) {
            return new FixtureC522($container->get(FixtureC521::class));
        });

        $container->prototypeFactory(FixtureC523::class, static function (ContainerInterface $container) {
            return new FixtureC523($container->get(FixtureC522::class));
        });

        $container->prototypeFactory(FixtureC524::class, static function (ContainerInterface $container) {
            return new FixtureC524($container->get(FixtureC523::class));
        });

        $container->prototypeFactory(FixtureC525::class, static function (ContainerInterface $container) {
            return new FixtureC525($container->get(FixtureC524::class));
        });

        $container->prototypeFactory(FixtureC526::class, static function (ContainerInterface $container) {
            return new FixtureC526($container->get(FixtureC525::class));
        });

        $container->prototypeFactory(FixtureC527::class, static function (ContainerInterface $container) {
            return new FixtureC527($container->get(FixtureC526::class));
        });

        $container->prototypeFactory(FixtureC528::class, static function (ContainerInterface $container) {
            return new FixtureC528($container->get(FixtureC527::class));
        });

        $container->prototypeFactory(FixtureC529::class, static function (ContainerInterface $container) {
            return new FixtureC529($container->get(FixtureC528::class));
        });

        $container->prototypeFactory(FixtureC530::class, static function (ContainerInterface $container) {
            return new FixtureC530($container->get(FixtureC529::class));
        });

        $container->prototypeFactory(FixtureC531::class, static function (ContainerInterface $container) {
            return new FixtureC531($container->get(FixtureC530::class));
        });

        $container->prototypeFactory(FixtureC532::class, static function (ContainerInterface $container) {
            return new FixtureC532($container->get(FixtureC531::class));
        });

        $container->prototypeFactory(FixtureC533::class, static function (ContainerInterface $container) {
            return new FixtureC533($container->get(FixtureC532::class));
        });

        $container->prototypeFactory(FixtureC534::class, static function (ContainerInterface $container) {
            return new FixtureC534($container->get(FixtureC533::class));
        });

        $container->prototypeFactory(FixtureC535::class, static function (ContainerInterface $container) {
            return new FixtureC535($container->get(FixtureC534::class));
        });

        $container->prototypeFactory(FixtureC536::class, static function (ContainerInterface $container) {
            return new FixtureC536($container->get(FixtureC535::class));
        });

        $container->prototypeFactory(FixtureC537::class, static function (ContainerInterface $container) {
            return new FixtureC537($container->get(FixtureC536::class));
        });

        $container->prototypeFactory(FixtureC538::class, static function (ContainerInterface $container) {
            return new FixtureC538($container->get(FixtureC537::class));
        });

        $container->prototypeFactory(FixtureC539::class, static function (ContainerInterface $container) {
            return new FixtureC539($container->get(FixtureC538::class));
        });

        $container->prototypeFactory(FixtureC540::class, static function (ContainerInterface $container) {
            return new FixtureC540($container->get(FixtureC539::class));
        });

        $container->prototypeFactory(FixtureC541::class, static function (ContainerInterface $container) {
            return new FixtureC541($container->get(FixtureC540::class));
        });

        $container->prototypeFactory(FixtureC542::class, static function (ContainerInterface $container) {
            return new FixtureC542($container->get(FixtureC541::class));
        });

        $container->prototypeFactory(FixtureC543::class, static function (ContainerInterface $container) {
            return new FixtureC543($container->get(FixtureC542::class));
        });

        $container->prototypeFactory(FixtureC544::class, static function (ContainerInterface $container) {
            return new FixtureC544($container->get(FixtureC543::class));
        });

        $container->prototypeFactory(FixtureC545::class, static function (ContainerInterface $container) {
            return new FixtureC545($container->get(FixtureC544::class));
        });

        $container->prototypeFactory(FixtureC546::class, static function (ContainerInterface $container) {
            return new FixtureC546($container->get(FixtureC545::class));
        });

        $container->prototypeFactory(FixtureC547::class, static function (ContainerInterface $container) {
            return new FixtureC547($container->get(FixtureC546::class));
        });

        $container->prototypeFactory(FixtureC548::class, static function (ContainerInterface $container) {
            return new FixtureC548($container->get(FixtureC547::class));
        });

        $container->prototypeFactory(FixtureC549::class, static function (ContainerInterface $container) {
            return new FixtureC549($container->get(FixtureC548::class));
        });

        $container->prototypeFactory(FixtureC550::class, static function (ContainerInterface $container) {
            return new FixtureC550($container->get(FixtureC549::class));
        });

        $container->prototypeFactory(FixtureC551::class, static function (ContainerInterface $container) {
            return new FixtureC551($container->get(FixtureC550::class));
        });

        $container->prototypeFactory(FixtureC552::class, static function (ContainerInterface $container) {
            return new FixtureC552($container->get(FixtureC551::class));
        });

        $container->prototypeFactory(FixtureC553::class, static function (ContainerInterface $container) {
            return new FixtureC553($container->get(FixtureC552::class));
        });

        $container->prototypeFactory(FixtureC554::class, static function (ContainerInterface $container) {
            return new FixtureC554($container->get(FixtureC553::class));
        });

        $container->prototypeFactory(FixtureC555::class, static function (ContainerInterface $container) {
            return new FixtureC555($container->get(FixtureC554::class));
        });

        $container->prototypeFactory(FixtureC556::class, static function (ContainerInterface $container) {
            return new FixtureC556($container->get(FixtureC555::class));
        });

        $container->prototypeFactory(FixtureC557::class, static function (ContainerInterface $container) {
            return new FixtureC557($container->get(FixtureC556::class));
        });

        $container->prototypeFactory(FixtureC558::class, static function (ContainerInterface $container) {
            return new FixtureC558($container->get(FixtureC557::class));
        });

        $container->prototypeFactory(FixtureC559::class, static function (ContainerInterface $container) {
            return new FixtureC559($container->get(FixtureC558::class));
        });

        $container->prototypeFactory(FixtureC560::class, static function (ContainerInterface $container) {
            return new FixtureC560($container->get(FixtureC559::class));
        });

        $container->prototypeFactory(FixtureC561::class, static function (ContainerInterface $container) {
            return new FixtureC561($container->get(FixtureC560::class));
        });

        $container->prototypeFactory(FixtureC562::class, static function (ContainerInterface $container) {
            return new FixtureC562($container->get(FixtureC561::class));
        });

        $container->prototypeFactory(FixtureC563::class, static function (ContainerInterface $container) {
            return new FixtureC563($container->get(FixtureC562::class));
        });

        $container->prototypeFactory(FixtureC564::class, static function (ContainerInterface $container) {
            return new FixtureC564($container->get(FixtureC563::class));
        });

        $container->prototypeFactory(FixtureC565::class, static function (ContainerInterface $container) {
            return new FixtureC565($container->get(FixtureC564::class));
        });

        $container->prototypeFactory(FixtureC566::class, static function (ContainerInterface $container) {
            return new FixtureC566($container->get(FixtureC565::class));
        });

        $container->prototypeFactory(FixtureC567::class, static function (ContainerInterface $container) {
            return new FixtureC567($container->get(FixtureC566::class));
        });

        $container->prototypeFactory(FixtureC568::class, static function (ContainerInterface $container) {
            return new FixtureC568($container->get(FixtureC567::class));
        });

        $container->prototypeFactory(FixtureC569::class, static function (ContainerInterface $container) {
            return new FixtureC569($container->get(FixtureC568::class));
        });

        $container->prototypeFactory(FixtureC570::class, static function (ContainerInterface $container) {
            return new FixtureC570($container->get(FixtureC569::class));
        });

        $container->prototypeFactory(FixtureC571::class, static function (ContainerInterface $container) {
            return new FixtureC571($container->get(FixtureC570::class));
        });

        $container->prototypeFactory(FixtureC572::class, static function (ContainerInterface $container) {
            return new FixtureC572($container->get(FixtureC571::class));
        });

        $container->prototypeFactory(FixtureC573::class, static function (ContainerInterface $container) {
            return new FixtureC573($container->get(FixtureC572::class));
        });

        $container->prototypeFactory(FixtureC574::class, static function (ContainerInterface $container) {
            return new FixtureC574($container->get(FixtureC573::class));
        });

        $container->prototypeFactory(FixtureC575::class, static function (ContainerInterface $container) {
            return new FixtureC575($container->get(FixtureC574::class));
        });

        $container->prototypeFactory(FixtureC576::class, static function (ContainerInterface $container) {
            return new FixtureC576($container->get(FixtureC575::class));
        });

        $container->prototypeFactory(FixtureC577::class, static function (ContainerInterface $container) {
            return new FixtureC577($container->get(FixtureC576::class));
        });

        $container->prototypeFactory(FixtureC578::class, static function (ContainerInterface $container) {
            return new FixtureC578($container->get(FixtureC577::class));
        });

        $container->prototypeFactory(FixtureC579::class, static function (ContainerInterface $container) {
            return new FixtureC579($container->get(FixtureC578::class));
        });

        $container->prototypeFactory(FixtureC580::class, static function (ContainerInterface $container) {
            return new FixtureC580($container->get(FixtureC579::class));
        });

        $container->prototypeFactory(FixtureC581::class, static function (ContainerInterface $container) {
            return new FixtureC581($container->get(FixtureC580::class));
        });

        $container->prototypeFactory(FixtureC582::class, static function (ContainerInterface $container) {
            return new FixtureC582($container->get(FixtureC581::class));
        });

        $container->prototypeFactory(FixtureC583::class, static function (ContainerInterface $container) {
            return new FixtureC583($container->get(FixtureC582::class));
        });

        $container->prototypeFactory(FixtureC584::class, static function (ContainerInterface $container) {
            return new FixtureC584($container->get(FixtureC583::class));
        });

        $container->prototypeFactory(FixtureC585::class, static function (ContainerInterface $container) {
            return new FixtureC585($container->get(FixtureC584::class));
        });

        $container->prototypeFactory(FixtureC586::class, static function (ContainerInterface $container) {
            return new FixtureC586($container->get(FixtureC585::class));
        });

        $container->prototypeFactory(FixtureC587::class, static function (ContainerInterface $container) {
            return new FixtureC587($container->get(FixtureC586::class));
        });

        $container->prototypeFactory(FixtureC588::class, static function (ContainerInterface $container) {
            return new FixtureC588($container->get(FixtureC587::class));
        });

        $container->prototypeFactory(FixtureC589::class, static function (ContainerInterface $container) {
            return new FixtureC589($container->get(FixtureC588::class));
        });

        $container->prototypeFactory(FixtureC590::class, static function (ContainerInterface $container) {
            return new FixtureC590($container->get(FixtureC589::class));
        });

        $container->prototypeFactory(FixtureC591::class, static function (ContainerInterface $container) {
            return new FixtureC591($container->get(FixtureC590::class));
        });

        $container->prototypeFactory(FixtureC592::class, static function (ContainerInterface $container) {
            return new FixtureC592($container->get(FixtureC591::class));
        });

        $container->prototypeFactory(FixtureC593::class, static function (ContainerInterface $container) {
            return new FixtureC593($container->get(FixtureC592::class));
        });

        $container->prototypeFactory(FixtureC594::class, static function (ContainerInterface $container) {
            return new FixtureC594($container->get(FixtureC593::class));
        });

        $container->prototypeFactory(FixtureC595::class, static function (ContainerInterface $container) {
            return new FixtureC595($container->get(FixtureC594::class));
        });

        $container->prototypeFactory(FixtureC596::class, static function (ContainerInterface $container) {
            return new FixtureC596($container->get(FixtureC595::class));
        });

        $container->prototypeFactory(FixtureC597::class, static function (ContainerInterface $container) {
            return new FixtureC597($container->get(FixtureC596::class));
        });

        $container->prototypeFactory(FixtureC598::class, static function (ContainerInterface $container) {
            return new FixtureC598($container->get(FixtureC597::class));
        });

        $container->prototypeFactory(FixtureC599::class, static function (ContainerInterface $container) {
            return new FixtureC599($container->get(FixtureC598::class));
        });

        $container->prototypeFactory(FixtureC600::class, static function (ContainerInterface $container) {
            return new FixtureC600($container->get(FixtureC599::class));
        });

        $container->prototypeFactory(FixtureC601::class, static function (ContainerInterface $container) {
            return new FixtureC601($container->get(FixtureC600::class));
        });

        $container->prototypeFactory(FixtureC602::class, static function (ContainerInterface $container) {
            return new FixtureC602($container->get(FixtureC601::class));
        });

        $container->prototypeFactory(FixtureC603::class, static function (ContainerInterface $container) {
            return new FixtureC603($container->get(FixtureC602::class));
        });

        $container->prototypeFactory(FixtureC604::class, static function (ContainerInterface $container) {
            return new FixtureC604($container->get(FixtureC603::class));
        });

        $container->prototypeFactory(FixtureC605::class, static function (ContainerInterface $container) {
            return new FixtureC605($container->get(FixtureC604::class));
        });

        $container->prototypeFactory(FixtureC606::class, static function (ContainerInterface $container) {
            return new FixtureC606($container->get(FixtureC605::class));
        });

        $container->prototypeFactory(FixtureC607::class, static function (ContainerInterface $container) {
            return new FixtureC607($container->get(FixtureC606::class));
        });

        $container->prototypeFactory(FixtureC608::class, static function (ContainerInterface $container) {
            return new FixtureC608($container->get(FixtureC607::class));
        });

        $container->prototypeFactory(FixtureC609::class, static function (ContainerInterface $container) {
            return new FixtureC609($container->get(FixtureC608::class));
        });

        $container->prototypeFactory(FixtureC610::class, static function (ContainerInterface $container) {
            return new FixtureC610($container->get(FixtureC609::class));
        });

        $container->prototypeFactory(FixtureC611::class, static function (ContainerInterface $container) {
            return new FixtureC611($container->get(FixtureC610::class));
        });

        $container->prototypeFactory(FixtureC612::class, static function (ContainerInterface $container) {
            return new FixtureC612($container->get(FixtureC611::class));
        });

        $container->prototypeFactory(FixtureC613::class, static function (ContainerInterface $container) {
            return new FixtureC613($container->get(FixtureC612::class));
        });

        $container->prototypeFactory(FixtureC614::class, static function (ContainerInterface $container) {
            return new FixtureC614($container->get(FixtureC613::class));
        });

        $container->prototypeFactory(FixtureC615::class, static function (ContainerInterface $container) {
            return new FixtureC615($container->get(FixtureC614::class));
        });

        $container->prototypeFactory(FixtureC616::class, static function (ContainerInterface $container) {
            return new FixtureC616($container->get(FixtureC615::class));
        });

        $container->prototypeFactory(FixtureC617::class, static function (ContainerInterface $container) {
            return new FixtureC617($container->get(FixtureC616::class));
        });

        $container->prototypeFactory(FixtureC618::class, static function (ContainerInterface $container) {
            return new FixtureC618($container->get(FixtureC617::class));
        });

        $container->prototypeFactory(FixtureC619::class, static function (ContainerInterface $container) {
            return new FixtureC619($container->get(FixtureC618::class));
        });

        $container->prototypeFactory(FixtureC620::class, static function (ContainerInterface $container) {
            return new FixtureC620($container->get(FixtureC619::class));
        });

        $container->prototypeFactory(FixtureC621::class, static function (ContainerInterface $container) {
            return new FixtureC621($container->get(FixtureC620::class));
        });

        $container->prototypeFactory(FixtureC622::class, static function (ContainerInterface $container) {
            return new FixtureC622($container->get(FixtureC621::class));
        });

        $container->prototypeFactory(FixtureC623::class, static function (ContainerInterface $container) {
            return new FixtureC623($container->get(FixtureC622::class));
        });

        $container->prototypeFactory(FixtureC624::class, static function (ContainerInterface $container) {
            return new FixtureC624($container->get(FixtureC623::class));
        });

        $container->prototypeFactory(FixtureC625::class, static function (ContainerInterface $container) {
            return new FixtureC625($container->get(FixtureC624::class));
        });

        $container->prototypeFactory(FixtureC626::class, static function (ContainerInterface $container) {
            return new FixtureC626($container->get(FixtureC625::class));
        });

        $container->prototypeFactory(FixtureC627::class, static function (ContainerInterface $container) {
            return new FixtureC627($container->get(FixtureC626::class));
        });

        $container->prototypeFactory(FixtureC628::class, static function (ContainerInterface $container) {
            return new FixtureC628($container->get(FixtureC627::class));
        });

        $container->prototypeFactory(FixtureC629::class, static function (ContainerInterface $container) {
            return new FixtureC629($container->get(FixtureC628::class));
        });

        $container->prototypeFactory(FixtureC630::class, static function (ContainerInterface $container) {
            return new FixtureC630($container->get(FixtureC629::class));
        });

        $container->prototypeFactory(FixtureC631::class, static function (ContainerInterface $container) {
            return new FixtureC631($container->get(FixtureC630::class));
        });

        $container->prototypeFactory(FixtureC632::class, static function (ContainerInterface $container) {
            return new FixtureC632($container->get(FixtureC631::class));
        });

        $container->prototypeFactory(FixtureC633::class, static function (ContainerInterface $container) {
            return new FixtureC633($container->get(FixtureC632::class));
        });

        $container->prototypeFactory(FixtureC634::class, static function (ContainerInterface $container) {
            return new FixtureC634($container->get(FixtureC633::class));
        });

        $container->prototypeFactory(FixtureC635::class, static function (ContainerInterface $container) {
            return new FixtureC635($container->get(FixtureC634::class));
        });

        $container->prototypeFactory(FixtureC636::class, static function (ContainerInterface $container) {
            return new FixtureC636($container->get(FixtureC635::class));
        });

        $container->prototypeFactory(FixtureC637::class, static function (ContainerInterface $container) {
            return new FixtureC637($container->get(FixtureC636::class));
        });

        $container->prototypeFactory(FixtureC638::class, static function (ContainerInterface $container) {
            return new FixtureC638($container->get(FixtureC637::class));
        });

        $container->prototypeFactory(FixtureC639::class, static function (ContainerInterface $container) {
            return new FixtureC639($container->get(FixtureC638::class));
        });

        $container->prototypeFactory(FixtureC640::class, static function (ContainerInterface $container) {
            return new FixtureC640($container->get(FixtureC639::class));
        });

        $container->prototypeFactory(FixtureC641::class, static function (ContainerInterface $container) {
            return new FixtureC641($container->get(FixtureC640::class));
        });

        $container->prototypeFactory(FixtureC642::class, static function (ContainerInterface $container) {
            return new FixtureC642($container->get(FixtureC641::class));
        });

        $container->prototypeFactory(FixtureC643::class, static function (ContainerInterface $container) {
            return new FixtureC643($container->get(FixtureC642::class));
        });

        $container->prototypeFactory(FixtureC644::class, static function (ContainerInterface $container) {
            return new FixtureC644($container->get(FixtureC643::class));
        });

        $container->prototypeFactory(FixtureC645::class, static function (ContainerInterface $container) {
            return new FixtureC645($container->get(FixtureC644::class));
        });

        $container->prototypeFactory(FixtureC646::class, static function (ContainerInterface $container) {
            return new FixtureC646($container->get(FixtureC645::class));
        });

        $container->prototypeFactory(FixtureC647::class, static function (ContainerInterface $container) {
            return new FixtureC647($container->get(FixtureC646::class));
        });

        $container->prototypeFactory(FixtureC648::class, static function (ContainerInterface $container) {
            return new FixtureC648($container->get(FixtureC647::class));
        });

        $container->prototypeFactory(FixtureC649::class, static function (ContainerInterface $container) {
            return new FixtureC649($container->get(FixtureC648::class));
        });

        $container->prototypeFactory(FixtureC650::class, static function (ContainerInterface $container) {
            return new FixtureC650($container->get(FixtureC649::class));
        });

        $container->prototypeFactory(FixtureC651::class, static function (ContainerInterface $container) {
            return new FixtureC651($container->get(FixtureC650::class));
        });

        $container->prototypeFactory(FixtureC652::class, static function (ContainerInterface $container) {
            return new FixtureC652($container->get(FixtureC651::class));
        });

        $container->prototypeFactory(FixtureC653::class, static function (ContainerInterface $container) {
            return new FixtureC653($container->get(FixtureC652::class));
        });

        $container->prototypeFactory(FixtureC654::class, static function (ContainerInterface $container) {
            return new FixtureC654($container->get(FixtureC653::class));
        });

        $container->prototypeFactory(FixtureC655::class, static function (ContainerInterface $container) {
            return new FixtureC655($container->get(FixtureC654::class));
        });

        $container->prototypeFactory(FixtureC656::class, static function (ContainerInterface $container) {
            return new FixtureC656($container->get(FixtureC655::class));
        });

        $container->prototypeFactory(FixtureC657::class, static function (ContainerInterface $container) {
            return new FixtureC657($container->get(FixtureC656::class));
        });

        $container->prototypeFactory(FixtureC658::class, static function (ContainerInterface $container) {
            return new FixtureC658($container->get(FixtureC657::class));
        });

        $container->prototypeFactory(FixtureC659::class, static function (ContainerInterface $container) {
            return new FixtureC659($container->get(FixtureC658::class));
        });

        $container->prototypeFactory(FixtureC660::class, static function (ContainerInterface $container) {
            return new FixtureC660($container->get(FixtureC659::class));
        });

        $container->prototypeFactory(FixtureC661::class, static function (ContainerInterface $container) {
            return new FixtureC661($container->get(FixtureC660::class));
        });

        $container->prototypeFactory(FixtureC662::class, static function (ContainerInterface $container) {
            return new FixtureC662($container->get(FixtureC661::class));
        });

        $container->prototypeFactory(FixtureC663::class, static function (ContainerInterface $container) {
            return new FixtureC663($container->get(FixtureC662::class));
        });

        $container->prototypeFactory(FixtureC664::class, static function (ContainerInterface $container) {
            return new FixtureC664($container->get(FixtureC663::class));
        });

        $container->prototypeFactory(FixtureC665::class, static function (ContainerInterface $container) {
            return new FixtureC665($container->get(FixtureC664::class));
        });

        $container->prototypeFactory(FixtureC666::class, static function (ContainerInterface $container) {
            return new FixtureC666($container->get(FixtureC665::class));
        });

        $container->prototypeFactory(FixtureC667::class, static function (ContainerInterface $container) {
            return new FixtureC667($container->get(FixtureC666::class));
        });

        $container->prototypeFactory(FixtureC668::class, static function (ContainerInterface $container) {
            return new FixtureC668($container->get(FixtureC667::class));
        });

        $container->prototypeFactory(FixtureC669::class, static function (ContainerInterface $container) {
            return new FixtureC669($container->get(FixtureC668::class));
        });

        $container->prototypeFactory(FixtureC670::class, static function (ContainerInterface $container) {
            return new FixtureC670($container->get(FixtureC669::class));
        });

        $container->prototypeFactory(FixtureC671::class, static function (ContainerInterface $container) {
            return new FixtureC671($container->get(FixtureC670::class));
        });

        $container->prototypeFactory(FixtureC672::class, static function (ContainerInterface $container) {
            return new FixtureC672($container->get(FixtureC671::class));
        });

        $container->prototypeFactory(FixtureC673::class, static function (ContainerInterface $container) {
            return new FixtureC673($container->get(FixtureC672::class));
        });

        $container->prototypeFactory(FixtureC674::class, static function (ContainerInterface $container) {
            return new FixtureC674($container->get(FixtureC673::class));
        });

        $container->prototypeFactory(FixtureC675::class, static function (ContainerInterface $container) {
            return new FixtureC675($container->get(FixtureC674::class));
        });

        $container->prototypeFactory(FixtureC676::class, static function (ContainerInterface $container) {
            return new FixtureC676($container->get(FixtureC675::class));
        });

        $container->prototypeFactory(FixtureC677::class, static function (ContainerInterface $container) {
            return new FixtureC677($container->get(FixtureC676::class));
        });

        $container->prototypeFactory(FixtureC678::class, static function (ContainerInterface $container) {
            return new FixtureC678($container->get(FixtureC677::class));
        });

        $container->prototypeFactory(FixtureC679::class, static function (ContainerInterface $container) {
            return new FixtureC679($container->get(FixtureC678::class));
        });

        $container->prototypeFactory(FixtureC680::class, static function (ContainerInterface $container) {
            return new FixtureC680($container->get(FixtureC679::class));
        });

        $container->prototypeFactory(FixtureC681::class, static function (ContainerInterface $container) {
            return new FixtureC681($container->get(FixtureC680::class));
        });

        $container->prototypeFactory(FixtureC682::class, static function (ContainerInterface $container) {
            return new FixtureC682($container->get(FixtureC681::class));
        });

        $container->prototypeFactory(FixtureC683::class, static function (ContainerInterface $container) {
            return new FixtureC683($container->get(FixtureC682::class));
        });

        $container->prototypeFactory(FixtureC684::class, static function (ContainerInterface $container) {
            return new FixtureC684($container->get(FixtureC683::class));
        });

        $container->prototypeFactory(FixtureC685::class, static function (ContainerInterface $container) {
            return new FixtureC685($container->get(FixtureC684::class));
        });

        $container->prototypeFactory(FixtureC686::class, static function (ContainerInterface $container) {
            return new FixtureC686($container->get(FixtureC685::class));
        });

        $container->prototypeFactory(FixtureC687::class, static function (ContainerInterface $container) {
            return new FixtureC687($container->get(FixtureC686::class));
        });

        $container->prototypeFactory(FixtureC688::class, static function (ContainerInterface $container) {
            return new FixtureC688($container->get(FixtureC687::class));
        });

        $container->prototypeFactory(FixtureC689::class, static function (ContainerInterface $container) {
            return new FixtureC689($container->get(FixtureC688::class));
        });

        $container->prototypeFactory(FixtureC690::class, static function (ContainerInterface $container) {
            return new FixtureC690($container->get(FixtureC689::class));
        });

        $container->prototypeFactory(FixtureC691::class, static function (ContainerInterface $container) {
            return new FixtureC691($container->get(FixtureC690::class));
        });

        $container->prototypeFactory(FixtureC692::class, static function (ContainerInterface $container) {
            return new FixtureC692($container->get(FixtureC691::class));
        });

        $container->prototypeFactory(FixtureC693::class, static function (ContainerInterface $container) {
            return new FixtureC693($container->get(FixtureC692::class));
        });

        $container->prototypeFactory(FixtureC694::class, static function (ContainerInterface $container) {
            return new FixtureC694($container->get(FixtureC693::class));
        });

        $container->prototypeFactory(FixtureC695::class, static function (ContainerInterface $container) {
            return new FixtureC695($container->get(FixtureC694::class));
        });

        $container->prototypeFactory(FixtureC696::class, static function (ContainerInterface $container) {
            return new FixtureC696($container->get(FixtureC695::class));
        });

        $container->prototypeFactory(FixtureC697::class, static function (ContainerInterface $container) {
            return new FixtureC697($container->get(FixtureC696::class));
        });

        $container->prototypeFactory(FixtureC698::class, static function (ContainerInterface $container) {
            return new FixtureC698($container->get(FixtureC697::class));
        });

        $container->prototypeFactory(FixtureC699::class, static function (ContainerInterface $container) {
            return new FixtureC699($container->get(FixtureC698::class));
        });

        $container->prototypeFactory(FixtureC700::class, static function (ContainerInterface $container) {
            return new FixtureC700($container->get(FixtureC699::class));
        });

        $container->prototypeFactory(FixtureC701::class, static function (ContainerInterface $container) {
            return new FixtureC701($container->get(FixtureC700::class));
        });

        $container->prototypeFactory(FixtureC702::class, static function (ContainerInterface $container) {
            return new FixtureC702($container->get(FixtureC701::class));
        });

        $container->prototypeFactory(FixtureC703::class, static function (ContainerInterface $container) {
            return new FixtureC703($container->get(FixtureC702::class));
        });

        $container->prototypeFactory(FixtureC704::class, static function (ContainerInterface $container) {
            return new FixtureC704($container->get(FixtureC703::class));
        });

        $container->prototypeFactory(FixtureC705::class, static function (ContainerInterface $container) {
            return new FixtureC705($container->get(FixtureC704::class));
        });

        $container->prototypeFactory(FixtureC706::class, static function (ContainerInterface $container) {
            return new FixtureC706($container->get(FixtureC705::class));
        });

        $container->prototypeFactory(FixtureC707::class, static function (ContainerInterface $container) {
            return new FixtureC707($container->get(FixtureC706::class));
        });

        $container->prototypeFactory(FixtureC708::class, static function (ContainerInterface $container) {
            return new FixtureC708($container->get(FixtureC707::class));
        });

        $container->prototypeFactory(FixtureC709::class, static function (ContainerInterface $container) {
            return new FixtureC709($container->get(FixtureC708::class));
        });

        $container->prototypeFactory(FixtureC710::class, static function (ContainerInterface $container) {
            return new FixtureC710($container->get(FixtureC709::class));
        });

        $container->prototypeFactory(FixtureC711::class, static function (ContainerInterface $container) {
            return new FixtureC711($container->get(FixtureC710::class));
        });

        $container->prototypeFactory(FixtureC712::class, static function (ContainerInterface $container) {
            return new FixtureC712($container->get(FixtureC711::class));
        });

        $container->prototypeFactory(FixtureC713::class, static function (ContainerInterface $container) {
            return new FixtureC713($container->get(FixtureC712::class));
        });

        $container->prototypeFactory(FixtureC714::class, static function (ContainerInterface $container) {
            return new FixtureC714($container->get(FixtureC713::class));
        });

        $container->prototypeFactory(FixtureC715::class, static function (ContainerInterface $container) {
            return new FixtureC715($container->get(FixtureC714::class));
        });

        $container->prototypeFactory(FixtureC716::class, static function (ContainerInterface $container) {
            return new FixtureC716($container->get(FixtureC715::class));
        });

        $container->prototypeFactory(FixtureC717::class, static function (ContainerInterface $container) {
            return new FixtureC717($container->get(FixtureC716::class));
        });

        $container->prototypeFactory(FixtureC718::class, static function (ContainerInterface $container) {
            return new FixtureC718($container->get(FixtureC717::class));
        });

        $container->prototypeFactory(FixtureC719::class, static function (ContainerInterface $container) {
            return new FixtureC719($container->get(FixtureC718::class));
        });

        $container->prototypeFactory(FixtureC720::class, static function (ContainerInterface $container) {
            return new FixtureC720($container->get(FixtureC719::class));
        });

        $container->prototypeFactory(FixtureC721::class, static function (ContainerInterface $container) {
            return new FixtureC721($container->get(FixtureC720::class));
        });

        $container->prototypeFactory(FixtureC722::class, static function (ContainerInterface $container) {
            return new FixtureC722($container->get(FixtureC721::class));
        });

        $container->prototypeFactory(FixtureC723::class, static function (ContainerInterface $container) {
            return new FixtureC723($container->get(FixtureC722::class));
        });

        $container->prototypeFactory(FixtureC724::class, static function (ContainerInterface $container) {
            return new FixtureC724($container->get(FixtureC723::class));
        });

        $container->prototypeFactory(FixtureC725::class, static function (ContainerInterface $container) {
            return new FixtureC725($container->get(FixtureC724::class));
        });

        $container->prototypeFactory(FixtureC726::class, static function (ContainerInterface $container) {
            return new FixtureC726($container->get(FixtureC725::class));
        });

        $container->prototypeFactory(FixtureC727::class, static function (ContainerInterface $container) {
            return new FixtureC727($container->get(FixtureC726::class));
        });

        $container->prototypeFactory(FixtureC728::class, static function (ContainerInterface $container) {
            return new FixtureC728($container->get(FixtureC727::class));
        });

        $container->prototypeFactory(FixtureC729::class, static function (ContainerInterface $container) {
            return new FixtureC729($container->get(FixtureC728::class));
        });

        $container->prototypeFactory(FixtureC730::class, static function (ContainerInterface $container) {
            return new FixtureC730($container->get(FixtureC729::class));
        });

        $container->prototypeFactory(FixtureC731::class, static function (ContainerInterface $container) {
            return new FixtureC731($container->get(FixtureC730::class));
        });

        $container->prototypeFactory(FixtureC732::class, static function (ContainerInterface $container) {
            return new FixtureC732($container->get(FixtureC731::class));
        });

        $container->prototypeFactory(FixtureC733::class, static function (ContainerInterface $container) {
            return new FixtureC733($container->get(FixtureC732::class));
        });

        $container->prototypeFactory(FixtureC734::class, static function (ContainerInterface $container) {
            return new FixtureC734($container->get(FixtureC733::class));
        });

        $container->prototypeFactory(FixtureC735::class, static function (ContainerInterface $container) {
            return new FixtureC735($container->get(FixtureC734::class));
        });

        $container->prototypeFactory(FixtureC736::class, static function (ContainerInterface $container) {
            return new FixtureC736($container->get(FixtureC735::class));
        });

        $container->prototypeFactory(FixtureC737::class, static function (ContainerInterface $container) {
            return new FixtureC737($container->get(FixtureC736::class));
        });

        $container->prototypeFactory(FixtureC738::class, static function (ContainerInterface $container) {
            return new FixtureC738($container->get(FixtureC737::class));
        });

        $container->prototypeFactory(FixtureC739::class, static function (ContainerInterface $container) {
            return new FixtureC739($container->get(FixtureC738::class));
        });

        $container->prototypeFactory(FixtureC740::class, static function (ContainerInterface $container) {
            return new FixtureC740($container->get(FixtureC739::class));
        });

        $container->prototypeFactory(FixtureC741::class, static function (ContainerInterface $container) {
            return new FixtureC741($container->get(FixtureC740::class));
        });

        $container->prototypeFactory(FixtureC742::class, static function (ContainerInterface $container) {
            return new FixtureC742($container->get(FixtureC741::class));
        });

        $container->prototypeFactory(FixtureC743::class, static function (ContainerInterface $container) {
            return new FixtureC743($container->get(FixtureC742::class));
        });

        $container->prototypeFactory(FixtureC744::class, static function (ContainerInterface $container) {
            return new FixtureC744($container->get(FixtureC743::class));
        });

        $container->prototypeFactory(FixtureC745::class, static function (ContainerInterface $container) {
            return new FixtureC745($container->get(FixtureC744::class));
        });

        $container->prototypeFactory(FixtureC746::class, static function (ContainerInterface $container) {
            return new FixtureC746($container->get(FixtureC745::class));
        });

        $container->prototypeFactory(FixtureC747::class, static function (ContainerInterface $container) {
            return new FixtureC747($container->get(FixtureC746::class));
        });

        $container->prototypeFactory(FixtureC748::class, static function (ContainerInterface $container) {
            return new FixtureC748($container->get(FixtureC747::class));
        });

        $container->prototypeFactory(FixtureC749::class, static function (ContainerInterface $container) {
            return new FixtureC749($container->get(FixtureC748::class));
        });

        $container->prototypeFactory(FixtureC750::class, static function (ContainerInterface $container) {
            return new FixtureC750($container->get(FixtureC749::class));
        });

        $container->prototypeFactory(FixtureC751::class, static function (ContainerInterface $container) {
            return new FixtureC751($container->get(FixtureC750::class));
        });

        $container->prototypeFactory(FixtureC752::class, static function (ContainerInterface $container) {
            return new FixtureC752($container->get(FixtureC751::class));
        });

        $container->prototypeFactory(FixtureC753::class, static function (ContainerInterface $container) {
            return new FixtureC753($container->get(FixtureC752::class));
        });

        $container->prototypeFactory(FixtureC754::class, static function (ContainerInterface $container) {
            return new FixtureC754($container->get(FixtureC753::class));
        });

        $container->prototypeFactory(FixtureC755::class, static function (ContainerInterface $container) {
            return new FixtureC755($container->get(FixtureC754::class));
        });

        $container->prototypeFactory(FixtureC756::class, static function (ContainerInterface $container) {
            return new FixtureC756($container->get(FixtureC755::class));
        });

        $container->prototypeFactory(FixtureC757::class, static function (ContainerInterface $container) {
            return new FixtureC757($container->get(FixtureC756::class));
        });

        $container->prototypeFactory(FixtureC758::class, static function (ContainerInterface $container) {
            return new FixtureC758($container->get(FixtureC757::class));
        });

        $container->prototypeFactory(FixtureC759::class, static function (ContainerInterface $container) {
            return new FixtureC759($container->get(FixtureC758::class));
        });

        $container->prototypeFactory(FixtureC760::class, static function (ContainerInterface $container) {
            return new FixtureC760($container->get(FixtureC759::class));
        });

        $container->prototypeFactory(FixtureC761::class, static function (ContainerInterface $container) {
            return new FixtureC761($container->get(FixtureC760::class));
        });

        $container->prototypeFactory(FixtureC762::class, static function (ContainerInterface $container) {
            return new FixtureC762($container->get(FixtureC761::class));
        });

        $container->prototypeFactory(FixtureC763::class, static function (ContainerInterface $container) {
            return new FixtureC763($container->get(FixtureC762::class));
        });

        $container->prototypeFactory(FixtureC764::class, static function (ContainerInterface $container) {
            return new FixtureC764($container->get(FixtureC763::class));
        });

        $container->prototypeFactory(FixtureC765::class, static function (ContainerInterface $container) {
            return new FixtureC765($container->get(FixtureC764::class));
        });

        $container->prototypeFactory(FixtureC766::class, static function (ContainerInterface $container) {
            return new FixtureC766($container->get(FixtureC765::class));
        });

        $container->prototypeFactory(FixtureC767::class, static function (ContainerInterface $container) {
            return new FixtureC767($container->get(FixtureC766::class));
        });

        $container->prototypeFactory(FixtureC768::class, static function (ContainerInterface $container) {
            return new FixtureC768($container->get(FixtureC767::class));
        });

        $container->prototypeFactory(FixtureC769::class, static function (ContainerInterface $container) {
            return new FixtureC769($container->get(FixtureC768::class));
        });

        $container->prototypeFactory(FixtureC770::class, static function (ContainerInterface $container) {
            return new FixtureC770($container->get(FixtureC769::class));
        });

        $container->prototypeFactory(FixtureC771::class, static function (ContainerInterface $container) {
            return new FixtureC771($container->get(FixtureC770::class));
        });

        $container->prototypeFactory(FixtureC772::class, static function (ContainerInterface $container) {
            return new FixtureC772($container->get(FixtureC771::class));
        });

        $container->prototypeFactory(FixtureC773::class, static function (ContainerInterface $container) {
            return new FixtureC773($container->get(FixtureC772::class));
        });

        $container->prototypeFactory(FixtureC774::class, static function (ContainerInterface $container) {
            return new FixtureC774($container->get(FixtureC773::class));
        });

        $container->prototypeFactory(FixtureC775::class, static function (ContainerInterface $container) {
            return new FixtureC775($container->get(FixtureC774::class));
        });

        $container->prototypeFactory(FixtureC776::class, static function (ContainerInterface $container) {
            return new FixtureC776($container->get(FixtureC775::class));
        });

        $container->prototypeFactory(FixtureC777::class, static function (ContainerInterface $container) {
            return new FixtureC777($container->get(FixtureC776::class));
        });

        $container->prototypeFactory(FixtureC778::class, static function (ContainerInterface $container) {
            return new FixtureC778($container->get(FixtureC777::class));
        });

        $container->prototypeFactory(FixtureC779::class, static function (ContainerInterface $container) {
            return new FixtureC779($container->get(FixtureC778::class));
        });

        $container->prototypeFactory(FixtureC780::class, static function (ContainerInterface $container) {
            return new FixtureC780($container->get(FixtureC779::class));
        });

        $container->prototypeFactory(FixtureC781::class, static function (ContainerInterface $container) {
            return new FixtureC781($container->get(FixtureC780::class));
        });

        $container->prototypeFactory(FixtureC782::class, static function (ContainerInterface $container) {
            return new FixtureC782($container->get(FixtureC781::class));
        });

        $container->prototypeFactory(FixtureC783::class, static function (ContainerInterface $container) {
            return new FixtureC783($container->get(FixtureC782::class));
        });

        $container->prototypeFactory(FixtureC784::class, static function (ContainerInterface $container) {
            return new FixtureC784($container->get(FixtureC783::class));
        });

        $container->prototypeFactory(FixtureC785::class, static function (ContainerInterface $container) {
            return new FixtureC785($container->get(FixtureC784::class));
        });

        $container->prototypeFactory(FixtureC786::class, static function (ContainerInterface $container) {
            return new FixtureC786($container->get(FixtureC785::class));
        });

        $container->prototypeFactory(FixtureC787::class, static function (ContainerInterface $container) {
            return new FixtureC787($container->get(FixtureC786::class));
        });

        $container->prototypeFactory(FixtureC788::class, static function (ContainerInterface $container) {
            return new FixtureC788($container->get(FixtureC787::class));
        });

        $container->prototypeFactory(FixtureC789::class, static function (ContainerInterface $container) {
            return new FixtureC789($container->get(FixtureC788::class));
        });

        $container->prototypeFactory(FixtureC790::class, static function (ContainerInterface $container) {
            return new FixtureC790($container->get(FixtureC789::class));
        });

        $container->prototypeFactory(FixtureC791::class, static function (ContainerInterface $container) {
            return new FixtureC791($container->get(FixtureC790::class));
        });

        $container->prototypeFactory(FixtureC792::class, static function (ContainerInterface $container) {
            return new FixtureC792($container->get(FixtureC791::class));
        });

        $container->prototypeFactory(FixtureC793::class, static function (ContainerInterface $container) {
            return new FixtureC793($container->get(FixtureC792::class));
        });

        $container->prototypeFactory(FixtureC794::class, static function (ContainerInterface $container) {
            return new FixtureC794($container->get(FixtureC793::class));
        });

        $container->prototypeFactory(FixtureC795::class, static function (ContainerInterface $container) {
            return new FixtureC795($container->get(FixtureC794::class));
        });

        $container->prototypeFactory(FixtureC796::class, static function (ContainerInterface $container) {
            return new FixtureC796($container->get(FixtureC795::class));
        });

        $container->prototypeFactory(FixtureC797::class, static function (ContainerInterface $container) {
            return new FixtureC797($container->get(FixtureC796::class));
        });

        $container->prototypeFactory(FixtureC798::class, static function (ContainerInterface $container) {
            return new FixtureC798($container->get(FixtureC797::class));
        });

        $container->prototypeFactory(FixtureC799::class, static function (ContainerInterface $container) {
            return new FixtureC799($container->get(FixtureC798::class));
        });

        $container->prototypeFactory(FixtureC800::class, static function (ContainerInterface $container) {
            return new FixtureC800($container->get(FixtureC799::class));
        });

        $container->prototypeFactory(FixtureC801::class, static function (ContainerInterface $container) {
            return new FixtureC801($container->get(FixtureC800::class));
        });

        $container->prototypeFactory(FixtureC802::class, static function (ContainerInterface $container) {
            return new FixtureC802($container->get(FixtureC801::class));
        });

        $container->prototypeFactory(FixtureC803::class, static function (ContainerInterface $container) {
            return new FixtureC803($container->get(FixtureC802::class));
        });

        $container->prototypeFactory(FixtureC804::class, static function (ContainerInterface $container) {
            return new FixtureC804($container->get(FixtureC803::class));
        });

        $container->prototypeFactory(FixtureC805::class, static function (ContainerInterface $container) {
            return new FixtureC805($container->get(FixtureC804::class));
        });

        $container->prototypeFactory(FixtureC806::class, static function (ContainerInterface $container) {
            return new FixtureC806($container->get(FixtureC805::class));
        });

        $container->prototypeFactory(FixtureC807::class, static function (ContainerInterface $container) {
            return new FixtureC807($container->get(FixtureC806::class));
        });

        $container->prototypeFactory(FixtureC808::class, static function (ContainerInterface $container) {
            return new FixtureC808($container->get(FixtureC807::class));
        });

        $container->prototypeFactory(FixtureC809::class, static function (ContainerInterface $container) {
            return new FixtureC809($container->get(FixtureC808::class));
        });

        $container->prototypeFactory(FixtureC810::class, static function (ContainerInterface $container) {
            return new FixtureC810($container->get(FixtureC809::class));
        });

        $container->prototypeFactory(FixtureC811::class, static function (ContainerInterface $container) {
            return new FixtureC811($container->get(FixtureC810::class));
        });

        $container->prototypeFactory(FixtureC812::class, static function (ContainerInterface $container) {
            return new FixtureC812($container->get(FixtureC811::class));
        });

        $container->prototypeFactory(FixtureC813::class, static function (ContainerInterface $container) {
            return new FixtureC813($container->get(FixtureC812::class));
        });

        $container->prototypeFactory(FixtureC814::class, static function (ContainerInterface $container) {
            return new FixtureC814($container->get(FixtureC813::class));
        });

        $container->prototypeFactory(FixtureC815::class, static function (ContainerInterface $container) {
            return new FixtureC815($container->get(FixtureC814::class));
        });

        $container->prototypeFactory(FixtureC816::class, static function (ContainerInterface $container) {
            return new FixtureC816($container->get(FixtureC815::class));
        });

        $container->prototypeFactory(FixtureC817::class, static function (ContainerInterface $container) {
            return new FixtureC817($container->get(FixtureC816::class));
        });

        $container->prototypeFactory(FixtureC818::class, static function (ContainerInterface $container) {
            return new FixtureC818($container->get(FixtureC817::class));
        });

        $container->prototypeFactory(FixtureC819::class, static function (ContainerInterface $container) {
            return new FixtureC819($container->get(FixtureC818::class));
        });

        $container->prototypeFactory(FixtureC820::class, static function (ContainerInterface $container) {
            return new FixtureC820($container->get(FixtureC819::class));
        });

        $container->prototypeFactory(FixtureC821::class, static function (ContainerInterface $container) {
            return new FixtureC821($container->get(FixtureC820::class));
        });

        $container->prototypeFactory(FixtureC822::class, static function (ContainerInterface $container) {
            return new FixtureC822($container->get(FixtureC821::class));
        });

        $container->prototypeFactory(FixtureC823::class, static function (ContainerInterface $container) {
            return new FixtureC823($container->get(FixtureC822::class));
        });

        $container->prototypeFactory(FixtureC824::class, static function (ContainerInterface $container) {
            return new FixtureC824($container->get(FixtureC823::class));
        });

        $container->prototypeFactory(FixtureC825::class, static function (ContainerInterface $container) {
            return new FixtureC825($container->get(FixtureC824::class));
        });

        $container->prototypeFactory(FixtureC826::class, static function (ContainerInterface $container) {
            return new FixtureC826($container->get(FixtureC825::class));
        });

        $container->prototypeFactory(FixtureC827::class, static function (ContainerInterface $container) {
            return new FixtureC827($container->get(FixtureC826::class));
        });

        $container->prototypeFactory(FixtureC828::class, static function (ContainerInterface $container) {
            return new FixtureC828($container->get(FixtureC827::class));
        });

        $container->prototypeFactory(FixtureC829::class, static function (ContainerInterface $container) {
            return new FixtureC829($container->get(FixtureC828::class));
        });

        $container->prototypeFactory(FixtureC830::class, static function (ContainerInterface $container) {
            return new FixtureC830($container->get(FixtureC829::class));
        });

        $container->prototypeFactory(FixtureC831::class, static function (ContainerInterface $container) {
            return new FixtureC831($container->get(FixtureC830::class));
        });

        $container->prototypeFactory(FixtureC832::class, static function (ContainerInterface $container) {
            return new FixtureC832($container->get(FixtureC831::class));
        });

        $container->prototypeFactory(FixtureC833::class, static function (ContainerInterface $container) {
            return new FixtureC833($container->get(FixtureC832::class));
        });

        $container->prototypeFactory(FixtureC834::class, static function (ContainerInterface $container) {
            return new FixtureC834($container->get(FixtureC833::class));
        });

        $container->prototypeFactory(FixtureC835::class, static function (ContainerInterface $container) {
            return new FixtureC835($container->get(FixtureC834::class));
        });

        $container->prototypeFactory(FixtureC836::class, static function (ContainerInterface $container) {
            return new FixtureC836($container->get(FixtureC835::class));
        });

        $container->prototypeFactory(FixtureC837::class, static function (ContainerInterface $container) {
            return new FixtureC837($container->get(FixtureC836::class));
        });

        $container->prototypeFactory(FixtureC838::class, static function (ContainerInterface $container) {
            return new FixtureC838($container->get(FixtureC837::class));
        });

        $container->prototypeFactory(FixtureC839::class, static function (ContainerInterface $container) {
            return new FixtureC839($container->get(FixtureC838::class));
        });

        $container->prototypeFactory(FixtureC840::class, static function (ContainerInterface $container) {
            return new FixtureC840($container->get(FixtureC839::class));
        });

        $container->prototypeFactory(FixtureC841::class, static function (ContainerInterface $container) {
            return new FixtureC841($container->get(FixtureC840::class));
        });

        $container->prototypeFactory(FixtureC842::class, static function (ContainerInterface $container) {
            return new FixtureC842($container->get(FixtureC841::class));
        });

        $container->prototypeFactory(FixtureC843::class, static function (ContainerInterface $container) {
            return new FixtureC843($container->get(FixtureC842::class));
        });

        $container->prototypeFactory(FixtureC844::class, static function (ContainerInterface $container) {
            return new FixtureC844($container->get(FixtureC843::class));
        });

        $container->prototypeFactory(FixtureC845::class, static function (ContainerInterface $container) {
            return new FixtureC845($container->get(FixtureC844::class));
        });

        $container->prototypeFactory(FixtureC846::class, static function (ContainerInterface $container) {
            return new FixtureC846($container->get(FixtureC845::class));
        });

        $container->prototypeFactory(FixtureC847::class, static function (ContainerInterface $container) {
            return new FixtureC847($container->get(FixtureC846::class));
        });

        $container->prototypeFactory(FixtureC848::class, static function (ContainerInterface $container) {
            return new FixtureC848($container->get(FixtureC847::class));
        });

        $container->prototypeFactory(FixtureC849::class, static function (ContainerInterface $container) {
            return new FixtureC849($container->get(FixtureC848::class));
        });

        $container->prototypeFactory(FixtureC850::class, static function (ContainerInterface $container) {
            return new FixtureC850($container->get(FixtureC849::class));
        });

        $container->prototypeFactory(FixtureC851::class, static function (ContainerInterface $container) {
            return new FixtureC851($container->get(FixtureC850::class));
        });

        $container->prototypeFactory(FixtureC852::class, static function (ContainerInterface $container) {
            return new FixtureC852($container->get(FixtureC851::class));
        });

        $container->prototypeFactory(FixtureC853::class, static function (ContainerInterface $container) {
            return new FixtureC853($container->get(FixtureC852::class));
        });

        $container->prototypeFactory(FixtureC854::class, static function (ContainerInterface $container) {
            return new FixtureC854($container->get(FixtureC853::class));
        });

        $container->prototypeFactory(FixtureC855::class, static function (ContainerInterface $container) {
            return new FixtureC855($container->get(FixtureC854::class));
        });

        $container->prototypeFactory(FixtureC856::class, static function (ContainerInterface $container) {
            return new FixtureC856($container->get(FixtureC855::class));
        });

        $container->prototypeFactory(FixtureC857::class, static function (ContainerInterface $container) {
            return new FixtureC857($container->get(FixtureC856::class));
        });

        $container->prototypeFactory(FixtureC858::class, static function (ContainerInterface $container) {
            return new FixtureC858($container->get(FixtureC857::class));
        });

        $container->prototypeFactory(FixtureC859::class, static function (ContainerInterface $container) {
            return new FixtureC859($container->get(FixtureC858::class));
        });

        $container->prototypeFactory(FixtureC860::class, static function (ContainerInterface $container) {
            return new FixtureC860($container->get(FixtureC859::class));
        });

        $container->prototypeFactory(FixtureC861::class, static function (ContainerInterface $container) {
            return new FixtureC861($container->get(FixtureC860::class));
        });

        $container->prototypeFactory(FixtureC862::class, static function (ContainerInterface $container) {
            return new FixtureC862($container->get(FixtureC861::class));
        });

        $container->prototypeFactory(FixtureC863::class, static function (ContainerInterface $container) {
            return new FixtureC863($container->get(FixtureC862::class));
        });

        $container->prototypeFactory(FixtureC864::class, static function (ContainerInterface $container) {
            return new FixtureC864($container->get(FixtureC863::class));
        });

        $container->prototypeFactory(FixtureC865::class, static function (ContainerInterface $container) {
            return new FixtureC865($container->get(FixtureC864::class));
        });

        $container->prototypeFactory(FixtureC866::class, static function (ContainerInterface $container) {
            return new FixtureC866($container->get(FixtureC865::class));
        });

        $container->prototypeFactory(FixtureC867::class, static function (ContainerInterface $container) {
            return new FixtureC867($container->get(FixtureC866::class));
        });

        $container->prototypeFactory(FixtureC868::class, static function (ContainerInterface $container) {
            return new FixtureC868($container->get(FixtureC867::class));
        });

        $container->prototypeFactory(FixtureC869::class, static function (ContainerInterface $container) {
            return new FixtureC869($container->get(FixtureC868::class));
        });

        $container->prototypeFactory(FixtureC870::class, static function (ContainerInterface $container) {
            return new FixtureC870($container->get(FixtureC869::class));
        });

        $container->prototypeFactory(FixtureC871::class, static function (ContainerInterface $container) {
            return new FixtureC871($container->get(FixtureC870::class));
        });

        $container->prototypeFactory(FixtureC872::class, static function (ContainerInterface $container) {
            return new FixtureC872($container->get(FixtureC871::class));
        });

        $container->prototypeFactory(FixtureC873::class, static function (ContainerInterface $container) {
            return new FixtureC873($container->get(FixtureC872::class));
        });

        $container->prototypeFactory(FixtureC874::class, static function (ContainerInterface $container) {
            return new FixtureC874($container->get(FixtureC873::class));
        });

        $container->prototypeFactory(FixtureC875::class, static function (ContainerInterface $container) {
            return new FixtureC875($container->get(FixtureC874::class));
        });

        $container->prototypeFactory(FixtureC876::class, static function (ContainerInterface $container) {
            return new FixtureC876($container->get(FixtureC875::class));
        });

        $container->prototypeFactory(FixtureC877::class, static function (ContainerInterface $container) {
            return new FixtureC877($container->get(FixtureC876::class));
        });

        $container->prototypeFactory(FixtureC878::class, static function (ContainerInterface $container) {
            return new FixtureC878($container->get(FixtureC877::class));
        });

        $container->prototypeFactory(FixtureC879::class, static function (ContainerInterface $container) {
            return new FixtureC879($container->get(FixtureC878::class));
        });

        $container->prototypeFactory(FixtureC880::class, static function (ContainerInterface $container) {
            return new FixtureC880($container->get(FixtureC879::class));
        });

        $container->prototypeFactory(FixtureC881::class, static function (ContainerInterface $container) {
            return new FixtureC881($container->get(FixtureC880::class));
        });

        $container->prototypeFactory(FixtureC882::class, static function (ContainerInterface $container) {
            return new FixtureC882($container->get(FixtureC881::class));
        });

        $container->prototypeFactory(FixtureC883::class, static function (ContainerInterface $container) {
            return new FixtureC883($container->get(FixtureC882::class));
        });

        $container->prototypeFactory(FixtureC884::class, static function (ContainerInterface $container) {
            return new FixtureC884($container->get(FixtureC883::class));
        });

        $container->prototypeFactory(FixtureC885::class, static function (ContainerInterface $container) {
            return new FixtureC885($container->get(FixtureC884::class));
        });

        $container->prototypeFactory(FixtureC886::class, static function (ContainerInterface $container) {
            return new FixtureC886($container->get(FixtureC885::class));
        });

        $container->prototypeFactory(FixtureC887::class, static function (ContainerInterface $container) {
            return new FixtureC887($container->get(FixtureC886::class));
        });

        $container->prototypeFactory(FixtureC888::class, static function (ContainerInterface $container) {
            return new FixtureC888($container->get(FixtureC887::class));
        });

        $container->prototypeFactory(FixtureC889::class, static function (ContainerInterface $container) {
            return new FixtureC889($container->get(FixtureC888::class));
        });

        $container->prototypeFactory(FixtureC890::class, static function (ContainerInterface $container) {
            return new FixtureC890($container->get(FixtureC889::class));
        });

        $container->prototypeFactory(FixtureC891::class, static function (ContainerInterface $container) {
            return new FixtureC891($container->get(FixtureC890::class));
        });

        $container->prototypeFactory(FixtureC892::class, static function (ContainerInterface $container) {
            return new FixtureC892($container->get(FixtureC891::class));
        });

        $container->prototypeFactory(FixtureC893::class, static function (ContainerInterface $container) {
            return new FixtureC893($container->get(FixtureC892::class));
        });

        $container->prototypeFactory(FixtureC894::class, static function (ContainerInterface $container) {
            return new FixtureC894($container->get(FixtureC893::class));
        });

        $container->prototypeFactory(FixtureC895::class, static function (ContainerInterface $container) {
            return new FixtureC895($container->get(FixtureC894::class));
        });

        $container->prototypeFactory(FixtureC896::class, static function (ContainerInterface $container) {
            return new FixtureC896($container->get(FixtureC895::class));
        });

        $container->prototypeFactory(FixtureC897::class, static function (ContainerInterface $container) {
            return new FixtureC897($container->get(FixtureC896::class));
        });

        $container->prototypeFactory(FixtureC898::class, static function (ContainerInterface $container) {
            return new FixtureC898($container->get(FixtureC897::class));
        });

        $container->prototypeFactory(FixtureC899::class, static function (ContainerInterface $container) {
            return new FixtureC899($container->get(FixtureC898::class));
        });

        $container->prototypeFactory(FixtureC900::class, static function (ContainerInterface $container) {
            return new FixtureC900($container->get(FixtureC899::class));
        });

        $container->prototypeFactory(FixtureC901::class, static function (ContainerInterface $container) {
            return new FixtureC901($container->get(FixtureC900::class));
        });

        $container->prototypeFactory(FixtureC902::class, static function (ContainerInterface $container) {
            return new FixtureC902($container->get(FixtureC901::class));
        });

        $container->prototypeFactory(FixtureC903::class, static function (ContainerInterface $container) {
            return new FixtureC903($container->get(FixtureC902::class));
        });

        $container->prototypeFactory(FixtureC904::class, static function (ContainerInterface $container) {
            return new FixtureC904($container->get(FixtureC903::class));
        });

        $container->prototypeFactory(FixtureC905::class, static function (ContainerInterface $container) {
            return new FixtureC905($container->get(FixtureC904::class));
        });

        $container->prototypeFactory(FixtureC906::class, static function (ContainerInterface $container) {
            return new FixtureC906($container->get(FixtureC905::class));
        });

        $container->prototypeFactory(FixtureC907::class, static function (ContainerInterface $container) {
            return new FixtureC907($container->get(FixtureC906::class));
        });

        $container->prototypeFactory(FixtureC908::class, static function (ContainerInterface $container) {
            return new FixtureC908($container->get(FixtureC907::class));
        });

        $container->prototypeFactory(FixtureC909::class, static function (ContainerInterface $container) {
            return new FixtureC909($container->get(FixtureC908::class));
        });

        $container->prototypeFactory(FixtureC910::class, static function (ContainerInterface $container) {
            return new FixtureC910($container->get(FixtureC909::class));
        });

        $container->prototypeFactory(FixtureC911::class, static function (ContainerInterface $container) {
            return new FixtureC911($container->get(FixtureC910::class));
        });

        $container->prototypeFactory(FixtureC912::class, static function (ContainerInterface $container) {
            return new FixtureC912($container->get(FixtureC911::class));
        });

        $container->prototypeFactory(FixtureC913::class, static function (ContainerInterface $container) {
            return new FixtureC913($container->get(FixtureC912::class));
        });

        $container->prototypeFactory(FixtureC914::class, static function (ContainerInterface $container) {
            return new FixtureC914($container->get(FixtureC913::class));
        });

        $container->prototypeFactory(FixtureC915::class, static function (ContainerInterface $container) {
            return new FixtureC915($container->get(FixtureC914::class));
        });

        $container->prototypeFactory(FixtureC916::class, static function (ContainerInterface $container) {
            return new FixtureC916($container->get(FixtureC915::class));
        });

        $container->prototypeFactory(FixtureC917::class, static function (ContainerInterface $container) {
            return new FixtureC917($container->get(FixtureC916::class));
        });

        $container->prototypeFactory(FixtureC918::class, static function (ContainerInterface $container) {
            return new FixtureC918($container->get(FixtureC917::class));
        });

        $container->prototypeFactory(FixtureC919::class, static function (ContainerInterface $container) {
            return new FixtureC919($container->get(FixtureC918::class));
        });

        $container->prototypeFactory(FixtureC920::class, static function (ContainerInterface $container) {
            return new FixtureC920($container->get(FixtureC919::class));
        });

        $container->prototypeFactory(FixtureC921::class, static function (ContainerInterface $container) {
            return new FixtureC921($container->get(FixtureC920::class));
        });

        $container->prototypeFactory(FixtureC922::class, static function (ContainerInterface $container) {
            return new FixtureC922($container->get(FixtureC921::class));
        });

        $container->prototypeFactory(FixtureC923::class, static function (ContainerInterface $container) {
            return new FixtureC923($container->get(FixtureC922::class));
        });

        $container->prototypeFactory(FixtureC924::class, static function (ContainerInterface $container) {
            return new FixtureC924($container->get(FixtureC923::class));
        });

        $container->prototypeFactory(FixtureC925::class, static function (ContainerInterface $container) {
            return new FixtureC925($container->get(FixtureC924::class));
        });

        $container->prototypeFactory(FixtureC926::class, static function (ContainerInterface $container) {
            return new FixtureC926($container->get(FixtureC925::class));
        });

        $container->prototypeFactory(FixtureC927::class, static function (ContainerInterface $container) {
            return new FixtureC927($container->get(FixtureC926::class));
        });

        $container->prototypeFactory(FixtureC928::class, static function (ContainerInterface $container) {
            return new FixtureC928($container->get(FixtureC927::class));
        });

        $container->prototypeFactory(FixtureC929::class, static function (ContainerInterface $container) {
            return new FixtureC929($container->get(FixtureC928::class));
        });

        $container->prototypeFactory(FixtureC930::class, static function (ContainerInterface $container) {
            return new FixtureC930($container->get(FixtureC929::class));
        });

        $container->prototypeFactory(FixtureC931::class, static function (ContainerInterface $container) {
            return new FixtureC931($container->get(FixtureC930::class));
        });

        $container->prototypeFactory(FixtureC932::class, static function (ContainerInterface $container) {
            return new FixtureC932($container->get(FixtureC931::class));
        });

        $container->prototypeFactory(FixtureC933::class, static function (ContainerInterface $container) {
            return new FixtureC933($container->get(FixtureC932::class));
        });

        $container->prototypeFactory(FixtureC934::class, static function (ContainerInterface $container) {
            return new FixtureC934($container->get(FixtureC933::class));
        });

        $container->prototypeFactory(FixtureC935::class, static function (ContainerInterface $container) {
            return new FixtureC935($container->get(FixtureC934::class));
        });

        $container->prototypeFactory(FixtureC936::class, static function (ContainerInterface $container) {
            return new FixtureC936($container->get(FixtureC935::class));
        });

        $container->prototypeFactory(FixtureC937::class, static function (ContainerInterface $container) {
            return new FixtureC937($container->get(FixtureC936::class));
        });

        $container->prototypeFactory(FixtureC938::class, static function (ContainerInterface $container) {
            return new FixtureC938($container->get(FixtureC937::class));
        });

        $container->prototypeFactory(FixtureC939::class, static function (ContainerInterface $container) {
            return new FixtureC939($container->get(FixtureC938::class));
        });

        $container->prototypeFactory(FixtureC940::class, static function (ContainerInterface $container) {
            return new FixtureC940($container->get(FixtureC939::class));
        });

        $container->prototypeFactory(FixtureC941::class, static function (ContainerInterface $container) {
            return new FixtureC941($container->get(FixtureC940::class));
        });

        $container->prototypeFactory(FixtureC942::class, static function (ContainerInterface $container) {
            return new FixtureC942($container->get(FixtureC941::class));
        });

        $container->prototypeFactory(FixtureC943::class, static function (ContainerInterface $container) {
            return new FixtureC943($container->get(FixtureC942::class));
        });

        $container->prototypeFactory(FixtureC944::class, static function (ContainerInterface $container) {
            return new FixtureC944($container->get(FixtureC943::class));
        });

        $container->prototypeFactory(FixtureC945::class, static function (ContainerInterface $container) {
            return new FixtureC945($container->get(FixtureC944::class));
        });

        $container->prototypeFactory(FixtureC946::class, static function (ContainerInterface $container) {
            return new FixtureC946($container->get(FixtureC945::class));
        });

        $container->prototypeFactory(FixtureC947::class, static function (ContainerInterface $container) {
            return new FixtureC947($container->get(FixtureC946::class));
        });

        $container->prototypeFactory(FixtureC948::class, static function (ContainerInterface $container) {
            return new FixtureC948($container->get(FixtureC947::class));
        });

        $container->prototypeFactory(FixtureC949::class, static function (ContainerInterface $container) {
            return new FixtureC949($container->get(FixtureC948::class));
        });

        $container->prototypeFactory(FixtureC950::class, static function (ContainerInterface $container) {
            return new FixtureC950($container->get(FixtureC949::class));
        });

        $container->prototypeFactory(FixtureC951::class, static function (ContainerInterface $container) {
            return new FixtureC951($container->get(FixtureC950::class));
        });

        $container->prototypeFactory(FixtureC952::class, static function (ContainerInterface $container) {
            return new FixtureC952($container->get(FixtureC951::class));
        });

        $container->prototypeFactory(FixtureC953::class, static function (ContainerInterface $container) {
            return new FixtureC953($container->get(FixtureC952::class));
        });

        $container->prototypeFactory(FixtureC954::class, static function (ContainerInterface $container) {
            return new FixtureC954($container->get(FixtureC953::class));
        });

        $container->prototypeFactory(FixtureC955::class, static function (ContainerInterface $container) {
            return new FixtureC955($container->get(FixtureC954::class));
        });

        $container->prototypeFactory(FixtureC956::class, static function (ContainerInterface $container) {
            return new FixtureC956($container->get(FixtureC955::class));
        });

        $container->prototypeFactory(FixtureC957::class, static function (ContainerInterface $container) {
            return new FixtureC957($container->get(FixtureC956::class));
        });

        $container->prototypeFactory(FixtureC958::class, static function (ContainerInterface $container) {
            return new FixtureC958($container->get(FixtureC957::class));
        });

        $container->prototypeFactory(FixtureC959::class, static function (ContainerInterface $container) {
            return new FixtureC959($container->get(FixtureC958::class));
        });

        $container->prototypeFactory(FixtureC960::class, static function (ContainerInterface $container) {
            return new FixtureC960($container->get(FixtureC959::class));
        });

        $container->prototypeFactory(FixtureC961::class, static function (ContainerInterface $container) {
            return new FixtureC961($container->get(FixtureC960::class));
        });

        $container->prototypeFactory(FixtureC962::class, static function (ContainerInterface $container) {
            return new FixtureC962($container->get(FixtureC961::class));
        });

        $container->prototypeFactory(FixtureC963::class, static function (ContainerInterface $container) {
            return new FixtureC963($container->get(FixtureC962::class));
        });

        $container->prototypeFactory(FixtureC964::class, static function (ContainerInterface $container) {
            return new FixtureC964($container->get(FixtureC963::class));
        });

        $container->prototypeFactory(FixtureC965::class, static function (ContainerInterface $container) {
            return new FixtureC965($container->get(FixtureC964::class));
        });

        $container->prototypeFactory(FixtureC966::class, static function (ContainerInterface $container) {
            return new FixtureC966($container->get(FixtureC965::class));
        });

        $container->prototypeFactory(FixtureC967::class, static function (ContainerInterface $container) {
            return new FixtureC967($container->get(FixtureC966::class));
        });

        $container->prototypeFactory(FixtureC968::class, static function (ContainerInterface $container) {
            return new FixtureC968($container->get(FixtureC967::class));
        });

        $container->prototypeFactory(FixtureC969::class, static function (ContainerInterface $container) {
            return new FixtureC969($container->get(FixtureC968::class));
        });

        $container->prototypeFactory(FixtureC970::class, static function (ContainerInterface $container) {
            return new FixtureC970($container->get(FixtureC969::class));
        });

        $container->prototypeFactory(FixtureC971::class, static function (ContainerInterface $container) {
            return new FixtureC971($container->get(FixtureC970::class));
        });

        $container->prototypeFactory(FixtureC972::class, static function (ContainerInterface $container) {
            return new FixtureC972($container->get(FixtureC971::class));
        });

        $container->prototypeFactory(FixtureC973::class, static function (ContainerInterface $container) {
            return new FixtureC973($container->get(FixtureC972::class));
        });

        $container->prototypeFactory(FixtureC974::class, static function (ContainerInterface $container) {
            return new FixtureC974($container->get(FixtureC973::class));
        });

        $container->prototypeFactory(FixtureC975::class, static function (ContainerInterface $container) {
            return new FixtureC975($container->get(FixtureC974::class));
        });

        $container->prototypeFactory(FixtureC976::class, static function (ContainerInterface $container) {
            return new FixtureC976($container->get(FixtureC975::class));
        });

        $container->prototypeFactory(FixtureC977::class, static function (ContainerInterface $container) {
            return new FixtureC977($container->get(FixtureC976::class));
        });

        $container->prototypeFactory(FixtureC978::class, static function (ContainerInterface $container) {
            return new FixtureC978($container->get(FixtureC977::class));
        });

        $container->prototypeFactory(FixtureC979::class, static function (ContainerInterface $container) {
            return new FixtureC979($container->get(FixtureC978::class));
        });

        $container->prototypeFactory(FixtureC980::class, static function (ContainerInterface $container) {
            return new FixtureC980($container->get(FixtureC979::class));
        });

        $container->prototypeFactory(FixtureC981::class, static function (ContainerInterface $container) {
            return new FixtureC981($container->get(FixtureC980::class));
        });

        $container->prototypeFactory(FixtureC982::class, static function (ContainerInterface $container) {
            return new FixtureC982($container->get(FixtureC981::class));
        });

        $container->prototypeFactory(FixtureC983::class, static function (ContainerInterface $container) {
            return new FixtureC983($container->get(FixtureC982::class));
        });

        $container->prototypeFactory(FixtureC984::class, static function (ContainerInterface $container) {
            return new FixtureC984($container->get(FixtureC983::class));
        });

        $container->prototypeFactory(FixtureC985::class, static function (ContainerInterface $container) {
            return new FixtureC985($container->get(FixtureC984::class));
        });

        $container->prototypeFactory(FixtureC986::class, static function (ContainerInterface $container) {
            return new FixtureC986($container->get(FixtureC985::class));
        });

        $container->prototypeFactory(FixtureC987::class, static function (ContainerInterface $container) {
            return new FixtureC987($container->get(FixtureC986::class));
        });

        $container->prototypeFactory(FixtureC988::class, static function (ContainerInterface $container) {
            return new FixtureC988($container->get(FixtureC987::class));
        });

        $container->prototypeFactory(FixtureC989::class, static function (ContainerInterface $container) {
            return new FixtureC989($container->get(FixtureC988::class));
        });

        $container->prototypeFactory(FixtureC990::class, static function (ContainerInterface $container) {
            return new FixtureC990($container->get(FixtureC989::class));
        });

        $container->prototypeFactory(FixtureC991::class, static function (ContainerInterface $container) {
            return new FixtureC991($container->get(FixtureC990::class));
        });

        $container->prototypeFactory(FixtureC992::class, static function (ContainerInterface $container) {
            return new FixtureC992($container->get(FixtureC991::class));
        });

        $container->prototypeFactory(FixtureC993::class, static function (ContainerInterface $container) {
            return new FixtureC993($container->get(FixtureC992::class));
        });

        $container->prototypeFactory(FixtureC994::class, static function (ContainerInterface $container) {
            return new FixtureC994($container->get(FixtureC993::class));
        });

        $container->prototypeFactory(FixtureC995::class, static function (ContainerInterface $container) {
            return new FixtureC995($container->get(FixtureC994::class));
        });

        $container->prototypeFactory(FixtureC996::class, static function (ContainerInterface $container) {
            return new FixtureC996($container->get(FixtureC995::class));
        });

        $container->prototypeFactory(FixtureC997::class, static function (ContainerInterface $container) {
            return new FixtureC997($container->get(FixtureC996::class));
        });

        $container->prototypeFactory(FixtureC998::class, static function (ContainerInterface $container) {
            return new FixtureC998($container->get(FixtureC997::class));
        });

        $container->prototypeFactory(FixtureC999::class, static function (ContainerInterface $container) {
            return new FixtureC999($container->get(FixtureC998::class));
        });

        $container->prototypeFactory(FixtureC1000::class, static function (ContainerInterface $container) {
            return new FixtureC1000($container->get(FixtureC999::class));
        });

        return $container;
    }
}
