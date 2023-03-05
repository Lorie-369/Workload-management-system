<style scoped>
@import 'styles/common.css';
#backgroundpage1 {
  background: url('../src/images/web1.jpg');
  width: 100%;
  height: 100%;
  position: fixed;
  background-size: 100% 100%;
}
.webpage1 {
  border-radius: 10px;
  width: 250px;
  height: 300px;
  background-color: #e9e9e9;
  position: absolute;
  top: 100px;
  left: 800px;
}
.loading {
  position: absolute;
  top: 30px;
  left: 75px;
}
.form1 {
  width: 200px;
  position: absolute;
  top: 80px;
  left: 25px;
}
.form2 {
  width: 200px;
  position: absolute;
  top: 130px;
  left: 25px;
}
.form3 {
  width: 200px;
  position: absolute;
  top: 180px;
  left: 25px;
}
.button {
  position: absolute;
  left: 25px;
  width: 200px;
  top: 230px;
}
</style>
<!--<template>
    <div>
        <router-view></router-view>
    </div>
</template>
<script>
    export default {
        data () {
            return {}
        },
        mounted () {

        },
        beforeDestroy () {

        },
        methods: {

        }
    }
</script>-->

<template>
  <div id="backgroundpage1">
    <Form ref="formInline" :model="formInline" :rules="ruleInline">
      <div id="page1" class="webpage1">
        <h1 class="loading">账户登录</h1>
        <Form-item class="form1">
          <Select v-model="formInline.select" placeholder="选择身份">
            <Option value="student">学生端</Option>
            <Option value="teacher">教师端</Option>
            <Option value="administration">管理端</Option>
          </Select>
        </Form-item>
        <Form-item class="form2" prop="user">
          <Input type="text" v-model="formInline.user" placeholder="学工号">
            <!--                <Icon type="ios-person-outline" slot="prepend"></Icon>-->
          </Input>
        </Form-item>
        <Form-item class="form3" prop="password">
          <Input
            type="password"
            v-model="formInline.password"
            placeholder="密码"
          >
            <!--                <Icon type="ios-locked-outline" slot="prepend"></Icon>-->
          </Input>
        </Form-item>
        <Form-item>
          <Button
            class="button"
            type="primary"
            @click="navigator('formInline', 'student')"
          >
            登录
          </Button>
          <!--<router-link to="student" ><router-link>-->
        </Form-item>
      </div>
    </Form>
  </div>
</template>
<script>
import axios from 'axios';

export default {
  name: 'homepage',
  data() {
    return {
      formInline: {
        user: '',
        password: ''
      },
      ruleInline: {
        user: [{ required: true, message: 'user', trigger: 'blur' }],
        password: [
          { required: true, message: 'password', trigger: 'blur' },
          {
            type: 'string',
            min: 6,
            message: '密码长度不能小于6位',
            trigger: 'blur'
          }
        ]
      }
    };
  },
  methods: {
    /*            go() {
                            this.$router.push('/student')*/

    navigator(name, e) {
      let config = { headers: { 'X-Requested-With': 'XMLHttpRequest' } };
      let params = JSON.stringify({
        user: this.formInline.user,
        password: this.formInline.password
      });
      this.$refs[name].validate(valid => {
        if (valid) {
          /*                            this.$Message.success('提交成功!');*/
          axios
            .post('../PHP/login.php', params, config)
            .then(function (response) {
              console.log(response);
            })
            .catch(function (error) {
              console.log(error);
            });
        } else {
          this.$Message.error('表单验证失败!');
        }
      });
    }
  }
};
</script>
