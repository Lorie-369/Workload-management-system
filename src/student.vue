<style scoped>
.layout {
  border: 1px solid #d7dde4;
  background: #f5f7f9;
  position: relative;
  border-radius: 4px;
  overflow: hidden;
}
.layout-breadcrumb {
  padding: 10px 15px 0;
}
.layout-content {
  min-height: 500px;
  margin: 15px;
  overflow: hidden;
  background: #fff;
  border-radius: 4px;
}
.layout-content-main {
  padding: 10px;
}
.layout-copy {
  text-align: center;
  padding: 10px 0 20px;
  color: #9ea7b4;
}
.layout-menu-left {
  background: #8391a5;
}
.layout-header {
  height: 60px;
  background: #fff;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
}
.layout-logo-left {
  width: 90%;
  height: 30px;
  background: #5b6270;
  border-radius: 3px;
  margin: 15px auto;
}
.layout-hide-text .layout-text {
  /*display: none;*/
}
.ivu-col {
  transition: width 0.2s ease-in-out;
}
.layout-ceiling {
  /*background: #464c5b;*/
  background: #a52a2a;
  padding: 10px 0;
  overflow: hidden;
  height: 50px;
}
.layout-ceiling-main {
  /*        position: absolute;
                left:120px;
                top:5px;*/
  float: right;
  /*position:absolute;*/
  margin-right: 15px;
  /*        height:20px;
                width: 100px;*/
  /*background-color: #8ce6b0;*/
}
.layout-ceiling-main a {
  color: white;
}
/*
        .demo-badge{
            width: 42px;
            height: 42px;
            background: #eee;
            border-radius: 6px;
            display: inline-block;
        }
    */
.rrr {
  position: absolute;
  left: 300px;
  height: 400px;
  width: 1600px;
}
.photo111 {
  position: absolute;
  /*background-color: #2d8cf0;*/
  left: 10px;
  height: 100px;
  width: 100px;
}
.photo222 {
  position: absolute;
  /*background-color: #8ce6b0;*/
  left: 120px;
  height: 100px;
  width: 100px;
}
.activity {
  border-radius: 8px;
  height: 40px;
  width: 465px;
  /*        background-color: #8ce6b0;*/
  margin: 10px;
  border: 1px solid gray;
}
.content1 {
  /*background-color: #8ce6b0;*/
  height: 20px;
  width: 180px;
  margin: 10px;
}
.content2 {
  position: absolute;
  left: 230px;
  top: 88px;
  /*background-color: #2d8cf0;*/
  height: 20px;
  width: 130px;
}
.content3 {
  position: absolute;
  left: 370px;
  top: 88px;
  /* background-color: #ed4014;*/
  height: 20px;
  width: 105px;
}
.content22 {
  position: absolute;
  left: 230px;
  top: 138px;
  /*        background-color: #2d8cf0;*/
  height: 20px;
  width: 130px;
}
.content33 {
  position: absolute;
  left: 370px;
  top: 138px;
  /*        background-color: #ed4014;*/
  height: 20px;
  width: 105px;
}
.content222 {
  position: absolute;
  left: 230px;
  top: 188px;
  /*        background-color: #2d8cf0;*/
  height: 20px;
  width: 130px;
}
.content333 {
  position: absolute;
  left: 370px;
  top: 188px;
  /*        background-color: #ed4014;*/
  height: 20px;
  width: 105px;
}
.content2222 {
  position: absolute;
  left: 230px;
  top: 238px;
  /*        background-color: #2d8cf0;*/
  height: 20px;
  width: 130px;
}
.content3333 {
  position: absolute;
  left: 370px;
  top: 238px;
  /*        background-color: #ed4014;*/
  height: 20px;
  width: 105px;
}
.content22222 {
  position: absolute;
  left: 230px;
  top: 288px;
  /*        background-color: #2d8cf0;*/
  height: 20px;
  width: 130px;
}
.content33333 {
  position: absolute;
  left: 370px;
  top: 288px;
  /*        background-color: #ed4014;*/
  height: 20px;
  width: 105px;
}
.content222222 {
  position: absolute;
  left: 230px;
  top: 338px;
  /*        background-color: #2d8cf0;*/
  height: 20px;
  width: 130px;
}
.content333333 {
  position: absolute;
  left: 370px;
  top: 338px;
  /*        background-color: #ed4014;*/
  height: 20px;
  width: 105px;
}
.layout-ceiling-head {
  position: absolute;
  left: 10px;
  top: 15px;
  /*background-color: #8ce6b0;*/
  height: 20px;
  width: 180px;
}
.head1 {
  position: absolute;
  left: 200px;
  top: 7px;
  /*background-color: #2d8cf0;*/
  height: 30px;
  width: 200px;
}
.head2 {
  position: absolute;
  left: 400px;
  top: 20px;
  /* background-color: #722ed1;*/
  height: 20px;
  width: 100px;
}
</style>

<template>
  <div class="layout" :class="{ 'layout-hide-text': spanLeft < 5 }">
    <!-- <router-view/>-->
    <div class="layout-ceiling">
      <div class="layout-ceiling-head">
        <p style="font-size: 15px; color: white">学生在线网络文化工作室</p>
      </div>
      <div class="head1">
        <p style="font-size: 25px; color: white">工作量管理系统</p>
      </div>
      <div class="head2">
        <p style="color: white">学生端</p>
      </div>
      <div class="layout-ceiling-main">
        <Badge dot>
          <a href="#">信息</a>
        </Badge>
        |
        <a href="#">安全中心</a>
        |
        <a href="#">退出</a>
      </div>
    </div>

    <Row type="flex">
      <i-col :span="spanLeft" class="layout-menu-left">
        <Menu active-name="1" theme="dark" width="auto" @on-select="navigator">
          <!--                    <div class="layout-logo-left"></div>-->
          <Menu-item name="1">
            <Icon type="ios-xxx" :size="iconSize"></Icon>
            <span class="layout-text">首页</span>
          </Menu-item>

          <Menu-item name="student2">
            <Icon type="ios-xxx" :size="iconSize"></Icon>
            <span class="layout-text">当月工作量申报</span>
          </Menu-item>

          <Menu-item name="student4">
            <Icon type="ios-xxx" :size="iconSize"></Icon>
            <span class="layout-text">管理已有工作量</span>
          </Menu-item>

          <Menu-item name="student5">
            <Icon type="ios-xxx" :size="iconSize"></Icon>
            <!--<a class="layout-text"> <router-link to="/homepage">消息与通知</router-link></a>-->
            <a class="layout-text">消息与通知</a>
          </Menu-item>
        </Menu>
      </i-col>
      <i-col :span="spanRight">
        <!--                <div class="layout-header">
                                    <i-button type="text" @click="toggleClick">
                                        <Icon type="navicon" size="32"></Icon>
                                    </i-button>
                                </div>-->
        <!--                <div class="layout-breadcrumb">
                                    <Breadcrumb>
                                        <Breadcrumb-item href="#">首页</Breadcrumb-item>
                                        <Breadcrumb-item href="#">应用中心</Breadcrumb-item>
                                        <Breadcrumb-item>某应用</Breadcrumb-item>
                                    </Breadcrumb>
                                </div>-->
        <div class="layout-content">
          <!--                    <div class="layout-content-main">内容区域</div>-->
          <div style="width: 800px; float: left">
            <Row style="padding: 20px">
              <Col span="8">
                <Card style="height: 150px">
                  <div class="photo111">
                    <img src="../src/images/add.png" width="65px" />
                    <p style="font-size: 12px">当月工作量申报</p>
                  </div>
                  <div class="photo222">
                    <img src="../src/images/record.png" style="width: 65px" />
                    <p style="font-size: 12px">管理现有工作量</p>
                  </div>
                </Card>
              </Col>
            </Row>

            <Row style="padding: 20px">
              <Col span="8">
                <Card style="height: 200px">
                  <p slot="title">消息与通知</p>
                  <p>{{ messages }}</p>
                </Card>
              </Col>
            </Row>
          </div>
          <div class="rrr">
            <Row style="padding: 20px">
              <Col span="8">
                <Card style="height: 390px">
                  <p slot="title">我的工作量</p>
                  <div class="activity">
                    <div class="content1">
                      <p>活动名称</p>
                      <p>{{ table[0].AcName }}</p>
                    </div>
                    <div class="content2">
                      <p>活动时间</p>
                      <p>{{ table[0].AcTime }}</p>
                    </div>
                    <div class="content3">
                      <p>工作量</p>
                      <p>{{ table[0].Workload }}</p>
                    </div>
                  </div>
                  <div class="activity">
                    <div class="content1">
                      <p>活动名称</p>
                      <p>{{ table[1].AcName }}</p>
                    </div>
                    <div class="content22">
                      <p>活动时间</p>
                      <p>{{ table[1].AcTime }}</p>
                    </div>
                    <div class="content33">
                      <p>工作量</p>
                      <p>{{ table[1].Workload }}</p>
                    </div>
                  </div>
                  <div class="activity">
                    <div class="content1">
                      <p>活动名称</p>
                      <p>{{ table[2].AcName }}</p>
                    </div>
                    <div class="content222">
                      <p>活动时间</p>
                      <p>{{ table[2].AcTime }}</p>
                    </div>
                    <div class="content333">
                      <p>工作量</p>
                      <p>{{ table[2].Workload }}</p>
                    </div>
                  </div>
                  <div class="activity">
                    <div class="content1">
                      <p>活动名称</p>
                      <p>{{ table[3].AcName }}</p>
                    </div>
                    <div class="content2222">
                      <p>活动时间</p>
                      <p>{{ table[3].AcTime }}</p>
                    </div>
                    <div class="content3333">
                      <p>工作量</p>
                      <p>{{ table[3].Workload }}</p>
                    </div>
                  </div>
                  <div class="activity">
                    <div class="content1">
                      <p>活动名称</p>
                      <p>{{ table[4].AcName }}</p>
                    </div>
                    <div class="content22222">
                      <p>活动时间</p>
                      <p>{{ table[4].AcTime }}</p>
                    </div>
                    <div class="content33333">
                      <p>工作量</p>
                      <p>{{ table[4].Workload }}</p>
                    </div>
                  </div>
                  <div class="activity">
                    <div class="content1">
                      <p>活动名称</p>
                      <p>{{ table[5].AcName }}</p>
                    </div>
                    <div class="content222222">
                      <p>活动时间</p>
                      <p>{{ table[5].AcTime }}</p>
                    </div>
                    <div class="content333333">
                      <p>工作量</p>
                      <p>{{ table[5].Workload }}</p>
                    </div>
                  </div>
                </Card>
              </Col>
            </Row>
          </div>
        </div>
        <!--                <div class="layout-copy">
                                    2011-2016 &copy; TalkingData
                                </div>-->
      </i-col>
    </Row>

    <!--        <div class="layout-header">
                    <div class="layout-logo"></div>
                </div>-->
    <!--        <div style="height: 200px"></div>-->
    <!--        <div class="layout-copy">
                    2011-2016 &copy; TalkingData
                </div>-->
  </div>
</template>

<script>
import student2 from './student2';
import axios from 'axios';
export default {
  name: 'student',
  data() {
    return {
      spanLeft: 5,
      spanRight: 19,
      messages: '暂无新消息',
      table: {
        0: {
          AcName: '',
          AcTime: '',
          Workload: ''
        },
        1: {
          AcName: '',
          AcTime: '',
          Workload: ''
        },
        2: {
          AcName: '',
          AcTime: '',
          Workload: ''
        },
        3: {
          AcName: '',
          AcTime: '',
          Workload: ''
        },
        4: {
          AcName: '',
          AcTime: '',
          Workload: ''
        },
        5: {
          AcName: '',
          AcTime: '',
          Workload: ''
        }
      }
    };
  },
  created: {
    function() {
      let config = { headers: { 'X-Requested-With': 'XMLHttpRequest' } };
      alert('student');
      axios
        .get('../PHP/messages.php')
        .then(response => (this.messages = JSON.parse(response.data.messages)))
        .catch(function (error) {
          console.log(error);
        });
      axios
        .get('../PHP/Students/Student_index.php')
        .then(function (response) {
          response.data = JSON.parse(response.data);
          for (let i = 0; response.data[i].AcName; i++) {
            this.data().table[i].AcName = response.data[i].AcName;
            this.data().table[i].AcTime = response.data[i].AcTime;
            this.data().table[i].Workload = response.data[i].Workload;
            console.log(response);
          }
        })
        .catch(function (error) {
          console.log(error);
        });
    }
  },
  computed: {
    iconSize() {
      return this.spanLeft === 5 ? 14 : 24;
    }
  },
  methods: {
    navigator(e) {
      // console.log(e);
      this.$router.push({ name: e });
    },

    // go: function () {
    //     this.$router.push({path: '/student2'})
    // },
    /*                       toggleClick () {
                                       if (this.spanLeft === 5) {
                                           this.spanLeft = 2;
                                           this.spanRight = 22;
                                       } else {
                                           this.spanLeft = 5;
                                           this.spanRight = 19;
                                       }
                                   }*/
    /*            studentgo:function(){
                            this.$router.push({path:'/student2'})
                        }*/
    /*        goto(){
                        this.$router.push("student2");
                    },*/
    clickIt: function () {
      window.location.href = '/student2';
    }
    /*            goto:function(pesrsonName) {

                            this.$router.push({
                                path: 'taskDistribution',
                                // name: 'mallList',
                                query: {
                                    id:pesrsonName
                                }
                            })

                        },*/
  }
};
</script>
