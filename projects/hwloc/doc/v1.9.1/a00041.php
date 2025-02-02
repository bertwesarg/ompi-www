<?php
$topdir = "../../../..";
# Note that we must use the PHP "$$" indirection to assign to the
# "title" variable, because if we list "$ title" (without the space)
# in this file, Doxygen will replace it with a string title.
$ver = basename(getcwd());
$thwarting_doxygen_preprocessor = "title";
$$thwarting_doxygen_preprocessor = "Portable Hardware Locality (hwloc) Documentation: $ver";
$header_include_file = "$topdir/projects/hwloc/doc/$ver/www.open-mpi.org-css.inc";
include_once("$topdir/projects/hwloc/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/code.inc");
?>
<!-- Generated by Doxygen 1.8.8 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li class="current"><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li><a href="functions.php"><span>Data&#160;Fields</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="a00037.php">hwloc_obj_attr_u</a></li><li class="navelem"><a class="el" href="a00041.php">hwloc_osdev_attr_s</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-attribs">Data Fields</a>  </div>
  <div class="headertitle">
<div class="title">hwloc_obj_attr_u::hwloc_osdev_attr_s Struct Reference<div class="ingroups"><a class="el" href="a00075.php">Object Structure and Attributes</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p><code>#include &lt;<a class="el" href="a00063_source.php">hwloc.h</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-attribs"></a>
Data Fields</h2></td></tr>
<tr class="memitem:a31e019e27e54ac6138d04be639bb96f9"><td class="memItemLeft" align="right" valign="top"><a class="el" href="a00074.php#ga90c1e82a60ba5871d07645169e636987">hwloc_obj_osdev_type_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00041.php#a31e019e27e54ac6138d04be639bb96f9">type</a></td></tr>
<tr class="separator:a31e019e27e54ac6138d04be639bb96f9"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>OS Device specific Object Attributes. </p>
</div><h2 class="groupheader">Field Documentation</h2>
<a class="anchor" id="a31e019e27e54ac6138d04be639bb96f9"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="a00074.php#ga90c1e82a60ba5871d07645169e636987">hwloc_obj_osdev_type_t</a> hwloc_obj_attr_u::hwloc_osdev_attr_s::type</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<hr/>The documentation for this struct was generated from the following file:<ul>
<li><a class="el" href="a00063_source.php">hwloc.h</a></li>
</ul>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
