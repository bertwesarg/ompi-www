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
<!-- Generated by Doxygen 1.7.1 -->
<div class="navigation" id="top">
  <div class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&nbsp;Page</span></a></li>
      <li><a href="pages.php"><span>Related&nbsp;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&nbsp;Structures</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&nbsp;List</span></a></li>
      <li><a href="globals.php"><span>Globals</span></a></li>
    </ul>
  </div>
</div>
<div class="header">
  <div class="summary">
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<h1>openfabrics-verbs.h File Reference</h1>  </div>
</div>
<div class="contents">

<p>Macros to help interaction between hwloc and OpenFabrics verbs.  
<a href="#_details">More...</a></p>
<code>#include &lt;<a class="el" href="hwloc_8h_source.php">hwloc.h</a>&gt;</code><br/>
<code>#include &lt;hwloc/config.h&gt;</code><br/>
<code>#include &lt;<a class="el" href="linux_8h_source.php">hwloc/linux.h</a>&gt;</code><br/>
<code>#include &lt;infiniband/verbs.h&gt;</code><br/>

<p><a href="openfabrics-verbs_8h_source.php">Go to the source code of this file.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="func-members"></a>
Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline int&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwloc__openfabrics.php#gaa8ea979ce3a9b8c70ae80bc5716a0fbe">hwloc_ibv_get_device_cpuset</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology , struct ibv_device *ibdev, <a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a> set)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Get the CPU set of logical processors that are physically close to device <code>ibdev</code>.  <a href="group__hwloc__openfabrics.php#gaa8ea979ce3a9b8c70ae80bc5716a0fbe"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>Macros to help interaction between hwloc and OpenFabrics verbs. </p>
<p>Applications that use both hwloc and OpenFabrics verbs may want to include this file so as to get topology information for OpenFabrics hardware. </p>
</div>
<?php
include_once("$topdir/includes/footer.inc");
