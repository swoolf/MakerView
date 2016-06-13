Set up Guide for Rpi Camera Node

- mount OwnCloud: https://www.northwestknowledge.net/cloud/core/doc/user/files/files.html
- install camera package:
sudo apt-get install fswebcam
- Add Camera program: camera.sh

    - Change location specific info
- Add folder to Owncloud/Locations
- Make executable:  sudo chmod +x scripts/camera.sh
- Edit Crontab:
    - crontab -e
    - */15 * * * * /home/pi/scripts/camera.sh 2>&1