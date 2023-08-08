# cms  
１．なんとかしてconcretecmsインストール画面まで行き着く  
２．pullで入れるファイルを消す  
sudo rm -rf application packages composer.json composer.lock index.php robots.txt  
３．pullする  
git init .  
git remote add origin https://github.com/hidemikata/cms.git  
git pull origin main   
  
４．DBをリストアする（msyqlサーバにダンプファイルをコピーしてリストア）  
docker cp ./dump_file mysql_cont:/  
docker exec -it mysql_cont /bin/bash  
mysql -uroot -p cms < dump_file  
