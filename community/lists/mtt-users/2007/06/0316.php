<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  7 03:27:45 2007" -->
<!-- isoreceived="20070607072745" -->
<!-- sent="Thu, 7 Jun 2007 10:27:39 +0300" -->
<!-- isosent="20070607072739" -->
<!-- name="Sharon Melamed" -->
<!-- email="sharonm_at_[hidden]" -->
<!-- subject="Re: [MTT users] Test build failure" -->
<!-- id="39C75744D164D948A170E9792AF8E7CA02B3B8_at_exil.voltaire.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="03C67BB8-524F-48B5-9331-5E035E100332_at_cisco.com" -->
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
<strong>From:</strong> Sharon Melamed (<em>sharonm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-07 03:27:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0317.php">Jeff Squyres: "Re: [MTT users] Test build failure"</a>
<li><strong>Previous message:</strong> <a href="0315.php">Jeff Squyres: "Re: [MTT users] Test build failure"</a>
<li><strong>In reply to:</strong> <a href="0315.php">Jeff Squyres: "Re: [MTT users] Test build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0317.php">Jeff Squyres: "Re: [MTT users] Test build failure"</a>
<li><strong>Reply:</strong> <a href="0317.php">Jeff Squyres: "Re: [MTT users] Test build failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
Sorry for the delay. Attached the config.log from the last compilation.
<br>
<p>Thanks.
<br>
<p>Sharon.
<br>
<p>-----Original Message-----
<br>
From: mtt-users-bounces_at_[hidden]
<br>
[mailto:mtt-users-bounces_at_[hidden]] On Behalf Of Jeff Squyres
<br>
Sent: Wednesday, June 06, 2007 2:50 PM
<br>
To: General user list for the MPI Testing Tool
<br>
Subject: Re: [MTT users] Test build failure
<br>
<p>Wow, that's weird.  Your INI file looks ok.
<br>
<p>Can you dig down into the scratch directory and find the config.log  
<br>
file that resulted from running this configure script?  I'd like to  
<br>
see what the specific error was that caused it to fail to find mpi.h.
<br>
<p><p><p>On Jun 6, 2007, at 7:39 AM, Sharon Melamed wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to run MTT version 2.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the test build phase, some of the builds fails. For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The build output of the ibm test looks like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Evaluating: ./configure CC=mpicc CXX=mpic++ F77=mpif77
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    make
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running command: /tmp/IhYOhJexxR
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUT:configure: loading site script /usr/local/share/config.site
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUT:configure: loading site script /usr/local/etc/config.site
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUT:Configuring Open MPI/IBM test suite
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUT:checking for a BSD-compatible install... OUT:(cached) OUT:/usr/ 
</span><br>
<span class="quotelev1">&gt; bin/install -c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUT:checking whether build environment is sane... OUT:yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUT:checking for gawk... OUT:(cached) OUT:gawk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUT:checking whether make sets $(MAKE)... OUT:(cached) OUT:yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUT:checking build system type... OUT:(cached) OUT:x86_64-unknown- 
</span><br>
<span class="quotelev1">&gt; linux-gnu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUT:checking host system type... OUT:x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUT:checking for gcc... OUT:(cached) OUT:gcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUT:checking for C compiler default output file name... OUT:a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUT:checking whether the C compiler works... OUT:yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUT:checking whether we are cross compiling... OUT:no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUT:checking for suffix of executables... OUT:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUT:checking for suffix of object files... OUT:(cached) OUT:o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUT:checking whether we are using the GNU C compiler... OUT: 
</span><br>
<span class="quotelev1">&gt; (cached) OUT:yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUT:checking whether gcc accepts -g... OUT:(cached) OUT:yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUT:checking for gcc option to accept ANSI C... OUT:(cached)  
</span><br>
<span class="quotelev1">&gt; OUT:none needed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUT:checking for style of include used by make... OUT:GNU
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUT:checking dependency style of gcc... OUT:(cached) OUT:gcc3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUT:checking whether we are using the GNU C++ compiler... OUT: 
</span><br>
<span class="quotelev1">&gt; (cached) OUT:yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUT:checking whether mpic++ accepts -g... OUT:(cached) OUT:yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUT:checking dependency style of mpic++... OUT:(cached) OUT:gcc3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUT:checking for mpif77... OUT:yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUT:checking whether we are using the GNU Fortran 77 compiler...  
</span><br>
<span class="quotelev1">&gt; OUT:yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUT:checking whether mpif77 accepts -g... OUT:yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUT:checking for ranlib... OUT:(cached) OUT:ranlib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUT:checking for mpi.h... OUT:no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUT:configure: error: cannot continue -- cannot find &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUT:make: *** OUT:No targets specified and no makefile foundOUT:.   
</span><br>
<span class="quotelev1">&gt; Stop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you can see, the configure script cant find the mpi.h file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have this problem in other builds as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached my ini file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can someone help?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sharon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;sharon-test-2.1.ini&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
_______________________________________________
mtt-users mailing list
mtt-users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0316/config.log">config.log</a>
</ul>
<!-- attachment="config.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0317.php">Jeff Squyres: "Re: [MTT users] Test build failure"</a>
<li><strong>Previous message:</strong> <a href="0315.php">Jeff Squyres: "Re: [MTT users] Test build failure"</a>
<li><strong>In reply to:</strong> <a href="0315.php">Jeff Squyres: "Re: [MTT users] Test build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0317.php">Jeff Squyres: "Re: [MTT users] Test build failure"</a>
<li><strong>Reply:</strong> <a href="0317.php">Jeff Squyres: "Re: [MTT users] Test build failure"</a>
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
