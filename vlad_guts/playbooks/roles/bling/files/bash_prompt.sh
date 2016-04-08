# vim: ft=sh ts=4 sw=4
# Functions to generate a pretty useful bash prompt

# Check for interactive bash
[ -z "$BASH_VERSION" -a -z "$KSH_VERSION" -o -z "$PS1" ] && return

#
# Fancy PWD display function
#
# The home directory (HOME) is replaced with a ~
# The last pwdmaxlen characters of the PWD are displayed
# Leading partial directory names are striped off
# /home/me/stuff          -> ~/stuff               if USER=me
# /usr/share/big_dir_name -> ../share/big_dir_name if pwdmaxlen=20
#
bash_prompt_command() {
   # How many characters of the $PWD should be kept
   local pwdmaxlen=25;
   # Indicate that there has been dir truncation
   local trunc_symbol="..";
   local dir=${PWD##*/};
   pwdmaxlen=$(( ( pwdmaxlen < ${#dir} ) ? ${#dir} : pwdmaxlen ));
   NEW_PWD=${PWD/#$HOME/\~};
   local pwdoffset=$(( ${#NEW_PWD} - pwdmaxlen ));
   if [ ${pwdoffset} -gt "0" ];
   then
      NEW_PWD=${NEW_PWD:$pwdoffset:$pwdmaxlen};
      NEW_PWD=${trunc_symbol}/${NEW_PWD#*/};
   fi
   # Display git prompt if available.
   GIT_PS1='';
   if [ $(type -t '__git_ps1') ] && [ -n "${BLING_PS1_SHOWGIT-}" ];
   then
      GIT_PS1=$(__git_ps1);
   fi
   # Display drush prompt if available.
   DRUSH_PS1='';
   if [ $(type -t '__drush_ps1') ] && [ -n "${BLING_PS1_SHOWDRUSH-}" ];
   then
      DRUSH_PS1=$(__drush_ps1 " [%s]");
   fi
}

bash_prompt() {
   case $TERM in
      xterm*|rxvt*)
         local TITLEBAR='\[\033]0;\h:${NEW_PWD}${GIT_PS1-}${DRUSH_PS1-}\007\]';
         ;;
      *)
         local TITLEBAR="";
         ;;
   esac

   local NONE="\[\033[0m\]";  # unset fg colour

   # regular colors
   local K="\[\033[0;30m\]";  # black
   local R="\[\033[0;31m\]";  # red
   local G="\[\033[0;32m\]";  # green
   local Y="\[\033[0;33m\]";  # yellow
   local B="\[\033[0;34m\]";  # blue
   local M="\[\033[0;35m\]";  # magenta
   local C="\[\033[0;36m\]";  # cyan
   local W="\[\033[0;37m\]";  # white

   # emphasized (bolded) colors
   local EMK="\[\033[1;30m\]";
   local EMR="\[\033[1;31m\]";
   local EMG="\[\033[1;32m\]";
   local EMY="\[\033[1;33m\]";
   local EMB="\[\033[1;34m\]";
   local EMM="\[\033[1;35m\]";
   local EMC="\[\033[1;36m\]";
   local EMW="\[\033[1;37m\]";

   # background colors
   local BGK="\[\033[40m\]";
   local BGR="\[\033[41m\]";
   local BGG="\[\033[42m\]";
   local BGY="\[\033[43m\]";
   local BGB="\[\033[44m\]";
   local BGM="\[\033[45m\]";
   local BGC="\[\033[46m\]";
   local BGW="\[\033[47m\]";

   local AC=$EMK;  # apotropaic symbol color
   local UC=$G;    # user name's color
   local MC=$C;    # machine name's color
   local PC=$EMB;  # path's color
   local GC=$EMM;  # git information color
   local DC=$EMY;  # Drupal information color

   local APOT='✝'; # apotropaic symbol

   [ $UID -eq "0" ] && UC=$R     # root's color

   PS1="${TITLEBAR}\n${AC}${APOT} ${UC}\u${EMK}@${MC}\h ${AC}${APOT} ${PC}\${NEW_PWD}${GC}\${GIT_PS1-}${DC}\${DRUSH_PS1-}\n${UC}\\$ ${NONE}"
   # without colors: PS1="[\u@\h \${NEW_PWD}\${GIT_PS1-}\${DRUSH_PS1-}]\\$ "
   # extra backslash in front of closing \$ to make bash colorize the prompt
}

# Enable the prompt.
# Execute this command every time a prompt is drawn
export PROMPT_COMMAND=bash_prompt_command
# Define the text to display beside the prompt
bash_prompt
# Clean-up the functions we no-longer require
unset bash_prompt
