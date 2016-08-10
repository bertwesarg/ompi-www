<?
$subject_val = "Re: [hwloc-devel] Something lighter-weight than XML?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 22 09:39:56 2011" -->
<!-- isoreceived="20110922133956" -->
<!-- sent="Thu, 22 Sep 2011 09:39:47 -0400" -->
<!-- isosent="20110922133947" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Something lighter-weight than XML?" -->
<!-- id="D3565069-3B40-4BFB-BD2D-96A457200E4C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E773E09.3030001_at_inria.fr" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [hwloc-devel] Something lighter-weight than XML?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-22 09:39:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2429.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Previous message:</strong> <a href="2427.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>In reply to:</strong> <a href="2420.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2429.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Reply:</strong> <a href="2429.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Reply:</strong> <a href="2464.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I can get some testing of the ompi branch pretty quickly.  I can bring in a new copy of this later today and see what we can see.
<br>
<p>Many thanks!
<br>
<p><p>On Sep 19, 2011, at 9:05 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; I pushed the new minimalistic XML import/export implementation without
</span><br>
<span class="quotelev1">&gt; libxml2 to the nolibxml branch. If libxml2 is available, it's still used
</span><br>
<span class="quotelev1">&gt; by default. --disable-libxml2 or some env variables can be used for
</span><br>
<span class="quotelev1">&gt; force the minimalistic implementation if needed. The minimalistic implem
</span><br>
<span class="quotelev1">&gt; is only guaranteed to import XML files that were generated by hwloc
</span><br>
<span class="quotelev1">&gt; (even if libxml was enabled there).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also backported most of this to the new v1.2-ompi branch (required to
</span><br>
<span class="quotelev1">&gt; backport some other XML cleanups from trunk). This branch will now serve
</span><br>
<span class="quotelev1">&gt; as a base for Open MPI's embedded hwloc. The idea is to have a complete
</span><br>
<span class="quotelev1">&gt; v1.2 + nolibxml somewhere so that we can at least run make check (Open
</span><br>
<span class="quotelev1">&gt; MPI does not embed enough to run hwloc's make check).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How do we proceed now? Can we have the OMPI guys test the new code soon?
</span><br>
<span class="quotelev1">&gt; Should I wait for their feedback before merging the nolibxml branch into
</span><br>
<span class="quotelev1">&gt; the trunk? I'd like to merge this in v1.3 too (and basically release rc2
</span><br>
<span class="quotelev1">&gt; as the actual first feature-complete RC), so getting feedback early
</span><br>
<span class="quotelev1">&gt; might be appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2429.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Previous message:</strong> <a href="2427.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>In reply to:</strong> <a href="2420.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2429.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Reply:</strong> <a href="2429.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Reply:</strong> <a href="2464.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>