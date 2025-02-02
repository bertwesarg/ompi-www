<?
$subject_val = "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 16 14:14:31 2014" -->
<!-- isoreceived="20140416181431" -->
<!-- sent="Wed, 16 Apr 2014 18:14:28 +0000" -->
<!-- isosent="20140416181428" -->
<!-- name="Sasso, John (GE Power &amp; Water, Non-GE)" -->
<!-- email="John1.Sasso_at_[hidden]" -->
<!-- subject="Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4" -->
<!-- id="4F505D9A84D1D74E9397FB427DDF95BC3FE5DD23_at_ALPMBAPA12.e2k.ad.ge.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CF72ACBD.F159%daniel.milroy_at_colorado.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4<br>
<strong>From:</strong> Sasso, John (GE Power &amp; Water, Non-GE) (<em>John1.Sasso_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-16 14:14:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24224.php">Oscar Mojica: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>Previous message:</strong> <a href="24222.php">Gus Correa: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>In reply to:</strong> <a href="24201.php">Daniel Milroy: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/09/25337.php">Beichuan Yan: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dan, 
<br>
<p>On the hosts where the ADIOI lock error occurs, are there any NFS errors in /var/log/messages, dmesg, or similar that refer to lockd?
<br>
<p>--john
<br>
<p><p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Daniel Milroy
<br>
Sent: Tuesday, April 15, 2014 10:55 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4
<br>
<p>Hi Rob,
<br>
<p>The applications of the two users in question are different; I haven&#185;t looked through much of either code.  I can respond to your highlighted situations in sequence:
<br>
<p><span class="quotelev1">&gt;- everywhere in NFS.  If you have a Lustre file system exported to some 
</span><br>
<span class="quotelev1">&gt;clients as NFS, you'll get NFS (er, that might not be true unless you 
</span><br>
<span class="quotelev1">&gt;pick up a recent patch)
</span><br>
The compute nodes are Lustre clients mounting the file system via IB.
<br>
<p><span class="quotelev1">&gt;- note: you don't need to disable data sieving for reads, though you 
</span><br>
<span class="quotelev1">&gt;might want to if the data sieving algorithm is wasting a lot of data.
</span><br>
That&#185;s good to know, though given the applications I can&#185;t say whether data sieving is wasting data.
<br>
<p><span class="quotelev1">&gt;- if atomic mode was set on the file (i.e. you called
</span><br>
<span class="quotelev1">&gt;MPI_File_set_atomicity)
</span><br>
<span class="quotelev1">&gt;- if you use any of the shared file pointer operations
</span><br>
<span class="quotelev1">&gt;- if you use any of the ordered mode collective operations
</span><br>
I don&#185;t know but will pass these questions on to the users.
<br>
<p><p><p>Thank you,
<br>
<p>Dan Milroy
<br>
<p><p><p><p>On 4/14/14, 2:23 PM, &quot;Rob Latham&quot; &lt;robl_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 04/08/2014 05:49 PM, Daniel Milroy wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The file system in question is indeed Lustre, and mounting with flock 
</span><br>
<span class="quotelev2">&gt;&gt; isn&#185;t possible in our environment.  I recommended the following 
</span><br>
<span class="quotelev2">&gt;&gt; changes to the users&#185; code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hi.  I'm the ROMIO guy, though I do rely on the community to help me 
</span><br>
<span class="quotelev1">&gt;keep the lustre driver up to snuff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Info_set(info, &quot;collective_buffering&quot;, &quot;true&quot;); 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Info_set(info, &quot;romio_lustre_ds_in_coll&quot;, &quot;disable&quot;); 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Info_set(info, &quot;romio_ds_read&quot;, &quot;disable&quot;); MPI_Info_set(info, 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;romio_ds_write&quot;, &quot;disable&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Which results in the same error as before.  Are there any other MPI 
</span><br>
<span class="quotelev2">&gt;&gt; options I can set?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'd like to hear more about the workload generating these lock 
</span><br>
<span class="quotelev1">&gt;messages, but I can tell you the situations in which ADIOI_SetLock gets called:
</span><br>
<span class="quotelev1">&gt;- everywhere in NFS.  If you have a Lustre file system exported to some 
</span><br>
<span class="quotelev1">&gt;clients as NFS, you'll get NFS (er, that might not be true unless you 
</span><br>
<span class="quotelev1">&gt;pick up a recent patch)
</span><br>
<span class="quotelev1">&gt;- when writing a non-contiguous region in file, unless you disable data 
</span><br>
<span class="quotelev1">&gt;sieving, as you did above.
</span><br>
<span class="quotelev1">&gt;- note: you don't need to disable data sieving for reads, though you 
</span><br>
<span class="quotelev1">&gt;might want to if the data sieving algorithm is wasting a lot of data.
</span><br>
<span class="quotelev1">&gt;- if atomic mode was set on the file (i.e. you called
</span><br>
<span class="quotelev1">&gt;MPI_File_set_atomicity)
</span><br>
<span class="quotelev1">&gt;- if you use any of the shared file pointer operations
</span><br>
<span class="quotelev1">&gt;- if you use any of the ordered mode collective operations
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;you've turned off data sieving writes, which is what I would have first 
</span><br>
<span class="quotelev1">&gt;guessed would trigger this lock message.  So I guess you are hitting 
</span><br>
<span class="quotelev1">&gt;one of the other cases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;==rob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;Rob Latham
</span><br>
<span class="quotelev1">&gt;Mathematics and Computer Science Division Argonne National Lab, IL USA 
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24224.php">Oscar Mojica: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>Previous message:</strong> <a href="24222.php">Gus Correa: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>In reply to:</strong> <a href="24201.php">Daniel Milroy: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/09/25337.php">Beichuan Yan: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
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
