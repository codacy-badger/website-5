<?php

	$title = 'Xmetalfanx FAQ Section - What to do with Bad Installers'
	$the_content = <<<EOD
   
  <p class="header"> How do I uninstall a program that gives me &quot;the catch 22&quot;?       
    <img src="../../smiles/mad/av-1.gif" alt="Yes-No Arguing GIF" width="127"           height="67" />  </p>        
  <p>For those programs that can not be reinstalled, remove, uninstalled, ...etc etc </p>        
 
  <ol>          
    <li>First you can try a program such as &quot;Your Uninstaller&quot;             
    <ul>              
      <li>This program can try to &quot;force&quot; the   uninstall&quot;.... which is alot simpler then other ways, i am  about to describe, 
      however these programs are not free (the good   ones i have seen)<br />   <br />  </li>            
    </ul>          
    </li>        
  </ol>        
  <p>If your uninstaller is still being bad on you ... <img src="../../smiles/group/spank.gif" alt="Spank Smilie" width="50" height="44" />  </p>        
  <ol>          
    <li>Using Install.log files.  </li>        
  </ol>        
  <ul>          
    <li>More then likely the error you will see in uninstalling is    &quot;install.log can not be located&quot;,but if that is not the case....              
    <ol>              
      <li>Go to the folder of the program you want to remove (lets use Yahoo Messenger just for an example)
      </li>              
      <li>Open &quot;Install.log&quot; in a text editor.... This file  will tell you what files were installed as well as registry               entries
      </li>              
      <li>You can manually remove the files and in some cases the registry entries, however, the registry entry items can be  cleaned with a free program 
      that, even for advanced users,   makes things much easier                               
      <ul>                  
        <li><strong>
          <a href=  "http://www.321download.com/LastFreeware/index.html#RegCleaner"  target="_blank">JV 16 Power Tools last freeware (it has   
          reg cleaner in it)</a></strong> 
        </li>                  
        <li><strong>
          <a href= "http://www.321download.com/LastFreeware/index.html#RegCleaner" target="_blank">Reg Cleaner</a></strong>
        </li>                
      </ul>              
      </li>              
      <li>Open Jv16 Power tools (whether your using Reg cleaner or   jv16 (with Reg cleaner built in), the way you get to the registry menu may vary, but if you even reading this tutorial                   to really try doing all this, your advanced enough to find               it...
      </li>              
      <li>           	  click 
      <span class="boldText">Registry Tools..
      </span>..             	  
      <p class="justify">Sort by &quot;author&quot; and look for anything  &quot;yahoo&quot; ... do the same by sorting by   &quot;software&quot; 
      and look for &quot;yahoo&quot; - ... if                   you have &quot;yahoo media player&quot; or &quot;yahoo                   companion&quot;, you may want to leave some of those entries,                   but if your not even sure what yahoo companion is, and you                   just want messenger, you can remove it anyway.... it is a                   personal choose i guess.. 
      </p>              
      </li>              
      <li>Go back to the parent of the installed programs&#39;   folder (Ex C:/Program files/Yahoo messenger would mean go to                 C:/Program Files/) and if &quot;yahoo messenger&quot; or                 &quot;~~~/Program Files/Yahoo/Messenger&quot; still exists,                 delete it. 
      </li>              
      <li>This should already be done by i will say this just in  case it has not.... look in your startup programs (from the  registry tools window, 
      click the second one down, called   &quot;startup programs&quot; ... look to see if yahoo messenger is still there...
       if there is, remove this or you   might see &quot;messanger.exe can not be found&quot;  every time you boot-up after this 
      </li>              
      <li>
      <img src="../../smiles/shock/wow.gif" alt="wow smile" width="18"  height="20" /> 
      attempt reinstall of yahoo messenger (or   whatever program you wanted to remove to start with) and                 
      your all set ... if you don&#39;t want to reinstall anyway,                 that's fine too. 
      </li>            
    </ol>          
    </li>        
  </ul>     
   
EOD;
?>
<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/tech/baseTechCenterTemplate.php"); ?>
