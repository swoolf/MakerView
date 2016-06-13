#Camera 2/8 130pm
#Location="DR_Es"

time=$(TZ=America/New_York date +"%H%M")
time=${time#0}
if [ $time -lt 900 ]  || [ $time -gt 1800 ]
then
        echo  closed
        exit 1
else
        echo open
fi

DATE=$(TZ=America/New_York date +"%Y-%m-%d_%H%M")
fileName=$Location$DATE
folder=/home/pi/owncloud/Locations/DR_Es/

cd $folder/
fswebcam -r 1280x720 --no-banner -S 5 -F 5 --save $fileName.jpg
lastFile=$( ls -t | head -n1)

cd $folder/mostRecent/
rm *
cd $folder
cp $lastFile /home/pi/owncloud/Locations/DR_Es/mostRecent/