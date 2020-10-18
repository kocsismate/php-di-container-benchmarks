<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\LaminasServiceManager;

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
use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\InvokableFactory;
use Laminas\ServiceManager\ServiceManager;

final class LaminasServiceManagerContainerAdapter implements ContainerAdapterInterface
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

            echo "[\n";
            for ($i = 1; $i <= 100; $i++) {
               echo "    FixtureA" . $i . "::class => static function (ContainerInterface \$container) {\n";
               echo "        return new FixtureA{$i}(\$container->get(FixtureA" . ($i-1) . "::class));\n";
               echo "    },\n";
            }

            for ($i = 1; $i <= 1000; $i++) {
               echo "    FixtureB" . $i . "::class => static function () {\n";
               echo "        return new FixtureB{$i}();\n";
               echo "    },\n";
            }

            for ($i = 1; $i <= 1000; $i++) {
               echo "    FixtureC" . $i . "::class => static function (ContainerInterface \$container) {\n";
               echo "        return new FixtureC{$i}(\$container->get(FixtureC" . ($i-1) . "::class));\n";
               echo "    },\n";
            }

            echo "]\n";
        */
        return new ServiceManager(
            [
                "factories" => [
                    FixtureA1::class => InvokableFactory::class,
                    FixtureA2::class => static function (ContainerInterface $container) {
                        return new FixtureA2($container->get(FixtureA1::class));
                    },
                    FixtureA3::class => static function (ContainerInterface $container) {
                        return new FixtureA3($container->get(FixtureA2::class));
                    },
                    FixtureA4::class => static function (ContainerInterface $container) {
                        return new FixtureA4($container->get(FixtureA3::class));
                    },
                    FixtureA5::class => static function (ContainerInterface $container) {
                        return new FixtureA5($container->get(FixtureA4::class));
                    },
                    FixtureA6::class => static function (ContainerInterface $container) {
                        return new FixtureA6($container->get(FixtureA5::class));
                    },
                    FixtureA7::class => static function (ContainerInterface $container) {
                        return new FixtureA7($container->get(FixtureA6::class));
                    },
                    FixtureA8::class => static function (ContainerInterface $container) {
                        return new FixtureA8($container->get(FixtureA7::class));
                    },
                    FixtureA9::class => static function (ContainerInterface $container) {
                        return new FixtureA9($container->get(FixtureA8::class));
                    },
                    FixtureA10::class => static function (ContainerInterface $container) {
                        return new FixtureA10($container->get(FixtureA9::class));
                    },
                    FixtureA11::class => static function (ContainerInterface $container) {
                        return new FixtureA11($container->get(FixtureA10::class));
                    },
                    FixtureA12::class => static function (ContainerInterface $container) {
                        return new FixtureA12($container->get(FixtureA11::class));
                    },
                    FixtureA13::class => static function (ContainerInterface $container) {
                        return new FixtureA13($container->get(FixtureA12::class));
                    },
                    FixtureA14::class => static function (ContainerInterface $container) {
                        return new FixtureA14($container->get(FixtureA13::class));
                    },
                    FixtureA15::class => static function (ContainerInterface $container) {
                        return new FixtureA15($container->get(FixtureA14::class));
                    },
                    FixtureA16::class => static function (ContainerInterface $container) {
                        return new FixtureA16($container->get(FixtureA15::class));
                    },
                    FixtureA17::class => static function (ContainerInterface $container) {
                        return new FixtureA17($container->get(FixtureA16::class));
                    },
                    FixtureA18::class => static function (ContainerInterface $container) {
                        return new FixtureA18($container->get(FixtureA17::class));
                    },
                    FixtureA19::class => static function (ContainerInterface $container) {
                        return new FixtureA19($container->get(FixtureA18::class));
                    },
                    FixtureA20::class => static function (ContainerInterface $container) {
                        return new FixtureA20($container->get(FixtureA19::class));
                    },
                    FixtureA21::class => static function (ContainerInterface $container) {
                        return new FixtureA21($container->get(FixtureA20::class));
                    },
                    FixtureA22::class => static function (ContainerInterface $container) {
                        return new FixtureA22($container->get(FixtureA21::class));
                    },
                    FixtureA23::class => static function (ContainerInterface $container) {
                        return new FixtureA23($container->get(FixtureA22::class));
                    },
                    FixtureA24::class => static function (ContainerInterface $container) {
                        return new FixtureA24($container->get(FixtureA23::class));
                    },
                    FixtureA25::class => static function (ContainerInterface $container) {
                        return new FixtureA25($container->get(FixtureA24::class));
                    },
                    FixtureA26::class => static function (ContainerInterface $container) {
                        return new FixtureA26($container->get(FixtureA25::class));
                    },
                    FixtureA27::class => static function (ContainerInterface $container) {
                        return new FixtureA27($container->get(FixtureA26::class));
                    },
                    FixtureA28::class => static function (ContainerInterface $container) {
                        return new FixtureA28($container->get(FixtureA27::class));
                    },
                    FixtureA29::class => static function (ContainerInterface $container) {
                        return new FixtureA29($container->get(FixtureA28::class));
                    },
                    FixtureA30::class => static function (ContainerInterface $container) {
                        return new FixtureA30($container->get(FixtureA29::class));
                    },
                    FixtureA31::class => static function (ContainerInterface $container) {
                        return new FixtureA31($container->get(FixtureA30::class));
                    },
                    FixtureA32::class => static function (ContainerInterface $container) {
                        return new FixtureA32($container->get(FixtureA31::class));
                    },
                    FixtureA33::class => static function (ContainerInterface $container) {
                        return new FixtureA33($container->get(FixtureA32::class));
                    },
                    FixtureA34::class => static function (ContainerInterface $container) {
                        return new FixtureA34($container->get(FixtureA33::class));
                    },
                    FixtureA35::class => static function (ContainerInterface $container) {
                        return new FixtureA35($container->get(FixtureA34::class));
                    },
                    FixtureA36::class => static function (ContainerInterface $container) {
                        return new FixtureA36($container->get(FixtureA35::class));
                    },
                    FixtureA37::class => static function (ContainerInterface $container) {
                        return new FixtureA37($container->get(FixtureA36::class));
                    },
                    FixtureA38::class => static function (ContainerInterface $container) {
                        return new FixtureA38($container->get(FixtureA37::class));
                    },
                    FixtureA39::class => static function (ContainerInterface $container) {
                        return new FixtureA39($container->get(FixtureA38::class));
                    },
                    FixtureA40::class => static function (ContainerInterface $container) {
                        return new FixtureA40($container->get(FixtureA39::class));
                    },
                    FixtureA41::class => static function (ContainerInterface $container) {
                        return new FixtureA41($container->get(FixtureA40::class));
                    },
                    FixtureA42::class => static function (ContainerInterface $container) {
                        return new FixtureA42($container->get(FixtureA41::class));
                    },
                    FixtureA43::class => static function (ContainerInterface $container) {
                        return new FixtureA43($container->get(FixtureA42::class));
                    },
                    FixtureA44::class => static function (ContainerInterface $container) {
                        return new FixtureA44($container->get(FixtureA43::class));
                    },
                    FixtureA45::class => static function (ContainerInterface $container) {
                        return new FixtureA45($container->get(FixtureA44::class));
                    },
                    FixtureA46::class => static function (ContainerInterface $container) {
                        return new FixtureA46($container->get(FixtureA45::class));
                    },
                    FixtureA47::class => static function (ContainerInterface $container) {
                        return new FixtureA47($container->get(FixtureA46::class));
                    },
                    FixtureA48::class => static function (ContainerInterface $container) {
                        return new FixtureA48($container->get(FixtureA47::class));
                    },
                    FixtureA49::class => static function (ContainerInterface $container) {
                        return new FixtureA49($container->get(FixtureA48::class));
                    },
                    FixtureA50::class => static function (ContainerInterface $container) {
                        return new FixtureA50($container->get(FixtureA49::class));
                    },
                    FixtureA51::class => static function (ContainerInterface $container) {
                        return new FixtureA51($container->get(FixtureA50::class));
                    },
                    FixtureA52::class => static function (ContainerInterface $container) {
                        return new FixtureA52($container->get(FixtureA51::class));
                    },
                    FixtureA53::class => static function (ContainerInterface $container) {
                        return new FixtureA53($container->get(FixtureA52::class));
                    },
                    FixtureA54::class => static function (ContainerInterface $container) {
                        return new FixtureA54($container->get(FixtureA53::class));
                    },
                    FixtureA55::class => static function (ContainerInterface $container) {
                        return new FixtureA55($container->get(FixtureA54::class));
                    },
                    FixtureA56::class => static function (ContainerInterface $container) {
                        return new FixtureA56($container->get(FixtureA55::class));
                    },
                    FixtureA57::class => static function (ContainerInterface $container) {
                        return new FixtureA57($container->get(FixtureA56::class));
                    },
                    FixtureA58::class => static function (ContainerInterface $container) {
                        return new FixtureA58($container->get(FixtureA57::class));
                    },
                    FixtureA59::class => static function (ContainerInterface $container) {
                        return new FixtureA59($container->get(FixtureA58::class));
                    },
                    FixtureA60::class => static function (ContainerInterface $container) {
                        return new FixtureA60($container->get(FixtureA59::class));
                    },
                    FixtureA61::class => static function (ContainerInterface $container) {
                        return new FixtureA61($container->get(FixtureA60::class));
                    },
                    FixtureA62::class => static function (ContainerInterface $container) {
                        return new FixtureA62($container->get(FixtureA61::class));
                    },
                    FixtureA63::class => static function (ContainerInterface $container) {
                        return new FixtureA63($container->get(FixtureA62::class));
                    },
                    FixtureA64::class => static function (ContainerInterface $container) {
                        return new FixtureA64($container->get(FixtureA63::class));
                    },
                    FixtureA65::class => static function (ContainerInterface $container) {
                        return new FixtureA65($container->get(FixtureA64::class));
                    },
                    FixtureA66::class => static function (ContainerInterface $container) {
                        return new FixtureA66($container->get(FixtureA65::class));
                    },
                    FixtureA67::class => static function (ContainerInterface $container) {
                        return new FixtureA67($container->get(FixtureA66::class));
                    },
                    FixtureA68::class => static function (ContainerInterface $container) {
                        return new FixtureA68($container->get(FixtureA67::class));
                    },
                    FixtureA69::class => static function (ContainerInterface $container) {
                        return new FixtureA69($container->get(FixtureA68::class));
                    },
                    FixtureA70::class => static function (ContainerInterface $container) {
                        return new FixtureA70($container->get(FixtureA69::class));
                    },
                    FixtureA71::class => static function (ContainerInterface $container) {
                        return new FixtureA71($container->get(FixtureA70::class));
                    },
                    FixtureA72::class => static function (ContainerInterface $container) {
                        return new FixtureA72($container->get(FixtureA71::class));
                    },
                    FixtureA73::class => static function (ContainerInterface $container) {
                        return new FixtureA73($container->get(FixtureA72::class));
                    },
                    FixtureA74::class => static function (ContainerInterface $container) {
                        return new FixtureA74($container->get(FixtureA73::class));
                    },
                    FixtureA75::class => static function (ContainerInterface $container) {
                        return new FixtureA75($container->get(FixtureA74::class));
                    },
                    FixtureA76::class => static function (ContainerInterface $container) {
                        return new FixtureA76($container->get(FixtureA75::class));
                    },
                    FixtureA77::class => static function (ContainerInterface $container) {
                        return new FixtureA77($container->get(FixtureA76::class));
                    },
                    FixtureA78::class => static function (ContainerInterface $container) {
                        return new FixtureA78($container->get(FixtureA77::class));
                    },
                    FixtureA79::class => static function (ContainerInterface $container) {
                        return new FixtureA79($container->get(FixtureA78::class));
                    },
                    FixtureA80::class => static function (ContainerInterface $container) {
                        return new FixtureA80($container->get(FixtureA79::class));
                    },
                    FixtureA81::class => static function (ContainerInterface $container) {
                        return new FixtureA81($container->get(FixtureA80::class));
                    },
                    FixtureA82::class => static function (ContainerInterface $container) {
                        return new FixtureA82($container->get(FixtureA81::class));
                    },
                    FixtureA83::class => static function (ContainerInterface $container) {
                        return new FixtureA83($container->get(FixtureA82::class));
                    },
                    FixtureA84::class => static function (ContainerInterface $container) {
                        return new FixtureA84($container->get(FixtureA83::class));
                    },
                    FixtureA85::class => static function (ContainerInterface $container) {
                        return new FixtureA85($container->get(FixtureA84::class));
                    },
                    FixtureA86::class => static function (ContainerInterface $container) {
                        return new FixtureA86($container->get(FixtureA85::class));
                    },
                    FixtureA87::class => static function (ContainerInterface $container) {
                        return new FixtureA87($container->get(FixtureA86::class));
                    },
                    FixtureA88::class => static function (ContainerInterface $container) {
                        return new FixtureA88($container->get(FixtureA87::class));
                    },
                    FixtureA89::class => static function (ContainerInterface $container) {
                        return new FixtureA89($container->get(FixtureA88::class));
                    },
                    FixtureA90::class => static function (ContainerInterface $container) {
                        return new FixtureA90($container->get(FixtureA89::class));
                    },
                    FixtureA91::class => static function (ContainerInterface $container) {
                        return new FixtureA91($container->get(FixtureA90::class));
                    },
                    FixtureA92::class => static function (ContainerInterface $container) {
                        return new FixtureA92($container->get(FixtureA91::class));
                    },
                    FixtureA93::class => static function (ContainerInterface $container) {
                        return new FixtureA93($container->get(FixtureA92::class));
                    },
                    FixtureA94::class => static function (ContainerInterface $container) {
                        return new FixtureA94($container->get(FixtureA93::class));
                    },
                    FixtureA95::class => static function (ContainerInterface $container) {
                        return new FixtureA95($container->get(FixtureA94::class));
                    },
                    FixtureA96::class => static function (ContainerInterface $container) {
                        return new FixtureA96($container->get(FixtureA95::class));
                    },
                    FixtureA97::class => static function (ContainerInterface $container) {
                        return new FixtureA97($container->get(FixtureA96::class));
                    },
                    FixtureA98::class => static function (ContainerInterface $container) {
                        return new FixtureA98($container->get(FixtureA97::class));
                    },
                    FixtureA99::class => static function (ContainerInterface $container) {
                        return new FixtureA99($container->get(FixtureA98::class));
                    },
                    FixtureA100::class => static function (ContainerInterface $container) {
                        return new FixtureA100($container->get(FixtureA99::class));
                    },
                    FixtureB1::class => static function () {
                        return new FixtureB1();
                    },
                    FixtureB2::class => static function () {
                        return new FixtureB2();
                    },
                    FixtureB3::class => static function () {
                        return new FixtureB3();
                    },
                    FixtureB4::class => static function () {
                        return new FixtureB4();
                    },
                    FixtureB5::class => static function () {
                        return new FixtureB5();
                    },
                    FixtureB6::class => static function () {
                        return new FixtureB6();
                    },
                    FixtureB7::class => static function () {
                        return new FixtureB7();
                    },
                    FixtureB8::class => static function () {
                        return new FixtureB8();
                    },
                    FixtureB9::class => static function () {
                        return new FixtureB9();
                    },
                    FixtureB10::class => static function () {
                        return new FixtureB10();
                    },
                    FixtureB11::class => static function () {
                        return new FixtureB11();
                    },
                    FixtureB12::class => static function () {
                        return new FixtureB12();
                    },
                    FixtureB13::class => static function () {
                        return new FixtureB13();
                    },
                    FixtureB14::class => static function () {
                        return new FixtureB14();
                    },
                    FixtureB15::class => static function () {
                        return new FixtureB15();
                    },
                    FixtureB16::class => static function () {
                        return new FixtureB16();
                    },
                    FixtureB17::class => static function () {
                        return new FixtureB17();
                    },
                    FixtureB18::class => static function () {
                        return new FixtureB18();
                    },
                    FixtureB19::class => static function () {
                        return new FixtureB19();
                    },
                    FixtureB20::class => static function () {
                        return new FixtureB20();
                    },
                    FixtureB21::class => static function () {
                        return new FixtureB21();
                    },
                    FixtureB22::class => static function () {
                        return new FixtureB22();
                    },
                    FixtureB23::class => static function () {
                        return new FixtureB23();
                    },
                    FixtureB24::class => static function () {
                        return new FixtureB24();
                    },
                    FixtureB25::class => static function () {
                        return new FixtureB25();
                    },
                    FixtureB26::class => static function () {
                        return new FixtureB26();
                    },
                    FixtureB27::class => static function () {
                        return new FixtureB27();
                    },
                    FixtureB28::class => static function () {
                        return new FixtureB28();
                    },
                    FixtureB29::class => static function () {
                        return new FixtureB29();
                    },
                    FixtureB30::class => static function () {
                        return new FixtureB30();
                    },
                    FixtureB31::class => static function () {
                        return new FixtureB31();
                    },
                    FixtureB32::class => static function () {
                        return new FixtureB32();
                    },
                    FixtureB33::class => static function () {
                        return new FixtureB33();
                    },
                    FixtureB34::class => static function () {
                        return new FixtureB34();
                    },
                    FixtureB35::class => static function () {
                        return new FixtureB35();
                    },
                    FixtureB36::class => static function () {
                        return new FixtureB36();
                    },
                    FixtureB37::class => static function () {
                        return new FixtureB37();
                    },
                    FixtureB38::class => static function () {
                        return new FixtureB38();
                    },
                    FixtureB39::class => static function () {
                        return new FixtureB39();
                    },
                    FixtureB40::class => static function () {
                        return new FixtureB40();
                    },
                    FixtureB41::class => static function () {
                        return new FixtureB41();
                    },
                    FixtureB42::class => static function () {
                        return new FixtureB42();
                    },
                    FixtureB43::class => static function () {
                        return new FixtureB43();
                    },
                    FixtureB44::class => static function () {
                        return new FixtureB44();
                    },
                    FixtureB45::class => static function () {
                        return new FixtureB45();
                    },
                    FixtureB46::class => static function () {
                        return new FixtureB46();
                    },
                    FixtureB47::class => static function () {
                        return new FixtureB47();
                    },
                    FixtureB48::class => static function () {
                        return new FixtureB48();
                    },
                    FixtureB49::class => static function () {
                        return new FixtureB49();
                    },
                    FixtureB50::class => static function () {
                        return new FixtureB50();
                    },
                    FixtureB51::class => static function () {
                        return new FixtureB51();
                    },
                    FixtureB52::class => static function () {
                        return new FixtureB52();
                    },
                    FixtureB53::class => static function () {
                        return new FixtureB53();
                    },
                    FixtureB54::class => static function () {
                        return new FixtureB54();
                    },
                    FixtureB55::class => static function () {
                        return new FixtureB55();
                    },
                    FixtureB56::class => static function () {
                        return new FixtureB56();
                    },
                    FixtureB57::class => static function () {
                        return new FixtureB57();
                    },
                    FixtureB58::class => static function () {
                        return new FixtureB58();
                    },
                    FixtureB59::class => static function () {
                        return new FixtureB59();
                    },
                    FixtureB60::class => static function () {
                        return new FixtureB60();
                    },
                    FixtureB61::class => static function () {
                        return new FixtureB61();
                    },
                    FixtureB62::class => static function () {
                        return new FixtureB62();
                    },
                    FixtureB63::class => static function () {
                        return new FixtureB63();
                    },
                    FixtureB64::class => static function () {
                        return new FixtureB64();
                    },
                    FixtureB65::class => static function () {
                        return new FixtureB65();
                    },
                    FixtureB66::class => static function () {
                        return new FixtureB66();
                    },
                    FixtureB67::class => static function () {
                        return new FixtureB67();
                    },
                    FixtureB68::class => static function () {
                        return new FixtureB68();
                    },
                    FixtureB69::class => static function () {
                        return new FixtureB69();
                    },
                    FixtureB70::class => static function () {
                        return new FixtureB70();
                    },
                    FixtureB71::class => static function () {
                        return new FixtureB71();
                    },
                    FixtureB72::class => static function () {
                        return new FixtureB72();
                    },
                    FixtureB73::class => static function () {
                        return new FixtureB73();
                    },
                    FixtureB74::class => static function () {
                        return new FixtureB74();
                    },
                    FixtureB75::class => static function () {
                        return new FixtureB75();
                    },
                    FixtureB76::class => static function () {
                        return new FixtureB76();
                    },
                    FixtureB77::class => static function () {
                        return new FixtureB77();
                    },
                    FixtureB78::class => static function () {
                        return new FixtureB78();
                    },
                    FixtureB79::class => static function () {
                        return new FixtureB79();
                    },
                    FixtureB80::class => static function () {
                        return new FixtureB80();
                    },
                    FixtureB81::class => static function () {
                        return new FixtureB81();
                    },
                    FixtureB82::class => static function () {
                        return new FixtureB82();
                    },
                    FixtureB83::class => static function () {
                        return new FixtureB83();
                    },
                    FixtureB84::class => static function () {
                        return new FixtureB84();
                    },
                    FixtureB85::class => static function () {
                        return new FixtureB85();
                    },
                    FixtureB86::class => static function () {
                        return new FixtureB86();
                    },
                    FixtureB87::class => static function () {
                        return new FixtureB87();
                    },
                    FixtureB88::class => static function () {
                        return new FixtureB88();
                    },
                    FixtureB89::class => static function () {
                        return new FixtureB89();
                    },
                    FixtureB90::class => static function () {
                        return new FixtureB90();
                    },
                    FixtureB91::class => static function () {
                        return new FixtureB91();
                    },
                    FixtureB92::class => static function () {
                        return new FixtureB92();
                    },
                    FixtureB93::class => static function () {
                        return new FixtureB93();
                    },
                    FixtureB94::class => static function () {
                        return new FixtureB94();
                    },
                    FixtureB95::class => static function () {
                        return new FixtureB95();
                    },
                    FixtureB96::class => static function () {
                        return new FixtureB96();
                    },
                    FixtureB97::class => static function () {
                        return new FixtureB97();
                    },
                    FixtureB98::class => static function () {
                        return new FixtureB98();
                    },
                    FixtureB99::class => static function () {
                        return new FixtureB99();
                    },
                    FixtureB100::class => static function () {
                        return new FixtureB100();
                    },
                    FixtureB101::class => static function () {
                        return new FixtureB101();
                    },
                    FixtureB102::class => static function () {
                        return new FixtureB102();
                    },
                    FixtureB103::class => static function () {
                        return new FixtureB103();
                    },
                    FixtureB104::class => static function () {
                        return new FixtureB104();
                    },
                    FixtureB105::class => static function () {
                        return new FixtureB105();
                    },
                    FixtureB106::class => static function () {
                        return new FixtureB106();
                    },
                    FixtureB107::class => static function () {
                        return new FixtureB107();
                    },
                    FixtureB108::class => static function () {
                        return new FixtureB108();
                    },
                    FixtureB109::class => static function () {
                        return new FixtureB109();
                    },
                    FixtureB110::class => static function () {
                        return new FixtureB110();
                    },
                    FixtureB111::class => static function () {
                        return new FixtureB111();
                    },
                    FixtureB112::class => static function () {
                        return new FixtureB112();
                    },
                    FixtureB113::class => static function () {
                        return new FixtureB113();
                    },
                    FixtureB114::class => static function () {
                        return new FixtureB114();
                    },
                    FixtureB115::class => static function () {
                        return new FixtureB115();
                    },
                    FixtureB116::class => static function () {
                        return new FixtureB116();
                    },
                    FixtureB117::class => static function () {
                        return new FixtureB117();
                    },
                    FixtureB118::class => static function () {
                        return new FixtureB118();
                    },
                    FixtureB119::class => static function () {
                        return new FixtureB119();
                    },
                    FixtureB120::class => static function () {
                        return new FixtureB120();
                    },
                    FixtureB121::class => static function () {
                        return new FixtureB121();
                    },
                    FixtureB122::class => static function () {
                        return new FixtureB122();
                    },
                    FixtureB123::class => static function () {
                        return new FixtureB123();
                    },
                    FixtureB124::class => static function () {
                        return new FixtureB124();
                    },
                    FixtureB125::class => static function () {
                        return new FixtureB125();
                    },
                    FixtureB126::class => static function () {
                        return new FixtureB126();
                    },
                    FixtureB127::class => static function () {
                        return new FixtureB127();
                    },
                    FixtureB128::class => static function () {
                        return new FixtureB128();
                    },
                    FixtureB129::class => static function () {
                        return new FixtureB129();
                    },
                    FixtureB130::class => static function () {
                        return new FixtureB130();
                    },
                    FixtureB131::class => static function () {
                        return new FixtureB131();
                    },
                    FixtureB132::class => static function () {
                        return new FixtureB132();
                    },
                    FixtureB133::class => static function () {
                        return new FixtureB133();
                    },
                    FixtureB134::class => static function () {
                        return new FixtureB134();
                    },
                    FixtureB135::class => static function () {
                        return new FixtureB135();
                    },
                    FixtureB136::class => static function () {
                        return new FixtureB136();
                    },
                    FixtureB137::class => static function () {
                        return new FixtureB137();
                    },
                    FixtureB138::class => static function () {
                        return new FixtureB138();
                    },
                    FixtureB139::class => static function () {
                        return new FixtureB139();
                    },
                    FixtureB140::class => static function () {
                        return new FixtureB140();
                    },
                    FixtureB141::class => static function () {
                        return new FixtureB141();
                    },
                    FixtureB142::class => static function () {
                        return new FixtureB142();
                    },
                    FixtureB143::class => static function () {
                        return new FixtureB143();
                    },
                    FixtureB144::class => static function () {
                        return new FixtureB144();
                    },
                    FixtureB145::class => static function () {
                        return new FixtureB145();
                    },
                    FixtureB146::class => static function () {
                        return new FixtureB146();
                    },
                    FixtureB147::class => static function () {
                        return new FixtureB147();
                    },
                    FixtureB148::class => static function () {
                        return new FixtureB148();
                    },
                    FixtureB149::class => static function () {
                        return new FixtureB149();
                    },
                    FixtureB150::class => static function () {
                        return new FixtureB150();
                    },
                    FixtureB151::class => static function () {
                        return new FixtureB151();
                    },
                    FixtureB152::class => static function () {
                        return new FixtureB152();
                    },
                    FixtureB153::class => static function () {
                        return new FixtureB153();
                    },
                    FixtureB154::class => static function () {
                        return new FixtureB154();
                    },
                    FixtureB155::class => static function () {
                        return new FixtureB155();
                    },
                    FixtureB156::class => static function () {
                        return new FixtureB156();
                    },
                    FixtureB157::class => static function () {
                        return new FixtureB157();
                    },
                    FixtureB158::class => static function () {
                        return new FixtureB158();
                    },
                    FixtureB159::class => static function () {
                        return new FixtureB159();
                    },
                    FixtureB160::class => static function () {
                        return new FixtureB160();
                    },
                    FixtureB161::class => static function () {
                        return new FixtureB161();
                    },
                    FixtureB162::class => static function () {
                        return new FixtureB162();
                    },
                    FixtureB163::class => static function () {
                        return new FixtureB163();
                    },
                    FixtureB164::class => static function () {
                        return new FixtureB164();
                    },
                    FixtureB165::class => static function () {
                        return new FixtureB165();
                    },
                    FixtureB166::class => static function () {
                        return new FixtureB166();
                    },
                    FixtureB167::class => static function () {
                        return new FixtureB167();
                    },
                    FixtureB168::class => static function () {
                        return new FixtureB168();
                    },
                    FixtureB169::class => static function () {
                        return new FixtureB169();
                    },
                    FixtureB170::class => static function () {
                        return new FixtureB170();
                    },
                    FixtureB171::class => static function () {
                        return new FixtureB171();
                    },
                    FixtureB172::class => static function () {
                        return new FixtureB172();
                    },
                    FixtureB173::class => static function () {
                        return new FixtureB173();
                    },
                    FixtureB174::class => static function () {
                        return new FixtureB174();
                    },
                    FixtureB175::class => static function () {
                        return new FixtureB175();
                    },
                    FixtureB176::class => static function () {
                        return new FixtureB176();
                    },
                    FixtureB177::class => static function () {
                        return new FixtureB177();
                    },
                    FixtureB178::class => static function () {
                        return new FixtureB178();
                    },
                    FixtureB179::class => static function () {
                        return new FixtureB179();
                    },
                    FixtureB180::class => static function () {
                        return new FixtureB180();
                    },
                    FixtureB181::class => static function () {
                        return new FixtureB181();
                    },
                    FixtureB182::class => static function () {
                        return new FixtureB182();
                    },
                    FixtureB183::class => static function () {
                        return new FixtureB183();
                    },
                    FixtureB184::class => static function () {
                        return new FixtureB184();
                    },
                    FixtureB185::class => static function () {
                        return new FixtureB185();
                    },
                    FixtureB186::class => static function () {
                        return new FixtureB186();
                    },
                    FixtureB187::class => static function () {
                        return new FixtureB187();
                    },
                    FixtureB188::class => static function () {
                        return new FixtureB188();
                    },
                    FixtureB189::class => static function () {
                        return new FixtureB189();
                    },
                    FixtureB190::class => static function () {
                        return new FixtureB190();
                    },
                    FixtureB191::class => static function () {
                        return new FixtureB191();
                    },
                    FixtureB192::class => static function () {
                        return new FixtureB192();
                    },
                    FixtureB193::class => static function () {
                        return new FixtureB193();
                    },
                    FixtureB194::class => static function () {
                        return new FixtureB194();
                    },
                    FixtureB195::class => static function () {
                        return new FixtureB195();
                    },
                    FixtureB196::class => static function () {
                        return new FixtureB196();
                    },
                    FixtureB197::class => static function () {
                        return new FixtureB197();
                    },
                    FixtureB198::class => static function () {
                        return new FixtureB198();
                    },
                    FixtureB199::class => static function () {
                        return new FixtureB199();
                    },
                    FixtureB200::class => static function () {
                        return new FixtureB200();
                    },
                    FixtureB201::class => static function () {
                        return new FixtureB201();
                    },
                    FixtureB202::class => static function () {
                        return new FixtureB202();
                    },
                    FixtureB203::class => static function () {
                        return new FixtureB203();
                    },
                    FixtureB204::class => static function () {
                        return new FixtureB204();
                    },
                    FixtureB205::class => static function () {
                        return new FixtureB205();
                    },
                    FixtureB206::class => static function () {
                        return new FixtureB206();
                    },
                    FixtureB207::class => static function () {
                        return new FixtureB207();
                    },
                    FixtureB208::class => static function () {
                        return new FixtureB208();
                    },
                    FixtureB209::class => static function () {
                        return new FixtureB209();
                    },
                    FixtureB210::class => static function () {
                        return new FixtureB210();
                    },
                    FixtureB211::class => static function () {
                        return new FixtureB211();
                    },
                    FixtureB212::class => static function () {
                        return new FixtureB212();
                    },
                    FixtureB213::class => static function () {
                        return new FixtureB213();
                    },
                    FixtureB214::class => static function () {
                        return new FixtureB214();
                    },
                    FixtureB215::class => static function () {
                        return new FixtureB215();
                    },
                    FixtureB216::class => static function () {
                        return new FixtureB216();
                    },
                    FixtureB217::class => static function () {
                        return new FixtureB217();
                    },
                    FixtureB218::class => static function () {
                        return new FixtureB218();
                    },
                    FixtureB219::class => static function () {
                        return new FixtureB219();
                    },
                    FixtureB220::class => static function () {
                        return new FixtureB220();
                    },
                    FixtureB221::class => static function () {
                        return new FixtureB221();
                    },
                    FixtureB222::class => static function () {
                        return new FixtureB222();
                    },
                    FixtureB223::class => static function () {
                        return new FixtureB223();
                    },
                    FixtureB224::class => static function () {
                        return new FixtureB224();
                    },
                    FixtureB225::class => static function () {
                        return new FixtureB225();
                    },
                    FixtureB226::class => static function () {
                        return new FixtureB226();
                    },
                    FixtureB227::class => static function () {
                        return new FixtureB227();
                    },
                    FixtureB228::class => static function () {
                        return new FixtureB228();
                    },
                    FixtureB229::class => static function () {
                        return new FixtureB229();
                    },
                    FixtureB230::class => static function () {
                        return new FixtureB230();
                    },
                    FixtureB231::class => static function () {
                        return new FixtureB231();
                    },
                    FixtureB232::class => static function () {
                        return new FixtureB232();
                    },
                    FixtureB233::class => static function () {
                        return new FixtureB233();
                    },
                    FixtureB234::class => static function () {
                        return new FixtureB234();
                    },
                    FixtureB235::class => static function () {
                        return new FixtureB235();
                    },
                    FixtureB236::class => static function () {
                        return new FixtureB236();
                    },
                    FixtureB237::class => static function () {
                        return new FixtureB237();
                    },
                    FixtureB238::class => static function () {
                        return new FixtureB238();
                    },
                    FixtureB239::class => static function () {
                        return new FixtureB239();
                    },
                    FixtureB240::class => static function () {
                        return new FixtureB240();
                    },
                    FixtureB241::class => static function () {
                        return new FixtureB241();
                    },
                    FixtureB242::class => static function () {
                        return new FixtureB242();
                    },
                    FixtureB243::class => static function () {
                        return new FixtureB243();
                    },
                    FixtureB244::class => static function () {
                        return new FixtureB244();
                    },
                    FixtureB245::class => static function () {
                        return new FixtureB245();
                    },
                    FixtureB246::class => static function () {
                        return new FixtureB246();
                    },
                    FixtureB247::class => static function () {
                        return new FixtureB247();
                    },
                    FixtureB248::class => static function () {
                        return new FixtureB248();
                    },
                    FixtureB249::class => static function () {
                        return new FixtureB249();
                    },
                    FixtureB250::class => static function () {
                        return new FixtureB250();
                    },
                    FixtureB251::class => static function () {
                        return new FixtureB251();
                    },
                    FixtureB252::class => static function () {
                        return new FixtureB252();
                    },
                    FixtureB253::class => static function () {
                        return new FixtureB253();
                    },
                    FixtureB254::class => static function () {
                        return new FixtureB254();
                    },
                    FixtureB255::class => static function () {
                        return new FixtureB255();
                    },
                    FixtureB256::class => static function () {
                        return new FixtureB256();
                    },
                    FixtureB257::class => static function () {
                        return new FixtureB257();
                    },
                    FixtureB258::class => static function () {
                        return new FixtureB258();
                    },
                    FixtureB259::class => static function () {
                        return new FixtureB259();
                    },
                    FixtureB260::class => static function () {
                        return new FixtureB260();
                    },
                    FixtureB261::class => static function () {
                        return new FixtureB261();
                    },
                    FixtureB262::class => static function () {
                        return new FixtureB262();
                    },
                    FixtureB263::class => static function () {
                        return new FixtureB263();
                    },
                    FixtureB264::class => static function () {
                        return new FixtureB264();
                    },
                    FixtureB265::class => static function () {
                        return new FixtureB265();
                    },
                    FixtureB266::class => static function () {
                        return new FixtureB266();
                    },
                    FixtureB267::class => static function () {
                        return new FixtureB267();
                    },
                    FixtureB268::class => static function () {
                        return new FixtureB268();
                    },
                    FixtureB269::class => static function () {
                        return new FixtureB269();
                    },
                    FixtureB270::class => static function () {
                        return new FixtureB270();
                    },
                    FixtureB271::class => static function () {
                        return new FixtureB271();
                    },
                    FixtureB272::class => static function () {
                        return new FixtureB272();
                    },
                    FixtureB273::class => static function () {
                        return new FixtureB273();
                    },
                    FixtureB274::class => static function () {
                        return new FixtureB274();
                    },
                    FixtureB275::class => static function () {
                        return new FixtureB275();
                    },
                    FixtureB276::class => static function () {
                        return new FixtureB276();
                    },
                    FixtureB277::class => static function () {
                        return new FixtureB277();
                    },
                    FixtureB278::class => static function () {
                        return new FixtureB278();
                    },
                    FixtureB279::class => static function () {
                        return new FixtureB279();
                    },
                    FixtureB280::class => static function () {
                        return new FixtureB280();
                    },
                    FixtureB281::class => static function () {
                        return new FixtureB281();
                    },
                    FixtureB282::class => static function () {
                        return new FixtureB282();
                    },
                    FixtureB283::class => static function () {
                        return new FixtureB283();
                    },
                    FixtureB284::class => static function () {
                        return new FixtureB284();
                    },
                    FixtureB285::class => static function () {
                        return new FixtureB285();
                    },
                    FixtureB286::class => static function () {
                        return new FixtureB286();
                    },
                    FixtureB287::class => static function () {
                        return new FixtureB287();
                    },
                    FixtureB288::class => static function () {
                        return new FixtureB288();
                    },
                    FixtureB289::class => static function () {
                        return new FixtureB289();
                    },
                    FixtureB290::class => static function () {
                        return new FixtureB290();
                    },
                    FixtureB291::class => static function () {
                        return new FixtureB291();
                    },
                    FixtureB292::class => static function () {
                        return new FixtureB292();
                    },
                    FixtureB293::class => static function () {
                        return new FixtureB293();
                    },
                    FixtureB294::class => static function () {
                        return new FixtureB294();
                    },
                    FixtureB295::class => static function () {
                        return new FixtureB295();
                    },
                    FixtureB296::class => static function () {
                        return new FixtureB296();
                    },
                    FixtureB297::class => static function () {
                        return new FixtureB297();
                    },
                    FixtureB298::class => static function () {
                        return new FixtureB298();
                    },
                    FixtureB299::class => static function () {
                        return new FixtureB299();
                    },
                    FixtureB300::class => static function () {
                        return new FixtureB300();
                    },
                    FixtureB301::class => static function () {
                        return new FixtureB301();
                    },
                    FixtureB302::class => static function () {
                        return new FixtureB302();
                    },
                    FixtureB303::class => static function () {
                        return new FixtureB303();
                    },
                    FixtureB304::class => static function () {
                        return new FixtureB304();
                    },
                    FixtureB305::class => static function () {
                        return new FixtureB305();
                    },
                    FixtureB306::class => static function () {
                        return new FixtureB306();
                    },
                    FixtureB307::class => static function () {
                        return new FixtureB307();
                    },
                    FixtureB308::class => static function () {
                        return new FixtureB308();
                    },
                    FixtureB309::class => static function () {
                        return new FixtureB309();
                    },
                    FixtureB310::class => static function () {
                        return new FixtureB310();
                    },
                    FixtureB311::class => static function () {
                        return new FixtureB311();
                    },
                    FixtureB312::class => static function () {
                        return new FixtureB312();
                    },
                    FixtureB313::class => static function () {
                        return new FixtureB313();
                    },
                    FixtureB314::class => static function () {
                        return new FixtureB314();
                    },
                    FixtureB315::class => static function () {
                        return new FixtureB315();
                    },
                    FixtureB316::class => static function () {
                        return new FixtureB316();
                    },
                    FixtureB317::class => static function () {
                        return new FixtureB317();
                    },
                    FixtureB318::class => static function () {
                        return new FixtureB318();
                    },
                    FixtureB319::class => static function () {
                        return new FixtureB319();
                    },
                    FixtureB320::class => static function () {
                        return new FixtureB320();
                    },
                    FixtureB321::class => static function () {
                        return new FixtureB321();
                    },
                    FixtureB322::class => static function () {
                        return new FixtureB322();
                    },
                    FixtureB323::class => static function () {
                        return new FixtureB323();
                    },
                    FixtureB324::class => static function () {
                        return new FixtureB324();
                    },
                    FixtureB325::class => static function () {
                        return new FixtureB325();
                    },
                    FixtureB326::class => static function () {
                        return new FixtureB326();
                    },
                    FixtureB327::class => static function () {
                        return new FixtureB327();
                    },
                    FixtureB328::class => static function () {
                        return new FixtureB328();
                    },
                    FixtureB329::class => static function () {
                        return new FixtureB329();
                    },
                    FixtureB330::class => static function () {
                        return new FixtureB330();
                    },
                    FixtureB331::class => static function () {
                        return new FixtureB331();
                    },
                    FixtureB332::class => static function () {
                        return new FixtureB332();
                    },
                    FixtureB333::class => static function () {
                        return new FixtureB333();
                    },
                    FixtureB334::class => static function () {
                        return new FixtureB334();
                    },
                    FixtureB335::class => static function () {
                        return new FixtureB335();
                    },
                    FixtureB336::class => static function () {
                        return new FixtureB336();
                    },
                    FixtureB337::class => static function () {
                        return new FixtureB337();
                    },
                    FixtureB338::class => static function () {
                        return new FixtureB338();
                    },
                    FixtureB339::class => static function () {
                        return new FixtureB339();
                    },
                    FixtureB340::class => static function () {
                        return new FixtureB340();
                    },
                    FixtureB341::class => static function () {
                        return new FixtureB341();
                    },
                    FixtureB342::class => static function () {
                        return new FixtureB342();
                    },
                    FixtureB343::class => static function () {
                        return new FixtureB343();
                    },
                    FixtureB344::class => static function () {
                        return new FixtureB344();
                    },
                    FixtureB345::class => static function () {
                        return new FixtureB345();
                    },
                    FixtureB346::class => static function () {
                        return new FixtureB346();
                    },
                    FixtureB347::class => static function () {
                        return new FixtureB347();
                    },
                    FixtureB348::class => static function () {
                        return new FixtureB348();
                    },
                    FixtureB349::class => static function () {
                        return new FixtureB349();
                    },
                    FixtureB350::class => static function () {
                        return new FixtureB350();
                    },
                    FixtureB351::class => static function () {
                        return new FixtureB351();
                    },
                    FixtureB352::class => static function () {
                        return new FixtureB352();
                    },
                    FixtureB353::class => static function () {
                        return new FixtureB353();
                    },
                    FixtureB354::class => static function () {
                        return new FixtureB354();
                    },
                    FixtureB355::class => static function () {
                        return new FixtureB355();
                    },
                    FixtureB356::class => static function () {
                        return new FixtureB356();
                    },
                    FixtureB357::class => static function () {
                        return new FixtureB357();
                    },
                    FixtureB358::class => static function () {
                        return new FixtureB358();
                    },
                    FixtureB359::class => static function () {
                        return new FixtureB359();
                    },
                    FixtureB360::class => static function () {
                        return new FixtureB360();
                    },
                    FixtureB361::class => static function () {
                        return new FixtureB361();
                    },
                    FixtureB362::class => static function () {
                        return new FixtureB362();
                    },
                    FixtureB363::class => static function () {
                        return new FixtureB363();
                    },
                    FixtureB364::class => static function () {
                        return new FixtureB364();
                    },
                    FixtureB365::class => static function () {
                        return new FixtureB365();
                    },
                    FixtureB366::class => static function () {
                        return new FixtureB366();
                    },
                    FixtureB367::class => static function () {
                        return new FixtureB367();
                    },
                    FixtureB368::class => static function () {
                        return new FixtureB368();
                    },
                    FixtureB369::class => static function () {
                        return new FixtureB369();
                    },
                    FixtureB370::class => static function () {
                        return new FixtureB370();
                    },
                    FixtureB371::class => static function () {
                        return new FixtureB371();
                    },
                    FixtureB372::class => static function () {
                        return new FixtureB372();
                    },
                    FixtureB373::class => static function () {
                        return new FixtureB373();
                    },
                    FixtureB374::class => static function () {
                        return new FixtureB374();
                    },
                    FixtureB375::class => static function () {
                        return new FixtureB375();
                    },
                    FixtureB376::class => static function () {
                        return new FixtureB376();
                    },
                    FixtureB377::class => static function () {
                        return new FixtureB377();
                    },
                    FixtureB378::class => static function () {
                        return new FixtureB378();
                    },
                    FixtureB379::class => static function () {
                        return new FixtureB379();
                    },
                    FixtureB380::class => static function () {
                        return new FixtureB380();
                    },
                    FixtureB381::class => static function () {
                        return new FixtureB381();
                    },
                    FixtureB382::class => static function () {
                        return new FixtureB382();
                    },
                    FixtureB383::class => static function () {
                        return new FixtureB383();
                    },
                    FixtureB384::class => static function () {
                        return new FixtureB384();
                    },
                    FixtureB385::class => static function () {
                        return new FixtureB385();
                    },
                    FixtureB386::class => static function () {
                        return new FixtureB386();
                    },
                    FixtureB387::class => static function () {
                        return new FixtureB387();
                    },
                    FixtureB388::class => static function () {
                        return new FixtureB388();
                    },
                    FixtureB389::class => static function () {
                        return new FixtureB389();
                    },
                    FixtureB390::class => static function () {
                        return new FixtureB390();
                    },
                    FixtureB391::class => static function () {
                        return new FixtureB391();
                    },
                    FixtureB392::class => static function () {
                        return new FixtureB392();
                    },
                    FixtureB393::class => static function () {
                        return new FixtureB393();
                    },
                    FixtureB394::class => static function () {
                        return new FixtureB394();
                    },
                    FixtureB395::class => static function () {
                        return new FixtureB395();
                    },
                    FixtureB396::class => static function () {
                        return new FixtureB396();
                    },
                    FixtureB397::class => static function () {
                        return new FixtureB397();
                    },
                    FixtureB398::class => static function () {
                        return new FixtureB398();
                    },
                    FixtureB399::class => static function () {
                        return new FixtureB399();
                    },
                    FixtureB400::class => static function () {
                        return new FixtureB400();
                    },
                    FixtureB401::class => static function () {
                        return new FixtureB401();
                    },
                    FixtureB402::class => static function () {
                        return new FixtureB402();
                    },
                    FixtureB403::class => static function () {
                        return new FixtureB403();
                    },
                    FixtureB404::class => static function () {
                        return new FixtureB404();
                    },
                    FixtureB405::class => static function () {
                        return new FixtureB405();
                    },
                    FixtureB406::class => static function () {
                        return new FixtureB406();
                    },
                    FixtureB407::class => static function () {
                        return new FixtureB407();
                    },
                    FixtureB408::class => static function () {
                        return new FixtureB408();
                    },
                    FixtureB409::class => static function () {
                        return new FixtureB409();
                    },
                    FixtureB410::class => static function () {
                        return new FixtureB410();
                    },
                    FixtureB411::class => static function () {
                        return new FixtureB411();
                    },
                    FixtureB412::class => static function () {
                        return new FixtureB412();
                    },
                    FixtureB413::class => static function () {
                        return new FixtureB413();
                    },
                    FixtureB414::class => static function () {
                        return new FixtureB414();
                    },
                    FixtureB415::class => static function () {
                        return new FixtureB415();
                    },
                    FixtureB416::class => static function () {
                        return new FixtureB416();
                    },
                    FixtureB417::class => static function () {
                        return new FixtureB417();
                    },
                    FixtureB418::class => static function () {
                        return new FixtureB418();
                    },
                    FixtureB419::class => static function () {
                        return new FixtureB419();
                    },
                    FixtureB420::class => static function () {
                        return new FixtureB420();
                    },
                    FixtureB421::class => static function () {
                        return new FixtureB421();
                    },
                    FixtureB422::class => static function () {
                        return new FixtureB422();
                    },
                    FixtureB423::class => static function () {
                        return new FixtureB423();
                    },
                    FixtureB424::class => static function () {
                        return new FixtureB424();
                    },
                    FixtureB425::class => static function () {
                        return new FixtureB425();
                    },
                    FixtureB426::class => static function () {
                        return new FixtureB426();
                    },
                    FixtureB427::class => static function () {
                        return new FixtureB427();
                    },
                    FixtureB428::class => static function () {
                        return new FixtureB428();
                    },
                    FixtureB429::class => static function () {
                        return new FixtureB429();
                    },
                    FixtureB430::class => static function () {
                        return new FixtureB430();
                    },
                    FixtureB431::class => static function () {
                        return new FixtureB431();
                    },
                    FixtureB432::class => static function () {
                        return new FixtureB432();
                    },
                    FixtureB433::class => static function () {
                        return new FixtureB433();
                    },
                    FixtureB434::class => static function () {
                        return new FixtureB434();
                    },
                    FixtureB435::class => static function () {
                        return new FixtureB435();
                    },
                    FixtureB436::class => static function () {
                        return new FixtureB436();
                    },
                    FixtureB437::class => static function () {
                        return new FixtureB437();
                    },
                    FixtureB438::class => static function () {
                        return new FixtureB438();
                    },
                    FixtureB439::class => static function () {
                        return new FixtureB439();
                    },
                    FixtureB440::class => static function () {
                        return new FixtureB440();
                    },
                    FixtureB441::class => static function () {
                        return new FixtureB441();
                    },
                    FixtureB442::class => static function () {
                        return new FixtureB442();
                    },
                    FixtureB443::class => static function () {
                        return new FixtureB443();
                    },
                    FixtureB444::class => static function () {
                        return new FixtureB444();
                    },
                    FixtureB445::class => static function () {
                        return new FixtureB445();
                    },
                    FixtureB446::class => static function () {
                        return new FixtureB446();
                    },
                    FixtureB447::class => static function () {
                        return new FixtureB447();
                    },
                    FixtureB448::class => static function () {
                        return new FixtureB448();
                    },
                    FixtureB449::class => static function () {
                        return new FixtureB449();
                    },
                    FixtureB450::class => static function () {
                        return new FixtureB450();
                    },
                    FixtureB451::class => static function () {
                        return new FixtureB451();
                    },
                    FixtureB452::class => static function () {
                        return new FixtureB452();
                    },
                    FixtureB453::class => static function () {
                        return new FixtureB453();
                    },
                    FixtureB454::class => static function () {
                        return new FixtureB454();
                    },
                    FixtureB455::class => static function () {
                        return new FixtureB455();
                    },
                    FixtureB456::class => static function () {
                        return new FixtureB456();
                    },
                    FixtureB457::class => static function () {
                        return new FixtureB457();
                    },
                    FixtureB458::class => static function () {
                        return new FixtureB458();
                    },
                    FixtureB459::class => static function () {
                        return new FixtureB459();
                    },
                    FixtureB460::class => static function () {
                        return new FixtureB460();
                    },
                    FixtureB461::class => static function () {
                        return new FixtureB461();
                    },
                    FixtureB462::class => static function () {
                        return new FixtureB462();
                    },
                    FixtureB463::class => static function () {
                        return new FixtureB463();
                    },
                    FixtureB464::class => static function () {
                        return new FixtureB464();
                    },
                    FixtureB465::class => static function () {
                        return new FixtureB465();
                    },
                    FixtureB466::class => static function () {
                        return new FixtureB466();
                    },
                    FixtureB467::class => static function () {
                        return new FixtureB467();
                    },
                    FixtureB468::class => static function () {
                        return new FixtureB468();
                    },
                    FixtureB469::class => static function () {
                        return new FixtureB469();
                    },
                    FixtureB470::class => static function () {
                        return new FixtureB470();
                    },
                    FixtureB471::class => static function () {
                        return new FixtureB471();
                    },
                    FixtureB472::class => static function () {
                        return new FixtureB472();
                    },
                    FixtureB473::class => static function () {
                        return new FixtureB473();
                    },
                    FixtureB474::class => static function () {
                        return new FixtureB474();
                    },
                    FixtureB475::class => static function () {
                        return new FixtureB475();
                    },
                    FixtureB476::class => static function () {
                        return new FixtureB476();
                    },
                    FixtureB477::class => static function () {
                        return new FixtureB477();
                    },
                    FixtureB478::class => static function () {
                        return new FixtureB478();
                    },
                    FixtureB479::class => static function () {
                        return new FixtureB479();
                    },
                    FixtureB480::class => static function () {
                        return new FixtureB480();
                    },
                    FixtureB481::class => static function () {
                        return new FixtureB481();
                    },
                    FixtureB482::class => static function () {
                        return new FixtureB482();
                    },
                    FixtureB483::class => static function () {
                        return new FixtureB483();
                    },
                    FixtureB484::class => static function () {
                        return new FixtureB484();
                    },
                    FixtureB485::class => static function () {
                        return new FixtureB485();
                    },
                    FixtureB486::class => static function () {
                        return new FixtureB486();
                    },
                    FixtureB487::class => static function () {
                        return new FixtureB487();
                    },
                    FixtureB488::class => static function () {
                        return new FixtureB488();
                    },
                    FixtureB489::class => static function () {
                        return new FixtureB489();
                    },
                    FixtureB490::class => static function () {
                        return new FixtureB490();
                    },
                    FixtureB491::class => static function () {
                        return new FixtureB491();
                    },
                    FixtureB492::class => static function () {
                        return new FixtureB492();
                    },
                    FixtureB493::class => static function () {
                        return new FixtureB493();
                    },
                    FixtureB494::class => static function () {
                        return new FixtureB494();
                    },
                    FixtureB495::class => static function () {
                        return new FixtureB495();
                    },
                    FixtureB496::class => static function () {
                        return new FixtureB496();
                    },
                    FixtureB497::class => static function () {
                        return new FixtureB497();
                    },
                    FixtureB498::class => static function () {
                        return new FixtureB498();
                    },
                    FixtureB499::class => static function () {
                        return new FixtureB499();
                    },
                    FixtureB500::class => static function () {
                        return new FixtureB500();
                    },
                    FixtureB501::class => static function () {
                        return new FixtureB501();
                    },
                    FixtureB502::class => static function () {
                        return new FixtureB502();
                    },
                    FixtureB503::class => static function () {
                        return new FixtureB503();
                    },
                    FixtureB504::class => static function () {
                        return new FixtureB504();
                    },
                    FixtureB505::class => static function () {
                        return new FixtureB505();
                    },
                    FixtureB506::class => static function () {
                        return new FixtureB506();
                    },
                    FixtureB507::class => static function () {
                        return new FixtureB507();
                    },
                    FixtureB508::class => static function () {
                        return new FixtureB508();
                    },
                    FixtureB509::class => static function () {
                        return new FixtureB509();
                    },
                    FixtureB510::class => static function () {
                        return new FixtureB510();
                    },
                    FixtureB511::class => static function () {
                        return new FixtureB511();
                    },
                    FixtureB512::class => static function () {
                        return new FixtureB512();
                    },
                    FixtureB513::class => static function () {
                        return new FixtureB513();
                    },
                    FixtureB514::class => static function () {
                        return new FixtureB514();
                    },
                    FixtureB515::class => static function () {
                        return new FixtureB515();
                    },
                    FixtureB516::class => static function () {
                        return new FixtureB516();
                    },
                    FixtureB517::class => static function () {
                        return new FixtureB517();
                    },
                    FixtureB518::class => static function () {
                        return new FixtureB518();
                    },
                    FixtureB519::class => static function () {
                        return new FixtureB519();
                    },
                    FixtureB520::class => static function () {
                        return new FixtureB520();
                    },
                    FixtureB521::class => static function () {
                        return new FixtureB521();
                    },
                    FixtureB522::class => static function () {
                        return new FixtureB522();
                    },
                    FixtureB523::class => static function () {
                        return new FixtureB523();
                    },
                    FixtureB524::class => static function () {
                        return new FixtureB524();
                    },
                    FixtureB525::class => static function () {
                        return new FixtureB525();
                    },
                    FixtureB526::class => static function () {
                        return new FixtureB526();
                    },
                    FixtureB527::class => static function () {
                        return new FixtureB527();
                    },
                    FixtureB528::class => static function () {
                        return new FixtureB528();
                    },
                    FixtureB529::class => static function () {
                        return new FixtureB529();
                    },
                    FixtureB530::class => static function () {
                        return new FixtureB530();
                    },
                    FixtureB531::class => static function () {
                        return new FixtureB531();
                    },
                    FixtureB532::class => static function () {
                        return new FixtureB532();
                    },
                    FixtureB533::class => static function () {
                        return new FixtureB533();
                    },
                    FixtureB534::class => static function () {
                        return new FixtureB534();
                    },
                    FixtureB535::class => static function () {
                        return new FixtureB535();
                    },
                    FixtureB536::class => static function () {
                        return new FixtureB536();
                    },
                    FixtureB537::class => static function () {
                        return new FixtureB537();
                    },
                    FixtureB538::class => static function () {
                        return new FixtureB538();
                    },
                    FixtureB539::class => static function () {
                        return new FixtureB539();
                    },
                    FixtureB540::class => static function () {
                        return new FixtureB540();
                    },
                    FixtureB541::class => static function () {
                        return new FixtureB541();
                    },
                    FixtureB542::class => static function () {
                        return new FixtureB542();
                    },
                    FixtureB543::class => static function () {
                        return new FixtureB543();
                    },
                    FixtureB544::class => static function () {
                        return new FixtureB544();
                    },
                    FixtureB545::class => static function () {
                        return new FixtureB545();
                    },
                    FixtureB546::class => static function () {
                        return new FixtureB546();
                    },
                    FixtureB547::class => static function () {
                        return new FixtureB547();
                    },
                    FixtureB548::class => static function () {
                        return new FixtureB548();
                    },
                    FixtureB549::class => static function () {
                        return new FixtureB549();
                    },
                    FixtureB550::class => static function () {
                        return new FixtureB550();
                    },
                    FixtureB551::class => static function () {
                        return new FixtureB551();
                    },
                    FixtureB552::class => static function () {
                        return new FixtureB552();
                    },
                    FixtureB553::class => static function () {
                        return new FixtureB553();
                    },
                    FixtureB554::class => static function () {
                        return new FixtureB554();
                    },
                    FixtureB555::class => static function () {
                        return new FixtureB555();
                    },
                    FixtureB556::class => static function () {
                        return new FixtureB556();
                    },
                    FixtureB557::class => static function () {
                        return new FixtureB557();
                    },
                    FixtureB558::class => static function () {
                        return new FixtureB558();
                    },
                    FixtureB559::class => static function () {
                        return new FixtureB559();
                    },
                    FixtureB560::class => static function () {
                        return new FixtureB560();
                    },
                    FixtureB561::class => static function () {
                        return new FixtureB561();
                    },
                    FixtureB562::class => static function () {
                        return new FixtureB562();
                    },
                    FixtureB563::class => static function () {
                        return new FixtureB563();
                    },
                    FixtureB564::class => static function () {
                        return new FixtureB564();
                    },
                    FixtureB565::class => static function () {
                        return new FixtureB565();
                    },
                    FixtureB566::class => static function () {
                        return new FixtureB566();
                    },
                    FixtureB567::class => static function () {
                        return new FixtureB567();
                    },
                    FixtureB568::class => static function () {
                        return new FixtureB568();
                    },
                    FixtureB569::class => static function () {
                        return new FixtureB569();
                    },
                    FixtureB570::class => static function () {
                        return new FixtureB570();
                    },
                    FixtureB571::class => static function () {
                        return new FixtureB571();
                    },
                    FixtureB572::class => static function () {
                        return new FixtureB572();
                    },
                    FixtureB573::class => static function () {
                        return new FixtureB573();
                    },
                    FixtureB574::class => static function () {
                        return new FixtureB574();
                    },
                    FixtureB575::class => static function () {
                        return new FixtureB575();
                    },
                    FixtureB576::class => static function () {
                        return new FixtureB576();
                    },
                    FixtureB577::class => static function () {
                        return new FixtureB577();
                    },
                    FixtureB578::class => static function () {
                        return new FixtureB578();
                    },
                    FixtureB579::class => static function () {
                        return new FixtureB579();
                    },
                    FixtureB580::class => static function () {
                        return new FixtureB580();
                    },
                    FixtureB581::class => static function () {
                        return new FixtureB581();
                    },
                    FixtureB582::class => static function () {
                        return new FixtureB582();
                    },
                    FixtureB583::class => static function () {
                        return new FixtureB583();
                    },
                    FixtureB584::class => static function () {
                        return new FixtureB584();
                    },
                    FixtureB585::class => static function () {
                        return new FixtureB585();
                    },
                    FixtureB586::class => static function () {
                        return new FixtureB586();
                    },
                    FixtureB587::class => static function () {
                        return new FixtureB587();
                    },
                    FixtureB588::class => static function () {
                        return new FixtureB588();
                    },
                    FixtureB589::class => static function () {
                        return new FixtureB589();
                    },
                    FixtureB590::class => static function () {
                        return new FixtureB590();
                    },
                    FixtureB591::class => static function () {
                        return new FixtureB591();
                    },
                    FixtureB592::class => static function () {
                        return new FixtureB592();
                    },
                    FixtureB593::class => static function () {
                        return new FixtureB593();
                    },
                    FixtureB594::class => static function () {
                        return new FixtureB594();
                    },
                    FixtureB595::class => static function () {
                        return new FixtureB595();
                    },
                    FixtureB596::class => static function () {
                        return new FixtureB596();
                    },
                    FixtureB597::class => static function () {
                        return new FixtureB597();
                    },
                    FixtureB598::class => static function () {
                        return new FixtureB598();
                    },
                    FixtureB599::class => static function () {
                        return new FixtureB599();
                    },
                    FixtureB600::class => static function () {
                        return new FixtureB600();
                    },
                    FixtureB601::class => static function () {
                        return new FixtureB601();
                    },
                    FixtureB602::class => static function () {
                        return new FixtureB602();
                    },
                    FixtureB603::class => static function () {
                        return new FixtureB603();
                    },
                    FixtureB604::class => static function () {
                        return new FixtureB604();
                    },
                    FixtureB605::class => static function () {
                        return new FixtureB605();
                    },
                    FixtureB606::class => static function () {
                        return new FixtureB606();
                    },
                    FixtureB607::class => static function () {
                        return new FixtureB607();
                    },
                    FixtureB608::class => static function () {
                        return new FixtureB608();
                    },
                    FixtureB609::class => static function () {
                        return new FixtureB609();
                    },
                    FixtureB610::class => static function () {
                        return new FixtureB610();
                    },
                    FixtureB611::class => static function () {
                        return new FixtureB611();
                    },
                    FixtureB612::class => static function () {
                        return new FixtureB612();
                    },
                    FixtureB613::class => static function () {
                        return new FixtureB613();
                    },
                    FixtureB614::class => static function () {
                        return new FixtureB614();
                    },
                    FixtureB615::class => static function () {
                        return new FixtureB615();
                    },
                    FixtureB616::class => static function () {
                        return new FixtureB616();
                    },
                    FixtureB617::class => static function () {
                        return new FixtureB617();
                    },
                    FixtureB618::class => static function () {
                        return new FixtureB618();
                    },
                    FixtureB619::class => static function () {
                        return new FixtureB619();
                    },
                    FixtureB620::class => static function () {
                        return new FixtureB620();
                    },
                    FixtureB621::class => static function () {
                        return new FixtureB621();
                    },
                    FixtureB622::class => static function () {
                        return new FixtureB622();
                    },
                    FixtureB623::class => static function () {
                        return new FixtureB623();
                    },
                    FixtureB624::class => static function () {
                        return new FixtureB624();
                    },
                    FixtureB625::class => static function () {
                        return new FixtureB625();
                    },
                    FixtureB626::class => static function () {
                        return new FixtureB626();
                    },
                    FixtureB627::class => static function () {
                        return new FixtureB627();
                    },
                    FixtureB628::class => static function () {
                        return new FixtureB628();
                    },
                    FixtureB629::class => static function () {
                        return new FixtureB629();
                    },
                    FixtureB630::class => static function () {
                        return new FixtureB630();
                    },
                    FixtureB631::class => static function () {
                        return new FixtureB631();
                    },
                    FixtureB632::class => static function () {
                        return new FixtureB632();
                    },
                    FixtureB633::class => static function () {
                        return new FixtureB633();
                    },
                    FixtureB634::class => static function () {
                        return new FixtureB634();
                    },
                    FixtureB635::class => static function () {
                        return new FixtureB635();
                    },
                    FixtureB636::class => static function () {
                        return new FixtureB636();
                    },
                    FixtureB637::class => static function () {
                        return new FixtureB637();
                    },
                    FixtureB638::class => static function () {
                        return new FixtureB638();
                    },
                    FixtureB639::class => static function () {
                        return new FixtureB639();
                    },
                    FixtureB640::class => static function () {
                        return new FixtureB640();
                    },
                    FixtureB641::class => static function () {
                        return new FixtureB641();
                    },
                    FixtureB642::class => static function () {
                        return new FixtureB642();
                    },
                    FixtureB643::class => static function () {
                        return new FixtureB643();
                    },
                    FixtureB644::class => static function () {
                        return new FixtureB644();
                    },
                    FixtureB645::class => static function () {
                        return new FixtureB645();
                    },
                    FixtureB646::class => static function () {
                        return new FixtureB646();
                    },
                    FixtureB647::class => static function () {
                        return new FixtureB647();
                    },
                    FixtureB648::class => static function () {
                        return new FixtureB648();
                    },
                    FixtureB649::class => static function () {
                        return new FixtureB649();
                    },
                    FixtureB650::class => static function () {
                        return new FixtureB650();
                    },
                    FixtureB651::class => static function () {
                        return new FixtureB651();
                    },
                    FixtureB652::class => static function () {
                        return new FixtureB652();
                    },
                    FixtureB653::class => static function () {
                        return new FixtureB653();
                    },
                    FixtureB654::class => static function () {
                        return new FixtureB654();
                    },
                    FixtureB655::class => static function () {
                        return new FixtureB655();
                    },
                    FixtureB656::class => static function () {
                        return new FixtureB656();
                    },
                    FixtureB657::class => static function () {
                        return new FixtureB657();
                    },
                    FixtureB658::class => static function () {
                        return new FixtureB658();
                    },
                    FixtureB659::class => static function () {
                        return new FixtureB659();
                    },
                    FixtureB660::class => static function () {
                        return new FixtureB660();
                    },
                    FixtureB661::class => static function () {
                        return new FixtureB661();
                    },
                    FixtureB662::class => static function () {
                        return new FixtureB662();
                    },
                    FixtureB663::class => static function () {
                        return new FixtureB663();
                    },
                    FixtureB664::class => static function () {
                        return new FixtureB664();
                    },
                    FixtureB665::class => static function () {
                        return new FixtureB665();
                    },
                    FixtureB666::class => static function () {
                        return new FixtureB666();
                    },
                    FixtureB667::class => static function () {
                        return new FixtureB667();
                    },
                    FixtureB668::class => static function () {
                        return new FixtureB668();
                    },
                    FixtureB669::class => static function () {
                        return new FixtureB669();
                    },
                    FixtureB670::class => static function () {
                        return new FixtureB670();
                    },
                    FixtureB671::class => static function () {
                        return new FixtureB671();
                    },
                    FixtureB672::class => static function () {
                        return new FixtureB672();
                    },
                    FixtureB673::class => static function () {
                        return new FixtureB673();
                    },
                    FixtureB674::class => static function () {
                        return new FixtureB674();
                    },
                    FixtureB675::class => static function () {
                        return new FixtureB675();
                    },
                    FixtureB676::class => static function () {
                        return new FixtureB676();
                    },
                    FixtureB677::class => static function () {
                        return new FixtureB677();
                    },
                    FixtureB678::class => static function () {
                        return new FixtureB678();
                    },
                    FixtureB679::class => static function () {
                        return new FixtureB679();
                    },
                    FixtureB680::class => static function () {
                        return new FixtureB680();
                    },
                    FixtureB681::class => static function () {
                        return new FixtureB681();
                    },
                    FixtureB682::class => static function () {
                        return new FixtureB682();
                    },
                    FixtureB683::class => static function () {
                        return new FixtureB683();
                    },
                    FixtureB684::class => static function () {
                        return new FixtureB684();
                    },
                    FixtureB685::class => static function () {
                        return new FixtureB685();
                    },
                    FixtureB686::class => static function () {
                        return new FixtureB686();
                    },
                    FixtureB687::class => static function () {
                        return new FixtureB687();
                    },
                    FixtureB688::class => static function () {
                        return new FixtureB688();
                    },
                    FixtureB689::class => static function () {
                        return new FixtureB689();
                    },
                    FixtureB690::class => static function () {
                        return new FixtureB690();
                    },
                    FixtureB691::class => static function () {
                        return new FixtureB691();
                    },
                    FixtureB692::class => static function () {
                        return new FixtureB692();
                    },
                    FixtureB693::class => static function () {
                        return new FixtureB693();
                    },
                    FixtureB694::class => static function () {
                        return new FixtureB694();
                    },
                    FixtureB695::class => static function () {
                        return new FixtureB695();
                    },
                    FixtureB696::class => static function () {
                        return new FixtureB696();
                    },
                    FixtureB697::class => static function () {
                        return new FixtureB697();
                    },
                    FixtureB698::class => static function () {
                        return new FixtureB698();
                    },
                    FixtureB699::class => static function () {
                        return new FixtureB699();
                    },
                    FixtureB700::class => static function () {
                        return new FixtureB700();
                    },
                    FixtureB701::class => static function () {
                        return new FixtureB701();
                    },
                    FixtureB702::class => static function () {
                        return new FixtureB702();
                    },
                    FixtureB703::class => static function () {
                        return new FixtureB703();
                    },
                    FixtureB704::class => static function () {
                        return new FixtureB704();
                    },
                    FixtureB705::class => static function () {
                        return new FixtureB705();
                    },
                    FixtureB706::class => static function () {
                        return new FixtureB706();
                    },
                    FixtureB707::class => static function () {
                        return new FixtureB707();
                    },
                    FixtureB708::class => static function () {
                        return new FixtureB708();
                    },
                    FixtureB709::class => static function () {
                        return new FixtureB709();
                    },
                    FixtureB710::class => static function () {
                        return new FixtureB710();
                    },
                    FixtureB711::class => static function () {
                        return new FixtureB711();
                    },
                    FixtureB712::class => static function () {
                        return new FixtureB712();
                    },
                    FixtureB713::class => static function () {
                        return new FixtureB713();
                    },
                    FixtureB714::class => static function () {
                        return new FixtureB714();
                    },
                    FixtureB715::class => static function () {
                        return new FixtureB715();
                    },
                    FixtureB716::class => static function () {
                        return new FixtureB716();
                    },
                    FixtureB717::class => static function () {
                        return new FixtureB717();
                    },
                    FixtureB718::class => static function () {
                        return new FixtureB718();
                    },
                    FixtureB719::class => static function () {
                        return new FixtureB719();
                    },
                    FixtureB720::class => static function () {
                        return new FixtureB720();
                    },
                    FixtureB721::class => static function () {
                        return new FixtureB721();
                    },
                    FixtureB722::class => static function () {
                        return new FixtureB722();
                    },
                    FixtureB723::class => static function () {
                        return new FixtureB723();
                    },
                    FixtureB724::class => static function () {
                        return new FixtureB724();
                    },
                    FixtureB725::class => static function () {
                        return new FixtureB725();
                    },
                    FixtureB726::class => static function () {
                        return new FixtureB726();
                    },
                    FixtureB727::class => static function () {
                        return new FixtureB727();
                    },
                    FixtureB728::class => static function () {
                        return new FixtureB728();
                    },
                    FixtureB729::class => static function () {
                        return new FixtureB729();
                    },
                    FixtureB730::class => static function () {
                        return new FixtureB730();
                    },
                    FixtureB731::class => static function () {
                        return new FixtureB731();
                    },
                    FixtureB732::class => static function () {
                        return new FixtureB732();
                    },
                    FixtureB733::class => static function () {
                        return new FixtureB733();
                    },
                    FixtureB734::class => static function () {
                        return new FixtureB734();
                    },
                    FixtureB735::class => static function () {
                        return new FixtureB735();
                    },
                    FixtureB736::class => static function () {
                        return new FixtureB736();
                    },
                    FixtureB737::class => static function () {
                        return new FixtureB737();
                    },
                    FixtureB738::class => static function () {
                        return new FixtureB738();
                    },
                    FixtureB739::class => static function () {
                        return new FixtureB739();
                    },
                    FixtureB740::class => static function () {
                        return new FixtureB740();
                    },
                    FixtureB741::class => static function () {
                        return new FixtureB741();
                    },
                    FixtureB742::class => static function () {
                        return new FixtureB742();
                    },
                    FixtureB743::class => static function () {
                        return new FixtureB743();
                    },
                    FixtureB744::class => static function () {
                        return new FixtureB744();
                    },
                    FixtureB745::class => static function () {
                        return new FixtureB745();
                    },
                    FixtureB746::class => static function () {
                        return new FixtureB746();
                    },
                    FixtureB747::class => static function () {
                        return new FixtureB747();
                    },
                    FixtureB748::class => static function () {
                        return new FixtureB748();
                    },
                    FixtureB749::class => static function () {
                        return new FixtureB749();
                    },
                    FixtureB750::class => static function () {
                        return new FixtureB750();
                    },
                    FixtureB751::class => static function () {
                        return new FixtureB751();
                    },
                    FixtureB752::class => static function () {
                        return new FixtureB752();
                    },
                    FixtureB753::class => static function () {
                        return new FixtureB753();
                    },
                    FixtureB754::class => static function () {
                        return new FixtureB754();
                    },
                    FixtureB755::class => static function () {
                        return new FixtureB755();
                    },
                    FixtureB756::class => static function () {
                        return new FixtureB756();
                    },
                    FixtureB757::class => static function () {
                        return new FixtureB757();
                    },
                    FixtureB758::class => static function () {
                        return new FixtureB758();
                    },
                    FixtureB759::class => static function () {
                        return new FixtureB759();
                    },
                    FixtureB760::class => static function () {
                        return new FixtureB760();
                    },
                    FixtureB761::class => static function () {
                        return new FixtureB761();
                    },
                    FixtureB762::class => static function () {
                        return new FixtureB762();
                    },
                    FixtureB763::class => static function () {
                        return new FixtureB763();
                    },
                    FixtureB764::class => static function () {
                        return new FixtureB764();
                    },
                    FixtureB765::class => static function () {
                        return new FixtureB765();
                    },
                    FixtureB766::class => static function () {
                        return new FixtureB766();
                    },
                    FixtureB767::class => static function () {
                        return new FixtureB767();
                    },
                    FixtureB768::class => static function () {
                        return new FixtureB768();
                    },
                    FixtureB769::class => static function () {
                        return new FixtureB769();
                    },
                    FixtureB770::class => static function () {
                        return new FixtureB770();
                    },
                    FixtureB771::class => static function () {
                        return new FixtureB771();
                    },
                    FixtureB772::class => static function () {
                        return new FixtureB772();
                    },
                    FixtureB773::class => static function () {
                        return new FixtureB773();
                    },
                    FixtureB774::class => static function () {
                        return new FixtureB774();
                    },
                    FixtureB775::class => static function () {
                        return new FixtureB775();
                    },
                    FixtureB776::class => static function () {
                        return new FixtureB776();
                    },
                    FixtureB777::class => static function () {
                        return new FixtureB777();
                    },
                    FixtureB778::class => static function () {
                        return new FixtureB778();
                    },
                    FixtureB779::class => static function () {
                        return new FixtureB779();
                    },
                    FixtureB780::class => static function () {
                        return new FixtureB780();
                    },
                    FixtureB781::class => static function () {
                        return new FixtureB781();
                    },
                    FixtureB782::class => static function () {
                        return new FixtureB782();
                    },
                    FixtureB783::class => static function () {
                        return new FixtureB783();
                    },
                    FixtureB784::class => static function () {
                        return new FixtureB784();
                    },
                    FixtureB785::class => static function () {
                        return new FixtureB785();
                    },
                    FixtureB786::class => static function () {
                        return new FixtureB786();
                    },
                    FixtureB787::class => static function () {
                        return new FixtureB787();
                    },
                    FixtureB788::class => static function () {
                        return new FixtureB788();
                    },
                    FixtureB789::class => static function () {
                        return new FixtureB789();
                    },
                    FixtureB790::class => static function () {
                        return new FixtureB790();
                    },
                    FixtureB791::class => static function () {
                        return new FixtureB791();
                    },
                    FixtureB792::class => static function () {
                        return new FixtureB792();
                    },
                    FixtureB793::class => static function () {
                        return new FixtureB793();
                    },
                    FixtureB794::class => static function () {
                        return new FixtureB794();
                    },
                    FixtureB795::class => static function () {
                        return new FixtureB795();
                    },
                    FixtureB796::class => static function () {
                        return new FixtureB796();
                    },
                    FixtureB797::class => static function () {
                        return new FixtureB797();
                    },
                    FixtureB798::class => static function () {
                        return new FixtureB798();
                    },
                    FixtureB799::class => static function () {
                        return new FixtureB799();
                    },
                    FixtureB800::class => static function () {
                        return new FixtureB800();
                    },
                    FixtureB801::class => static function () {
                        return new FixtureB801();
                    },
                    FixtureB802::class => static function () {
                        return new FixtureB802();
                    },
                    FixtureB803::class => static function () {
                        return new FixtureB803();
                    },
                    FixtureB804::class => static function () {
                        return new FixtureB804();
                    },
                    FixtureB805::class => static function () {
                        return new FixtureB805();
                    },
                    FixtureB806::class => static function () {
                        return new FixtureB806();
                    },
                    FixtureB807::class => static function () {
                        return new FixtureB807();
                    },
                    FixtureB808::class => static function () {
                        return new FixtureB808();
                    },
                    FixtureB809::class => static function () {
                        return new FixtureB809();
                    },
                    FixtureB810::class => static function () {
                        return new FixtureB810();
                    },
                    FixtureB811::class => static function () {
                        return new FixtureB811();
                    },
                    FixtureB812::class => static function () {
                        return new FixtureB812();
                    },
                    FixtureB813::class => static function () {
                        return new FixtureB813();
                    },
                    FixtureB814::class => static function () {
                        return new FixtureB814();
                    },
                    FixtureB815::class => static function () {
                        return new FixtureB815();
                    },
                    FixtureB816::class => static function () {
                        return new FixtureB816();
                    },
                    FixtureB817::class => static function () {
                        return new FixtureB817();
                    },
                    FixtureB818::class => static function () {
                        return new FixtureB818();
                    },
                    FixtureB819::class => static function () {
                        return new FixtureB819();
                    },
                    FixtureB820::class => static function () {
                        return new FixtureB820();
                    },
                    FixtureB821::class => static function () {
                        return new FixtureB821();
                    },
                    FixtureB822::class => static function () {
                        return new FixtureB822();
                    },
                    FixtureB823::class => static function () {
                        return new FixtureB823();
                    },
                    FixtureB824::class => static function () {
                        return new FixtureB824();
                    },
                    FixtureB825::class => static function () {
                        return new FixtureB825();
                    },
                    FixtureB826::class => static function () {
                        return new FixtureB826();
                    },
                    FixtureB827::class => static function () {
                        return new FixtureB827();
                    },
                    FixtureB828::class => static function () {
                        return new FixtureB828();
                    },
                    FixtureB829::class => static function () {
                        return new FixtureB829();
                    },
                    FixtureB830::class => static function () {
                        return new FixtureB830();
                    },
                    FixtureB831::class => static function () {
                        return new FixtureB831();
                    },
                    FixtureB832::class => static function () {
                        return new FixtureB832();
                    },
                    FixtureB833::class => static function () {
                        return new FixtureB833();
                    },
                    FixtureB834::class => static function () {
                        return new FixtureB834();
                    },
                    FixtureB835::class => static function () {
                        return new FixtureB835();
                    },
                    FixtureB836::class => static function () {
                        return new FixtureB836();
                    },
                    FixtureB837::class => static function () {
                        return new FixtureB837();
                    },
                    FixtureB838::class => static function () {
                        return new FixtureB838();
                    },
                    FixtureB839::class => static function () {
                        return new FixtureB839();
                    },
                    FixtureB840::class => static function () {
                        return new FixtureB840();
                    },
                    FixtureB841::class => static function () {
                        return new FixtureB841();
                    },
                    FixtureB842::class => static function () {
                        return new FixtureB842();
                    },
                    FixtureB843::class => static function () {
                        return new FixtureB843();
                    },
                    FixtureB844::class => static function () {
                        return new FixtureB844();
                    },
                    FixtureB845::class => static function () {
                        return new FixtureB845();
                    },
                    FixtureB846::class => static function () {
                        return new FixtureB846();
                    },
                    FixtureB847::class => static function () {
                        return new FixtureB847();
                    },
                    FixtureB848::class => static function () {
                        return new FixtureB848();
                    },
                    FixtureB849::class => static function () {
                        return new FixtureB849();
                    },
                    FixtureB850::class => static function () {
                        return new FixtureB850();
                    },
                    FixtureB851::class => static function () {
                        return new FixtureB851();
                    },
                    FixtureB852::class => static function () {
                        return new FixtureB852();
                    },
                    FixtureB853::class => static function () {
                        return new FixtureB853();
                    },
                    FixtureB854::class => static function () {
                        return new FixtureB854();
                    },
                    FixtureB855::class => static function () {
                        return new FixtureB855();
                    },
                    FixtureB856::class => static function () {
                        return new FixtureB856();
                    },
                    FixtureB857::class => static function () {
                        return new FixtureB857();
                    },
                    FixtureB858::class => static function () {
                        return new FixtureB858();
                    },
                    FixtureB859::class => static function () {
                        return new FixtureB859();
                    },
                    FixtureB860::class => static function () {
                        return new FixtureB860();
                    },
                    FixtureB861::class => static function () {
                        return new FixtureB861();
                    },
                    FixtureB862::class => static function () {
                        return new FixtureB862();
                    },
                    FixtureB863::class => static function () {
                        return new FixtureB863();
                    },
                    FixtureB864::class => static function () {
                        return new FixtureB864();
                    },
                    FixtureB865::class => static function () {
                        return new FixtureB865();
                    },
                    FixtureB866::class => static function () {
                        return new FixtureB866();
                    },
                    FixtureB867::class => static function () {
                        return new FixtureB867();
                    },
                    FixtureB868::class => static function () {
                        return new FixtureB868();
                    },
                    FixtureB869::class => static function () {
                        return new FixtureB869();
                    },
                    FixtureB870::class => static function () {
                        return new FixtureB870();
                    },
                    FixtureB871::class => static function () {
                        return new FixtureB871();
                    },
                    FixtureB872::class => static function () {
                        return new FixtureB872();
                    },
                    FixtureB873::class => static function () {
                        return new FixtureB873();
                    },
                    FixtureB874::class => static function () {
                        return new FixtureB874();
                    },
                    FixtureB875::class => static function () {
                        return new FixtureB875();
                    },
                    FixtureB876::class => static function () {
                        return new FixtureB876();
                    },
                    FixtureB877::class => static function () {
                        return new FixtureB877();
                    },
                    FixtureB878::class => static function () {
                        return new FixtureB878();
                    },
                    FixtureB879::class => static function () {
                        return new FixtureB879();
                    },
                    FixtureB880::class => static function () {
                        return new FixtureB880();
                    },
                    FixtureB881::class => static function () {
                        return new FixtureB881();
                    },
                    FixtureB882::class => static function () {
                        return new FixtureB882();
                    },
                    FixtureB883::class => static function () {
                        return new FixtureB883();
                    },
                    FixtureB884::class => static function () {
                        return new FixtureB884();
                    },
                    FixtureB885::class => static function () {
                        return new FixtureB885();
                    },
                    FixtureB886::class => static function () {
                        return new FixtureB886();
                    },
                    FixtureB887::class => static function () {
                        return new FixtureB887();
                    },
                    FixtureB888::class => static function () {
                        return new FixtureB888();
                    },
                    FixtureB889::class => static function () {
                        return new FixtureB889();
                    },
                    FixtureB890::class => static function () {
                        return new FixtureB890();
                    },
                    FixtureB891::class => static function () {
                        return new FixtureB891();
                    },
                    FixtureB892::class => static function () {
                        return new FixtureB892();
                    },
                    FixtureB893::class => static function () {
                        return new FixtureB893();
                    },
                    FixtureB894::class => static function () {
                        return new FixtureB894();
                    },
                    FixtureB895::class => static function () {
                        return new FixtureB895();
                    },
                    FixtureB896::class => static function () {
                        return new FixtureB896();
                    },
                    FixtureB897::class => static function () {
                        return new FixtureB897();
                    },
                    FixtureB898::class => static function () {
                        return new FixtureB898();
                    },
                    FixtureB899::class => static function () {
                        return new FixtureB899();
                    },
                    FixtureB900::class => static function () {
                        return new FixtureB900();
                    },
                    FixtureB901::class => static function () {
                        return new FixtureB901();
                    },
                    FixtureB902::class => static function () {
                        return new FixtureB902();
                    },
                    FixtureB903::class => static function () {
                        return new FixtureB903();
                    },
                    FixtureB904::class => static function () {
                        return new FixtureB904();
                    },
                    FixtureB905::class => static function () {
                        return new FixtureB905();
                    },
                    FixtureB906::class => static function () {
                        return new FixtureB906();
                    },
                    FixtureB907::class => static function () {
                        return new FixtureB907();
                    },
                    FixtureB908::class => static function () {
                        return new FixtureB908();
                    },
                    FixtureB909::class => static function () {
                        return new FixtureB909();
                    },
                    FixtureB910::class => static function () {
                        return new FixtureB910();
                    },
                    FixtureB911::class => static function () {
                        return new FixtureB911();
                    },
                    FixtureB912::class => static function () {
                        return new FixtureB912();
                    },
                    FixtureB913::class => static function () {
                        return new FixtureB913();
                    },
                    FixtureB914::class => static function () {
                        return new FixtureB914();
                    },
                    FixtureB915::class => static function () {
                        return new FixtureB915();
                    },
                    FixtureB916::class => static function () {
                        return new FixtureB916();
                    },
                    FixtureB917::class => static function () {
                        return new FixtureB917();
                    },
                    FixtureB918::class => static function () {
                        return new FixtureB918();
                    },
                    FixtureB919::class => static function () {
                        return new FixtureB919();
                    },
                    FixtureB920::class => static function () {
                        return new FixtureB920();
                    },
                    FixtureB921::class => static function () {
                        return new FixtureB921();
                    },
                    FixtureB922::class => static function () {
                        return new FixtureB922();
                    },
                    FixtureB923::class => static function () {
                        return new FixtureB923();
                    },
                    FixtureB924::class => static function () {
                        return new FixtureB924();
                    },
                    FixtureB925::class => static function () {
                        return new FixtureB925();
                    },
                    FixtureB926::class => static function () {
                        return new FixtureB926();
                    },
                    FixtureB927::class => static function () {
                        return new FixtureB927();
                    },
                    FixtureB928::class => static function () {
                        return new FixtureB928();
                    },
                    FixtureB929::class => static function () {
                        return new FixtureB929();
                    },
                    FixtureB930::class => static function () {
                        return new FixtureB930();
                    },
                    FixtureB931::class => static function () {
                        return new FixtureB931();
                    },
                    FixtureB932::class => static function () {
                        return new FixtureB932();
                    },
                    FixtureB933::class => static function () {
                        return new FixtureB933();
                    },
                    FixtureB934::class => static function () {
                        return new FixtureB934();
                    },
                    FixtureB935::class => static function () {
                        return new FixtureB935();
                    },
                    FixtureB936::class => static function () {
                        return new FixtureB936();
                    },
                    FixtureB937::class => static function () {
                        return new FixtureB937();
                    },
                    FixtureB938::class => static function () {
                        return new FixtureB938();
                    },
                    FixtureB939::class => static function () {
                        return new FixtureB939();
                    },
                    FixtureB940::class => static function () {
                        return new FixtureB940();
                    },
                    FixtureB941::class => static function () {
                        return new FixtureB941();
                    },
                    FixtureB942::class => static function () {
                        return new FixtureB942();
                    },
                    FixtureB943::class => static function () {
                        return new FixtureB943();
                    },
                    FixtureB944::class => static function () {
                        return new FixtureB944();
                    },
                    FixtureB945::class => static function () {
                        return new FixtureB945();
                    },
                    FixtureB946::class => static function () {
                        return new FixtureB946();
                    },
                    FixtureB947::class => static function () {
                        return new FixtureB947();
                    },
                    FixtureB948::class => static function () {
                        return new FixtureB948();
                    },
                    FixtureB949::class => static function () {
                        return new FixtureB949();
                    },
                    FixtureB950::class => static function () {
                        return new FixtureB950();
                    },
                    FixtureB951::class => static function () {
                        return new FixtureB951();
                    },
                    FixtureB952::class => static function () {
                        return new FixtureB952();
                    },
                    FixtureB953::class => static function () {
                        return new FixtureB953();
                    },
                    FixtureB954::class => static function () {
                        return new FixtureB954();
                    },
                    FixtureB955::class => static function () {
                        return new FixtureB955();
                    },
                    FixtureB956::class => static function () {
                        return new FixtureB956();
                    },
                    FixtureB957::class => static function () {
                        return new FixtureB957();
                    },
                    FixtureB958::class => static function () {
                        return new FixtureB958();
                    },
                    FixtureB959::class => static function () {
                        return new FixtureB959();
                    },
                    FixtureB960::class => static function () {
                        return new FixtureB960();
                    },
                    FixtureB961::class => static function () {
                        return new FixtureB961();
                    },
                    FixtureB962::class => static function () {
                        return new FixtureB962();
                    },
                    FixtureB963::class => static function () {
                        return new FixtureB963();
                    },
                    FixtureB964::class => static function () {
                        return new FixtureB964();
                    },
                    FixtureB965::class => static function () {
                        return new FixtureB965();
                    },
                    FixtureB966::class => static function () {
                        return new FixtureB966();
                    },
                    FixtureB967::class => static function () {
                        return new FixtureB967();
                    },
                    FixtureB968::class => static function () {
                        return new FixtureB968();
                    },
                    FixtureB969::class => static function () {
                        return new FixtureB969();
                    },
                    FixtureB970::class => static function () {
                        return new FixtureB970();
                    },
                    FixtureB971::class => static function () {
                        return new FixtureB971();
                    },
                    FixtureB972::class => static function () {
                        return new FixtureB972();
                    },
                    FixtureB973::class => static function () {
                        return new FixtureB973();
                    },
                    FixtureB974::class => static function () {
                        return new FixtureB974();
                    },
                    FixtureB975::class => static function () {
                        return new FixtureB975();
                    },
                    FixtureB976::class => static function () {
                        return new FixtureB976();
                    },
                    FixtureB977::class => static function () {
                        return new FixtureB977();
                    },
                    FixtureB978::class => static function () {
                        return new FixtureB978();
                    },
                    FixtureB979::class => static function () {
                        return new FixtureB979();
                    },
                    FixtureB980::class => static function () {
                        return new FixtureB980();
                    },
                    FixtureB981::class => static function () {
                        return new FixtureB981();
                    },
                    FixtureB982::class => static function () {
                        return new FixtureB982();
                    },
                    FixtureB983::class => static function () {
                        return new FixtureB983();
                    },
                    FixtureB984::class => static function () {
                        return new FixtureB984();
                    },
                    FixtureB985::class => static function () {
                        return new FixtureB985();
                    },
                    FixtureB986::class => static function () {
                        return new FixtureB986();
                    },
                    FixtureB987::class => static function () {
                        return new FixtureB987();
                    },
                    FixtureB988::class => static function () {
                        return new FixtureB988();
                    },
                    FixtureB989::class => static function () {
                        return new FixtureB989();
                    },
                    FixtureB990::class => static function () {
                        return new FixtureB990();
                    },
                    FixtureB991::class => static function () {
                        return new FixtureB991();
                    },
                    FixtureB992::class => static function () {
                        return new FixtureB992();
                    },
                    FixtureB993::class => static function () {
                        return new FixtureB993();
                    },
                    FixtureB994::class => static function () {
                        return new FixtureB994();
                    },
                    FixtureB995::class => static function () {
                        return new FixtureB995();
                    },
                    FixtureB996::class => static function () {
                        return new FixtureB996();
                    },
                    FixtureB997::class => static function () {
                        return new FixtureB997();
                    },
                    FixtureB998::class => static function () {
                        return new FixtureB998();
                    },
                    FixtureB999::class => static function () {
                        return new FixtureB999();
                    },
                    FixtureB1000::class => static function () {
                        return new FixtureB1000();
                    },
                    FixtureC1::class => static function () {
                        return new FixtureC1();
                    },
                    FixtureC2::class => static function (ContainerInterface $container) {
                        return new FixtureC2($container->get(FixtureC1::class));
                    },
                    FixtureC3::class => static function (ContainerInterface $container) {
                        return new FixtureC3($container->get(FixtureC2::class));
                    },
                    FixtureC4::class => static function (ContainerInterface $container) {
                        return new FixtureC4($container->get(FixtureC3::class));
                    },
                    FixtureC5::class => static function (ContainerInterface $container) {
                        return new FixtureC5($container->get(FixtureC4::class));
                    },
                    FixtureC6::class => static function (ContainerInterface $container) {
                        return new FixtureC6($container->get(FixtureC5::class));
                    },
                    FixtureC7::class => static function (ContainerInterface $container) {
                        return new FixtureC7($container->get(FixtureC6::class));
                    },
                    FixtureC8::class => static function (ContainerInterface $container) {
                        return new FixtureC8($container->get(FixtureC7::class));
                    },
                    FixtureC9::class => static function (ContainerInterface $container) {
                        return new FixtureC9($container->get(FixtureC8::class));
                    },
                    FixtureC10::class => static function (ContainerInterface $container) {
                        return new FixtureC10($container->get(FixtureC9::class));
                    },
                    FixtureC11::class => static function (ContainerInterface $container) {
                        return new FixtureC11($container->get(FixtureC10::class));
                    },
                    FixtureC12::class => static function (ContainerInterface $container) {
                        return new FixtureC12($container->get(FixtureC11::class));
                    },
                    FixtureC13::class => static function (ContainerInterface $container) {
                        return new FixtureC13($container->get(FixtureC12::class));
                    },
                    FixtureC14::class => static function (ContainerInterface $container) {
                        return new FixtureC14($container->get(FixtureC13::class));
                    },
                    FixtureC15::class => static function (ContainerInterface $container) {
                        return new FixtureC15($container->get(FixtureC14::class));
                    },
                    FixtureC16::class => static function (ContainerInterface $container) {
                        return new FixtureC16($container->get(FixtureC15::class));
                    },
                    FixtureC17::class => static function (ContainerInterface $container) {
                        return new FixtureC17($container->get(FixtureC16::class));
                    },
                    FixtureC18::class => static function (ContainerInterface $container) {
                        return new FixtureC18($container->get(FixtureC17::class));
                    },
                    FixtureC19::class => static function (ContainerInterface $container) {
                        return new FixtureC19($container->get(FixtureC18::class));
                    },
                    FixtureC20::class => static function (ContainerInterface $container) {
                        return new FixtureC20($container->get(FixtureC19::class));
                    },
                    FixtureC21::class => static function (ContainerInterface $container) {
                        return new FixtureC21($container->get(FixtureC20::class));
                    },
                    FixtureC22::class => static function (ContainerInterface $container) {
                        return new FixtureC22($container->get(FixtureC21::class));
                    },
                    FixtureC23::class => static function (ContainerInterface $container) {
                        return new FixtureC23($container->get(FixtureC22::class));
                    },
                    FixtureC24::class => static function (ContainerInterface $container) {
                        return new FixtureC24($container->get(FixtureC23::class));
                    },
                    FixtureC25::class => static function (ContainerInterface $container) {
                        return new FixtureC25($container->get(FixtureC24::class));
                    },
                    FixtureC26::class => static function (ContainerInterface $container) {
                        return new FixtureC26($container->get(FixtureC25::class));
                    },
                    FixtureC27::class => static function (ContainerInterface $container) {
                        return new FixtureC27($container->get(FixtureC26::class));
                    },
                    FixtureC28::class => static function (ContainerInterface $container) {
                        return new FixtureC28($container->get(FixtureC27::class));
                    },
                    FixtureC29::class => static function (ContainerInterface $container) {
                        return new FixtureC29($container->get(FixtureC28::class));
                    },
                    FixtureC30::class => static function (ContainerInterface $container) {
                        return new FixtureC30($container->get(FixtureC29::class));
                    },
                    FixtureC31::class => static function (ContainerInterface $container) {
                        return new FixtureC31($container->get(FixtureC30::class));
                    },
                    FixtureC32::class => static function (ContainerInterface $container) {
                        return new FixtureC32($container->get(FixtureC31::class));
                    },
                    FixtureC33::class => static function (ContainerInterface $container) {
                        return new FixtureC33($container->get(FixtureC32::class));
                    },
                    FixtureC34::class => static function (ContainerInterface $container) {
                        return new FixtureC34($container->get(FixtureC33::class));
                    },
                    FixtureC35::class => static function (ContainerInterface $container) {
                        return new FixtureC35($container->get(FixtureC34::class));
                    },
                    FixtureC36::class => static function (ContainerInterface $container) {
                        return new FixtureC36($container->get(FixtureC35::class));
                    },
                    FixtureC37::class => static function (ContainerInterface $container) {
                        return new FixtureC37($container->get(FixtureC36::class));
                    },
                    FixtureC38::class => static function (ContainerInterface $container) {
                        return new FixtureC38($container->get(FixtureC37::class));
                    },
                    FixtureC39::class => static function (ContainerInterface $container) {
                        return new FixtureC39($container->get(FixtureC38::class));
                    },
                    FixtureC40::class => static function (ContainerInterface $container) {
                        return new FixtureC40($container->get(FixtureC39::class));
                    },
                    FixtureC41::class => static function (ContainerInterface $container) {
                        return new FixtureC41($container->get(FixtureC40::class));
                    },
                    FixtureC42::class => static function (ContainerInterface $container) {
                        return new FixtureC42($container->get(FixtureC41::class));
                    },
                    FixtureC43::class => static function (ContainerInterface $container) {
                        return new FixtureC43($container->get(FixtureC42::class));
                    },
                    FixtureC44::class => static function (ContainerInterface $container) {
                        return new FixtureC44($container->get(FixtureC43::class));
                    },
                    FixtureC45::class => static function (ContainerInterface $container) {
                        return new FixtureC45($container->get(FixtureC44::class));
                    },
                    FixtureC46::class => static function (ContainerInterface $container) {
                        return new FixtureC46($container->get(FixtureC45::class));
                    },
                    FixtureC47::class => static function (ContainerInterface $container) {
                        return new FixtureC47($container->get(FixtureC46::class));
                    },
                    FixtureC48::class => static function (ContainerInterface $container) {
                        return new FixtureC48($container->get(FixtureC47::class));
                    },
                    FixtureC49::class => static function (ContainerInterface $container) {
                        return new FixtureC49($container->get(FixtureC48::class));
                    },
                    FixtureC50::class => static function (ContainerInterface $container) {
                        return new FixtureC50($container->get(FixtureC49::class));
                    },
                    FixtureC51::class => static function (ContainerInterface $container) {
                        return new FixtureC51($container->get(FixtureC50::class));
                    },
                    FixtureC52::class => static function (ContainerInterface $container) {
                        return new FixtureC52($container->get(FixtureC51::class));
                    },
                    FixtureC53::class => static function (ContainerInterface $container) {
                        return new FixtureC53($container->get(FixtureC52::class));
                    },
                    FixtureC54::class => static function (ContainerInterface $container) {
                        return new FixtureC54($container->get(FixtureC53::class));
                    },
                    FixtureC55::class => static function (ContainerInterface $container) {
                        return new FixtureC55($container->get(FixtureC54::class));
                    },
                    FixtureC56::class => static function (ContainerInterface $container) {
                        return new FixtureC56($container->get(FixtureC55::class));
                    },
                    FixtureC57::class => static function (ContainerInterface $container) {
                        return new FixtureC57($container->get(FixtureC56::class));
                    },
                    FixtureC58::class => static function (ContainerInterface $container) {
                        return new FixtureC58($container->get(FixtureC57::class));
                    },
                    FixtureC59::class => static function (ContainerInterface $container) {
                        return new FixtureC59($container->get(FixtureC58::class));
                    },
                    FixtureC60::class => static function (ContainerInterface $container) {
                        return new FixtureC60($container->get(FixtureC59::class));
                    },
                    FixtureC61::class => static function (ContainerInterface $container) {
                        return new FixtureC61($container->get(FixtureC60::class));
                    },
                    FixtureC62::class => static function (ContainerInterface $container) {
                        return new FixtureC62($container->get(FixtureC61::class));
                    },
                    FixtureC63::class => static function (ContainerInterface $container) {
                        return new FixtureC63($container->get(FixtureC62::class));
                    },
                    FixtureC64::class => static function (ContainerInterface $container) {
                        return new FixtureC64($container->get(FixtureC63::class));
                    },
                    FixtureC65::class => static function (ContainerInterface $container) {
                        return new FixtureC65($container->get(FixtureC64::class));
                    },
                    FixtureC66::class => static function (ContainerInterface $container) {
                        return new FixtureC66($container->get(FixtureC65::class));
                    },
                    FixtureC67::class => static function (ContainerInterface $container) {
                        return new FixtureC67($container->get(FixtureC66::class));
                    },
                    FixtureC68::class => static function (ContainerInterface $container) {
                        return new FixtureC68($container->get(FixtureC67::class));
                    },
                    FixtureC69::class => static function (ContainerInterface $container) {
                        return new FixtureC69($container->get(FixtureC68::class));
                    },
                    FixtureC70::class => static function (ContainerInterface $container) {
                        return new FixtureC70($container->get(FixtureC69::class));
                    },
                    FixtureC71::class => static function (ContainerInterface $container) {
                        return new FixtureC71($container->get(FixtureC70::class));
                    },
                    FixtureC72::class => static function (ContainerInterface $container) {
                        return new FixtureC72($container->get(FixtureC71::class));
                    },
                    FixtureC73::class => static function (ContainerInterface $container) {
                        return new FixtureC73($container->get(FixtureC72::class));
                    },
                    FixtureC74::class => static function (ContainerInterface $container) {
                        return new FixtureC74($container->get(FixtureC73::class));
                    },
                    FixtureC75::class => static function (ContainerInterface $container) {
                        return new FixtureC75($container->get(FixtureC74::class));
                    },
                    FixtureC76::class => static function (ContainerInterface $container) {
                        return new FixtureC76($container->get(FixtureC75::class));
                    },
                    FixtureC77::class => static function (ContainerInterface $container) {
                        return new FixtureC77($container->get(FixtureC76::class));
                    },
                    FixtureC78::class => static function (ContainerInterface $container) {
                        return new FixtureC78($container->get(FixtureC77::class));
                    },
                    FixtureC79::class => static function (ContainerInterface $container) {
                        return new FixtureC79($container->get(FixtureC78::class));
                    },
                    FixtureC80::class => static function (ContainerInterface $container) {
                        return new FixtureC80($container->get(FixtureC79::class));
                    },
                    FixtureC81::class => static function (ContainerInterface $container) {
                        return new FixtureC81($container->get(FixtureC80::class));
                    },
                    FixtureC82::class => static function (ContainerInterface $container) {
                        return new FixtureC82($container->get(FixtureC81::class));
                    },
                    FixtureC83::class => static function (ContainerInterface $container) {
                        return new FixtureC83($container->get(FixtureC82::class));
                    },
                    FixtureC84::class => static function (ContainerInterface $container) {
                        return new FixtureC84($container->get(FixtureC83::class));
                    },
                    FixtureC85::class => static function (ContainerInterface $container) {
                        return new FixtureC85($container->get(FixtureC84::class));
                    },
                    FixtureC86::class => static function (ContainerInterface $container) {
                        return new FixtureC86($container->get(FixtureC85::class));
                    },
                    FixtureC87::class => static function (ContainerInterface $container) {
                        return new FixtureC87($container->get(FixtureC86::class));
                    },
                    FixtureC88::class => static function (ContainerInterface $container) {
                        return new FixtureC88($container->get(FixtureC87::class));
                    },
                    FixtureC89::class => static function (ContainerInterface $container) {
                        return new FixtureC89($container->get(FixtureC88::class));
                    },
                    FixtureC90::class => static function (ContainerInterface $container) {
                        return new FixtureC90($container->get(FixtureC89::class));
                    },
                    FixtureC91::class => static function (ContainerInterface $container) {
                        return new FixtureC91($container->get(FixtureC90::class));
                    },
                    FixtureC92::class => static function (ContainerInterface $container) {
                        return new FixtureC92($container->get(FixtureC91::class));
                    },
                    FixtureC93::class => static function (ContainerInterface $container) {
                        return new FixtureC93($container->get(FixtureC92::class));
                    },
                    FixtureC94::class => static function (ContainerInterface $container) {
                        return new FixtureC94($container->get(FixtureC93::class));
                    },
                    FixtureC95::class => static function (ContainerInterface $container) {
                        return new FixtureC95($container->get(FixtureC94::class));
                    },
                    FixtureC96::class => static function (ContainerInterface $container) {
                        return new FixtureC96($container->get(FixtureC95::class));
                    },
                    FixtureC97::class => static function (ContainerInterface $container) {
                        return new FixtureC97($container->get(FixtureC96::class));
                    },
                    FixtureC98::class => static function (ContainerInterface $container) {
                        return new FixtureC98($container->get(FixtureC97::class));
                    },
                    FixtureC99::class => static function (ContainerInterface $container) {
                        return new FixtureC99($container->get(FixtureC98::class));
                    },
                    FixtureC100::class => static function (ContainerInterface $container) {
                        return new FixtureC100($container->get(FixtureC99::class));
                    },
                    FixtureC101::class => static function (ContainerInterface $container) {
                        return new FixtureC101($container->get(FixtureC100::class));
                    },
                    FixtureC102::class => static function (ContainerInterface $container) {
                        return new FixtureC102($container->get(FixtureC101::class));
                    },
                    FixtureC103::class => static function (ContainerInterface $container) {
                        return new FixtureC103($container->get(FixtureC102::class));
                    },
                    FixtureC104::class => static function (ContainerInterface $container) {
                        return new FixtureC104($container->get(FixtureC103::class));
                    },
                    FixtureC105::class => static function (ContainerInterface $container) {
                        return new FixtureC105($container->get(FixtureC104::class));
                    },
                    FixtureC106::class => static function (ContainerInterface $container) {
                        return new FixtureC106($container->get(FixtureC105::class));
                    },
                    FixtureC107::class => static function (ContainerInterface $container) {
                        return new FixtureC107($container->get(FixtureC106::class));
                    },
                    FixtureC108::class => static function (ContainerInterface $container) {
                        return new FixtureC108($container->get(FixtureC107::class));
                    },
                    FixtureC109::class => static function (ContainerInterface $container) {
                        return new FixtureC109($container->get(FixtureC108::class));
                    },
                    FixtureC110::class => static function (ContainerInterface $container) {
                        return new FixtureC110($container->get(FixtureC109::class));
                    },
                    FixtureC111::class => static function (ContainerInterface $container) {
                        return new FixtureC111($container->get(FixtureC110::class));
                    },
                    FixtureC112::class => static function (ContainerInterface $container) {
                        return new FixtureC112($container->get(FixtureC111::class));
                    },
                    FixtureC113::class => static function (ContainerInterface $container) {
                        return new FixtureC113($container->get(FixtureC112::class));
                    },
                    FixtureC114::class => static function (ContainerInterface $container) {
                        return new FixtureC114($container->get(FixtureC113::class));
                    },
                    FixtureC115::class => static function (ContainerInterface $container) {
                        return new FixtureC115($container->get(FixtureC114::class));
                    },
                    FixtureC116::class => static function (ContainerInterface $container) {
                        return new FixtureC116($container->get(FixtureC115::class));
                    },
                    FixtureC117::class => static function (ContainerInterface $container) {
                        return new FixtureC117($container->get(FixtureC116::class));
                    },
                    FixtureC118::class => static function (ContainerInterface $container) {
                        return new FixtureC118($container->get(FixtureC117::class));
                    },
                    FixtureC119::class => static function (ContainerInterface $container) {
                        return new FixtureC119($container->get(FixtureC118::class));
                    },
                    FixtureC120::class => static function (ContainerInterface $container) {
                        return new FixtureC120($container->get(FixtureC119::class));
                    },
                    FixtureC121::class => static function (ContainerInterface $container) {
                        return new FixtureC121($container->get(FixtureC120::class));
                    },
                    FixtureC122::class => static function (ContainerInterface $container) {
                        return new FixtureC122($container->get(FixtureC121::class));
                    },
                    FixtureC123::class => static function (ContainerInterface $container) {
                        return new FixtureC123($container->get(FixtureC122::class));
                    },
                    FixtureC124::class => static function (ContainerInterface $container) {
                        return new FixtureC124($container->get(FixtureC123::class));
                    },
                    FixtureC125::class => static function (ContainerInterface $container) {
                        return new FixtureC125($container->get(FixtureC124::class));
                    },
                    FixtureC126::class => static function (ContainerInterface $container) {
                        return new FixtureC126($container->get(FixtureC125::class));
                    },
                    FixtureC127::class => static function (ContainerInterface $container) {
                        return new FixtureC127($container->get(FixtureC126::class));
                    },
                    FixtureC128::class => static function (ContainerInterface $container) {
                        return new FixtureC128($container->get(FixtureC127::class));
                    },
                    FixtureC129::class => static function (ContainerInterface $container) {
                        return new FixtureC129($container->get(FixtureC128::class));
                    },
                    FixtureC130::class => static function (ContainerInterface $container) {
                        return new FixtureC130($container->get(FixtureC129::class));
                    },
                    FixtureC131::class => static function (ContainerInterface $container) {
                        return new FixtureC131($container->get(FixtureC130::class));
                    },
                    FixtureC132::class => static function (ContainerInterface $container) {
                        return new FixtureC132($container->get(FixtureC131::class));
                    },
                    FixtureC133::class => static function (ContainerInterface $container) {
                        return new FixtureC133($container->get(FixtureC132::class));
                    },
                    FixtureC134::class => static function (ContainerInterface $container) {
                        return new FixtureC134($container->get(FixtureC133::class));
                    },
                    FixtureC135::class => static function (ContainerInterface $container) {
                        return new FixtureC135($container->get(FixtureC134::class));
                    },
                    FixtureC136::class => static function (ContainerInterface $container) {
                        return new FixtureC136($container->get(FixtureC135::class));
                    },
                    FixtureC137::class => static function (ContainerInterface $container) {
                        return new FixtureC137($container->get(FixtureC136::class));
                    },
                    FixtureC138::class => static function (ContainerInterface $container) {
                        return new FixtureC138($container->get(FixtureC137::class));
                    },
                    FixtureC139::class => static function (ContainerInterface $container) {
                        return new FixtureC139($container->get(FixtureC138::class));
                    },
                    FixtureC140::class => static function (ContainerInterface $container) {
                        return new FixtureC140($container->get(FixtureC139::class));
                    },
                    FixtureC141::class => static function (ContainerInterface $container) {
                        return new FixtureC141($container->get(FixtureC140::class));
                    },
                    FixtureC142::class => static function (ContainerInterface $container) {
                        return new FixtureC142($container->get(FixtureC141::class));
                    },
                    FixtureC143::class => static function (ContainerInterface $container) {
                        return new FixtureC143($container->get(FixtureC142::class));
                    },
                    FixtureC144::class => static function (ContainerInterface $container) {
                        return new FixtureC144($container->get(FixtureC143::class));
                    },
                    FixtureC145::class => static function (ContainerInterface $container) {
                        return new FixtureC145($container->get(FixtureC144::class));
                    },
                    FixtureC146::class => static function (ContainerInterface $container) {
                        return new FixtureC146($container->get(FixtureC145::class));
                    },
                    FixtureC147::class => static function (ContainerInterface $container) {
                        return new FixtureC147($container->get(FixtureC146::class));
                    },
                    FixtureC148::class => static function (ContainerInterface $container) {
                        return new FixtureC148($container->get(FixtureC147::class));
                    },
                    FixtureC149::class => static function (ContainerInterface $container) {
                        return new FixtureC149($container->get(FixtureC148::class));
                    },
                    FixtureC150::class => static function (ContainerInterface $container) {
                        return new FixtureC150($container->get(FixtureC149::class));
                    },
                    FixtureC151::class => static function (ContainerInterface $container) {
                        return new FixtureC151($container->get(FixtureC150::class));
                    },
                    FixtureC152::class => static function (ContainerInterface $container) {
                        return new FixtureC152($container->get(FixtureC151::class));
                    },
                    FixtureC153::class => static function (ContainerInterface $container) {
                        return new FixtureC153($container->get(FixtureC152::class));
                    },
                    FixtureC154::class => static function (ContainerInterface $container) {
                        return new FixtureC154($container->get(FixtureC153::class));
                    },
                    FixtureC155::class => static function (ContainerInterface $container) {
                        return new FixtureC155($container->get(FixtureC154::class));
                    },
                    FixtureC156::class => static function (ContainerInterface $container) {
                        return new FixtureC156($container->get(FixtureC155::class));
                    },
                    FixtureC157::class => static function (ContainerInterface $container) {
                        return new FixtureC157($container->get(FixtureC156::class));
                    },
                    FixtureC158::class => static function (ContainerInterface $container) {
                        return new FixtureC158($container->get(FixtureC157::class));
                    },
                    FixtureC159::class => static function (ContainerInterface $container) {
                        return new FixtureC159($container->get(FixtureC158::class));
                    },
                    FixtureC160::class => static function (ContainerInterface $container) {
                        return new FixtureC160($container->get(FixtureC159::class));
                    },
                    FixtureC161::class => static function (ContainerInterface $container) {
                        return new FixtureC161($container->get(FixtureC160::class));
                    },
                    FixtureC162::class => static function (ContainerInterface $container) {
                        return new FixtureC162($container->get(FixtureC161::class));
                    },
                    FixtureC163::class => static function (ContainerInterface $container) {
                        return new FixtureC163($container->get(FixtureC162::class));
                    },
                    FixtureC164::class => static function (ContainerInterface $container) {
                        return new FixtureC164($container->get(FixtureC163::class));
                    },
                    FixtureC165::class => static function (ContainerInterface $container) {
                        return new FixtureC165($container->get(FixtureC164::class));
                    },
                    FixtureC166::class => static function (ContainerInterface $container) {
                        return new FixtureC166($container->get(FixtureC165::class));
                    },
                    FixtureC167::class => static function (ContainerInterface $container) {
                        return new FixtureC167($container->get(FixtureC166::class));
                    },
                    FixtureC168::class => static function (ContainerInterface $container) {
                        return new FixtureC168($container->get(FixtureC167::class));
                    },
                    FixtureC169::class => static function (ContainerInterface $container) {
                        return new FixtureC169($container->get(FixtureC168::class));
                    },
                    FixtureC170::class => static function (ContainerInterface $container) {
                        return new FixtureC170($container->get(FixtureC169::class));
                    },
                    FixtureC171::class => static function (ContainerInterface $container) {
                        return new FixtureC171($container->get(FixtureC170::class));
                    },
                    FixtureC172::class => static function (ContainerInterface $container) {
                        return new FixtureC172($container->get(FixtureC171::class));
                    },
                    FixtureC173::class => static function (ContainerInterface $container) {
                        return new FixtureC173($container->get(FixtureC172::class));
                    },
                    FixtureC174::class => static function (ContainerInterface $container) {
                        return new FixtureC174($container->get(FixtureC173::class));
                    },
                    FixtureC175::class => static function (ContainerInterface $container) {
                        return new FixtureC175($container->get(FixtureC174::class));
                    },
                    FixtureC176::class => static function (ContainerInterface $container) {
                        return new FixtureC176($container->get(FixtureC175::class));
                    },
                    FixtureC177::class => static function (ContainerInterface $container) {
                        return new FixtureC177($container->get(FixtureC176::class));
                    },
                    FixtureC178::class => static function (ContainerInterface $container) {
                        return new FixtureC178($container->get(FixtureC177::class));
                    },
                    FixtureC179::class => static function (ContainerInterface $container) {
                        return new FixtureC179($container->get(FixtureC178::class));
                    },
                    FixtureC180::class => static function (ContainerInterface $container) {
                        return new FixtureC180($container->get(FixtureC179::class));
                    },
                    FixtureC181::class => static function (ContainerInterface $container) {
                        return new FixtureC181($container->get(FixtureC180::class));
                    },
                    FixtureC182::class => static function (ContainerInterface $container) {
                        return new FixtureC182($container->get(FixtureC181::class));
                    },
                    FixtureC183::class => static function (ContainerInterface $container) {
                        return new FixtureC183($container->get(FixtureC182::class));
                    },
                    FixtureC184::class => static function (ContainerInterface $container) {
                        return new FixtureC184($container->get(FixtureC183::class));
                    },
                    FixtureC185::class => static function (ContainerInterface $container) {
                        return new FixtureC185($container->get(FixtureC184::class));
                    },
                    FixtureC186::class => static function (ContainerInterface $container) {
                        return new FixtureC186($container->get(FixtureC185::class));
                    },
                    FixtureC187::class => static function (ContainerInterface $container) {
                        return new FixtureC187($container->get(FixtureC186::class));
                    },
                    FixtureC188::class => static function (ContainerInterface $container) {
                        return new FixtureC188($container->get(FixtureC187::class));
                    },
                    FixtureC189::class => static function (ContainerInterface $container) {
                        return new FixtureC189($container->get(FixtureC188::class));
                    },
                    FixtureC190::class => static function (ContainerInterface $container) {
                        return new FixtureC190($container->get(FixtureC189::class));
                    },
                    FixtureC191::class => static function (ContainerInterface $container) {
                        return new FixtureC191($container->get(FixtureC190::class));
                    },
                    FixtureC192::class => static function (ContainerInterface $container) {
                        return new FixtureC192($container->get(FixtureC191::class));
                    },
                    FixtureC193::class => static function (ContainerInterface $container) {
                        return new FixtureC193($container->get(FixtureC192::class));
                    },
                    FixtureC194::class => static function (ContainerInterface $container) {
                        return new FixtureC194($container->get(FixtureC193::class));
                    },
                    FixtureC195::class => static function (ContainerInterface $container) {
                        return new FixtureC195($container->get(FixtureC194::class));
                    },
                    FixtureC196::class => static function (ContainerInterface $container) {
                        return new FixtureC196($container->get(FixtureC195::class));
                    },
                    FixtureC197::class => static function (ContainerInterface $container) {
                        return new FixtureC197($container->get(FixtureC196::class));
                    },
                    FixtureC198::class => static function (ContainerInterface $container) {
                        return new FixtureC198($container->get(FixtureC197::class));
                    },
                    FixtureC199::class => static function (ContainerInterface $container) {
                        return new FixtureC199($container->get(FixtureC198::class));
                    },
                    FixtureC200::class => static function (ContainerInterface $container) {
                        return new FixtureC200($container->get(FixtureC199::class));
                    },
                    FixtureC201::class => static function (ContainerInterface $container) {
                        return new FixtureC201($container->get(FixtureC200::class));
                    },
                    FixtureC202::class => static function (ContainerInterface $container) {
                        return new FixtureC202($container->get(FixtureC201::class));
                    },
                    FixtureC203::class => static function (ContainerInterface $container) {
                        return new FixtureC203($container->get(FixtureC202::class));
                    },
                    FixtureC204::class => static function (ContainerInterface $container) {
                        return new FixtureC204($container->get(FixtureC203::class));
                    },
                    FixtureC205::class => static function (ContainerInterface $container) {
                        return new FixtureC205($container->get(FixtureC204::class));
                    },
                    FixtureC206::class => static function (ContainerInterface $container) {
                        return new FixtureC206($container->get(FixtureC205::class));
                    },
                    FixtureC207::class => static function (ContainerInterface $container) {
                        return new FixtureC207($container->get(FixtureC206::class));
                    },
                    FixtureC208::class => static function (ContainerInterface $container) {
                        return new FixtureC208($container->get(FixtureC207::class));
                    },
                    FixtureC209::class => static function (ContainerInterface $container) {
                        return new FixtureC209($container->get(FixtureC208::class));
                    },
                    FixtureC210::class => static function (ContainerInterface $container) {
                        return new FixtureC210($container->get(FixtureC209::class));
                    },
                    FixtureC211::class => static function (ContainerInterface $container) {
                        return new FixtureC211($container->get(FixtureC210::class));
                    },
                    FixtureC212::class => static function (ContainerInterface $container) {
                        return new FixtureC212($container->get(FixtureC211::class));
                    },
                    FixtureC213::class => static function (ContainerInterface $container) {
                        return new FixtureC213($container->get(FixtureC212::class));
                    },
                    FixtureC214::class => static function (ContainerInterface $container) {
                        return new FixtureC214($container->get(FixtureC213::class));
                    },
                    FixtureC215::class => static function (ContainerInterface $container) {
                        return new FixtureC215($container->get(FixtureC214::class));
                    },
                    FixtureC216::class => static function (ContainerInterface $container) {
                        return new FixtureC216($container->get(FixtureC215::class));
                    },
                    FixtureC217::class => static function (ContainerInterface $container) {
                        return new FixtureC217($container->get(FixtureC216::class));
                    },
                    FixtureC218::class => static function (ContainerInterface $container) {
                        return new FixtureC218($container->get(FixtureC217::class));
                    },
                    FixtureC219::class => static function (ContainerInterface $container) {
                        return new FixtureC219($container->get(FixtureC218::class));
                    },
                    FixtureC220::class => static function (ContainerInterface $container) {
                        return new FixtureC220($container->get(FixtureC219::class));
                    },
                    FixtureC221::class => static function (ContainerInterface $container) {
                        return new FixtureC221($container->get(FixtureC220::class));
                    },
                    FixtureC222::class => static function (ContainerInterface $container) {
                        return new FixtureC222($container->get(FixtureC221::class));
                    },
                    FixtureC223::class => static function (ContainerInterface $container) {
                        return new FixtureC223($container->get(FixtureC222::class));
                    },
                    FixtureC224::class => static function (ContainerInterface $container) {
                        return new FixtureC224($container->get(FixtureC223::class));
                    },
                    FixtureC225::class => static function (ContainerInterface $container) {
                        return new FixtureC225($container->get(FixtureC224::class));
                    },
                    FixtureC226::class => static function (ContainerInterface $container) {
                        return new FixtureC226($container->get(FixtureC225::class));
                    },
                    FixtureC227::class => static function (ContainerInterface $container) {
                        return new FixtureC227($container->get(FixtureC226::class));
                    },
                    FixtureC228::class => static function (ContainerInterface $container) {
                        return new FixtureC228($container->get(FixtureC227::class));
                    },
                    FixtureC229::class => static function (ContainerInterface $container) {
                        return new FixtureC229($container->get(FixtureC228::class));
                    },
                    FixtureC230::class => static function (ContainerInterface $container) {
                        return new FixtureC230($container->get(FixtureC229::class));
                    },
                    FixtureC231::class => static function (ContainerInterface $container) {
                        return new FixtureC231($container->get(FixtureC230::class));
                    },
                    FixtureC232::class => static function (ContainerInterface $container) {
                        return new FixtureC232($container->get(FixtureC231::class));
                    },
                    FixtureC233::class => static function (ContainerInterface $container) {
                        return new FixtureC233($container->get(FixtureC232::class));
                    },
                    FixtureC234::class => static function (ContainerInterface $container) {
                        return new FixtureC234($container->get(FixtureC233::class));
                    },
                    FixtureC235::class => static function (ContainerInterface $container) {
                        return new FixtureC235($container->get(FixtureC234::class));
                    },
                    FixtureC236::class => static function (ContainerInterface $container) {
                        return new FixtureC236($container->get(FixtureC235::class));
                    },
                    FixtureC237::class => static function (ContainerInterface $container) {
                        return new FixtureC237($container->get(FixtureC236::class));
                    },
                    FixtureC238::class => static function (ContainerInterface $container) {
                        return new FixtureC238($container->get(FixtureC237::class));
                    },
                    FixtureC239::class => static function (ContainerInterface $container) {
                        return new FixtureC239($container->get(FixtureC238::class));
                    },
                    FixtureC240::class => static function (ContainerInterface $container) {
                        return new FixtureC240($container->get(FixtureC239::class));
                    },
                    FixtureC241::class => static function (ContainerInterface $container) {
                        return new FixtureC241($container->get(FixtureC240::class));
                    },
                    FixtureC242::class => static function (ContainerInterface $container) {
                        return new FixtureC242($container->get(FixtureC241::class));
                    },
                    FixtureC243::class => static function (ContainerInterface $container) {
                        return new FixtureC243($container->get(FixtureC242::class));
                    },
                    FixtureC244::class => static function (ContainerInterface $container) {
                        return new FixtureC244($container->get(FixtureC243::class));
                    },
                    FixtureC245::class => static function (ContainerInterface $container) {
                        return new FixtureC245($container->get(FixtureC244::class));
                    },
                    FixtureC246::class => static function (ContainerInterface $container) {
                        return new FixtureC246($container->get(FixtureC245::class));
                    },
                    FixtureC247::class => static function (ContainerInterface $container) {
                        return new FixtureC247($container->get(FixtureC246::class));
                    },
                    FixtureC248::class => static function (ContainerInterface $container) {
                        return new FixtureC248($container->get(FixtureC247::class));
                    },
                    FixtureC249::class => static function (ContainerInterface $container) {
                        return new FixtureC249($container->get(FixtureC248::class));
                    },
                    FixtureC250::class => static function (ContainerInterface $container) {
                        return new FixtureC250($container->get(FixtureC249::class));
                    },
                    FixtureC251::class => static function (ContainerInterface $container) {
                        return new FixtureC251($container->get(FixtureC250::class));
                    },
                    FixtureC252::class => static function (ContainerInterface $container) {
                        return new FixtureC252($container->get(FixtureC251::class));
                    },
                    FixtureC253::class => static function (ContainerInterface $container) {
                        return new FixtureC253($container->get(FixtureC252::class));
                    },
                    FixtureC254::class => static function (ContainerInterface $container) {
                        return new FixtureC254($container->get(FixtureC253::class));
                    },
                    FixtureC255::class => static function (ContainerInterface $container) {
                        return new FixtureC255($container->get(FixtureC254::class));
                    },
                    FixtureC256::class => static function (ContainerInterface $container) {
                        return new FixtureC256($container->get(FixtureC255::class));
                    },
                    FixtureC257::class => static function (ContainerInterface $container) {
                        return new FixtureC257($container->get(FixtureC256::class));
                    },
                    FixtureC258::class => static function (ContainerInterface $container) {
                        return new FixtureC258($container->get(FixtureC257::class));
                    },
                    FixtureC259::class => static function (ContainerInterface $container) {
                        return new FixtureC259($container->get(FixtureC258::class));
                    },
                    FixtureC260::class => static function (ContainerInterface $container) {
                        return new FixtureC260($container->get(FixtureC259::class));
                    },
                    FixtureC261::class => static function (ContainerInterface $container) {
                        return new FixtureC261($container->get(FixtureC260::class));
                    },
                    FixtureC262::class => static function (ContainerInterface $container) {
                        return new FixtureC262($container->get(FixtureC261::class));
                    },
                    FixtureC263::class => static function (ContainerInterface $container) {
                        return new FixtureC263($container->get(FixtureC262::class));
                    },
                    FixtureC264::class => static function (ContainerInterface $container) {
                        return new FixtureC264($container->get(FixtureC263::class));
                    },
                    FixtureC265::class => static function (ContainerInterface $container) {
                        return new FixtureC265($container->get(FixtureC264::class));
                    },
                    FixtureC266::class => static function (ContainerInterface $container) {
                        return new FixtureC266($container->get(FixtureC265::class));
                    },
                    FixtureC267::class => static function (ContainerInterface $container) {
                        return new FixtureC267($container->get(FixtureC266::class));
                    },
                    FixtureC268::class => static function (ContainerInterface $container) {
                        return new FixtureC268($container->get(FixtureC267::class));
                    },
                    FixtureC269::class => static function (ContainerInterface $container) {
                        return new FixtureC269($container->get(FixtureC268::class));
                    },
                    FixtureC270::class => static function (ContainerInterface $container) {
                        return new FixtureC270($container->get(FixtureC269::class));
                    },
                    FixtureC271::class => static function (ContainerInterface $container) {
                        return new FixtureC271($container->get(FixtureC270::class));
                    },
                    FixtureC272::class => static function (ContainerInterface $container) {
                        return new FixtureC272($container->get(FixtureC271::class));
                    },
                    FixtureC273::class => static function (ContainerInterface $container) {
                        return new FixtureC273($container->get(FixtureC272::class));
                    },
                    FixtureC274::class => static function (ContainerInterface $container) {
                        return new FixtureC274($container->get(FixtureC273::class));
                    },
                    FixtureC275::class => static function (ContainerInterface $container) {
                        return new FixtureC275($container->get(FixtureC274::class));
                    },
                    FixtureC276::class => static function (ContainerInterface $container) {
                        return new FixtureC276($container->get(FixtureC275::class));
                    },
                    FixtureC277::class => static function (ContainerInterface $container) {
                        return new FixtureC277($container->get(FixtureC276::class));
                    },
                    FixtureC278::class => static function (ContainerInterface $container) {
                        return new FixtureC278($container->get(FixtureC277::class));
                    },
                    FixtureC279::class => static function (ContainerInterface $container) {
                        return new FixtureC279($container->get(FixtureC278::class));
                    },
                    FixtureC280::class => static function (ContainerInterface $container) {
                        return new FixtureC280($container->get(FixtureC279::class));
                    },
                    FixtureC281::class => static function (ContainerInterface $container) {
                        return new FixtureC281($container->get(FixtureC280::class));
                    },
                    FixtureC282::class => static function (ContainerInterface $container) {
                        return new FixtureC282($container->get(FixtureC281::class));
                    },
                    FixtureC283::class => static function (ContainerInterface $container) {
                        return new FixtureC283($container->get(FixtureC282::class));
                    },
                    FixtureC284::class => static function (ContainerInterface $container) {
                        return new FixtureC284($container->get(FixtureC283::class));
                    },
                    FixtureC285::class => static function (ContainerInterface $container) {
                        return new FixtureC285($container->get(FixtureC284::class));
                    },
                    FixtureC286::class => static function (ContainerInterface $container) {
                        return new FixtureC286($container->get(FixtureC285::class));
                    },
                    FixtureC287::class => static function (ContainerInterface $container) {
                        return new FixtureC287($container->get(FixtureC286::class));
                    },
                    FixtureC288::class => static function (ContainerInterface $container) {
                        return new FixtureC288($container->get(FixtureC287::class));
                    },
                    FixtureC289::class => static function (ContainerInterface $container) {
                        return new FixtureC289($container->get(FixtureC288::class));
                    },
                    FixtureC290::class => static function (ContainerInterface $container) {
                        return new FixtureC290($container->get(FixtureC289::class));
                    },
                    FixtureC291::class => static function (ContainerInterface $container) {
                        return new FixtureC291($container->get(FixtureC290::class));
                    },
                    FixtureC292::class => static function (ContainerInterface $container) {
                        return new FixtureC292($container->get(FixtureC291::class));
                    },
                    FixtureC293::class => static function (ContainerInterface $container) {
                        return new FixtureC293($container->get(FixtureC292::class));
                    },
                    FixtureC294::class => static function (ContainerInterface $container) {
                        return new FixtureC294($container->get(FixtureC293::class));
                    },
                    FixtureC295::class => static function (ContainerInterface $container) {
                        return new FixtureC295($container->get(FixtureC294::class));
                    },
                    FixtureC296::class => static function (ContainerInterface $container) {
                        return new FixtureC296($container->get(FixtureC295::class));
                    },
                    FixtureC297::class => static function (ContainerInterface $container) {
                        return new FixtureC297($container->get(FixtureC296::class));
                    },
                    FixtureC298::class => static function (ContainerInterface $container) {
                        return new FixtureC298($container->get(FixtureC297::class));
                    },
                    FixtureC299::class => static function (ContainerInterface $container) {
                        return new FixtureC299($container->get(FixtureC298::class));
                    },
                    FixtureC300::class => static function (ContainerInterface $container) {
                        return new FixtureC300($container->get(FixtureC299::class));
                    },
                    FixtureC301::class => static function (ContainerInterface $container) {
                        return new FixtureC301($container->get(FixtureC300::class));
                    },
                    FixtureC302::class => static function (ContainerInterface $container) {
                        return new FixtureC302($container->get(FixtureC301::class));
                    },
                    FixtureC303::class => static function (ContainerInterface $container) {
                        return new FixtureC303($container->get(FixtureC302::class));
                    },
                    FixtureC304::class => static function (ContainerInterface $container) {
                        return new FixtureC304($container->get(FixtureC303::class));
                    },
                    FixtureC305::class => static function (ContainerInterface $container) {
                        return new FixtureC305($container->get(FixtureC304::class));
                    },
                    FixtureC306::class => static function (ContainerInterface $container) {
                        return new FixtureC306($container->get(FixtureC305::class));
                    },
                    FixtureC307::class => static function (ContainerInterface $container) {
                        return new FixtureC307($container->get(FixtureC306::class));
                    },
                    FixtureC308::class => static function (ContainerInterface $container) {
                        return new FixtureC308($container->get(FixtureC307::class));
                    },
                    FixtureC309::class => static function (ContainerInterface $container) {
                        return new FixtureC309($container->get(FixtureC308::class));
                    },
                    FixtureC310::class => static function (ContainerInterface $container) {
                        return new FixtureC310($container->get(FixtureC309::class));
                    },
                    FixtureC311::class => static function (ContainerInterface $container) {
                        return new FixtureC311($container->get(FixtureC310::class));
                    },
                    FixtureC312::class => static function (ContainerInterface $container) {
                        return new FixtureC312($container->get(FixtureC311::class));
                    },
                    FixtureC313::class => static function (ContainerInterface $container) {
                        return new FixtureC313($container->get(FixtureC312::class));
                    },
                    FixtureC314::class => static function (ContainerInterface $container) {
                        return new FixtureC314($container->get(FixtureC313::class));
                    },
                    FixtureC315::class => static function (ContainerInterface $container) {
                        return new FixtureC315($container->get(FixtureC314::class));
                    },
                    FixtureC316::class => static function (ContainerInterface $container) {
                        return new FixtureC316($container->get(FixtureC315::class));
                    },
                    FixtureC317::class => static function (ContainerInterface $container) {
                        return new FixtureC317($container->get(FixtureC316::class));
                    },
                    FixtureC318::class => static function (ContainerInterface $container) {
                        return new FixtureC318($container->get(FixtureC317::class));
                    },
                    FixtureC319::class => static function (ContainerInterface $container) {
                        return new FixtureC319($container->get(FixtureC318::class));
                    },
                    FixtureC320::class => static function (ContainerInterface $container) {
                        return new FixtureC320($container->get(FixtureC319::class));
                    },
                    FixtureC321::class => static function (ContainerInterface $container) {
                        return new FixtureC321($container->get(FixtureC320::class));
                    },
                    FixtureC322::class => static function (ContainerInterface $container) {
                        return new FixtureC322($container->get(FixtureC321::class));
                    },
                    FixtureC323::class => static function (ContainerInterface $container) {
                        return new FixtureC323($container->get(FixtureC322::class));
                    },
                    FixtureC324::class => static function (ContainerInterface $container) {
                        return new FixtureC324($container->get(FixtureC323::class));
                    },
                    FixtureC325::class => static function (ContainerInterface $container) {
                        return new FixtureC325($container->get(FixtureC324::class));
                    },
                    FixtureC326::class => static function (ContainerInterface $container) {
                        return new FixtureC326($container->get(FixtureC325::class));
                    },
                    FixtureC327::class => static function (ContainerInterface $container) {
                        return new FixtureC327($container->get(FixtureC326::class));
                    },
                    FixtureC328::class => static function (ContainerInterface $container) {
                        return new FixtureC328($container->get(FixtureC327::class));
                    },
                    FixtureC329::class => static function (ContainerInterface $container) {
                        return new FixtureC329($container->get(FixtureC328::class));
                    },
                    FixtureC330::class => static function (ContainerInterface $container) {
                        return new FixtureC330($container->get(FixtureC329::class));
                    },
                    FixtureC331::class => static function (ContainerInterface $container) {
                        return new FixtureC331($container->get(FixtureC330::class));
                    },
                    FixtureC332::class => static function (ContainerInterface $container) {
                        return new FixtureC332($container->get(FixtureC331::class));
                    },
                    FixtureC333::class => static function (ContainerInterface $container) {
                        return new FixtureC333($container->get(FixtureC332::class));
                    },
                    FixtureC334::class => static function (ContainerInterface $container) {
                        return new FixtureC334($container->get(FixtureC333::class));
                    },
                    FixtureC335::class => static function (ContainerInterface $container) {
                        return new FixtureC335($container->get(FixtureC334::class));
                    },
                    FixtureC336::class => static function (ContainerInterface $container) {
                        return new FixtureC336($container->get(FixtureC335::class));
                    },
                    FixtureC337::class => static function (ContainerInterface $container) {
                        return new FixtureC337($container->get(FixtureC336::class));
                    },
                    FixtureC338::class => static function (ContainerInterface $container) {
                        return new FixtureC338($container->get(FixtureC337::class));
                    },
                    FixtureC339::class => static function (ContainerInterface $container) {
                        return new FixtureC339($container->get(FixtureC338::class));
                    },
                    FixtureC340::class => static function (ContainerInterface $container) {
                        return new FixtureC340($container->get(FixtureC339::class));
                    },
                    FixtureC341::class => static function (ContainerInterface $container) {
                        return new FixtureC341($container->get(FixtureC340::class));
                    },
                    FixtureC342::class => static function (ContainerInterface $container) {
                        return new FixtureC342($container->get(FixtureC341::class));
                    },
                    FixtureC343::class => static function (ContainerInterface $container) {
                        return new FixtureC343($container->get(FixtureC342::class));
                    },
                    FixtureC344::class => static function (ContainerInterface $container) {
                        return new FixtureC344($container->get(FixtureC343::class));
                    },
                    FixtureC345::class => static function (ContainerInterface $container) {
                        return new FixtureC345($container->get(FixtureC344::class));
                    },
                    FixtureC346::class => static function (ContainerInterface $container) {
                        return new FixtureC346($container->get(FixtureC345::class));
                    },
                    FixtureC347::class => static function (ContainerInterface $container) {
                        return new FixtureC347($container->get(FixtureC346::class));
                    },
                    FixtureC348::class => static function (ContainerInterface $container) {
                        return new FixtureC348($container->get(FixtureC347::class));
                    },
                    FixtureC349::class => static function (ContainerInterface $container) {
                        return new FixtureC349($container->get(FixtureC348::class));
                    },
                    FixtureC350::class => static function (ContainerInterface $container) {
                        return new FixtureC350($container->get(FixtureC349::class));
                    },
                    FixtureC351::class => static function (ContainerInterface $container) {
                        return new FixtureC351($container->get(FixtureC350::class));
                    },
                    FixtureC352::class => static function (ContainerInterface $container) {
                        return new FixtureC352($container->get(FixtureC351::class));
                    },
                    FixtureC353::class => static function (ContainerInterface $container) {
                        return new FixtureC353($container->get(FixtureC352::class));
                    },
                    FixtureC354::class => static function (ContainerInterface $container) {
                        return new FixtureC354($container->get(FixtureC353::class));
                    },
                    FixtureC355::class => static function (ContainerInterface $container) {
                        return new FixtureC355($container->get(FixtureC354::class));
                    },
                    FixtureC356::class => static function (ContainerInterface $container) {
                        return new FixtureC356($container->get(FixtureC355::class));
                    },
                    FixtureC357::class => static function (ContainerInterface $container) {
                        return new FixtureC357($container->get(FixtureC356::class));
                    },
                    FixtureC358::class => static function (ContainerInterface $container) {
                        return new FixtureC358($container->get(FixtureC357::class));
                    },
                    FixtureC359::class => static function (ContainerInterface $container) {
                        return new FixtureC359($container->get(FixtureC358::class));
                    },
                    FixtureC360::class => static function (ContainerInterface $container) {
                        return new FixtureC360($container->get(FixtureC359::class));
                    },
                    FixtureC361::class => static function (ContainerInterface $container) {
                        return new FixtureC361($container->get(FixtureC360::class));
                    },
                    FixtureC362::class => static function (ContainerInterface $container) {
                        return new FixtureC362($container->get(FixtureC361::class));
                    },
                    FixtureC363::class => static function (ContainerInterface $container) {
                        return new FixtureC363($container->get(FixtureC362::class));
                    },
                    FixtureC364::class => static function (ContainerInterface $container) {
                        return new FixtureC364($container->get(FixtureC363::class));
                    },
                    FixtureC365::class => static function (ContainerInterface $container) {
                        return new FixtureC365($container->get(FixtureC364::class));
                    },
                    FixtureC366::class => static function (ContainerInterface $container) {
                        return new FixtureC366($container->get(FixtureC365::class));
                    },
                    FixtureC367::class => static function (ContainerInterface $container) {
                        return new FixtureC367($container->get(FixtureC366::class));
                    },
                    FixtureC368::class => static function (ContainerInterface $container) {
                        return new FixtureC368($container->get(FixtureC367::class));
                    },
                    FixtureC369::class => static function (ContainerInterface $container) {
                        return new FixtureC369($container->get(FixtureC368::class));
                    },
                    FixtureC370::class => static function (ContainerInterface $container) {
                        return new FixtureC370($container->get(FixtureC369::class));
                    },
                    FixtureC371::class => static function (ContainerInterface $container) {
                        return new FixtureC371($container->get(FixtureC370::class));
                    },
                    FixtureC372::class => static function (ContainerInterface $container) {
                        return new FixtureC372($container->get(FixtureC371::class));
                    },
                    FixtureC373::class => static function (ContainerInterface $container) {
                        return new FixtureC373($container->get(FixtureC372::class));
                    },
                    FixtureC374::class => static function (ContainerInterface $container) {
                        return new FixtureC374($container->get(FixtureC373::class));
                    },
                    FixtureC375::class => static function (ContainerInterface $container) {
                        return new FixtureC375($container->get(FixtureC374::class));
                    },
                    FixtureC376::class => static function (ContainerInterface $container) {
                        return new FixtureC376($container->get(FixtureC375::class));
                    },
                    FixtureC377::class => static function (ContainerInterface $container) {
                        return new FixtureC377($container->get(FixtureC376::class));
                    },
                    FixtureC378::class => static function (ContainerInterface $container) {
                        return new FixtureC378($container->get(FixtureC377::class));
                    },
                    FixtureC379::class => static function (ContainerInterface $container) {
                        return new FixtureC379($container->get(FixtureC378::class));
                    },
                    FixtureC380::class => static function (ContainerInterface $container) {
                        return new FixtureC380($container->get(FixtureC379::class));
                    },
                    FixtureC381::class => static function (ContainerInterface $container) {
                        return new FixtureC381($container->get(FixtureC380::class));
                    },
                    FixtureC382::class => static function (ContainerInterface $container) {
                        return new FixtureC382($container->get(FixtureC381::class));
                    },
                    FixtureC383::class => static function (ContainerInterface $container) {
                        return new FixtureC383($container->get(FixtureC382::class));
                    },
                    FixtureC384::class => static function (ContainerInterface $container) {
                        return new FixtureC384($container->get(FixtureC383::class));
                    },
                    FixtureC385::class => static function (ContainerInterface $container) {
                        return new FixtureC385($container->get(FixtureC384::class));
                    },
                    FixtureC386::class => static function (ContainerInterface $container) {
                        return new FixtureC386($container->get(FixtureC385::class));
                    },
                    FixtureC387::class => static function (ContainerInterface $container) {
                        return new FixtureC387($container->get(FixtureC386::class));
                    },
                    FixtureC388::class => static function (ContainerInterface $container) {
                        return new FixtureC388($container->get(FixtureC387::class));
                    },
                    FixtureC389::class => static function (ContainerInterface $container) {
                        return new FixtureC389($container->get(FixtureC388::class));
                    },
                    FixtureC390::class => static function (ContainerInterface $container) {
                        return new FixtureC390($container->get(FixtureC389::class));
                    },
                    FixtureC391::class => static function (ContainerInterface $container) {
                        return new FixtureC391($container->get(FixtureC390::class));
                    },
                    FixtureC392::class => static function (ContainerInterface $container) {
                        return new FixtureC392($container->get(FixtureC391::class));
                    },
                    FixtureC393::class => static function (ContainerInterface $container) {
                        return new FixtureC393($container->get(FixtureC392::class));
                    },
                    FixtureC394::class => static function (ContainerInterface $container) {
                        return new FixtureC394($container->get(FixtureC393::class));
                    },
                    FixtureC395::class => static function (ContainerInterface $container) {
                        return new FixtureC395($container->get(FixtureC394::class));
                    },
                    FixtureC396::class => static function (ContainerInterface $container) {
                        return new FixtureC396($container->get(FixtureC395::class));
                    },
                    FixtureC397::class => static function (ContainerInterface $container) {
                        return new FixtureC397($container->get(FixtureC396::class));
                    },
                    FixtureC398::class => static function (ContainerInterface $container) {
                        return new FixtureC398($container->get(FixtureC397::class));
                    },
                    FixtureC399::class => static function (ContainerInterface $container) {
                        return new FixtureC399($container->get(FixtureC398::class));
                    },
                    FixtureC400::class => static function (ContainerInterface $container) {
                        return new FixtureC400($container->get(FixtureC399::class));
                    },
                    FixtureC401::class => static function (ContainerInterface $container) {
                        return new FixtureC401($container->get(FixtureC400::class));
                    },
                    FixtureC402::class => static function (ContainerInterface $container) {
                        return new FixtureC402($container->get(FixtureC401::class));
                    },
                    FixtureC403::class => static function (ContainerInterface $container) {
                        return new FixtureC403($container->get(FixtureC402::class));
                    },
                    FixtureC404::class => static function (ContainerInterface $container) {
                        return new FixtureC404($container->get(FixtureC403::class));
                    },
                    FixtureC405::class => static function (ContainerInterface $container) {
                        return new FixtureC405($container->get(FixtureC404::class));
                    },
                    FixtureC406::class => static function (ContainerInterface $container) {
                        return new FixtureC406($container->get(FixtureC405::class));
                    },
                    FixtureC407::class => static function (ContainerInterface $container) {
                        return new FixtureC407($container->get(FixtureC406::class));
                    },
                    FixtureC408::class => static function (ContainerInterface $container) {
                        return new FixtureC408($container->get(FixtureC407::class));
                    },
                    FixtureC409::class => static function (ContainerInterface $container) {
                        return new FixtureC409($container->get(FixtureC408::class));
                    },
                    FixtureC410::class => static function (ContainerInterface $container) {
                        return new FixtureC410($container->get(FixtureC409::class));
                    },
                    FixtureC411::class => static function (ContainerInterface $container) {
                        return new FixtureC411($container->get(FixtureC410::class));
                    },
                    FixtureC412::class => static function (ContainerInterface $container) {
                        return new FixtureC412($container->get(FixtureC411::class));
                    },
                    FixtureC413::class => static function (ContainerInterface $container) {
                        return new FixtureC413($container->get(FixtureC412::class));
                    },
                    FixtureC414::class => static function (ContainerInterface $container) {
                        return new FixtureC414($container->get(FixtureC413::class));
                    },
                    FixtureC415::class => static function (ContainerInterface $container) {
                        return new FixtureC415($container->get(FixtureC414::class));
                    },
                    FixtureC416::class => static function (ContainerInterface $container) {
                        return new FixtureC416($container->get(FixtureC415::class));
                    },
                    FixtureC417::class => static function (ContainerInterface $container) {
                        return new FixtureC417($container->get(FixtureC416::class));
                    },
                    FixtureC418::class => static function (ContainerInterface $container) {
                        return new FixtureC418($container->get(FixtureC417::class));
                    },
                    FixtureC419::class => static function (ContainerInterface $container) {
                        return new FixtureC419($container->get(FixtureC418::class));
                    },
                    FixtureC420::class => static function (ContainerInterface $container) {
                        return new FixtureC420($container->get(FixtureC419::class));
                    },
                    FixtureC421::class => static function (ContainerInterface $container) {
                        return new FixtureC421($container->get(FixtureC420::class));
                    },
                    FixtureC422::class => static function (ContainerInterface $container) {
                        return new FixtureC422($container->get(FixtureC421::class));
                    },
                    FixtureC423::class => static function (ContainerInterface $container) {
                        return new FixtureC423($container->get(FixtureC422::class));
                    },
                    FixtureC424::class => static function (ContainerInterface $container) {
                        return new FixtureC424($container->get(FixtureC423::class));
                    },
                    FixtureC425::class => static function (ContainerInterface $container) {
                        return new FixtureC425($container->get(FixtureC424::class));
                    },
                    FixtureC426::class => static function (ContainerInterface $container) {
                        return new FixtureC426($container->get(FixtureC425::class));
                    },
                    FixtureC427::class => static function (ContainerInterface $container) {
                        return new FixtureC427($container->get(FixtureC426::class));
                    },
                    FixtureC428::class => static function (ContainerInterface $container) {
                        return new FixtureC428($container->get(FixtureC427::class));
                    },
                    FixtureC429::class => static function (ContainerInterface $container) {
                        return new FixtureC429($container->get(FixtureC428::class));
                    },
                    FixtureC430::class => static function (ContainerInterface $container) {
                        return new FixtureC430($container->get(FixtureC429::class));
                    },
                    FixtureC431::class => static function (ContainerInterface $container) {
                        return new FixtureC431($container->get(FixtureC430::class));
                    },
                    FixtureC432::class => static function (ContainerInterface $container) {
                        return new FixtureC432($container->get(FixtureC431::class));
                    },
                    FixtureC433::class => static function (ContainerInterface $container) {
                        return new FixtureC433($container->get(FixtureC432::class));
                    },
                    FixtureC434::class => static function (ContainerInterface $container) {
                        return new FixtureC434($container->get(FixtureC433::class));
                    },
                    FixtureC435::class => static function (ContainerInterface $container) {
                        return new FixtureC435($container->get(FixtureC434::class));
                    },
                    FixtureC436::class => static function (ContainerInterface $container) {
                        return new FixtureC436($container->get(FixtureC435::class));
                    },
                    FixtureC437::class => static function (ContainerInterface $container) {
                        return new FixtureC437($container->get(FixtureC436::class));
                    },
                    FixtureC438::class => static function (ContainerInterface $container) {
                        return new FixtureC438($container->get(FixtureC437::class));
                    },
                    FixtureC439::class => static function (ContainerInterface $container) {
                        return new FixtureC439($container->get(FixtureC438::class));
                    },
                    FixtureC440::class => static function (ContainerInterface $container) {
                        return new FixtureC440($container->get(FixtureC439::class));
                    },
                    FixtureC441::class => static function (ContainerInterface $container) {
                        return new FixtureC441($container->get(FixtureC440::class));
                    },
                    FixtureC442::class => static function (ContainerInterface $container) {
                        return new FixtureC442($container->get(FixtureC441::class));
                    },
                    FixtureC443::class => static function (ContainerInterface $container) {
                        return new FixtureC443($container->get(FixtureC442::class));
                    },
                    FixtureC444::class => static function (ContainerInterface $container) {
                        return new FixtureC444($container->get(FixtureC443::class));
                    },
                    FixtureC445::class => static function (ContainerInterface $container) {
                        return new FixtureC445($container->get(FixtureC444::class));
                    },
                    FixtureC446::class => static function (ContainerInterface $container) {
                        return new FixtureC446($container->get(FixtureC445::class));
                    },
                    FixtureC447::class => static function (ContainerInterface $container) {
                        return new FixtureC447($container->get(FixtureC446::class));
                    },
                    FixtureC448::class => static function (ContainerInterface $container) {
                        return new FixtureC448($container->get(FixtureC447::class));
                    },
                    FixtureC449::class => static function (ContainerInterface $container) {
                        return new FixtureC449($container->get(FixtureC448::class));
                    },
                    FixtureC450::class => static function (ContainerInterface $container) {
                        return new FixtureC450($container->get(FixtureC449::class));
                    },
                    FixtureC451::class => static function (ContainerInterface $container) {
                        return new FixtureC451($container->get(FixtureC450::class));
                    },
                    FixtureC452::class => static function (ContainerInterface $container) {
                        return new FixtureC452($container->get(FixtureC451::class));
                    },
                    FixtureC453::class => static function (ContainerInterface $container) {
                        return new FixtureC453($container->get(FixtureC452::class));
                    },
                    FixtureC454::class => static function (ContainerInterface $container) {
                        return new FixtureC454($container->get(FixtureC453::class));
                    },
                    FixtureC455::class => static function (ContainerInterface $container) {
                        return new FixtureC455($container->get(FixtureC454::class));
                    },
                    FixtureC456::class => static function (ContainerInterface $container) {
                        return new FixtureC456($container->get(FixtureC455::class));
                    },
                    FixtureC457::class => static function (ContainerInterface $container) {
                        return new FixtureC457($container->get(FixtureC456::class));
                    },
                    FixtureC458::class => static function (ContainerInterface $container) {
                        return new FixtureC458($container->get(FixtureC457::class));
                    },
                    FixtureC459::class => static function (ContainerInterface $container) {
                        return new FixtureC459($container->get(FixtureC458::class));
                    },
                    FixtureC460::class => static function (ContainerInterface $container) {
                        return new FixtureC460($container->get(FixtureC459::class));
                    },
                    FixtureC461::class => static function (ContainerInterface $container) {
                        return new FixtureC461($container->get(FixtureC460::class));
                    },
                    FixtureC462::class => static function (ContainerInterface $container) {
                        return new FixtureC462($container->get(FixtureC461::class));
                    },
                    FixtureC463::class => static function (ContainerInterface $container) {
                        return new FixtureC463($container->get(FixtureC462::class));
                    },
                    FixtureC464::class => static function (ContainerInterface $container) {
                        return new FixtureC464($container->get(FixtureC463::class));
                    },
                    FixtureC465::class => static function (ContainerInterface $container) {
                        return new FixtureC465($container->get(FixtureC464::class));
                    },
                    FixtureC466::class => static function (ContainerInterface $container) {
                        return new FixtureC466($container->get(FixtureC465::class));
                    },
                    FixtureC467::class => static function (ContainerInterface $container) {
                        return new FixtureC467($container->get(FixtureC466::class));
                    },
                    FixtureC468::class => static function (ContainerInterface $container) {
                        return new FixtureC468($container->get(FixtureC467::class));
                    },
                    FixtureC469::class => static function (ContainerInterface $container) {
                        return new FixtureC469($container->get(FixtureC468::class));
                    },
                    FixtureC470::class => static function (ContainerInterface $container) {
                        return new FixtureC470($container->get(FixtureC469::class));
                    },
                    FixtureC471::class => static function (ContainerInterface $container) {
                        return new FixtureC471($container->get(FixtureC470::class));
                    },
                    FixtureC472::class => static function (ContainerInterface $container) {
                        return new FixtureC472($container->get(FixtureC471::class));
                    },
                    FixtureC473::class => static function (ContainerInterface $container) {
                        return new FixtureC473($container->get(FixtureC472::class));
                    },
                    FixtureC474::class => static function (ContainerInterface $container) {
                        return new FixtureC474($container->get(FixtureC473::class));
                    },
                    FixtureC475::class => static function (ContainerInterface $container) {
                        return new FixtureC475($container->get(FixtureC474::class));
                    },
                    FixtureC476::class => static function (ContainerInterface $container) {
                        return new FixtureC476($container->get(FixtureC475::class));
                    },
                    FixtureC477::class => static function (ContainerInterface $container) {
                        return new FixtureC477($container->get(FixtureC476::class));
                    },
                    FixtureC478::class => static function (ContainerInterface $container) {
                        return new FixtureC478($container->get(FixtureC477::class));
                    },
                    FixtureC479::class => static function (ContainerInterface $container) {
                        return new FixtureC479($container->get(FixtureC478::class));
                    },
                    FixtureC480::class => static function (ContainerInterface $container) {
                        return new FixtureC480($container->get(FixtureC479::class));
                    },
                    FixtureC481::class => static function (ContainerInterface $container) {
                        return new FixtureC481($container->get(FixtureC480::class));
                    },
                    FixtureC482::class => static function (ContainerInterface $container) {
                        return new FixtureC482($container->get(FixtureC481::class));
                    },
                    FixtureC483::class => static function (ContainerInterface $container) {
                        return new FixtureC483($container->get(FixtureC482::class));
                    },
                    FixtureC484::class => static function (ContainerInterface $container) {
                        return new FixtureC484($container->get(FixtureC483::class));
                    },
                    FixtureC485::class => static function (ContainerInterface $container) {
                        return new FixtureC485($container->get(FixtureC484::class));
                    },
                    FixtureC486::class => static function (ContainerInterface $container) {
                        return new FixtureC486($container->get(FixtureC485::class));
                    },
                    FixtureC487::class => static function (ContainerInterface $container) {
                        return new FixtureC487($container->get(FixtureC486::class));
                    },
                    FixtureC488::class => static function (ContainerInterface $container) {
                        return new FixtureC488($container->get(FixtureC487::class));
                    },
                    FixtureC489::class => static function (ContainerInterface $container) {
                        return new FixtureC489($container->get(FixtureC488::class));
                    },
                    FixtureC490::class => static function (ContainerInterface $container) {
                        return new FixtureC490($container->get(FixtureC489::class));
                    },
                    FixtureC491::class => static function (ContainerInterface $container) {
                        return new FixtureC491($container->get(FixtureC490::class));
                    },
                    FixtureC492::class => static function (ContainerInterface $container) {
                        return new FixtureC492($container->get(FixtureC491::class));
                    },
                    FixtureC493::class => static function (ContainerInterface $container) {
                        return new FixtureC493($container->get(FixtureC492::class));
                    },
                    FixtureC494::class => static function (ContainerInterface $container) {
                        return new FixtureC494($container->get(FixtureC493::class));
                    },
                    FixtureC495::class => static function (ContainerInterface $container) {
                        return new FixtureC495($container->get(FixtureC494::class));
                    },
                    FixtureC496::class => static function (ContainerInterface $container) {
                        return new FixtureC496($container->get(FixtureC495::class));
                    },
                    FixtureC497::class => static function (ContainerInterface $container) {
                        return new FixtureC497($container->get(FixtureC496::class));
                    },
                    FixtureC498::class => static function (ContainerInterface $container) {
                        return new FixtureC498($container->get(FixtureC497::class));
                    },
                    FixtureC499::class => static function (ContainerInterface $container) {
                        return new FixtureC499($container->get(FixtureC498::class));
                    },
                    FixtureC500::class => static function (ContainerInterface $container) {
                        return new FixtureC500($container->get(FixtureC499::class));
                    },
                    FixtureC501::class => static function (ContainerInterface $container) {
                        return new FixtureC501($container->get(FixtureC500::class));
                    },
                    FixtureC502::class => static function (ContainerInterface $container) {
                        return new FixtureC502($container->get(FixtureC501::class));
                    },
                    FixtureC503::class => static function (ContainerInterface $container) {
                        return new FixtureC503($container->get(FixtureC502::class));
                    },
                    FixtureC504::class => static function (ContainerInterface $container) {
                        return new FixtureC504($container->get(FixtureC503::class));
                    },
                    FixtureC505::class => static function (ContainerInterface $container) {
                        return new FixtureC505($container->get(FixtureC504::class));
                    },
                    FixtureC506::class => static function (ContainerInterface $container) {
                        return new FixtureC506($container->get(FixtureC505::class));
                    },
                    FixtureC507::class => static function (ContainerInterface $container) {
                        return new FixtureC507($container->get(FixtureC506::class));
                    },
                    FixtureC508::class => static function (ContainerInterface $container) {
                        return new FixtureC508($container->get(FixtureC507::class));
                    },
                    FixtureC509::class => static function (ContainerInterface $container) {
                        return new FixtureC509($container->get(FixtureC508::class));
                    },
                    FixtureC510::class => static function (ContainerInterface $container) {
                        return new FixtureC510($container->get(FixtureC509::class));
                    },
                    FixtureC511::class => static function (ContainerInterface $container) {
                        return new FixtureC511($container->get(FixtureC510::class));
                    },
                    FixtureC512::class => static function (ContainerInterface $container) {
                        return new FixtureC512($container->get(FixtureC511::class));
                    },
                    FixtureC513::class => static function (ContainerInterface $container) {
                        return new FixtureC513($container->get(FixtureC512::class));
                    },
                    FixtureC514::class => static function (ContainerInterface $container) {
                        return new FixtureC514($container->get(FixtureC513::class));
                    },
                    FixtureC515::class => static function (ContainerInterface $container) {
                        return new FixtureC515($container->get(FixtureC514::class));
                    },
                    FixtureC516::class => static function (ContainerInterface $container) {
                        return new FixtureC516($container->get(FixtureC515::class));
                    },
                    FixtureC517::class => static function (ContainerInterface $container) {
                        return new FixtureC517($container->get(FixtureC516::class));
                    },
                    FixtureC518::class => static function (ContainerInterface $container) {
                        return new FixtureC518($container->get(FixtureC517::class));
                    },
                    FixtureC519::class => static function (ContainerInterface $container) {
                        return new FixtureC519($container->get(FixtureC518::class));
                    },
                    FixtureC520::class => static function (ContainerInterface $container) {
                        return new FixtureC520($container->get(FixtureC519::class));
                    },
                    FixtureC521::class => static function (ContainerInterface $container) {
                        return new FixtureC521($container->get(FixtureC520::class));
                    },
                    FixtureC522::class => static function (ContainerInterface $container) {
                        return new FixtureC522($container->get(FixtureC521::class));
                    },
                    FixtureC523::class => static function (ContainerInterface $container) {
                        return new FixtureC523($container->get(FixtureC522::class));
                    },
                    FixtureC524::class => static function (ContainerInterface $container) {
                        return new FixtureC524($container->get(FixtureC523::class));
                    },
                    FixtureC525::class => static function (ContainerInterface $container) {
                        return new FixtureC525($container->get(FixtureC524::class));
                    },
                    FixtureC526::class => static function (ContainerInterface $container) {
                        return new FixtureC526($container->get(FixtureC525::class));
                    },
                    FixtureC527::class => static function (ContainerInterface $container) {
                        return new FixtureC527($container->get(FixtureC526::class));
                    },
                    FixtureC528::class => static function (ContainerInterface $container) {
                        return new FixtureC528($container->get(FixtureC527::class));
                    },
                    FixtureC529::class => static function (ContainerInterface $container) {
                        return new FixtureC529($container->get(FixtureC528::class));
                    },
                    FixtureC530::class => static function (ContainerInterface $container) {
                        return new FixtureC530($container->get(FixtureC529::class));
                    },
                    FixtureC531::class => static function (ContainerInterface $container) {
                        return new FixtureC531($container->get(FixtureC530::class));
                    },
                    FixtureC532::class => static function (ContainerInterface $container) {
                        return new FixtureC532($container->get(FixtureC531::class));
                    },
                    FixtureC533::class => static function (ContainerInterface $container) {
                        return new FixtureC533($container->get(FixtureC532::class));
                    },
                    FixtureC534::class => static function (ContainerInterface $container) {
                        return new FixtureC534($container->get(FixtureC533::class));
                    },
                    FixtureC535::class => static function (ContainerInterface $container) {
                        return new FixtureC535($container->get(FixtureC534::class));
                    },
                    FixtureC536::class => static function (ContainerInterface $container) {
                        return new FixtureC536($container->get(FixtureC535::class));
                    },
                    FixtureC537::class => static function (ContainerInterface $container) {
                        return new FixtureC537($container->get(FixtureC536::class));
                    },
                    FixtureC538::class => static function (ContainerInterface $container) {
                        return new FixtureC538($container->get(FixtureC537::class));
                    },
                    FixtureC539::class => static function (ContainerInterface $container) {
                        return new FixtureC539($container->get(FixtureC538::class));
                    },
                    FixtureC540::class => static function (ContainerInterface $container) {
                        return new FixtureC540($container->get(FixtureC539::class));
                    },
                    FixtureC541::class => static function (ContainerInterface $container) {
                        return new FixtureC541($container->get(FixtureC540::class));
                    },
                    FixtureC542::class => static function (ContainerInterface $container) {
                        return new FixtureC542($container->get(FixtureC541::class));
                    },
                    FixtureC543::class => static function (ContainerInterface $container) {
                        return new FixtureC543($container->get(FixtureC542::class));
                    },
                    FixtureC544::class => static function (ContainerInterface $container) {
                        return new FixtureC544($container->get(FixtureC543::class));
                    },
                    FixtureC545::class => static function (ContainerInterface $container) {
                        return new FixtureC545($container->get(FixtureC544::class));
                    },
                    FixtureC546::class => static function (ContainerInterface $container) {
                        return new FixtureC546($container->get(FixtureC545::class));
                    },
                    FixtureC547::class => static function (ContainerInterface $container) {
                        return new FixtureC547($container->get(FixtureC546::class));
                    },
                    FixtureC548::class => static function (ContainerInterface $container) {
                        return new FixtureC548($container->get(FixtureC547::class));
                    },
                    FixtureC549::class => static function (ContainerInterface $container) {
                        return new FixtureC549($container->get(FixtureC548::class));
                    },
                    FixtureC550::class => static function (ContainerInterface $container) {
                        return new FixtureC550($container->get(FixtureC549::class));
                    },
                    FixtureC551::class => static function (ContainerInterface $container) {
                        return new FixtureC551($container->get(FixtureC550::class));
                    },
                    FixtureC552::class => static function (ContainerInterface $container) {
                        return new FixtureC552($container->get(FixtureC551::class));
                    },
                    FixtureC553::class => static function (ContainerInterface $container) {
                        return new FixtureC553($container->get(FixtureC552::class));
                    },
                    FixtureC554::class => static function (ContainerInterface $container) {
                        return new FixtureC554($container->get(FixtureC553::class));
                    },
                    FixtureC555::class => static function (ContainerInterface $container) {
                        return new FixtureC555($container->get(FixtureC554::class));
                    },
                    FixtureC556::class => static function (ContainerInterface $container) {
                        return new FixtureC556($container->get(FixtureC555::class));
                    },
                    FixtureC557::class => static function (ContainerInterface $container) {
                        return new FixtureC557($container->get(FixtureC556::class));
                    },
                    FixtureC558::class => static function (ContainerInterface $container) {
                        return new FixtureC558($container->get(FixtureC557::class));
                    },
                    FixtureC559::class => static function (ContainerInterface $container) {
                        return new FixtureC559($container->get(FixtureC558::class));
                    },
                    FixtureC560::class => static function (ContainerInterface $container) {
                        return new FixtureC560($container->get(FixtureC559::class));
                    },
                    FixtureC561::class => static function (ContainerInterface $container) {
                        return new FixtureC561($container->get(FixtureC560::class));
                    },
                    FixtureC562::class => static function (ContainerInterface $container) {
                        return new FixtureC562($container->get(FixtureC561::class));
                    },
                    FixtureC563::class => static function (ContainerInterface $container) {
                        return new FixtureC563($container->get(FixtureC562::class));
                    },
                    FixtureC564::class => static function (ContainerInterface $container) {
                        return new FixtureC564($container->get(FixtureC563::class));
                    },
                    FixtureC565::class => static function (ContainerInterface $container) {
                        return new FixtureC565($container->get(FixtureC564::class));
                    },
                    FixtureC566::class => static function (ContainerInterface $container) {
                        return new FixtureC566($container->get(FixtureC565::class));
                    },
                    FixtureC567::class => static function (ContainerInterface $container) {
                        return new FixtureC567($container->get(FixtureC566::class));
                    },
                    FixtureC568::class => static function (ContainerInterface $container) {
                        return new FixtureC568($container->get(FixtureC567::class));
                    },
                    FixtureC569::class => static function (ContainerInterface $container) {
                        return new FixtureC569($container->get(FixtureC568::class));
                    },
                    FixtureC570::class => static function (ContainerInterface $container) {
                        return new FixtureC570($container->get(FixtureC569::class));
                    },
                    FixtureC571::class => static function (ContainerInterface $container) {
                        return new FixtureC571($container->get(FixtureC570::class));
                    },
                    FixtureC572::class => static function (ContainerInterface $container) {
                        return new FixtureC572($container->get(FixtureC571::class));
                    },
                    FixtureC573::class => static function (ContainerInterface $container) {
                        return new FixtureC573($container->get(FixtureC572::class));
                    },
                    FixtureC574::class => static function (ContainerInterface $container) {
                        return new FixtureC574($container->get(FixtureC573::class));
                    },
                    FixtureC575::class => static function (ContainerInterface $container) {
                        return new FixtureC575($container->get(FixtureC574::class));
                    },
                    FixtureC576::class => static function (ContainerInterface $container) {
                        return new FixtureC576($container->get(FixtureC575::class));
                    },
                    FixtureC577::class => static function (ContainerInterface $container) {
                        return new FixtureC577($container->get(FixtureC576::class));
                    },
                    FixtureC578::class => static function (ContainerInterface $container) {
                        return new FixtureC578($container->get(FixtureC577::class));
                    },
                    FixtureC579::class => static function (ContainerInterface $container) {
                        return new FixtureC579($container->get(FixtureC578::class));
                    },
                    FixtureC580::class => static function (ContainerInterface $container) {
                        return new FixtureC580($container->get(FixtureC579::class));
                    },
                    FixtureC581::class => static function (ContainerInterface $container) {
                        return new FixtureC581($container->get(FixtureC580::class));
                    },
                    FixtureC582::class => static function (ContainerInterface $container) {
                        return new FixtureC582($container->get(FixtureC581::class));
                    },
                    FixtureC583::class => static function (ContainerInterface $container) {
                        return new FixtureC583($container->get(FixtureC582::class));
                    },
                    FixtureC584::class => static function (ContainerInterface $container) {
                        return new FixtureC584($container->get(FixtureC583::class));
                    },
                    FixtureC585::class => static function (ContainerInterface $container) {
                        return new FixtureC585($container->get(FixtureC584::class));
                    },
                    FixtureC586::class => static function (ContainerInterface $container) {
                        return new FixtureC586($container->get(FixtureC585::class));
                    },
                    FixtureC587::class => static function (ContainerInterface $container) {
                        return new FixtureC587($container->get(FixtureC586::class));
                    },
                    FixtureC588::class => static function (ContainerInterface $container) {
                        return new FixtureC588($container->get(FixtureC587::class));
                    },
                    FixtureC589::class => static function (ContainerInterface $container) {
                        return new FixtureC589($container->get(FixtureC588::class));
                    },
                    FixtureC590::class => static function (ContainerInterface $container) {
                        return new FixtureC590($container->get(FixtureC589::class));
                    },
                    FixtureC591::class => static function (ContainerInterface $container) {
                        return new FixtureC591($container->get(FixtureC590::class));
                    },
                    FixtureC592::class => static function (ContainerInterface $container) {
                        return new FixtureC592($container->get(FixtureC591::class));
                    },
                    FixtureC593::class => static function (ContainerInterface $container) {
                        return new FixtureC593($container->get(FixtureC592::class));
                    },
                    FixtureC594::class => static function (ContainerInterface $container) {
                        return new FixtureC594($container->get(FixtureC593::class));
                    },
                    FixtureC595::class => static function (ContainerInterface $container) {
                        return new FixtureC595($container->get(FixtureC594::class));
                    },
                    FixtureC596::class => static function (ContainerInterface $container) {
                        return new FixtureC596($container->get(FixtureC595::class));
                    },
                    FixtureC597::class => static function (ContainerInterface $container) {
                        return new FixtureC597($container->get(FixtureC596::class));
                    },
                    FixtureC598::class => static function (ContainerInterface $container) {
                        return new FixtureC598($container->get(FixtureC597::class));
                    },
                    FixtureC599::class => static function (ContainerInterface $container) {
                        return new FixtureC599($container->get(FixtureC598::class));
                    },
                    FixtureC600::class => static function (ContainerInterface $container) {
                        return new FixtureC600($container->get(FixtureC599::class));
                    },
                    FixtureC601::class => static function (ContainerInterface $container) {
                        return new FixtureC601($container->get(FixtureC600::class));
                    },
                    FixtureC602::class => static function (ContainerInterface $container) {
                        return new FixtureC602($container->get(FixtureC601::class));
                    },
                    FixtureC603::class => static function (ContainerInterface $container) {
                        return new FixtureC603($container->get(FixtureC602::class));
                    },
                    FixtureC604::class => static function (ContainerInterface $container) {
                        return new FixtureC604($container->get(FixtureC603::class));
                    },
                    FixtureC605::class => static function (ContainerInterface $container) {
                        return new FixtureC605($container->get(FixtureC604::class));
                    },
                    FixtureC606::class => static function (ContainerInterface $container) {
                        return new FixtureC606($container->get(FixtureC605::class));
                    },
                    FixtureC607::class => static function (ContainerInterface $container) {
                        return new FixtureC607($container->get(FixtureC606::class));
                    },
                    FixtureC608::class => static function (ContainerInterface $container) {
                        return new FixtureC608($container->get(FixtureC607::class));
                    },
                    FixtureC609::class => static function (ContainerInterface $container) {
                        return new FixtureC609($container->get(FixtureC608::class));
                    },
                    FixtureC610::class => static function (ContainerInterface $container) {
                        return new FixtureC610($container->get(FixtureC609::class));
                    },
                    FixtureC611::class => static function (ContainerInterface $container) {
                        return new FixtureC611($container->get(FixtureC610::class));
                    },
                    FixtureC612::class => static function (ContainerInterface $container) {
                        return new FixtureC612($container->get(FixtureC611::class));
                    },
                    FixtureC613::class => static function (ContainerInterface $container) {
                        return new FixtureC613($container->get(FixtureC612::class));
                    },
                    FixtureC614::class => static function (ContainerInterface $container) {
                        return new FixtureC614($container->get(FixtureC613::class));
                    },
                    FixtureC615::class => static function (ContainerInterface $container) {
                        return new FixtureC615($container->get(FixtureC614::class));
                    },
                    FixtureC616::class => static function (ContainerInterface $container) {
                        return new FixtureC616($container->get(FixtureC615::class));
                    },
                    FixtureC617::class => static function (ContainerInterface $container) {
                        return new FixtureC617($container->get(FixtureC616::class));
                    },
                    FixtureC618::class => static function (ContainerInterface $container) {
                        return new FixtureC618($container->get(FixtureC617::class));
                    },
                    FixtureC619::class => static function (ContainerInterface $container) {
                        return new FixtureC619($container->get(FixtureC618::class));
                    },
                    FixtureC620::class => static function (ContainerInterface $container) {
                        return new FixtureC620($container->get(FixtureC619::class));
                    },
                    FixtureC621::class => static function (ContainerInterface $container) {
                        return new FixtureC621($container->get(FixtureC620::class));
                    },
                    FixtureC622::class => static function (ContainerInterface $container) {
                        return new FixtureC622($container->get(FixtureC621::class));
                    },
                    FixtureC623::class => static function (ContainerInterface $container) {
                        return new FixtureC623($container->get(FixtureC622::class));
                    },
                    FixtureC624::class => static function (ContainerInterface $container) {
                        return new FixtureC624($container->get(FixtureC623::class));
                    },
                    FixtureC625::class => static function (ContainerInterface $container) {
                        return new FixtureC625($container->get(FixtureC624::class));
                    },
                    FixtureC626::class => static function (ContainerInterface $container) {
                        return new FixtureC626($container->get(FixtureC625::class));
                    },
                    FixtureC627::class => static function (ContainerInterface $container) {
                        return new FixtureC627($container->get(FixtureC626::class));
                    },
                    FixtureC628::class => static function (ContainerInterface $container) {
                        return new FixtureC628($container->get(FixtureC627::class));
                    },
                    FixtureC629::class => static function (ContainerInterface $container) {
                        return new FixtureC629($container->get(FixtureC628::class));
                    },
                    FixtureC630::class => static function (ContainerInterface $container) {
                        return new FixtureC630($container->get(FixtureC629::class));
                    },
                    FixtureC631::class => static function (ContainerInterface $container) {
                        return new FixtureC631($container->get(FixtureC630::class));
                    },
                    FixtureC632::class => static function (ContainerInterface $container) {
                        return new FixtureC632($container->get(FixtureC631::class));
                    },
                    FixtureC633::class => static function (ContainerInterface $container) {
                        return new FixtureC633($container->get(FixtureC632::class));
                    },
                    FixtureC634::class => static function (ContainerInterface $container) {
                        return new FixtureC634($container->get(FixtureC633::class));
                    },
                    FixtureC635::class => static function (ContainerInterface $container) {
                        return new FixtureC635($container->get(FixtureC634::class));
                    },
                    FixtureC636::class => static function (ContainerInterface $container) {
                        return new FixtureC636($container->get(FixtureC635::class));
                    },
                    FixtureC637::class => static function (ContainerInterface $container) {
                        return new FixtureC637($container->get(FixtureC636::class));
                    },
                    FixtureC638::class => static function (ContainerInterface $container) {
                        return new FixtureC638($container->get(FixtureC637::class));
                    },
                    FixtureC639::class => static function (ContainerInterface $container) {
                        return new FixtureC639($container->get(FixtureC638::class));
                    },
                    FixtureC640::class => static function (ContainerInterface $container) {
                        return new FixtureC640($container->get(FixtureC639::class));
                    },
                    FixtureC641::class => static function (ContainerInterface $container) {
                        return new FixtureC641($container->get(FixtureC640::class));
                    },
                    FixtureC642::class => static function (ContainerInterface $container) {
                        return new FixtureC642($container->get(FixtureC641::class));
                    },
                    FixtureC643::class => static function (ContainerInterface $container) {
                        return new FixtureC643($container->get(FixtureC642::class));
                    },
                    FixtureC644::class => static function (ContainerInterface $container) {
                        return new FixtureC644($container->get(FixtureC643::class));
                    },
                    FixtureC645::class => static function (ContainerInterface $container) {
                        return new FixtureC645($container->get(FixtureC644::class));
                    },
                    FixtureC646::class => static function (ContainerInterface $container) {
                        return new FixtureC646($container->get(FixtureC645::class));
                    },
                    FixtureC647::class => static function (ContainerInterface $container) {
                        return new FixtureC647($container->get(FixtureC646::class));
                    },
                    FixtureC648::class => static function (ContainerInterface $container) {
                        return new FixtureC648($container->get(FixtureC647::class));
                    },
                    FixtureC649::class => static function (ContainerInterface $container) {
                        return new FixtureC649($container->get(FixtureC648::class));
                    },
                    FixtureC650::class => static function (ContainerInterface $container) {
                        return new FixtureC650($container->get(FixtureC649::class));
                    },
                    FixtureC651::class => static function (ContainerInterface $container) {
                        return new FixtureC651($container->get(FixtureC650::class));
                    },
                    FixtureC652::class => static function (ContainerInterface $container) {
                        return new FixtureC652($container->get(FixtureC651::class));
                    },
                    FixtureC653::class => static function (ContainerInterface $container) {
                        return new FixtureC653($container->get(FixtureC652::class));
                    },
                    FixtureC654::class => static function (ContainerInterface $container) {
                        return new FixtureC654($container->get(FixtureC653::class));
                    },
                    FixtureC655::class => static function (ContainerInterface $container) {
                        return new FixtureC655($container->get(FixtureC654::class));
                    },
                    FixtureC656::class => static function (ContainerInterface $container) {
                        return new FixtureC656($container->get(FixtureC655::class));
                    },
                    FixtureC657::class => static function (ContainerInterface $container) {
                        return new FixtureC657($container->get(FixtureC656::class));
                    },
                    FixtureC658::class => static function (ContainerInterface $container) {
                        return new FixtureC658($container->get(FixtureC657::class));
                    },
                    FixtureC659::class => static function (ContainerInterface $container) {
                        return new FixtureC659($container->get(FixtureC658::class));
                    },
                    FixtureC660::class => static function (ContainerInterface $container) {
                        return new FixtureC660($container->get(FixtureC659::class));
                    },
                    FixtureC661::class => static function (ContainerInterface $container) {
                        return new FixtureC661($container->get(FixtureC660::class));
                    },
                    FixtureC662::class => static function (ContainerInterface $container) {
                        return new FixtureC662($container->get(FixtureC661::class));
                    },
                    FixtureC663::class => static function (ContainerInterface $container) {
                        return new FixtureC663($container->get(FixtureC662::class));
                    },
                    FixtureC664::class => static function (ContainerInterface $container) {
                        return new FixtureC664($container->get(FixtureC663::class));
                    },
                    FixtureC665::class => static function (ContainerInterface $container) {
                        return new FixtureC665($container->get(FixtureC664::class));
                    },
                    FixtureC666::class => static function (ContainerInterface $container) {
                        return new FixtureC666($container->get(FixtureC665::class));
                    },
                    FixtureC667::class => static function (ContainerInterface $container) {
                        return new FixtureC667($container->get(FixtureC666::class));
                    },
                    FixtureC668::class => static function (ContainerInterface $container) {
                        return new FixtureC668($container->get(FixtureC667::class));
                    },
                    FixtureC669::class => static function (ContainerInterface $container) {
                        return new FixtureC669($container->get(FixtureC668::class));
                    },
                    FixtureC670::class => static function (ContainerInterface $container) {
                        return new FixtureC670($container->get(FixtureC669::class));
                    },
                    FixtureC671::class => static function (ContainerInterface $container) {
                        return new FixtureC671($container->get(FixtureC670::class));
                    },
                    FixtureC672::class => static function (ContainerInterface $container) {
                        return new FixtureC672($container->get(FixtureC671::class));
                    },
                    FixtureC673::class => static function (ContainerInterface $container) {
                        return new FixtureC673($container->get(FixtureC672::class));
                    },
                    FixtureC674::class => static function (ContainerInterface $container) {
                        return new FixtureC674($container->get(FixtureC673::class));
                    },
                    FixtureC675::class => static function (ContainerInterface $container) {
                        return new FixtureC675($container->get(FixtureC674::class));
                    },
                    FixtureC676::class => static function (ContainerInterface $container) {
                        return new FixtureC676($container->get(FixtureC675::class));
                    },
                    FixtureC677::class => static function (ContainerInterface $container) {
                        return new FixtureC677($container->get(FixtureC676::class));
                    },
                    FixtureC678::class => static function (ContainerInterface $container) {
                        return new FixtureC678($container->get(FixtureC677::class));
                    },
                    FixtureC679::class => static function (ContainerInterface $container) {
                        return new FixtureC679($container->get(FixtureC678::class));
                    },
                    FixtureC680::class => static function (ContainerInterface $container) {
                        return new FixtureC680($container->get(FixtureC679::class));
                    },
                    FixtureC681::class => static function (ContainerInterface $container) {
                        return new FixtureC681($container->get(FixtureC680::class));
                    },
                    FixtureC682::class => static function (ContainerInterface $container) {
                        return new FixtureC682($container->get(FixtureC681::class));
                    },
                    FixtureC683::class => static function (ContainerInterface $container) {
                        return new FixtureC683($container->get(FixtureC682::class));
                    },
                    FixtureC684::class => static function (ContainerInterface $container) {
                        return new FixtureC684($container->get(FixtureC683::class));
                    },
                    FixtureC685::class => static function (ContainerInterface $container) {
                        return new FixtureC685($container->get(FixtureC684::class));
                    },
                    FixtureC686::class => static function (ContainerInterface $container) {
                        return new FixtureC686($container->get(FixtureC685::class));
                    },
                    FixtureC687::class => static function (ContainerInterface $container) {
                        return new FixtureC687($container->get(FixtureC686::class));
                    },
                    FixtureC688::class => static function (ContainerInterface $container) {
                        return new FixtureC688($container->get(FixtureC687::class));
                    },
                    FixtureC689::class => static function (ContainerInterface $container) {
                        return new FixtureC689($container->get(FixtureC688::class));
                    },
                    FixtureC690::class => static function (ContainerInterface $container) {
                        return new FixtureC690($container->get(FixtureC689::class));
                    },
                    FixtureC691::class => static function (ContainerInterface $container) {
                        return new FixtureC691($container->get(FixtureC690::class));
                    },
                    FixtureC692::class => static function (ContainerInterface $container) {
                        return new FixtureC692($container->get(FixtureC691::class));
                    },
                    FixtureC693::class => static function (ContainerInterface $container) {
                        return new FixtureC693($container->get(FixtureC692::class));
                    },
                    FixtureC694::class => static function (ContainerInterface $container) {
                        return new FixtureC694($container->get(FixtureC693::class));
                    },
                    FixtureC695::class => static function (ContainerInterface $container) {
                        return new FixtureC695($container->get(FixtureC694::class));
                    },
                    FixtureC696::class => static function (ContainerInterface $container) {
                        return new FixtureC696($container->get(FixtureC695::class));
                    },
                    FixtureC697::class => static function (ContainerInterface $container) {
                        return new FixtureC697($container->get(FixtureC696::class));
                    },
                    FixtureC698::class => static function (ContainerInterface $container) {
                        return new FixtureC698($container->get(FixtureC697::class));
                    },
                    FixtureC699::class => static function (ContainerInterface $container) {
                        return new FixtureC699($container->get(FixtureC698::class));
                    },
                    FixtureC700::class => static function (ContainerInterface $container) {
                        return new FixtureC700($container->get(FixtureC699::class));
                    },
                    FixtureC701::class => static function (ContainerInterface $container) {
                        return new FixtureC701($container->get(FixtureC700::class));
                    },
                    FixtureC702::class => static function (ContainerInterface $container) {
                        return new FixtureC702($container->get(FixtureC701::class));
                    },
                    FixtureC703::class => static function (ContainerInterface $container) {
                        return new FixtureC703($container->get(FixtureC702::class));
                    },
                    FixtureC704::class => static function (ContainerInterface $container) {
                        return new FixtureC704($container->get(FixtureC703::class));
                    },
                    FixtureC705::class => static function (ContainerInterface $container) {
                        return new FixtureC705($container->get(FixtureC704::class));
                    },
                    FixtureC706::class => static function (ContainerInterface $container) {
                        return new FixtureC706($container->get(FixtureC705::class));
                    },
                    FixtureC707::class => static function (ContainerInterface $container) {
                        return new FixtureC707($container->get(FixtureC706::class));
                    },
                    FixtureC708::class => static function (ContainerInterface $container) {
                        return new FixtureC708($container->get(FixtureC707::class));
                    },
                    FixtureC709::class => static function (ContainerInterface $container) {
                        return new FixtureC709($container->get(FixtureC708::class));
                    },
                    FixtureC710::class => static function (ContainerInterface $container) {
                        return new FixtureC710($container->get(FixtureC709::class));
                    },
                    FixtureC711::class => static function (ContainerInterface $container) {
                        return new FixtureC711($container->get(FixtureC710::class));
                    },
                    FixtureC712::class => static function (ContainerInterface $container) {
                        return new FixtureC712($container->get(FixtureC711::class));
                    },
                    FixtureC713::class => static function (ContainerInterface $container) {
                        return new FixtureC713($container->get(FixtureC712::class));
                    },
                    FixtureC714::class => static function (ContainerInterface $container) {
                        return new FixtureC714($container->get(FixtureC713::class));
                    },
                    FixtureC715::class => static function (ContainerInterface $container) {
                        return new FixtureC715($container->get(FixtureC714::class));
                    },
                    FixtureC716::class => static function (ContainerInterface $container) {
                        return new FixtureC716($container->get(FixtureC715::class));
                    },
                    FixtureC717::class => static function (ContainerInterface $container) {
                        return new FixtureC717($container->get(FixtureC716::class));
                    },
                    FixtureC718::class => static function (ContainerInterface $container) {
                        return new FixtureC718($container->get(FixtureC717::class));
                    },
                    FixtureC719::class => static function (ContainerInterface $container) {
                        return new FixtureC719($container->get(FixtureC718::class));
                    },
                    FixtureC720::class => static function (ContainerInterface $container) {
                        return new FixtureC720($container->get(FixtureC719::class));
                    },
                    FixtureC721::class => static function (ContainerInterface $container) {
                        return new FixtureC721($container->get(FixtureC720::class));
                    },
                    FixtureC722::class => static function (ContainerInterface $container) {
                        return new FixtureC722($container->get(FixtureC721::class));
                    },
                    FixtureC723::class => static function (ContainerInterface $container) {
                        return new FixtureC723($container->get(FixtureC722::class));
                    },
                    FixtureC724::class => static function (ContainerInterface $container) {
                        return new FixtureC724($container->get(FixtureC723::class));
                    },
                    FixtureC725::class => static function (ContainerInterface $container) {
                        return new FixtureC725($container->get(FixtureC724::class));
                    },
                    FixtureC726::class => static function (ContainerInterface $container) {
                        return new FixtureC726($container->get(FixtureC725::class));
                    },
                    FixtureC727::class => static function (ContainerInterface $container) {
                        return new FixtureC727($container->get(FixtureC726::class));
                    },
                    FixtureC728::class => static function (ContainerInterface $container) {
                        return new FixtureC728($container->get(FixtureC727::class));
                    },
                    FixtureC729::class => static function (ContainerInterface $container) {
                        return new FixtureC729($container->get(FixtureC728::class));
                    },
                    FixtureC730::class => static function (ContainerInterface $container) {
                        return new FixtureC730($container->get(FixtureC729::class));
                    },
                    FixtureC731::class => static function (ContainerInterface $container) {
                        return new FixtureC731($container->get(FixtureC730::class));
                    },
                    FixtureC732::class => static function (ContainerInterface $container) {
                        return new FixtureC732($container->get(FixtureC731::class));
                    },
                    FixtureC733::class => static function (ContainerInterface $container) {
                        return new FixtureC733($container->get(FixtureC732::class));
                    },
                    FixtureC734::class => static function (ContainerInterface $container) {
                        return new FixtureC734($container->get(FixtureC733::class));
                    },
                    FixtureC735::class => static function (ContainerInterface $container) {
                        return new FixtureC735($container->get(FixtureC734::class));
                    },
                    FixtureC736::class => static function (ContainerInterface $container) {
                        return new FixtureC736($container->get(FixtureC735::class));
                    },
                    FixtureC737::class => static function (ContainerInterface $container) {
                        return new FixtureC737($container->get(FixtureC736::class));
                    },
                    FixtureC738::class => static function (ContainerInterface $container) {
                        return new FixtureC738($container->get(FixtureC737::class));
                    },
                    FixtureC739::class => static function (ContainerInterface $container) {
                        return new FixtureC739($container->get(FixtureC738::class));
                    },
                    FixtureC740::class => static function (ContainerInterface $container) {
                        return new FixtureC740($container->get(FixtureC739::class));
                    },
                    FixtureC741::class => static function (ContainerInterface $container) {
                        return new FixtureC741($container->get(FixtureC740::class));
                    },
                    FixtureC742::class => static function (ContainerInterface $container) {
                        return new FixtureC742($container->get(FixtureC741::class));
                    },
                    FixtureC743::class => static function (ContainerInterface $container) {
                        return new FixtureC743($container->get(FixtureC742::class));
                    },
                    FixtureC744::class => static function (ContainerInterface $container) {
                        return new FixtureC744($container->get(FixtureC743::class));
                    },
                    FixtureC745::class => static function (ContainerInterface $container) {
                        return new FixtureC745($container->get(FixtureC744::class));
                    },
                    FixtureC746::class => static function (ContainerInterface $container) {
                        return new FixtureC746($container->get(FixtureC745::class));
                    },
                    FixtureC747::class => static function (ContainerInterface $container) {
                        return new FixtureC747($container->get(FixtureC746::class));
                    },
                    FixtureC748::class => static function (ContainerInterface $container) {
                        return new FixtureC748($container->get(FixtureC747::class));
                    },
                    FixtureC749::class => static function (ContainerInterface $container) {
                        return new FixtureC749($container->get(FixtureC748::class));
                    },
                    FixtureC750::class => static function (ContainerInterface $container) {
                        return new FixtureC750($container->get(FixtureC749::class));
                    },
                    FixtureC751::class => static function (ContainerInterface $container) {
                        return new FixtureC751($container->get(FixtureC750::class));
                    },
                    FixtureC752::class => static function (ContainerInterface $container) {
                        return new FixtureC752($container->get(FixtureC751::class));
                    },
                    FixtureC753::class => static function (ContainerInterface $container) {
                        return new FixtureC753($container->get(FixtureC752::class));
                    },
                    FixtureC754::class => static function (ContainerInterface $container) {
                        return new FixtureC754($container->get(FixtureC753::class));
                    },
                    FixtureC755::class => static function (ContainerInterface $container) {
                        return new FixtureC755($container->get(FixtureC754::class));
                    },
                    FixtureC756::class => static function (ContainerInterface $container) {
                        return new FixtureC756($container->get(FixtureC755::class));
                    },
                    FixtureC757::class => static function (ContainerInterface $container) {
                        return new FixtureC757($container->get(FixtureC756::class));
                    },
                    FixtureC758::class => static function (ContainerInterface $container) {
                        return new FixtureC758($container->get(FixtureC757::class));
                    },
                    FixtureC759::class => static function (ContainerInterface $container) {
                        return new FixtureC759($container->get(FixtureC758::class));
                    },
                    FixtureC760::class => static function (ContainerInterface $container) {
                        return new FixtureC760($container->get(FixtureC759::class));
                    },
                    FixtureC761::class => static function (ContainerInterface $container) {
                        return new FixtureC761($container->get(FixtureC760::class));
                    },
                    FixtureC762::class => static function (ContainerInterface $container) {
                        return new FixtureC762($container->get(FixtureC761::class));
                    },
                    FixtureC763::class => static function (ContainerInterface $container) {
                        return new FixtureC763($container->get(FixtureC762::class));
                    },
                    FixtureC764::class => static function (ContainerInterface $container) {
                        return new FixtureC764($container->get(FixtureC763::class));
                    },
                    FixtureC765::class => static function (ContainerInterface $container) {
                        return new FixtureC765($container->get(FixtureC764::class));
                    },
                    FixtureC766::class => static function (ContainerInterface $container) {
                        return new FixtureC766($container->get(FixtureC765::class));
                    },
                    FixtureC767::class => static function (ContainerInterface $container) {
                        return new FixtureC767($container->get(FixtureC766::class));
                    },
                    FixtureC768::class => static function (ContainerInterface $container) {
                        return new FixtureC768($container->get(FixtureC767::class));
                    },
                    FixtureC769::class => static function (ContainerInterface $container) {
                        return new FixtureC769($container->get(FixtureC768::class));
                    },
                    FixtureC770::class => static function (ContainerInterface $container) {
                        return new FixtureC770($container->get(FixtureC769::class));
                    },
                    FixtureC771::class => static function (ContainerInterface $container) {
                        return new FixtureC771($container->get(FixtureC770::class));
                    },
                    FixtureC772::class => static function (ContainerInterface $container) {
                        return new FixtureC772($container->get(FixtureC771::class));
                    },
                    FixtureC773::class => static function (ContainerInterface $container) {
                        return new FixtureC773($container->get(FixtureC772::class));
                    },
                    FixtureC774::class => static function (ContainerInterface $container) {
                        return new FixtureC774($container->get(FixtureC773::class));
                    },
                    FixtureC775::class => static function (ContainerInterface $container) {
                        return new FixtureC775($container->get(FixtureC774::class));
                    },
                    FixtureC776::class => static function (ContainerInterface $container) {
                        return new FixtureC776($container->get(FixtureC775::class));
                    },
                    FixtureC777::class => static function (ContainerInterface $container) {
                        return new FixtureC777($container->get(FixtureC776::class));
                    },
                    FixtureC778::class => static function (ContainerInterface $container) {
                        return new FixtureC778($container->get(FixtureC777::class));
                    },
                    FixtureC779::class => static function (ContainerInterface $container) {
                        return new FixtureC779($container->get(FixtureC778::class));
                    },
                    FixtureC780::class => static function (ContainerInterface $container) {
                        return new FixtureC780($container->get(FixtureC779::class));
                    },
                    FixtureC781::class => static function (ContainerInterface $container) {
                        return new FixtureC781($container->get(FixtureC780::class));
                    },
                    FixtureC782::class => static function (ContainerInterface $container) {
                        return new FixtureC782($container->get(FixtureC781::class));
                    },
                    FixtureC783::class => static function (ContainerInterface $container) {
                        return new FixtureC783($container->get(FixtureC782::class));
                    },
                    FixtureC784::class => static function (ContainerInterface $container) {
                        return new FixtureC784($container->get(FixtureC783::class));
                    },
                    FixtureC785::class => static function (ContainerInterface $container) {
                        return new FixtureC785($container->get(FixtureC784::class));
                    },
                    FixtureC786::class => static function (ContainerInterface $container) {
                        return new FixtureC786($container->get(FixtureC785::class));
                    },
                    FixtureC787::class => static function (ContainerInterface $container) {
                        return new FixtureC787($container->get(FixtureC786::class));
                    },
                    FixtureC788::class => static function (ContainerInterface $container) {
                        return new FixtureC788($container->get(FixtureC787::class));
                    },
                    FixtureC789::class => static function (ContainerInterface $container) {
                        return new FixtureC789($container->get(FixtureC788::class));
                    },
                    FixtureC790::class => static function (ContainerInterface $container) {
                        return new FixtureC790($container->get(FixtureC789::class));
                    },
                    FixtureC791::class => static function (ContainerInterface $container) {
                        return new FixtureC791($container->get(FixtureC790::class));
                    },
                    FixtureC792::class => static function (ContainerInterface $container) {
                        return new FixtureC792($container->get(FixtureC791::class));
                    },
                    FixtureC793::class => static function (ContainerInterface $container) {
                        return new FixtureC793($container->get(FixtureC792::class));
                    },
                    FixtureC794::class => static function (ContainerInterface $container) {
                        return new FixtureC794($container->get(FixtureC793::class));
                    },
                    FixtureC795::class => static function (ContainerInterface $container) {
                        return new FixtureC795($container->get(FixtureC794::class));
                    },
                    FixtureC796::class => static function (ContainerInterface $container) {
                        return new FixtureC796($container->get(FixtureC795::class));
                    },
                    FixtureC797::class => static function (ContainerInterface $container) {
                        return new FixtureC797($container->get(FixtureC796::class));
                    },
                    FixtureC798::class => static function (ContainerInterface $container) {
                        return new FixtureC798($container->get(FixtureC797::class));
                    },
                    FixtureC799::class => static function (ContainerInterface $container) {
                        return new FixtureC799($container->get(FixtureC798::class));
                    },
                    FixtureC800::class => static function (ContainerInterface $container) {
                        return new FixtureC800($container->get(FixtureC799::class));
                    },
                    FixtureC801::class => static function (ContainerInterface $container) {
                        return new FixtureC801($container->get(FixtureC800::class));
                    },
                    FixtureC802::class => static function (ContainerInterface $container) {
                        return new FixtureC802($container->get(FixtureC801::class));
                    },
                    FixtureC803::class => static function (ContainerInterface $container) {
                        return new FixtureC803($container->get(FixtureC802::class));
                    },
                    FixtureC804::class => static function (ContainerInterface $container) {
                        return new FixtureC804($container->get(FixtureC803::class));
                    },
                    FixtureC805::class => static function (ContainerInterface $container) {
                        return new FixtureC805($container->get(FixtureC804::class));
                    },
                    FixtureC806::class => static function (ContainerInterface $container) {
                        return new FixtureC806($container->get(FixtureC805::class));
                    },
                    FixtureC807::class => static function (ContainerInterface $container) {
                        return new FixtureC807($container->get(FixtureC806::class));
                    },
                    FixtureC808::class => static function (ContainerInterface $container) {
                        return new FixtureC808($container->get(FixtureC807::class));
                    },
                    FixtureC809::class => static function (ContainerInterface $container) {
                        return new FixtureC809($container->get(FixtureC808::class));
                    },
                    FixtureC810::class => static function (ContainerInterface $container) {
                        return new FixtureC810($container->get(FixtureC809::class));
                    },
                    FixtureC811::class => static function (ContainerInterface $container) {
                        return new FixtureC811($container->get(FixtureC810::class));
                    },
                    FixtureC812::class => static function (ContainerInterface $container) {
                        return new FixtureC812($container->get(FixtureC811::class));
                    },
                    FixtureC813::class => static function (ContainerInterface $container) {
                        return new FixtureC813($container->get(FixtureC812::class));
                    },
                    FixtureC814::class => static function (ContainerInterface $container) {
                        return new FixtureC814($container->get(FixtureC813::class));
                    },
                    FixtureC815::class => static function (ContainerInterface $container) {
                        return new FixtureC815($container->get(FixtureC814::class));
                    },
                    FixtureC816::class => static function (ContainerInterface $container) {
                        return new FixtureC816($container->get(FixtureC815::class));
                    },
                    FixtureC817::class => static function (ContainerInterface $container) {
                        return new FixtureC817($container->get(FixtureC816::class));
                    },
                    FixtureC818::class => static function (ContainerInterface $container) {
                        return new FixtureC818($container->get(FixtureC817::class));
                    },
                    FixtureC819::class => static function (ContainerInterface $container) {
                        return new FixtureC819($container->get(FixtureC818::class));
                    },
                    FixtureC820::class => static function (ContainerInterface $container) {
                        return new FixtureC820($container->get(FixtureC819::class));
                    },
                    FixtureC821::class => static function (ContainerInterface $container) {
                        return new FixtureC821($container->get(FixtureC820::class));
                    },
                    FixtureC822::class => static function (ContainerInterface $container) {
                        return new FixtureC822($container->get(FixtureC821::class));
                    },
                    FixtureC823::class => static function (ContainerInterface $container) {
                        return new FixtureC823($container->get(FixtureC822::class));
                    },
                    FixtureC824::class => static function (ContainerInterface $container) {
                        return new FixtureC824($container->get(FixtureC823::class));
                    },
                    FixtureC825::class => static function (ContainerInterface $container) {
                        return new FixtureC825($container->get(FixtureC824::class));
                    },
                    FixtureC826::class => static function (ContainerInterface $container) {
                        return new FixtureC826($container->get(FixtureC825::class));
                    },
                    FixtureC827::class => static function (ContainerInterface $container) {
                        return new FixtureC827($container->get(FixtureC826::class));
                    },
                    FixtureC828::class => static function (ContainerInterface $container) {
                        return new FixtureC828($container->get(FixtureC827::class));
                    },
                    FixtureC829::class => static function (ContainerInterface $container) {
                        return new FixtureC829($container->get(FixtureC828::class));
                    },
                    FixtureC830::class => static function (ContainerInterface $container) {
                        return new FixtureC830($container->get(FixtureC829::class));
                    },
                    FixtureC831::class => static function (ContainerInterface $container) {
                        return new FixtureC831($container->get(FixtureC830::class));
                    },
                    FixtureC832::class => static function (ContainerInterface $container) {
                        return new FixtureC832($container->get(FixtureC831::class));
                    },
                    FixtureC833::class => static function (ContainerInterface $container) {
                        return new FixtureC833($container->get(FixtureC832::class));
                    },
                    FixtureC834::class => static function (ContainerInterface $container) {
                        return new FixtureC834($container->get(FixtureC833::class));
                    },
                    FixtureC835::class => static function (ContainerInterface $container) {
                        return new FixtureC835($container->get(FixtureC834::class));
                    },
                    FixtureC836::class => static function (ContainerInterface $container) {
                        return new FixtureC836($container->get(FixtureC835::class));
                    },
                    FixtureC837::class => static function (ContainerInterface $container) {
                        return new FixtureC837($container->get(FixtureC836::class));
                    },
                    FixtureC838::class => static function (ContainerInterface $container) {
                        return new FixtureC838($container->get(FixtureC837::class));
                    },
                    FixtureC839::class => static function (ContainerInterface $container) {
                        return new FixtureC839($container->get(FixtureC838::class));
                    },
                    FixtureC840::class => static function (ContainerInterface $container) {
                        return new FixtureC840($container->get(FixtureC839::class));
                    },
                    FixtureC841::class => static function (ContainerInterface $container) {
                        return new FixtureC841($container->get(FixtureC840::class));
                    },
                    FixtureC842::class => static function (ContainerInterface $container) {
                        return new FixtureC842($container->get(FixtureC841::class));
                    },
                    FixtureC843::class => static function (ContainerInterface $container) {
                        return new FixtureC843($container->get(FixtureC842::class));
                    },
                    FixtureC844::class => static function (ContainerInterface $container) {
                        return new FixtureC844($container->get(FixtureC843::class));
                    },
                    FixtureC845::class => static function (ContainerInterface $container) {
                        return new FixtureC845($container->get(FixtureC844::class));
                    },
                    FixtureC846::class => static function (ContainerInterface $container) {
                        return new FixtureC846($container->get(FixtureC845::class));
                    },
                    FixtureC847::class => static function (ContainerInterface $container) {
                        return new FixtureC847($container->get(FixtureC846::class));
                    },
                    FixtureC848::class => static function (ContainerInterface $container) {
                        return new FixtureC848($container->get(FixtureC847::class));
                    },
                    FixtureC849::class => static function (ContainerInterface $container) {
                        return new FixtureC849($container->get(FixtureC848::class));
                    },
                    FixtureC850::class => static function (ContainerInterface $container) {
                        return new FixtureC850($container->get(FixtureC849::class));
                    },
                    FixtureC851::class => static function (ContainerInterface $container) {
                        return new FixtureC851($container->get(FixtureC850::class));
                    },
                    FixtureC852::class => static function (ContainerInterface $container) {
                        return new FixtureC852($container->get(FixtureC851::class));
                    },
                    FixtureC853::class => static function (ContainerInterface $container) {
                        return new FixtureC853($container->get(FixtureC852::class));
                    },
                    FixtureC854::class => static function (ContainerInterface $container) {
                        return new FixtureC854($container->get(FixtureC853::class));
                    },
                    FixtureC855::class => static function (ContainerInterface $container) {
                        return new FixtureC855($container->get(FixtureC854::class));
                    },
                    FixtureC856::class => static function (ContainerInterface $container) {
                        return new FixtureC856($container->get(FixtureC855::class));
                    },
                    FixtureC857::class => static function (ContainerInterface $container) {
                        return new FixtureC857($container->get(FixtureC856::class));
                    },
                    FixtureC858::class => static function (ContainerInterface $container) {
                        return new FixtureC858($container->get(FixtureC857::class));
                    },
                    FixtureC859::class => static function (ContainerInterface $container) {
                        return new FixtureC859($container->get(FixtureC858::class));
                    },
                    FixtureC860::class => static function (ContainerInterface $container) {
                        return new FixtureC860($container->get(FixtureC859::class));
                    },
                    FixtureC861::class => static function (ContainerInterface $container) {
                        return new FixtureC861($container->get(FixtureC860::class));
                    },
                    FixtureC862::class => static function (ContainerInterface $container) {
                        return new FixtureC862($container->get(FixtureC861::class));
                    },
                    FixtureC863::class => static function (ContainerInterface $container) {
                        return new FixtureC863($container->get(FixtureC862::class));
                    },
                    FixtureC864::class => static function (ContainerInterface $container) {
                        return new FixtureC864($container->get(FixtureC863::class));
                    },
                    FixtureC865::class => static function (ContainerInterface $container) {
                        return new FixtureC865($container->get(FixtureC864::class));
                    },
                    FixtureC866::class => static function (ContainerInterface $container) {
                        return new FixtureC866($container->get(FixtureC865::class));
                    },
                    FixtureC867::class => static function (ContainerInterface $container) {
                        return new FixtureC867($container->get(FixtureC866::class));
                    },
                    FixtureC868::class => static function (ContainerInterface $container) {
                        return new FixtureC868($container->get(FixtureC867::class));
                    },
                    FixtureC869::class => static function (ContainerInterface $container) {
                        return new FixtureC869($container->get(FixtureC868::class));
                    },
                    FixtureC870::class => static function (ContainerInterface $container) {
                        return new FixtureC870($container->get(FixtureC869::class));
                    },
                    FixtureC871::class => static function (ContainerInterface $container) {
                        return new FixtureC871($container->get(FixtureC870::class));
                    },
                    FixtureC872::class => static function (ContainerInterface $container) {
                        return new FixtureC872($container->get(FixtureC871::class));
                    },
                    FixtureC873::class => static function (ContainerInterface $container) {
                        return new FixtureC873($container->get(FixtureC872::class));
                    },
                    FixtureC874::class => static function (ContainerInterface $container) {
                        return new FixtureC874($container->get(FixtureC873::class));
                    },
                    FixtureC875::class => static function (ContainerInterface $container) {
                        return new FixtureC875($container->get(FixtureC874::class));
                    },
                    FixtureC876::class => static function (ContainerInterface $container) {
                        return new FixtureC876($container->get(FixtureC875::class));
                    },
                    FixtureC877::class => static function (ContainerInterface $container) {
                        return new FixtureC877($container->get(FixtureC876::class));
                    },
                    FixtureC878::class => static function (ContainerInterface $container) {
                        return new FixtureC878($container->get(FixtureC877::class));
                    },
                    FixtureC879::class => static function (ContainerInterface $container) {
                        return new FixtureC879($container->get(FixtureC878::class));
                    },
                    FixtureC880::class => static function (ContainerInterface $container) {
                        return new FixtureC880($container->get(FixtureC879::class));
                    },
                    FixtureC881::class => static function (ContainerInterface $container) {
                        return new FixtureC881($container->get(FixtureC880::class));
                    },
                    FixtureC882::class => static function (ContainerInterface $container) {
                        return new FixtureC882($container->get(FixtureC881::class));
                    },
                    FixtureC883::class => static function (ContainerInterface $container) {
                        return new FixtureC883($container->get(FixtureC882::class));
                    },
                    FixtureC884::class => static function (ContainerInterface $container) {
                        return new FixtureC884($container->get(FixtureC883::class));
                    },
                    FixtureC885::class => static function (ContainerInterface $container) {
                        return new FixtureC885($container->get(FixtureC884::class));
                    },
                    FixtureC886::class => static function (ContainerInterface $container) {
                        return new FixtureC886($container->get(FixtureC885::class));
                    },
                    FixtureC887::class => static function (ContainerInterface $container) {
                        return new FixtureC887($container->get(FixtureC886::class));
                    },
                    FixtureC888::class => static function (ContainerInterface $container) {
                        return new FixtureC888($container->get(FixtureC887::class));
                    },
                    FixtureC889::class => static function (ContainerInterface $container) {
                        return new FixtureC889($container->get(FixtureC888::class));
                    },
                    FixtureC890::class => static function (ContainerInterface $container) {
                        return new FixtureC890($container->get(FixtureC889::class));
                    },
                    FixtureC891::class => static function (ContainerInterface $container) {
                        return new FixtureC891($container->get(FixtureC890::class));
                    },
                    FixtureC892::class => static function (ContainerInterface $container) {
                        return new FixtureC892($container->get(FixtureC891::class));
                    },
                    FixtureC893::class => static function (ContainerInterface $container) {
                        return new FixtureC893($container->get(FixtureC892::class));
                    },
                    FixtureC894::class => static function (ContainerInterface $container) {
                        return new FixtureC894($container->get(FixtureC893::class));
                    },
                    FixtureC895::class => static function (ContainerInterface $container) {
                        return new FixtureC895($container->get(FixtureC894::class));
                    },
                    FixtureC896::class => static function (ContainerInterface $container) {
                        return new FixtureC896($container->get(FixtureC895::class));
                    },
                    FixtureC897::class => static function (ContainerInterface $container) {
                        return new FixtureC897($container->get(FixtureC896::class));
                    },
                    FixtureC898::class => static function (ContainerInterface $container) {
                        return new FixtureC898($container->get(FixtureC897::class));
                    },
                    FixtureC899::class => static function (ContainerInterface $container) {
                        return new FixtureC899($container->get(FixtureC898::class));
                    },
                    FixtureC900::class => static function (ContainerInterface $container) {
                        return new FixtureC900($container->get(FixtureC899::class));
                    },
                    FixtureC901::class => static function (ContainerInterface $container) {
                        return new FixtureC901($container->get(FixtureC900::class));
                    },
                    FixtureC902::class => static function (ContainerInterface $container) {
                        return new FixtureC902($container->get(FixtureC901::class));
                    },
                    FixtureC903::class => static function (ContainerInterface $container) {
                        return new FixtureC903($container->get(FixtureC902::class));
                    },
                    FixtureC904::class => static function (ContainerInterface $container) {
                        return new FixtureC904($container->get(FixtureC903::class));
                    },
                    FixtureC905::class => static function (ContainerInterface $container) {
                        return new FixtureC905($container->get(FixtureC904::class));
                    },
                    FixtureC906::class => static function (ContainerInterface $container) {
                        return new FixtureC906($container->get(FixtureC905::class));
                    },
                    FixtureC907::class => static function (ContainerInterface $container) {
                        return new FixtureC907($container->get(FixtureC906::class));
                    },
                    FixtureC908::class => static function (ContainerInterface $container) {
                        return new FixtureC908($container->get(FixtureC907::class));
                    },
                    FixtureC909::class => static function (ContainerInterface $container) {
                        return new FixtureC909($container->get(FixtureC908::class));
                    },
                    FixtureC910::class => static function (ContainerInterface $container) {
                        return new FixtureC910($container->get(FixtureC909::class));
                    },
                    FixtureC911::class => static function (ContainerInterface $container) {
                        return new FixtureC911($container->get(FixtureC910::class));
                    },
                    FixtureC912::class => static function (ContainerInterface $container) {
                        return new FixtureC912($container->get(FixtureC911::class));
                    },
                    FixtureC913::class => static function (ContainerInterface $container) {
                        return new FixtureC913($container->get(FixtureC912::class));
                    },
                    FixtureC914::class => static function (ContainerInterface $container) {
                        return new FixtureC914($container->get(FixtureC913::class));
                    },
                    FixtureC915::class => static function (ContainerInterface $container) {
                        return new FixtureC915($container->get(FixtureC914::class));
                    },
                    FixtureC916::class => static function (ContainerInterface $container) {
                        return new FixtureC916($container->get(FixtureC915::class));
                    },
                    FixtureC917::class => static function (ContainerInterface $container) {
                        return new FixtureC917($container->get(FixtureC916::class));
                    },
                    FixtureC918::class => static function (ContainerInterface $container) {
                        return new FixtureC918($container->get(FixtureC917::class));
                    },
                    FixtureC919::class => static function (ContainerInterface $container) {
                        return new FixtureC919($container->get(FixtureC918::class));
                    },
                    FixtureC920::class => static function (ContainerInterface $container) {
                        return new FixtureC920($container->get(FixtureC919::class));
                    },
                    FixtureC921::class => static function (ContainerInterface $container) {
                        return new FixtureC921($container->get(FixtureC920::class));
                    },
                    FixtureC922::class => static function (ContainerInterface $container) {
                        return new FixtureC922($container->get(FixtureC921::class));
                    },
                    FixtureC923::class => static function (ContainerInterface $container) {
                        return new FixtureC923($container->get(FixtureC922::class));
                    },
                    FixtureC924::class => static function (ContainerInterface $container) {
                        return new FixtureC924($container->get(FixtureC923::class));
                    },
                    FixtureC925::class => static function (ContainerInterface $container) {
                        return new FixtureC925($container->get(FixtureC924::class));
                    },
                    FixtureC926::class => static function (ContainerInterface $container) {
                        return new FixtureC926($container->get(FixtureC925::class));
                    },
                    FixtureC927::class => static function (ContainerInterface $container) {
                        return new FixtureC927($container->get(FixtureC926::class));
                    },
                    FixtureC928::class => static function (ContainerInterface $container) {
                        return new FixtureC928($container->get(FixtureC927::class));
                    },
                    FixtureC929::class => static function (ContainerInterface $container) {
                        return new FixtureC929($container->get(FixtureC928::class));
                    },
                    FixtureC930::class => static function (ContainerInterface $container) {
                        return new FixtureC930($container->get(FixtureC929::class));
                    },
                    FixtureC931::class => static function (ContainerInterface $container) {
                        return new FixtureC931($container->get(FixtureC930::class));
                    },
                    FixtureC932::class => static function (ContainerInterface $container) {
                        return new FixtureC932($container->get(FixtureC931::class));
                    },
                    FixtureC933::class => static function (ContainerInterface $container) {
                        return new FixtureC933($container->get(FixtureC932::class));
                    },
                    FixtureC934::class => static function (ContainerInterface $container) {
                        return new FixtureC934($container->get(FixtureC933::class));
                    },
                    FixtureC935::class => static function (ContainerInterface $container) {
                        return new FixtureC935($container->get(FixtureC934::class));
                    },
                    FixtureC936::class => static function (ContainerInterface $container) {
                        return new FixtureC936($container->get(FixtureC935::class));
                    },
                    FixtureC937::class => static function (ContainerInterface $container) {
                        return new FixtureC937($container->get(FixtureC936::class));
                    },
                    FixtureC938::class => static function (ContainerInterface $container) {
                        return new FixtureC938($container->get(FixtureC937::class));
                    },
                    FixtureC939::class => static function (ContainerInterface $container) {
                        return new FixtureC939($container->get(FixtureC938::class));
                    },
                    FixtureC940::class => static function (ContainerInterface $container) {
                        return new FixtureC940($container->get(FixtureC939::class));
                    },
                    FixtureC941::class => static function (ContainerInterface $container) {
                        return new FixtureC941($container->get(FixtureC940::class));
                    },
                    FixtureC942::class => static function (ContainerInterface $container) {
                        return new FixtureC942($container->get(FixtureC941::class));
                    },
                    FixtureC943::class => static function (ContainerInterface $container) {
                        return new FixtureC943($container->get(FixtureC942::class));
                    },
                    FixtureC944::class => static function (ContainerInterface $container) {
                        return new FixtureC944($container->get(FixtureC943::class));
                    },
                    FixtureC945::class => static function (ContainerInterface $container) {
                        return new FixtureC945($container->get(FixtureC944::class));
                    },
                    FixtureC946::class => static function (ContainerInterface $container) {
                        return new FixtureC946($container->get(FixtureC945::class));
                    },
                    FixtureC947::class => static function (ContainerInterface $container) {
                        return new FixtureC947($container->get(FixtureC946::class));
                    },
                    FixtureC948::class => static function (ContainerInterface $container) {
                        return new FixtureC948($container->get(FixtureC947::class));
                    },
                    FixtureC949::class => static function (ContainerInterface $container) {
                        return new FixtureC949($container->get(FixtureC948::class));
                    },
                    FixtureC950::class => static function (ContainerInterface $container) {
                        return new FixtureC950($container->get(FixtureC949::class));
                    },
                    FixtureC951::class => static function (ContainerInterface $container) {
                        return new FixtureC951($container->get(FixtureC950::class));
                    },
                    FixtureC952::class => static function (ContainerInterface $container) {
                        return new FixtureC952($container->get(FixtureC951::class));
                    },
                    FixtureC953::class => static function (ContainerInterface $container) {
                        return new FixtureC953($container->get(FixtureC952::class));
                    },
                    FixtureC954::class => static function (ContainerInterface $container) {
                        return new FixtureC954($container->get(FixtureC953::class));
                    },
                    FixtureC955::class => static function (ContainerInterface $container) {
                        return new FixtureC955($container->get(FixtureC954::class));
                    },
                    FixtureC956::class => static function (ContainerInterface $container) {
                        return new FixtureC956($container->get(FixtureC955::class));
                    },
                    FixtureC957::class => static function (ContainerInterface $container) {
                        return new FixtureC957($container->get(FixtureC956::class));
                    },
                    FixtureC958::class => static function (ContainerInterface $container) {
                        return new FixtureC958($container->get(FixtureC957::class));
                    },
                    FixtureC959::class => static function (ContainerInterface $container) {
                        return new FixtureC959($container->get(FixtureC958::class));
                    },
                    FixtureC960::class => static function (ContainerInterface $container) {
                        return new FixtureC960($container->get(FixtureC959::class));
                    },
                    FixtureC961::class => static function (ContainerInterface $container) {
                        return new FixtureC961($container->get(FixtureC960::class));
                    },
                    FixtureC962::class => static function (ContainerInterface $container) {
                        return new FixtureC962($container->get(FixtureC961::class));
                    },
                    FixtureC963::class => static function (ContainerInterface $container) {
                        return new FixtureC963($container->get(FixtureC962::class));
                    },
                    FixtureC964::class => static function (ContainerInterface $container) {
                        return new FixtureC964($container->get(FixtureC963::class));
                    },
                    FixtureC965::class => static function (ContainerInterface $container) {
                        return new FixtureC965($container->get(FixtureC964::class));
                    },
                    FixtureC966::class => static function (ContainerInterface $container) {
                        return new FixtureC966($container->get(FixtureC965::class));
                    },
                    FixtureC967::class => static function (ContainerInterface $container) {
                        return new FixtureC967($container->get(FixtureC966::class));
                    },
                    FixtureC968::class => static function (ContainerInterface $container) {
                        return new FixtureC968($container->get(FixtureC967::class));
                    },
                    FixtureC969::class => static function (ContainerInterface $container) {
                        return new FixtureC969($container->get(FixtureC968::class));
                    },
                    FixtureC970::class => static function (ContainerInterface $container) {
                        return new FixtureC970($container->get(FixtureC969::class));
                    },
                    FixtureC971::class => static function (ContainerInterface $container) {
                        return new FixtureC971($container->get(FixtureC970::class));
                    },
                    FixtureC972::class => static function (ContainerInterface $container) {
                        return new FixtureC972($container->get(FixtureC971::class));
                    },
                    FixtureC973::class => static function (ContainerInterface $container) {
                        return new FixtureC973($container->get(FixtureC972::class));
                    },
                    FixtureC974::class => static function (ContainerInterface $container) {
                        return new FixtureC974($container->get(FixtureC973::class));
                    },
                    FixtureC975::class => static function (ContainerInterface $container) {
                        return new FixtureC975($container->get(FixtureC974::class));
                    },
                    FixtureC976::class => static function (ContainerInterface $container) {
                        return new FixtureC976($container->get(FixtureC975::class));
                    },
                    FixtureC977::class => static function (ContainerInterface $container) {
                        return new FixtureC977($container->get(FixtureC976::class));
                    },
                    FixtureC978::class => static function (ContainerInterface $container) {
                        return new FixtureC978($container->get(FixtureC977::class));
                    },
                    FixtureC979::class => static function (ContainerInterface $container) {
                        return new FixtureC979($container->get(FixtureC978::class));
                    },
                    FixtureC980::class => static function (ContainerInterface $container) {
                        return new FixtureC980($container->get(FixtureC979::class));
                    },
                    FixtureC981::class => static function (ContainerInterface $container) {
                        return new FixtureC981($container->get(FixtureC980::class));
                    },
                    FixtureC982::class => static function (ContainerInterface $container) {
                        return new FixtureC982($container->get(FixtureC981::class));
                    },
                    FixtureC983::class => static function (ContainerInterface $container) {
                        return new FixtureC983($container->get(FixtureC982::class));
                    },
                    FixtureC984::class => static function (ContainerInterface $container) {
                        return new FixtureC984($container->get(FixtureC983::class));
                    },
                    FixtureC985::class => static function (ContainerInterface $container) {
                        return new FixtureC985($container->get(FixtureC984::class));
                    },
                    FixtureC986::class => static function (ContainerInterface $container) {
                        return new FixtureC986($container->get(FixtureC985::class));
                    },
                    FixtureC987::class => static function (ContainerInterface $container) {
                        return new FixtureC987($container->get(FixtureC986::class));
                    },
                    FixtureC988::class => static function (ContainerInterface $container) {
                        return new FixtureC988($container->get(FixtureC987::class));
                    },
                    FixtureC989::class => static function (ContainerInterface $container) {
                        return new FixtureC989($container->get(FixtureC988::class));
                    },
                    FixtureC990::class => static function (ContainerInterface $container) {
                        return new FixtureC990($container->get(FixtureC989::class));
                    },
                    FixtureC991::class => static function (ContainerInterface $container) {
                        return new FixtureC991($container->get(FixtureC990::class));
                    },
                    FixtureC992::class => static function (ContainerInterface $container) {
                        return new FixtureC992($container->get(FixtureC991::class));
                    },
                    FixtureC993::class => static function (ContainerInterface $container) {
                        return new FixtureC993($container->get(FixtureC992::class));
                    },
                    FixtureC994::class => static function (ContainerInterface $container) {
                        return new FixtureC994($container->get(FixtureC993::class));
                    },
                    FixtureC995::class => static function (ContainerInterface $container) {
                        return new FixtureC995($container->get(FixtureC994::class));
                    },
                    FixtureC996::class => static function (ContainerInterface $container) {
                        return new FixtureC996($container->get(FixtureC995::class));
                    },
                    FixtureC997::class => static function (ContainerInterface $container) {
                        return new FixtureC997($container->get(FixtureC996::class));
                    },
                    FixtureC998::class => static function (ContainerInterface $container) {
                        return new FixtureC998($container->get(FixtureC997::class));
                    },
                    FixtureC999::class => static function (ContainerInterface $container) {
                        return new FixtureC999($container->get(FixtureC998::class));
                    },
                    FixtureC1000::class => static function (ContainerInterface $container) {
                        return new FixtureC1000($container->get(FixtureC999::class));
                    },
                ],
                "shared_by_default" => true,
            ]
        );
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

            echo "[\n";
            for ($i = 1; $i <= 100; $i++) {
               echo "    FixtureA" . $i . "::class => static function (ContainerInterface \$container) {\n";
               echo "        return new FixtureA{$i}(\$container->get(FixtureA" . ($i-1) . "::class));\n";
               echo "    },\n";
            }

            echo "[\n";
            for ($i = 1; $i <= 1000; $i++) {
               echo "    FixtureB" . $i . "::class => static function () {\n";
               echo "        return new FixtureB{$i}();\n";
               echo "    },\n";
            }

            echo "[\n";
            for ($i = 1; $i <= 1000; $i++) {
               echo "    FixtureC" . $i . "::class => static function (ContainerInterface \$container) {\n";
               echo "        return new FixtureC{$i}(\$container->get(FixtureC" . ($i-1) . "::class));\n";
               echo "    },\n";
            }
           echo "]\n";
        */
        return new ServiceManager(
            [
                "factories" => [
                    FixtureA1::class => InvokableFactory::class,
                    FixtureA2::class => static function (ContainerInterface $container) {
                        return new FixtureA2($container->get(FixtureA1::class));
                    },
                    FixtureA3::class => static function (ContainerInterface $container) {
                        return new FixtureA3($container->get(FixtureA2::class));
                    },
                    FixtureA4::class => static function (ContainerInterface $container) {
                        return new FixtureA4($container->get(FixtureA3::class));
                    },
                    FixtureA5::class => static function (ContainerInterface $container) {
                        return new FixtureA5($container->get(FixtureA4::class));
                    },
                    FixtureA6::class => static function (ContainerInterface $container) {
                        return new FixtureA6($container->get(FixtureA5::class));
                    },
                    FixtureA7::class => static function (ContainerInterface $container) {
                        return new FixtureA7($container->get(FixtureA6::class));
                    },
                    FixtureA8::class => static function (ContainerInterface $container) {
                        return new FixtureA8($container->get(FixtureA7::class));
                    },
                    FixtureA9::class => static function (ContainerInterface $container) {
                        return new FixtureA9($container->get(FixtureA8::class));
                    },
                    FixtureA10::class => static function (ContainerInterface $container) {
                        return new FixtureA10($container->get(FixtureA9::class));
                    },
                    FixtureA11::class => static function (ContainerInterface $container) {
                        return new FixtureA11($container->get(FixtureA10::class));
                    },
                    FixtureA12::class => static function (ContainerInterface $container) {
                        return new FixtureA12($container->get(FixtureA11::class));
                    },
                    FixtureA13::class => static function (ContainerInterface $container) {
                        return new FixtureA13($container->get(FixtureA12::class));
                    },
                    FixtureA14::class => static function (ContainerInterface $container) {
                        return new FixtureA14($container->get(FixtureA13::class));
                    },
                    FixtureA15::class => static function (ContainerInterface $container) {
                        return new FixtureA15($container->get(FixtureA14::class));
                    },
                    FixtureA16::class => static function (ContainerInterface $container) {
                        return new FixtureA16($container->get(FixtureA15::class));
                    },
                    FixtureA17::class => static function (ContainerInterface $container) {
                        return new FixtureA17($container->get(FixtureA16::class));
                    },
                    FixtureA18::class => static function (ContainerInterface $container) {
                        return new FixtureA18($container->get(FixtureA17::class));
                    },
                    FixtureA19::class => static function (ContainerInterface $container) {
                        return new FixtureA19($container->get(FixtureA18::class));
                    },
                    FixtureA20::class => static function (ContainerInterface $container) {
                        return new FixtureA20($container->get(FixtureA19::class));
                    },
                    FixtureA21::class => static function (ContainerInterface $container) {
                        return new FixtureA21($container->get(FixtureA20::class));
                    },
                    FixtureA22::class => static function (ContainerInterface $container) {
                        return new FixtureA22($container->get(FixtureA21::class));
                    },
                    FixtureA23::class => static function (ContainerInterface $container) {
                        return new FixtureA23($container->get(FixtureA22::class));
                    },
                    FixtureA24::class => static function (ContainerInterface $container) {
                        return new FixtureA24($container->get(FixtureA23::class));
                    },
                    FixtureA25::class => static function (ContainerInterface $container) {
                        return new FixtureA25($container->get(FixtureA24::class));
                    },
                    FixtureA26::class => static function (ContainerInterface $container) {
                        return new FixtureA26($container->get(FixtureA25::class));
                    },
                    FixtureA27::class => static function (ContainerInterface $container) {
                        return new FixtureA27($container->get(FixtureA26::class));
                    },
                    FixtureA28::class => static function (ContainerInterface $container) {
                        return new FixtureA28($container->get(FixtureA27::class));
                    },
                    FixtureA29::class => static function (ContainerInterface $container) {
                        return new FixtureA29($container->get(FixtureA28::class));
                    },
                    FixtureA30::class => static function (ContainerInterface $container) {
                        return new FixtureA30($container->get(FixtureA29::class));
                    },
                    FixtureA31::class => static function (ContainerInterface $container) {
                        return new FixtureA31($container->get(FixtureA30::class));
                    },
                    FixtureA32::class => static function (ContainerInterface $container) {
                        return new FixtureA32($container->get(FixtureA31::class));
                    },
                    FixtureA33::class => static function (ContainerInterface $container) {
                        return new FixtureA33($container->get(FixtureA32::class));
                    },
                    FixtureA34::class => static function (ContainerInterface $container) {
                        return new FixtureA34($container->get(FixtureA33::class));
                    },
                    FixtureA35::class => static function (ContainerInterface $container) {
                        return new FixtureA35($container->get(FixtureA34::class));
                    },
                    FixtureA36::class => static function (ContainerInterface $container) {
                        return new FixtureA36($container->get(FixtureA35::class));
                    },
                    FixtureA37::class => static function (ContainerInterface $container) {
                        return new FixtureA37($container->get(FixtureA36::class));
                    },
                    FixtureA38::class => static function (ContainerInterface $container) {
                        return new FixtureA38($container->get(FixtureA37::class));
                    },
                    FixtureA39::class => static function (ContainerInterface $container) {
                        return new FixtureA39($container->get(FixtureA38::class));
                    },
                    FixtureA40::class => static function (ContainerInterface $container) {
                        return new FixtureA40($container->get(FixtureA39::class));
                    },
                    FixtureA41::class => static function (ContainerInterface $container) {
                        return new FixtureA41($container->get(FixtureA40::class));
                    },
                    FixtureA42::class => static function (ContainerInterface $container) {
                        return new FixtureA42($container->get(FixtureA41::class));
                    },
                    FixtureA43::class => static function (ContainerInterface $container) {
                        return new FixtureA43($container->get(FixtureA42::class));
                    },
                    FixtureA44::class => static function (ContainerInterface $container) {
                        return new FixtureA44($container->get(FixtureA43::class));
                    },
                    FixtureA45::class => static function (ContainerInterface $container) {
                        return new FixtureA45($container->get(FixtureA44::class));
                    },
                    FixtureA46::class => static function (ContainerInterface $container) {
                        return new FixtureA46($container->get(FixtureA45::class));
                    },
                    FixtureA47::class => static function (ContainerInterface $container) {
                        return new FixtureA47($container->get(FixtureA46::class));
                    },
                    FixtureA48::class => static function (ContainerInterface $container) {
                        return new FixtureA48($container->get(FixtureA47::class));
                    },
                    FixtureA49::class => static function (ContainerInterface $container) {
                        return new FixtureA49($container->get(FixtureA48::class));
                    },
                    FixtureA50::class => static function (ContainerInterface $container) {
                        return new FixtureA50($container->get(FixtureA49::class));
                    },
                    FixtureA51::class => static function (ContainerInterface $container) {
                        return new FixtureA51($container->get(FixtureA50::class));
                    },
                    FixtureA52::class => static function (ContainerInterface $container) {
                        return new FixtureA52($container->get(FixtureA51::class));
                    },
                    FixtureA53::class => static function (ContainerInterface $container) {
                        return new FixtureA53($container->get(FixtureA52::class));
                    },
                    FixtureA54::class => static function (ContainerInterface $container) {
                        return new FixtureA54($container->get(FixtureA53::class));
                    },
                    FixtureA55::class => static function (ContainerInterface $container) {
                        return new FixtureA55($container->get(FixtureA54::class));
                    },
                    FixtureA56::class => static function (ContainerInterface $container) {
                        return new FixtureA56($container->get(FixtureA55::class));
                    },
                    FixtureA57::class => static function (ContainerInterface $container) {
                        return new FixtureA57($container->get(FixtureA56::class));
                    },
                    FixtureA58::class => static function (ContainerInterface $container) {
                        return new FixtureA58($container->get(FixtureA57::class));
                    },
                    FixtureA59::class => static function (ContainerInterface $container) {
                        return new FixtureA59($container->get(FixtureA58::class));
                    },
                    FixtureA60::class => static function (ContainerInterface $container) {
                        return new FixtureA60($container->get(FixtureA59::class));
                    },
                    FixtureA61::class => static function (ContainerInterface $container) {
                        return new FixtureA61($container->get(FixtureA60::class));
                    },
                    FixtureA62::class => static function (ContainerInterface $container) {
                        return new FixtureA62($container->get(FixtureA61::class));
                    },
                    FixtureA63::class => static function (ContainerInterface $container) {
                        return new FixtureA63($container->get(FixtureA62::class));
                    },
                    FixtureA64::class => static function (ContainerInterface $container) {
                        return new FixtureA64($container->get(FixtureA63::class));
                    },
                    FixtureA65::class => static function (ContainerInterface $container) {
                        return new FixtureA65($container->get(FixtureA64::class));
                    },
                    FixtureA66::class => static function (ContainerInterface $container) {
                        return new FixtureA66($container->get(FixtureA65::class));
                    },
                    FixtureA67::class => static function (ContainerInterface $container) {
                        return new FixtureA67($container->get(FixtureA66::class));
                    },
                    FixtureA68::class => static function (ContainerInterface $container) {
                        return new FixtureA68($container->get(FixtureA67::class));
                    },
                    FixtureA69::class => static function (ContainerInterface $container) {
                        return new FixtureA69($container->get(FixtureA68::class));
                    },
                    FixtureA70::class => static function (ContainerInterface $container) {
                        return new FixtureA70($container->get(FixtureA69::class));
                    },
                    FixtureA71::class => static function (ContainerInterface $container) {
                        return new FixtureA71($container->get(FixtureA70::class));
                    },
                    FixtureA72::class => static function (ContainerInterface $container) {
                        return new FixtureA72($container->get(FixtureA71::class));
                    },
                    FixtureA73::class => static function (ContainerInterface $container) {
                        return new FixtureA73($container->get(FixtureA72::class));
                    },
                    FixtureA74::class => static function (ContainerInterface $container) {
                        return new FixtureA74($container->get(FixtureA73::class));
                    },
                    FixtureA75::class => static function (ContainerInterface $container) {
                        return new FixtureA75($container->get(FixtureA74::class));
                    },
                    FixtureA76::class => static function (ContainerInterface $container) {
                        return new FixtureA76($container->get(FixtureA75::class));
                    },
                    FixtureA77::class => static function (ContainerInterface $container) {
                        return new FixtureA77($container->get(FixtureA76::class));
                    },
                    FixtureA78::class => static function (ContainerInterface $container) {
                        return new FixtureA78($container->get(FixtureA77::class));
                    },
                    FixtureA79::class => static function (ContainerInterface $container) {
                        return new FixtureA79($container->get(FixtureA78::class));
                    },
                    FixtureA80::class => static function (ContainerInterface $container) {
                        return new FixtureA80($container->get(FixtureA79::class));
                    },
                    FixtureA81::class => static function (ContainerInterface $container) {
                        return new FixtureA81($container->get(FixtureA80::class));
                    },
                    FixtureA82::class => static function (ContainerInterface $container) {
                        return new FixtureA82($container->get(FixtureA81::class));
                    },
                    FixtureA83::class => static function (ContainerInterface $container) {
                        return new FixtureA83($container->get(FixtureA82::class));
                    },
                    FixtureA84::class => static function (ContainerInterface $container) {
                        return new FixtureA84($container->get(FixtureA83::class));
                    },
                    FixtureA85::class => static function (ContainerInterface $container) {
                        return new FixtureA85($container->get(FixtureA84::class));
                    },
                    FixtureA86::class => static function (ContainerInterface $container) {
                        return new FixtureA86($container->get(FixtureA85::class));
                    },
                    FixtureA87::class => static function (ContainerInterface $container) {
                        return new FixtureA87($container->get(FixtureA86::class));
                    },
                    FixtureA88::class => static function (ContainerInterface $container) {
                        return new FixtureA88($container->get(FixtureA87::class));
                    },
                    FixtureA89::class => static function (ContainerInterface $container) {
                        return new FixtureA89($container->get(FixtureA88::class));
                    },
                    FixtureA90::class => static function (ContainerInterface $container) {
                        return new FixtureA90($container->get(FixtureA89::class));
                    },
                    FixtureA91::class => static function (ContainerInterface $container) {
                        return new FixtureA91($container->get(FixtureA90::class));
                    },
                    FixtureA92::class => static function (ContainerInterface $container) {
                        return new FixtureA92($container->get(FixtureA91::class));
                    },
                    FixtureA93::class => static function (ContainerInterface $container) {
                        return new FixtureA93($container->get(FixtureA92::class));
                    },
                    FixtureA94::class => static function (ContainerInterface $container) {
                        return new FixtureA94($container->get(FixtureA93::class));
                    },
                    FixtureA95::class => static function (ContainerInterface $container) {
                        return new FixtureA95($container->get(FixtureA94::class));
                    },
                    FixtureA96::class => static function (ContainerInterface $container) {
                        return new FixtureA96($container->get(FixtureA95::class));
                    },
                    FixtureA97::class => static function (ContainerInterface $container) {
                        return new FixtureA97($container->get(FixtureA96::class));
                    },
                    FixtureA98::class => static function (ContainerInterface $container) {
                        return new FixtureA98($container->get(FixtureA97::class));
                    },
                    FixtureA99::class => static function (ContainerInterface $container) {
                        return new FixtureA99($container->get(FixtureA98::class));
                    },
                    FixtureA100::class => static function (ContainerInterface $container) {
                        return new FixtureA100($container->get(FixtureA99::class));
                    },
                    FixtureB1::class => static function () {
                        return new FixtureB1();
                    },
                    FixtureB2::class => static function () {
                        return new FixtureB2();
                    },
                    FixtureB3::class => static function () {
                        return new FixtureB3();
                    },
                    FixtureB4::class => static function () {
                        return new FixtureB4();
                    },
                    FixtureB5::class => static function () {
                        return new FixtureB5();
                    },
                    FixtureB6::class => static function () {
                        return new FixtureB6();
                    },
                    FixtureB7::class => static function () {
                        return new FixtureB7();
                    },
                    FixtureB8::class => static function () {
                        return new FixtureB8();
                    },
                    FixtureB9::class => static function () {
                        return new FixtureB9();
                    },
                    FixtureB10::class => static function () {
                        return new FixtureB10();
                    },
                    FixtureB11::class => static function () {
                        return new FixtureB11();
                    },
                    FixtureB12::class => static function () {
                        return new FixtureB12();
                    },
                    FixtureB13::class => static function () {
                        return new FixtureB13();
                    },
                    FixtureB14::class => static function () {
                        return new FixtureB14();
                    },
                    FixtureB15::class => static function () {
                        return new FixtureB15();
                    },
                    FixtureB16::class => static function () {
                        return new FixtureB16();
                    },
                    FixtureB17::class => static function () {
                        return new FixtureB17();
                    },
                    FixtureB18::class => static function () {
                        return new FixtureB18();
                    },
                    FixtureB19::class => static function () {
                        return new FixtureB19();
                    },
                    FixtureB20::class => static function () {
                        return new FixtureB20();
                    },
                    FixtureB21::class => static function () {
                        return new FixtureB21();
                    },
                    FixtureB22::class => static function () {
                        return new FixtureB22();
                    },
                    FixtureB23::class => static function () {
                        return new FixtureB23();
                    },
                    FixtureB24::class => static function () {
                        return new FixtureB24();
                    },
                    FixtureB25::class => static function () {
                        return new FixtureB25();
                    },
                    FixtureB26::class => static function () {
                        return new FixtureB26();
                    },
                    FixtureB27::class => static function () {
                        return new FixtureB27();
                    },
                    FixtureB28::class => static function () {
                        return new FixtureB28();
                    },
                    FixtureB29::class => static function () {
                        return new FixtureB29();
                    },
                    FixtureB30::class => static function () {
                        return new FixtureB30();
                    },
                    FixtureB31::class => static function () {
                        return new FixtureB31();
                    },
                    FixtureB32::class => static function () {
                        return new FixtureB32();
                    },
                    FixtureB33::class => static function () {
                        return new FixtureB33();
                    },
                    FixtureB34::class => static function () {
                        return new FixtureB34();
                    },
                    FixtureB35::class => static function () {
                        return new FixtureB35();
                    },
                    FixtureB36::class => static function () {
                        return new FixtureB36();
                    },
                    FixtureB37::class => static function () {
                        return new FixtureB37();
                    },
                    FixtureB38::class => static function () {
                        return new FixtureB38();
                    },
                    FixtureB39::class => static function () {
                        return new FixtureB39();
                    },
                    FixtureB40::class => static function () {
                        return new FixtureB40();
                    },
                    FixtureB41::class => static function () {
                        return new FixtureB41();
                    },
                    FixtureB42::class => static function () {
                        return new FixtureB42();
                    },
                    FixtureB43::class => static function () {
                        return new FixtureB43();
                    },
                    FixtureB44::class => static function () {
                        return new FixtureB44();
                    },
                    FixtureB45::class => static function () {
                        return new FixtureB45();
                    },
                    FixtureB46::class => static function () {
                        return new FixtureB46();
                    },
                    FixtureB47::class => static function () {
                        return new FixtureB47();
                    },
                    FixtureB48::class => static function () {
                        return new FixtureB48();
                    },
                    FixtureB49::class => static function () {
                        return new FixtureB49();
                    },
                    FixtureB50::class => static function () {
                        return new FixtureB50();
                    },
                    FixtureB51::class => static function () {
                        return new FixtureB51();
                    },
                    FixtureB52::class => static function () {
                        return new FixtureB52();
                    },
                    FixtureB53::class => static function () {
                        return new FixtureB53();
                    },
                    FixtureB54::class => static function () {
                        return new FixtureB54();
                    },
                    FixtureB55::class => static function () {
                        return new FixtureB55();
                    },
                    FixtureB56::class => static function () {
                        return new FixtureB56();
                    },
                    FixtureB57::class => static function () {
                        return new FixtureB57();
                    },
                    FixtureB58::class => static function () {
                        return new FixtureB58();
                    },
                    FixtureB59::class => static function () {
                        return new FixtureB59();
                    },
                    FixtureB60::class => static function () {
                        return new FixtureB60();
                    },
                    FixtureB61::class => static function () {
                        return new FixtureB61();
                    },
                    FixtureB62::class => static function () {
                        return new FixtureB62();
                    },
                    FixtureB63::class => static function () {
                        return new FixtureB63();
                    },
                    FixtureB64::class => static function () {
                        return new FixtureB64();
                    },
                    FixtureB65::class => static function () {
                        return new FixtureB65();
                    },
                    FixtureB66::class => static function () {
                        return new FixtureB66();
                    },
                    FixtureB67::class => static function () {
                        return new FixtureB67();
                    },
                    FixtureB68::class => static function () {
                        return new FixtureB68();
                    },
                    FixtureB69::class => static function () {
                        return new FixtureB69();
                    },
                    FixtureB70::class => static function () {
                        return new FixtureB70();
                    },
                    FixtureB71::class => static function () {
                        return new FixtureB71();
                    },
                    FixtureB72::class => static function () {
                        return new FixtureB72();
                    },
                    FixtureB73::class => static function () {
                        return new FixtureB73();
                    },
                    FixtureB74::class => static function () {
                        return new FixtureB74();
                    },
                    FixtureB75::class => static function () {
                        return new FixtureB75();
                    },
                    FixtureB76::class => static function () {
                        return new FixtureB76();
                    },
                    FixtureB77::class => static function () {
                        return new FixtureB77();
                    },
                    FixtureB78::class => static function () {
                        return new FixtureB78();
                    },
                    FixtureB79::class => static function () {
                        return new FixtureB79();
                    },
                    FixtureB80::class => static function () {
                        return new FixtureB80();
                    },
                    FixtureB81::class => static function () {
                        return new FixtureB81();
                    },
                    FixtureB82::class => static function () {
                        return new FixtureB82();
                    },
                    FixtureB83::class => static function () {
                        return new FixtureB83();
                    },
                    FixtureB84::class => static function () {
                        return new FixtureB84();
                    },
                    FixtureB85::class => static function () {
                        return new FixtureB85();
                    },
                    FixtureB86::class => static function () {
                        return new FixtureB86();
                    },
                    FixtureB87::class => static function () {
                        return new FixtureB87();
                    },
                    FixtureB88::class => static function () {
                        return new FixtureB88();
                    },
                    FixtureB89::class => static function () {
                        return new FixtureB89();
                    },
                    FixtureB90::class => static function () {
                        return new FixtureB90();
                    },
                    FixtureB91::class => static function () {
                        return new FixtureB91();
                    },
                    FixtureB92::class => static function () {
                        return new FixtureB92();
                    },
                    FixtureB93::class => static function () {
                        return new FixtureB93();
                    },
                    FixtureB94::class => static function () {
                        return new FixtureB94();
                    },
                    FixtureB95::class => static function () {
                        return new FixtureB95();
                    },
                    FixtureB96::class => static function () {
                        return new FixtureB96();
                    },
                    FixtureB97::class => static function () {
                        return new FixtureB97();
                    },
                    FixtureB98::class => static function () {
                        return new FixtureB98();
                    },
                    FixtureB99::class => static function () {
                        return new FixtureB99();
                    },
                    FixtureB100::class => static function () {
                        return new FixtureB100();
                    },
                    FixtureB101::class => static function () {
                        return new FixtureB101();
                    },
                    FixtureB102::class => static function () {
                        return new FixtureB102();
                    },
                    FixtureB103::class => static function () {
                        return new FixtureB103();
                    },
                    FixtureB104::class => static function () {
                        return new FixtureB104();
                    },
                    FixtureB105::class => static function () {
                        return new FixtureB105();
                    },
                    FixtureB106::class => static function () {
                        return new FixtureB106();
                    },
                    FixtureB107::class => static function () {
                        return new FixtureB107();
                    },
                    FixtureB108::class => static function () {
                        return new FixtureB108();
                    },
                    FixtureB109::class => static function () {
                        return new FixtureB109();
                    },
                    FixtureB110::class => static function () {
                        return new FixtureB110();
                    },
                    FixtureB111::class => static function () {
                        return new FixtureB111();
                    },
                    FixtureB112::class => static function () {
                        return new FixtureB112();
                    },
                    FixtureB113::class => static function () {
                        return new FixtureB113();
                    },
                    FixtureB114::class => static function () {
                        return new FixtureB114();
                    },
                    FixtureB115::class => static function () {
                        return new FixtureB115();
                    },
                    FixtureB116::class => static function () {
                        return new FixtureB116();
                    },
                    FixtureB117::class => static function () {
                        return new FixtureB117();
                    },
                    FixtureB118::class => static function () {
                        return new FixtureB118();
                    },
                    FixtureB119::class => static function () {
                        return new FixtureB119();
                    },
                    FixtureB120::class => static function () {
                        return new FixtureB120();
                    },
                    FixtureB121::class => static function () {
                        return new FixtureB121();
                    },
                    FixtureB122::class => static function () {
                        return new FixtureB122();
                    },
                    FixtureB123::class => static function () {
                        return new FixtureB123();
                    },
                    FixtureB124::class => static function () {
                        return new FixtureB124();
                    },
                    FixtureB125::class => static function () {
                        return new FixtureB125();
                    },
                    FixtureB126::class => static function () {
                        return new FixtureB126();
                    },
                    FixtureB127::class => static function () {
                        return new FixtureB127();
                    },
                    FixtureB128::class => static function () {
                        return new FixtureB128();
                    },
                    FixtureB129::class => static function () {
                        return new FixtureB129();
                    },
                    FixtureB130::class => static function () {
                        return new FixtureB130();
                    },
                    FixtureB131::class => static function () {
                        return new FixtureB131();
                    },
                    FixtureB132::class => static function () {
                        return new FixtureB132();
                    },
                    FixtureB133::class => static function () {
                        return new FixtureB133();
                    },
                    FixtureB134::class => static function () {
                        return new FixtureB134();
                    },
                    FixtureB135::class => static function () {
                        return new FixtureB135();
                    },
                    FixtureB136::class => static function () {
                        return new FixtureB136();
                    },
                    FixtureB137::class => static function () {
                        return new FixtureB137();
                    },
                    FixtureB138::class => static function () {
                        return new FixtureB138();
                    },
                    FixtureB139::class => static function () {
                        return new FixtureB139();
                    },
                    FixtureB140::class => static function () {
                        return new FixtureB140();
                    },
                    FixtureB141::class => static function () {
                        return new FixtureB141();
                    },
                    FixtureB142::class => static function () {
                        return new FixtureB142();
                    },
                    FixtureB143::class => static function () {
                        return new FixtureB143();
                    },
                    FixtureB144::class => static function () {
                        return new FixtureB144();
                    },
                    FixtureB145::class => static function () {
                        return new FixtureB145();
                    },
                    FixtureB146::class => static function () {
                        return new FixtureB146();
                    },
                    FixtureB147::class => static function () {
                        return new FixtureB147();
                    },
                    FixtureB148::class => static function () {
                        return new FixtureB148();
                    },
                    FixtureB149::class => static function () {
                        return new FixtureB149();
                    },
                    FixtureB150::class => static function () {
                        return new FixtureB150();
                    },
                    FixtureB151::class => static function () {
                        return new FixtureB151();
                    },
                    FixtureB152::class => static function () {
                        return new FixtureB152();
                    },
                    FixtureB153::class => static function () {
                        return new FixtureB153();
                    },
                    FixtureB154::class => static function () {
                        return new FixtureB154();
                    },
                    FixtureB155::class => static function () {
                        return new FixtureB155();
                    },
                    FixtureB156::class => static function () {
                        return new FixtureB156();
                    },
                    FixtureB157::class => static function () {
                        return new FixtureB157();
                    },
                    FixtureB158::class => static function () {
                        return new FixtureB158();
                    },
                    FixtureB159::class => static function () {
                        return new FixtureB159();
                    },
                    FixtureB160::class => static function () {
                        return new FixtureB160();
                    },
                    FixtureB161::class => static function () {
                        return new FixtureB161();
                    },
                    FixtureB162::class => static function () {
                        return new FixtureB162();
                    },
                    FixtureB163::class => static function () {
                        return new FixtureB163();
                    },
                    FixtureB164::class => static function () {
                        return new FixtureB164();
                    },
                    FixtureB165::class => static function () {
                        return new FixtureB165();
                    },
                    FixtureB166::class => static function () {
                        return new FixtureB166();
                    },
                    FixtureB167::class => static function () {
                        return new FixtureB167();
                    },
                    FixtureB168::class => static function () {
                        return new FixtureB168();
                    },
                    FixtureB169::class => static function () {
                        return new FixtureB169();
                    },
                    FixtureB170::class => static function () {
                        return new FixtureB170();
                    },
                    FixtureB171::class => static function () {
                        return new FixtureB171();
                    },
                    FixtureB172::class => static function () {
                        return new FixtureB172();
                    },
                    FixtureB173::class => static function () {
                        return new FixtureB173();
                    },
                    FixtureB174::class => static function () {
                        return new FixtureB174();
                    },
                    FixtureB175::class => static function () {
                        return new FixtureB175();
                    },
                    FixtureB176::class => static function () {
                        return new FixtureB176();
                    },
                    FixtureB177::class => static function () {
                        return new FixtureB177();
                    },
                    FixtureB178::class => static function () {
                        return new FixtureB178();
                    },
                    FixtureB179::class => static function () {
                        return new FixtureB179();
                    },
                    FixtureB180::class => static function () {
                        return new FixtureB180();
                    },
                    FixtureB181::class => static function () {
                        return new FixtureB181();
                    },
                    FixtureB182::class => static function () {
                        return new FixtureB182();
                    },
                    FixtureB183::class => static function () {
                        return new FixtureB183();
                    },
                    FixtureB184::class => static function () {
                        return new FixtureB184();
                    },
                    FixtureB185::class => static function () {
                        return new FixtureB185();
                    },
                    FixtureB186::class => static function () {
                        return new FixtureB186();
                    },
                    FixtureB187::class => static function () {
                        return new FixtureB187();
                    },
                    FixtureB188::class => static function () {
                        return new FixtureB188();
                    },
                    FixtureB189::class => static function () {
                        return new FixtureB189();
                    },
                    FixtureB190::class => static function () {
                        return new FixtureB190();
                    },
                    FixtureB191::class => static function () {
                        return new FixtureB191();
                    },
                    FixtureB192::class => static function () {
                        return new FixtureB192();
                    },
                    FixtureB193::class => static function () {
                        return new FixtureB193();
                    },
                    FixtureB194::class => static function () {
                        return new FixtureB194();
                    },
                    FixtureB195::class => static function () {
                        return new FixtureB195();
                    },
                    FixtureB196::class => static function () {
                        return new FixtureB196();
                    },
                    FixtureB197::class => static function () {
                        return new FixtureB197();
                    },
                    FixtureB198::class => static function () {
                        return new FixtureB198();
                    },
                    FixtureB199::class => static function () {
                        return new FixtureB199();
                    },
                    FixtureB200::class => static function () {
                        return new FixtureB200();
                    },
                    FixtureB201::class => static function () {
                        return new FixtureB201();
                    },
                    FixtureB202::class => static function () {
                        return new FixtureB202();
                    },
                    FixtureB203::class => static function () {
                        return new FixtureB203();
                    },
                    FixtureB204::class => static function () {
                        return new FixtureB204();
                    },
                    FixtureB205::class => static function () {
                        return new FixtureB205();
                    },
                    FixtureB206::class => static function () {
                        return new FixtureB206();
                    },
                    FixtureB207::class => static function () {
                        return new FixtureB207();
                    },
                    FixtureB208::class => static function () {
                        return new FixtureB208();
                    },
                    FixtureB209::class => static function () {
                        return new FixtureB209();
                    },
                    FixtureB210::class => static function () {
                        return new FixtureB210();
                    },
                    FixtureB211::class => static function () {
                        return new FixtureB211();
                    },
                    FixtureB212::class => static function () {
                        return new FixtureB212();
                    },
                    FixtureB213::class => static function () {
                        return new FixtureB213();
                    },
                    FixtureB214::class => static function () {
                        return new FixtureB214();
                    },
                    FixtureB215::class => static function () {
                        return new FixtureB215();
                    },
                    FixtureB216::class => static function () {
                        return new FixtureB216();
                    },
                    FixtureB217::class => static function () {
                        return new FixtureB217();
                    },
                    FixtureB218::class => static function () {
                        return new FixtureB218();
                    },
                    FixtureB219::class => static function () {
                        return new FixtureB219();
                    },
                    FixtureB220::class => static function () {
                        return new FixtureB220();
                    },
                    FixtureB221::class => static function () {
                        return new FixtureB221();
                    },
                    FixtureB222::class => static function () {
                        return new FixtureB222();
                    },
                    FixtureB223::class => static function () {
                        return new FixtureB223();
                    },
                    FixtureB224::class => static function () {
                        return new FixtureB224();
                    },
                    FixtureB225::class => static function () {
                        return new FixtureB225();
                    },
                    FixtureB226::class => static function () {
                        return new FixtureB226();
                    },
                    FixtureB227::class => static function () {
                        return new FixtureB227();
                    },
                    FixtureB228::class => static function () {
                        return new FixtureB228();
                    },
                    FixtureB229::class => static function () {
                        return new FixtureB229();
                    },
                    FixtureB230::class => static function () {
                        return new FixtureB230();
                    },
                    FixtureB231::class => static function () {
                        return new FixtureB231();
                    },
                    FixtureB232::class => static function () {
                        return new FixtureB232();
                    },
                    FixtureB233::class => static function () {
                        return new FixtureB233();
                    },
                    FixtureB234::class => static function () {
                        return new FixtureB234();
                    },
                    FixtureB235::class => static function () {
                        return new FixtureB235();
                    },
                    FixtureB236::class => static function () {
                        return new FixtureB236();
                    },
                    FixtureB237::class => static function () {
                        return new FixtureB237();
                    },
                    FixtureB238::class => static function () {
                        return new FixtureB238();
                    },
                    FixtureB239::class => static function () {
                        return new FixtureB239();
                    },
                    FixtureB240::class => static function () {
                        return new FixtureB240();
                    },
                    FixtureB241::class => static function () {
                        return new FixtureB241();
                    },
                    FixtureB242::class => static function () {
                        return new FixtureB242();
                    },
                    FixtureB243::class => static function () {
                        return new FixtureB243();
                    },
                    FixtureB244::class => static function () {
                        return new FixtureB244();
                    },
                    FixtureB245::class => static function () {
                        return new FixtureB245();
                    },
                    FixtureB246::class => static function () {
                        return new FixtureB246();
                    },
                    FixtureB247::class => static function () {
                        return new FixtureB247();
                    },
                    FixtureB248::class => static function () {
                        return new FixtureB248();
                    },
                    FixtureB249::class => static function () {
                        return new FixtureB249();
                    },
                    FixtureB250::class => static function () {
                        return new FixtureB250();
                    },
                    FixtureB251::class => static function () {
                        return new FixtureB251();
                    },
                    FixtureB252::class => static function () {
                        return new FixtureB252();
                    },
                    FixtureB253::class => static function () {
                        return new FixtureB253();
                    },
                    FixtureB254::class => static function () {
                        return new FixtureB254();
                    },
                    FixtureB255::class => static function () {
                        return new FixtureB255();
                    },
                    FixtureB256::class => static function () {
                        return new FixtureB256();
                    },
                    FixtureB257::class => static function () {
                        return new FixtureB257();
                    },
                    FixtureB258::class => static function () {
                        return new FixtureB258();
                    },
                    FixtureB259::class => static function () {
                        return new FixtureB259();
                    },
                    FixtureB260::class => static function () {
                        return new FixtureB260();
                    },
                    FixtureB261::class => static function () {
                        return new FixtureB261();
                    },
                    FixtureB262::class => static function () {
                        return new FixtureB262();
                    },
                    FixtureB263::class => static function () {
                        return new FixtureB263();
                    },
                    FixtureB264::class => static function () {
                        return new FixtureB264();
                    },
                    FixtureB265::class => static function () {
                        return new FixtureB265();
                    },
                    FixtureB266::class => static function () {
                        return new FixtureB266();
                    },
                    FixtureB267::class => static function () {
                        return new FixtureB267();
                    },
                    FixtureB268::class => static function () {
                        return new FixtureB268();
                    },
                    FixtureB269::class => static function () {
                        return new FixtureB269();
                    },
                    FixtureB270::class => static function () {
                        return new FixtureB270();
                    },
                    FixtureB271::class => static function () {
                        return new FixtureB271();
                    },
                    FixtureB272::class => static function () {
                        return new FixtureB272();
                    },
                    FixtureB273::class => static function () {
                        return new FixtureB273();
                    },
                    FixtureB274::class => static function () {
                        return new FixtureB274();
                    },
                    FixtureB275::class => static function () {
                        return new FixtureB275();
                    },
                    FixtureB276::class => static function () {
                        return new FixtureB276();
                    },
                    FixtureB277::class => static function () {
                        return new FixtureB277();
                    },
                    FixtureB278::class => static function () {
                        return new FixtureB278();
                    },
                    FixtureB279::class => static function () {
                        return new FixtureB279();
                    },
                    FixtureB280::class => static function () {
                        return new FixtureB280();
                    },
                    FixtureB281::class => static function () {
                        return new FixtureB281();
                    },
                    FixtureB282::class => static function () {
                        return new FixtureB282();
                    },
                    FixtureB283::class => static function () {
                        return new FixtureB283();
                    },
                    FixtureB284::class => static function () {
                        return new FixtureB284();
                    },
                    FixtureB285::class => static function () {
                        return new FixtureB285();
                    },
                    FixtureB286::class => static function () {
                        return new FixtureB286();
                    },
                    FixtureB287::class => static function () {
                        return new FixtureB287();
                    },
                    FixtureB288::class => static function () {
                        return new FixtureB288();
                    },
                    FixtureB289::class => static function () {
                        return new FixtureB289();
                    },
                    FixtureB290::class => static function () {
                        return new FixtureB290();
                    },
                    FixtureB291::class => static function () {
                        return new FixtureB291();
                    },
                    FixtureB292::class => static function () {
                        return new FixtureB292();
                    },
                    FixtureB293::class => static function () {
                        return new FixtureB293();
                    },
                    FixtureB294::class => static function () {
                        return new FixtureB294();
                    },
                    FixtureB295::class => static function () {
                        return new FixtureB295();
                    },
                    FixtureB296::class => static function () {
                        return new FixtureB296();
                    },
                    FixtureB297::class => static function () {
                        return new FixtureB297();
                    },
                    FixtureB298::class => static function () {
                        return new FixtureB298();
                    },
                    FixtureB299::class => static function () {
                        return new FixtureB299();
                    },
                    FixtureB300::class => static function () {
                        return new FixtureB300();
                    },
                    FixtureB301::class => static function () {
                        return new FixtureB301();
                    },
                    FixtureB302::class => static function () {
                        return new FixtureB302();
                    },
                    FixtureB303::class => static function () {
                        return new FixtureB303();
                    },
                    FixtureB304::class => static function () {
                        return new FixtureB304();
                    },
                    FixtureB305::class => static function () {
                        return new FixtureB305();
                    },
                    FixtureB306::class => static function () {
                        return new FixtureB306();
                    },
                    FixtureB307::class => static function () {
                        return new FixtureB307();
                    },
                    FixtureB308::class => static function () {
                        return new FixtureB308();
                    },
                    FixtureB309::class => static function () {
                        return new FixtureB309();
                    },
                    FixtureB310::class => static function () {
                        return new FixtureB310();
                    },
                    FixtureB311::class => static function () {
                        return new FixtureB311();
                    },
                    FixtureB312::class => static function () {
                        return new FixtureB312();
                    },
                    FixtureB313::class => static function () {
                        return new FixtureB313();
                    },
                    FixtureB314::class => static function () {
                        return new FixtureB314();
                    },
                    FixtureB315::class => static function () {
                        return new FixtureB315();
                    },
                    FixtureB316::class => static function () {
                        return new FixtureB316();
                    },
                    FixtureB317::class => static function () {
                        return new FixtureB317();
                    },
                    FixtureB318::class => static function () {
                        return new FixtureB318();
                    },
                    FixtureB319::class => static function () {
                        return new FixtureB319();
                    },
                    FixtureB320::class => static function () {
                        return new FixtureB320();
                    },
                    FixtureB321::class => static function () {
                        return new FixtureB321();
                    },
                    FixtureB322::class => static function () {
                        return new FixtureB322();
                    },
                    FixtureB323::class => static function () {
                        return new FixtureB323();
                    },
                    FixtureB324::class => static function () {
                        return new FixtureB324();
                    },
                    FixtureB325::class => static function () {
                        return new FixtureB325();
                    },
                    FixtureB326::class => static function () {
                        return new FixtureB326();
                    },
                    FixtureB327::class => static function () {
                        return new FixtureB327();
                    },
                    FixtureB328::class => static function () {
                        return new FixtureB328();
                    },
                    FixtureB329::class => static function () {
                        return new FixtureB329();
                    },
                    FixtureB330::class => static function () {
                        return new FixtureB330();
                    },
                    FixtureB331::class => static function () {
                        return new FixtureB331();
                    },
                    FixtureB332::class => static function () {
                        return new FixtureB332();
                    },
                    FixtureB333::class => static function () {
                        return new FixtureB333();
                    },
                    FixtureB334::class => static function () {
                        return new FixtureB334();
                    },
                    FixtureB335::class => static function () {
                        return new FixtureB335();
                    },
                    FixtureB336::class => static function () {
                        return new FixtureB336();
                    },
                    FixtureB337::class => static function () {
                        return new FixtureB337();
                    },
                    FixtureB338::class => static function () {
                        return new FixtureB338();
                    },
                    FixtureB339::class => static function () {
                        return new FixtureB339();
                    },
                    FixtureB340::class => static function () {
                        return new FixtureB340();
                    },
                    FixtureB341::class => static function () {
                        return new FixtureB341();
                    },
                    FixtureB342::class => static function () {
                        return new FixtureB342();
                    },
                    FixtureB343::class => static function () {
                        return new FixtureB343();
                    },
                    FixtureB344::class => static function () {
                        return new FixtureB344();
                    },
                    FixtureB345::class => static function () {
                        return new FixtureB345();
                    },
                    FixtureB346::class => static function () {
                        return new FixtureB346();
                    },
                    FixtureB347::class => static function () {
                        return new FixtureB347();
                    },
                    FixtureB348::class => static function () {
                        return new FixtureB348();
                    },
                    FixtureB349::class => static function () {
                        return new FixtureB349();
                    },
                    FixtureB350::class => static function () {
                        return new FixtureB350();
                    },
                    FixtureB351::class => static function () {
                        return new FixtureB351();
                    },
                    FixtureB352::class => static function () {
                        return new FixtureB352();
                    },
                    FixtureB353::class => static function () {
                        return new FixtureB353();
                    },
                    FixtureB354::class => static function () {
                        return new FixtureB354();
                    },
                    FixtureB355::class => static function () {
                        return new FixtureB355();
                    },
                    FixtureB356::class => static function () {
                        return new FixtureB356();
                    },
                    FixtureB357::class => static function () {
                        return new FixtureB357();
                    },
                    FixtureB358::class => static function () {
                        return new FixtureB358();
                    },
                    FixtureB359::class => static function () {
                        return new FixtureB359();
                    },
                    FixtureB360::class => static function () {
                        return new FixtureB360();
                    },
                    FixtureB361::class => static function () {
                        return new FixtureB361();
                    },
                    FixtureB362::class => static function () {
                        return new FixtureB362();
                    },
                    FixtureB363::class => static function () {
                        return new FixtureB363();
                    },
                    FixtureB364::class => static function () {
                        return new FixtureB364();
                    },
                    FixtureB365::class => static function () {
                        return new FixtureB365();
                    },
                    FixtureB366::class => static function () {
                        return new FixtureB366();
                    },
                    FixtureB367::class => static function () {
                        return new FixtureB367();
                    },
                    FixtureB368::class => static function () {
                        return new FixtureB368();
                    },
                    FixtureB369::class => static function () {
                        return new FixtureB369();
                    },
                    FixtureB370::class => static function () {
                        return new FixtureB370();
                    },
                    FixtureB371::class => static function () {
                        return new FixtureB371();
                    },
                    FixtureB372::class => static function () {
                        return new FixtureB372();
                    },
                    FixtureB373::class => static function () {
                        return new FixtureB373();
                    },
                    FixtureB374::class => static function () {
                        return new FixtureB374();
                    },
                    FixtureB375::class => static function () {
                        return new FixtureB375();
                    },
                    FixtureB376::class => static function () {
                        return new FixtureB376();
                    },
                    FixtureB377::class => static function () {
                        return new FixtureB377();
                    },
                    FixtureB378::class => static function () {
                        return new FixtureB378();
                    },
                    FixtureB379::class => static function () {
                        return new FixtureB379();
                    },
                    FixtureB380::class => static function () {
                        return new FixtureB380();
                    },
                    FixtureB381::class => static function () {
                        return new FixtureB381();
                    },
                    FixtureB382::class => static function () {
                        return new FixtureB382();
                    },
                    FixtureB383::class => static function () {
                        return new FixtureB383();
                    },
                    FixtureB384::class => static function () {
                        return new FixtureB384();
                    },
                    FixtureB385::class => static function () {
                        return new FixtureB385();
                    },
                    FixtureB386::class => static function () {
                        return new FixtureB386();
                    },
                    FixtureB387::class => static function () {
                        return new FixtureB387();
                    },
                    FixtureB388::class => static function () {
                        return new FixtureB388();
                    },
                    FixtureB389::class => static function () {
                        return new FixtureB389();
                    },
                    FixtureB390::class => static function () {
                        return new FixtureB390();
                    },
                    FixtureB391::class => static function () {
                        return new FixtureB391();
                    },
                    FixtureB392::class => static function () {
                        return new FixtureB392();
                    },
                    FixtureB393::class => static function () {
                        return new FixtureB393();
                    },
                    FixtureB394::class => static function () {
                        return new FixtureB394();
                    },
                    FixtureB395::class => static function () {
                        return new FixtureB395();
                    },
                    FixtureB396::class => static function () {
                        return new FixtureB396();
                    },
                    FixtureB397::class => static function () {
                        return new FixtureB397();
                    },
                    FixtureB398::class => static function () {
                        return new FixtureB398();
                    },
                    FixtureB399::class => static function () {
                        return new FixtureB399();
                    },
                    FixtureB400::class => static function () {
                        return new FixtureB400();
                    },
                    FixtureB401::class => static function () {
                        return new FixtureB401();
                    },
                    FixtureB402::class => static function () {
                        return new FixtureB402();
                    },
                    FixtureB403::class => static function () {
                        return new FixtureB403();
                    },
                    FixtureB404::class => static function () {
                        return new FixtureB404();
                    },
                    FixtureB405::class => static function () {
                        return new FixtureB405();
                    },
                    FixtureB406::class => static function () {
                        return new FixtureB406();
                    },
                    FixtureB407::class => static function () {
                        return new FixtureB407();
                    },
                    FixtureB408::class => static function () {
                        return new FixtureB408();
                    },
                    FixtureB409::class => static function () {
                        return new FixtureB409();
                    },
                    FixtureB410::class => static function () {
                        return new FixtureB410();
                    },
                    FixtureB411::class => static function () {
                        return new FixtureB411();
                    },
                    FixtureB412::class => static function () {
                        return new FixtureB412();
                    },
                    FixtureB413::class => static function () {
                        return new FixtureB413();
                    },
                    FixtureB414::class => static function () {
                        return new FixtureB414();
                    },
                    FixtureB415::class => static function () {
                        return new FixtureB415();
                    },
                    FixtureB416::class => static function () {
                        return new FixtureB416();
                    },
                    FixtureB417::class => static function () {
                        return new FixtureB417();
                    },
                    FixtureB418::class => static function () {
                        return new FixtureB418();
                    },
                    FixtureB419::class => static function () {
                        return new FixtureB419();
                    },
                    FixtureB420::class => static function () {
                        return new FixtureB420();
                    },
                    FixtureB421::class => static function () {
                        return new FixtureB421();
                    },
                    FixtureB422::class => static function () {
                        return new FixtureB422();
                    },
                    FixtureB423::class => static function () {
                        return new FixtureB423();
                    },
                    FixtureB424::class => static function () {
                        return new FixtureB424();
                    },
                    FixtureB425::class => static function () {
                        return new FixtureB425();
                    },
                    FixtureB426::class => static function () {
                        return new FixtureB426();
                    },
                    FixtureB427::class => static function () {
                        return new FixtureB427();
                    },
                    FixtureB428::class => static function () {
                        return new FixtureB428();
                    },
                    FixtureB429::class => static function () {
                        return new FixtureB429();
                    },
                    FixtureB430::class => static function () {
                        return new FixtureB430();
                    },
                    FixtureB431::class => static function () {
                        return new FixtureB431();
                    },
                    FixtureB432::class => static function () {
                        return new FixtureB432();
                    },
                    FixtureB433::class => static function () {
                        return new FixtureB433();
                    },
                    FixtureB434::class => static function () {
                        return new FixtureB434();
                    },
                    FixtureB435::class => static function () {
                        return new FixtureB435();
                    },
                    FixtureB436::class => static function () {
                        return new FixtureB436();
                    },
                    FixtureB437::class => static function () {
                        return new FixtureB437();
                    },
                    FixtureB438::class => static function () {
                        return new FixtureB438();
                    },
                    FixtureB439::class => static function () {
                        return new FixtureB439();
                    },
                    FixtureB440::class => static function () {
                        return new FixtureB440();
                    },
                    FixtureB441::class => static function () {
                        return new FixtureB441();
                    },
                    FixtureB442::class => static function () {
                        return new FixtureB442();
                    },
                    FixtureB443::class => static function () {
                        return new FixtureB443();
                    },
                    FixtureB444::class => static function () {
                        return new FixtureB444();
                    },
                    FixtureB445::class => static function () {
                        return new FixtureB445();
                    },
                    FixtureB446::class => static function () {
                        return new FixtureB446();
                    },
                    FixtureB447::class => static function () {
                        return new FixtureB447();
                    },
                    FixtureB448::class => static function () {
                        return new FixtureB448();
                    },
                    FixtureB449::class => static function () {
                        return new FixtureB449();
                    },
                    FixtureB450::class => static function () {
                        return new FixtureB450();
                    },
                    FixtureB451::class => static function () {
                        return new FixtureB451();
                    },
                    FixtureB452::class => static function () {
                        return new FixtureB452();
                    },
                    FixtureB453::class => static function () {
                        return new FixtureB453();
                    },
                    FixtureB454::class => static function () {
                        return new FixtureB454();
                    },
                    FixtureB455::class => static function () {
                        return new FixtureB455();
                    },
                    FixtureB456::class => static function () {
                        return new FixtureB456();
                    },
                    FixtureB457::class => static function () {
                        return new FixtureB457();
                    },
                    FixtureB458::class => static function () {
                        return new FixtureB458();
                    },
                    FixtureB459::class => static function () {
                        return new FixtureB459();
                    },
                    FixtureB460::class => static function () {
                        return new FixtureB460();
                    },
                    FixtureB461::class => static function () {
                        return new FixtureB461();
                    },
                    FixtureB462::class => static function () {
                        return new FixtureB462();
                    },
                    FixtureB463::class => static function () {
                        return new FixtureB463();
                    },
                    FixtureB464::class => static function () {
                        return new FixtureB464();
                    },
                    FixtureB465::class => static function () {
                        return new FixtureB465();
                    },
                    FixtureB466::class => static function () {
                        return new FixtureB466();
                    },
                    FixtureB467::class => static function () {
                        return new FixtureB467();
                    },
                    FixtureB468::class => static function () {
                        return new FixtureB468();
                    },
                    FixtureB469::class => static function () {
                        return new FixtureB469();
                    },
                    FixtureB470::class => static function () {
                        return new FixtureB470();
                    },
                    FixtureB471::class => static function () {
                        return new FixtureB471();
                    },
                    FixtureB472::class => static function () {
                        return new FixtureB472();
                    },
                    FixtureB473::class => static function () {
                        return new FixtureB473();
                    },
                    FixtureB474::class => static function () {
                        return new FixtureB474();
                    },
                    FixtureB475::class => static function () {
                        return new FixtureB475();
                    },
                    FixtureB476::class => static function () {
                        return new FixtureB476();
                    },
                    FixtureB477::class => static function () {
                        return new FixtureB477();
                    },
                    FixtureB478::class => static function () {
                        return new FixtureB478();
                    },
                    FixtureB479::class => static function () {
                        return new FixtureB479();
                    },
                    FixtureB480::class => static function () {
                        return new FixtureB480();
                    },
                    FixtureB481::class => static function () {
                        return new FixtureB481();
                    },
                    FixtureB482::class => static function () {
                        return new FixtureB482();
                    },
                    FixtureB483::class => static function () {
                        return new FixtureB483();
                    },
                    FixtureB484::class => static function () {
                        return new FixtureB484();
                    },
                    FixtureB485::class => static function () {
                        return new FixtureB485();
                    },
                    FixtureB486::class => static function () {
                        return new FixtureB486();
                    },
                    FixtureB487::class => static function () {
                        return new FixtureB487();
                    },
                    FixtureB488::class => static function () {
                        return new FixtureB488();
                    },
                    FixtureB489::class => static function () {
                        return new FixtureB489();
                    },
                    FixtureB490::class => static function () {
                        return new FixtureB490();
                    },
                    FixtureB491::class => static function () {
                        return new FixtureB491();
                    },
                    FixtureB492::class => static function () {
                        return new FixtureB492();
                    },
                    FixtureB493::class => static function () {
                        return new FixtureB493();
                    },
                    FixtureB494::class => static function () {
                        return new FixtureB494();
                    },
                    FixtureB495::class => static function () {
                        return new FixtureB495();
                    },
                    FixtureB496::class => static function () {
                        return new FixtureB496();
                    },
                    FixtureB497::class => static function () {
                        return new FixtureB497();
                    },
                    FixtureB498::class => static function () {
                        return new FixtureB498();
                    },
                    FixtureB499::class => static function () {
                        return new FixtureB499();
                    },
                    FixtureB500::class => static function () {
                        return new FixtureB500();
                    },
                    FixtureB501::class => static function () {
                        return new FixtureB501();
                    },
                    FixtureB502::class => static function () {
                        return new FixtureB502();
                    },
                    FixtureB503::class => static function () {
                        return new FixtureB503();
                    },
                    FixtureB504::class => static function () {
                        return new FixtureB504();
                    },
                    FixtureB505::class => static function () {
                        return new FixtureB505();
                    },
                    FixtureB506::class => static function () {
                        return new FixtureB506();
                    },
                    FixtureB507::class => static function () {
                        return new FixtureB507();
                    },
                    FixtureB508::class => static function () {
                        return new FixtureB508();
                    },
                    FixtureB509::class => static function () {
                        return new FixtureB509();
                    },
                    FixtureB510::class => static function () {
                        return new FixtureB510();
                    },
                    FixtureB511::class => static function () {
                        return new FixtureB511();
                    },
                    FixtureB512::class => static function () {
                        return new FixtureB512();
                    },
                    FixtureB513::class => static function () {
                        return new FixtureB513();
                    },
                    FixtureB514::class => static function () {
                        return new FixtureB514();
                    },
                    FixtureB515::class => static function () {
                        return new FixtureB515();
                    },
                    FixtureB516::class => static function () {
                        return new FixtureB516();
                    },
                    FixtureB517::class => static function () {
                        return new FixtureB517();
                    },
                    FixtureB518::class => static function () {
                        return new FixtureB518();
                    },
                    FixtureB519::class => static function () {
                        return new FixtureB519();
                    },
                    FixtureB520::class => static function () {
                        return new FixtureB520();
                    },
                    FixtureB521::class => static function () {
                        return new FixtureB521();
                    },
                    FixtureB522::class => static function () {
                        return new FixtureB522();
                    },
                    FixtureB523::class => static function () {
                        return new FixtureB523();
                    },
                    FixtureB524::class => static function () {
                        return new FixtureB524();
                    },
                    FixtureB525::class => static function () {
                        return new FixtureB525();
                    },
                    FixtureB526::class => static function () {
                        return new FixtureB526();
                    },
                    FixtureB527::class => static function () {
                        return new FixtureB527();
                    },
                    FixtureB528::class => static function () {
                        return new FixtureB528();
                    },
                    FixtureB529::class => static function () {
                        return new FixtureB529();
                    },
                    FixtureB530::class => static function () {
                        return new FixtureB530();
                    },
                    FixtureB531::class => static function () {
                        return new FixtureB531();
                    },
                    FixtureB532::class => static function () {
                        return new FixtureB532();
                    },
                    FixtureB533::class => static function () {
                        return new FixtureB533();
                    },
                    FixtureB534::class => static function () {
                        return new FixtureB534();
                    },
                    FixtureB535::class => static function () {
                        return new FixtureB535();
                    },
                    FixtureB536::class => static function () {
                        return new FixtureB536();
                    },
                    FixtureB537::class => static function () {
                        return new FixtureB537();
                    },
                    FixtureB538::class => static function () {
                        return new FixtureB538();
                    },
                    FixtureB539::class => static function () {
                        return new FixtureB539();
                    },
                    FixtureB540::class => static function () {
                        return new FixtureB540();
                    },
                    FixtureB541::class => static function () {
                        return new FixtureB541();
                    },
                    FixtureB542::class => static function () {
                        return new FixtureB542();
                    },
                    FixtureB543::class => static function () {
                        return new FixtureB543();
                    },
                    FixtureB544::class => static function () {
                        return new FixtureB544();
                    },
                    FixtureB545::class => static function () {
                        return new FixtureB545();
                    },
                    FixtureB546::class => static function () {
                        return new FixtureB546();
                    },
                    FixtureB547::class => static function () {
                        return new FixtureB547();
                    },
                    FixtureB548::class => static function () {
                        return new FixtureB548();
                    },
                    FixtureB549::class => static function () {
                        return new FixtureB549();
                    },
                    FixtureB550::class => static function () {
                        return new FixtureB550();
                    },
                    FixtureB551::class => static function () {
                        return new FixtureB551();
                    },
                    FixtureB552::class => static function () {
                        return new FixtureB552();
                    },
                    FixtureB553::class => static function () {
                        return new FixtureB553();
                    },
                    FixtureB554::class => static function () {
                        return new FixtureB554();
                    },
                    FixtureB555::class => static function () {
                        return new FixtureB555();
                    },
                    FixtureB556::class => static function () {
                        return new FixtureB556();
                    },
                    FixtureB557::class => static function () {
                        return new FixtureB557();
                    },
                    FixtureB558::class => static function () {
                        return new FixtureB558();
                    },
                    FixtureB559::class => static function () {
                        return new FixtureB559();
                    },
                    FixtureB560::class => static function () {
                        return new FixtureB560();
                    },
                    FixtureB561::class => static function () {
                        return new FixtureB561();
                    },
                    FixtureB562::class => static function () {
                        return new FixtureB562();
                    },
                    FixtureB563::class => static function () {
                        return new FixtureB563();
                    },
                    FixtureB564::class => static function () {
                        return new FixtureB564();
                    },
                    FixtureB565::class => static function () {
                        return new FixtureB565();
                    },
                    FixtureB566::class => static function () {
                        return new FixtureB566();
                    },
                    FixtureB567::class => static function () {
                        return new FixtureB567();
                    },
                    FixtureB568::class => static function () {
                        return new FixtureB568();
                    },
                    FixtureB569::class => static function () {
                        return new FixtureB569();
                    },
                    FixtureB570::class => static function () {
                        return new FixtureB570();
                    },
                    FixtureB571::class => static function () {
                        return new FixtureB571();
                    },
                    FixtureB572::class => static function () {
                        return new FixtureB572();
                    },
                    FixtureB573::class => static function () {
                        return new FixtureB573();
                    },
                    FixtureB574::class => static function () {
                        return new FixtureB574();
                    },
                    FixtureB575::class => static function () {
                        return new FixtureB575();
                    },
                    FixtureB576::class => static function () {
                        return new FixtureB576();
                    },
                    FixtureB577::class => static function () {
                        return new FixtureB577();
                    },
                    FixtureB578::class => static function () {
                        return new FixtureB578();
                    },
                    FixtureB579::class => static function () {
                        return new FixtureB579();
                    },
                    FixtureB580::class => static function () {
                        return new FixtureB580();
                    },
                    FixtureB581::class => static function () {
                        return new FixtureB581();
                    },
                    FixtureB582::class => static function () {
                        return new FixtureB582();
                    },
                    FixtureB583::class => static function () {
                        return new FixtureB583();
                    },
                    FixtureB584::class => static function () {
                        return new FixtureB584();
                    },
                    FixtureB585::class => static function () {
                        return new FixtureB585();
                    },
                    FixtureB586::class => static function () {
                        return new FixtureB586();
                    },
                    FixtureB587::class => static function () {
                        return new FixtureB587();
                    },
                    FixtureB588::class => static function () {
                        return new FixtureB588();
                    },
                    FixtureB589::class => static function () {
                        return new FixtureB589();
                    },
                    FixtureB590::class => static function () {
                        return new FixtureB590();
                    },
                    FixtureB591::class => static function () {
                        return new FixtureB591();
                    },
                    FixtureB592::class => static function () {
                        return new FixtureB592();
                    },
                    FixtureB593::class => static function () {
                        return new FixtureB593();
                    },
                    FixtureB594::class => static function () {
                        return new FixtureB594();
                    },
                    FixtureB595::class => static function () {
                        return new FixtureB595();
                    },
                    FixtureB596::class => static function () {
                        return new FixtureB596();
                    },
                    FixtureB597::class => static function () {
                        return new FixtureB597();
                    },
                    FixtureB598::class => static function () {
                        return new FixtureB598();
                    },
                    FixtureB599::class => static function () {
                        return new FixtureB599();
                    },
                    FixtureB600::class => static function () {
                        return new FixtureB600();
                    },
                    FixtureB601::class => static function () {
                        return new FixtureB601();
                    },
                    FixtureB602::class => static function () {
                        return new FixtureB602();
                    },
                    FixtureB603::class => static function () {
                        return new FixtureB603();
                    },
                    FixtureB604::class => static function () {
                        return new FixtureB604();
                    },
                    FixtureB605::class => static function () {
                        return new FixtureB605();
                    },
                    FixtureB606::class => static function () {
                        return new FixtureB606();
                    },
                    FixtureB607::class => static function () {
                        return new FixtureB607();
                    },
                    FixtureB608::class => static function () {
                        return new FixtureB608();
                    },
                    FixtureB609::class => static function () {
                        return new FixtureB609();
                    },
                    FixtureB610::class => static function () {
                        return new FixtureB610();
                    },
                    FixtureB611::class => static function () {
                        return new FixtureB611();
                    },
                    FixtureB612::class => static function () {
                        return new FixtureB612();
                    },
                    FixtureB613::class => static function () {
                        return new FixtureB613();
                    },
                    FixtureB614::class => static function () {
                        return new FixtureB614();
                    },
                    FixtureB615::class => static function () {
                        return new FixtureB615();
                    },
                    FixtureB616::class => static function () {
                        return new FixtureB616();
                    },
                    FixtureB617::class => static function () {
                        return new FixtureB617();
                    },
                    FixtureB618::class => static function () {
                        return new FixtureB618();
                    },
                    FixtureB619::class => static function () {
                        return new FixtureB619();
                    },
                    FixtureB620::class => static function () {
                        return new FixtureB620();
                    },
                    FixtureB621::class => static function () {
                        return new FixtureB621();
                    },
                    FixtureB622::class => static function () {
                        return new FixtureB622();
                    },
                    FixtureB623::class => static function () {
                        return new FixtureB623();
                    },
                    FixtureB624::class => static function () {
                        return new FixtureB624();
                    },
                    FixtureB625::class => static function () {
                        return new FixtureB625();
                    },
                    FixtureB626::class => static function () {
                        return new FixtureB626();
                    },
                    FixtureB627::class => static function () {
                        return new FixtureB627();
                    },
                    FixtureB628::class => static function () {
                        return new FixtureB628();
                    },
                    FixtureB629::class => static function () {
                        return new FixtureB629();
                    },
                    FixtureB630::class => static function () {
                        return new FixtureB630();
                    },
                    FixtureB631::class => static function () {
                        return new FixtureB631();
                    },
                    FixtureB632::class => static function () {
                        return new FixtureB632();
                    },
                    FixtureB633::class => static function () {
                        return new FixtureB633();
                    },
                    FixtureB634::class => static function () {
                        return new FixtureB634();
                    },
                    FixtureB635::class => static function () {
                        return new FixtureB635();
                    },
                    FixtureB636::class => static function () {
                        return new FixtureB636();
                    },
                    FixtureB637::class => static function () {
                        return new FixtureB637();
                    },
                    FixtureB638::class => static function () {
                        return new FixtureB638();
                    },
                    FixtureB639::class => static function () {
                        return new FixtureB639();
                    },
                    FixtureB640::class => static function () {
                        return new FixtureB640();
                    },
                    FixtureB641::class => static function () {
                        return new FixtureB641();
                    },
                    FixtureB642::class => static function () {
                        return new FixtureB642();
                    },
                    FixtureB643::class => static function () {
                        return new FixtureB643();
                    },
                    FixtureB644::class => static function () {
                        return new FixtureB644();
                    },
                    FixtureB645::class => static function () {
                        return new FixtureB645();
                    },
                    FixtureB646::class => static function () {
                        return new FixtureB646();
                    },
                    FixtureB647::class => static function () {
                        return new FixtureB647();
                    },
                    FixtureB648::class => static function () {
                        return new FixtureB648();
                    },
                    FixtureB649::class => static function () {
                        return new FixtureB649();
                    },
                    FixtureB650::class => static function () {
                        return new FixtureB650();
                    },
                    FixtureB651::class => static function () {
                        return new FixtureB651();
                    },
                    FixtureB652::class => static function () {
                        return new FixtureB652();
                    },
                    FixtureB653::class => static function () {
                        return new FixtureB653();
                    },
                    FixtureB654::class => static function () {
                        return new FixtureB654();
                    },
                    FixtureB655::class => static function () {
                        return new FixtureB655();
                    },
                    FixtureB656::class => static function () {
                        return new FixtureB656();
                    },
                    FixtureB657::class => static function () {
                        return new FixtureB657();
                    },
                    FixtureB658::class => static function () {
                        return new FixtureB658();
                    },
                    FixtureB659::class => static function () {
                        return new FixtureB659();
                    },
                    FixtureB660::class => static function () {
                        return new FixtureB660();
                    },
                    FixtureB661::class => static function () {
                        return new FixtureB661();
                    },
                    FixtureB662::class => static function () {
                        return new FixtureB662();
                    },
                    FixtureB663::class => static function () {
                        return new FixtureB663();
                    },
                    FixtureB664::class => static function () {
                        return new FixtureB664();
                    },
                    FixtureB665::class => static function () {
                        return new FixtureB665();
                    },
                    FixtureB666::class => static function () {
                        return new FixtureB666();
                    },
                    FixtureB667::class => static function () {
                        return new FixtureB667();
                    },
                    FixtureB668::class => static function () {
                        return new FixtureB668();
                    },
                    FixtureB669::class => static function () {
                        return new FixtureB669();
                    },
                    FixtureB670::class => static function () {
                        return new FixtureB670();
                    },
                    FixtureB671::class => static function () {
                        return new FixtureB671();
                    },
                    FixtureB672::class => static function () {
                        return new FixtureB672();
                    },
                    FixtureB673::class => static function () {
                        return new FixtureB673();
                    },
                    FixtureB674::class => static function () {
                        return new FixtureB674();
                    },
                    FixtureB675::class => static function () {
                        return new FixtureB675();
                    },
                    FixtureB676::class => static function () {
                        return new FixtureB676();
                    },
                    FixtureB677::class => static function () {
                        return new FixtureB677();
                    },
                    FixtureB678::class => static function () {
                        return new FixtureB678();
                    },
                    FixtureB679::class => static function () {
                        return new FixtureB679();
                    },
                    FixtureB680::class => static function () {
                        return new FixtureB680();
                    },
                    FixtureB681::class => static function () {
                        return new FixtureB681();
                    },
                    FixtureB682::class => static function () {
                        return new FixtureB682();
                    },
                    FixtureB683::class => static function () {
                        return new FixtureB683();
                    },
                    FixtureB684::class => static function () {
                        return new FixtureB684();
                    },
                    FixtureB685::class => static function () {
                        return new FixtureB685();
                    },
                    FixtureB686::class => static function () {
                        return new FixtureB686();
                    },
                    FixtureB687::class => static function () {
                        return new FixtureB687();
                    },
                    FixtureB688::class => static function () {
                        return new FixtureB688();
                    },
                    FixtureB689::class => static function () {
                        return new FixtureB689();
                    },
                    FixtureB690::class => static function () {
                        return new FixtureB690();
                    },
                    FixtureB691::class => static function () {
                        return new FixtureB691();
                    },
                    FixtureB692::class => static function () {
                        return new FixtureB692();
                    },
                    FixtureB693::class => static function () {
                        return new FixtureB693();
                    },
                    FixtureB694::class => static function () {
                        return new FixtureB694();
                    },
                    FixtureB695::class => static function () {
                        return new FixtureB695();
                    },
                    FixtureB696::class => static function () {
                        return new FixtureB696();
                    },
                    FixtureB697::class => static function () {
                        return new FixtureB697();
                    },
                    FixtureB698::class => static function () {
                        return new FixtureB698();
                    },
                    FixtureB699::class => static function () {
                        return new FixtureB699();
                    },
                    FixtureB700::class => static function () {
                        return new FixtureB700();
                    },
                    FixtureB701::class => static function () {
                        return new FixtureB701();
                    },
                    FixtureB702::class => static function () {
                        return new FixtureB702();
                    },
                    FixtureB703::class => static function () {
                        return new FixtureB703();
                    },
                    FixtureB704::class => static function () {
                        return new FixtureB704();
                    },
                    FixtureB705::class => static function () {
                        return new FixtureB705();
                    },
                    FixtureB706::class => static function () {
                        return new FixtureB706();
                    },
                    FixtureB707::class => static function () {
                        return new FixtureB707();
                    },
                    FixtureB708::class => static function () {
                        return new FixtureB708();
                    },
                    FixtureB709::class => static function () {
                        return new FixtureB709();
                    },
                    FixtureB710::class => static function () {
                        return new FixtureB710();
                    },
                    FixtureB711::class => static function () {
                        return new FixtureB711();
                    },
                    FixtureB712::class => static function () {
                        return new FixtureB712();
                    },
                    FixtureB713::class => static function () {
                        return new FixtureB713();
                    },
                    FixtureB714::class => static function () {
                        return new FixtureB714();
                    },
                    FixtureB715::class => static function () {
                        return new FixtureB715();
                    },
                    FixtureB716::class => static function () {
                        return new FixtureB716();
                    },
                    FixtureB717::class => static function () {
                        return new FixtureB717();
                    },
                    FixtureB718::class => static function () {
                        return new FixtureB718();
                    },
                    FixtureB719::class => static function () {
                        return new FixtureB719();
                    },
                    FixtureB720::class => static function () {
                        return new FixtureB720();
                    },
                    FixtureB721::class => static function () {
                        return new FixtureB721();
                    },
                    FixtureB722::class => static function () {
                        return new FixtureB722();
                    },
                    FixtureB723::class => static function () {
                        return new FixtureB723();
                    },
                    FixtureB724::class => static function () {
                        return new FixtureB724();
                    },
                    FixtureB725::class => static function () {
                        return new FixtureB725();
                    },
                    FixtureB726::class => static function () {
                        return new FixtureB726();
                    },
                    FixtureB727::class => static function () {
                        return new FixtureB727();
                    },
                    FixtureB728::class => static function () {
                        return new FixtureB728();
                    },
                    FixtureB729::class => static function () {
                        return new FixtureB729();
                    },
                    FixtureB730::class => static function () {
                        return new FixtureB730();
                    },
                    FixtureB731::class => static function () {
                        return new FixtureB731();
                    },
                    FixtureB732::class => static function () {
                        return new FixtureB732();
                    },
                    FixtureB733::class => static function () {
                        return new FixtureB733();
                    },
                    FixtureB734::class => static function () {
                        return new FixtureB734();
                    },
                    FixtureB735::class => static function () {
                        return new FixtureB735();
                    },
                    FixtureB736::class => static function () {
                        return new FixtureB736();
                    },
                    FixtureB737::class => static function () {
                        return new FixtureB737();
                    },
                    FixtureB738::class => static function () {
                        return new FixtureB738();
                    },
                    FixtureB739::class => static function () {
                        return new FixtureB739();
                    },
                    FixtureB740::class => static function () {
                        return new FixtureB740();
                    },
                    FixtureB741::class => static function () {
                        return new FixtureB741();
                    },
                    FixtureB742::class => static function () {
                        return new FixtureB742();
                    },
                    FixtureB743::class => static function () {
                        return new FixtureB743();
                    },
                    FixtureB744::class => static function () {
                        return new FixtureB744();
                    },
                    FixtureB745::class => static function () {
                        return new FixtureB745();
                    },
                    FixtureB746::class => static function () {
                        return new FixtureB746();
                    },
                    FixtureB747::class => static function () {
                        return new FixtureB747();
                    },
                    FixtureB748::class => static function () {
                        return new FixtureB748();
                    },
                    FixtureB749::class => static function () {
                        return new FixtureB749();
                    },
                    FixtureB750::class => static function () {
                        return new FixtureB750();
                    },
                    FixtureB751::class => static function () {
                        return new FixtureB751();
                    },
                    FixtureB752::class => static function () {
                        return new FixtureB752();
                    },
                    FixtureB753::class => static function () {
                        return new FixtureB753();
                    },
                    FixtureB754::class => static function () {
                        return new FixtureB754();
                    },
                    FixtureB755::class => static function () {
                        return new FixtureB755();
                    },
                    FixtureB756::class => static function () {
                        return new FixtureB756();
                    },
                    FixtureB757::class => static function () {
                        return new FixtureB757();
                    },
                    FixtureB758::class => static function () {
                        return new FixtureB758();
                    },
                    FixtureB759::class => static function () {
                        return new FixtureB759();
                    },
                    FixtureB760::class => static function () {
                        return new FixtureB760();
                    },
                    FixtureB761::class => static function () {
                        return new FixtureB761();
                    },
                    FixtureB762::class => static function () {
                        return new FixtureB762();
                    },
                    FixtureB763::class => static function () {
                        return new FixtureB763();
                    },
                    FixtureB764::class => static function () {
                        return new FixtureB764();
                    },
                    FixtureB765::class => static function () {
                        return new FixtureB765();
                    },
                    FixtureB766::class => static function () {
                        return new FixtureB766();
                    },
                    FixtureB767::class => static function () {
                        return new FixtureB767();
                    },
                    FixtureB768::class => static function () {
                        return new FixtureB768();
                    },
                    FixtureB769::class => static function () {
                        return new FixtureB769();
                    },
                    FixtureB770::class => static function () {
                        return new FixtureB770();
                    },
                    FixtureB771::class => static function () {
                        return new FixtureB771();
                    },
                    FixtureB772::class => static function () {
                        return new FixtureB772();
                    },
                    FixtureB773::class => static function () {
                        return new FixtureB773();
                    },
                    FixtureB774::class => static function () {
                        return new FixtureB774();
                    },
                    FixtureB775::class => static function () {
                        return new FixtureB775();
                    },
                    FixtureB776::class => static function () {
                        return new FixtureB776();
                    },
                    FixtureB777::class => static function () {
                        return new FixtureB777();
                    },
                    FixtureB778::class => static function () {
                        return new FixtureB778();
                    },
                    FixtureB779::class => static function () {
                        return new FixtureB779();
                    },
                    FixtureB780::class => static function () {
                        return new FixtureB780();
                    },
                    FixtureB781::class => static function () {
                        return new FixtureB781();
                    },
                    FixtureB782::class => static function () {
                        return new FixtureB782();
                    },
                    FixtureB783::class => static function () {
                        return new FixtureB783();
                    },
                    FixtureB784::class => static function () {
                        return new FixtureB784();
                    },
                    FixtureB785::class => static function () {
                        return new FixtureB785();
                    },
                    FixtureB786::class => static function () {
                        return new FixtureB786();
                    },
                    FixtureB787::class => static function () {
                        return new FixtureB787();
                    },
                    FixtureB788::class => static function () {
                        return new FixtureB788();
                    },
                    FixtureB789::class => static function () {
                        return new FixtureB789();
                    },
                    FixtureB790::class => static function () {
                        return new FixtureB790();
                    },
                    FixtureB791::class => static function () {
                        return new FixtureB791();
                    },
                    FixtureB792::class => static function () {
                        return new FixtureB792();
                    },
                    FixtureB793::class => static function () {
                        return new FixtureB793();
                    },
                    FixtureB794::class => static function () {
                        return new FixtureB794();
                    },
                    FixtureB795::class => static function () {
                        return new FixtureB795();
                    },
                    FixtureB796::class => static function () {
                        return new FixtureB796();
                    },
                    FixtureB797::class => static function () {
                        return new FixtureB797();
                    },
                    FixtureB798::class => static function () {
                        return new FixtureB798();
                    },
                    FixtureB799::class => static function () {
                        return new FixtureB799();
                    },
                    FixtureB800::class => static function () {
                        return new FixtureB800();
                    },
                    FixtureB801::class => static function () {
                        return new FixtureB801();
                    },
                    FixtureB802::class => static function () {
                        return new FixtureB802();
                    },
                    FixtureB803::class => static function () {
                        return new FixtureB803();
                    },
                    FixtureB804::class => static function () {
                        return new FixtureB804();
                    },
                    FixtureB805::class => static function () {
                        return new FixtureB805();
                    },
                    FixtureB806::class => static function () {
                        return new FixtureB806();
                    },
                    FixtureB807::class => static function () {
                        return new FixtureB807();
                    },
                    FixtureB808::class => static function () {
                        return new FixtureB808();
                    },
                    FixtureB809::class => static function () {
                        return new FixtureB809();
                    },
                    FixtureB810::class => static function () {
                        return new FixtureB810();
                    },
                    FixtureB811::class => static function () {
                        return new FixtureB811();
                    },
                    FixtureB812::class => static function () {
                        return new FixtureB812();
                    },
                    FixtureB813::class => static function () {
                        return new FixtureB813();
                    },
                    FixtureB814::class => static function () {
                        return new FixtureB814();
                    },
                    FixtureB815::class => static function () {
                        return new FixtureB815();
                    },
                    FixtureB816::class => static function () {
                        return new FixtureB816();
                    },
                    FixtureB817::class => static function () {
                        return new FixtureB817();
                    },
                    FixtureB818::class => static function () {
                        return new FixtureB818();
                    },
                    FixtureB819::class => static function () {
                        return new FixtureB819();
                    },
                    FixtureB820::class => static function () {
                        return new FixtureB820();
                    },
                    FixtureB821::class => static function () {
                        return new FixtureB821();
                    },
                    FixtureB822::class => static function () {
                        return new FixtureB822();
                    },
                    FixtureB823::class => static function () {
                        return new FixtureB823();
                    },
                    FixtureB824::class => static function () {
                        return new FixtureB824();
                    },
                    FixtureB825::class => static function () {
                        return new FixtureB825();
                    },
                    FixtureB826::class => static function () {
                        return new FixtureB826();
                    },
                    FixtureB827::class => static function () {
                        return new FixtureB827();
                    },
                    FixtureB828::class => static function () {
                        return new FixtureB828();
                    },
                    FixtureB829::class => static function () {
                        return new FixtureB829();
                    },
                    FixtureB830::class => static function () {
                        return new FixtureB830();
                    },
                    FixtureB831::class => static function () {
                        return new FixtureB831();
                    },
                    FixtureB832::class => static function () {
                        return new FixtureB832();
                    },
                    FixtureB833::class => static function () {
                        return new FixtureB833();
                    },
                    FixtureB834::class => static function () {
                        return new FixtureB834();
                    },
                    FixtureB835::class => static function () {
                        return new FixtureB835();
                    },
                    FixtureB836::class => static function () {
                        return new FixtureB836();
                    },
                    FixtureB837::class => static function () {
                        return new FixtureB837();
                    },
                    FixtureB838::class => static function () {
                        return new FixtureB838();
                    },
                    FixtureB839::class => static function () {
                        return new FixtureB839();
                    },
                    FixtureB840::class => static function () {
                        return new FixtureB840();
                    },
                    FixtureB841::class => static function () {
                        return new FixtureB841();
                    },
                    FixtureB842::class => static function () {
                        return new FixtureB842();
                    },
                    FixtureB843::class => static function () {
                        return new FixtureB843();
                    },
                    FixtureB844::class => static function () {
                        return new FixtureB844();
                    },
                    FixtureB845::class => static function () {
                        return new FixtureB845();
                    },
                    FixtureB846::class => static function () {
                        return new FixtureB846();
                    },
                    FixtureB847::class => static function () {
                        return new FixtureB847();
                    },
                    FixtureB848::class => static function () {
                        return new FixtureB848();
                    },
                    FixtureB849::class => static function () {
                        return new FixtureB849();
                    },
                    FixtureB850::class => static function () {
                        return new FixtureB850();
                    },
                    FixtureB851::class => static function () {
                        return new FixtureB851();
                    },
                    FixtureB852::class => static function () {
                        return new FixtureB852();
                    },
                    FixtureB853::class => static function () {
                        return new FixtureB853();
                    },
                    FixtureB854::class => static function () {
                        return new FixtureB854();
                    },
                    FixtureB855::class => static function () {
                        return new FixtureB855();
                    },
                    FixtureB856::class => static function () {
                        return new FixtureB856();
                    },
                    FixtureB857::class => static function () {
                        return new FixtureB857();
                    },
                    FixtureB858::class => static function () {
                        return new FixtureB858();
                    },
                    FixtureB859::class => static function () {
                        return new FixtureB859();
                    },
                    FixtureB860::class => static function () {
                        return new FixtureB860();
                    },
                    FixtureB861::class => static function () {
                        return new FixtureB861();
                    },
                    FixtureB862::class => static function () {
                        return new FixtureB862();
                    },
                    FixtureB863::class => static function () {
                        return new FixtureB863();
                    },
                    FixtureB864::class => static function () {
                        return new FixtureB864();
                    },
                    FixtureB865::class => static function () {
                        return new FixtureB865();
                    },
                    FixtureB866::class => static function () {
                        return new FixtureB866();
                    },
                    FixtureB867::class => static function () {
                        return new FixtureB867();
                    },
                    FixtureB868::class => static function () {
                        return new FixtureB868();
                    },
                    FixtureB869::class => static function () {
                        return new FixtureB869();
                    },
                    FixtureB870::class => static function () {
                        return new FixtureB870();
                    },
                    FixtureB871::class => static function () {
                        return new FixtureB871();
                    },
                    FixtureB872::class => static function () {
                        return new FixtureB872();
                    },
                    FixtureB873::class => static function () {
                        return new FixtureB873();
                    },
                    FixtureB874::class => static function () {
                        return new FixtureB874();
                    },
                    FixtureB875::class => static function () {
                        return new FixtureB875();
                    },
                    FixtureB876::class => static function () {
                        return new FixtureB876();
                    },
                    FixtureB877::class => static function () {
                        return new FixtureB877();
                    },
                    FixtureB878::class => static function () {
                        return new FixtureB878();
                    },
                    FixtureB879::class => static function () {
                        return new FixtureB879();
                    },
                    FixtureB880::class => static function () {
                        return new FixtureB880();
                    },
                    FixtureB881::class => static function () {
                        return new FixtureB881();
                    },
                    FixtureB882::class => static function () {
                        return new FixtureB882();
                    },
                    FixtureB883::class => static function () {
                        return new FixtureB883();
                    },
                    FixtureB884::class => static function () {
                        return new FixtureB884();
                    },
                    FixtureB885::class => static function () {
                        return new FixtureB885();
                    },
                    FixtureB886::class => static function () {
                        return new FixtureB886();
                    },
                    FixtureB887::class => static function () {
                        return new FixtureB887();
                    },
                    FixtureB888::class => static function () {
                        return new FixtureB888();
                    },
                    FixtureB889::class => static function () {
                        return new FixtureB889();
                    },
                    FixtureB890::class => static function () {
                        return new FixtureB890();
                    },
                    FixtureB891::class => static function () {
                        return new FixtureB891();
                    },
                    FixtureB892::class => static function () {
                        return new FixtureB892();
                    },
                    FixtureB893::class => static function () {
                        return new FixtureB893();
                    },
                    FixtureB894::class => static function () {
                        return new FixtureB894();
                    },
                    FixtureB895::class => static function () {
                        return new FixtureB895();
                    },
                    FixtureB896::class => static function () {
                        return new FixtureB896();
                    },
                    FixtureB897::class => static function () {
                        return new FixtureB897();
                    },
                    FixtureB898::class => static function () {
                        return new FixtureB898();
                    },
                    FixtureB899::class => static function () {
                        return new FixtureB899();
                    },
                    FixtureB900::class => static function () {
                        return new FixtureB900();
                    },
                    FixtureB901::class => static function () {
                        return new FixtureB901();
                    },
                    FixtureB902::class => static function () {
                        return new FixtureB902();
                    },
                    FixtureB903::class => static function () {
                        return new FixtureB903();
                    },
                    FixtureB904::class => static function () {
                        return new FixtureB904();
                    },
                    FixtureB905::class => static function () {
                        return new FixtureB905();
                    },
                    FixtureB906::class => static function () {
                        return new FixtureB906();
                    },
                    FixtureB907::class => static function () {
                        return new FixtureB907();
                    },
                    FixtureB908::class => static function () {
                        return new FixtureB908();
                    },
                    FixtureB909::class => static function () {
                        return new FixtureB909();
                    },
                    FixtureB910::class => static function () {
                        return new FixtureB910();
                    },
                    FixtureB911::class => static function () {
                        return new FixtureB911();
                    },
                    FixtureB912::class => static function () {
                        return new FixtureB912();
                    },
                    FixtureB913::class => static function () {
                        return new FixtureB913();
                    },
                    FixtureB914::class => static function () {
                        return new FixtureB914();
                    },
                    FixtureB915::class => static function () {
                        return new FixtureB915();
                    },
                    FixtureB916::class => static function () {
                        return new FixtureB916();
                    },
                    FixtureB917::class => static function () {
                        return new FixtureB917();
                    },
                    FixtureB918::class => static function () {
                        return new FixtureB918();
                    },
                    FixtureB919::class => static function () {
                        return new FixtureB919();
                    },
                    FixtureB920::class => static function () {
                        return new FixtureB920();
                    },
                    FixtureB921::class => static function () {
                        return new FixtureB921();
                    },
                    FixtureB922::class => static function () {
                        return new FixtureB922();
                    },
                    FixtureB923::class => static function () {
                        return new FixtureB923();
                    },
                    FixtureB924::class => static function () {
                        return new FixtureB924();
                    },
                    FixtureB925::class => static function () {
                        return new FixtureB925();
                    },
                    FixtureB926::class => static function () {
                        return new FixtureB926();
                    },
                    FixtureB927::class => static function () {
                        return new FixtureB927();
                    },
                    FixtureB928::class => static function () {
                        return new FixtureB928();
                    },
                    FixtureB929::class => static function () {
                        return new FixtureB929();
                    },
                    FixtureB930::class => static function () {
                        return new FixtureB930();
                    },
                    FixtureB931::class => static function () {
                        return new FixtureB931();
                    },
                    FixtureB932::class => static function () {
                        return new FixtureB932();
                    },
                    FixtureB933::class => static function () {
                        return new FixtureB933();
                    },
                    FixtureB934::class => static function () {
                        return new FixtureB934();
                    },
                    FixtureB935::class => static function () {
                        return new FixtureB935();
                    },
                    FixtureB936::class => static function () {
                        return new FixtureB936();
                    },
                    FixtureB937::class => static function () {
                        return new FixtureB937();
                    },
                    FixtureB938::class => static function () {
                        return new FixtureB938();
                    },
                    FixtureB939::class => static function () {
                        return new FixtureB939();
                    },
                    FixtureB940::class => static function () {
                        return new FixtureB940();
                    },
                    FixtureB941::class => static function () {
                        return new FixtureB941();
                    },
                    FixtureB942::class => static function () {
                        return new FixtureB942();
                    },
                    FixtureB943::class => static function () {
                        return new FixtureB943();
                    },
                    FixtureB944::class => static function () {
                        return new FixtureB944();
                    },
                    FixtureB945::class => static function () {
                        return new FixtureB945();
                    },
                    FixtureB946::class => static function () {
                        return new FixtureB946();
                    },
                    FixtureB947::class => static function () {
                        return new FixtureB947();
                    },
                    FixtureB948::class => static function () {
                        return new FixtureB948();
                    },
                    FixtureB949::class => static function () {
                        return new FixtureB949();
                    },
                    FixtureB950::class => static function () {
                        return new FixtureB950();
                    },
                    FixtureB951::class => static function () {
                        return new FixtureB951();
                    },
                    FixtureB952::class => static function () {
                        return new FixtureB952();
                    },
                    FixtureB953::class => static function () {
                        return new FixtureB953();
                    },
                    FixtureB954::class => static function () {
                        return new FixtureB954();
                    },
                    FixtureB955::class => static function () {
                        return new FixtureB955();
                    },
                    FixtureB956::class => static function () {
                        return new FixtureB956();
                    },
                    FixtureB957::class => static function () {
                        return new FixtureB957();
                    },
                    FixtureB958::class => static function () {
                        return new FixtureB958();
                    },
                    FixtureB959::class => static function () {
                        return new FixtureB959();
                    },
                    FixtureB960::class => static function () {
                        return new FixtureB960();
                    },
                    FixtureB961::class => static function () {
                        return new FixtureB961();
                    },
                    FixtureB962::class => static function () {
                        return new FixtureB962();
                    },
                    FixtureB963::class => static function () {
                        return new FixtureB963();
                    },
                    FixtureB964::class => static function () {
                        return new FixtureB964();
                    },
                    FixtureB965::class => static function () {
                        return new FixtureB965();
                    },
                    FixtureB966::class => static function () {
                        return new FixtureB966();
                    },
                    FixtureB967::class => static function () {
                        return new FixtureB967();
                    },
                    FixtureB968::class => static function () {
                        return new FixtureB968();
                    },
                    FixtureB969::class => static function () {
                        return new FixtureB969();
                    },
                    FixtureB970::class => static function () {
                        return new FixtureB970();
                    },
                    FixtureB971::class => static function () {
                        return new FixtureB971();
                    },
                    FixtureB972::class => static function () {
                        return new FixtureB972();
                    },
                    FixtureB973::class => static function () {
                        return new FixtureB973();
                    },
                    FixtureB974::class => static function () {
                        return new FixtureB974();
                    },
                    FixtureB975::class => static function () {
                        return new FixtureB975();
                    },
                    FixtureB976::class => static function () {
                        return new FixtureB976();
                    },
                    FixtureB977::class => static function () {
                        return new FixtureB977();
                    },
                    FixtureB978::class => static function () {
                        return new FixtureB978();
                    },
                    FixtureB979::class => static function () {
                        return new FixtureB979();
                    },
                    FixtureB980::class => static function () {
                        return new FixtureB980();
                    },
                    FixtureB981::class => static function () {
                        return new FixtureB981();
                    },
                    FixtureB982::class => static function () {
                        return new FixtureB982();
                    },
                    FixtureB983::class => static function () {
                        return new FixtureB983();
                    },
                    FixtureB984::class => static function () {
                        return new FixtureB984();
                    },
                    FixtureB985::class => static function () {
                        return new FixtureB985();
                    },
                    FixtureB986::class => static function () {
                        return new FixtureB986();
                    },
                    FixtureB987::class => static function () {
                        return new FixtureB987();
                    },
                    FixtureB988::class => static function () {
                        return new FixtureB988();
                    },
                    FixtureB989::class => static function () {
                        return new FixtureB989();
                    },
                    FixtureB990::class => static function () {
                        return new FixtureB990();
                    },
                    FixtureB991::class => static function () {
                        return new FixtureB991();
                    },
                    FixtureB992::class => static function () {
                        return new FixtureB992();
                    },
                    FixtureB993::class => static function () {
                        return new FixtureB993();
                    },
                    FixtureB994::class => static function () {
                        return new FixtureB994();
                    },
                    FixtureB995::class => static function () {
                        return new FixtureB995();
                    },
                    FixtureB996::class => static function () {
                        return new FixtureB996();
                    },
                    FixtureB997::class => static function () {
                        return new FixtureB997();
                    },
                    FixtureB998::class => static function () {
                        return new FixtureB998();
                    },
                    FixtureB999::class => static function () {
                        return new FixtureB999();
                    },
                    FixtureB1000::class => static function () {
                        return new FixtureB1000();
                    },
                    FixtureC1::class => static function () {
                        return new FixtureC1();
                    },
                    FixtureC2::class => static function (ContainerInterface $container) {
                        return new FixtureC2($container->get(FixtureC1::class));
                    },
                    FixtureC3::class => static function (ContainerInterface $container) {
                        return new FixtureC3($container->get(FixtureC2::class));
                    },
                    FixtureC4::class => static function (ContainerInterface $container) {
                        return new FixtureC4($container->get(FixtureC3::class));
                    },
                    FixtureC5::class => static function (ContainerInterface $container) {
                        return new FixtureC5($container->get(FixtureC4::class));
                    },
                    FixtureC6::class => static function (ContainerInterface $container) {
                        return new FixtureC6($container->get(FixtureC5::class));
                    },
                    FixtureC7::class => static function (ContainerInterface $container) {
                        return new FixtureC7($container->get(FixtureC6::class));
                    },
                    FixtureC8::class => static function (ContainerInterface $container) {
                        return new FixtureC8($container->get(FixtureC7::class));
                    },
                    FixtureC9::class => static function (ContainerInterface $container) {
                        return new FixtureC9($container->get(FixtureC8::class));
                    },
                    FixtureC10::class => static function (ContainerInterface $container) {
                        return new FixtureC10($container->get(FixtureC9::class));
                    },
                    FixtureC11::class => static function (ContainerInterface $container) {
                        return new FixtureC11($container->get(FixtureC10::class));
                    },
                    FixtureC12::class => static function (ContainerInterface $container) {
                        return new FixtureC12($container->get(FixtureC11::class));
                    },
                    FixtureC13::class => static function (ContainerInterface $container) {
                        return new FixtureC13($container->get(FixtureC12::class));
                    },
                    FixtureC14::class => static function (ContainerInterface $container) {
                        return new FixtureC14($container->get(FixtureC13::class));
                    },
                    FixtureC15::class => static function (ContainerInterface $container) {
                        return new FixtureC15($container->get(FixtureC14::class));
                    },
                    FixtureC16::class => static function (ContainerInterface $container) {
                        return new FixtureC16($container->get(FixtureC15::class));
                    },
                    FixtureC17::class => static function (ContainerInterface $container) {
                        return new FixtureC17($container->get(FixtureC16::class));
                    },
                    FixtureC18::class => static function (ContainerInterface $container) {
                        return new FixtureC18($container->get(FixtureC17::class));
                    },
                    FixtureC19::class => static function (ContainerInterface $container) {
                        return new FixtureC19($container->get(FixtureC18::class));
                    },
                    FixtureC20::class => static function (ContainerInterface $container) {
                        return new FixtureC20($container->get(FixtureC19::class));
                    },
                    FixtureC21::class => static function (ContainerInterface $container) {
                        return new FixtureC21($container->get(FixtureC20::class));
                    },
                    FixtureC22::class => static function (ContainerInterface $container) {
                        return new FixtureC22($container->get(FixtureC21::class));
                    },
                    FixtureC23::class => static function (ContainerInterface $container) {
                        return new FixtureC23($container->get(FixtureC22::class));
                    },
                    FixtureC24::class => static function (ContainerInterface $container) {
                        return new FixtureC24($container->get(FixtureC23::class));
                    },
                    FixtureC25::class => static function (ContainerInterface $container) {
                        return new FixtureC25($container->get(FixtureC24::class));
                    },
                    FixtureC26::class => static function (ContainerInterface $container) {
                        return new FixtureC26($container->get(FixtureC25::class));
                    },
                    FixtureC27::class => static function (ContainerInterface $container) {
                        return new FixtureC27($container->get(FixtureC26::class));
                    },
                    FixtureC28::class => static function (ContainerInterface $container) {
                        return new FixtureC28($container->get(FixtureC27::class));
                    },
                    FixtureC29::class => static function (ContainerInterface $container) {
                        return new FixtureC29($container->get(FixtureC28::class));
                    },
                    FixtureC30::class => static function (ContainerInterface $container) {
                        return new FixtureC30($container->get(FixtureC29::class));
                    },
                    FixtureC31::class => static function (ContainerInterface $container) {
                        return new FixtureC31($container->get(FixtureC30::class));
                    },
                    FixtureC32::class => static function (ContainerInterface $container) {
                        return new FixtureC32($container->get(FixtureC31::class));
                    },
                    FixtureC33::class => static function (ContainerInterface $container) {
                        return new FixtureC33($container->get(FixtureC32::class));
                    },
                    FixtureC34::class => static function (ContainerInterface $container) {
                        return new FixtureC34($container->get(FixtureC33::class));
                    },
                    FixtureC35::class => static function (ContainerInterface $container) {
                        return new FixtureC35($container->get(FixtureC34::class));
                    },
                    FixtureC36::class => static function (ContainerInterface $container) {
                        return new FixtureC36($container->get(FixtureC35::class));
                    },
                    FixtureC37::class => static function (ContainerInterface $container) {
                        return new FixtureC37($container->get(FixtureC36::class));
                    },
                    FixtureC38::class => static function (ContainerInterface $container) {
                        return new FixtureC38($container->get(FixtureC37::class));
                    },
                    FixtureC39::class => static function (ContainerInterface $container) {
                        return new FixtureC39($container->get(FixtureC38::class));
                    },
                    FixtureC40::class => static function (ContainerInterface $container) {
                        return new FixtureC40($container->get(FixtureC39::class));
                    },
                    FixtureC41::class => static function (ContainerInterface $container) {
                        return new FixtureC41($container->get(FixtureC40::class));
                    },
                    FixtureC42::class => static function (ContainerInterface $container) {
                        return new FixtureC42($container->get(FixtureC41::class));
                    },
                    FixtureC43::class => static function (ContainerInterface $container) {
                        return new FixtureC43($container->get(FixtureC42::class));
                    },
                    FixtureC44::class => static function (ContainerInterface $container) {
                        return new FixtureC44($container->get(FixtureC43::class));
                    },
                    FixtureC45::class => static function (ContainerInterface $container) {
                        return new FixtureC45($container->get(FixtureC44::class));
                    },
                    FixtureC46::class => static function (ContainerInterface $container) {
                        return new FixtureC46($container->get(FixtureC45::class));
                    },
                    FixtureC47::class => static function (ContainerInterface $container) {
                        return new FixtureC47($container->get(FixtureC46::class));
                    },
                    FixtureC48::class => static function (ContainerInterface $container) {
                        return new FixtureC48($container->get(FixtureC47::class));
                    },
                    FixtureC49::class => static function (ContainerInterface $container) {
                        return new FixtureC49($container->get(FixtureC48::class));
                    },
                    FixtureC50::class => static function (ContainerInterface $container) {
                        return new FixtureC50($container->get(FixtureC49::class));
                    },
                    FixtureC51::class => static function (ContainerInterface $container) {
                        return new FixtureC51($container->get(FixtureC50::class));
                    },
                    FixtureC52::class => static function (ContainerInterface $container) {
                        return new FixtureC52($container->get(FixtureC51::class));
                    },
                    FixtureC53::class => static function (ContainerInterface $container) {
                        return new FixtureC53($container->get(FixtureC52::class));
                    },
                    FixtureC54::class => static function (ContainerInterface $container) {
                        return new FixtureC54($container->get(FixtureC53::class));
                    },
                    FixtureC55::class => static function (ContainerInterface $container) {
                        return new FixtureC55($container->get(FixtureC54::class));
                    },
                    FixtureC56::class => static function (ContainerInterface $container) {
                        return new FixtureC56($container->get(FixtureC55::class));
                    },
                    FixtureC57::class => static function (ContainerInterface $container) {
                        return new FixtureC57($container->get(FixtureC56::class));
                    },
                    FixtureC58::class => static function (ContainerInterface $container) {
                        return new FixtureC58($container->get(FixtureC57::class));
                    },
                    FixtureC59::class => static function (ContainerInterface $container) {
                        return new FixtureC59($container->get(FixtureC58::class));
                    },
                    FixtureC60::class => static function (ContainerInterface $container) {
                        return new FixtureC60($container->get(FixtureC59::class));
                    },
                    FixtureC61::class => static function (ContainerInterface $container) {
                        return new FixtureC61($container->get(FixtureC60::class));
                    },
                    FixtureC62::class => static function (ContainerInterface $container) {
                        return new FixtureC62($container->get(FixtureC61::class));
                    },
                    FixtureC63::class => static function (ContainerInterface $container) {
                        return new FixtureC63($container->get(FixtureC62::class));
                    },
                    FixtureC64::class => static function (ContainerInterface $container) {
                        return new FixtureC64($container->get(FixtureC63::class));
                    },
                    FixtureC65::class => static function (ContainerInterface $container) {
                        return new FixtureC65($container->get(FixtureC64::class));
                    },
                    FixtureC66::class => static function (ContainerInterface $container) {
                        return new FixtureC66($container->get(FixtureC65::class));
                    },
                    FixtureC67::class => static function (ContainerInterface $container) {
                        return new FixtureC67($container->get(FixtureC66::class));
                    },
                    FixtureC68::class => static function (ContainerInterface $container) {
                        return new FixtureC68($container->get(FixtureC67::class));
                    },
                    FixtureC69::class => static function (ContainerInterface $container) {
                        return new FixtureC69($container->get(FixtureC68::class));
                    },
                    FixtureC70::class => static function (ContainerInterface $container) {
                        return new FixtureC70($container->get(FixtureC69::class));
                    },
                    FixtureC71::class => static function (ContainerInterface $container) {
                        return new FixtureC71($container->get(FixtureC70::class));
                    },
                    FixtureC72::class => static function (ContainerInterface $container) {
                        return new FixtureC72($container->get(FixtureC71::class));
                    },
                    FixtureC73::class => static function (ContainerInterface $container) {
                        return new FixtureC73($container->get(FixtureC72::class));
                    },
                    FixtureC74::class => static function (ContainerInterface $container) {
                        return new FixtureC74($container->get(FixtureC73::class));
                    },
                    FixtureC75::class => static function (ContainerInterface $container) {
                        return new FixtureC75($container->get(FixtureC74::class));
                    },
                    FixtureC76::class => static function (ContainerInterface $container) {
                        return new FixtureC76($container->get(FixtureC75::class));
                    },
                    FixtureC77::class => static function (ContainerInterface $container) {
                        return new FixtureC77($container->get(FixtureC76::class));
                    },
                    FixtureC78::class => static function (ContainerInterface $container) {
                        return new FixtureC78($container->get(FixtureC77::class));
                    },
                    FixtureC79::class => static function (ContainerInterface $container) {
                        return new FixtureC79($container->get(FixtureC78::class));
                    },
                    FixtureC80::class => static function (ContainerInterface $container) {
                        return new FixtureC80($container->get(FixtureC79::class));
                    },
                    FixtureC81::class => static function (ContainerInterface $container) {
                        return new FixtureC81($container->get(FixtureC80::class));
                    },
                    FixtureC82::class => static function (ContainerInterface $container) {
                        return new FixtureC82($container->get(FixtureC81::class));
                    },
                    FixtureC83::class => static function (ContainerInterface $container) {
                        return new FixtureC83($container->get(FixtureC82::class));
                    },
                    FixtureC84::class => static function (ContainerInterface $container) {
                        return new FixtureC84($container->get(FixtureC83::class));
                    },
                    FixtureC85::class => static function (ContainerInterface $container) {
                        return new FixtureC85($container->get(FixtureC84::class));
                    },
                    FixtureC86::class => static function (ContainerInterface $container) {
                        return new FixtureC86($container->get(FixtureC85::class));
                    },
                    FixtureC87::class => static function (ContainerInterface $container) {
                        return new FixtureC87($container->get(FixtureC86::class));
                    },
                    FixtureC88::class => static function (ContainerInterface $container) {
                        return new FixtureC88($container->get(FixtureC87::class));
                    },
                    FixtureC89::class => static function (ContainerInterface $container) {
                        return new FixtureC89($container->get(FixtureC88::class));
                    },
                    FixtureC90::class => static function (ContainerInterface $container) {
                        return new FixtureC90($container->get(FixtureC89::class));
                    },
                    FixtureC91::class => static function (ContainerInterface $container) {
                        return new FixtureC91($container->get(FixtureC90::class));
                    },
                    FixtureC92::class => static function (ContainerInterface $container) {
                        return new FixtureC92($container->get(FixtureC91::class));
                    },
                    FixtureC93::class => static function (ContainerInterface $container) {
                        return new FixtureC93($container->get(FixtureC92::class));
                    },
                    FixtureC94::class => static function (ContainerInterface $container) {
                        return new FixtureC94($container->get(FixtureC93::class));
                    },
                    FixtureC95::class => static function (ContainerInterface $container) {
                        return new FixtureC95($container->get(FixtureC94::class));
                    },
                    FixtureC96::class => static function (ContainerInterface $container) {
                        return new FixtureC96($container->get(FixtureC95::class));
                    },
                    FixtureC97::class => static function (ContainerInterface $container) {
                        return new FixtureC97($container->get(FixtureC96::class));
                    },
                    FixtureC98::class => static function (ContainerInterface $container) {
                        return new FixtureC98($container->get(FixtureC97::class));
                    },
                    FixtureC99::class => static function (ContainerInterface $container) {
                        return new FixtureC99($container->get(FixtureC98::class));
                    },
                    FixtureC100::class => static function (ContainerInterface $container) {
                        return new FixtureC100($container->get(FixtureC99::class));
                    },
                    FixtureC101::class => static function (ContainerInterface $container) {
                        return new FixtureC101($container->get(FixtureC100::class));
                    },
                    FixtureC102::class => static function (ContainerInterface $container) {
                        return new FixtureC102($container->get(FixtureC101::class));
                    },
                    FixtureC103::class => static function (ContainerInterface $container) {
                        return new FixtureC103($container->get(FixtureC102::class));
                    },
                    FixtureC104::class => static function (ContainerInterface $container) {
                        return new FixtureC104($container->get(FixtureC103::class));
                    },
                    FixtureC105::class => static function (ContainerInterface $container) {
                        return new FixtureC105($container->get(FixtureC104::class));
                    },
                    FixtureC106::class => static function (ContainerInterface $container) {
                        return new FixtureC106($container->get(FixtureC105::class));
                    },
                    FixtureC107::class => static function (ContainerInterface $container) {
                        return new FixtureC107($container->get(FixtureC106::class));
                    },
                    FixtureC108::class => static function (ContainerInterface $container) {
                        return new FixtureC108($container->get(FixtureC107::class));
                    },
                    FixtureC109::class => static function (ContainerInterface $container) {
                        return new FixtureC109($container->get(FixtureC108::class));
                    },
                    FixtureC110::class => static function (ContainerInterface $container) {
                        return new FixtureC110($container->get(FixtureC109::class));
                    },
                    FixtureC111::class => static function (ContainerInterface $container) {
                        return new FixtureC111($container->get(FixtureC110::class));
                    },
                    FixtureC112::class => static function (ContainerInterface $container) {
                        return new FixtureC112($container->get(FixtureC111::class));
                    },
                    FixtureC113::class => static function (ContainerInterface $container) {
                        return new FixtureC113($container->get(FixtureC112::class));
                    },
                    FixtureC114::class => static function (ContainerInterface $container) {
                        return new FixtureC114($container->get(FixtureC113::class));
                    },
                    FixtureC115::class => static function (ContainerInterface $container) {
                        return new FixtureC115($container->get(FixtureC114::class));
                    },
                    FixtureC116::class => static function (ContainerInterface $container) {
                        return new FixtureC116($container->get(FixtureC115::class));
                    },
                    FixtureC117::class => static function (ContainerInterface $container) {
                        return new FixtureC117($container->get(FixtureC116::class));
                    },
                    FixtureC118::class => static function (ContainerInterface $container) {
                        return new FixtureC118($container->get(FixtureC117::class));
                    },
                    FixtureC119::class => static function (ContainerInterface $container) {
                        return new FixtureC119($container->get(FixtureC118::class));
                    },
                    FixtureC120::class => static function (ContainerInterface $container) {
                        return new FixtureC120($container->get(FixtureC119::class));
                    },
                    FixtureC121::class => static function (ContainerInterface $container) {
                        return new FixtureC121($container->get(FixtureC120::class));
                    },
                    FixtureC122::class => static function (ContainerInterface $container) {
                        return new FixtureC122($container->get(FixtureC121::class));
                    },
                    FixtureC123::class => static function (ContainerInterface $container) {
                        return new FixtureC123($container->get(FixtureC122::class));
                    },
                    FixtureC124::class => static function (ContainerInterface $container) {
                        return new FixtureC124($container->get(FixtureC123::class));
                    },
                    FixtureC125::class => static function (ContainerInterface $container) {
                        return new FixtureC125($container->get(FixtureC124::class));
                    },
                    FixtureC126::class => static function (ContainerInterface $container) {
                        return new FixtureC126($container->get(FixtureC125::class));
                    },
                    FixtureC127::class => static function (ContainerInterface $container) {
                        return new FixtureC127($container->get(FixtureC126::class));
                    },
                    FixtureC128::class => static function (ContainerInterface $container) {
                        return new FixtureC128($container->get(FixtureC127::class));
                    },
                    FixtureC129::class => static function (ContainerInterface $container) {
                        return new FixtureC129($container->get(FixtureC128::class));
                    },
                    FixtureC130::class => static function (ContainerInterface $container) {
                        return new FixtureC130($container->get(FixtureC129::class));
                    },
                    FixtureC131::class => static function (ContainerInterface $container) {
                        return new FixtureC131($container->get(FixtureC130::class));
                    },
                    FixtureC132::class => static function (ContainerInterface $container) {
                        return new FixtureC132($container->get(FixtureC131::class));
                    },
                    FixtureC133::class => static function (ContainerInterface $container) {
                        return new FixtureC133($container->get(FixtureC132::class));
                    },
                    FixtureC134::class => static function (ContainerInterface $container) {
                        return new FixtureC134($container->get(FixtureC133::class));
                    },
                    FixtureC135::class => static function (ContainerInterface $container) {
                        return new FixtureC135($container->get(FixtureC134::class));
                    },
                    FixtureC136::class => static function (ContainerInterface $container) {
                        return new FixtureC136($container->get(FixtureC135::class));
                    },
                    FixtureC137::class => static function (ContainerInterface $container) {
                        return new FixtureC137($container->get(FixtureC136::class));
                    },
                    FixtureC138::class => static function (ContainerInterface $container) {
                        return new FixtureC138($container->get(FixtureC137::class));
                    },
                    FixtureC139::class => static function (ContainerInterface $container) {
                        return new FixtureC139($container->get(FixtureC138::class));
                    },
                    FixtureC140::class => static function (ContainerInterface $container) {
                        return new FixtureC140($container->get(FixtureC139::class));
                    },
                    FixtureC141::class => static function (ContainerInterface $container) {
                        return new FixtureC141($container->get(FixtureC140::class));
                    },
                    FixtureC142::class => static function (ContainerInterface $container) {
                        return new FixtureC142($container->get(FixtureC141::class));
                    },
                    FixtureC143::class => static function (ContainerInterface $container) {
                        return new FixtureC143($container->get(FixtureC142::class));
                    },
                    FixtureC144::class => static function (ContainerInterface $container) {
                        return new FixtureC144($container->get(FixtureC143::class));
                    },
                    FixtureC145::class => static function (ContainerInterface $container) {
                        return new FixtureC145($container->get(FixtureC144::class));
                    },
                    FixtureC146::class => static function (ContainerInterface $container) {
                        return new FixtureC146($container->get(FixtureC145::class));
                    },
                    FixtureC147::class => static function (ContainerInterface $container) {
                        return new FixtureC147($container->get(FixtureC146::class));
                    },
                    FixtureC148::class => static function (ContainerInterface $container) {
                        return new FixtureC148($container->get(FixtureC147::class));
                    },
                    FixtureC149::class => static function (ContainerInterface $container) {
                        return new FixtureC149($container->get(FixtureC148::class));
                    },
                    FixtureC150::class => static function (ContainerInterface $container) {
                        return new FixtureC150($container->get(FixtureC149::class));
                    },
                    FixtureC151::class => static function (ContainerInterface $container) {
                        return new FixtureC151($container->get(FixtureC150::class));
                    },
                    FixtureC152::class => static function (ContainerInterface $container) {
                        return new FixtureC152($container->get(FixtureC151::class));
                    },
                    FixtureC153::class => static function (ContainerInterface $container) {
                        return new FixtureC153($container->get(FixtureC152::class));
                    },
                    FixtureC154::class => static function (ContainerInterface $container) {
                        return new FixtureC154($container->get(FixtureC153::class));
                    },
                    FixtureC155::class => static function (ContainerInterface $container) {
                        return new FixtureC155($container->get(FixtureC154::class));
                    },
                    FixtureC156::class => static function (ContainerInterface $container) {
                        return new FixtureC156($container->get(FixtureC155::class));
                    },
                    FixtureC157::class => static function (ContainerInterface $container) {
                        return new FixtureC157($container->get(FixtureC156::class));
                    },
                    FixtureC158::class => static function (ContainerInterface $container) {
                        return new FixtureC158($container->get(FixtureC157::class));
                    },
                    FixtureC159::class => static function (ContainerInterface $container) {
                        return new FixtureC159($container->get(FixtureC158::class));
                    },
                    FixtureC160::class => static function (ContainerInterface $container) {
                        return new FixtureC160($container->get(FixtureC159::class));
                    },
                    FixtureC161::class => static function (ContainerInterface $container) {
                        return new FixtureC161($container->get(FixtureC160::class));
                    },
                    FixtureC162::class => static function (ContainerInterface $container) {
                        return new FixtureC162($container->get(FixtureC161::class));
                    },
                    FixtureC163::class => static function (ContainerInterface $container) {
                        return new FixtureC163($container->get(FixtureC162::class));
                    },
                    FixtureC164::class => static function (ContainerInterface $container) {
                        return new FixtureC164($container->get(FixtureC163::class));
                    },
                    FixtureC165::class => static function (ContainerInterface $container) {
                        return new FixtureC165($container->get(FixtureC164::class));
                    },
                    FixtureC166::class => static function (ContainerInterface $container) {
                        return new FixtureC166($container->get(FixtureC165::class));
                    },
                    FixtureC167::class => static function (ContainerInterface $container) {
                        return new FixtureC167($container->get(FixtureC166::class));
                    },
                    FixtureC168::class => static function (ContainerInterface $container) {
                        return new FixtureC168($container->get(FixtureC167::class));
                    },
                    FixtureC169::class => static function (ContainerInterface $container) {
                        return new FixtureC169($container->get(FixtureC168::class));
                    },
                    FixtureC170::class => static function (ContainerInterface $container) {
                        return new FixtureC170($container->get(FixtureC169::class));
                    },
                    FixtureC171::class => static function (ContainerInterface $container) {
                        return new FixtureC171($container->get(FixtureC170::class));
                    },
                    FixtureC172::class => static function (ContainerInterface $container) {
                        return new FixtureC172($container->get(FixtureC171::class));
                    },
                    FixtureC173::class => static function (ContainerInterface $container) {
                        return new FixtureC173($container->get(FixtureC172::class));
                    },
                    FixtureC174::class => static function (ContainerInterface $container) {
                        return new FixtureC174($container->get(FixtureC173::class));
                    },
                    FixtureC175::class => static function (ContainerInterface $container) {
                        return new FixtureC175($container->get(FixtureC174::class));
                    },
                    FixtureC176::class => static function (ContainerInterface $container) {
                        return new FixtureC176($container->get(FixtureC175::class));
                    },
                    FixtureC177::class => static function (ContainerInterface $container) {
                        return new FixtureC177($container->get(FixtureC176::class));
                    },
                    FixtureC178::class => static function (ContainerInterface $container) {
                        return new FixtureC178($container->get(FixtureC177::class));
                    },
                    FixtureC179::class => static function (ContainerInterface $container) {
                        return new FixtureC179($container->get(FixtureC178::class));
                    },
                    FixtureC180::class => static function (ContainerInterface $container) {
                        return new FixtureC180($container->get(FixtureC179::class));
                    },
                    FixtureC181::class => static function (ContainerInterface $container) {
                        return new FixtureC181($container->get(FixtureC180::class));
                    },
                    FixtureC182::class => static function (ContainerInterface $container) {
                        return new FixtureC182($container->get(FixtureC181::class));
                    },
                    FixtureC183::class => static function (ContainerInterface $container) {
                        return new FixtureC183($container->get(FixtureC182::class));
                    },
                    FixtureC184::class => static function (ContainerInterface $container) {
                        return new FixtureC184($container->get(FixtureC183::class));
                    },
                    FixtureC185::class => static function (ContainerInterface $container) {
                        return new FixtureC185($container->get(FixtureC184::class));
                    },
                    FixtureC186::class => static function (ContainerInterface $container) {
                        return new FixtureC186($container->get(FixtureC185::class));
                    },
                    FixtureC187::class => static function (ContainerInterface $container) {
                        return new FixtureC187($container->get(FixtureC186::class));
                    },
                    FixtureC188::class => static function (ContainerInterface $container) {
                        return new FixtureC188($container->get(FixtureC187::class));
                    },
                    FixtureC189::class => static function (ContainerInterface $container) {
                        return new FixtureC189($container->get(FixtureC188::class));
                    },
                    FixtureC190::class => static function (ContainerInterface $container) {
                        return new FixtureC190($container->get(FixtureC189::class));
                    },
                    FixtureC191::class => static function (ContainerInterface $container) {
                        return new FixtureC191($container->get(FixtureC190::class));
                    },
                    FixtureC192::class => static function (ContainerInterface $container) {
                        return new FixtureC192($container->get(FixtureC191::class));
                    },
                    FixtureC193::class => static function (ContainerInterface $container) {
                        return new FixtureC193($container->get(FixtureC192::class));
                    },
                    FixtureC194::class => static function (ContainerInterface $container) {
                        return new FixtureC194($container->get(FixtureC193::class));
                    },
                    FixtureC195::class => static function (ContainerInterface $container) {
                        return new FixtureC195($container->get(FixtureC194::class));
                    },
                    FixtureC196::class => static function (ContainerInterface $container) {
                        return new FixtureC196($container->get(FixtureC195::class));
                    },
                    FixtureC197::class => static function (ContainerInterface $container) {
                        return new FixtureC197($container->get(FixtureC196::class));
                    },
                    FixtureC198::class => static function (ContainerInterface $container) {
                        return new FixtureC198($container->get(FixtureC197::class));
                    },
                    FixtureC199::class => static function (ContainerInterface $container) {
                        return new FixtureC199($container->get(FixtureC198::class));
                    },
                    FixtureC200::class => static function (ContainerInterface $container) {
                        return new FixtureC200($container->get(FixtureC199::class));
                    },
                    FixtureC201::class => static function (ContainerInterface $container) {
                        return new FixtureC201($container->get(FixtureC200::class));
                    },
                    FixtureC202::class => static function (ContainerInterface $container) {
                        return new FixtureC202($container->get(FixtureC201::class));
                    },
                    FixtureC203::class => static function (ContainerInterface $container) {
                        return new FixtureC203($container->get(FixtureC202::class));
                    },
                    FixtureC204::class => static function (ContainerInterface $container) {
                        return new FixtureC204($container->get(FixtureC203::class));
                    },
                    FixtureC205::class => static function (ContainerInterface $container) {
                        return new FixtureC205($container->get(FixtureC204::class));
                    },
                    FixtureC206::class => static function (ContainerInterface $container) {
                        return new FixtureC206($container->get(FixtureC205::class));
                    },
                    FixtureC207::class => static function (ContainerInterface $container) {
                        return new FixtureC207($container->get(FixtureC206::class));
                    },
                    FixtureC208::class => static function (ContainerInterface $container) {
                        return new FixtureC208($container->get(FixtureC207::class));
                    },
                    FixtureC209::class => static function (ContainerInterface $container) {
                        return new FixtureC209($container->get(FixtureC208::class));
                    },
                    FixtureC210::class => static function (ContainerInterface $container) {
                        return new FixtureC210($container->get(FixtureC209::class));
                    },
                    FixtureC211::class => static function (ContainerInterface $container) {
                        return new FixtureC211($container->get(FixtureC210::class));
                    },
                    FixtureC212::class => static function (ContainerInterface $container) {
                        return new FixtureC212($container->get(FixtureC211::class));
                    },
                    FixtureC213::class => static function (ContainerInterface $container) {
                        return new FixtureC213($container->get(FixtureC212::class));
                    },
                    FixtureC214::class => static function (ContainerInterface $container) {
                        return new FixtureC214($container->get(FixtureC213::class));
                    },
                    FixtureC215::class => static function (ContainerInterface $container) {
                        return new FixtureC215($container->get(FixtureC214::class));
                    },
                    FixtureC216::class => static function (ContainerInterface $container) {
                        return new FixtureC216($container->get(FixtureC215::class));
                    },
                    FixtureC217::class => static function (ContainerInterface $container) {
                        return new FixtureC217($container->get(FixtureC216::class));
                    },
                    FixtureC218::class => static function (ContainerInterface $container) {
                        return new FixtureC218($container->get(FixtureC217::class));
                    },
                    FixtureC219::class => static function (ContainerInterface $container) {
                        return new FixtureC219($container->get(FixtureC218::class));
                    },
                    FixtureC220::class => static function (ContainerInterface $container) {
                        return new FixtureC220($container->get(FixtureC219::class));
                    },
                    FixtureC221::class => static function (ContainerInterface $container) {
                        return new FixtureC221($container->get(FixtureC220::class));
                    },
                    FixtureC222::class => static function (ContainerInterface $container) {
                        return new FixtureC222($container->get(FixtureC221::class));
                    },
                    FixtureC223::class => static function (ContainerInterface $container) {
                        return new FixtureC223($container->get(FixtureC222::class));
                    },
                    FixtureC224::class => static function (ContainerInterface $container) {
                        return new FixtureC224($container->get(FixtureC223::class));
                    },
                    FixtureC225::class => static function (ContainerInterface $container) {
                        return new FixtureC225($container->get(FixtureC224::class));
                    },
                    FixtureC226::class => static function (ContainerInterface $container) {
                        return new FixtureC226($container->get(FixtureC225::class));
                    },
                    FixtureC227::class => static function (ContainerInterface $container) {
                        return new FixtureC227($container->get(FixtureC226::class));
                    },
                    FixtureC228::class => static function (ContainerInterface $container) {
                        return new FixtureC228($container->get(FixtureC227::class));
                    },
                    FixtureC229::class => static function (ContainerInterface $container) {
                        return new FixtureC229($container->get(FixtureC228::class));
                    },
                    FixtureC230::class => static function (ContainerInterface $container) {
                        return new FixtureC230($container->get(FixtureC229::class));
                    },
                    FixtureC231::class => static function (ContainerInterface $container) {
                        return new FixtureC231($container->get(FixtureC230::class));
                    },
                    FixtureC232::class => static function (ContainerInterface $container) {
                        return new FixtureC232($container->get(FixtureC231::class));
                    },
                    FixtureC233::class => static function (ContainerInterface $container) {
                        return new FixtureC233($container->get(FixtureC232::class));
                    },
                    FixtureC234::class => static function (ContainerInterface $container) {
                        return new FixtureC234($container->get(FixtureC233::class));
                    },
                    FixtureC235::class => static function (ContainerInterface $container) {
                        return new FixtureC235($container->get(FixtureC234::class));
                    },
                    FixtureC236::class => static function (ContainerInterface $container) {
                        return new FixtureC236($container->get(FixtureC235::class));
                    },
                    FixtureC237::class => static function (ContainerInterface $container) {
                        return new FixtureC237($container->get(FixtureC236::class));
                    },
                    FixtureC238::class => static function (ContainerInterface $container) {
                        return new FixtureC238($container->get(FixtureC237::class));
                    },
                    FixtureC239::class => static function (ContainerInterface $container) {
                        return new FixtureC239($container->get(FixtureC238::class));
                    },
                    FixtureC240::class => static function (ContainerInterface $container) {
                        return new FixtureC240($container->get(FixtureC239::class));
                    },
                    FixtureC241::class => static function (ContainerInterface $container) {
                        return new FixtureC241($container->get(FixtureC240::class));
                    },
                    FixtureC242::class => static function (ContainerInterface $container) {
                        return new FixtureC242($container->get(FixtureC241::class));
                    },
                    FixtureC243::class => static function (ContainerInterface $container) {
                        return new FixtureC243($container->get(FixtureC242::class));
                    },
                    FixtureC244::class => static function (ContainerInterface $container) {
                        return new FixtureC244($container->get(FixtureC243::class));
                    },
                    FixtureC245::class => static function (ContainerInterface $container) {
                        return new FixtureC245($container->get(FixtureC244::class));
                    },
                    FixtureC246::class => static function (ContainerInterface $container) {
                        return new FixtureC246($container->get(FixtureC245::class));
                    },
                    FixtureC247::class => static function (ContainerInterface $container) {
                        return new FixtureC247($container->get(FixtureC246::class));
                    },
                    FixtureC248::class => static function (ContainerInterface $container) {
                        return new FixtureC248($container->get(FixtureC247::class));
                    },
                    FixtureC249::class => static function (ContainerInterface $container) {
                        return new FixtureC249($container->get(FixtureC248::class));
                    },
                    FixtureC250::class => static function (ContainerInterface $container) {
                        return new FixtureC250($container->get(FixtureC249::class));
                    },
                    FixtureC251::class => static function (ContainerInterface $container) {
                        return new FixtureC251($container->get(FixtureC250::class));
                    },
                    FixtureC252::class => static function (ContainerInterface $container) {
                        return new FixtureC252($container->get(FixtureC251::class));
                    },
                    FixtureC253::class => static function (ContainerInterface $container) {
                        return new FixtureC253($container->get(FixtureC252::class));
                    },
                    FixtureC254::class => static function (ContainerInterface $container) {
                        return new FixtureC254($container->get(FixtureC253::class));
                    },
                    FixtureC255::class => static function (ContainerInterface $container) {
                        return new FixtureC255($container->get(FixtureC254::class));
                    },
                    FixtureC256::class => static function (ContainerInterface $container) {
                        return new FixtureC256($container->get(FixtureC255::class));
                    },
                    FixtureC257::class => static function (ContainerInterface $container) {
                        return new FixtureC257($container->get(FixtureC256::class));
                    },
                    FixtureC258::class => static function (ContainerInterface $container) {
                        return new FixtureC258($container->get(FixtureC257::class));
                    },
                    FixtureC259::class => static function (ContainerInterface $container) {
                        return new FixtureC259($container->get(FixtureC258::class));
                    },
                    FixtureC260::class => static function (ContainerInterface $container) {
                        return new FixtureC260($container->get(FixtureC259::class));
                    },
                    FixtureC261::class => static function (ContainerInterface $container) {
                        return new FixtureC261($container->get(FixtureC260::class));
                    },
                    FixtureC262::class => static function (ContainerInterface $container) {
                        return new FixtureC262($container->get(FixtureC261::class));
                    },
                    FixtureC263::class => static function (ContainerInterface $container) {
                        return new FixtureC263($container->get(FixtureC262::class));
                    },
                    FixtureC264::class => static function (ContainerInterface $container) {
                        return new FixtureC264($container->get(FixtureC263::class));
                    },
                    FixtureC265::class => static function (ContainerInterface $container) {
                        return new FixtureC265($container->get(FixtureC264::class));
                    },
                    FixtureC266::class => static function (ContainerInterface $container) {
                        return new FixtureC266($container->get(FixtureC265::class));
                    },
                    FixtureC267::class => static function (ContainerInterface $container) {
                        return new FixtureC267($container->get(FixtureC266::class));
                    },
                    FixtureC268::class => static function (ContainerInterface $container) {
                        return new FixtureC268($container->get(FixtureC267::class));
                    },
                    FixtureC269::class => static function (ContainerInterface $container) {
                        return new FixtureC269($container->get(FixtureC268::class));
                    },
                    FixtureC270::class => static function (ContainerInterface $container) {
                        return new FixtureC270($container->get(FixtureC269::class));
                    },
                    FixtureC271::class => static function (ContainerInterface $container) {
                        return new FixtureC271($container->get(FixtureC270::class));
                    },
                    FixtureC272::class => static function (ContainerInterface $container) {
                        return new FixtureC272($container->get(FixtureC271::class));
                    },
                    FixtureC273::class => static function (ContainerInterface $container) {
                        return new FixtureC273($container->get(FixtureC272::class));
                    },
                    FixtureC274::class => static function (ContainerInterface $container) {
                        return new FixtureC274($container->get(FixtureC273::class));
                    },
                    FixtureC275::class => static function (ContainerInterface $container) {
                        return new FixtureC275($container->get(FixtureC274::class));
                    },
                    FixtureC276::class => static function (ContainerInterface $container) {
                        return new FixtureC276($container->get(FixtureC275::class));
                    },
                    FixtureC277::class => static function (ContainerInterface $container) {
                        return new FixtureC277($container->get(FixtureC276::class));
                    },
                    FixtureC278::class => static function (ContainerInterface $container) {
                        return new FixtureC278($container->get(FixtureC277::class));
                    },
                    FixtureC279::class => static function (ContainerInterface $container) {
                        return new FixtureC279($container->get(FixtureC278::class));
                    },
                    FixtureC280::class => static function (ContainerInterface $container) {
                        return new FixtureC280($container->get(FixtureC279::class));
                    },
                    FixtureC281::class => static function (ContainerInterface $container) {
                        return new FixtureC281($container->get(FixtureC280::class));
                    },
                    FixtureC282::class => static function (ContainerInterface $container) {
                        return new FixtureC282($container->get(FixtureC281::class));
                    },
                    FixtureC283::class => static function (ContainerInterface $container) {
                        return new FixtureC283($container->get(FixtureC282::class));
                    },
                    FixtureC284::class => static function (ContainerInterface $container) {
                        return new FixtureC284($container->get(FixtureC283::class));
                    },
                    FixtureC285::class => static function (ContainerInterface $container) {
                        return new FixtureC285($container->get(FixtureC284::class));
                    },
                    FixtureC286::class => static function (ContainerInterface $container) {
                        return new FixtureC286($container->get(FixtureC285::class));
                    },
                    FixtureC287::class => static function (ContainerInterface $container) {
                        return new FixtureC287($container->get(FixtureC286::class));
                    },
                    FixtureC288::class => static function (ContainerInterface $container) {
                        return new FixtureC288($container->get(FixtureC287::class));
                    },
                    FixtureC289::class => static function (ContainerInterface $container) {
                        return new FixtureC289($container->get(FixtureC288::class));
                    },
                    FixtureC290::class => static function (ContainerInterface $container) {
                        return new FixtureC290($container->get(FixtureC289::class));
                    },
                    FixtureC291::class => static function (ContainerInterface $container) {
                        return new FixtureC291($container->get(FixtureC290::class));
                    },
                    FixtureC292::class => static function (ContainerInterface $container) {
                        return new FixtureC292($container->get(FixtureC291::class));
                    },
                    FixtureC293::class => static function (ContainerInterface $container) {
                        return new FixtureC293($container->get(FixtureC292::class));
                    },
                    FixtureC294::class => static function (ContainerInterface $container) {
                        return new FixtureC294($container->get(FixtureC293::class));
                    },
                    FixtureC295::class => static function (ContainerInterface $container) {
                        return new FixtureC295($container->get(FixtureC294::class));
                    },
                    FixtureC296::class => static function (ContainerInterface $container) {
                        return new FixtureC296($container->get(FixtureC295::class));
                    },
                    FixtureC297::class => static function (ContainerInterface $container) {
                        return new FixtureC297($container->get(FixtureC296::class));
                    },
                    FixtureC298::class => static function (ContainerInterface $container) {
                        return new FixtureC298($container->get(FixtureC297::class));
                    },
                    FixtureC299::class => static function (ContainerInterface $container) {
                        return new FixtureC299($container->get(FixtureC298::class));
                    },
                    FixtureC300::class => static function (ContainerInterface $container) {
                        return new FixtureC300($container->get(FixtureC299::class));
                    },
                    FixtureC301::class => static function (ContainerInterface $container) {
                        return new FixtureC301($container->get(FixtureC300::class));
                    },
                    FixtureC302::class => static function (ContainerInterface $container) {
                        return new FixtureC302($container->get(FixtureC301::class));
                    },
                    FixtureC303::class => static function (ContainerInterface $container) {
                        return new FixtureC303($container->get(FixtureC302::class));
                    },
                    FixtureC304::class => static function (ContainerInterface $container) {
                        return new FixtureC304($container->get(FixtureC303::class));
                    },
                    FixtureC305::class => static function (ContainerInterface $container) {
                        return new FixtureC305($container->get(FixtureC304::class));
                    },
                    FixtureC306::class => static function (ContainerInterface $container) {
                        return new FixtureC306($container->get(FixtureC305::class));
                    },
                    FixtureC307::class => static function (ContainerInterface $container) {
                        return new FixtureC307($container->get(FixtureC306::class));
                    },
                    FixtureC308::class => static function (ContainerInterface $container) {
                        return new FixtureC308($container->get(FixtureC307::class));
                    },
                    FixtureC309::class => static function (ContainerInterface $container) {
                        return new FixtureC309($container->get(FixtureC308::class));
                    },
                    FixtureC310::class => static function (ContainerInterface $container) {
                        return new FixtureC310($container->get(FixtureC309::class));
                    },
                    FixtureC311::class => static function (ContainerInterface $container) {
                        return new FixtureC311($container->get(FixtureC310::class));
                    },
                    FixtureC312::class => static function (ContainerInterface $container) {
                        return new FixtureC312($container->get(FixtureC311::class));
                    },
                    FixtureC313::class => static function (ContainerInterface $container) {
                        return new FixtureC313($container->get(FixtureC312::class));
                    },
                    FixtureC314::class => static function (ContainerInterface $container) {
                        return new FixtureC314($container->get(FixtureC313::class));
                    },
                    FixtureC315::class => static function (ContainerInterface $container) {
                        return new FixtureC315($container->get(FixtureC314::class));
                    },
                    FixtureC316::class => static function (ContainerInterface $container) {
                        return new FixtureC316($container->get(FixtureC315::class));
                    },
                    FixtureC317::class => static function (ContainerInterface $container) {
                        return new FixtureC317($container->get(FixtureC316::class));
                    },
                    FixtureC318::class => static function (ContainerInterface $container) {
                        return new FixtureC318($container->get(FixtureC317::class));
                    },
                    FixtureC319::class => static function (ContainerInterface $container) {
                        return new FixtureC319($container->get(FixtureC318::class));
                    },
                    FixtureC320::class => static function (ContainerInterface $container) {
                        return new FixtureC320($container->get(FixtureC319::class));
                    },
                    FixtureC321::class => static function (ContainerInterface $container) {
                        return new FixtureC321($container->get(FixtureC320::class));
                    },
                    FixtureC322::class => static function (ContainerInterface $container) {
                        return new FixtureC322($container->get(FixtureC321::class));
                    },
                    FixtureC323::class => static function (ContainerInterface $container) {
                        return new FixtureC323($container->get(FixtureC322::class));
                    },
                    FixtureC324::class => static function (ContainerInterface $container) {
                        return new FixtureC324($container->get(FixtureC323::class));
                    },
                    FixtureC325::class => static function (ContainerInterface $container) {
                        return new FixtureC325($container->get(FixtureC324::class));
                    },
                    FixtureC326::class => static function (ContainerInterface $container) {
                        return new FixtureC326($container->get(FixtureC325::class));
                    },
                    FixtureC327::class => static function (ContainerInterface $container) {
                        return new FixtureC327($container->get(FixtureC326::class));
                    },
                    FixtureC328::class => static function (ContainerInterface $container) {
                        return new FixtureC328($container->get(FixtureC327::class));
                    },
                    FixtureC329::class => static function (ContainerInterface $container) {
                        return new FixtureC329($container->get(FixtureC328::class));
                    },
                    FixtureC330::class => static function (ContainerInterface $container) {
                        return new FixtureC330($container->get(FixtureC329::class));
                    },
                    FixtureC331::class => static function (ContainerInterface $container) {
                        return new FixtureC331($container->get(FixtureC330::class));
                    },
                    FixtureC332::class => static function (ContainerInterface $container) {
                        return new FixtureC332($container->get(FixtureC331::class));
                    },
                    FixtureC333::class => static function (ContainerInterface $container) {
                        return new FixtureC333($container->get(FixtureC332::class));
                    },
                    FixtureC334::class => static function (ContainerInterface $container) {
                        return new FixtureC334($container->get(FixtureC333::class));
                    },
                    FixtureC335::class => static function (ContainerInterface $container) {
                        return new FixtureC335($container->get(FixtureC334::class));
                    },
                    FixtureC336::class => static function (ContainerInterface $container) {
                        return new FixtureC336($container->get(FixtureC335::class));
                    },
                    FixtureC337::class => static function (ContainerInterface $container) {
                        return new FixtureC337($container->get(FixtureC336::class));
                    },
                    FixtureC338::class => static function (ContainerInterface $container) {
                        return new FixtureC338($container->get(FixtureC337::class));
                    },
                    FixtureC339::class => static function (ContainerInterface $container) {
                        return new FixtureC339($container->get(FixtureC338::class));
                    },
                    FixtureC340::class => static function (ContainerInterface $container) {
                        return new FixtureC340($container->get(FixtureC339::class));
                    },
                    FixtureC341::class => static function (ContainerInterface $container) {
                        return new FixtureC341($container->get(FixtureC340::class));
                    },
                    FixtureC342::class => static function (ContainerInterface $container) {
                        return new FixtureC342($container->get(FixtureC341::class));
                    },
                    FixtureC343::class => static function (ContainerInterface $container) {
                        return new FixtureC343($container->get(FixtureC342::class));
                    },
                    FixtureC344::class => static function (ContainerInterface $container) {
                        return new FixtureC344($container->get(FixtureC343::class));
                    },
                    FixtureC345::class => static function (ContainerInterface $container) {
                        return new FixtureC345($container->get(FixtureC344::class));
                    },
                    FixtureC346::class => static function (ContainerInterface $container) {
                        return new FixtureC346($container->get(FixtureC345::class));
                    },
                    FixtureC347::class => static function (ContainerInterface $container) {
                        return new FixtureC347($container->get(FixtureC346::class));
                    },
                    FixtureC348::class => static function (ContainerInterface $container) {
                        return new FixtureC348($container->get(FixtureC347::class));
                    },
                    FixtureC349::class => static function (ContainerInterface $container) {
                        return new FixtureC349($container->get(FixtureC348::class));
                    },
                    FixtureC350::class => static function (ContainerInterface $container) {
                        return new FixtureC350($container->get(FixtureC349::class));
                    },
                    FixtureC351::class => static function (ContainerInterface $container) {
                        return new FixtureC351($container->get(FixtureC350::class));
                    },
                    FixtureC352::class => static function (ContainerInterface $container) {
                        return new FixtureC352($container->get(FixtureC351::class));
                    },
                    FixtureC353::class => static function (ContainerInterface $container) {
                        return new FixtureC353($container->get(FixtureC352::class));
                    },
                    FixtureC354::class => static function (ContainerInterface $container) {
                        return new FixtureC354($container->get(FixtureC353::class));
                    },
                    FixtureC355::class => static function (ContainerInterface $container) {
                        return new FixtureC355($container->get(FixtureC354::class));
                    },
                    FixtureC356::class => static function (ContainerInterface $container) {
                        return new FixtureC356($container->get(FixtureC355::class));
                    },
                    FixtureC357::class => static function (ContainerInterface $container) {
                        return new FixtureC357($container->get(FixtureC356::class));
                    },
                    FixtureC358::class => static function (ContainerInterface $container) {
                        return new FixtureC358($container->get(FixtureC357::class));
                    },
                    FixtureC359::class => static function (ContainerInterface $container) {
                        return new FixtureC359($container->get(FixtureC358::class));
                    },
                    FixtureC360::class => static function (ContainerInterface $container) {
                        return new FixtureC360($container->get(FixtureC359::class));
                    },
                    FixtureC361::class => static function (ContainerInterface $container) {
                        return new FixtureC361($container->get(FixtureC360::class));
                    },
                    FixtureC362::class => static function (ContainerInterface $container) {
                        return new FixtureC362($container->get(FixtureC361::class));
                    },
                    FixtureC363::class => static function (ContainerInterface $container) {
                        return new FixtureC363($container->get(FixtureC362::class));
                    },
                    FixtureC364::class => static function (ContainerInterface $container) {
                        return new FixtureC364($container->get(FixtureC363::class));
                    },
                    FixtureC365::class => static function (ContainerInterface $container) {
                        return new FixtureC365($container->get(FixtureC364::class));
                    },
                    FixtureC366::class => static function (ContainerInterface $container) {
                        return new FixtureC366($container->get(FixtureC365::class));
                    },
                    FixtureC367::class => static function (ContainerInterface $container) {
                        return new FixtureC367($container->get(FixtureC366::class));
                    },
                    FixtureC368::class => static function (ContainerInterface $container) {
                        return new FixtureC368($container->get(FixtureC367::class));
                    },
                    FixtureC369::class => static function (ContainerInterface $container) {
                        return new FixtureC369($container->get(FixtureC368::class));
                    },
                    FixtureC370::class => static function (ContainerInterface $container) {
                        return new FixtureC370($container->get(FixtureC369::class));
                    },
                    FixtureC371::class => static function (ContainerInterface $container) {
                        return new FixtureC371($container->get(FixtureC370::class));
                    },
                    FixtureC372::class => static function (ContainerInterface $container) {
                        return new FixtureC372($container->get(FixtureC371::class));
                    },
                    FixtureC373::class => static function (ContainerInterface $container) {
                        return new FixtureC373($container->get(FixtureC372::class));
                    },
                    FixtureC374::class => static function (ContainerInterface $container) {
                        return new FixtureC374($container->get(FixtureC373::class));
                    },
                    FixtureC375::class => static function (ContainerInterface $container) {
                        return new FixtureC375($container->get(FixtureC374::class));
                    },
                    FixtureC376::class => static function (ContainerInterface $container) {
                        return new FixtureC376($container->get(FixtureC375::class));
                    },
                    FixtureC377::class => static function (ContainerInterface $container) {
                        return new FixtureC377($container->get(FixtureC376::class));
                    },
                    FixtureC378::class => static function (ContainerInterface $container) {
                        return new FixtureC378($container->get(FixtureC377::class));
                    },
                    FixtureC379::class => static function (ContainerInterface $container) {
                        return new FixtureC379($container->get(FixtureC378::class));
                    },
                    FixtureC380::class => static function (ContainerInterface $container) {
                        return new FixtureC380($container->get(FixtureC379::class));
                    },
                    FixtureC381::class => static function (ContainerInterface $container) {
                        return new FixtureC381($container->get(FixtureC380::class));
                    },
                    FixtureC382::class => static function (ContainerInterface $container) {
                        return new FixtureC382($container->get(FixtureC381::class));
                    },
                    FixtureC383::class => static function (ContainerInterface $container) {
                        return new FixtureC383($container->get(FixtureC382::class));
                    },
                    FixtureC384::class => static function (ContainerInterface $container) {
                        return new FixtureC384($container->get(FixtureC383::class));
                    },
                    FixtureC385::class => static function (ContainerInterface $container) {
                        return new FixtureC385($container->get(FixtureC384::class));
                    },
                    FixtureC386::class => static function (ContainerInterface $container) {
                        return new FixtureC386($container->get(FixtureC385::class));
                    },
                    FixtureC387::class => static function (ContainerInterface $container) {
                        return new FixtureC387($container->get(FixtureC386::class));
                    },
                    FixtureC388::class => static function (ContainerInterface $container) {
                        return new FixtureC388($container->get(FixtureC387::class));
                    },
                    FixtureC389::class => static function (ContainerInterface $container) {
                        return new FixtureC389($container->get(FixtureC388::class));
                    },
                    FixtureC390::class => static function (ContainerInterface $container) {
                        return new FixtureC390($container->get(FixtureC389::class));
                    },
                    FixtureC391::class => static function (ContainerInterface $container) {
                        return new FixtureC391($container->get(FixtureC390::class));
                    },
                    FixtureC392::class => static function (ContainerInterface $container) {
                        return new FixtureC392($container->get(FixtureC391::class));
                    },
                    FixtureC393::class => static function (ContainerInterface $container) {
                        return new FixtureC393($container->get(FixtureC392::class));
                    },
                    FixtureC394::class => static function (ContainerInterface $container) {
                        return new FixtureC394($container->get(FixtureC393::class));
                    },
                    FixtureC395::class => static function (ContainerInterface $container) {
                        return new FixtureC395($container->get(FixtureC394::class));
                    },
                    FixtureC396::class => static function (ContainerInterface $container) {
                        return new FixtureC396($container->get(FixtureC395::class));
                    },
                    FixtureC397::class => static function (ContainerInterface $container) {
                        return new FixtureC397($container->get(FixtureC396::class));
                    },
                    FixtureC398::class => static function (ContainerInterface $container) {
                        return new FixtureC398($container->get(FixtureC397::class));
                    },
                    FixtureC399::class => static function (ContainerInterface $container) {
                        return new FixtureC399($container->get(FixtureC398::class));
                    },
                    FixtureC400::class => static function (ContainerInterface $container) {
                        return new FixtureC400($container->get(FixtureC399::class));
                    },
                    FixtureC401::class => static function (ContainerInterface $container) {
                        return new FixtureC401($container->get(FixtureC400::class));
                    },
                    FixtureC402::class => static function (ContainerInterface $container) {
                        return new FixtureC402($container->get(FixtureC401::class));
                    },
                    FixtureC403::class => static function (ContainerInterface $container) {
                        return new FixtureC403($container->get(FixtureC402::class));
                    },
                    FixtureC404::class => static function (ContainerInterface $container) {
                        return new FixtureC404($container->get(FixtureC403::class));
                    },
                    FixtureC405::class => static function (ContainerInterface $container) {
                        return new FixtureC405($container->get(FixtureC404::class));
                    },
                    FixtureC406::class => static function (ContainerInterface $container) {
                        return new FixtureC406($container->get(FixtureC405::class));
                    },
                    FixtureC407::class => static function (ContainerInterface $container) {
                        return new FixtureC407($container->get(FixtureC406::class));
                    },
                    FixtureC408::class => static function (ContainerInterface $container) {
                        return new FixtureC408($container->get(FixtureC407::class));
                    },
                    FixtureC409::class => static function (ContainerInterface $container) {
                        return new FixtureC409($container->get(FixtureC408::class));
                    },
                    FixtureC410::class => static function (ContainerInterface $container) {
                        return new FixtureC410($container->get(FixtureC409::class));
                    },
                    FixtureC411::class => static function (ContainerInterface $container) {
                        return new FixtureC411($container->get(FixtureC410::class));
                    },
                    FixtureC412::class => static function (ContainerInterface $container) {
                        return new FixtureC412($container->get(FixtureC411::class));
                    },
                    FixtureC413::class => static function (ContainerInterface $container) {
                        return new FixtureC413($container->get(FixtureC412::class));
                    },
                    FixtureC414::class => static function (ContainerInterface $container) {
                        return new FixtureC414($container->get(FixtureC413::class));
                    },
                    FixtureC415::class => static function (ContainerInterface $container) {
                        return new FixtureC415($container->get(FixtureC414::class));
                    },
                    FixtureC416::class => static function (ContainerInterface $container) {
                        return new FixtureC416($container->get(FixtureC415::class));
                    },
                    FixtureC417::class => static function (ContainerInterface $container) {
                        return new FixtureC417($container->get(FixtureC416::class));
                    },
                    FixtureC418::class => static function (ContainerInterface $container) {
                        return new FixtureC418($container->get(FixtureC417::class));
                    },
                    FixtureC419::class => static function (ContainerInterface $container) {
                        return new FixtureC419($container->get(FixtureC418::class));
                    },
                    FixtureC420::class => static function (ContainerInterface $container) {
                        return new FixtureC420($container->get(FixtureC419::class));
                    },
                    FixtureC421::class => static function (ContainerInterface $container) {
                        return new FixtureC421($container->get(FixtureC420::class));
                    },
                    FixtureC422::class => static function (ContainerInterface $container) {
                        return new FixtureC422($container->get(FixtureC421::class));
                    },
                    FixtureC423::class => static function (ContainerInterface $container) {
                        return new FixtureC423($container->get(FixtureC422::class));
                    },
                    FixtureC424::class => static function (ContainerInterface $container) {
                        return new FixtureC424($container->get(FixtureC423::class));
                    },
                    FixtureC425::class => static function (ContainerInterface $container) {
                        return new FixtureC425($container->get(FixtureC424::class));
                    },
                    FixtureC426::class => static function (ContainerInterface $container) {
                        return new FixtureC426($container->get(FixtureC425::class));
                    },
                    FixtureC427::class => static function (ContainerInterface $container) {
                        return new FixtureC427($container->get(FixtureC426::class));
                    },
                    FixtureC428::class => static function (ContainerInterface $container) {
                        return new FixtureC428($container->get(FixtureC427::class));
                    },
                    FixtureC429::class => static function (ContainerInterface $container) {
                        return new FixtureC429($container->get(FixtureC428::class));
                    },
                    FixtureC430::class => static function (ContainerInterface $container) {
                        return new FixtureC430($container->get(FixtureC429::class));
                    },
                    FixtureC431::class => static function (ContainerInterface $container) {
                        return new FixtureC431($container->get(FixtureC430::class));
                    },
                    FixtureC432::class => static function (ContainerInterface $container) {
                        return new FixtureC432($container->get(FixtureC431::class));
                    },
                    FixtureC433::class => static function (ContainerInterface $container) {
                        return new FixtureC433($container->get(FixtureC432::class));
                    },
                    FixtureC434::class => static function (ContainerInterface $container) {
                        return new FixtureC434($container->get(FixtureC433::class));
                    },
                    FixtureC435::class => static function (ContainerInterface $container) {
                        return new FixtureC435($container->get(FixtureC434::class));
                    },
                    FixtureC436::class => static function (ContainerInterface $container) {
                        return new FixtureC436($container->get(FixtureC435::class));
                    },
                    FixtureC437::class => static function (ContainerInterface $container) {
                        return new FixtureC437($container->get(FixtureC436::class));
                    },
                    FixtureC438::class => static function (ContainerInterface $container) {
                        return new FixtureC438($container->get(FixtureC437::class));
                    },
                    FixtureC439::class => static function (ContainerInterface $container) {
                        return new FixtureC439($container->get(FixtureC438::class));
                    },
                    FixtureC440::class => static function (ContainerInterface $container) {
                        return new FixtureC440($container->get(FixtureC439::class));
                    },
                    FixtureC441::class => static function (ContainerInterface $container) {
                        return new FixtureC441($container->get(FixtureC440::class));
                    },
                    FixtureC442::class => static function (ContainerInterface $container) {
                        return new FixtureC442($container->get(FixtureC441::class));
                    },
                    FixtureC443::class => static function (ContainerInterface $container) {
                        return new FixtureC443($container->get(FixtureC442::class));
                    },
                    FixtureC444::class => static function (ContainerInterface $container) {
                        return new FixtureC444($container->get(FixtureC443::class));
                    },
                    FixtureC445::class => static function (ContainerInterface $container) {
                        return new FixtureC445($container->get(FixtureC444::class));
                    },
                    FixtureC446::class => static function (ContainerInterface $container) {
                        return new FixtureC446($container->get(FixtureC445::class));
                    },
                    FixtureC447::class => static function (ContainerInterface $container) {
                        return new FixtureC447($container->get(FixtureC446::class));
                    },
                    FixtureC448::class => static function (ContainerInterface $container) {
                        return new FixtureC448($container->get(FixtureC447::class));
                    },
                    FixtureC449::class => static function (ContainerInterface $container) {
                        return new FixtureC449($container->get(FixtureC448::class));
                    },
                    FixtureC450::class => static function (ContainerInterface $container) {
                        return new FixtureC450($container->get(FixtureC449::class));
                    },
                    FixtureC451::class => static function (ContainerInterface $container) {
                        return new FixtureC451($container->get(FixtureC450::class));
                    },
                    FixtureC452::class => static function (ContainerInterface $container) {
                        return new FixtureC452($container->get(FixtureC451::class));
                    },
                    FixtureC453::class => static function (ContainerInterface $container) {
                        return new FixtureC453($container->get(FixtureC452::class));
                    },
                    FixtureC454::class => static function (ContainerInterface $container) {
                        return new FixtureC454($container->get(FixtureC453::class));
                    },
                    FixtureC455::class => static function (ContainerInterface $container) {
                        return new FixtureC455($container->get(FixtureC454::class));
                    },
                    FixtureC456::class => static function (ContainerInterface $container) {
                        return new FixtureC456($container->get(FixtureC455::class));
                    },
                    FixtureC457::class => static function (ContainerInterface $container) {
                        return new FixtureC457($container->get(FixtureC456::class));
                    },
                    FixtureC458::class => static function (ContainerInterface $container) {
                        return new FixtureC458($container->get(FixtureC457::class));
                    },
                    FixtureC459::class => static function (ContainerInterface $container) {
                        return new FixtureC459($container->get(FixtureC458::class));
                    },
                    FixtureC460::class => static function (ContainerInterface $container) {
                        return new FixtureC460($container->get(FixtureC459::class));
                    },
                    FixtureC461::class => static function (ContainerInterface $container) {
                        return new FixtureC461($container->get(FixtureC460::class));
                    },
                    FixtureC462::class => static function (ContainerInterface $container) {
                        return new FixtureC462($container->get(FixtureC461::class));
                    },
                    FixtureC463::class => static function (ContainerInterface $container) {
                        return new FixtureC463($container->get(FixtureC462::class));
                    },
                    FixtureC464::class => static function (ContainerInterface $container) {
                        return new FixtureC464($container->get(FixtureC463::class));
                    },
                    FixtureC465::class => static function (ContainerInterface $container) {
                        return new FixtureC465($container->get(FixtureC464::class));
                    },
                    FixtureC466::class => static function (ContainerInterface $container) {
                        return new FixtureC466($container->get(FixtureC465::class));
                    },
                    FixtureC467::class => static function (ContainerInterface $container) {
                        return new FixtureC467($container->get(FixtureC466::class));
                    },
                    FixtureC468::class => static function (ContainerInterface $container) {
                        return new FixtureC468($container->get(FixtureC467::class));
                    },
                    FixtureC469::class => static function (ContainerInterface $container) {
                        return new FixtureC469($container->get(FixtureC468::class));
                    },
                    FixtureC470::class => static function (ContainerInterface $container) {
                        return new FixtureC470($container->get(FixtureC469::class));
                    },
                    FixtureC471::class => static function (ContainerInterface $container) {
                        return new FixtureC471($container->get(FixtureC470::class));
                    },
                    FixtureC472::class => static function (ContainerInterface $container) {
                        return new FixtureC472($container->get(FixtureC471::class));
                    },
                    FixtureC473::class => static function (ContainerInterface $container) {
                        return new FixtureC473($container->get(FixtureC472::class));
                    },
                    FixtureC474::class => static function (ContainerInterface $container) {
                        return new FixtureC474($container->get(FixtureC473::class));
                    },
                    FixtureC475::class => static function (ContainerInterface $container) {
                        return new FixtureC475($container->get(FixtureC474::class));
                    },
                    FixtureC476::class => static function (ContainerInterface $container) {
                        return new FixtureC476($container->get(FixtureC475::class));
                    },
                    FixtureC477::class => static function (ContainerInterface $container) {
                        return new FixtureC477($container->get(FixtureC476::class));
                    },
                    FixtureC478::class => static function (ContainerInterface $container) {
                        return new FixtureC478($container->get(FixtureC477::class));
                    },
                    FixtureC479::class => static function (ContainerInterface $container) {
                        return new FixtureC479($container->get(FixtureC478::class));
                    },
                    FixtureC480::class => static function (ContainerInterface $container) {
                        return new FixtureC480($container->get(FixtureC479::class));
                    },
                    FixtureC481::class => static function (ContainerInterface $container) {
                        return new FixtureC481($container->get(FixtureC480::class));
                    },
                    FixtureC482::class => static function (ContainerInterface $container) {
                        return new FixtureC482($container->get(FixtureC481::class));
                    },
                    FixtureC483::class => static function (ContainerInterface $container) {
                        return new FixtureC483($container->get(FixtureC482::class));
                    },
                    FixtureC484::class => static function (ContainerInterface $container) {
                        return new FixtureC484($container->get(FixtureC483::class));
                    },
                    FixtureC485::class => static function (ContainerInterface $container) {
                        return new FixtureC485($container->get(FixtureC484::class));
                    },
                    FixtureC486::class => static function (ContainerInterface $container) {
                        return new FixtureC486($container->get(FixtureC485::class));
                    },
                    FixtureC487::class => static function (ContainerInterface $container) {
                        return new FixtureC487($container->get(FixtureC486::class));
                    },
                    FixtureC488::class => static function (ContainerInterface $container) {
                        return new FixtureC488($container->get(FixtureC487::class));
                    },
                    FixtureC489::class => static function (ContainerInterface $container) {
                        return new FixtureC489($container->get(FixtureC488::class));
                    },
                    FixtureC490::class => static function (ContainerInterface $container) {
                        return new FixtureC490($container->get(FixtureC489::class));
                    },
                    FixtureC491::class => static function (ContainerInterface $container) {
                        return new FixtureC491($container->get(FixtureC490::class));
                    },
                    FixtureC492::class => static function (ContainerInterface $container) {
                        return new FixtureC492($container->get(FixtureC491::class));
                    },
                    FixtureC493::class => static function (ContainerInterface $container) {
                        return new FixtureC493($container->get(FixtureC492::class));
                    },
                    FixtureC494::class => static function (ContainerInterface $container) {
                        return new FixtureC494($container->get(FixtureC493::class));
                    },
                    FixtureC495::class => static function (ContainerInterface $container) {
                        return new FixtureC495($container->get(FixtureC494::class));
                    },
                    FixtureC496::class => static function (ContainerInterface $container) {
                        return new FixtureC496($container->get(FixtureC495::class));
                    },
                    FixtureC497::class => static function (ContainerInterface $container) {
                        return new FixtureC497($container->get(FixtureC496::class));
                    },
                    FixtureC498::class => static function (ContainerInterface $container) {
                        return new FixtureC498($container->get(FixtureC497::class));
                    },
                    FixtureC499::class => static function (ContainerInterface $container) {
                        return new FixtureC499($container->get(FixtureC498::class));
                    },
                    FixtureC500::class => static function (ContainerInterface $container) {
                        return new FixtureC500($container->get(FixtureC499::class));
                    },
                    FixtureC501::class => static function (ContainerInterface $container) {
                        return new FixtureC501($container->get(FixtureC500::class));
                    },
                    FixtureC502::class => static function (ContainerInterface $container) {
                        return new FixtureC502($container->get(FixtureC501::class));
                    },
                    FixtureC503::class => static function (ContainerInterface $container) {
                        return new FixtureC503($container->get(FixtureC502::class));
                    },
                    FixtureC504::class => static function (ContainerInterface $container) {
                        return new FixtureC504($container->get(FixtureC503::class));
                    },
                    FixtureC505::class => static function (ContainerInterface $container) {
                        return new FixtureC505($container->get(FixtureC504::class));
                    },
                    FixtureC506::class => static function (ContainerInterface $container) {
                        return new FixtureC506($container->get(FixtureC505::class));
                    },
                    FixtureC507::class => static function (ContainerInterface $container) {
                        return new FixtureC507($container->get(FixtureC506::class));
                    },
                    FixtureC508::class => static function (ContainerInterface $container) {
                        return new FixtureC508($container->get(FixtureC507::class));
                    },
                    FixtureC509::class => static function (ContainerInterface $container) {
                        return new FixtureC509($container->get(FixtureC508::class));
                    },
                    FixtureC510::class => static function (ContainerInterface $container) {
                        return new FixtureC510($container->get(FixtureC509::class));
                    },
                    FixtureC511::class => static function (ContainerInterface $container) {
                        return new FixtureC511($container->get(FixtureC510::class));
                    },
                    FixtureC512::class => static function (ContainerInterface $container) {
                        return new FixtureC512($container->get(FixtureC511::class));
                    },
                    FixtureC513::class => static function (ContainerInterface $container) {
                        return new FixtureC513($container->get(FixtureC512::class));
                    },
                    FixtureC514::class => static function (ContainerInterface $container) {
                        return new FixtureC514($container->get(FixtureC513::class));
                    },
                    FixtureC515::class => static function (ContainerInterface $container) {
                        return new FixtureC515($container->get(FixtureC514::class));
                    },
                    FixtureC516::class => static function (ContainerInterface $container) {
                        return new FixtureC516($container->get(FixtureC515::class));
                    },
                    FixtureC517::class => static function (ContainerInterface $container) {
                        return new FixtureC517($container->get(FixtureC516::class));
                    },
                    FixtureC518::class => static function (ContainerInterface $container) {
                        return new FixtureC518($container->get(FixtureC517::class));
                    },
                    FixtureC519::class => static function (ContainerInterface $container) {
                        return new FixtureC519($container->get(FixtureC518::class));
                    },
                    FixtureC520::class => static function (ContainerInterface $container) {
                        return new FixtureC520($container->get(FixtureC519::class));
                    },
                    FixtureC521::class => static function (ContainerInterface $container) {
                        return new FixtureC521($container->get(FixtureC520::class));
                    },
                    FixtureC522::class => static function (ContainerInterface $container) {
                        return new FixtureC522($container->get(FixtureC521::class));
                    },
                    FixtureC523::class => static function (ContainerInterface $container) {
                        return new FixtureC523($container->get(FixtureC522::class));
                    },
                    FixtureC524::class => static function (ContainerInterface $container) {
                        return new FixtureC524($container->get(FixtureC523::class));
                    },
                    FixtureC525::class => static function (ContainerInterface $container) {
                        return new FixtureC525($container->get(FixtureC524::class));
                    },
                    FixtureC526::class => static function (ContainerInterface $container) {
                        return new FixtureC526($container->get(FixtureC525::class));
                    },
                    FixtureC527::class => static function (ContainerInterface $container) {
                        return new FixtureC527($container->get(FixtureC526::class));
                    },
                    FixtureC528::class => static function (ContainerInterface $container) {
                        return new FixtureC528($container->get(FixtureC527::class));
                    },
                    FixtureC529::class => static function (ContainerInterface $container) {
                        return new FixtureC529($container->get(FixtureC528::class));
                    },
                    FixtureC530::class => static function (ContainerInterface $container) {
                        return new FixtureC530($container->get(FixtureC529::class));
                    },
                    FixtureC531::class => static function (ContainerInterface $container) {
                        return new FixtureC531($container->get(FixtureC530::class));
                    },
                    FixtureC532::class => static function (ContainerInterface $container) {
                        return new FixtureC532($container->get(FixtureC531::class));
                    },
                    FixtureC533::class => static function (ContainerInterface $container) {
                        return new FixtureC533($container->get(FixtureC532::class));
                    },
                    FixtureC534::class => static function (ContainerInterface $container) {
                        return new FixtureC534($container->get(FixtureC533::class));
                    },
                    FixtureC535::class => static function (ContainerInterface $container) {
                        return new FixtureC535($container->get(FixtureC534::class));
                    },
                    FixtureC536::class => static function (ContainerInterface $container) {
                        return new FixtureC536($container->get(FixtureC535::class));
                    },
                    FixtureC537::class => static function (ContainerInterface $container) {
                        return new FixtureC537($container->get(FixtureC536::class));
                    },
                    FixtureC538::class => static function (ContainerInterface $container) {
                        return new FixtureC538($container->get(FixtureC537::class));
                    },
                    FixtureC539::class => static function (ContainerInterface $container) {
                        return new FixtureC539($container->get(FixtureC538::class));
                    },
                    FixtureC540::class => static function (ContainerInterface $container) {
                        return new FixtureC540($container->get(FixtureC539::class));
                    },
                    FixtureC541::class => static function (ContainerInterface $container) {
                        return new FixtureC541($container->get(FixtureC540::class));
                    },
                    FixtureC542::class => static function (ContainerInterface $container) {
                        return new FixtureC542($container->get(FixtureC541::class));
                    },
                    FixtureC543::class => static function (ContainerInterface $container) {
                        return new FixtureC543($container->get(FixtureC542::class));
                    },
                    FixtureC544::class => static function (ContainerInterface $container) {
                        return new FixtureC544($container->get(FixtureC543::class));
                    },
                    FixtureC545::class => static function (ContainerInterface $container) {
                        return new FixtureC545($container->get(FixtureC544::class));
                    },
                    FixtureC546::class => static function (ContainerInterface $container) {
                        return new FixtureC546($container->get(FixtureC545::class));
                    },
                    FixtureC547::class => static function (ContainerInterface $container) {
                        return new FixtureC547($container->get(FixtureC546::class));
                    },
                    FixtureC548::class => static function (ContainerInterface $container) {
                        return new FixtureC548($container->get(FixtureC547::class));
                    },
                    FixtureC549::class => static function (ContainerInterface $container) {
                        return new FixtureC549($container->get(FixtureC548::class));
                    },
                    FixtureC550::class => static function (ContainerInterface $container) {
                        return new FixtureC550($container->get(FixtureC549::class));
                    },
                    FixtureC551::class => static function (ContainerInterface $container) {
                        return new FixtureC551($container->get(FixtureC550::class));
                    },
                    FixtureC552::class => static function (ContainerInterface $container) {
                        return new FixtureC552($container->get(FixtureC551::class));
                    },
                    FixtureC553::class => static function (ContainerInterface $container) {
                        return new FixtureC553($container->get(FixtureC552::class));
                    },
                    FixtureC554::class => static function (ContainerInterface $container) {
                        return new FixtureC554($container->get(FixtureC553::class));
                    },
                    FixtureC555::class => static function (ContainerInterface $container) {
                        return new FixtureC555($container->get(FixtureC554::class));
                    },
                    FixtureC556::class => static function (ContainerInterface $container) {
                        return new FixtureC556($container->get(FixtureC555::class));
                    },
                    FixtureC557::class => static function (ContainerInterface $container) {
                        return new FixtureC557($container->get(FixtureC556::class));
                    },
                    FixtureC558::class => static function (ContainerInterface $container) {
                        return new FixtureC558($container->get(FixtureC557::class));
                    },
                    FixtureC559::class => static function (ContainerInterface $container) {
                        return new FixtureC559($container->get(FixtureC558::class));
                    },
                    FixtureC560::class => static function (ContainerInterface $container) {
                        return new FixtureC560($container->get(FixtureC559::class));
                    },
                    FixtureC561::class => static function (ContainerInterface $container) {
                        return new FixtureC561($container->get(FixtureC560::class));
                    },
                    FixtureC562::class => static function (ContainerInterface $container) {
                        return new FixtureC562($container->get(FixtureC561::class));
                    },
                    FixtureC563::class => static function (ContainerInterface $container) {
                        return new FixtureC563($container->get(FixtureC562::class));
                    },
                    FixtureC564::class => static function (ContainerInterface $container) {
                        return new FixtureC564($container->get(FixtureC563::class));
                    },
                    FixtureC565::class => static function (ContainerInterface $container) {
                        return new FixtureC565($container->get(FixtureC564::class));
                    },
                    FixtureC566::class => static function (ContainerInterface $container) {
                        return new FixtureC566($container->get(FixtureC565::class));
                    },
                    FixtureC567::class => static function (ContainerInterface $container) {
                        return new FixtureC567($container->get(FixtureC566::class));
                    },
                    FixtureC568::class => static function (ContainerInterface $container) {
                        return new FixtureC568($container->get(FixtureC567::class));
                    },
                    FixtureC569::class => static function (ContainerInterface $container) {
                        return new FixtureC569($container->get(FixtureC568::class));
                    },
                    FixtureC570::class => static function (ContainerInterface $container) {
                        return new FixtureC570($container->get(FixtureC569::class));
                    },
                    FixtureC571::class => static function (ContainerInterface $container) {
                        return new FixtureC571($container->get(FixtureC570::class));
                    },
                    FixtureC572::class => static function (ContainerInterface $container) {
                        return new FixtureC572($container->get(FixtureC571::class));
                    },
                    FixtureC573::class => static function (ContainerInterface $container) {
                        return new FixtureC573($container->get(FixtureC572::class));
                    },
                    FixtureC574::class => static function (ContainerInterface $container) {
                        return new FixtureC574($container->get(FixtureC573::class));
                    },
                    FixtureC575::class => static function (ContainerInterface $container) {
                        return new FixtureC575($container->get(FixtureC574::class));
                    },
                    FixtureC576::class => static function (ContainerInterface $container) {
                        return new FixtureC576($container->get(FixtureC575::class));
                    },
                    FixtureC577::class => static function (ContainerInterface $container) {
                        return new FixtureC577($container->get(FixtureC576::class));
                    },
                    FixtureC578::class => static function (ContainerInterface $container) {
                        return new FixtureC578($container->get(FixtureC577::class));
                    },
                    FixtureC579::class => static function (ContainerInterface $container) {
                        return new FixtureC579($container->get(FixtureC578::class));
                    },
                    FixtureC580::class => static function (ContainerInterface $container) {
                        return new FixtureC580($container->get(FixtureC579::class));
                    },
                    FixtureC581::class => static function (ContainerInterface $container) {
                        return new FixtureC581($container->get(FixtureC580::class));
                    },
                    FixtureC582::class => static function (ContainerInterface $container) {
                        return new FixtureC582($container->get(FixtureC581::class));
                    },
                    FixtureC583::class => static function (ContainerInterface $container) {
                        return new FixtureC583($container->get(FixtureC582::class));
                    },
                    FixtureC584::class => static function (ContainerInterface $container) {
                        return new FixtureC584($container->get(FixtureC583::class));
                    },
                    FixtureC585::class => static function (ContainerInterface $container) {
                        return new FixtureC585($container->get(FixtureC584::class));
                    },
                    FixtureC586::class => static function (ContainerInterface $container) {
                        return new FixtureC586($container->get(FixtureC585::class));
                    },
                    FixtureC587::class => static function (ContainerInterface $container) {
                        return new FixtureC587($container->get(FixtureC586::class));
                    },
                    FixtureC588::class => static function (ContainerInterface $container) {
                        return new FixtureC588($container->get(FixtureC587::class));
                    },
                    FixtureC589::class => static function (ContainerInterface $container) {
                        return new FixtureC589($container->get(FixtureC588::class));
                    },
                    FixtureC590::class => static function (ContainerInterface $container) {
                        return new FixtureC590($container->get(FixtureC589::class));
                    },
                    FixtureC591::class => static function (ContainerInterface $container) {
                        return new FixtureC591($container->get(FixtureC590::class));
                    },
                    FixtureC592::class => static function (ContainerInterface $container) {
                        return new FixtureC592($container->get(FixtureC591::class));
                    },
                    FixtureC593::class => static function (ContainerInterface $container) {
                        return new FixtureC593($container->get(FixtureC592::class));
                    },
                    FixtureC594::class => static function (ContainerInterface $container) {
                        return new FixtureC594($container->get(FixtureC593::class));
                    },
                    FixtureC595::class => static function (ContainerInterface $container) {
                        return new FixtureC595($container->get(FixtureC594::class));
                    },
                    FixtureC596::class => static function (ContainerInterface $container) {
                        return new FixtureC596($container->get(FixtureC595::class));
                    },
                    FixtureC597::class => static function (ContainerInterface $container) {
                        return new FixtureC597($container->get(FixtureC596::class));
                    },
                    FixtureC598::class => static function (ContainerInterface $container) {
                        return new FixtureC598($container->get(FixtureC597::class));
                    },
                    FixtureC599::class => static function (ContainerInterface $container) {
                        return new FixtureC599($container->get(FixtureC598::class));
                    },
                    FixtureC600::class => static function (ContainerInterface $container) {
                        return new FixtureC600($container->get(FixtureC599::class));
                    },
                    FixtureC601::class => static function (ContainerInterface $container) {
                        return new FixtureC601($container->get(FixtureC600::class));
                    },
                    FixtureC602::class => static function (ContainerInterface $container) {
                        return new FixtureC602($container->get(FixtureC601::class));
                    },
                    FixtureC603::class => static function (ContainerInterface $container) {
                        return new FixtureC603($container->get(FixtureC602::class));
                    },
                    FixtureC604::class => static function (ContainerInterface $container) {
                        return new FixtureC604($container->get(FixtureC603::class));
                    },
                    FixtureC605::class => static function (ContainerInterface $container) {
                        return new FixtureC605($container->get(FixtureC604::class));
                    },
                    FixtureC606::class => static function (ContainerInterface $container) {
                        return new FixtureC606($container->get(FixtureC605::class));
                    },
                    FixtureC607::class => static function (ContainerInterface $container) {
                        return new FixtureC607($container->get(FixtureC606::class));
                    },
                    FixtureC608::class => static function (ContainerInterface $container) {
                        return new FixtureC608($container->get(FixtureC607::class));
                    },
                    FixtureC609::class => static function (ContainerInterface $container) {
                        return new FixtureC609($container->get(FixtureC608::class));
                    },
                    FixtureC610::class => static function (ContainerInterface $container) {
                        return new FixtureC610($container->get(FixtureC609::class));
                    },
                    FixtureC611::class => static function (ContainerInterface $container) {
                        return new FixtureC611($container->get(FixtureC610::class));
                    },
                    FixtureC612::class => static function (ContainerInterface $container) {
                        return new FixtureC612($container->get(FixtureC611::class));
                    },
                    FixtureC613::class => static function (ContainerInterface $container) {
                        return new FixtureC613($container->get(FixtureC612::class));
                    },
                    FixtureC614::class => static function (ContainerInterface $container) {
                        return new FixtureC614($container->get(FixtureC613::class));
                    },
                    FixtureC615::class => static function (ContainerInterface $container) {
                        return new FixtureC615($container->get(FixtureC614::class));
                    },
                    FixtureC616::class => static function (ContainerInterface $container) {
                        return new FixtureC616($container->get(FixtureC615::class));
                    },
                    FixtureC617::class => static function (ContainerInterface $container) {
                        return new FixtureC617($container->get(FixtureC616::class));
                    },
                    FixtureC618::class => static function (ContainerInterface $container) {
                        return new FixtureC618($container->get(FixtureC617::class));
                    },
                    FixtureC619::class => static function (ContainerInterface $container) {
                        return new FixtureC619($container->get(FixtureC618::class));
                    },
                    FixtureC620::class => static function (ContainerInterface $container) {
                        return new FixtureC620($container->get(FixtureC619::class));
                    },
                    FixtureC621::class => static function (ContainerInterface $container) {
                        return new FixtureC621($container->get(FixtureC620::class));
                    },
                    FixtureC622::class => static function (ContainerInterface $container) {
                        return new FixtureC622($container->get(FixtureC621::class));
                    },
                    FixtureC623::class => static function (ContainerInterface $container) {
                        return new FixtureC623($container->get(FixtureC622::class));
                    },
                    FixtureC624::class => static function (ContainerInterface $container) {
                        return new FixtureC624($container->get(FixtureC623::class));
                    },
                    FixtureC625::class => static function (ContainerInterface $container) {
                        return new FixtureC625($container->get(FixtureC624::class));
                    },
                    FixtureC626::class => static function (ContainerInterface $container) {
                        return new FixtureC626($container->get(FixtureC625::class));
                    },
                    FixtureC627::class => static function (ContainerInterface $container) {
                        return new FixtureC627($container->get(FixtureC626::class));
                    },
                    FixtureC628::class => static function (ContainerInterface $container) {
                        return new FixtureC628($container->get(FixtureC627::class));
                    },
                    FixtureC629::class => static function (ContainerInterface $container) {
                        return new FixtureC629($container->get(FixtureC628::class));
                    },
                    FixtureC630::class => static function (ContainerInterface $container) {
                        return new FixtureC630($container->get(FixtureC629::class));
                    },
                    FixtureC631::class => static function (ContainerInterface $container) {
                        return new FixtureC631($container->get(FixtureC630::class));
                    },
                    FixtureC632::class => static function (ContainerInterface $container) {
                        return new FixtureC632($container->get(FixtureC631::class));
                    },
                    FixtureC633::class => static function (ContainerInterface $container) {
                        return new FixtureC633($container->get(FixtureC632::class));
                    },
                    FixtureC634::class => static function (ContainerInterface $container) {
                        return new FixtureC634($container->get(FixtureC633::class));
                    },
                    FixtureC635::class => static function (ContainerInterface $container) {
                        return new FixtureC635($container->get(FixtureC634::class));
                    },
                    FixtureC636::class => static function (ContainerInterface $container) {
                        return new FixtureC636($container->get(FixtureC635::class));
                    },
                    FixtureC637::class => static function (ContainerInterface $container) {
                        return new FixtureC637($container->get(FixtureC636::class));
                    },
                    FixtureC638::class => static function (ContainerInterface $container) {
                        return new FixtureC638($container->get(FixtureC637::class));
                    },
                    FixtureC639::class => static function (ContainerInterface $container) {
                        return new FixtureC639($container->get(FixtureC638::class));
                    },
                    FixtureC640::class => static function (ContainerInterface $container) {
                        return new FixtureC640($container->get(FixtureC639::class));
                    },
                    FixtureC641::class => static function (ContainerInterface $container) {
                        return new FixtureC641($container->get(FixtureC640::class));
                    },
                    FixtureC642::class => static function (ContainerInterface $container) {
                        return new FixtureC642($container->get(FixtureC641::class));
                    },
                    FixtureC643::class => static function (ContainerInterface $container) {
                        return new FixtureC643($container->get(FixtureC642::class));
                    },
                    FixtureC644::class => static function (ContainerInterface $container) {
                        return new FixtureC644($container->get(FixtureC643::class));
                    },
                    FixtureC645::class => static function (ContainerInterface $container) {
                        return new FixtureC645($container->get(FixtureC644::class));
                    },
                    FixtureC646::class => static function (ContainerInterface $container) {
                        return new FixtureC646($container->get(FixtureC645::class));
                    },
                    FixtureC647::class => static function (ContainerInterface $container) {
                        return new FixtureC647($container->get(FixtureC646::class));
                    },
                    FixtureC648::class => static function (ContainerInterface $container) {
                        return new FixtureC648($container->get(FixtureC647::class));
                    },
                    FixtureC649::class => static function (ContainerInterface $container) {
                        return new FixtureC649($container->get(FixtureC648::class));
                    },
                    FixtureC650::class => static function (ContainerInterface $container) {
                        return new FixtureC650($container->get(FixtureC649::class));
                    },
                    FixtureC651::class => static function (ContainerInterface $container) {
                        return new FixtureC651($container->get(FixtureC650::class));
                    },
                    FixtureC652::class => static function (ContainerInterface $container) {
                        return new FixtureC652($container->get(FixtureC651::class));
                    },
                    FixtureC653::class => static function (ContainerInterface $container) {
                        return new FixtureC653($container->get(FixtureC652::class));
                    },
                    FixtureC654::class => static function (ContainerInterface $container) {
                        return new FixtureC654($container->get(FixtureC653::class));
                    },
                    FixtureC655::class => static function (ContainerInterface $container) {
                        return new FixtureC655($container->get(FixtureC654::class));
                    },
                    FixtureC656::class => static function (ContainerInterface $container) {
                        return new FixtureC656($container->get(FixtureC655::class));
                    },
                    FixtureC657::class => static function (ContainerInterface $container) {
                        return new FixtureC657($container->get(FixtureC656::class));
                    },
                    FixtureC658::class => static function (ContainerInterface $container) {
                        return new FixtureC658($container->get(FixtureC657::class));
                    },
                    FixtureC659::class => static function (ContainerInterface $container) {
                        return new FixtureC659($container->get(FixtureC658::class));
                    },
                    FixtureC660::class => static function (ContainerInterface $container) {
                        return new FixtureC660($container->get(FixtureC659::class));
                    },
                    FixtureC661::class => static function (ContainerInterface $container) {
                        return new FixtureC661($container->get(FixtureC660::class));
                    },
                    FixtureC662::class => static function (ContainerInterface $container) {
                        return new FixtureC662($container->get(FixtureC661::class));
                    },
                    FixtureC663::class => static function (ContainerInterface $container) {
                        return new FixtureC663($container->get(FixtureC662::class));
                    },
                    FixtureC664::class => static function (ContainerInterface $container) {
                        return new FixtureC664($container->get(FixtureC663::class));
                    },
                    FixtureC665::class => static function (ContainerInterface $container) {
                        return new FixtureC665($container->get(FixtureC664::class));
                    },
                    FixtureC666::class => static function (ContainerInterface $container) {
                        return new FixtureC666($container->get(FixtureC665::class));
                    },
                    FixtureC667::class => static function (ContainerInterface $container) {
                        return new FixtureC667($container->get(FixtureC666::class));
                    },
                    FixtureC668::class => static function (ContainerInterface $container) {
                        return new FixtureC668($container->get(FixtureC667::class));
                    },
                    FixtureC669::class => static function (ContainerInterface $container) {
                        return new FixtureC669($container->get(FixtureC668::class));
                    },
                    FixtureC670::class => static function (ContainerInterface $container) {
                        return new FixtureC670($container->get(FixtureC669::class));
                    },
                    FixtureC671::class => static function (ContainerInterface $container) {
                        return new FixtureC671($container->get(FixtureC670::class));
                    },
                    FixtureC672::class => static function (ContainerInterface $container) {
                        return new FixtureC672($container->get(FixtureC671::class));
                    },
                    FixtureC673::class => static function (ContainerInterface $container) {
                        return new FixtureC673($container->get(FixtureC672::class));
                    },
                    FixtureC674::class => static function (ContainerInterface $container) {
                        return new FixtureC674($container->get(FixtureC673::class));
                    },
                    FixtureC675::class => static function (ContainerInterface $container) {
                        return new FixtureC675($container->get(FixtureC674::class));
                    },
                    FixtureC676::class => static function (ContainerInterface $container) {
                        return new FixtureC676($container->get(FixtureC675::class));
                    },
                    FixtureC677::class => static function (ContainerInterface $container) {
                        return new FixtureC677($container->get(FixtureC676::class));
                    },
                    FixtureC678::class => static function (ContainerInterface $container) {
                        return new FixtureC678($container->get(FixtureC677::class));
                    },
                    FixtureC679::class => static function (ContainerInterface $container) {
                        return new FixtureC679($container->get(FixtureC678::class));
                    },
                    FixtureC680::class => static function (ContainerInterface $container) {
                        return new FixtureC680($container->get(FixtureC679::class));
                    },
                    FixtureC681::class => static function (ContainerInterface $container) {
                        return new FixtureC681($container->get(FixtureC680::class));
                    },
                    FixtureC682::class => static function (ContainerInterface $container) {
                        return new FixtureC682($container->get(FixtureC681::class));
                    },
                    FixtureC683::class => static function (ContainerInterface $container) {
                        return new FixtureC683($container->get(FixtureC682::class));
                    },
                    FixtureC684::class => static function (ContainerInterface $container) {
                        return new FixtureC684($container->get(FixtureC683::class));
                    },
                    FixtureC685::class => static function (ContainerInterface $container) {
                        return new FixtureC685($container->get(FixtureC684::class));
                    },
                    FixtureC686::class => static function (ContainerInterface $container) {
                        return new FixtureC686($container->get(FixtureC685::class));
                    },
                    FixtureC687::class => static function (ContainerInterface $container) {
                        return new FixtureC687($container->get(FixtureC686::class));
                    },
                    FixtureC688::class => static function (ContainerInterface $container) {
                        return new FixtureC688($container->get(FixtureC687::class));
                    },
                    FixtureC689::class => static function (ContainerInterface $container) {
                        return new FixtureC689($container->get(FixtureC688::class));
                    },
                    FixtureC690::class => static function (ContainerInterface $container) {
                        return new FixtureC690($container->get(FixtureC689::class));
                    },
                    FixtureC691::class => static function (ContainerInterface $container) {
                        return new FixtureC691($container->get(FixtureC690::class));
                    },
                    FixtureC692::class => static function (ContainerInterface $container) {
                        return new FixtureC692($container->get(FixtureC691::class));
                    },
                    FixtureC693::class => static function (ContainerInterface $container) {
                        return new FixtureC693($container->get(FixtureC692::class));
                    },
                    FixtureC694::class => static function (ContainerInterface $container) {
                        return new FixtureC694($container->get(FixtureC693::class));
                    },
                    FixtureC695::class => static function (ContainerInterface $container) {
                        return new FixtureC695($container->get(FixtureC694::class));
                    },
                    FixtureC696::class => static function (ContainerInterface $container) {
                        return new FixtureC696($container->get(FixtureC695::class));
                    },
                    FixtureC697::class => static function (ContainerInterface $container) {
                        return new FixtureC697($container->get(FixtureC696::class));
                    },
                    FixtureC698::class => static function (ContainerInterface $container) {
                        return new FixtureC698($container->get(FixtureC697::class));
                    },
                    FixtureC699::class => static function (ContainerInterface $container) {
                        return new FixtureC699($container->get(FixtureC698::class));
                    },
                    FixtureC700::class => static function (ContainerInterface $container) {
                        return new FixtureC700($container->get(FixtureC699::class));
                    },
                    FixtureC701::class => static function (ContainerInterface $container) {
                        return new FixtureC701($container->get(FixtureC700::class));
                    },
                    FixtureC702::class => static function (ContainerInterface $container) {
                        return new FixtureC702($container->get(FixtureC701::class));
                    },
                    FixtureC703::class => static function (ContainerInterface $container) {
                        return new FixtureC703($container->get(FixtureC702::class));
                    },
                    FixtureC704::class => static function (ContainerInterface $container) {
                        return new FixtureC704($container->get(FixtureC703::class));
                    },
                    FixtureC705::class => static function (ContainerInterface $container) {
                        return new FixtureC705($container->get(FixtureC704::class));
                    },
                    FixtureC706::class => static function (ContainerInterface $container) {
                        return new FixtureC706($container->get(FixtureC705::class));
                    },
                    FixtureC707::class => static function (ContainerInterface $container) {
                        return new FixtureC707($container->get(FixtureC706::class));
                    },
                    FixtureC708::class => static function (ContainerInterface $container) {
                        return new FixtureC708($container->get(FixtureC707::class));
                    },
                    FixtureC709::class => static function (ContainerInterface $container) {
                        return new FixtureC709($container->get(FixtureC708::class));
                    },
                    FixtureC710::class => static function (ContainerInterface $container) {
                        return new FixtureC710($container->get(FixtureC709::class));
                    },
                    FixtureC711::class => static function (ContainerInterface $container) {
                        return new FixtureC711($container->get(FixtureC710::class));
                    },
                    FixtureC712::class => static function (ContainerInterface $container) {
                        return new FixtureC712($container->get(FixtureC711::class));
                    },
                    FixtureC713::class => static function (ContainerInterface $container) {
                        return new FixtureC713($container->get(FixtureC712::class));
                    },
                    FixtureC714::class => static function (ContainerInterface $container) {
                        return new FixtureC714($container->get(FixtureC713::class));
                    },
                    FixtureC715::class => static function (ContainerInterface $container) {
                        return new FixtureC715($container->get(FixtureC714::class));
                    },
                    FixtureC716::class => static function (ContainerInterface $container) {
                        return new FixtureC716($container->get(FixtureC715::class));
                    },
                    FixtureC717::class => static function (ContainerInterface $container) {
                        return new FixtureC717($container->get(FixtureC716::class));
                    },
                    FixtureC718::class => static function (ContainerInterface $container) {
                        return new FixtureC718($container->get(FixtureC717::class));
                    },
                    FixtureC719::class => static function (ContainerInterface $container) {
                        return new FixtureC719($container->get(FixtureC718::class));
                    },
                    FixtureC720::class => static function (ContainerInterface $container) {
                        return new FixtureC720($container->get(FixtureC719::class));
                    },
                    FixtureC721::class => static function (ContainerInterface $container) {
                        return new FixtureC721($container->get(FixtureC720::class));
                    },
                    FixtureC722::class => static function (ContainerInterface $container) {
                        return new FixtureC722($container->get(FixtureC721::class));
                    },
                    FixtureC723::class => static function (ContainerInterface $container) {
                        return new FixtureC723($container->get(FixtureC722::class));
                    },
                    FixtureC724::class => static function (ContainerInterface $container) {
                        return new FixtureC724($container->get(FixtureC723::class));
                    },
                    FixtureC725::class => static function (ContainerInterface $container) {
                        return new FixtureC725($container->get(FixtureC724::class));
                    },
                    FixtureC726::class => static function (ContainerInterface $container) {
                        return new FixtureC726($container->get(FixtureC725::class));
                    },
                    FixtureC727::class => static function (ContainerInterface $container) {
                        return new FixtureC727($container->get(FixtureC726::class));
                    },
                    FixtureC728::class => static function (ContainerInterface $container) {
                        return new FixtureC728($container->get(FixtureC727::class));
                    },
                    FixtureC729::class => static function (ContainerInterface $container) {
                        return new FixtureC729($container->get(FixtureC728::class));
                    },
                    FixtureC730::class => static function (ContainerInterface $container) {
                        return new FixtureC730($container->get(FixtureC729::class));
                    },
                    FixtureC731::class => static function (ContainerInterface $container) {
                        return new FixtureC731($container->get(FixtureC730::class));
                    },
                    FixtureC732::class => static function (ContainerInterface $container) {
                        return new FixtureC732($container->get(FixtureC731::class));
                    },
                    FixtureC733::class => static function (ContainerInterface $container) {
                        return new FixtureC733($container->get(FixtureC732::class));
                    },
                    FixtureC734::class => static function (ContainerInterface $container) {
                        return new FixtureC734($container->get(FixtureC733::class));
                    },
                    FixtureC735::class => static function (ContainerInterface $container) {
                        return new FixtureC735($container->get(FixtureC734::class));
                    },
                    FixtureC736::class => static function (ContainerInterface $container) {
                        return new FixtureC736($container->get(FixtureC735::class));
                    },
                    FixtureC737::class => static function (ContainerInterface $container) {
                        return new FixtureC737($container->get(FixtureC736::class));
                    },
                    FixtureC738::class => static function (ContainerInterface $container) {
                        return new FixtureC738($container->get(FixtureC737::class));
                    },
                    FixtureC739::class => static function (ContainerInterface $container) {
                        return new FixtureC739($container->get(FixtureC738::class));
                    },
                    FixtureC740::class => static function (ContainerInterface $container) {
                        return new FixtureC740($container->get(FixtureC739::class));
                    },
                    FixtureC741::class => static function (ContainerInterface $container) {
                        return new FixtureC741($container->get(FixtureC740::class));
                    },
                    FixtureC742::class => static function (ContainerInterface $container) {
                        return new FixtureC742($container->get(FixtureC741::class));
                    },
                    FixtureC743::class => static function (ContainerInterface $container) {
                        return new FixtureC743($container->get(FixtureC742::class));
                    },
                    FixtureC744::class => static function (ContainerInterface $container) {
                        return new FixtureC744($container->get(FixtureC743::class));
                    },
                    FixtureC745::class => static function (ContainerInterface $container) {
                        return new FixtureC745($container->get(FixtureC744::class));
                    },
                    FixtureC746::class => static function (ContainerInterface $container) {
                        return new FixtureC746($container->get(FixtureC745::class));
                    },
                    FixtureC747::class => static function (ContainerInterface $container) {
                        return new FixtureC747($container->get(FixtureC746::class));
                    },
                    FixtureC748::class => static function (ContainerInterface $container) {
                        return new FixtureC748($container->get(FixtureC747::class));
                    },
                    FixtureC749::class => static function (ContainerInterface $container) {
                        return new FixtureC749($container->get(FixtureC748::class));
                    },
                    FixtureC750::class => static function (ContainerInterface $container) {
                        return new FixtureC750($container->get(FixtureC749::class));
                    },
                    FixtureC751::class => static function (ContainerInterface $container) {
                        return new FixtureC751($container->get(FixtureC750::class));
                    },
                    FixtureC752::class => static function (ContainerInterface $container) {
                        return new FixtureC752($container->get(FixtureC751::class));
                    },
                    FixtureC753::class => static function (ContainerInterface $container) {
                        return new FixtureC753($container->get(FixtureC752::class));
                    },
                    FixtureC754::class => static function (ContainerInterface $container) {
                        return new FixtureC754($container->get(FixtureC753::class));
                    },
                    FixtureC755::class => static function (ContainerInterface $container) {
                        return new FixtureC755($container->get(FixtureC754::class));
                    },
                    FixtureC756::class => static function (ContainerInterface $container) {
                        return new FixtureC756($container->get(FixtureC755::class));
                    },
                    FixtureC757::class => static function (ContainerInterface $container) {
                        return new FixtureC757($container->get(FixtureC756::class));
                    },
                    FixtureC758::class => static function (ContainerInterface $container) {
                        return new FixtureC758($container->get(FixtureC757::class));
                    },
                    FixtureC759::class => static function (ContainerInterface $container) {
                        return new FixtureC759($container->get(FixtureC758::class));
                    },
                    FixtureC760::class => static function (ContainerInterface $container) {
                        return new FixtureC760($container->get(FixtureC759::class));
                    },
                    FixtureC761::class => static function (ContainerInterface $container) {
                        return new FixtureC761($container->get(FixtureC760::class));
                    },
                    FixtureC762::class => static function (ContainerInterface $container) {
                        return new FixtureC762($container->get(FixtureC761::class));
                    },
                    FixtureC763::class => static function (ContainerInterface $container) {
                        return new FixtureC763($container->get(FixtureC762::class));
                    },
                    FixtureC764::class => static function (ContainerInterface $container) {
                        return new FixtureC764($container->get(FixtureC763::class));
                    },
                    FixtureC765::class => static function (ContainerInterface $container) {
                        return new FixtureC765($container->get(FixtureC764::class));
                    },
                    FixtureC766::class => static function (ContainerInterface $container) {
                        return new FixtureC766($container->get(FixtureC765::class));
                    },
                    FixtureC767::class => static function (ContainerInterface $container) {
                        return new FixtureC767($container->get(FixtureC766::class));
                    },
                    FixtureC768::class => static function (ContainerInterface $container) {
                        return new FixtureC768($container->get(FixtureC767::class));
                    },
                    FixtureC769::class => static function (ContainerInterface $container) {
                        return new FixtureC769($container->get(FixtureC768::class));
                    },
                    FixtureC770::class => static function (ContainerInterface $container) {
                        return new FixtureC770($container->get(FixtureC769::class));
                    },
                    FixtureC771::class => static function (ContainerInterface $container) {
                        return new FixtureC771($container->get(FixtureC770::class));
                    },
                    FixtureC772::class => static function (ContainerInterface $container) {
                        return new FixtureC772($container->get(FixtureC771::class));
                    },
                    FixtureC773::class => static function (ContainerInterface $container) {
                        return new FixtureC773($container->get(FixtureC772::class));
                    },
                    FixtureC774::class => static function (ContainerInterface $container) {
                        return new FixtureC774($container->get(FixtureC773::class));
                    },
                    FixtureC775::class => static function (ContainerInterface $container) {
                        return new FixtureC775($container->get(FixtureC774::class));
                    },
                    FixtureC776::class => static function (ContainerInterface $container) {
                        return new FixtureC776($container->get(FixtureC775::class));
                    },
                    FixtureC777::class => static function (ContainerInterface $container) {
                        return new FixtureC777($container->get(FixtureC776::class));
                    },
                    FixtureC778::class => static function (ContainerInterface $container) {
                        return new FixtureC778($container->get(FixtureC777::class));
                    },
                    FixtureC779::class => static function (ContainerInterface $container) {
                        return new FixtureC779($container->get(FixtureC778::class));
                    },
                    FixtureC780::class => static function (ContainerInterface $container) {
                        return new FixtureC780($container->get(FixtureC779::class));
                    },
                    FixtureC781::class => static function (ContainerInterface $container) {
                        return new FixtureC781($container->get(FixtureC780::class));
                    },
                    FixtureC782::class => static function (ContainerInterface $container) {
                        return new FixtureC782($container->get(FixtureC781::class));
                    },
                    FixtureC783::class => static function (ContainerInterface $container) {
                        return new FixtureC783($container->get(FixtureC782::class));
                    },
                    FixtureC784::class => static function (ContainerInterface $container) {
                        return new FixtureC784($container->get(FixtureC783::class));
                    },
                    FixtureC785::class => static function (ContainerInterface $container) {
                        return new FixtureC785($container->get(FixtureC784::class));
                    },
                    FixtureC786::class => static function (ContainerInterface $container) {
                        return new FixtureC786($container->get(FixtureC785::class));
                    },
                    FixtureC787::class => static function (ContainerInterface $container) {
                        return new FixtureC787($container->get(FixtureC786::class));
                    },
                    FixtureC788::class => static function (ContainerInterface $container) {
                        return new FixtureC788($container->get(FixtureC787::class));
                    },
                    FixtureC789::class => static function (ContainerInterface $container) {
                        return new FixtureC789($container->get(FixtureC788::class));
                    },
                    FixtureC790::class => static function (ContainerInterface $container) {
                        return new FixtureC790($container->get(FixtureC789::class));
                    },
                    FixtureC791::class => static function (ContainerInterface $container) {
                        return new FixtureC791($container->get(FixtureC790::class));
                    },
                    FixtureC792::class => static function (ContainerInterface $container) {
                        return new FixtureC792($container->get(FixtureC791::class));
                    },
                    FixtureC793::class => static function (ContainerInterface $container) {
                        return new FixtureC793($container->get(FixtureC792::class));
                    },
                    FixtureC794::class => static function (ContainerInterface $container) {
                        return new FixtureC794($container->get(FixtureC793::class));
                    },
                    FixtureC795::class => static function (ContainerInterface $container) {
                        return new FixtureC795($container->get(FixtureC794::class));
                    },
                    FixtureC796::class => static function (ContainerInterface $container) {
                        return new FixtureC796($container->get(FixtureC795::class));
                    },
                    FixtureC797::class => static function (ContainerInterface $container) {
                        return new FixtureC797($container->get(FixtureC796::class));
                    },
                    FixtureC798::class => static function (ContainerInterface $container) {
                        return new FixtureC798($container->get(FixtureC797::class));
                    },
                    FixtureC799::class => static function (ContainerInterface $container) {
                        return new FixtureC799($container->get(FixtureC798::class));
                    },
                    FixtureC800::class => static function (ContainerInterface $container) {
                        return new FixtureC800($container->get(FixtureC799::class));
                    },
                    FixtureC801::class => static function (ContainerInterface $container) {
                        return new FixtureC801($container->get(FixtureC800::class));
                    },
                    FixtureC802::class => static function (ContainerInterface $container) {
                        return new FixtureC802($container->get(FixtureC801::class));
                    },
                    FixtureC803::class => static function (ContainerInterface $container) {
                        return new FixtureC803($container->get(FixtureC802::class));
                    },
                    FixtureC804::class => static function (ContainerInterface $container) {
                        return new FixtureC804($container->get(FixtureC803::class));
                    },
                    FixtureC805::class => static function (ContainerInterface $container) {
                        return new FixtureC805($container->get(FixtureC804::class));
                    },
                    FixtureC806::class => static function (ContainerInterface $container) {
                        return new FixtureC806($container->get(FixtureC805::class));
                    },
                    FixtureC807::class => static function (ContainerInterface $container) {
                        return new FixtureC807($container->get(FixtureC806::class));
                    },
                    FixtureC808::class => static function (ContainerInterface $container) {
                        return new FixtureC808($container->get(FixtureC807::class));
                    },
                    FixtureC809::class => static function (ContainerInterface $container) {
                        return new FixtureC809($container->get(FixtureC808::class));
                    },
                    FixtureC810::class => static function (ContainerInterface $container) {
                        return new FixtureC810($container->get(FixtureC809::class));
                    },
                    FixtureC811::class => static function (ContainerInterface $container) {
                        return new FixtureC811($container->get(FixtureC810::class));
                    },
                    FixtureC812::class => static function (ContainerInterface $container) {
                        return new FixtureC812($container->get(FixtureC811::class));
                    },
                    FixtureC813::class => static function (ContainerInterface $container) {
                        return new FixtureC813($container->get(FixtureC812::class));
                    },
                    FixtureC814::class => static function (ContainerInterface $container) {
                        return new FixtureC814($container->get(FixtureC813::class));
                    },
                    FixtureC815::class => static function (ContainerInterface $container) {
                        return new FixtureC815($container->get(FixtureC814::class));
                    },
                    FixtureC816::class => static function (ContainerInterface $container) {
                        return new FixtureC816($container->get(FixtureC815::class));
                    },
                    FixtureC817::class => static function (ContainerInterface $container) {
                        return new FixtureC817($container->get(FixtureC816::class));
                    },
                    FixtureC818::class => static function (ContainerInterface $container) {
                        return new FixtureC818($container->get(FixtureC817::class));
                    },
                    FixtureC819::class => static function (ContainerInterface $container) {
                        return new FixtureC819($container->get(FixtureC818::class));
                    },
                    FixtureC820::class => static function (ContainerInterface $container) {
                        return new FixtureC820($container->get(FixtureC819::class));
                    },
                    FixtureC821::class => static function (ContainerInterface $container) {
                        return new FixtureC821($container->get(FixtureC820::class));
                    },
                    FixtureC822::class => static function (ContainerInterface $container) {
                        return new FixtureC822($container->get(FixtureC821::class));
                    },
                    FixtureC823::class => static function (ContainerInterface $container) {
                        return new FixtureC823($container->get(FixtureC822::class));
                    },
                    FixtureC824::class => static function (ContainerInterface $container) {
                        return new FixtureC824($container->get(FixtureC823::class));
                    },
                    FixtureC825::class => static function (ContainerInterface $container) {
                        return new FixtureC825($container->get(FixtureC824::class));
                    },
                    FixtureC826::class => static function (ContainerInterface $container) {
                        return new FixtureC826($container->get(FixtureC825::class));
                    },
                    FixtureC827::class => static function (ContainerInterface $container) {
                        return new FixtureC827($container->get(FixtureC826::class));
                    },
                    FixtureC828::class => static function (ContainerInterface $container) {
                        return new FixtureC828($container->get(FixtureC827::class));
                    },
                    FixtureC829::class => static function (ContainerInterface $container) {
                        return new FixtureC829($container->get(FixtureC828::class));
                    },
                    FixtureC830::class => static function (ContainerInterface $container) {
                        return new FixtureC830($container->get(FixtureC829::class));
                    },
                    FixtureC831::class => static function (ContainerInterface $container) {
                        return new FixtureC831($container->get(FixtureC830::class));
                    },
                    FixtureC832::class => static function (ContainerInterface $container) {
                        return new FixtureC832($container->get(FixtureC831::class));
                    },
                    FixtureC833::class => static function (ContainerInterface $container) {
                        return new FixtureC833($container->get(FixtureC832::class));
                    },
                    FixtureC834::class => static function (ContainerInterface $container) {
                        return new FixtureC834($container->get(FixtureC833::class));
                    },
                    FixtureC835::class => static function (ContainerInterface $container) {
                        return new FixtureC835($container->get(FixtureC834::class));
                    },
                    FixtureC836::class => static function (ContainerInterface $container) {
                        return new FixtureC836($container->get(FixtureC835::class));
                    },
                    FixtureC837::class => static function (ContainerInterface $container) {
                        return new FixtureC837($container->get(FixtureC836::class));
                    },
                    FixtureC838::class => static function (ContainerInterface $container) {
                        return new FixtureC838($container->get(FixtureC837::class));
                    },
                    FixtureC839::class => static function (ContainerInterface $container) {
                        return new FixtureC839($container->get(FixtureC838::class));
                    },
                    FixtureC840::class => static function (ContainerInterface $container) {
                        return new FixtureC840($container->get(FixtureC839::class));
                    },
                    FixtureC841::class => static function (ContainerInterface $container) {
                        return new FixtureC841($container->get(FixtureC840::class));
                    },
                    FixtureC842::class => static function (ContainerInterface $container) {
                        return new FixtureC842($container->get(FixtureC841::class));
                    },
                    FixtureC843::class => static function (ContainerInterface $container) {
                        return new FixtureC843($container->get(FixtureC842::class));
                    },
                    FixtureC844::class => static function (ContainerInterface $container) {
                        return new FixtureC844($container->get(FixtureC843::class));
                    },
                    FixtureC845::class => static function (ContainerInterface $container) {
                        return new FixtureC845($container->get(FixtureC844::class));
                    },
                    FixtureC846::class => static function (ContainerInterface $container) {
                        return new FixtureC846($container->get(FixtureC845::class));
                    },
                    FixtureC847::class => static function (ContainerInterface $container) {
                        return new FixtureC847($container->get(FixtureC846::class));
                    },
                    FixtureC848::class => static function (ContainerInterface $container) {
                        return new FixtureC848($container->get(FixtureC847::class));
                    },
                    FixtureC849::class => static function (ContainerInterface $container) {
                        return new FixtureC849($container->get(FixtureC848::class));
                    },
                    FixtureC850::class => static function (ContainerInterface $container) {
                        return new FixtureC850($container->get(FixtureC849::class));
                    },
                    FixtureC851::class => static function (ContainerInterface $container) {
                        return new FixtureC851($container->get(FixtureC850::class));
                    },
                    FixtureC852::class => static function (ContainerInterface $container) {
                        return new FixtureC852($container->get(FixtureC851::class));
                    },
                    FixtureC853::class => static function (ContainerInterface $container) {
                        return new FixtureC853($container->get(FixtureC852::class));
                    },
                    FixtureC854::class => static function (ContainerInterface $container) {
                        return new FixtureC854($container->get(FixtureC853::class));
                    },
                    FixtureC855::class => static function (ContainerInterface $container) {
                        return new FixtureC855($container->get(FixtureC854::class));
                    },
                    FixtureC856::class => static function (ContainerInterface $container) {
                        return new FixtureC856($container->get(FixtureC855::class));
                    },
                    FixtureC857::class => static function (ContainerInterface $container) {
                        return new FixtureC857($container->get(FixtureC856::class));
                    },
                    FixtureC858::class => static function (ContainerInterface $container) {
                        return new FixtureC858($container->get(FixtureC857::class));
                    },
                    FixtureC859::class => static function (ContainerInterface $container) {
                        return new FixtureC859($container->get(FixtureC858::class));
                    },
                    FixtureC860::class => static function (ContainerInterface $container) {
                        return new FixtureC860($container->get(FixtureC859::class));
                    },
                    FixtureC861::class => static function (ContainerInterface $container) {
                        return new FixtureC861($container->get(FixtureC860::class));
                    },
                    FixtureC862::class => static function (ContainerInterface $container) {
                        return new FixtureC862($container->get(FixtureC861::class));
                    },
                    FixtureC863::class => static function (ContainerInterface $container) {
                        return new FixtureC863($container->get(FixtureC862::class));
                    },
                    FixtureC864::class => static function (ContainerInterface $container) {
                        return new FixtureC864($container->get(FixtureC863::class));
                    },
                    FixtureC865::class => static function (ContainerInterface $container) {
                        return new FixtureC865($container->get(FixtureC864::class));
                    },
                    FixtureC866::class => static function (ContainerInterface $container) {
                        return new FixtureC866($container->get(FixtureC865::class));
                    },
                    FixtureC867::class => static function (ContainerInterface $container) {
                        return new FixtureC867($container->get(FixtureC866::class));
                    },
                    FixtureC868::class => static function (ContainerInterface $container) {
                        return new FixtureC868($container->get(FixtureC867::class));
                    },
                    FixtureC869::class => static function (ContainerInterface $container) {
                        return new FixtureC869($container->get(FixtureC868::class));
                    },
                    FixtureC870::class => static function (ContainerInterface $container) {
                        return new FixtureC870($container->get(FixtureC869::class));
                    },
                    FixtureC871::class => static function (ContainerInterface $container) {
                        return new FixtureC871($container->get(FixtureC870::class));
                    },
                    FixtureC872::class => static function (ContainerInterface $container) {
                        return new FixtureC872($container->get(FixtureC871::class));
                    },
                    FixtureC873::class => static function (ContainerInterface $container) {
                        return new FixtureC873($container->get(FixtureC872::class));
                    },
                    FixtureC874::class => static function (ContainerInterface $container) {
                        return new FixtureC874($container->get(FixtureC873::class));
                    },
                    FixtureC875::class => static function (ContainerInterface $container) {
                        return new FixtureC875($container->get(FixtureC874::class));
                    },
                    FixtureC876::class => static function (ContainerInterface $container) {
                        return new FixtureC876($container->get(FixtureC875::class));
                    },
                    FixtureC877::class => static function (ContainerInterface $container) {
                        return new FixtureC877($container->get(FixtureC876::class));
                    },
                    FixtureC878::class => static function (ContainerInterface $container) {
                        return new FixtureC878($container->get(FixtureC877::class));
                    },
                    FixtureC879::class => static function (ContainerInterface $container) {
                        return new FixtureC879($container->get(FixtureC878::class));
                    },
                    FixtureC880::class => static function (ContainerInterface $container) {
                        return new FixtureC880($container->get(FixtureC879::class));
                    },
                    FixtureC881::class => static function (ContainerInterface $container) {
                        return new FixtureC881($container->get(FixtureC880::class));
                    },
                    FixtureC882::class => static function (ContainerInterface $container) {
                        return new FixtureC882($container->get(FixtureC881::class));
                    },
                    FixtureC883::class => static function (ContainerInterface $container) {
                        return new FixtureC883($container->get(FixtureC882::class));
                    },
                    FixtureC884::class => static function (ContainerInterface $container) {
                        return new FixtureC884($container->get(FixtureC883::class));
                    },
                    FixtureC885::class => static function (ContainerInterface $container) {
                        return new FixtureC885($container->get(FixtureC884::class));
                    },
                    FixtureC886::class => static function (ContainerInterface $container) {
                        return new FixtureC886($container->get(FixtureC885::class));
                    },
                    FixtureC887::class => static function (ContainerInterface $container) {
                        return new FixtureC887($container->get(FixtureC886::class));
                    },
                    FixtureC888::class => static function (ContainerInterface $container) {
                        return new FixtureC888($container->get(FixtureC887::class));
                    },
                    FixtureC889::class => static function (ContainerInterface $container) {
                        return new FixtureC889($container->get(FixtureC888::class));
                    },
                    FixtureC890::class => static function (ContainerInterface $container) {
                        return new FixtureC890($container->get(FixtureC889::class));
                    },
                    FixtureC891::class => static function (ContainerInterface $container) {
                        return new FixtureC891($container->get(FixtureC890::class));
                    },
                    FixtureC892::class => static function (ContainerInterface $container) {
                        return new FixtureC892($container->get(FixtureC891::class));
                    },
                    FixtureC893::class => static function (ContainerInterface $container) {
                        return new FixtureC893($container->get(FixtureC892::class));
                    },
                    FixtureC894::class => static function (ContainerInterface $container) {
                        return new FixtureC894($container->get(FixtureC893::class));
                    },
                    FixtureC895::class => static function (ContainerInterface $container) {
                        return new FixtureC895($container->get(FixtureC894::class));
                    },
                    FixtureC896::class => static function (ContainerInterface $container) {
                        return new FixtureC896($container->get(FixtureC895::class));
                    },
                    FixtureC897::class => static function (ContainerInterface $container) {
                        return new FixtureC897($container->get(FixtureC896::class));
                    },
                    FixtureC898::class => static function (ContainerInterface $container) {
                        return new FixtureC898($container->get(FixtureC897::class));
                    },
                    FixtureC899::class => static function (ContainerInterface $container) {
                        return new FixtureC899($container->get(FixtureC898::class));
                    },
                    FixtureC900::class => static function (ContainerInterface $container) {
                        return new FixtureC900($container->get(FixtureC899::class));
                    },
                    FixtureC901::class => static function (ContainerInterface $container) {
                        return new FixtureC901($container->get(FixtureC900::class));
                    },
                    FixtureC902::class => static function (ContainerInterface $container) {
                        return new FixtureC902($container->get(FixtureC901::class));
                    },
                    FixtureC903::class => static function (ContainerInterface $container) {
                        return new FixtureC903($container->get(FixtureC902::class));
                    },
                    FixtureC904::class => static function (ContainerInterface $container) {
                        return new FixtureC904($container->get(FixtureC903::class));
                    },
                    FixtureC905::class => static function (ContainerInterface $container) {
                        return new FixtureC905($container->get(FixtureC904::class));
                    },
                    FixtureC906::class => static function (ContainerInterface $container) {
                        return new FixtureC906($container->get(FixtureC905::class));
                    },
                    FixtureC907::class => static function (ContainerInterface $container) {
                        return new FixtureC907($container->get(FixtureC906::class));
                    },
                    FixtureC908::class => static function (ContainerInterface $container) {
                        return new FixtureC908($container->get(FixtureC907::class));
                    },
                    FixtureC909::class => static function (ContainerInterface $container) {
                        return new FixtureC909($container->get(FixtureC908::class));
                    },
                    FixtureC910::class => static function (ContainerInterface $container) {
                        return new FixtureC910($container->get(FixtureC909::class));
                    },
                    FixtureC911::class => static function (ContainerInterface $container) {
                        return new FixtureC911($container->get(FixtureC910::class));
                    },
                    FixtureC912::class => static function (ContainerInterface $container) {
                        return new FixtureC912($container->get(FixtureC911::class));
                    },
                    FixtureC913::class => static function (ContainerInterface $container) {
                        return new FixtureC913($container->get(FixtureC912::class));
                    },
                    FixtureC914::class => static function (ContainerInterface $container) {
                        return new FixtureC914($container->get(FixtureC913::class));
                    },
                    FixtureC915::class => static function (ContainerInterface $container) {
                        return new FixtureC915($container->get(FixtureC914::class));
                    },
                    FixtureC916::class => static function (ContainerInterface $container) {
                        return new FixtureC916($container->get(FixtureC915::class));
                    },
                    FixtureC917::class => static function (ContainerInterface $container) {
                        return new FixtureC917($container->get(FixtureC916::class));
                    },
                    FixtureC918::class => static function (ContainerInterface $container) {
                        return new FixtureC918($container->get(FixtureC917::class));
                    },
                    FixtureC919::class => static function (ContainerInterface $container) {
                        return new FixtureC919($container->get(FixtureC918::class));
                    },
                    FixtureC920::class => static function (ContainerInterface $container) {
                        return new FixtureC920($container->get(FixtureC919::class));
                    },
                    FixtureC921::class => static function (ContainerInterface $container) {
                        return new FixtureC921($container->get(FixtureC920::class));
                    },
                    FixtureC922::class => static function (ContainerInterface $container) {
                        return new FixtureC922($container->get(FixtureC921::class));
                    },
                    FixtureC923::class => static function (ContainerInterface $container) {
                        return new FixtureC923($container->get(FixtureC922::class));
                    },
                    FixtureC924::class => static function (ContainerInterface $container) {
                        return new FixtureC924($container->get(FixtureC923::class));
                    },
                    FixtureC925::class => static function (ContainerInterface $container) {
                        return new FixtureC925($container->get(FixtureC924::class));
                    },
                    FixtureC926::class => static function (ContainerInterface $container) {
                        return new FixtureC926($container->get(FixtureC925::class));
                    },
                    FixtureC927::class => static function (ContainerInterface $container) {
                        return new FixtureC927($container->get(FixtureC926::class));
                    },
                    FixtureC928::class => static function (ContainerInterface $container) {
                        return new FixtureC928($container->get(FixtureC927::class));
                    },
                    FixtureC929::class => static function (ContainerInterface $container) {
                        return new FixtureC929($container->get(FixtureC928::class));
                    },
                    FixtureC930::class => static function (ContainerInterface $container) {
                        return new FixtureC930($container->get(FixtureC929::class));
                    },
                    FixtureC931::class => static function (ContainerInterface $container) {
                        return new FixtureC931($container->get(FixtureC930::class));
                    },
                    FixtureC932::class => static function (ContainerInterface $container) {
                        return new FixtureC932($container->get(FixtureC931::class));
                    },
                    FixtureC933::class => static function (ContainerInterface $container) {
                        return new FixtureC933($container->get(FixtureC932::class));
                    },
                    FixtureC934::class => static function (ContainerInterface $container) {
                        return new FixtureC934($container->get(FixtureC933::class));
                    },
                    FixtureC935::class => static function (ContainerInterface $container) {
                        return new FixtureC935($container->get(FixtureC934::class));
                    },
                    FixtureC936::class => static function (ContainerInterface $container) {
                        return new FixtureC936($container->get(FixtureC935::class));
                    },
                    FixtureC937::class => static function (ContainerInterface $container) {
                        return new FixtureC937($container->get(FixtureC936::class));
                    },
                    FixtureC938::class => static function (ContainerInterface $container) {
                        return new FixtureC938($container->get(FixtureC937::class));
                    },
                    FixtureC939::class => static function (ContainerInterface $container) {
                        return new FixtureC939($container->get(FixtureC938::class));
                    },
                    FixtureC940::class => static function (ContainerInterface $container) {
                        return new FixtureC940($container->get(FixtureC939::class));
                    },
                    FixtureC941::class => static function (ContainerInterface $container) {
                        return new FixtureC941($container->get(FixtureC940::class));
                    },
                    FixtureC942::class => static function (ContainerInterface $container) {
                        return new FixtureC942($container->get(FixtureC941::class));
                    },
                    FixtureC943::class => static function (ContainerInterface $container) {
                        return new FixtureC943($container->get(FixtureC942::class));
                    },
                    FixtureC944::class => static function (ContainerInterface $container) {
                        return new FixtureC944($container->get(FixtureC943::class));
                    },
                    FixtureC945::class => static function (ContainerInterface $container) {
                        return new FixtureC945($container->get(FixtureC944::class));
                    },
                    FixtureC946::class => static function (ContainerInterface $container) {
                        return new FixtureC946($container->get(FixtureC945::class));
                    },
                    FixtureC947::class => static function (ContainerInterface $container) {
                        return new FixtureC947($container->get(FixtureC946::class));
                    },
                    FixtureC948::class => static function (ContainerInterface $container) {
                        return new FixtureC948($container->get(FixtureC947::class));
                    },
                    FixtureC949::class => static function (ContainerInterface $container) {
                        return new FixtureC949($container->get(FixtureC948::class));
                    },
                    FixtureC950::class => static function (ContainerInterface $container) {
                        return new FixtureC950($container->get(FixtureC949::class));
                    },
                    FixtureC951::class => static function (ContainerInterface $container) {
                        return new FixtureC951($container->get(FixtureC950::class));
                    },
                    FixtureC952::class => static function (ContainerInterface $container) {
                        return new FixtureC952($container->get(FixtureC951::class));
                    },
                    FixtureC953::class => static function (ContainerInterface $container) {
                        return new FixtureC953($container->get(FixtureC952::class));
                    },
                    FixtureC954::class => static function (ContainerInterface $container) {
                        return new FixtureC954($container->get(FixtureC953::class));
                    },
                    FixtureC955::class => static function (ContainerInterface $container) {
                        return new FixtureC955($container->get(FixtureC954::class));
                    },
                    FixtureC956::class => static function (ContainerInterface $container) {
                        return new FixtureC956($container->get(FixtureC955::class));
                    },
                    FixtureC957::class => static function (ContainerInterface $container) {
                        return new FixtureC957($container->get(FixtureC956::class));
                    },
                    FixtureC958::class => static function (ContainerInterface $container) {
                        return new FixtureC958($container->get(FixtureC957::class));
                    },
                    FixtureC959::class => static function (ContainerInterface $container) {
                        return new FixtureC959($container->get(FixtureC958::class));
                    },
                    FixtureC960::class => static function (ContainerInterface $container) {
                        return new FixtureC960($container->get(FixtureC959::class));
                    },
                    FixtureC961::class => static function (ContainerInterface $container) {
                        return new FixtureC961($container->get(FixtureC960::class));
                    },
                    FixtureC962::class => static function (ContainerInterface $container) {
                        return new FixtureC962($container->get(FixtureC961::class));
                    },
                    FixtureC963::class => static function (ContainerInterface $container) {
                        return new FixtureC963($container->get(FixtureC962::class));
                    },
                    FixtureC964::class => static function (ContainerInterface $container) {
                        return new FixtureC964($container->get(FixtureC963::class));
                    },
                    FixtureC965::class => static function (ContainerInterface $container) {
                        return new FixtureC965($container->get(FixtureC964::class));
                    },
                    FixtureC966::class => static function (ContainerInterface $container) {
                        return new FixtureC966($container->get(FixtureC965::class));
                    },
                    FixtureC967::class => static function (ContainerInterface $container) {
                        return new FixtureC967($container->get(FixtureC966::class));
                    },
                    FixtureC968::class => static function (ContainerInterface $container) {
                        return new FixtureC968($container->get(FixtureC967::class));
                    },
                    FixtureC969::class => static function (ContainerInterface $container) {
                        return new FixtureC969($container->get(FixtureC968::class));
                    },
                    FixtureC970::class => static function (ContainerInterface $container) {
                        return new FixtureC970($container->get(FixtureC969::class));
                    },
                    FixtureC971::class => static function (ContainerInterface $container) {
                        return new FixtureC971($container->get(FixtureC970::class));
                    },
                    FixtureC972::class => static function (ContainerInterface $container) {
                        return new FixtureC972($container->get(FixtureC971::class));
                    },
                    FixtureC973::class => static function (ContainerInterface $container) {
                        return new FixtureC973($container->get(FixtureC972::class));
                    },
                    FixtureC974::class => static function (ContainerInterface $container) {
                        return new FixtureC974($container->get(FixtureC973::class));
                    },
                    FixtureC975::class => static function (ContainerInterface $container) {
                        return new FixtureC975($container->get(FixtureC974::class));
                    },
                    FixtureC976::class => static function (ContainerInterface $container) {
                        return new FixtureC976($container->get(FixtureC975::class));
                    },
                    FixtureC977::class => static function (ContainerInterface $container) {
                        return new FixtureC977($container->get(FixtureC976::class));
                    },
                    FixtureC978::class => static function (ContainerInterface $container) {
                        return new FixtureC978($container->get(FixtureC977::class));
                    },
                    FixtureC979::class => static function (ContainerInterface $container) {
                        return new FixtureC979($container->get(FixtureC978::class));
                    },
                    FixtureC980::class => static function (ContainerInterface $container) {
                        return new FixtureC980($container->get(FixtureC979::class));
                    },
                    FixtureC981::class => static function (ContainerInterface $container) {
                        return new FixtureC981($container->get(FixtureC980::class));
                    },
                    FixtureC982::class => static function (ContainerInterface $container) {
                        return new FixtureC982($container->get(FixtureC981::class));
                    },
                    FixtureC983::class => static function (ContainerInterface $container) {
                        return new FixtureC983($container->get(FixtureC982::class));
                    },
                    FixtureC984::class => static function (ContainerInterface $container) {
                        return new FixtureC984($container->get(FixtureC983::class));
                    },
                    FixtureC985::class => static function (ContainerInterface $container) {
                        return new FixtureC985($container->get(FixtureC984::class));
                    },
                    FixtureC986::class => static function (ContainerInterface $container) {
                        return new FixtureC986($container->get(FixtureC985::class));
                    },
                    FixtureC987::class => static function (ContainerInterface $container) {
                        return new FixtureC987($container->get(FixtureC986::class));
                    },
                    FixtureC988::class => static function (ContainerInterface $container) {
                        return new FixtureC988($container->get(FixtureC987::class));
                    },
                    FixtureC989::class => static function (ContainerInterface $container) {
                        return new FixtureC989($container->get(FixtureC988::class));
                    },
                    FixtureC990::class => static function (ContainerInterface $container) {
                        return new FixtureC990($container->get(FixtureC989::class));
                    },
                    FixtureC991::class => static function (ContainerInterface $container) {
                        return new FixtureC991($container->get(FixtureC990::class));
                    },
                    FixtureC992::class => static function (ContainerInterface $container) {
                        return new FixtureC992($container->get(FixtureC991::class));
                    },
                    FixtureC993::class => static function (ContainerInterface $container) {
                        return new FixtureC993($container->get(FixtureC992::class));
                    },
                    FixtureC994::class => static function (ContainerInterface $container) {
                        return new FixtureC994($container->get(FixtureC993::class));
                    },
                    FixtureC995::class => static function (ContainerInterface $container) {
                        return new FixtureC995($container->get(FixtureC994::class));
                    },
                    FixtureC996::class => static function (ContainerInterface $container) {
                        return new FixtureC996($container->get(FixtureC995::class));
                    },
                    FixtureC997::class => static function (ContainerInterface $container) {
                        return new FixtureC997($container->get(FixtureC996::class));
                    },
                    FixtureC998::class => static function (ContainerInterface $container) {
                        return new FixtureC998($container->get(FixtureC997::class));
                    },
                    FixtureC999::class => static function (ContainerInterface $container) {
                        return new FixtureC999($container->get(FixtureC998::class));
                    },
                    FixtureC1000::class => static function (ContainerInterface $container) {
                        return new FixtureC1000($container->get(FixtureC999::class));
                    },
                ],
                "shared_by_default" => false,
            ]
        );
    }
}
