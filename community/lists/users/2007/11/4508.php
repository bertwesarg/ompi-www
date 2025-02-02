<?
$subject_val = "Re: [OMPI users] OpenIB problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 21 16:04:43 2007" -->
<!-- isoreceived="20071121210443" -->
<!-- sent="Wed, 21 Nov 2007 16:03:34 -0500" -->
<!-- isosent="20071121210334" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenIB problems" -->
<!-- id="7C2B1441-925E-4B15-8BD3-3F87E71A0052_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4744979A.6050201_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenIB problems<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-21 16:03:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4509.php">Brian Dobbins: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Previous message:</strong> <a href="4507.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>In reply to:</strong> <a href="4506.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4509.php">Brian Dobbins: "Re: [OMPI users] OpenIB problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks,
<br>
We have asked the user to try that and let us know if it fails. I  
<br>
will let the list know if this works.
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Nov 21, 2007, at 3:39 PM, Andrew Friedley wrote:
<br>
<p><span class="quotelev1">&gt; If this is what I think it is, try using this MCA parameter:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca btl_openib_ib_timeout 20
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If this fixes it -- I don't fully understand what's going on, but it's
</span><br>
<span class="quotelev1">&gt; an issue in the IB fabrics itself.  Someone else might be able to
</span><br>
<span class="quotelev1">&gt; explain in more detail..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian Dobbins wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Brock
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We have a user whos code keep failing at a similar point in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code.  The errors (below) would make me think its a fabric problem,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but ibcheckerrors is not returning any issues.  He is using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.2.0  With OFED on RHEL4,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Strangely enough, I hit this exact problem about half an hour  
</span><br>
<span class="quotelev2">&gt;&gt; ago...
</span><br>
<span class="quotelev2">&gt;&gt; what compilers is he using for the code / OpenMPI?  I haven't  
</span><br>
<span class="quotelev2">&gt;&gt; narrowed
</span><br>
<span class="quotelev2">&gt;&gt; down the cause yet because the system I'm on is a tad, uh,  
</span><br>
<span class="quotelev2">&gt;&gt; disheveled,
</span><br>
<span class="quotelev2">&gt;&gt; but it'd be good to find any commonality.  I'm using PGI-7.1-2
</span><br>
<span class="quotelev2">&gt;&gt; (pgf77/pgf90) with OpenMPI-1.2.4.  The system also happens to be  
</span><br>
<span class="quotelev2">&gt;&gt; RHEL 4
</span><br>
<span class="quotelev2">&gt;&gt; (Update 3).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   .. Also, the code I'm running is CCSM, and it gave an error message
</span><br>
<span class="quotelev2">&gt;&gt; about being unable to read a file correctly right before my
</span><br>
<span class="quotelev2">&gt;&gt; synchronization.  This code has worked on other systems in the past
</span><br>
<span class="quotelev2">&gt;&gt; (non-IB, non-IBRIX), but something as basic as a file write  
</span><br>
<span class="quotelev2">&gt;&gt; shouldn't be
</span><br>
<span class="quotelev2">&gt;&gt; adversely affected by such things, hence I'm going to try backing the
</span><br>
<span class="quotelev2">&gt;&gt; compiler down to a 'known-good' one first., since perhaps that's my
</span><br>
<span class="quotelev2">&gt;&gt; problem.  I don't suppose you saw any messages of that sort?   I did
</span><br>
<span class="quotelev2">&gt;&gt; already try setting the retry count parameter up to 20 (from 7), but
</span><br>
<span class="quotelev2">&gt;&gt; that didn't fix it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;   - Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian Dobbins
</span><br>
<span class="quotelev2">&gt;&gt; Yale University HPC
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4509.php">Brian Dobbins: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Previous message:</strong> <a href="4507.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>In reply to:</strong> <a href="4506.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4509.php">Brian Dobbins: "Re: [OMPI users] OpenIB problems"</a>
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
