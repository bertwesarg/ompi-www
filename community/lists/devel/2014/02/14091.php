<?
$subject_val = "Re: [OMPI devel] 1.7.5 fails on simple test";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 10 21:54:20 2014" -->
<!-- isoreceived="20140211025420" -->
<!-- sent="Mon, 10 Feb 2014 18:54:17 -0800" -->
<!-- isosent="20140211025417" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.5 fails on simple test" -->
<!-- id="CAAvDA16-LOoGse-47LygbydaCs3AChg=jyRusqroX1f61V1GYA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA15Dq5hSjfptWbAjRNkVB9xp00gSnSmKaU+sWxWhBGwEkA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.5 fails on simple test<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-10 21:54:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14092.php">Andreas Sch�fer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Previous message:</strong> <a href="14090.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>In reply to:</strong> <a href="14080.php">Paul Hargrove: "Re: [OMPI devel] 1.7.5 fails on simple test"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All the platforms that failed over the weekend have passed today.
<br>
<p>-Paul
<br>
<p><p>On Mon, Feb 10, 2014 at 2:34 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The fastest of my systems that failed over the weekend (a ppc64)  has
</span><br>
<span class="quotelev1">&gt; completed tests successfully.
</span><br>
<span class="quotelev1">&gt; I will report on the ppc32 and SPARC results when they have all passed or
</span><br>
<span class="quotelev1">&gt; failed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Feb 10, 2014 at 1:52 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tarball is now posted
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 10, 2014, at 1:31 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Generating it now - sorry for my lack of response, my OMPI email was down
</span><br>
<span class="quotelev2">&gt;&gt; for some reason. I can now receive it, but still haven't gotten the backlog
</span><br>
<span class="quotelev2">&gt;&gt; from the down period.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 10, 2014, at 1:23 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you give me a heads-up when this makes it into a tarball, I will
</span><br>
<span class="quotelev2">&gt;&gt; retest my failing ppc and sparc platforms.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Feb 10, 2014 at 1:13 PM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have tracked this down.  There is a missing commit that affects
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_init.c causing it to initialize bml twice.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph, can you apply r30310 to 1.7?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *From:* devel [mailto:devel-bounces_at_[hidden]] *On Behalf Of *Rolf
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vandeVaart
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *Sent:* Monday, February 10, 2014 12:29 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *To:* Open MPI Developers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *Subject:* Re: [OMPI devel] 1.7.5 fails on simple test
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have seen this same issue although my core dump is a little bit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different.  I am running with tcp,self.  The first entry in the list of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BTLs is garbage, but then there is tcp and self in the list.   Strange.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is my core dump.  Line 208 in bml_r2.c is where I get the SEGV.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Program terminated with signal 11, Segmentation fault.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0  0x00007fb6dec981d0 in ?? ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Missing separate debuginfos, use: debuginfo-install
</span><br>
<span class="quotelev3">&gt;&gt;&gt; glibc-2.12-1.107.el6_4.5.x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) where
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0  0x00007fb6dec981d0 in ?? ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #1  &lt;signal handler called&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #2  0x00007fb6e82fff38 in main_arena () from /lib64/libc.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #3  0x00007fb6e4103de2 in mca_bml_r2_add_procs (nprocs=2,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; procs=0x2061440, reachable=0x7fff80487b40)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     at ../../../../../ompi/mca/bml/r2/bml_r2.c:208
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #4  0x00007fb6df50a751 in mca_pml_ob1_add_procs (procs=0x2060bc0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nprocs=2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     at ../../../../../ompi/mca/pml/ob1/pml_ob1.c:332
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #5  0x00007fb6e8570dca in ompi_mpi_init (argc=1, argv=0x7fff80488158,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; requested=0, provided=0x7fff80487cc8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     at ../../ompi/runtime/ompi_mpi_init.c:776
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #6  0x00007fb6e85a3606 in PMPI_Init (argc=0x7fff80487d8c,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; argv=0x7fff80487d80) at pinit.c:84
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #7  0x0000000000401c56 in main (argc=1, argv=0x7fff80488158) at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Isend_ator_c.c:143
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #3  0x00007fb6e4103de2 in mca_bml_r2_add_procs (nprocs=2,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; procs=0x2061440, reachable=0x7fff80487b40)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     at ../../../../../ompi/mca/bml/r2/bml_r2.c:208
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 208                 rc = btl-&gt;btl_add_procs(btl, n_new_procs, new_procs,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_endpoints, reachable);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) print *btl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $1 = {btl_component = 0x7fb6e82ffee8, btl_eager_limit = 140423556234984,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_rndv_eager_limit = 140423556235000,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   btl_max_send_size = 140423556235000, btl_rdma_pipeline_send_length =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 140423556235016,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   btl_rdma_pipeline_frag_size = 140423556235016,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_min_rdma_pipeline_size = 140423556235032,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   btl_exclusivity = 3895459608, btl_latency = 32694, btl_bandwidth =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3895459624, btl_flags = 32694,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   btl_seg_size = 140423556235048, btl_add_procs = 0x7fb6e82fff38
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;main_arena+184&gt;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   btl_del_procs = 0x7fb6e82fff38 &lt;main_arena+184&gt;, btl_register =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0x7fb6e82fff48 &lt;main_arena+200&gt;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   btl_finalize = 0x7fb6e82fff48 &lt;main_arena+200&gt;, btl_alloc =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0x7fb6e82fff58 &lt;main_arena+216&gt;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   btl_free = 0x7fb6e82fff58 &lt;main_arena+216&gt;, btl_prepare_src =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0x7fb6e82fff68 &lt;main_arena+232&gt;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   btl_prepare_dst = 0x7fb6e82fff68 &lt;main_arena+232&gt;, btl_send =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0x7fb6e82fff78 &lt;main_arena+248&gt;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   btl_sendi = 0x7fb6e82fff78 &lt;main_arena+248&gt;, btl_put = 0x7fb6e82fff88
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;main_arena+264&gt;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   btl_get = 0x7fb6e82fff88 &lt;main_arena+264&gt;, btl_dump = 0x7fb6e82fff98
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;main_arena+280&gt;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   btl_mpool = 0x7fb6e82fff98, btl_register_error = 0x7fb6e82fffa8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;main_arena+296&gt;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   btl_ft_event = 0x7fb6e82fffa8 &lt;main_arena+296&gt;}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *From:* devel [mailto:devel-bounces_at_[hidden]&lt;devel-bounces_at_[hidden]&gt;]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *On Behalf Of *Mike Dubman
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *Sent:* Monday, February 10, 2014 4:23 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *To:* Open MPI Developers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *Subject:* [OMPI devel] 1.7.5 fails on simple test
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *$/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun -np 8 -mca pml ob1 -mca btl self,tcp /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/examples/hello_usempi*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12724] *** Process received signal ****
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12724] Signal: Segmentation fault (11)*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12724] Signal code:  (128)*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12724] Failing at address: (nil)*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12724] [ 0] /lib64/libpthread.so.0[0x3937c0f500]*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12724] [ 1] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_btl_tcp.so(mca_btl_tcp_component_init+0x583)[0x7ffff395f813]*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12724] [ 2] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi.so.1(mca_btl_base_select+0x117)[0x7ffff78e14a7]*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12724] [ 3] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_bml_r2.so(mca_bml_r2_component_init+0x12)[0x7ffff3ded6f2]*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12724] [ 4] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi.so.1(mca_bml_base_init+0x99)[0x7ffff78e0cc9]*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12724] [ 5] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_pml_ob1.so(+0x51d8)[0x7ffff37481d8]*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12724] [ 6] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi.so.1(mca_pml_base_select+0x1e0)[0x7ffff78f31e0]*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12724] [ 7] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi.so.1(ompi_mpi_init+0x52b)[0x7ffff78bffdb]*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12724] [ 8] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi.so.1(MPI_Init+0x170)[0x7ffff78d4210]*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12724] [ 9] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi_mpifh.so.2(PMPI_Init_f08+0x25)[0x7ffff7b71c25]*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12724] [10] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/examples/hello_usempi[0x400c0b]*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12724] [11] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/examples/hello_usempi[0x400d4a]*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12724] [12] /lib64/libc.so.6(__libc_start_main+0xfd)[0x393741ecdd]*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12724] [13] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/examples/hello_usempi[0x400b29]*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12724] *** End of error message ****
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12731] *** Process received signal ****
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12731] Signal: Segmentation fault (11)*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12731] Signal code:  (128)*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12731] Failing at address: (nil)*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12731] [ 0] /lib64/libpthread.so.0[0x3937c0f500]*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12731] [ 1] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_btl_tcp.so(mca_btl_tcp_component_init+0x583)[0x7ffff395f813]*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12731] [ 2] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi.so.1(mca_btl_base_select+0x117)[0x7ffff78e14a7]*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12731] [ 3] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_bml_r2.so(mca_bml_r2_component_init+0x12)[0x7ffff3ded6f2]*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12731] [ 4] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi.so.1(mca_bml_base_init+0x99)[0x7ffff78e0cc9]*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12731] [ 5] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_pml_ob1.so(+0x51d8)[0x7ffff37481d8]*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12731] [ 6] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi.so.1(mca_pml_base_select+0x1e0)[0x7ffff78f31e0]*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12731] [ 7] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi.so.1(ompi_mpi_init+0x52b)[0x7ffff78bffdb]*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12731] [ 8] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi.so.1(MPI_Init+0x170)[0x7ffff78d4210]*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12731] [ 9] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi_mpifh.so.2(PMPI_Init_f08+0x25)[0x7ffff7b71c25]*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12731] [10] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/examples/hello_usempi[0x400c0b]*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12731] [11] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/examples/hello_usempi[0x400d4a]*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12731] [12] /lib64/libc.so.6(__libc_start_main+0xfd)[0x393741ecdd]*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12731] [13] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/examples/hello_usempi[0x400b29]*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *[vegas12:12731] *** End of error message ****
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *--------------------------------------------------------------------------*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *mpirun noticed that process rank 0 with PID 12724 on node vegas12 exited on signal 11 (Segmentation fault).*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *--------------------------------------------------------------------------*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *jenkins_at_vegas12 ~*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This email message is for the sole use of the intended recipient(s) and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; may contain confidential information.  Any unauthorized review, use,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; disclosure or distribution is prohibited.  If you are not the intended
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recipient, please contact the sender by reply email and destroy all copies
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of the original message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14091/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14092.php">Andreas Sch�fer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Previous message:</strong> <a href="14090.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>In reply to:</strong> <a href="14080.php">Paul Hargrove: "Re: [OMPI devel] 1.7.5 fails on simple test"</a>
<!-- nextthread="start" -->
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
