    <?php
    $a="";$b="";

		$get=array();
		$ansdata=array();
		foreach($_REQUEST as $k=>$v)
		{
			$k=str_replace("_"," ",$k);
		array_push($get,$k,$v);
		}
		$csv = array_map('str_getcsv', file('file.csv'));
		
		$data=array();
		$col=$csv[0];
		for($i=1;$i<sizeof($csv);$i++)
		{
			$arr=array();
			$arr=array_combine($col,$csv[$i]);
			array_push($data,$arr);
				
		}

		
		$ans=$data; $f=0;
		if(isset($_REQUEST))
		{for($i=0;$i<sizeof($get);$i+=2)
			{
				
				
		if(array_key_exists($get[$i],$ans[0]))
		{
			if($i!=0)
				{
				$ansdata[sizeof($ansdata)]=array();
				}
				else
				{
				$ansdata[$i]=array();	
				}
			
			if($f==0)
			{
			
			for($j=0;$j<sizeof($ans);$j++)
			{
				
				if($ans[$j][$get[$i]]==$get[$i+1])
				{
					array_push($ansdata[sizeof($ansdata)-1],$ans[$j]);
					
					$f=1;
				
				}
			}
			}
			else
			{
			
			$ansdata2=($ansdata[sizeof($ansdata)-2]);
			
				for($j=0;$j<sizeof($ansdata2);$j++)
			{
				
			
				if($ansdata2[$j][$get[$i]]==$get[$i+1])
				{
					
					array_push($ansdata[sizeof($ansdata)-1],$ansdata2[$j]);
					
					$f=1;
					
				}
			}
				
			}
			
			
		}		
			}
		}

		echo json_encode($ansdata[sizeof($ansdata)-1]);
		
		?>