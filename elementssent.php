<?php
	header("Content-Type:text/html;charset=utf-8");
		require("conn_mysql.php");
	if(isset($_POST['NewData']))
	{
		$SQL_NewDATA="SELECT * FROM `candidate` WHERE `Class`=\"".$_POST['class']."\"and`Time`=\"".$_POST['time']."\"and`Round`=\"".$_POST['round']."\"";

		$NewDATA_result_status=mysqli_query($db_link,$SQL_NewDATA) or die("查詢失敗");
		$sql_updatedata="";
		while ($NewDATA_rowres = mysqli_fetch_array($NewDATA_result_status, MYSQLI_BOTH))
		{
			if($NewDATA_rowres [6]=="開始面試")
				$sql_updatedata="UPDATE  `candidate` SET `CheckIn`=\"回饋填寫中\",`T1_Q1_Score`=\"".$_POST[$NewDATA_rowres[0]."_t1_q1_score"]."\",`T1_Q1_Notice`=\"".$_POST[$NewDATA_rowres[0]."_t1_q1_notice"]."\",`T2_Q1_Score`=\"".$_POST[$NewDATA_rowres[0]."_t2_q1_score"]."\",`T2_Q1_Notice`=\"".$_POST[$NewDATA_rowres[0]."_t2_q1_notice"]."\",`T1_Q2_Score`=\"".$_POST[$NewDATA_rowres[0]."_t1_q2_score"]."\",`T1_Q2_Notice`=\"".$_POST[$NewDATA_rowres[0]."_t1_q2_notice"]."\",`T2_Q2_Score`=\"".$_POST[$NewDATA_rowres[0]."_t2_q2_score"]."\",`T2_Q2_Notice`=\"".$_POST[$NewDATA_rowres[0]."_t2_q2_notice"]."\",`T1_Q3_Score`=\"".$_POST[$NewDATA_rowres[0]."_t1_q3_score"]."\",`T1_Q3_Notice`=\"".$_POST[$NewDATA_rowres[0]."_t1_q3_notice"]."\",`T2_Q3_Score`=\"".$_POST[$NewDATA_rowres[0]."_t2_q3_score"]."\",`T2_Q3_Notice`=\"".$_POST[$NewDATA_rowres[0]."_t2_q3_notice"]."\",`T1_Q4_Score`=\"".$_POST[$NewDATA_rowres[0]."_t1_q4_score"]."\",`T1_Q4_Notice`=\"".$_POST[$NewDATA_rowres[0]."_t1_q4_notice"]."\",`T2_Q4_Score`=\"".$_POST[$NewDATA_rowres[0]."_t2_q4_score"]."\",`T2_Q4_Notice`=\"".$_POST[$NewDATA_rowres[0]."_t2_q4_notice"]."\" WHERE `ExamID`=\"".$NewDATA_rowres[0]."\"";
			else
				$sql_updatedata="UPDATE  `candidate` SET `T1_Q1_Score`=\"".$_POST[$NewDATA_rowres[0]."_t1_q1_score"]."\",`T1_Q1_Notice`=\"".$_POST[$NewDATA_rowres[0]."_t1_q1_notice"]."\",`T2_Q1_Score`=\"".$_POST[$NewDATA_rowres[0]."_t2_q1_score"]."\",`T2_Q1_Notice`=\"".$_POST[$NewDATA_rowres[0]."_t2_q1_notice"]."\",`T1_Q2_Score`=\"".$_POST[$NewDATA_rowres[0]."_t1_q2_score"]."\",`T1_Q2_Notice`=\"".$_POST[$NewDATA_rowres[0]."_t1_q2_notice"]."\",`T2_Q2_Score`=\"".$_POST[$NewDATA_rowres[0]."_t2_q2_score"]."\",`T2_Q2_Notice`=\"".$_POST[$NewDATA_rowres[0]."_t2_q2_notice"]."\",`T1_Q3_Score`=\"".$_POST[$NewDATA_rowres[0]."_t1_q3_score"]."\",`T1_Q3_Notice`=\"".$_POST[$NewDATA_rowres[0]."_t1_q3_notice"]."\",`T2_Q3_Score`=\"".$_POST[$NewDATA_rowres[0]."_t2_q3_score"]."\",`T2_Q3_Notice`=\"".$_POST[$NewDATA_rowres[0]."_t2_q3_notice"]."\",`T1_Q4_Score`=\"".$_POST[$NewDATA_rowres[0]."_t1_q4_score"]."\",`T1_Q4_Notice`=\"".$_POST[$NewDATA_rowres[0]."_t1_q4_notice"]."\",`T2_Q4_Score`=\"".$_POST[$NewDATA_rowres[0]."_t2_q4_score"]."\",`T2_Q4_Notice`=\"".$_POST[$NewDATA_rowres[0]."_t2_q4_notice"]."\" WHERE `ExamID`=\"".$NewDATA_rowres[0]."\"";
				
			$update_data=mysqli_query($db_link,$sql_updatedata);
		}
		echo"<script language=\"JavaScript\">alert('分數登記完成');location.href=\"elements.php\";</script>";
	}
?>
