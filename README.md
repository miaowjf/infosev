

根据高速公路年报中的信息进行整合的信息查询系统，可以通过gps数据进行位置定位，对收费站的批复文件进行查询<br/>
1.收费项目查询：对收费项目具体情况查询，在进入收费项目明细页后可以查看相关批复文件;<br/>
2.收费项目变更查询：收费项目变更情况查询;<br/>
3.收费标准查询：对收费标准具体情况进行查询;<br/>
4.收费站管理信息查询：查询收费站的具体信息，在收费站明细页内可以查看具体的收费项目文件和收费站图片，并在地图上标出收费站具体位置;<br/>
5.路线查询：路线和路线编码的的对应关系;<br/>
6.收费路段查询：收费路段情况，起始位置、技术等级等;<br/>
7.监控设备信息查询：高速公路上摄像头的位置;<br/>
8.气象设备查询：高速公路上气象设备位置。<br/>




Documentation is at [docs/guide/README.md](docs/guide/README.md).


DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```
