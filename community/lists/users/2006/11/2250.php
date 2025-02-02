<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov 29 08:52:11 2006" -->
<!-- isoreceived="20061129135211" -->
<!-- sent="Wed, 29 Nov 2006 08:51:58 -0500" -->
<!-- isosent="20061129135158" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to set paffinity on a multi-cpu node?" -->
<!-- id="91773E3C-F7CA-4A11-BB15-A50AD77AF0CD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2F8EE677D406514ABE53EF9C0934A666061BA31D_at_anubis2.clb.tcfr.thales" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-29 08:51:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2251.php">Scott Atchley: "Re: [OMPI users] myirnet problems on OSX"</a>
<li><strong>Previous message:</strong> <a href="2249.php">Jeff Squyres: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>In reply to:</strong> <a href="2247.php">Laurent.POREZ_at_[hidden]: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/12/2263.php">Peter Kjellstrom: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The real complexity comes in when trying to schedule on particular  
<br>
cores in a machine.  For example, we discussed some real-world  
<br>
application examples that wanted to do the following:
<br>
<p>- Launch 1 MPI process per socket, pinning all cores on the socket to  
<br>
that process
<br>
- Launch 2 MPI processes per socket, splitting the cores between them
<br>
- Launch MPI processes on unused sockets/cores on a machine (ie.,  
<br>
some arbitrary mapping of processes to cores)
<br>
<p>Then there's the desire to have the scheduler provide all this  
<br>
information -- hostfiles are fine, but they actually represent a  
<br>
pretty small portion of real world usage.
<br>
<p><p>On Nov 29, 2006, at 2:17 AM, Laurent.POREZ_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; I agree with this solution, for the machinefile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using mpiexec or a spawn command, you can add the cpu number  
</span><br>
<span class="quotelev1">&gt; attached to the hostname :
</span><br>
<span class="quotelev1">&gt; mpiexec -host [hostname]:[cpu number] -n 1 mpi_test
</span><br>
<span class="quotelev1">&gt; or, for MPI_Comm_spawn :
</span><br>
<span class="quotelev1">&gt; MPI_Info_set( mpi_info, &quot;host&quot;, &quot;[hostname]:[cpu number]&quot; );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 	Laurent.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the machinefile, add for each node with M cpus:
</span><br>
<span class="quotelev2">&gt;&gt; myhost_at_mydomain slots=N cpus_allowed=&lt;set&gt;,
</span><br>
<span class="quotelev2">&gt;&gt; &lt;set&gt; being the subset of 0..M-1  in some yours-to-decide format and
</span><br>
<span class="quotelev2">&gt;&gt; with yours-to-decide default values.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Best Regards,
</span><br>
<span class="quotelev2">&gt;&gt;  Alexander Shaposhnikov
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wednesday 29 November 2006 06:16, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is not, right now.  However, this is mainly because
</span><br>
<span class="quotelev2">&gt;&gt; back when I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implemented the processor affinity stuff in OMPI (well over a year
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ago), no one had any opinions on exactly what interface to expose to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the use.  :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So right now there's only this lame control:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      <a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am not opposed to implementing more flexible processor affinity
</span><br>
<span class="quotelev3">&gt;&gt;&gt; controls, but the Big Discussion over the past few months is exactly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; how to expose it to the end user.  There have been several formats
</span><br>
<span class="quotelev3">&gt;&gt;&gt; proposed (e.g., mpirun command line parameters, magic MPI
</span><br>
<span class="quotelev2">&gt;&gt; attributes,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MCA parameters, etc.), but nothing that has been &quot;good&quot; and &quot;right&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So here's the time to chime in -- anyone have any opinions on this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 25, 2006, at 9:31 AM, shaposh_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i cant figure out, is there a way with open-mpi to bind all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; threads on a given node to a specified subset of CPUs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For example, on a multi-socket multi-core machine, i want to use
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; only a single core on each CPU.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank You.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Alexander Shaposhnikov
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2251.php">Scott Atchley: "Re: [OMPI users] myirnet problems on OSX"</a>
<li><strong>Previous message:</strong> <a href="2249.php">Jeff Squyres: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>In reply to:</strong> <a href="2247.php">Laurent.POREZ_at_[hidden]: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/12/2263.php">Peter Kjellstrom: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
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
