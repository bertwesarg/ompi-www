<?
$subject_val = "Re: [OMPI users] error openmpi check hdf5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 07:06:12 2016" -->
<!-- isoreceived="20160210120612" -->
<!-- sent="Wed, 10 Feb 2016 16:12:28 +0400" -->
<!-- isosent="20160210121228" -->
<!-- name="Delphine Ramalingom" -->
<!-- email="delphine.ramalingom_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error openmpi check hdf5" -->
<!-- id="56BB292C.5080108_at_univ-reunion.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56BB2410.6020105_at_central.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] error openmpi check hdf5<br>
<strong>From:</strong> Delphine Ramalingom (<em>delphine.ramalingom_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-10 07:12:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28493.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Previous message:</strong> <a href="28491.php">Peter Wind: "Re: [OMPI users] error openmpi check hdf5"</a>
<li><strong>In reply to:</strong> <a href="28489.php">Edgar Gabriel: "Re: [OMPI users] error openmpi check hdf5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28494.php">Gilles Gouaillardet: "Re: [OMPI users] error openmpi check hdf5"</a>
<li><strong>Reply:</strong> <a href="28494.php">Gilles Gouaillardet: "Re: [OMPI users] error openmpi check hdf5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's version 1.8.1.
<br>
Regards
<br>
Delphine
<br>
<p><p>&lt;<a href="http://www.univ-reunion.fr">http://www.univ-reunion.fr</a>&gt; *Delphine Ramalingom Barbary | Ing&#233;nieure 
<br>
en Calcul Scientifique *
<br>
Direction des Usages du Num&#233;rique (DUN)
<br>
Centre de D&#233;veloppement du Calcul Scientifique
<br>
TEL : 02 62 93 84 87- FAX : 02 62 93 81 06
<br>
Le 10/02/2016 15:50, Edgar Gabriel a &#233;crit :
<br>
<span class="quotelev1">&gt; which version of Open MPI is this?
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/10/2016 4:13 AM, Delphine Ramalingom wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I try to compile a parallel version of hdf5.
</span><br>
<span class="quotelev2">&gt;&gt; I have error messages when I check with openmpi.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Support on HDF5 told me that the errors seem related to the new ompio 
</span><br>
<span class="quotelev2">&gt;&gt; implementation inside
</span><br>
<span class="quotelev2">&gt;&gt; open MPI for MPI-I/O. He suggests that I talk to the OMPI mailing 
</span><br>
<span class="quotelev2">&gt;&gt; list to resolve  these errors.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For information, my version of openmpi is : gcc (GCC) 4.8.2
</span><br>
<span class="quotelev2">&gt;&gt; mpicc --showme
</span><br>
<span class="quotelev2">&gt;&gt; gcc -I/programs/Compilateurs2/usr/include -pthread -Wl,-rpath 
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,/programs/Compilateurs2/usr/lib -Wl,--enable-new-dtags 
</span><br>
<span class="quotelev2">&gt;&gt; -L/programs/Compilateurs2/usr/lib -lmpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Errors are :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; .../hdf5-1.8.16_gnu/testpar/.libs/t_mpi: symbol lookup error: 
</span><br>
<span class="quotelev2">&gt;&gt; /programs/Compilateurs2/usr/lib/openmpi/mca_fcoll_two_phase.so: 
</span><br>
<span class="quotelev2">&gt;&gt; undefined symbol: ompi_io_ompio_decode_datatype
</span><br>
<span class="quotelev2">&gt;&gt; .../hdf5-1.8.16_gnu/testpar/.libs/t_mpi: symbol lookup error: 
</span><br>
<span class="quotelev2">&gt;&gt; /programs/Compilateurs2/usr/lib/openmpi/mca_fcoll_two_phase.so: 
</span><br>
<span class="quotelev2">&gt;&gt; undefined symbol: ompi_io_ompio_decode_datatype
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev2">&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; .../hdf5-1.8.16_gnu/testpar/.libs/t_mpi: symbol lookup error: 
</span><br>
<span class="quotelev2">&gt;&gt; /programs/Compilateurs2/usr/lib/openmpi/mca_fcoll_two_phase.so: 
</span><br>
<span class="quotelev2">&gt;&gt; undefined symbol: ompi_io_ompio_set_aggregator_props
</span><br>
<span class="quotelev2">&gt;&gt; .../hdf5-1.8.16_gnu/testpar/.libs/t_mpi: symbol lookup error: 
</span><br>
<span class="quotelev2">&gt;&gt; /programs/Compilateurs2/usr/lib/openmpi/mca_fcoll_two_phase.so: 
</span><br>
<span class="quotelev2">&gt;&gt; undefined symbol: ompi_io_ompio_set_aggregator_props
</span><br>
<span class="quotelev2">&gt;&gt; .../hdf5-1.8.16_gnu/testpar/.libs/t_mpi: symbol lookup error: 
</span><br>
<span class="quotelev2">&gt;&gt; /programs/Compilateurs2/usr/lib/openmpi/mca_fcoll_two_phase.so: 
</span><br>
<span class="quotelev2">&gt;&gt; undefined symbol: ompi_io_ompio_set_aggregator_props
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance for your help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt; Delphine
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://www.univ-reunion.fr">http://www.univ-reunion.fr</a>&gt; *Delphine Ramalingom Barbary | 
</span><br>
<span class="quotelev2">&gt;&gt; Ing&#233;nieure en Calcul Scientifique *
</span><br>
<span class="quotelev2">&gt;&gt; Direction des Usages du Num&#233;rique (DUN)
</span><br>
<span class="quotelev2">&gt;&gt; Centre de D&#233;veloppement du Calcul Scientifique
</span><br>
<span class="quotelev2">&gt;&gt; TEL : 02 62 93 84 87- FAX : 02 62 93 81 06
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Edgar Gabriel
</span><br>
<span class="quotelev1">&gt; Associate Professor
</span><br>
<span class="quotelev1">&gt; Parallel Software Technologies Lab<a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev1">&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev1">&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev1">&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev1">&gt; --
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28489.php">http://www.open-mpi.org/community/lists/users/2016/02/28489.php</a>
</span><br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28492/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-28492/logouru.png" alt="logouru.png">
<!-- attachment="logouru.png" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-28492/03-part" alt="picture">
<!-- attachment="03-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28493.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Previous message:</strong> <a href="28491.php">Peter Wind: "Re: [OMPI users] error openmpi check hdf5"</a>
<li><strong>In reply to:</strong> <a href="28489.php">Edgar Gabriel: "Re: [OMPI users] error openmpi check hdf5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28494.php">Gilles Gouaillardet: "Re: [OMPI users] error openmpi check hdf5"</a>
<li><strong>Reply:</strong> <a href="28494.php">Gilles Gouaillardet: "Re: [OMPI users] error openmpi check hdf5"</a>
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
