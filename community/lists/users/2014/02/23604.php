<?
$subject_val = "Re: [OMPI users] one more finding in openmpi-1.7.5a1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 13 23:35:40 2014" -->
<!-- isoreceived="20140214043540" -->
<!-- sent="Fri, 14 Feb 2014 13:35:18 +0900" -->
<!-- isosent="20140214043518" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] one more finding in openmpi-1.7.5a1" -->
<!-- id="OF3DBA97CF.F03041EB-ON49257C7F.0019065E-49257C7F.00194394_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF6FCC2B47.20546C3E-ON49257C7F.001615B1-49257C7F.00165BF1_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] one more finding in openmpi-1.7.5a1<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20one%20more%20finding%20in%20openmpi-1.7.5a1"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-02-13 23:35:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23605.php">Mike Dubman: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Previous message:</strong> <a href="23603.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>In reply to:</strong> <a href="23603.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23605.php">Mike Dubman: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Reply:</strong> <a href="23605.php">Mike Dubman: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, one more shot - byslot was dropped!
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == spec) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* check for map-by object directives - we set the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* ranking to match if one was given
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ORTE_MAPPING_GIVEN &amp; ORTE_GET_MAPPING_DIRECTIVE(mapping)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ORTE_MAPPING_BYSLOT == ORTE_GET_MAPPING_POLICY(mapping)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_SLOT);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (ORTE_MAPPING_BYNODE == ORTE_GET_MAPPING_POLICY
<br>
(mapping)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_NODE);
<br>
#if OPAL_HAVE_HWLOC
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (ORTE_MAPPING_BYCORE == ORTE_GET_MAPPING_POLICY
<br>
(mapping)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_CORE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (ORTE_MAPPING_BYL1CACHE == ORTE_GET_MAPPING_POLICY
<br>
(mapping)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_L1CACHE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (ORTE_MAPPING_BYL2CACHE == ORTE_GET_MAPPING_POLICY
<br>
(mapping)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_L2CACHE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (ORTE_MAPPING_BYL3CACHE == ORTE_GET_MAPPING_POLICY
<br>
(mapping)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_L3CACHE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (ORTE_MAPPING_BYSOCKET == ORTE_GET_MAPPING_POLICY
<br>
(mapping)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_SOCKET);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (ORTE_MAPPING_BYNUMA == ORTE_GET_MAPPING_POLICY
<br>
(mapping)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_NUMA);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (ORTE_MAPPING_BYBOARD == ORTE_GET_MAPPING_POLICY
<br>
(mapping)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_BOARD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (ORTE_MAPPING_BYHWTHREAD == ORTE_GET_MAPPING_POLICY
<br>
(mapping)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_HWTHREAD);
<br>
#endif
<br>
<p>Tetusya Mishima
<br>
<p><span class="quotelev1">&gt; I've found it. Please add 2 lines(770, 771) in rmaps_base_frame.c:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 747      if (NULL == spec) {
</span><br>
<span class="quotelev1">&gt; 748          /* check for map-by object directives - we set the
</span><br>
<span class="quotelev1">&gt; 749           * ranking to match if one was given
</span><br>
<span class="quotelev1">&gt; 750           */
</span><br>
<span class="quotelev1">&gt; 751          if (ORTE_MAPPING_GIVEN &amp; ORTE_GET_MAPPING_DIRECTIVE
</span><br>
<span class="quotelev1">&gt; (mapping)) {
</span><br>
<span class="quotelev1">&gt; 752              if (ORTE_MAPPING_BYCORE == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev1">&gt; (mapping)) {
</span><br>
<span class="quotelev1">&gt; 753                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_CORE);
</span><br>
<span class="quotelev1">&gt; 754              } else if (ORTE_MAPPING_BYNODE ==
</span><br>
<span class="quotelev1">&gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev1">&gt; 755                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_NODE);
</span><br>
<span class="quotelev1">&gt; 756              } else if (ORTE_MAPPING_BYL1CACHE ==
</span><br>
<span class="quotelev1">&gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev1">&gt; 757                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_L1CACHE);
</span><br>
<span class="quotelev1">&gt; 758              } else if (ORTE_MAPPING_BYL2CACHE ==
</span><br>
<span class="quotelev1">&gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev1">&gt; 759                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_L2CACHE);
</span><br>
<span class="quotelev1">&gt; 760              } else if (ORTE_MAPPING_BYL3CACHE ==
</span><br>
<span class="quotelev1">&gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev1">&gt; 761                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_L3CACHE);
</span><br>
<span class="quotelev1">&gt; 762              } else if (ORTE_MAPPING_BYSOCKET ==
</span><br>
<span class="quotelev1">&gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev1">&gt; 763                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_SOCKET);
</span><br>
<span class="quotelev1">&gt; 764              } else if (ORTE_MAPPING_BYNUMA ==
</span><br>
<span class="quotelev1">&gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev1">&gt; 765                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_NUMA);
</span><br>
<span class="quotelev1">&gt; 766              } else if (ORTE_MAPPING_BYBOARD ==
</span><br>
<span class="quotelev1">&gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev1">&gt; 767                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_BOARD);
</span><br>
<span class="quotelev1">&gt; 768              } else if (ORTE_MAPPING_BYHWTHREAD ==
</span><br>
<span class="quotelev1">&gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev1">&gt; 769                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev1">&gt; ORTE_RANK_BY_HWTHREAD);
</span><br>
<span class="quotelev1">&gt; 770              } else if (ORTE_MAPPING_PPR == ORTE_GET_MAPPING_POLICY
</span><br>
<span class="quotelev1">&gt; (mapping)) {
</span><br>
<span class="quotelev1">&gt; 771                  ORTE_SET_RANKING_POLICY(tmp, ORTE_RANK_BY_SLOT);
</span><br>
<span class="quotelev1">&gt; 772              }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; You are welcome, Ralph.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But, after fixing it, I'm facing another problem whin I use ppr option:
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_manage openmpi-1.7.4]$ mpirun -np 2 -map-by ppr:1:socket
</span><br>
<span class="quotelev1">&gt; -bind-to
</span><br>
<span class="quotelev2">&gt; &gt; socket -report-bindings ~/mis/openmpi/demos/m
</span><br>
<span class="quotelev2">&gt; &gt; yprog
</span><br>
<span class="quotelev2">&gt; &gt; [manage.cluster:28057] [[25570,0],0] ORTE_ERROR_LOG: Not implemented in
</span><br>
<span class="quotelev2">&gt; &gt; file rmaps_ppr.c at line 389
</span><br>
<span class="quotelev2">&gt; &gt; [manage.cluster:28057] [[25570,0],0] ORTE_ERROR_LOG: Not implemented in
</span><br>
<span class="quotelev2">&gt; &gt; file base/rmaps_base_map_job.c at line 285
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I confirmed it worked when it reverted back.
</span><br>
<span class="quotelev2">&gt; &gt; I'm a little bit confused. Could you take a look?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks - these used to be bitmaps, but changed when we started
</span><br>
getting
<br>
<span class="quotelev1">&gt; so
</span><br>
<span class="quotelev2">&gt; &gt; many options. Sadly, they are very rarely used, so bugs like this can
</span><br>
go
<br>
<span class="quotelev2">&gt; &gt; unnoticed for long times. Appreciate you taking such
</span><br>
<span class="quotelev3">&gt; &gt; &gt; a close look at them.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Ralph
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Feb 13, 2014, at 4:55 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hi Ralph,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I would report one more finding in openmpi-1.7.5a1.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Because ORTE_MAPPING_BY...s are not a bit field expression,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; at orte_rmaps_base_set_ranking_policy in rmaps_base_frame.c
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; you should not use &quot;&amp;&quot; to compare them:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   747      if (NULL == spec) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   748          /* check for map-by object directives - we set the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   749           * ranking to match if one was given
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   750           */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   751          if (ORTE_MAPPING_GIVEN &amp; ORTE_GET_MAPPING_DIRECTIVE
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (mapping)) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   752              if (ORTE_MAPPING_BYCORE ==
</span><br>
ORTE_GET_MAPPING_POLICY
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (mapping)) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   753                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev1">&gt; ORTE_RANK_BY_CORE);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   754              } else if (ORTE_MAPPING_BYNODE ==
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   755                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev1">&gt; ORTE_RANK_BY_NODE);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   756              } else if (ORTE_MAPPING_BYL1CACHE ==
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   757                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_RANK_BY_L1CACHE);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   758              } else if (ORTE_MAPPING_BYL2CACHE ==
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   759                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_RANK_BY_L2CACHE);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   760              } else if (ORTE_MAPPING_BYL3CACHE ==
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   761                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_RANK_BY_L3CACHE);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   762              } else if (ORTE_MAPPING_BYSOCKET ==
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   763                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_RANK_BY_SOCKET);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   764              } else if (ORTE_MAPPING_BYNUMA ==
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   765                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev1">&gt; ORTE_RANK_BY_NUMA);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   766              } else if (ORTE_MAPPING_BYBOARD ==
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   767                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_RANK_BY_BOARD);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   768              } else if (ORTE_MAPPING_BYHWTHREAD ==
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ORTE_GET_MAPPING_POLICY(mapping)) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   769                  ORTE_SET_RANKING_POLICY(tmp,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ORTE_RANK_BY_HWTHREAD);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   770              }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Tetsuya Mishima
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="23605.php">Mike Dubman: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Previous message:</strong> <a href="23603.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>In reply to:</strong> <a href="23603.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23605.php">Mike Dubman: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Reply:</strong> <a href="23605.php">Mike Dubman: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
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
