<?php
namespace MRBS;

function print_theme_footer()
{
  echo "</div>\n";  // closing the contents div, opened in print_theme_header()
  echo "</body>\n";
  echo "<footer>Copyright &copy; <script>document.write(new Date().getFullYear())</script> <a href=\"#/\" target=\"_blank\" class=\"footer_lnk\">Sacred Heart College (Autonomous)</a> All rights reserved<br> Implemented by <a href=\"https://maheshpalamuttath.info/\" target=\"_blank\" class=\"footer_lnk\" rel=\"noopener\">Mahesh Palamuttath</a> </footer>\n";
  echo "</html>\n";
}

