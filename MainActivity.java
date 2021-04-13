package com.example.kenshu;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    private TextView textView;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        //ボタンを設定
        Button followUp = findViewById(R.id.followUp);
        Button followDown = findViewById(R.id.followDown);

        //TextViewの設定
        textView = findViewById(R.id.countFollowers);


        //FollowUpが押された時
        followUp.setOnClickListener( new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                //textViewから取得してintに変換
                int num = Integer.parseInt(textView.getText().toString());
               //1を足す
                num ++;
                textView.setText(String.valueOf(num));
            }
        });


        //FollowDownが押された時
        followDown.setOnClickListener( new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                //textViewから取得してintに変換
                int num = Integer.parseInt(textView.getText().toString());
                //1を引く
                num --;

                //マイナスにならない
                if (num <= 0){
                    num = 0;
                }

                textView.setText(String.valueOf(num));
            }
        });


    }
}