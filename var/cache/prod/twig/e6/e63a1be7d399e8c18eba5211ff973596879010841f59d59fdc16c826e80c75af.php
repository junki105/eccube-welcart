<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Block/style.twig */
class __TwigTemplate_0e3a96b86c9f589a820349144a9778f84bc2fece1fecd2394b0aacf9ace98825 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<style>
    /*
Theme Name:         Welcart Basic Custmize Ver2
Theme URI:          http://www.welcart.com/
Author:                 Collne Inc.
Author URI:         http://www.collne.com/
Description:    Welcart Basic is the Welcart dedicated theme.
Version:            1.2.7
License:            GNU General Public License v2 or later
License URI:    http://www.gnu.org/licenses/gpl-2.0.html
Tags:                   responsive-layout, white, two-columns, right-sidebar
*/


/* =Reset
-------------------------------------------------------------- */

ol,
ul {
    list-style: none;
    padding: 0
}

table {
    border-collapse: collapse;
    border-spacing: 0
}

a:focus,
a:active,
a:visited {
    outline: none !important
}

a,
a::before,
a::after {
    -webkit-transition: 0.25s;
    -moz-transition: 0.25s;
    -o-transition: 0.25s;
    transition: 0.25s
}

body:hover {
    -webkit-transition: 0s;
    -moz-transition: 0s;
    -o-transition: 0s
}

.sp_event_auto {
    pointer-events: none
}

.of_hidden {
    overflow: hidden
}

.of_auto {
    overflow: auto
}

.bs_rb_lt {
    box-shadow: 3px 3px 5px rgba(0, 0, 0, .3)
}

.bs_rb {
    box-shadow: 5px 5px 7px rgba(0, 0, 0, .3), 3px 3px 5px rgba(0, 0, 0, .2)
}

.bs_rb_dk {
    box-shadow: 3px 3px 7px 1px rgba(0, 0, 0, .8)
}

.bs_around_lt {
    box-shadow: 0 0 10px 4px rgba(0, 0, 0, .3)
}

.bs_around {
    box-shadow: 0 0 5px 2px rgba(0, 0, 0, .2), 0 0 10px 4px rgba(0, 0, 0, .3)
}

.bs_around_dk {
    box-shadow: 0 0 10px 3px rgba(0, 0, 0, .8), 0 0 20px 0 rgba(0, 0, 0, .2)
}

.ts_rb {
    text-shadow: 3px 3px 6px rgba(0, 0, 0, .3), 3px 3px 6px rgba(0, 0, 0, .3)
}

.ts_rb_dk {
    text-shadow: 4px 4px 6px rgba(0, 0, 0, .8), 3px 3px 6px rgba(0, 0, 0, .8)
}

.ts_around {
    text-shadow: 0 0 20px rgba(0, 0, 0, .3), 0 0 15px rgba(0, 0, 0, .3), 0 0 10px rgba(0, 0, 0, .4)
}

.ts_around_dk {
    text-shadow: 0 0 20px rgba(0, 0, 0, .9), 0 0 15px rgba(0, 0, 0, .9), 0 0 10px rgba(0, 0, 0, .9), 0 0 5px rgba(0, 0, 0, .9)
}

.bd {
    border: 1px solid #333
}

.bdt {
    border-top: 1px solid #333
}

.bdl {
    border-left: 1px solid #333
}

.bdr {
    border-right: 1px solid #333
}

.bdb {
    border-bottom: 1px solid #333
}

.bdtb {
    border-top: 1px solid #333;
    border-bottom: 1px solid #333
}

.bdlr {
    border-left: 1px solid #333;
    border-right: 1px solid #333
}

.bd0 {
    border: none
}

.bdt0 {
    border-top: none
}

.bdl0 {
    border-left: none
}

.bdr0 {
    border-right: none
}

.bdb0 {
    border-bottom: none
}

@media screen and (max-width:767px) {
    .spbd {
        border: 1px solid #333
    }

    .spbdt {
        border-top: 1px solid #333
    }

    .spbdl {
        border-left: 1px solid #333
    }

    .spbdr {
        border-right: 1px solid #333
    }

    .spbdb {
        border-bottom: 1px solid #333
    }

    .spbdtb {
        border-top: 1px solid #333;
        border-bottom: 1px solid #333
    }

    .spbdlr {
        border-left: 1px solid #333;
        border-right: 1px solid #333
    }

    .spbd0 {
        border: none
    }

    .spbdt0 {
        border-top: none
    }

    .spbdb0 {
        border-bottom: none
    }

    .spbdl0 {
        border-left: none
    }

    .spbdr0 {
        border-right: none
    }
}

.bdw2 {
    border-width: 2px
}

.bdw3 {
    border-width: 3px
}

.bdw5 {
    border-width: 5px
}

.bdw10 {
    border-width: 10px
}

.dash {
    border-style: dashed
}

.dot {
    border-style: dotted
}

.bd_black {
    border-color: #000
}

.bd_gray {
    border-color: #ccc
}

.bd_white {
    border-color: #fff
}

.bd_red {
    border-color: #fd3535
}

.bd_dgreen {
    border-color: #306418
}

.hr {
    border: 0;
    margin-top: 20px;
    margin-bottom: 20px;
    width: 100%;
    height: 1px;
    background-color: #333
}

.hr_gray {
    background-color: #ccc
}

.hr_white {
    background-color: #fff
}

.bdrs0 {
    border-radius: 0
}

.bdrs2 {
    border-radius: 2px
}

.bdrs3 {
    border-radius: 3px
}

.bdrs5 {
    border-radius: 5px
}

.bdrs10 {
    border-radius: 10px
}

.bdrs50p {
    border-radius: 50%
}

.w100p {
    width: 100%
}

.w120 {
    width: 120px
}

.w150 {
    width: 150px
}

.h100p {
    height: 100%
}

.h100vh {
    height: 100vh
}

.maxw100 {
    max-width: 100px
}

.maxw130 {
    max-width: 130px
}

.maxw150 {
    max-width: 150px
}

.maxw180 {
    max-width: 180px
}

.maxw200 {
    max-width: 200px
}

.maxw250 {
    max-width: 250px
}

.maxw280 {
    max-width: 280px
}

.maxw290 {
    max-width: 290px
}

.maxw300 {
    max-width: 300px
}

.maxw350 {
    max-width: 350px
}

.maxw400 {
    max-width: 400px
}

.maxw450 {
    max-width: 450px
}

.maxw500 {
    max-width: 500px
}

.maxw600 {
    max-width: 600px
}

.maxw650 {
    max-width: 650px
}

.maxw700 {
    max-width: 700px
}

.maxw725 {
    max-width: 725px
}

.maxw800 {
    max-width: 800px
}

.maxw900 {
    max-width: 900px
}

.maxw990 {
    max-width: 990px
}

.maxw1000 {
    max-width: 1000px
}

.maxw1030 {
    max-width: 1030px
}

.maxw1200 {
    max-width: 1200px
}

.maxw1310 {
    max-width: 1310px
}

.maxw1470 {
    max-width: 1470px
}

.backface {
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden
}

.relative {
    position: relative
}

.absolute {
    position: absolute
}

.bold {
    font-weight: 700
}

.normal {
    font-weight: 400
}

.lh_0 {
    line-height: 0
}

.lh_1 {
    line-height: 1
}

.lh_13 {
    line-height: 1.3
}

.lh_15 {
    line-height: 1.5
}

.lh_18 {
    line-height: 1.8
}

.lh_2 {
    line-height: 2
}

.lh_25 {
    line-height: 2.5
}

.ls_-1 {
    letter-spacing: -1px
}

.ls_-05 {
    letter-spacing: -.5px
}

.ls_0 {
    letter-spacing: 0
}

.ls_1 {
    letter-spacing: 1px
}

.ls_2 {
    letter-spacing: 2px
}

.fl_r {
    float: right
}

.fl_l {
    float: left
}

.fl_none {
    float: none
}

.va_-2 {
    vertical-align: -2px
}

.va_-1 {
    vertical-align: -1px
}

.va_1 {
    vertical-align: 1px
}

.va_2 {
    vertical-align: 2px
}

.va_middle {
    vertical-align: middle
}

.va_top {
    vertical-align: top
}

.va_bottom {
    vertical-align: bottom
}

.inline {
    display: inline
}

.i_block {
    display: inline-block
}

.block {
    display: block
}

.d_table {
    display: table
}

.t_cell {
    display: table-cell
}

.serif {
    font-family: \"?????????\", \"Yu Mincho\", \"????????????\", YuMincho, \"?????????????????? Pro W3\", \"Hiragino Mincho Pro\", \"HiraMinProN-W3\", \"HGS??????E\", \"?????? ?????????\", \"MS PMincho\", serif
}

.sans {
    font-family: 'Noto Sans JP', \"???????????????\", \"Yu Gothic\", \"??????????????????\", \"YuGothic\", 'Hiragino Kaku Gothic ProN', '?????????????????? ProN W3', Meiryo, '????????????', Osaka, 'MS PGothic', arial, helvetica, sans-serif
}

.fs0 {
    font-size: 0
}

.fs10 {
    font-size: 10px
}

.fs11 {
    font-size: 11px
}

.fs12 {
    font-size: 12px
}

.fs13 {
    font-size: 13px
}

.fs14 {
    font-size: 14px
}

.fs15 {
    font-size: 15px
}

.fs16 {
    font-size: 16px
}

.fs18 {
    font-size: 18px
}

.fs19 {
    font-size: 19px
}

.fs20 {
    font-size: 20px
}

.fs22 {
    font-size: 22px
}

.fs24 {
    font-size: 24px
}

.fs25 {
    font-size: 25px
}

.fs26 {
    font-size: 26px
}

.fs27 {
    font-size: 27px
}

.fs28 {
    font-size: 28px
}

.fs30 {
    font-size: 30px
}

.fs32 {
    font-size: 32px
}

.fs34 {
    font-size: 34px
}

.fs36 {
    font-size: 36px
}

.fs45 {
    font-size: 45px
}

.fs48 {
    font-size: 48px
}

.fs54 {
    font-size: 54px
}

@media only screen and (max-width:767px) {
    .fs14 {
        font-size: 12px
    }

    .fs15 {
        font-size: 13px
    }

    .fs16 {
        font-size: 14px
    }

    .fs18 {
        font-size: 16px
    }

    .fs19 {
        font-size: 17px
    }

    .fs20 {
        font-size: 18px
    }

    .fs22 {
        font-size: 20px
    }

    .fs24 {
        font-size: 22px
    }

    .fs25 {
        font-size: 23px
    }

    .fs26 {
        font-size: 24px
    }

    .fs27 {
        font-size: 25px
    }

    .fs28 {
        font-size: 26px
    }

    .fs30 {
        font-size: 28px
    }

    .fs32 {
        font-size: 30px
    }

    .fs34 {
        font-size: 32px
    }

    .fs36 {
        font-size: 34px
    }

    .fs45 {
        font-size: 30px
    }

    .fs48 {
        font-size: 34px
    }

    .fs54 {
        font-size: 36px
    }

    .spfs10 {
        font-size: 10px
    }

    .spfs11 {
        font-size: 11px
    }

    .spfs12 {
        font-size: 12px
    }

    .spfs13 {
        font-size: 13px
    }

    .spfs14 {
        font-size: 14px
    }

    .spfs16 {
        font-size: 16px
    }

    .spfs18 {
        font-size: 18px
    }

    .spfs20 {
        font-size: 20px
    }

    .spfs22 {
        font-size: 22px
    }

    .spfs24 {
        font-size: 24px
    }

    .spfs28 {
        font-size: 28px
    }

    .spfs34 {
        font-size: 34px
    }

    .spfs40 {
        font-size: 40px
    }
}

.white,
.white a {
    color: #FFF
}

.black,
.black a {
    color: #333
}

.l-blue,
.l-blue a {
    color: #34b6d0
}

.red,
.red a {
    color: #fd3535
}

.dred,
.dred a {
    color: #80252B
}

.pink,
.pink a {
    color: #ffb4b0
}

.lgray,
.lgray a {
    color: #eee
}

.gray,
.gray a {
    color: #CCC
}

.dgray,
.dgray a,
a.dgray {
    color: #090909
}

.purple,
.purple a {
    color: #6A5367
}

.lbeige,
.lbeige a {
    color: #FBF8EA
}

.dbeige,
.dbeige a {
    color: #AA995D
}

.orange,
.orange a {
    color: #ff7800
}

.sky,
.sky a {
    color: #1f7ab6
}

.brown,
.brown a {
    color: #db7c0b
}

.dgreen,
.dgreen a {
    color: #306418
}

.bg_c7_bk {
    background: rgba(0, 0, 0, .7)
}

.bg_black {
    background: #333
}

.bg_dkblack {
    background: #000
}

.bg_white {
    background: #FFF
}

.bg_dwhite {
    background: #f3f3f3
}

.bg_lgray {
    background: #eee
}

.bg_gray {
    background: #ccc
}

.bg_dgray {
    background: #666
}

.bg_dkgray {
    background: #444
}

.bg_lblue {
    background: #638eaf
}

.bg_dblue {
    background: #3D74BA
}

.bg_dkblue {
    background: #163b95
}

.bg_lbeige {
    background: #FBF8EA
}

.bg_dbeige {
    background: #AA995D
}

.bg_red {
    background: red
}

.bg_dred {
    background: #80252B
}

.bg_dpink {
    background: #BB476D
}

.bg_yellow {
    background: #FFE5BF
}

.bg_lyellow {
    background: #FFE5BF
}

.bg_green {
    background: #7eaf63
}

.bg_dgreen {
    background: #306418
}

.bg_purple {
    background: #8363af
}

.bg_brown {
    background-color: #231815
}

.bg_orange {
    background: #e7351d
}

.mgauto {
    margin: auto
}

.mglrauto {
    margin-right: auto;
    margin-left: auto
}

.mgright {
    margin-right: 0;
    margin-left: auto
}

.mg0 {
    margin: 0
}

.mgl5 {
    margin-left: 5px
}

.mgl10 {
    margin-left: 10px
}

.mgl15 {
    margin-left: 15px
}

.mgl20 {
    margin-left: 20px
}

.mgl25 {
    margin-left: 25px
}

.mgl30 {
    margin-left: 30px
}

.mgl40 {
    margin-left: 40px
}

.mgl50 {
    margin-left: 50px
}

.mgr5 {
    margin-right: 5px
}

.mgr10 {
    margin-right: 10px
}

.mgr15 {
    margin-right: 15px
}

.mgr20 {
    margin-right: 20px
}

.mgr25 {
    margin-right: 25px
}

.mgr30 {
    margin-right: 30px
}

.mgr40 {
    margin-right: 40px
}

.mgr50 {
    margin-right: 50px
}

.mgt0 {
    margin-top: 0
}

.mgt5 {
    margin-top: 5px
}

.mgt10 {
    margin-top: 10px
}

.mgt15 {
    margin-top: 15px
}

.mgt20 {
    margin-top: 20px
}

.mgt25 {
    margin-top: 25px
}

.mgt30 {
    margin-top: 30px
}

.mgt40 {
    margin-top: 40px
}

.mgt50 {
    margin-top: 50px
}

.mgt60 {
    margin-top: 60px
}

.mgt70 {
    margin-top: 70px
}

.mgt80 {
    margin-top: 80px
}

.mgt90 {
    margin-top: 90px
}

.mgt100 {
    margin-top: 100px
}

.mgt150 {
    margin-top: 150px
}

.mgt350 {
    margin-top: 350px
}

.mgb0 {
    margin-bottom: 0
}

.mgb5 {
    margin-bottom: 5px
}

.mgb10 {
    margin-bottom: 10px
}

.mgb15 {
    margin-bottom: 15px
}

.mgb20 {
    margin-bottom: 20px
}

.mgb25 {
    margin-bottom: 25px
}

.mgb30 {
    margin-bottom: 30px
}

.mgb40 {
    margin-bottom: 40px
}

.mgb50 {
    margin-bottom: 50px
}

.mgb60 {
    margin-bottom: 60px
}

.mgb70 {
    margin-bottom: 70px
}

.mgb80 {
    margin-bottom: 80px
}

.mgb90 {
    margin-bottom: 90px
}

.mgb100 {
    margin-bottom: 100px
}

.mgb150 {
    margin-bottom: 150px
}

.pd0 {
    padding: 0
}

.pd5 {
    padding: 5px
}

.pd10 {
    padding: 10px
}

.pd15 {
    padding: 15px
}

.pd20 {
    padding: 20px
}

.pd25 {
    padding: 25px
}

.pd30 {
    padding: 30px
}

.pd40 {
    padding: 40px
}

.pd50 {
    padding: 50px
}

.pdt0 {
    padding-top: 0
}

.pdt5 {
    padding-top: 5px
}

.pdt10 {
    padding-top: 10px
}

.pdt15 {
    padding-top: 15px
}

.pdt20 {
    padding-top: 20px
}

.pdt25 {
    padding-top: 25px
}

.pdt30 {
    padding-top: 30px
}

.pdt35 {
    padding-top: 35px
}

.pdt40 {
    padding-top: 40px
}

.pdt50 {
    padding-top: 50px
}

.pdt60 {
    padding-top: 60px
}

.pdt70 {
    padding-top: 70px
}

.pdt80 {
    padding-top: 80px
}

.pdt90 {
    padding-top: 90px
}

.pdt100 {
    padding-top: 100px
}

.pdt130 {
    padding-top: 130px
}

.pdt170 {
    padding-top: 170px
}

.pdt270 {
    padding-top: 270px
}

.pdt500 {
    padding-top: 500px
}

.pdt600 {
    padding-top: 600px
}

.pdt800 {
    padding-top: 800px
}

.pdb0 {
    padding-bottom: 0
}

.pdb5 {
    padding-bottom: 5px
}

.pdb10 {
    padding-bottom: 10px
}

.pdb15 {
    padding-bottom: 15px
}

.pdb20 {
    padding-bottom: 20px
}

.pdb25 {
    padding-bottom: 25px
}

.pdb30 {
    padding-bottom: 30px
}

.pdb40 {
    padding-bottom: 40px
}

.pdb50 {
    padding-bottom: 50px
}

.pdb60 {
    padding-bottom: 60px
}

.pdb70 {
    padding-bottom: 70px
}

.pdb80 {
    padding-bottom: 80px
}

.pdb90 {
    padding-bottom: 90px
}

.pdb100 {
    padding-bottom: 100px
}

.pdb150 {
    padding-bottom: 150px
}

.pdb170 {
    padding-bottom: 170px
}

.pdl0 {
    padding-left: 0
}

.pdl2 {
    padding-left: 2px
}

.pdl5 {
    padding-left: 5px
}

.pdl10 {
    padding-left: 10px
}

.pdl15 {
    padding-left: 15px
}

.pdl20 {
    padding-left: 20px
}

.pdl25 {
    padding-left: 25px
}

.pdl30 {
    padding-left: 30px
}

.pdl40 {
    padding-left: 40px
}

.pdl50 {
    padding-left: 50px
}

.pdl70 {
    padding-left: 70px
}

.pdr0 {
    padding-right: 0
}

.pdr2 {
    padding-right: 2px
}

.pdr5 {
    padding-right: 5px
}

.pdr10 {
    padding-right: 10px
}

.pdr15 {
    padding-right: 15px
}

.pdr20 {
    padding-right: 20px
}

.pdr25 {
    padding-right: 25px
}

.pdr30 {
    padding-right: 30px
}

.pdr40 {
    padding-right: 40px
}

.pdr50 {
    padding-right: 50px
}

.sm_gutters {
    margin-right: -5px;
    margin-left: -5px
}

.sm_gutters>[class^=\"col-\"],
.sm_gutters>[class*=\" col-\"] {
    padding-right: 5px;
    padding-left: 5px
}

.no_gutters {
    margin-right: 0;
    margin-left: 0
}

.no_gutters>[class^=\"col-\"],
.no_gutters>[class*=\" col-\"] {
    padding-right: 0;
    padding-left: 0
}

@media screen and (max-width:767px) {
    .sp_event_auto {
        pointer-events: auto
    }

    .sp_fl_r {
        float: right
    }

    .sp_fl_l {
        float: left
    }

    .sp_fl_none {
        float: none
    }

    .sp_static {
        position: static
    }

    .sp_wauto {
        width: auto
    }

    .sp_w100p {
        width: 100%
    }

    .sp_bold {
        font-weight: 700
    }

    .sp_normal {
        font-weight: 400
    }

    .spls_-1 {
        letter-spacing: -1px
    }

    .spls_-05 {
        letter-spacing: -.5px
    }

    .spls_0 {
        letter-spacing: 0
    }

    .spls_1 {
        letter-spacing: 1px
    }

    .sp_left {
        text-align: left
    }

    .sp_center {
        text-align: center
    }

    .sp_iblock {
        display: inline-block
    }

    .sp_block {
        display: block
    }

    .spmgauto {
        margin: auto
    }

    .spmglrauto {
        margin-right: auto;
        margin-left: auto
    }

    .spmgright {
        margin-right: 0;
        margin-left: auto
    }

    .spmgt0 {
        margin-top: 0
    }

    .spmgt5 {
        margin-top: 5px
    }

    .spmgt10 {
        margin-top: 10px
    }

    .spmgt15 {
        margin-top: 15px
    }

    .spmgt20 {
        margin-top: 20px
    }

    .spmgt25 {
        margin-top: 25px
    }

    .spmgt30 {
        margin-top: 30px
    }

    .spmgt40 {
        margin-top: 40px
    }

    .spmgt50 {
        margin-top: 50px
    }

    .spmgt60 {
        margin-top: 60px
    }

    .spmgt70 {
        margin-top: 70px
    }

    .spmgt80 {
        margin-top: 80px
    }

    .spmgt90 {
        margin-top: 90px
    }

    .spmgt100 {
        margin-top: 100px
    }

    .spmgt150 {
        margin-top: 150px
    }

    .spmgt200 {
        margin-top: 200px
    }

    .spmgt250 {
        margin-top: 250px
    }

    .spmgb0 {
        margin-bottom: 0
    }

    .spmgb5 {
        margin-bottom: 5px
    }

    .spmgb10 {
        margin-bottom: 10px
    }

    .spmgb15 {
        margin-bottom: 15px
    }

    .spmgb20 {
        margin-bottom: 20px
    }

    .spmgb25 {
        margin-bottom: 25px
    }

    .spmgb30 {
        margin-bottom: 30px
    }

    .spmgb40 {
        margin-bottom: 40px
    }

    .spmgb50 {
        margin-bottom: 50px
    }

    .spmgl0 {
        margin-left: 0
    }

    .spmgl2 {
        margin-left: 2px
    }

    .spmgl5 {
        margin-left: 5px
    }

    .spmgl10 {
        margin-left: 10px
    }

    .spmgl15 {
        margin-left: 15px
    }

    .spmgl20 {
        margin-left: 20px
    }

    .spmgl25 {
        margin-left: 25px
    }

    .spmgl30 {
        margin-left: 30px
    }

    .spmgl35 {
        margin-left: 35px
    }

    .spmgl40 {
        margin-left: 40px
    }

    .spmgl50 {
        margin-left: 50px
    }

    .spmgr0 {
        margin-right: 0
    }

    .spmgr2 {
        margin-right: 2px
    }

    .spmgr5 {
        margin-right: 5px
    }

    .spmgr10 {
        margin-right: 10px
    }

    .spmgr15 {
        margin-right: 15px
    }

    .spmgr20 {
        margin-right: 20px
    }

    .spmgr25 {
        margin-right: 25px
    }

    .spmgr30 {
        margin-right: 30px
    }

    .spmgr40 {
        margin-right: 40px
    }

    .spmgr50 {
        margin-right: 50px
    }

    .sppd0 {
        padding: 0
    }

    .sppd5 {
        padding: 5px
    }

    .sppd10 {
        padding: 10px
    }

    .sppd15 {
        padding: 15px
    }

    .sppd20 {
        padding: 20px
    }

    .sppd25 {
        padding: 25px
    }

    .sppd30 {
        padding: 30px
    }

    .sppdt0 {
        padding-top: 0
    }

    .sppdt5 {
        padding-top: 5px
    }

    .sppdt10 {
        padding-top: 10px
    }

    .sppdt15 {
        padding-top: 15px
    }

    .sppdt20 {
        padding-top: 20px
    }

    .sppdt25 {
        padding-top: 25px
    }

    .sppdt30 {
        padding-top: 30px
    }

    .sppdt40 {
        padding-top: 40px
    }

    .sppdt50 {
        padding-top: 50px
    }

    .sppdt150 {
        padding-top: 150px
    }

    .sppdt250 {
        padding-top: 250px
    }

    .sppdb0 {
        padding-bottom: 0
    }

    .sppdb5 {
        padding-bottom: 5px
    }

    .sppdb10 {
        padding-bottom: 10px
    }

    .sppdb15 {
        padding-bottom: 15px
    }

    .sppdb20 {
        padding-bottom: 20px
    }

    .sppdb25 {
        padding-bottom: 25px
    }

    .sppdb30 {
        padding-bottom: 30px
    }

    .sppdb40 {
        padding-bottom: 40px
    }

    .sppdb50 {
        padding-bottom: 50px
    }

    .sppdl0 {
        padding-left: 0
    }

    .sppdl5 {
        padding-left: 5px
    }

    .sppdl10 {
        padding-left: 10px
    }

    .sppdl15 {
        padding-left: 15px
    }

    .sppdl20 {
        padding-left: 20px
    }

    .sppdl25 {
        padding-left: 25px
    }

    .sppdl30 {
        padding-left: 30px
    }

    .sppdl40 {
        padding-left: 40px
    }

    .sppdl50 {
        padding-left: 50px
    }

    .sppdr0 {
        padding-right: 0
    }

    .sppdr5 {
        padding-right: 5px
    }

    .sppdr10 {
        padding-right: 10px
    }

    .sppdr15 {
        padding-right: 15px
    }

    .sppdr20 {
        padding-right: 20px
    }

    .sppdr25 {
        padding-right: 25px
    }

    .sppdr30 {
        padding-right: 30px
    }

    .sppdr40 {
        padding-right: 40px
    }

    .sppdr50 {
        padding-right: 50px
    }

    .sp_sm_gutters {
        margin-right: -5px;
        margin-left: -5px
    }

    .sp_sm_gutters>[class^=\"col-\"],
    .sp_sm_gutters>[class*=\" col-\"] {
        padding-right: 5px;
        padding-left: 5px
    }

    .sp_no_gutters {
        margin-right: 0;
        margin-left: 0
    }

    .sp_no_gutters>[class^=\"col-\"],
    .sp_no_gutters>[class*=\" col-\"] {
        padding-right: 0;
        padding-left: 0
    }
}

.visible-ss {
    display: none !important
}

.col-ss-1,
.col-ss-2,
.col-ss-3,
.col-ss-4,
.col-ss-5,
.col-ss-6,
.col-ss-7,
.col-ss-8,
.col-ss-9,
.col-ss-10,
.col-ss-11,
.col-ss-12,
.col-ss-20,
.col-xs-20,
.col-sm-20,
.col-md-20,
.col-lg-20 {
    position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px
}

@media screen and (max-width:543px) {

    .col-ss-1,
    .col-ss-2,
    .col-ss-3,
    .col-ss-4,
    .col-ss-5,
    .col-ss-6,
    .col-ss-7,
    .col-ss-8,
    .col-ss-9,
    .col-ss-10,
    .col-ss-11,
    .col-ss-12 {
        float: left;
        padding-right: 5px;
        padding-left: 5px
    }

    .col-ss-12 {
        width: 100%
    }

    .col-ss-11 {
        width: 91.66666667%
    }

    .col-ss-10 {
        width: 83.33333333%
    }

    .col-ss-9 {
        width: 75%
    }

    .col-ss-8 {
        width: 66.66666667%
    }

    .col-ss-7 {
        width: 58.33333333%
    }

    .col-ss-6 {
        width: 50%
    }

    .col-ss-5 {
        width: 41.66666667%
    }

    .col-ss-4 {
        width: 33.33333333%
    }

    .col-ss-3 {
        width: 25%
    }

    .col-ss-2 {
        width: 16.66666667%
    }

    .col-ss-1 {
        width: 8.33333333%
    }

    .col-ss-pull-12 {
        right: 100%
    }

    .col-ss-pull-11 {
        right: 91.66666667%
    }

    .col-ss-pull-10 {
        right: 83.33333333%
    }

    .col-ss-pull-9 {
        right: 75%
    }

    .col-ss-pull-8 {
        right: 66.66666667%
    }

    .col-ss-pull-7 {
        right: 58.33333333%
    }

    .col-ss-pull-6 {
        right: 50%
    }

    .col-ss-pull-5 {
        right: 41.66666667%
    }

    .col-ss-pull-4 {
        right: 33.33333333%
    }

    .col-ss-pull-3 {
        right: 25%
    }

    .col-ss-pull-2 {
        right: 16.66666667%
    }

    .col-ss-pull-1 {
        right: 8.33333333%
    }

    .col-ss-pull-0 {
        right: auto
    }

    .col-ss-push-12 {
        left: 100%
    }

    .col-ss-push-11 {
        left: 91.66666667%
    }

    .col-ss-push-10 {
        left: 83.33333333%
    }

    .col-ss-push-9 {
        left: 75%
    }

    .col-ss-push-8 {
        left: 66.66666667%
    }

    .col-ss-push-7 {
        left: 58.33333333%
    }

    .col-ss-push-6 {
        left: 50%
    }

    .col-ss-push-5 {
        left: 41.66666667%
    }

    .col-ss-push-4 {
        left: 33.33333333%
    }

    .col-ss-push-3 {
        left: 25%
    }

    .col-ss-push-2 {
        left: 16.66666667%
    }

    .col-ss-push-1 {
        left: 8.33333333%
    }

    .col-ss-push-0 {
        left: auto
    }

    .col-ss-offset-12 {
        margin-left: 100%
    }

    .col-ss-offset-11 {
        margin-left: 91.66666667%
    }

    .col-ss-offset-10 {
        margin-left: 83.33333333%
    }

    .col-ss-offset-9 {
        margin-left: 75%
    }

    .col-ss-offset-8 {
        margin-left: 66.66666667%
    }

    .col-ss-offset-7 {
        margin-left: 58.33333333%
    }

    .col-ss-offset-6 {
        margin-left: 50%
    }

    .col-ss-offset-5 {
        margin-left: 41.66666667%
    }

    .col-ss-offset-4 {
        margin-left: 33.33333333%
    }

    .col-ss-offset-3 {
        margin-left: 25%
    }

    .col-ss-offset-2 {
        margin-left: 16.66666667%
    }

    .col-ss-offset-1 {
        margin-left: 8.33333333%
    }

    .col-ss-offset-0 {
        margin-left: 0
    }

    .hidden-ss {
        display: none !important
    }

    .visible-ss {
        display: block !important
    }

    table.visible-ss {
        display: table !important
    }

    tr.visible-ss {
        display: table-row !important
    }

    th.visible-ss,
    td.visible-ss {
        display: table-cell !important
    }

    .ss_sm_gutters {
        margin-right: -5px;
        margin-left: -5px
    }

    .ss_sm_gutters>[class^=\"col-\"],
    .ss_sm_gutters>[class*=\" col-\"] {
        padding-right: 5px;
        padding-left: 5px
    }

    .ss_no_gutters {
        margin-right: 0;
        margin-left: 0
    }

    .ss_no_gutters>[class^=\"col-\"],
    .ss_no_gutters>[class*=\" col-\"] {
        padding-right: 0;
        padding-left: 0
    }
}

@media screen and (max-width:543px) {
    .col-ss-20 {
        float: left;
        width: 20%
    }
}

.col-xs-20 {
    float: left;
    width: 20%
}

@media (min-width:768px) {
    .col-sm-20 {
        float: left;
        width: 20%
    }
}

@media (min-width:992px) {
    .col-md-20 {
        float: left;
        width: 20%
    }
}

@media (min-width:1200px) {
    .col-lg-20 {
        float: left;
        width: 20%
    }
}

.img-circle {
    border-radius: 50%
}

html,
body,
div,
span,
applet,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
a,
abbr,
acronym,
address,
big,
cite,
code,
del,
dfn,
em,
img,
ins,
kbd,
q,
s,
samp,
small,
strike,
strong,
sub,
sup,
tt,
var,
b,
u,
i,
center,
dl,
dt,
dd,
ol,
ul,
li,
fieldset,
form,
label,
legend,
table,
caption,
tbody,
tfoot,
thead,
tr,
th,
td,
article,
aside,
canvas,
details,
embed,
figure,
figcaption,
footer,
header,
hgroup,
menu,
nav,
output,
ruby,
section,
summary,
time,
mark,
audio,
video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    vertical-align: baseline;
}

body {
    line-height: 1;
}

ol,
ul {
    list-style: none;
}

blockquote,
q {
    quotes: none;
}

blockquote:before,
blockquote:after,
q:before,
q:after {
    content: '';
    content: none;
}

table {
    border-collapse: collapse;
    border-spacing: 0;
}

caption,
th,
td {
    text-align: left;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    clear: both;
    font-weight: bold;
    line-height: 1.42857143;
}

html {
    overflow-y: scroll;
    font-size: 100%;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}

a:focus {
    outline: thin dotted;
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
nav,
section {
    display: block;
}

audio,
canvas,
video {
    display: inline-block;
}

audio:not([controls]) {
    display: none;
}

del {
    color: #333;
}

ins {
    background: #fff9c0;
    text-decoration: none;
}

hr {
    background-color: #ccc;
    border: 0;
    height: 1px;
    margin: 24px;
    margin-bottom: 1.714285714rem;
}

sub,
sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline;
}

sup {
    top: -.5em;
}

sub {
    bottom: -.25em;
}

small {
    font-size: smaller;
}

img {
    border: 0;
    -ms-interpolation-mode: bicubic;
}

/* Clearing floats */
.clear:after,
.wrapper:after,
.format-status .entry-header:after {
    clear: both;
}

.clear:before,
.clear:after,
.wrapper:before,
.wrapper:after,
.format-status .entry-header:before,
.format-status .entry-header:after {
    display: table;
    content: \"\";
}

/* -- clearfix -- */
.cf:before,
.cf:after {
    display: table;
    content: \" \";
}

.cf:after {
    clear: both;
}

.cf {
    *zoom: 1;
}

.no-date {
    text-align: center;
}

/* =Base
-------------------------------------------------------------- */
* {
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -o-box-sizing: border-box;
    -ms-box-sizing: border-box;
    box-sizing: border-box;
}

body {
    color: #262626;
    font-family: Helvetica, Arial, sans-serif;
    font-size: .875em;
    margin: 0;
    padding: 0;
    line-height: 150%;
    background-color: #fff;

    word-wrap: break-word;
}

img {
    margin: 0;
    padding: 0;
    vertical-align: bottom;
    -webkit-transition: .3s ease all;
    -moz-transition: .3s ease all;
    -o-transition: .3s ease all;
    transition: .3s ease all;
}

a {
    color: #808080;
    text-decoration: none;
}

a:hover {
    color: #262626;
    text-decoration: underline;
}

/* -- ul,li -- */
ul,
li {
    margin: 0;
    padding: 0;
    list-style: none;
}

h1 {
    font-size: 3em;
}

h2 {
    font-size: 2.827em;
}

h3 {
    font-size: 1.999em;
}

h4 {
    font-size: 1.414em;
}

small,
.font_small {
    font-size: 0.707em;
}

/* -- p -- */
p {
    margin: 0;
    padding: 0;
}

/* -- em -- */
em {
    color: #999;
    font-size: .8em;
    font-weight: normal;
    font-style: normal;
}

/* -- text -- */
.textleft,
div.textleft {
    text-align: left;
}

.textright,
div.textright {
    text-align: right;
}

.textcenter,
div.textcenter {
    text-align: center;
}

/* -- float -- */
.alignleft,
div.alignleft {
    margin: 0;
    padding: 0 10px 10px 0;
    float: left;
}

.alignright,
div.alignright {
    margin: 0;
    padding: 10px 0 0 10px;
    float: right;
}

.aligncenter,
div.aligncenter {
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.error_message {
    color: #ff0000;
    font-size: 13px;
    font-weight: bold;
    line-height: 20px;
    margin-bottom: .384615em;
}

.wp-caption {
    margin: 10px 0;
    padding-top: 4px;
    background-color: #f3f3f3;
    border: 1px solid #ddd;
    text-align: center;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}

.wp-caption img {
    margin: 0;
    padding: 0;
    border: 0 none;
}

.wp-caption p {
    font-size: 11px;
    margin: 0;
    padding: 0 4px 5px;
    line-height: 17px;
}

/* -- input,select,textarea -- */
input,
select,
textarea {
    font-size: 1em;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
}

select {
    max-width: 100%;
    padding: .5714285em 2.14286em .5714285em .5714285em;
    background: url(images/select-arrow.gif) center right 10px no-repeat;
    border: 1px solid #bbb;
}

textarea {
    width: 100%;
    height: 100px;
    border: 1px solid #bbb;
}

input[type=\"text\"],
input[type=\"password\"],
input[type=\"email\"],
input[type=\"tel\"],
input[type=\"search\"],
input[type=\"url\"] {
    padding: .5714285em;
    border: 1px solid #bbb;
}

input[type=\"button\"],
input[type=\"submit\"],
input[type=\"reset\"] {
    padding: .714288em 1.42857em;
    background-color: #efefef;
    border: none;
    -webkit-transition: .3s ease all;
    -moz-transition: .3s ease all;
    -o-transition: .3s ease all;
    transition: .3s ease all;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}

input[type=\"button\"]:hover,
input[type=\"submit\"]:hover,
input[type=\"reset\"]:hover {
    background-color: #ddd;
    cursor: pointer;
}

input[type=\"checkbox\"] {
    border: 1px solid #ccc;
    -webkit-appearance: checkbox;
    -moz-appearance: checkbox;
    appearance: checkbox;
}

input[type=\"radio\"] {
    border: 1px solid #bbb;
    -webkit-appearance: radio;
    -moz-appearance: radio;
    appearance: radio;
}

input[type=\"file\"] {
    border: none;
}

/* -- Campaign-Tag -- */
.campaign_message {
    font-size: 12px;
    font-weight: bold;
    color: #d3222a;
    margin-top: 5px;
    background-color: #efefef;
    text-align: center;
}

/* - item-single.php - */
#itempage .campaign_message {
    font-size: 14px;
    margin: 0 0 15px;
    background: none;
    letter-spacing: .5px;
}

/* =header
-------------------------------------------------------------- */

header {
    position: relative;
    width: 100%;
    /*margin-bottom: 1.4286em;
*/
}

/* -- .headblock -- */
header .headblock {}

/* -- .site-description -- */
.site-description {
    color: #fff;
    font-size: .85714em;
    font-weight: bold;
    padding: .4em 6.6667em .4em .8333em;
    background: #ff8c00;
    overflow: hidden;
}

/* -- .snav -- */
.snav {
    width: auto;
    float: right;
    padding-top: 1.07143em;
    margin-right: .714286em;
}

.snav i {
    font-size: 1.57143em;
    padding: .454545em;
}

.incart-btn span {
    display: none;
}

.snav ul li i {
    color: #131313;
}

.incart-btn a {
    position: relative;
}

.incart-btn .total-quant {
    display: inline-block;
    font-weight: bold;
    position: absolute;
    top: 0;
    left: 0;
    width: auto;
    min-width: 20px;
    max-width: 30px;
    height: 20px;
    color: #fff;
    background-color: #fba60d;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    text-align: center;
    vertical-align: text-bottom;
}

.snav .membership {
    float: left;
}

.snav .membership a {
    display: block;
}

.snav .membership ul {
    display: none;
    position: absolute;
    width: 100%;
    left: 0;
    padding: 1.4286em .714286em .714286em;
    background-color: #fff;
    border-bottom: 1px solid #ccc;
    z-index: 10;
}

.snav .membership.On ul {
    display: block;
}

.snav .membership li {
    float: none;
    background: none;
    border-bottom: 1px solid #e0e0e0;
    margin: 0 0 1.07143em .714286em;
    padding-bottom: 10px;
}

.snav .membership li:first-child {
    margin-left: 0;
}

.snav .membership li:last-child {
    margin-bottom: 0;
    border: none;
}

/* -- .incart-btn -- */
.incart-btn {
    float: left;
}

.incart-btn a {
    display: block;
    color: #262626;
}

/* -- .search-box -- */
.search-box {
    float: left;
}

.snav .search-box i {
    font-size: 1.42857em;
    padding: .5em;
}

.search-box form {
    display: none;
}

.search-box.On form {
    display: block;
    position: absolute;
    left: 0;
    width: 100%;
    padding: 1.4286em .714286em .714286em;
    background-color: #fff;
}

.search-box div.s-box {
    display: block;
    position: relative;
    width: 100%;
    border: 1px solid #ccc;
    float: right;
    text-align: center;
}

.search-box input[type=\"text\"] {
    width: 100%;
    border: none;
}

.search-box .searchsubmit {
    color: #aaa;
    font-size: 1.14286em;
    font-family: FontAwesome;
    position: absolute;
    right: 0;
    top: 0;
    padding: .3124995em;
    background: none;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
}

.search-box .searchsubmit:hover {
    background: none;
}

/* -- .site-title -- */
h1.site-title,
div.site-title {
    clear: none;
    font-size: 1.785712em;
    font-weight: bold;
    padding: 0 .6em 0 .4em;
    float: left;
    line-height: 1em;
    text-align: center;
}

h1.site-title a,
div.site-title a {
    color: #000;
}

h1.site-title img,
div.site-title img {
    width: 100%;
    max-width: 420px;
    height: auto;
}

header .site-title {

    margin: 0.67em 0;
}

/* -- #site-navigation -- */
header div.nav-menu-open,
header div.header-nav-container {
    display: none;
}

#site-navigation {
    clear: both;
    padding: 0 1.07143em;
}

#site-navigation li a {
    display: block;
    margin-bottom: 1.07143em;
    padding-bottom: .357143em;
    border-bottom: 1px solid #e0e0e0;
}

#site-navigation li li {
    margin-left: 1em;
}

/*???Toggle Menu???*/
#site-navigation label,
#site-navigation input[type=\"checkbox\"].on-off {
    display: none;
}

#site-navigation label {
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    width: auto;
    padding: 0;
    text-align: right;
}

#site-navigation label span {
    display: block;
    padding: .714286em;
}

#site-navigation label span:before {
    content: \"\\f03a\";
    display: block;
    color: #fff;
    font-family: FontAwesome;
    font-size: 1.5714em;
    vertical-align: text-bottom;
}

header #site-navigation input#panel.on-off+div.nav-menu-open,
header #site-navigation input#panel.on-off+div.header-nav-container {
    display: block;
    height: 0;
    overflow: hidden;
}

header #site-navigation input#panel.on-off:checked+div.nav-menu-open,
header #site-navigation input#panel.on-off:checked+div.header-nav-container {
    position: absolute;
    left: 0;
    width: 100%;
    height: auto;
    background-color: #fff;
    z-index: 1;
}

#site-navigation ul {
    padding: 1.4286em .714286em .714286em;
}

#site-navigation ul ul {
    padding: 0;
}


/* =secondary
-------------------------------------------------------------- */
#secondary {
    padding: 2.14289em 0;
    border-top: 5px solid #eee;
}

#secondary h3 {
    margin-bottom: 1.07143em;
    padding-bottom: .357143em;
    border-bottom: 3px solid #eee;
}

#secondary .widget_title>img {
    width: 20px;
    height: 20px;
    margin-right: .714286em;
    vertical-align: top;
}

#secondary section {
    margin-bottom: 2.14286em;
    padding: 0 .714286em;
}

#secondary .columnleft section:last-child,
#secondary .columncenter section:last-child {
    margin-bottom: 2.14286em;
}

#secondary section:last-child {
    margin-bottom: 0;
}

/*---- widget_welcart_bestseller ----*/
.widget_welcart_bestseller ul {
    padding: 0 .714286em;
}

.widget_welcart_bestseller li {
    margin-bottom: .714286em;
    padding-bottom: .714286em;
    border-bottom: 1px solid #e0e0e0;
    overflow: hidden;
}

.widget_welcart_bestseller li a {
    display: inline-block;
    padding-bottom: .357143em;
}

.widget_welcart_bestseller .itemimg {
    width: 25% !important;
    float: right;
    text-align: center;
}

.widget_welcart_bestseller .itemimg img {
    width: 100%;
    height: auto;
}

.widget_welcart_bestseller .itemname {
    width: 70%;
    text-align: left;
}

.widget_welcart_bestseller .itemprice {
    font-weight: bold;
    width: 70%;
    text-align: right;
}

.widget_welcart_bestseller .itemsoldout {
    color: #e00;
    font-size: .85714em;
    font-weight: bold;
    width: 70%;
    text-align: right;
}

/*---- widget_welcart_featured ----*/
.widget_welcart_featured ul {
    padding: 0 .714286em !important;
}

.widget_welcart_featured .featured_list {
    margin-bottom: .714286em;
    padding-bottom: .714286em;
    border-bottom: 1px solid #e0e0e0;
    overflow: hidden;
}

.widget_welcart_featured .thumimg {
    width: 25% !important;
    float: right;
    text-align: center;
}

.widget_welcart_featured .thumimg img {
    width: 100%;
    height: auto;
}

.widget_welcart_featured .thumtitle {
    width: 70%;
    text-align: left;
}

/*---- widget_welcart_category ----*/
.widget_welcart_category ul {
    padding: 0 .714286em;
}

.widget_welcart_category li {
    padding-bottom: .714286em;
    line-height: 200%;
}

.widget_welcart_category li:last-child {
    padding-bottom: 0;
}

.widget_welcart_category li ul {
    margin-left: 1.07143em;
    padding: 0;
}

.widget_welcart_category li li {
    padding: 0;
}

.widget_welcart_category li li a {
    display: block;
    padding: 0;
}

.widget_welcart_category li li a:before {
    display: none;
}

.widget_welcart_category ul ul ul {
    display: block !important;
}

/*---- widget_welcart_calendar ----*/

.widget_welcart_calendar table {
    width: 46%;
    margin: 0 2% 2%;
    border: 1px solid #ccc;
    border-collapse: collapse;
    float: left;
}

.widget_welcart_calendar th {
    color: #fff;
    background-color: #131313;
    border: 1px solid #ccc;
    text-align: center;
}

.widget_welcart_calendar td {
    border: 1px solid #ccc;
    text-align: center;
}

.widget_welcart_calendar .businessday {
    color: #262626;
    background-color: #fff0d1;
}

/*---- welcart_blog_calendar ----*/
.welcart_blog_calendar table {
    width: 100%;
    border: 1px solid #ccc;
    border-collapse: collapse;
}

.welcart_blog_calendar th {
    color: #fff;
    background-color: #131313;
    border: 1px solid #ccc;
    text-align: center;
}

.welcart_blog_calendar td {
    border: 1px solid #ccc;
    text-align: center;
}

/*---- widget_welcart_search ----*/
.widget_welcart_search .searchtext {
    width: 75%;
    padding: .5714285em;
    border: 1px solid #ccc;
    border-right: none;
}

.widget_welcart_search #searchsubmit {
    color: #fff;
    width: 25%;
    padding: .5em 0;
    background-color: #ff8c00;
    border: none;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
    -webkit-transition: .3s ease all;
    -moz-transition: .3s ease all;
    -o-transition: .3s ease all;
    transition: .3s ease all;
}

.widget_welcart_search #searchsubmit:hover {
    cursor: pointer;
    background-color: #ff8c00;
}

.widget_welcart_search div {
    margin-top: .714286em;
    background-color: #efefef;
    text-align: center;
}

.widget_welcart_search div a {
    display: block;
    color: #262626;
    line-height: 200%;
    -webkit-transition: .3s ease all;
    -moz-transition: .3s ease all;
    -o-transition: .3s ease all;
    transition: .3s ease all;
}

.widget_welcart_search div a:hover {
    background-color: #ddd;
    text-decoration: none;
}

/*---- widget_welcart_login ----*/
.widget_welcart_login .loginbox {
    padding: 0 .714286em;
}

.widget_welcart_login .loginbox div {
    font-weight: bold;
}

.widget_welcart_login label {
    line-height: 180%;
}

.widget_welcart_login input.loginmail,
.widget_welcart_login input.loginpass {
    width: 100%;
    margin-bottom: .357143em;
    padding: .357143em;
    border: 1px solid #ccc;
}

.widget_welcart_login input#member_loginw,
.widget_welcart_login input#member_login {
    font-size: 14px;
    color: #fff;
    width: 60%;
    margin-bottom: .357143em;
    padding: .714286em 1.42857em;
    background-color: #ff8c00;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}

.widget_welcart_login input#member_loginw:hover,
.widget_welcart_login input#member_login:hover {
    background-color: #ff8c00;
}

.widget_welcart_login .loginbox a.usces_logout_a,
.widget_welcart_login .loginbox a.login_widget_mem_info_a {
    display: inline-block;
    margin: .357143em 0 0 1.071428em;
}

.widget_welcart_login .loginbox .submit {
    padding: 0;
}

.widget_welcart_login .liwpp_area {
    padding: .714286em .714286em 0;
}

/*---- usces_recent_entries + widget_welcart_page + widget_welcart_post ----*/
.usces_recent_entries ul,
.widget_welcart_page ul,
.widget_welcart_post ul {
    padding: 0 .714286em;
}

.usces_recent_entries li a,
.widget_welcart_page li a,
.widget_welcart_post li a {
    display: inline-block;
    padding-bottom: .357143em;
}

.usces_recent_entries li,
.widget_welcart_page li,
.widget_welcart_post li {
    border-bottom: 1px solid #e0e0e0;
    margin-bottom: .714286em;
    padding-bottom: .357143em;
}

.usces_recent_entries li li,
.widget_welcart_page li li {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}

/*---- other widgets ----*/
.widget_archive ul,
.widget_categories ul,
.widget_meta ul,
.widget_recent_entries ul,
.widget_recent_comments ul {
    padding: 0 .714286em;
}

.widget_archive li a,
.widget_categories li a,
.widget_meta li a,
.widget_recent_entries li a,
.widget_recent_comments li a {
    display: inline-block;
    padding-bottom: .357143em;
}

.widget_nav_menu ul,
.widget_pages ul {
    padding: 0 .714286em;
}

.widget_nav_menu ul li,
.widget_pages li {
    margin-bottom: .357143em;
}

.widget_nav_menu ul li a,
.widget_pages li a {
    display: inline-block;
    padding-bottom: .357143em;
}

.widget_categories label,
.widget_archive label {
    display: block;
    margin-bottom: .5em;
}

/*???calendar???*/
.widget_calendar table {
    width: 100%;
    margin: 0 2% .714286em;
    border: 1px solid #ccc;
    border-collapse: collapse;
}

.widget_calendar th {
    color: #fff;
    background-color: #131313;
    border: 1px solid #ccc;
    text-align: center;
}

.widget_calendar td {
    border: 1px solid #ccc;
    text-align: center;
}

/*???search???*/
.widget_search div {
    position: relative;
    border: 1px solid #ccc;
}

.widget_search .search-text {
    width: 100%;
    padding: .357143em;
    border: none;
}

.widget_search .searchsubmit {
    font-family: FontAwesome;
    ;
    color: #131313;
    padding: .357143em;
    background: none;
    position: absolute;
    right: 0;
    top: 0;
}

.widget_search .searchsubmit:hover {
    background: none;
    cursor: pointer;
}

/*---- item-list ----*/
.widget_basic_item_list .item-list {
    letter-spacing: -.5em;
}

.widget_basic_item_list article {
    display: inline-block;
    padding: .714286em;
    width: 50%;
    letter-spacing: normal;
    vertical-align: text-top;
}

.widget_basic_item_list a {
    display: block;
}

.widget_basic_item_list .itemimg {
    margin-bottom: .357143em;
    text-align: center;
}

.widget_basic_item_list .itemprice {
    font-weight: bold;
    text-align: right;
}

/* =toTop
-------------------------------------------------------------- */

#toTop {
    position: fixed;
    right: 50px;
    bottom: 30%;
}

#toTop a {
    display: block;
}

#toTop i {
    color: #aaa;
    font-size: 3.214289em;
    -webkit-transition: .3s ease all;
    -moz-transition: .3s ease all;
    -o-transition: .3s ease all;
    transition: .3s ease all;
}

#toTop i:hover {
    color: #131313;
}


/* =footer
-------------------------------------------------------------- */

footer {
    color: #fff;
    padding: .714286em 1.07143em;
    background-color: #131313;
}

/* -- a -- */
footer a {
    color: #fff;
}

footer a:hover {
    color: #aaa;
    text-decoration: none;
}

/* -- nav -- */
footer nav {
    padding: 1.071428em 0;
}

footer nav li {
    margin-bottom: 1.071428em;
}

footer nav li:last-child {
    margin-bottom: 0;
}

footer nav li:nth-of-type(6n) {
    clear: both;
}

footer nav ul ul {
    margin: .5714285em 0 0 1.071428em;
}

footer nav li li {
    width: 100%;
    margin-bottom: 0;
    float: none;
}

footer nav li li:before {
    display: none;
}

footer nav li li {
    width: 100%;
    margin-bottom: 10px;
    padding-right: 0;
    float: none;
}

footer nav li li:before {
    display: none;
}

footer nav li li:nth-of-type(6n) {
    clear: none;
}

footer nav li li li:before {
    content: \"\\f105\";
    display: inline-block;
    color: #fff;
    font-family: FontAwesome;
    font-size: 10px;
    font-weight: bold;
    margin-right: .8em;
}

/* -- .copyright -- */
.copyright {
    padding: 1.071428em 0;
    text-align: center;
}


/* =contetns
-------------------------------------------------------------- */

/* -- content -- */
#content {
    padding: 0 .714286em 2.142856em;
}

#content header {
    position: inherit;
    margin: 0 0 1.42857em;
    padding: 0;
    border: none;
}

#content .page-title,
#content .entry-title {
    font-size: 1.142857em;
    margin-bottom: 1.25em;
    line-height: 1.25em;
}


/* =front-page.php
-------------------------------------------------------------- */

/* -- main-image -- */
.main-image {
    padding: 0 .714286em 0;
}

.main-image img {
    width: 100%;
    max-width: 1200px;
    height: auto;
    margin: auto;
}

/* -- .front-il -- */
.front-il {
    letter-spacing: -.5em;
}

.blog #content .front-il article {
    margin-bottom: 0;
    padding-bottom: 0;
    border: none;
}

.front-il article {
    display: inline-block;
    width: 46%;
    margin-right: 8%;
    padding: 1.42857em 0 0;
    letter-spacing: normal;
    vertical-align: text-top;
}

.front-il article:nth-of-type(even) {
    margin-right: 0;
}

.front-il .itemimg {
    margin-bottom: .357143em;
    text-align: center;
}

.front-il .itemimg a {
    display: block;
}

.front-il .itemimg img {
    width: 100%;
    height: auto;
}

.front-il .itemname {
    max-height: 63px;
    overflow: hidden;
}

.front-il .itemname span {
    font-size: .9em;
}

.front-il .itemprice {
    font-weight: bold;
    height: 22px;
    text-align: right;
}

.front-il .itemsoldout {
    color: #e00;
    font-size: .85714em;
    font-weight: bold;
    height: 22px;
    text-align: right;
}

.front-il .no-date {
    margin-top: 1.42857em;
    letter-spacing: normal;
}

/* -- show-on-front -- */

/* - blog - */
.blog #content article {
    margin-bottom: 1.42857em;
    padding-bottom: 1.42857em;
    border-bottom: 1px solid #eaeaea;
}

.blog #content .entry-title {
    margin-bottom: 20px;
}

.blog #content .entry-meta {
    margin-bottom: 20px;
}

.blog #content .entry-content {
    margin-bottom: 0;
}

.blog #content .entry-content .loopimg {
    margin-bottom: 20px;
}


/* =archive.php
-------------------------------------------------------------- */

/* -- .cat-il.type-grid -- */
.cat-il.type-grid {
    margin-bottom: 1.42857em;
    letter-spacing: -.5em;
}

.cat-il.type-grid article {
    display: inline-block;
    width: 46%;
    margin-right: 8%;
    padding: 1.42857em 0 0;
    letter-spacing: normal;
    vertical-align: text-top;
}

.cat-il.type-grid article:nth-of-type(even) {
    margin-right: 0;
}

.cat-il.type-grid .itemimg {
    margin-bottom: .357143em;
    text-align: center;
}

.cat-il.type-grid .itemimg a {
    display: block;
}

.cat-il.type-grid .itemimg img {
    width: 100%;
    height: auto;
}

.cat-il.type-grid .itemname {
    height: 63px;
    overflow: hidden;
}

.cat-il.type-grid .itemname span {
    font-size: .9em;
}

.cat-il.type-grid .itemprice {
    font-weight: bold;
    height: 22px;
    text-align: right;
}

.cat-il.type-grid .itemsoldout {
    color: #e00;
    font-size: .85714em;
    font-weight: bold;
    height: 22px;
    text-align: right;
}

/* -- .post-li -- */
.post-li article {
    margin-bottom: 1.071428em;
    padding-bottom: 1.071428em;
    border-bottom: 1px solid #e0e0e0;
    overflow: hidden;
}

.post-li .post-title {
    font-size: 1.142857em;
    margin-bottom: .625em;
}

.post-li time {
    display: block;
    margin-bottom: .714286em;
}

.post-li .loopimg {
    width: 20%;
    float: left;
    margin-right: 5%;
}

.post-li .loopexp {
    width: 75%;
    float: left;
}

.post-li img {
    width: 100%;
    height: auto;
}

/* -- pagination -- */
.pagination_wrapper {
    position: relative;
    clear: both;
    overflow: hidden;
}

.pagination_wrapper ul {
    position: relative;
    left: 50%;
    float: left;
    list-style: none;
}

.pagination_wrapper li {
    position: relative;
    left: -50%;
    margin-right: .357143em;
    float: left;
}

.pagination_wrapper li .current {
    display: block;
    color: #fff;
    padding: .357143em .714286em;
    background-color: #131313;
    border: 1px solid #131313;
    text-decoration: none;
}

.pagination_wrapper li a {
    display: block;
    color: #262626;
    padding: .357143em .714286em;
    background-color: #eee;
    border: 1px solid #ddd;
}


/* = .entry-content,item-description
-------------------------------------------------------------- */
/* -- p -- */
.entry-content p,
.item-description p {
    margin-bottom: 1.42857em;
    line-height: 1.42857em;
}

/* -- table -- */
.entry-content table,
.item-description table {
    width: 100%;
    margin-bottom: .714286em;
    border: 1px solid #ccc;
    border-collapse: collapse;
}

.entry-content th,
.item-description th {
    padding: .714286em;
    background-color: #ddd;
    border: 1px solid #ccc;
}

.entry-content td,
.item-description td {
    padding: .714286em;
    border: 1px solid #ccc;
}

/* -- ul + ol -- */
.entry-content ul,
.entry-content ol,
.item-description ul,
.item-description ol {
    margin: 0 0 1.42857em 1.42857em;
}

.entry-content ul li,
.item-description ul li {
    list-style: disc;
    line-height: 180%;
}

.entry-content ol li,
.item-description ol li {
    list-style: decimal;
    line-height: 180%;
}

/* -- h1,h2,h3,h4,h5 -- */
.entry-content h1,
.item-description h1 {
    font-size: 1.142857em;
    margin-bottom: 1.07143em;
}

.entry-content h2,
.item-description h2 {
    font-size: 1.142857em;
    border-bottom: 3px solid #eee;
    margin-bottom: 1.25em;
    padding-bottom: .312502em;
    line-height: 1.25em;
}

.entry-content h3,
.item-description h3 {
    margin-bottom: 1.071428em;
    padding-left: .357143em;
    border-left: 5px solid #262626;
    line-height: 140%;
}

.entry-content h4,
.item-description h4 {
    margin-bottom: 1.071428em;
    padding: .357143em;
    background-color: #efefef;
}

.entry-content h5,
.item-description h5 {
    margin-bottom: 1.071428em;
}

.entry-content h6,
.item-description h6 {
    color: #777;
    margin-bottom: 1.071428em;
}

/* -- img -- */
.widget img,
.entry-content img,
.item-description img {
    max-width: 100%;
    height: auto;
}

/* -- iframe -- */
.entry-content iframe,
.item-description iframe {
    max-width: 100%;
}

/* -- input select textarea -- */
.entry-content input[type=\"file\"],
.item-description input[type=\"file\"] {
    border: none;
}

.entry-content input[type=\"submit\"],
.item-description input[type=\"submit\"] {
    color: #fff;
    background-color: #ff8c00;
}

.entry-content input[type=\"submit\"]:hover,
.item-description input[type=\"submit\"]:hover {
    background-color: #ff8c00;
}


/* =single.php
-------------------------------------------------------------- */

.entry-content {
    margin-bottom: 1.42857em;
}

.entry-meta {
    margin-bottom: 1.42857em;
    padding-left: 1.071428em;
    border-left: 3px solid #cccaca;
}

.entry-meta span {
    display: block;
}

.entry-meta .date:before {
    display: inline-block;
    content: \"\\f1fa\";
    color: #262626;
    font-family: FontAwesome;
    font-size: 11px;
    margin-right: .7em;
}

.entry-meta .cat:before {
    content: \"\\f0f6\";
    display: inline-block;
    color: #262626;
    font-family: FontAwesome;
    font-size: 11px;
    margin-right: .7em;
}

.entry-meta .tag:before {
    content: \"\\f02b\";
    display: inline-block;
    color: #262626;
    font-family: FontAwesome;
    font-size: 11px;
    margin-right: .7em;
}

.entry-meta .author:before {
    content: \"\\f007 \";
    display: inline-block;
    color: #262626;
    font-family: FontAwesome;
    font-size: 11px;
    margin-right: .7em;
}


/* =inquiry.php
-------------------------------------------------------------- */

.inqbox .inquiry_table {
    width: 100%
}

.inqbox .inquiry_table tr {
    display: block;
    padding: 0 .625em 1.25em;
    margin-bottom: 1.25em;
    border-bottom: 2px solid #efefef;
}

.inqbox .inquiry_table th {
    display: block;
    width: auto;
    background: none;
    border: none;
}

.inqbox .inquiry_table td {
    display: block;
}

.inqbox .inquiry_table td input {
    width: 70%;
}

.inqbox .send {
    padding-top: .714286em;
    text-align: center;
}

.inqbox .send input {
    color: #fff;
    background-color: #ff8c00;
}

.inqbox .send input:hover {
    background-color: #ff8c00;
}


/* =comments.php
-------------------------------------------------------------- */

.comments-area {
    padding-top: .714286em;
    border-top: 1px solid #e0e0e0;
}

.comment-area h2 {
    font-size: 1em;
    margin: .714286em 0;
}

.comment-area h2:before {
    content: \"\\f086\";
    display: inline-block;
    color: #999;
    font-family: FontAwesome;
    font-size: 12px;
    margin-right: .7em;
}

.comment-area li {
    clear: both;
    margin-bottom: .714286em;
    padding-bottom: .714286em;
    overflow: hidden;
    border-bottom: 1px solid #ccc;
}

.comment-area li:last-child {
    margin-bottom: 0;
}

.comment-area li .comment-author {
    margin-right: 1.42857em;
    float: left;
}

.comment-area li img {
    display: block;
    margin: 0 auto .357143em;
}

.comment-area li .reply {
    clear: both;
    float: none;
    text-align: right;
}

.comment-area #respond {
    padding-top: .714286em;
}

#respond label {
    display: block;
    font-weight: bold;
}

#respond label .required {
    color: #ff3366;
    font-weight: bold;
}

#respond p {
    margin-bottom: .714286em;
}

#respond .form-submit {
    padding-bottom: 0;
}


/* =search.php
-------------------------------------------------------------- */

/* -- .search-li -- */
.search-li {
    margin-bottom: 1.42857em;
    letter-spacing: -.5em;
}

.search-li .title {
    letter-spacing: normal;
}

.search-li article {
    display: inline-block;
    width: 46%;
    margin-right: 8%;
    padding: 1.4286em 0 0;
    border: none;
    letter-spacing: normal;
    vertical-align: text-top;
}

.search-li .itemimg {
    margin-bottom: .357143em;
    text-align: center;
}

.search-li .itemimg a {
    display: block;
}

.search-li .itemimg img {
    width: 100%;
    height: auto;
}

.search-li .itemname {
    height: 63px;
    overflow: hidden;
}

.search-li .itemname span {
    font-size: .9em;
}

.search-li .itemprice {
    font-weight: bold;
    height: 22px;
    text-align: right;
}

.search-li .itemsoldout {
    color: #e00;
    font-size: .85714em;
    font-weight: bold;
    height: 22px;
    text-align: right;
}

.search-li article:nth-of-type(even) {
    margin-right: 0;
}


/* =404.php
-------------------------------------------------------------- */

.error-404 .page-content {
    padding: 3em 0;
    text-align: center;
}

.error-404 .page-content p {
    font-weight: bold;
}

.error-404 .page-content div {
    margin-top: .714286em;
}

.error-404 input[type=\"submit\"] {
    color: #131313;
    font-family: FontAwesome;
    font-size: 20px;
    margin-left: 0.25em;
    padding: 0.25em 0;
    background: none;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
}


/**
 * 16.1 Mobile Large 620px
 */
@media screen and (min-width: 38.75em) {


    /* =Base
    -------------------------------------------------------------- */

    textarea {
        width: 60%;
    }

    /* -- Campaign-Tag -- */
    #itempage .campaign_message {
        text-align: left;
    }


    /* =secondary
    -------------------------------------------------------------- */

    /*???welcart_bestseller???*/
    .widget_welcart_bestseller ul {
        overflow: hidden;
    }

    .widget_welcart_bestseller li {
        width: 46%;
        margin-right: 8%;
        padding-top: .714286em;
        float: left;
    }

    .widget_welcart_bestseller li:nth-of-type(even) {
        margin-right: 0;
    }

    .widget_welcart_bestseller li:nth-of-type(odd) {
        clear: both;
    }

    /*???welcart_featured???*/
    .widget_welcart_featured ul {
        overflow: hidden;
    }

    .widget_welcart_featured .featured_list {
        width: 46%;
        margin-right: 8%;
        padding-top: .714286em;
        float: left;
    }

    .widget_welcart_featured .featured_list:nth-of-type(even) {
        margin-right: 0;
    }

    .widget_welcart_featured li:nth-of-type(odd) {
        clear: both;
    }

    .widget_welcart_category ul,
    .widget_welcart_search ul,
    .widget_search form,
    .widget_welcart_login ul {
        width: 60%;
    }

    .widget_welcart_category ul ul {
        width: 100%;
    }

    /*---- item-list ----*/
    .widget_basic_item_list article {
        width: 25%;
    }


    /* =front-page.php
    -------------------------------------------------------------- */

    /* -- .front-il -- */
    .front-il {
        margin-bottom: 2.142856em;
    }

    .front-il article {
        width: 22%;
        margin-right: 4%;
    }

    .front-il article:nth-of-type(even) {
        margin-right: 4%;
    }

    .front-il article:nth-of-type(4n) {
        margin-right: 0;
    }


    /* =archive.php
    -------------------------------------------------------------- */

    /* -- .cat-il.type-grid -- */
    .cat-il.type-grid {
        margin-bottom: 1.42857em;
    }

    .cat-il.type-grid article {
        width: 22%;
        margin-right: 4%;
    }

    .cat-il.type-grid article:nth-of-type(even) {
        margin-right: 4%;
    }

    .cat-il.type-grid article:nth-of-type(4n) {
        margin-right: 0;
    }


    /* =contetns
    -------------------------------------------------------------- */

    #content .page-title,
    #content .entry-title {
        font-size: 1.285712em;
        margin-bottom: 2.222224em;
        line-height: 1.285712em;
    }


    /* =search.php
    -------------------------------------------------------------- */

    /* -- .search-li -- */
    .search-li article {
        width: 22%;
        margin-right: 4%;
    }

    .search-li article:nth-of-type(even) {
        margin-right: 4%;
    }

    .search-li article:nth-of-type(4n) {
        margin-right: 0;
    }


}


/**
 * 16.2 Tablet Small 740px
 */
@media screen and (min-width: 46.25em) {


    /* =inquiry.php
    -------------------------------------------------------------- */

    .inqbox .inquiry_table {
        margin-bottom: 1.071428em;
    }

    .inqbox .inquiry_table tr {
        display: table-row;
        margin-bottom: 0;
        padding: 0;
        border: none;
    }

    .inqbox .inquiry_table th {
        display: table-cell;
        width: 25%;
        padding: .357143em 1.071428em;
        background-color: #f6f6f6;
        border: 1px solid #ccc;
        vertical-align: middle;
    }

    .inqbox .inquiry_table td {
        color: #6e6e6e;
        display: table-cell;
        padding: .357143em 1.071428em;
        border: 1px solid #ccc;
    }

    .inqbox .send {
        text-align: center;
    }

    .inqbox .send input {
        color: #fff;
        background-color: #ff8c00;
    }

    .inqbox .send input:hover {
        background-color: #ff8c00;
    }


}


/**
 * 16.3 Tablet Large 880px
 */
@media screen and (min-width: 55em) {

    /* =secondary
    -------------------------------------------------------------- */
    /*---- item-list ----*/
    .widget_basic_item_list article {
        width: 20%;
    }

    /* =front-page.php
    -------------------------------------------------------------- */

    /* -- .front-il -- */
    .front-il article {
        width: 16.8%;
        margin-right: 4%;
        padding: 2.85712em 0 0;
    }

    .front-il article:nth-of-type(4n) {
        margin-right: 4%;
    }

    .front-il article:nth-of-type(5n) {
        margin-right: 0;
    }


}


/**
 * 16.4 Desktop Small 1000px
 */
@media screen and (min-width: 62.5em) {


    /* =Base
    -------------------------------------------------------------- */

    /* -- input,select,textarea -- */
    input[type=\"button\"],
    input[type=\"submit\"],
    input[type=\"reset\"] {
        padding: 1.071428em 2.142856em;
    }

    a img {
        box-shadow: #fff 0 0 0;
    }

    a img:hover {
        opacity: .6;
    }


    /* =header
    -------------------------------------------------------------- */

    header {
        border-bottom: none;
    }

    header .inner {
        width: 1000px;
        margin: 0 auto;
        /*padding-bottom: 1.071428em;*/
    }

    /* -- .site-description -- */
    .site-description {
        color: #ff8c00;
        font-weight: bold;
        width: 75%;
        height: auto;
        min-height: auto;
        padding: 1.25em 0 0 .5em;
        background: none;
        float: left;
        line-height: 130%;
    }

    /* -- .site-title -- */
    h1.site-title,
    div.site-title {
        font-size: 2.857142em;
        width: 65%;
        margin: 0;
        padding: .5em 0;
        float: left;
        text-align: left;
    }

    h1.site-title a,
    div.site-title a {
        font-weight: bold;
    }

    /* -- .snav -- */
    .snav {
        clear: right;
        margin-right: 0;
        padding-top: 1.071428em;
        float: none;
    }

    /* -- .search-box -- */
    .search-box {
        position: inherit;
        padding: 0 0 10px;
        float: right;
    }

    .snav .search-box i {
        display: none;
    }

    .search-box form {
        display: block;
    }

    .search-box div.s-box {
        width: auto;
    }

    .search-box input[type=\"text\"] {
        width: auto;
        padding: .357143em;
        background-color: #fff;
    }

    .search-box .searchsubmit {
        position: inherit;
        color: #161616;
        padding: .357143em;
    }

    .snav .membership {
        padding: .357143em 0;
        float: right;
        overflow: hidden;
    }

    .snav .membership i {
        display: none;
    }

    .snav .membership ul {
        display: block;
        position: relative;
        margin: 0;
        padding: 0;
        border: none;
        background: none;
    }

    .snav .membership li {
        float: left;
        margin: 0;
        padding: 0;
        border: none;
        line-height: 100%;
    }

    .snav .membership li:first-child {
        color: #565656;
        font-weight: bold;
    }

    .snav .membership li:first-child,
    .snav .membership li a {
        font-size: 12px;
        border: none;
        margin: 0;
        padding: 0 .833334em;
        border-right: 1px solid #aaa;
    }

    .snav .membership li:last-child a {
        border-right: none;
    }

    /* -- .incart-btn -- */
    .incart-btn {
        min-width: 160px;
        margin-top: .714286em;
        float: right;
    }

    .incart-btn a {
        background-color: #ff8c00;
        padding: 6px .714286em;
        text-align: center;
        -webkit-transition: .3s ease all;
        -moz-transition: .3s ease all;
        -o-transition: .3s ease all;
        transition: .3s ease all;
    }

    .incart-btn a:hover {
        background-color: #ff8c00;
    }

    .incart-btn i {
        padding: 0;
    }

    .incart-btn i:before {
        color: #fff;
        margin-right: 8px;
    }

    .incart-btn span {
        display: inline-block;
        color: #fff;
        font-size: 12px;
        font-weight: bold;
        vertical-align: middle;
        letter-spacing: 1px;
    }

    .incart-btn .total-quant {
        display: inline-block;
        position: relative;
        font-weight: bold;
        color: #fba60d;
        margin-left: 1.25em;
        background-color: #fff;
        text-align: center;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        vertical-align: text-bottom;
    }

    /* -- #site-navigation -- */
    #site-navigation {
        clear: both;
        padding: 0;
    }

    #site-navigation label {
        display: none;
    }

    header #site-navigation input#panel.on-off+div.nav-menu-open,
    header #site-navigation input#panel.on-off:checked+div.nav-menu-open,
    header #site-navigation input#panel.on-off+div.header-nav-container {
        display: block;
        overflow: inherit;
        height: auto;
        background-color: #131313;
    }

    #site-navigation ul {
        width: 1000px;
        margin: 0 auto;
        padding: 0;
    }

    #site-navigation li {
        position: relative;
        float: left;
    }

    #site-navigation li a {
        color: #fff;
        display: block;
        margin-bottom: 0;
        padding: 1em 1.42857em;
        border-bottom: none;
        line-height: 100%;
    }

    #site-navigation li {
        padding: 0;
        border-right: 1px solid #666;
    }

    #site-navigation ul li:first-child {
        border-left: 1px solid #666;
    }

    #site-navigation li.current_page_item a,
    #site-navigation li.current-menu-parent a {
        background-color: #565656;
    }

    #site-navigation li.current_page_item li a,
    #site-navigation li.current-menu-parent li a {
        background: none;
    }

    #site-navigation li a:hover {
        color: #fff;
        background-color: #565656;
        text-decoration: none;
    }

    /* -- sub-menu -- */
    #site-navigation ul ul {
        display: none;
        position: absolute;
        top: 42px;
        left: -2px;
        width: 120%;
        background-color: #fff;
        border: 3px double #e0e0e0;
        float: left;
        z-index: 99999;
    }

    #site-navigation ul li li {
        width: 100%;
        margin-left: 0;
        border: none;
    }

    #site-navigation ul li li:first-child {
        border: none;
    }

    #site-navigation li li a:hover {
        color: #262626;
    }

    #site-navigation li li.current-menu-item a {
        background-color: #f6f6f6;
    }

    #site-navigation ul ul ul {
        width: 100%;
        left: 100%;
        top: -3px;
    }

    #site-navigation li li:first-child a {
        color: #262626;
        border: none;
    }

    #site-navigation ul ul li a {
        color: #262626;
        background-color: #fff;
        border: none;
        height: auto;
        padding: .714286em .357143em;
        line-height: 1em;
        width: 100%;
    }

    #site-navigation ul ul :hover>a {
        background: none;
        background-color: #f6f6f6;
    }

    #site-navigation ul li:hover>ul {
        display: block;
    }

    #site-navigation * {
        -webkit-transition: .3s;
        -moz-transition: .3s;
        -ms-transition: .3s;
        -o-transition: .3s;
        transition: .3s;
    }


    /* =secondary
    -------------------------------------------------------------- */

    #secondary .columnleft section:last-child,
    #secondary .columncenter section:last-child,
    #secondary .columnright section:last-child {
        margin-bottom: 0;
    }

    /* -- one-column -- */
    .one-column #secondary {
        margin: 0 auto;
        padding: 2.142856em 0;
        border-top: 2px solid #eaeaea;
        float: none;
        overflow: hidden;
    }

    .one-column #secondary .columnleft {
        width: 240px;
        margin-right: 50px;
        float: left;
    }

    /*???calendar???*/
    .one-column .columnleft .widget_welcart_calendar table {
        width: 100%;
        float: none;
    }

    .one-column #secondary .columncenter {
        width: 240px;
        float: left;
    }

    /*???calendar???*/
    .one-column .columncenter .widget_welcart_calendar table {
        width: 100%;
        float: none;
    }

    .one-column #secondary .columnright {
        width: 420px;
        float: right;
    }

    /* -- two-column -- */
    .two-column #secondary {
        width: 210px;
        padding: 0;
        border: none;
    }

    .two-column.right-set #secondary {
        float: right;
    }

    .two-column.left-set #secondary {
        float: left;
    }

    .two-column .widget_welcart_calendar table {
        width: 100%;
        margin: 0 0 .714286em;
        float: none;
    }


    /*???.widget???*/
    .widget_welcart_bestseller ul {
        overflow: hidden;
    }

    .widget_welcart_bestseller li {
        width: 100%;
        margin-bottom: .714286em;
        float: none;
    }

    .widget_welcart_bestseller li:nth-of-type(odd) {
        clear: none;
    }

    .widget_welcart_featured ul {
        overflow: hidden;
    }

    .widget_welcart_featured .featured_list {
        width: 100%;
        margin-bottom: .714286em;
        float: none;
    }

    .widget_welcart_featured li:nth-of-type(odd) {
        clear: none;
    }

    .widget_welcart_category ul,
    .widget_welcart_search ul,
    .widget_search form,
    .widget_welcart_login ul {
        width: 100%;
    }

    .widget_categories select,
    .widget_archive select {
        width: auto;
    }

    .widget_welcart_search .searchtext {
        width: 60%;
        padding: .4286em;
    }

    .widget_welcart_search #searchsubmit {
        width: 40%;
    }

    /*---- item-list ----*/
    .widget_basic_item_list article {
        padding: .714286em 0;
        width: 100%;
    }

    .widget_basic_item_list a {
        overflow: hidden;
    }

    .widget_basic_item_list .itemimg {
        float: left;
        margin-bottom: 0;
        width: 20%;
    }

    .widget_basic_item_list .item-info-wrap {
        margin-left: 25%;
        width: 75%;
    }

    /* =footer
    -------------------------------------------------------------- */

    footer {
        clear: both;
        color: #fff;
        background-color: #131313;
    }

    /* -- a -- */
    footer a {
        color: #fff;
    }

    /* -- nav -- */
    footer nav {
        width: 1000px;
        margin: 0 auto;
        padding: 2.142856em 0 2.857143em;
    }

    footer nav li {
        width: 20%;
        float: left;
        margin-bottom: 1.071428em;
        padding-right: 2.142856em;
    }

    footer nav li:nth-of-type(6n) {
        clear: both;
    }

    footer nav li li:nth-of-type(6n) {
        clear: none;
    }

    /* -- .copyright -- */
    .copyright {
        padding: 1.071428em 0;
        text-align: center;
    }


    /* =contetns
    -------------------------------------------------------------- */

    /* -- main -- */
    #main {
        width: 1000px;
        margin: 2.857143em auto;
        padding: 0;
    }

    .home #main {
        width: 100%;
        margin: 0 auto;
    }

    /* -- main-image -- */
    .main-image {
        margin: 0;
        padding: 0;
        text-align: center;
    }

    .main-image img {
        /*width: auto;*/
    }

    /* -- .one-column -- */
    #main.one-column #content {
        width: 100%;
        margin: 0;
        padding: 0;
    }

    /* -- .two-column -- */
    #main.two-column #content {
        width: 750px;
        margin: 0;
        padding: 0;
    }

    .two-column.right-set #content {
        float: left;
    }

    .two-column.left-set #content {
        float: right;
    }


    /* =front-page.php
    -------------------------------------------------------------- */

    .blog #content .pagination_wrapper {
        margin-bottom: 20px;
    }

    /* -- .sof -- */
    .home .sof {
        margin-bottom: 30px;
    }

    .home .sof .entry-content {
        margin-bottom: 0;
    }


    /* =page.php + single.php .entry-content
    -------------------------------------------------------------- */

    /* -- h1,h2,h3,h4,h5 -- */
    .entry-content h1 {
        font-size: 1.285712em;
        margin-bottom: 2.222224em;
    }

    .entry-content h2 {
        font-size: 1.142857em;
    }


    /* =archive.php
    -------------------------------------------------------------- */

    /* -- .post-li -- */
    .post-li {
        padding-bottom: 1.071428em;
    }


    /* =comments.php
    -------------------------------------------------------------- */

    .comment-area .comment-list {
        overflow: hidden;
    }

    .comment-area .comment-list li {
        margin: .714286em 0 0;
    }

    #respond .form-submit {
        margin-top: 1.42857em;
        padding-top: .714286em;
        border-top: 1px solid #ccc;
    }


}

a:hover {
    text-decoration: none;
}

section.block {
    padding: 60px 0;
}

section.block.px15 {
    padding-right: 15px;
    padding-left: 15px;
}

.news_area {}

.news_area .row>.col-sm-6:first-child {
    display: flex;
    flex-wrap: wrap;
}

.news_area .row>.col-sm-6:first-child h1 {
    width: 100%;
}

.news_area .row>.col-sm-6>article {
    height: 100%;
}

.news_area .row>.col-sm-6>.old_news_link {
    width: 100%;
    padding: 15px 0;
}

.news_area .row>.col-sm-6>.old_news_link a {
    width: 100%;
    max-width: 252px;
    display: block;
    margin: auto;
    background-color: #eee;
    border-radius: 15px;
    padding: 15px 30px;
    text-align: center;
}

#infomation {
    background: #eee;
}

.text-center {
    text-align: center;
}

#item_list .row {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

#item_list article {
    width: 50%;
    max-width: 500px;
    margin: 0 15px 30px;
    overflow: hidden;
    border-radius: 15px;
    box-shadow: 1px 1px 5px rgba(0, 0, 0, .1);
}

#item_list.item_list_old article {
    width: 30%;
}

#item_list.item_list_old .container {
    width: auto;
}

#item_list article .article_inner {
    display: block;
    height: 100%;
    background-color: #ff8c00;
}

#item_list article .article_inner .itemname {
    display: block;
    height: 72px;
    font-size: 16px;
    font-weight: bold;
    color: white;
    padding: 15px;
    background-color: #ffa500;
}

#item_list article.old_item .article_inner .itemname {
    padding: 5px 15px;
}

#item_list article .article_inner .date {
    display: block;
    font-weight: bold;
    color: white;
    background-color: #ff8c00;
    padding: 10px 15px;
    text-align: center;
}


#item_list .itemimg {
    position: relative;
}

#item_list .ribbon {
    position: relative;
    display: block;
    width: 100%;
    bottom: 0;
    margin: auto;
    text-align: center;
    padding: 3px 0;
    background: #ff3333;
    color: #fff;
    font-size: 16px;
    line-height: 1.2;
}

#item_list .ribbon h2 {
    padding: 5px 15px;
    border-top: dashed 2px rgba(255, 255, 255, 0.5);
    border-bottom: dashed 2px rgba(255, 255, 255, 0.5);
    font-size: 14px;
    line-height: 1.2;
}

#old_item_link {
    text-align: center;
    background-color: #eee;
}

#old_item_link a {
    background-color: white;
    border-radius: 15px;
    padding: 15px 30px;
}

.article_inner .btn {
    background: #ff8c00;
    color: #fff;
    display: block;
    text-align: center;
    margin-bottom: 0;
}

#old_item article .article_inner {
    min-height: 320px;
}

.btn {
    padding: 10px 30px;
    border: 1px #eee solid;
    color: #000;
    text-decoration: none;
    display: inline-block;
    margin: 15px auto;
}

.btn.buy {
    display: block;
    max-width: 300px;
    width: 100%;
    background: url(images/kuji_btn_bg.png) #ff8c00;
    color: #fff;
    text-align: center;
    font-size: 28px;
}

.btn.chalenge {
    display: block;
    width: 100%;
    background: url(images/kuji_btn_bg.png) #ff8c00;
    color: #fff;
    text-align: center;
    padding: 15px 0;
    font-size: 20px;
}

.bulk_button .skubutton,
.item-info .bulk_button .skubutton {
    display: block;
    width: 100%;
    font-size: 24px;
    background: #dca910;
    color: #fff;
}

.item-info .bulk_button .skubutton {
    max-width: 320px;
    margin: 0 auto 0;
    padding: 15px 0;
    font-size: 18px;
}


.bulk_button {
    margin-top: 30px;
}

.bulk_button p {
    margin-bottom: 5px;
    text-align: center;
    font-weight: bold;
}

.label {
    margin: 0 5px;
    padding: 5px;
    background: #c12748;
    color: #fff;
}

.news_area li {
    font-size: 16px;
}

/* ??????????????? ??????????????? */
/*.triangle::before {
    content: \"\";
    top: 0;
    left: 15px;
    border-bottom: 4em solid transparent;
    border-left: 4em solid #c12748;
    position: absolute;
    z-index: 100;
}

.triangle::after {
    content: \"New!\";
    display: block;
    top: 10px;
    transform: rotate(-45deg);
    color: #fff;
    left: 15px;
    position: absolute;
    z-index: 101;
}*/
.item_page h1{
    font-size: 18px;
    margin-bottom: 15px;
}

.itemname a {
    display: block;
    font-size: 16px;
    font-weight: bold;
    color: #ff8c00;
    margin: 20px auto 15px;
}

#menu-footer_nav li a {
    display: block;
    margin-bottom: 2px;
    padding: 15px 0 10px;
    color: #333;
    border-bottom: 1px #333 dotted;
    font-size: 18px;
}

.prize_slider li a {
    display: block;
    padding: 15px;
}

#img-box h3 {
    position: relative;
    font-size: 24px;
    background: #ff8c00;
    color: #fff;
    margin-top: 60px;
    margin-bottom: 60px;
    padding-left: 15px;
}

#img-box h3 .rank {
    max-width: 190px;
    height: 30px;
    line-height: 30px;
    position: absolute;
    top: -30px;
    left: 0;
    background: #ff8c00;
    padding-left: 15px;
    padding-right: 15px;
    border-bottom: 1px solid #fff;
    font-size: 16px;
}

#img-box h3 .rank strong {
    margin-right: 5px;
}

#img-box h3 .rank_1 {
    background: url(images/bg_rank_1.png) top center;
}

#img-box h3 .rank_2 {
    background: url(images/bg_rank_2.png) top center;
}

#img-box h3 .rank_3 {
    background: url(images/bg_rank_3.png) top center;
}

#img-box h3 .rank_1,
#img-box h3 .rank_2,
#img-box h3 .rank_3 {
    background-size: 80px;
    background-repeat: no-repeat;
    border-radius: 0;
}

#img-box h3 .rank_1 strong {
    font-size: 36px;
}

#img-box h3 .rank_2 strong {
    font-size: 32px;
}

#img-box h3 .rank_3 strong {
    font-size: 28px;
}

#img-box h3 .rank img {
    margin-top: 10px;
}

#img-box .probability {
    position: absolute;
    right: 15px;
    line-height: 35px;
    color: #fff;
    font-size: 80%;
    font-weight: bold;
}

.shadow_box {
    position: relative;
    display: block;
    background: #fff;
    color: #ff8c00;
    padding: 15px;
    box-shadow: 1px 1px 10px rgba(0, 0, 0, .3);
}

.shadow_box h4 {
    margin: 15px 0;
}

table.table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0px 5px;
    margin: 0 auto;
}

table.table td,
table.table th {
    padding: 10px 15px;
    color: #fff;
}

table.table th {
    background: #ff8c00;
}

table.table td {
    background: #ffa500;
}

section.block.item_detail {
    margin-top: 60px;
    background: url(images/item_bg_02.jpg);
    border: 2px #ffa500 solid;
    border-radius: 10px;
}

section.block.item_detail table.table th {
    white-space: nowrap;
}

section.block.item_detail table.table td {
    word-break: break-all;
}



#results_area {
    position: relative;
    padding: 50px 15px;
    width: 100%;
    display: block;
    background: #fff;
    text-align: center;
}

#results_area .results_area_inner {
    position: relative;
    padding: 120px 0;
    max-height: 500px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: contain;
    overflow: hidden;
}

#results_area .results_area_inner svg {
    display: inline-block;
    width: 200px;
    height: 270px;
    text-align: center;
    /*border: solid 1px blue;*/
    overflow: visible;
    font-size: 18px;
}

#results_area .results_area_inner .foreground {
    fill: #fff;
    text-anchor: middle;
}

#results_area .results_area_inner .background {
    stroke: #000;
    stroke-width: 8;
    stroke-linejoin: round;
    text-anchor: middle;
}

#results_area.get {
    position: relative;
    background: url(images/bg_get.jpg);
    background-size: cover;
    background-position: center;
    font-weight: bold;
    color: #fff;
    text-shadow: black 1px 1px 0px, black -1px 1px 0px,
        black 1px -1px 0px, black -1px -1px 0px;
    overflow: hidden;
}

#results_area.get p {
    font-size: 2em;
    margin-bottom: 30px;
}

#results_area.get .rank {
    font-size: 4em;
}

#results_area.get .prize {
    font-size: 2em;
}

#twitter-widget-0 {
    display: block;
    text-align: center;
    margin: auto;
}

.confetti {
    display: block;
    text-align: center;
    color:
}

.confetti>.particle {
    opacity: 0;
    position: absolute;
    -webkit-animation: confetti 3s ease-in infinite;
    animation: confetti 3s ease-in infinite;
}

.confetti>.particle.c1 {
    /*background-color: rgba(255, 140, 0, 0.5);*/
    background-color: rgba(255, 255, 255, 1);
}

.confetti>.particle.c2 {
    background-color: rgba(255, 238, 0, 0.5);
}

@-webkit-keyframes confetti {
    0% {
        opacity: 0;
        -webkit-transform: translateY(0%) rotate(0deg);
        transform: translateY(0%) rotate(0deg);
    }

    10% {
        opacity: 1;
    }

    35% {
        -webkit-transform: translateY(-800%) rotate(270deg);
        transform: translateY(-800%) rotate(270deg);
    }

    80% {
        opacity: 1;
    }

    100% {
        opacity: 0;
        -webkit-transform: translateY(2000%) rotate(1440deg);
        transform: translateY(2000%) rotate(1440deg);
    }
}

@keyframes confetti {
    0% {
        opacity: 0;
        -webkit-transform: translateY(0%) rotate(0deg);
        transform: translateY(0%) rotate(0deg);
    }

    10% {
        opacity: 1;
    }

    35% {
        -webkit-transform: translateY(-800%) rotate(270deg);
        transform: translateY(-800%) rotate(270deg);
    }

    80% {
        opacity: 1;
    }

    100% {
        opacity: 0;
        -webkit-transform: translateY(2000%) rotate(1440deg);
        transform: translateY(2000%) rotate(1440deg);
    }
}




.qaContentsInner li {
    position: relative;
}

.qaContentsInner li p {
    /*line-height: 16px;*/
}

.qaContentsInner li:nth-child(odd) {
    /*line-height: 64px;*/
    font-size: 16px;
    margin-top: 25px;
    margin-left: 46px;
    font-weight: bold;
}

@media only screen and (max-width: 768px) {
    .qaContentsInner li:nth-child(odd) {
        margin: 28px 0 22px 46px;
        line-height: 30px;
        font-size: 22px;
    }

    #results_area .results_area_inner {
        max-height: inherit;
        padding: 0;
    }

    #results_area {
        padding: 15px;
    }

    #results_area.get .rank {
        display: block;
        line-height: 1.5em;
    }

    #results_area.get .prize {
        display: block;
        line-height: 1.3em;
        margin-bottom: 10px;
    }

    #results_area.get p {
        font-size: 1.5em;
    }

    #old_item_link {
        padding: 30px 0;
    }

    #item_list article,
    #item_list.item_list_old article {
        width: 100%;
    }

    .news_area .row>.col-sm-6>.old_news_link a {
        margin-bottom: 30px;
    }

}

@media only screen and (max-width: 480px) {
    #main {
        padding: 30px 0;
    }

    #main.no-padding {
        padding: 0;
    }

    section.block {
        padding: 15px 0;
    }

    header .site-title {
        margin: 0;
        line-height: 45px;
    }

    .snav {
        padding-bottom: 1.07143em;
        margin-right: .614286em;
    }

    .site-description {
        padding: .4em 0 .4em .8333em;
    }

    .slick-next {
        right: 5px !important;
    }

    .slick-prev {
        left: 5px !important;
        z-index: 1;
    }

    article .article_inner {
        padding: 0;
        box-shadow: none
    }

    section.block.item_detail {
        margin-top: 15px;
        padding: 15px;
        border: none;
        border-radius: 0;
    }

    #img-box h3 {
        margin-top: 60px;
        margin-bottom: 30px;
        padding-top: 15px;
        padding: 10px;
        font-size: 22px;
        text-align: center;
    }

    #img-box .probability {
        position: relative;
        display: block;
        right: 0;
    }

    #img-box h3 .rank {
        left: 0;
        right: 0;
        margin: 0 auto;
        bottom: 0;
    }

    .qaContentsInner ul {
        margin-left: 0;
    }

    .qaContentsInner li:nth-child(odd) {
        margin: 26px 0 16px 15px;
        line-height: 24px;
        font-size: 18px;
    }

    input[type=\"text\"],
    input[type=\"password\"],
    input[type=\"email\"],
    input[type=\"tel\"],
    input[type=\"search\"],
    input[type=\"url\"] {
        width: 100%;
    }

    h3 {
        font-size: 1.399em;
    }

    h4 {
        font-size: 1.2em;
    }
}

@media only screen and (max-width: 380px) {
    .qaContentsInner li:nth-child(odd) {
        line-height: 22px;
        font-size: 16px;
    }
}

.qaContentsInner li:nth-child(even) {
    line-height: 20px;
    font-size: 12.5px;
    margin-left: 46px;
    color: #333333;
}

@media only screen and (max-width: 768px) {
    .qaContentsInner li:nth-child(even) {
        line-height: 23.5px;
        font-size: 17.5px;
        margin-right: 18px;
    }
}

@media only screen and (max-width: 480px) {
    .qaContentsInner li:nth-child(even) {
        line-height: 18px;
        font-size: 14px;
        margin-right: 14px;
        margin-left: 15px;
    }
}

.qaContentsInner li .answer {
    margin-top: 6px;
}

.qaContentsInner li p:nth-child(even) {
    margin-left: 30px;
}

.qaCausion {
    margin-left: 30px;
}

@media only screen and (max-width: 480px) {
    .qaContentsInner li p:nth-child(even) {
        margin-left: 26px;
    }

    .qaCausion {
        margin-left: 20px;
    }
}

.maruLetter {
    position: absolute;
    top: -7px;
    left: -20px;
    border-radius: 50%;
    font-size: 24px;
    font-weight: bold;
    line-height: 1.5em;
    padding-top: 0;
    padding-left: 0.4em;
    padding-right: 0.4em;
    margin-right: 10px;
}

.redColor {
    top: -7px;
    color: #fff;
    border: 0;
    background: #ff6969;
}

@media only screen and (max-width: 480px) {
    .redColor {
        top: -6px;
        left: -20px;
    }
}

.orangeColor {
    color: #fff;
    border: 0;
    background: #ff8c00;
}

@media only screen and (max-width: 768px) {
    .orangeColor {
        top: 0;
    }
}

@media only screen and (max-width: 768px) {
    .orangeColor {
        top: -8px;
    }
}

.qaContentsInner a {
    color: #f2984b;
    text-decoration: underline;
}

#old_item .itemname a {
    margin-top: 20px;

}

.itemsoldout {
    display: block;
    background: #eee;
    padding: 5px;
    margin-top: 20px;
    text-align: center;
}

.main_slider {
    overflow: hidden;
    margin: auto;
}

.main_slider .slick-arrow {
    text-indent: -99999px;
}

.main_slider button.slick-arrow {
    background-color: transparent !important;
    width: 29px;
    height: 40px;
    position: absolute;
    z-index: 9;
    border: 0px !important;
    padding: 0 !important;
    margin: 0px !important;
    border-radius: 0px !important
}

.main_slider button.slick-next,
.main_slider button.slick-next:hover,
.main_slider button.slick-next:focus {
    background: rgba(255, 255, 255, 0.7) url(./images/arrow-right.png) center center no-repeat !important;
    background-size: 15px 26px !important;
    outline: none !important
}

.main_slider button.slick-prev,
.main_slider button.slick-prev:hover,
.main_slider button.slick-prev:focus {
    background: rgba(255, 255, 255, 0.7) url(./images/arrow-left.png) center center no-repeat !important;
    background-size: 15px 26px !important;
    outline: none !important
}

.main_slider .slick-dots {
    padding: 0 !important;
    margin: 0 !important;
    text-align: center;
}

.main_slider .slick-dots li button {
    text-indent: -99999px;
}

.main_slider .slick-dots li {
    list-style: none !important;
    line-height: 0px !important;
    display: inline-block !important;
    margin: 0 5px !important;
    padding: 0px !important;
}

.main_slider .slick-dots li button {
    background: #fff !important;
    margin: 0px !important;
    padding: 0px !important;
    border-radius: 50% !important;
    width: 13px !important;
    height: 13px !important;
}

.main_slider .slick-dots li button:focus {
    outline: none !important
}

.main_slider .slick-dots li.slick-active button {
    background: #444 !important;
}

.main_slider .slick-arrow {
    top: 50% !important;
    cursor: pointer;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}

.main_slider .slick-next {
    right: 0px !important;
}

.main_slider .slick-prev {
    left: 0px !important;
}

.main_slider .slick-dots {
    left: 15px !important;
    right: 15px;
    text-align: center;
    bottom: 0px !important;
}


.agree {
    padding: 15px;
    margin-bottom: 15px;
    height: 300px;
    overflow-y: scroll;
    border: 1px #ddd solid;
    background-color: #fff;
}

.agree h2,
.agree h4 {
    font-size: 1em;
    margin-top: 15px;
}

.member-page .send input:disabled {
    background-color: #eee !important;
}


.all_buy .skubutton {
    display: block;
    width: 100%;
    background: #dca910;
    font-size: 28px;
    color: #fff;
}


#wc_delivery #cart table .action {
    display: none;
}

input[type=\"number\"].used_point {
    width: 80px;
    margin: 0 .357143em;
    border: 1px solid #aaa;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
    text-align: center;
    padding: .5714285em;
}

.slick-next:before,
.slick-prev:before {
    color: black;
}

.row-eq-height {
    display: flex;
    flex-wrap: wrap;
}

.wpcf7-form {
    margin: auto;
    max-width: 540px;
}

.wpcf7-form input[type=\"text\"],
.wpcf7-form input[type=\"tel\"],
.wpcf7-form input[type=\"email\"],
.wpcf7-form select,
.wpcf7-form textarea,
.wpcf7-form label {
    width: 100%;

}

.under_line {
    text-decoration: underline;
}

.d-flex {
    display: flex;
}

.justify-content-center {
    justify-content: center;
}

.justify-content-space-evenly {
    justify-content: space-evenly;
}
</style>";
    }

    public function getTemplateName()
    {
        return "Block/style.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/style.twig", "F:\\xampp\\htdocs\\test-shop\\eccube-4.0.5-p1\\app\\template\\default\\Block\\style.twig");
    }
}
