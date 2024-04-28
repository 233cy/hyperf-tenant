# hyperf 单表多租户版本
使用方法：
在hyperf的orm中直接use TenantField;即可。
需配置的地方：：

<img width="1098" alt="图片" src="https://github.com/233cy/hyperf-tenant/assets/29916783/7a6d4b64-e80a-4516-8f5d-502090985af1">

图中getTenantIdVal方法是用来获取全局默认租户id的。如果你默认不希望全局添加租户条件。可以返回null即可。然后通过orm::tenant来使用即可。
<img width="1256" alt="图片" src="https://github.com/233cy/hyperf-tenant/assets/29916783/8ec7de32-9fd9-43b4-bd40-259cb0d6b2ff">
