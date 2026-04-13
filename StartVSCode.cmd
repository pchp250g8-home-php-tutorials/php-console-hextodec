@echo off
set VSCODEPATH=%ProgramFiles%\Microsoft VS Code
set PHP_ROOT=%SystemDrive%\php
set PATH=%PHP_ROOT%;%PATH%
set PATH=%VSCODEPATH%;%PATH%
start "" Code .