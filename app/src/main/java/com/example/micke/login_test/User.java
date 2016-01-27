package com.example.micke.login_test;

/**
 * Created by Micke on 2016-01-23.
 */
public class User {
    String name,username,password;
    int age;

    public User(String name, String username, String password, int age) {
        this.name = name;
        this.username = username;
        this.password = password;
        this.age = age;
    }

    public User(String username, String password) {
        this.name = "";
        this.username = username;
        this.password = password;
        this.age = -1;
    }


}
