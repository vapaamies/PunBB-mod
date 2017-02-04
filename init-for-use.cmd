@echo off
mklink /j "%~dp0src\style" "%~dp0style"
mklink /h "%~dp0src\favicon.ico" "%~dp0style\favicon.ico"