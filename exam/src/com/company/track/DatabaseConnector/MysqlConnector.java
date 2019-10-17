package com.company.track.DatabaseConnector;

public class MysqlConnector implements connect {
    String mysqlUserName = "admin";
    String mysqlPassword = "12345";
    Connection conn = DriverManager.getConnection(
            "//enter url"
    );
}
