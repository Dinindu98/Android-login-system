package com.company.track;

import com.company.track.DatabaseConnector.MysqlConnector;
import com.company.track.ProjectRecord.ProjectRecord;

import java.sql.*;

public enum MysqlprojectStore {

    public ProjectRecord get(String projId) throws SQLException {
        String query = "SELECT * FROM PROJECT WHERE ID =" + projId;

        MysqlConnector mysqlConnector = new MysqlConnector();
        Connection conn = mysqlConnector.connect();

        Statement s = conn.createStatement();
        ResultSet resultSet = s.executeQuery(query);

        while (resultSet.next()){
            com.company.track.ProjectRecord.ProjectRecord projectRecord = new ProjectRecord();
            projectRecord.id = resultSet.getString("projectId");    //tight coupling (don't create object inside of its class) (no function so no cohension)
            projectRecord.title = resultSet.getString("title");
            projectRecord.clientId = resultSet.getString("clientId");
            projectRecord.duration = resultSet.getInt("duration");
            projectRecord.rate = resultSet.getInt("rate");
            projectRecord.numberOfAllocat  edResorces = resultSet.getInt("numberOfAllocatedResources");
            projectRecord.type = resultSet.getString("type");
            retur

































































































































































































                   }
        return null;
    }

}
