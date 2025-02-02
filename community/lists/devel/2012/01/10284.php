<?
$subject_val = "Re: [OMPI devel] 1.4.5rc3 released";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 30 22:55:47 2012" -->
<!-- isoreceived="20120131035547" -->
<!-- sent="Mon, 30 Jan 2012 19:55:26 -0800" -->
<!-- isosent="20120131035526" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.5rc3 released" -->
<!-- id="4F27662E.4060204_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F27350A.7020508_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.4.5rc3 released<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-30 22:55:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10285.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<li><strong>Previous message:</strong> <a href="10283.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<li><strong>In reply to:</strong> <a href="10283.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10285.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<li><strong>Reply:</strong> <a href="10285.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oh, I missed a big one:
<br>
<p>7) opal/util/path.c has &quot;#elif defined(linux)&quot; but XLC does not define this.
<br>
This is breaking test/util/opal_pth_nfs.c
<br>
See <a href="http://www.open-mpi.org/community/lists/devel/2012/01/10268.php">http://www.open-mpi.org/community/lists/devel/2012/01/10268.php</a>
<br>
<p>-Paul
<br>
<p>On 1/30/2012 4:25 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; In retesting I see that the following items I reported in 1.4.5rc2 or 
</span><br>
<span class="quotelev1">&gt; rc1 have NOT been resolved in rc3.
</span><br>
<span class="quotelev1">&gt; This list is meant to be complete, even for issues that I reported so 
</span><br>
<span class="quotelev1">&gt; recently that no fix is expected and those that probably won't be 
</span><br>
<span class="quotelev1">&gt; fixed at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 0) README for Solaris Studio compilers (&quot;don't set CXX=sunCC&quot;) which I 
</span><br>
<span class="quotelev1">&gt; mentioned in my previous post.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) The 1.4.x version of ticket #2954 has not been fixed yet.
</span><br>
<span class="quotelev1">&gt; In other words, one must still use GNU Make on FreeBSD and OpenBSD.
</span><br>
<span class="quotelev1">&gt; I saw George committed the fix to 1.5.x, but Did the CMRs ever get 
</span><br>
<span class="quotelev1">&gt; created for HEAD and 1.4?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Must --disable-io-romio on OpenBSD
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) No MFSTYPENAMELEN in MacOS-10.3
</span><br>
<span class="quotelev1">&gt; The README says &quot;OS X (10.4)&quot; has been tested, but doesn't state 10.4 
</span><br>
<span class="quotelev1">&gt; as a minimum requirement.
</span><br>
<span class="quotelev1">&gt; I've noted that 1.5.x is smart enough to enforce 10.4 as a minimum at 
</span><br>
<span class="quotelev1">&gt; configure time:
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: Open MPI does not support OS X prior to version 
</span><br>
<span class="quotelev2">&gt;&gt; 10.4 (Tiger)
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: Cannot continue 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4) Icc-9.1 and icc-10.0 fail to build atomics on IA64 (gcc is fine on 
</span><br>
<span class="quotelev1">&gt; same machine)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5) atomic_spinlock test failure on linux/ppc64/xlc-9.0 (ppc32 PASSes, 
</span><br>
<span class="quotelev1">&gt; as does ppc64 w/ xlc-8.0 and xlc-11.1).
</span><br>
<span class="quotelev1">&gt; If this is not a OMPI bug, then it may be worth noting in the README.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 6) linux/xlc-7.0 can't build atomics (to document in README)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/30/2012 2:25 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; A few little fixes incorporated; posted in the usual location:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The shared library versions still need to be updated before final 
</span><br>
<span class="quotelev2">&gt;&gt; release.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Combined patch from Fujitsu. Fixes a collections of typos over the
</span><br>
<span class="quotelev2">&gt;&gt; code and man pages.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modify Solaris Studio Complier notes about using xarch
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Fixes #2967: pretty much copy the text from MPI-2.2 in the description
</span><br>
<span class="quotelev2">&gt;&gt; of the group argument to MPI_COMM_CREATE.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Fixes #2844: ensure to take the value of --with(out)-memory-manager
</span><br>
<span class="quotelev2">&gt;&gt; into account when configuring the components of the faramework.  If
</span><br>
<span class="quotelev2">&gt;&gt; --without-memory-manager was given, then we really don't want any
</span><br>
<span class="quotelev2">&gt;&gt; memory managers to be used.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; NEWS and README updated
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10285.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<li><strong>Previous message:</strong> <a href="10283.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<li><strong>In reply to:</strong> <a href="10283.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10285.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<li><strong>Reply:</strong> <a href="10285.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc3 released"</a>
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
