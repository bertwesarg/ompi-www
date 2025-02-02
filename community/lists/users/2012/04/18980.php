<?
$subject_val = "Re: [OMPI users] sge tight intregration leads to bad allocation";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 10 11:04:21 2012" -->
<!-- isoreceived="20120410150421" -->
<!-- sent="Tue, 10 Apr 2012 09:04:13 -0600" -->
<!-- isosent="20120410150413" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sge tight intregration leads to bad allocation" -->
<!-- id="105182EF-8D4D-4F76-A25F-C045903C4688_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="zarafa.4f8449ea.558a.26b7b9877ad6717a_at_mail.fft" -->
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
<strong>Subject:</strong> Re: [OMPI users] sge tight intregration leads to bad allocation<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-10 11:04:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18981.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Previous message:</strong> <a href="18979.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>In reply to:</strong> <a href="18979.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18981.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Reply:</strong> <a href="18981.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 10, 2012, at 8:55 AM, Eloi Gaudry wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralf,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I haven't tried any of the 1.5 series yet (we have chosen not to use the features releases) but if this is mandatory for you to work on this topic, I will.
</span><br>
<p>Not mandatory, no - however, the 1.4 series has been closed out, so any fix will go into 1.6 (the 1.5 series is about to go &quot;stable&quot;).
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This might be of interest to Reuti and you : it seems that we cannot reproduce the problem anymore if we don't provide the &quot;-np N&quot; option on the orterun command line. Of course, we need to launch a few other runs to be really sure because the allocation error was not always observable. Actually, I recently understood (from Reuti) that the tight integration mode would supply every necessary bits to the launcher and thus I removed the '-np N' that was around... Could it be that using the '-np N' while using the sge tight integration mode is pathologic ?
</span><br>
<p>No, it should work just fine. Sounds like something weird is going on.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Eloi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: mardi 10 avril 2012 16:43
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] sge tight intregration leads to bad allocation
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could well be a bug in OMPI - I can take a look, though it may be awhile before I get to it. Have you tried one of the 1.5 series releases?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 10, 2012, at 3:42 AM, Eloi Gaudry wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thx. This is the allocation which is also confirmed by the Open MPI output.
</span><br>
<span class="quotelev2">&gt;&gt; [eg: ] exactly, but not the one used afterwards by openmpi
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - The application was compiled with the same version of Open MPI?
</span><br>
<span class="quotelev2">&gt;&gt; [eg: ] yes, version 1.4.4 for all
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Does the application start something on its own besides the tasks granted by mpiexec/orterun?
</span><br>
<span class="quotelev2">&gt;&gt; [eg: ] no
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You want 12 ranks in total, and to barney.fft and carl.fft there are also &quot;-mca orte_ess_num_procs 3 &quot; given in to the qrsh_starter. In total I count only 10 ranks in this example given - 4+4+2 - do you observe the same?
</span><br>
<span class="quotelev2">&gt;&gt; [eg: ] i don't know why the -mca orte_ess_num_procs 3 is added here...
</span><br>
<span class="quotelev2">&gt;&gt; In the &quot;Map generated by mapping policy&quot; output in my last email, I see that 4 processes were started on each node (barney, carl and charlie), but yes, in the ps -elf output, two of them are missing for one node (barney)... sorry about that, a bad copy/paste. Here is the actual output for this node:
</span><br>
<span class="quotelev2">&gt;&gt; 2048 ?        Sl     3:33 /opt/sge/bin/lx-amd64/sge_execd
</span><br>
<span class="quotelev2">&gt;&gt; 27502 ?        Sl     0:00  \_ sge_shepherd-1416 -bg
</span><br>
<span class="quotelev2">&gt;&gt; 27503 ?        Ss     0:00      \_ /opt/sge/utilbin/lx-amd64/qrsh_starter /opt/sge/default/spool/barney/active_jobs/1416.1/1.barney
</span><br>
<span class="quotelev2">&gt;&gt; 27510 ?        S      0:00          \_ bash -c  PATH=/opt/openmpi-1.4.4/bin:$PATH ; export PATH ; LD_LIBRARY_PATH=/opt/openmpi-1.4.4/lib:$LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ;  /opt/openmpi-1.4.4/bin/orted -mca ess env -mca orte_ess_jobid 3800367104 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 3 --hnp-uri &quot;3800367104.0;tcp://192.168.0.20:57233&quot; --mca pls_gridengine_verbose 1 --mca ras_gridengine_show_jobid 1 --mca ras_gridengine_verbose 1
</span><br>
<span class="quotelev2">&gt;&gt; 27511 ?        S      0:00              \_ /opt/openmpi-1.4.4/bin/orted -mca ess env -mca orte_ess_jobid 3800367104 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 3 --hnp-uri 3800367104.0;tcp://192.168.0.20:57233 --mca pls_gridengine_verbose 1 --mca ras_gridengine_show_jobid 1 --mca ras_gridengine_verbose 1
</span><br>
<span class="quotelev2">&gt;&gt; 27512 ?        Rl    12:54                  \_ /opt/fft/actran_product/Actran_13.0.b.57333/bin/actranpy_mp --apl=/opt/fft/actran_product/Actran_13.0.b.57333 -e radiation -m 10000 --parallel=frequency --scratch=/scratch/cluster/1416 --inputfile=/home/jj/Projects/Toyota/REFERENCE_JPC/semi_green_PML_06/semi_green_coarse.edat
</span><br>
<span class="quotelev2">&gt;&gt; 27513 ?        Rl    12:54                  \_ /opt/fft/actran_product/Actran_13.0.b.57333/bin/actranpy_mp --apl=/opt/fft/actran_product/Actran_13.0.b.57333 -e radiation -m 10000 --parallel=frequency --scratch=/scratch/cluster/1416 --inputfile=/home/jj/Projects/Toyota/REFERENCE_JPC/semi_green_PML_06/semi_green_coarse.edat
</span><br>
<span class="quotelev2">&gt;&gt; 27514 ?        Rl    12:54                  \_ /opt/fft/actran_product/Actran_13.0.b.57333/bin/actranpy_mp --apl=/opt/fft/actran_product/Actran_13.0.b.57333 -e radiation -m 10000 --parallel=frequency --scratch=/scratch/cluster/1416 --inputfile=/home/jj/Projects/Toyota/REFERENCE_JPC/semi_green_PML_06/semi_green_coarse.edat
</span><br>
<span class="quotelev2">&gt;&gt; 27515 ?        Rl    12:53                  \_ /opt/fft/actran_product/Actran_13.0.b.57333/bin/actranpy_mp --apl=/opt/fft/actran_product/Actran_13.0.b.57333 -e radiation -m 10000 --parallel=frequency --scratch=/scratch/cluster/1416 --inputfile=/home/jj/Projects/Toyota/REFERENCE_JPC/semi_green_PML_06/semi_green_coarse.edat
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It looks like Open MPI is doing the right thing, but the applications decided to start in a different allocation.
</span><br>
<span class="quotelev2">&gt;&gt; [eg: ] if the &quot;Map generated by mapping policy&quot; is different than the sge allocation, then openmpi is not doing the right thing, don't you think ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does the application use OpenMP in addition or other kinds of threads? The suffix &quot;_mp&quot; in the name &quot;actranpy_mp&quot; makes me suspicious about it.
</span><br>
<span class="quotelev2">&gt;&gt; [eg: ] no, the suffix _mp stands for &quot;parallel&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18981.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Previous message:</strong> <a href="18979.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>In reply to:</strong> <a href="18979.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18981.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Reply:</strong> <a href="18981.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
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
