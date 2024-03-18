[0;1;32m●[0m nginx.service - A high performance web server and a reverse proxy server
     Loaded: loaded (/lib/systemd/system/nginx.service; enabled; vendor preset: enabled)
     Active: [0;1;32mactive (running)[0m since Wed 2024-03-06 10:47:06 IST; 2min 13s ago
       Docs: man:nginx(8)
    Process: 830 ExecStartPre=/usr/sbin/nginx -t -q -g daemon on; master_process on; (code=exited, status=0/SUCCESS)
    Process: 877 ExecStart=/usr/sbin/nginx -g daemon on; master_process on; (code=exited, status=0/SUCCESS)
   Main PID: 883 (nginx)
      Tasks: 5 (limit: 18785)
     Memory: 10.4M
     CGroup: /system.slice/nginx.service
             ├─883 nginx: master process /usr/sbin/nginx -g daemon on; master_process on;
             ├─884 nginx: worker process
             ├─885 nginx: worker process
             ├─886 nginx: worker process
             └─887 nginx: worker process

Mar 06 10:47:06 shirishjaiswal-Vostro-15-3510 systemd[1]: Starting A high performance web server and a reverse proxy server...
Mar 06 10:47:06 shirishjaiswal-Vostro-15-3510 systemd[1]: Started A high performance web server and a reverse proxy server.
