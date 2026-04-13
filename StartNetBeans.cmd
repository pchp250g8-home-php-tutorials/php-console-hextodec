@echo off
set NETBEANS_PATH=%ProgramFiles(X86)%\NetBeans
set PHP_ROOT=%SystemDrive%\php
set PATH=%PHP_ROOT%;%PATH%
set PATH=%NETBEANS_PATH%\bin;%PATH%
start "" NetBeans64 %~dp0