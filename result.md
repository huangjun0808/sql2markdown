[TOC]
[TOC]
######chi_aigame 课程文件for中台
| 字段 | 类型 | 注解 |
| ---- | ---- | ---- |
| id | int(11) |  |
| openid | varchar(30) |  |
| play_times | int(11) | 0 |
| success_times | int(11) | 0 |
| gained_points | int(11) | 0 |
| highest_score | int(11) | 0 |
| history_score | int(11) | 0 |
| gmt_create | int(11) |  |
| PRIMARY | KEY | (id) |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | chi_aigame_snapshot |
| id | int(11) |  |
| openid | varchar(30) |  |
| score | int(11) | 分数 |
| rank_index | tinyint(4) | 排名 |
| snapshot_date | varchar(10) | 快照日期 |
| gmt_create | int(11) |  |
| PRIMARY | KEY | (id) |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | chi_aigame_success |
| id | int(11) |  |
| openid | varchar(30) |  |
| score | int(11) |  |
| points | int(11) |  |
| date | varchar(12) |  |
| gmt_create | int(11) |  |
| PRIMARY | KEY | (id) |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | chi_question |
| id | int(11) |  |
| question | varchar(512) |  |
| answer | text |  |
| correct | tinyint(4) | 0 |
| difficulty | tinyint(4) |  |
| gmt_create | int(11) |  |
| PRIMARY | KEY | (id) |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | chi_revive_card |
| id | int(11) |  |
| uid | bigint(20) |  |
| card_num | int(11) | 复活卡总数 |
| used_num | int(11) | 已使用复活卡数 |
| gmt_create | int(11) |  |
| PRIMARY | KEY | (id) |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | chi_user |
| id | int(11) |  |
| unionid | varchar(32) |  |
| openid | varchar(32) |  |
| token | varchar(64) |  |
| nickname | varchar(64) |  |
| sex | tinyint(4) |  |
| province | varchar(32) |  |
| city | varchar(32) |  |
| headimgurl | varchar(255) |  |
| gmt_create | int(11) |  |
| gmt_modified | int(11) |  |
| PRIMARY | KEY | (id) |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | chi_user_auth_log |
| id | int(11) |  |
| unionid | varchar(32) |  |
| openid | varchar(32) |  |
| token | varchar(64) |  |
| gmt_create | int(11) |  |
| PRIMARY | KEY | (id) |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | hibernate_sequence |
| next_val | bigint(20) |  |
| ) | ENGINE=MyISAM | CHARSET=latin1; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_activity |
| id | int(11) |  |
| activity_name | varchar(255) |  |
| activity_time | varchar(255) |  |
| activity_address | varchar(255) |  |
| max_sign_num | int(11) |  |
| signed_num | int(11) |  |
| star_num1 | int(10) | 0 |
| activity_cover | varchar(255) |  |
| activity_status | tinyint(4) | 0 |
| activity_desc | text |  |
| activity_process | text |  |
| activity_replay | text |  |
| registration_time | timestamp | 0000-00-00 |
| update_time | timestamp | 0000-00-00 |
| theme | tinyint(4) | 0 |
| theme_info | varchar(50) | 创学社活动主题 |
| end_time | timestamp | 0000-00-00 |
| star_num | int(10) | 0 |
| PRIMARY | KEY | (id) |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_activity_sign |
| id | int(11) |  |
| activity_id | int(11) |  |
| uid | bigint(20) |  |
| sign_status | tinyint(4) |  |
| registration_time | timestamp | 0000-00-00 |
| update_time | timestamp | 0000-00-00 |
| PRIMARY | KEY | (id) |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_activity_theme |
| id | int(11) |  |
| theme_name | varchar(24) |  |
| registration_time | timestamp | CURRENT_TIMESTAMP |
| update_time | timestamp | 0000-00-00 |
| PRIMARY | KEY | (id) |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_admin_course_file |
| id | int(11) |  |
| course_id | int(11) | 课程ID |
| external_id | int(11) | 0: |
| name | varchar(32) | 文件夹或文件名称 |
| mime_type | varchar(32) | 文件类型 |
| size | int(11) | 文件大小单位M |
| resource_url | varchar(255) | 文件地址 |
| original_url | varchar(255) | 原链接 |
| is_video | tinyint(4) | 0 |
| is_hls | tinyint(4) | 0 |
| gmt_create | int(11) | 创建时间 |
| operator_uid | int(11) | 操作者 |
| status | int(11) | 0 |
| PRIMARY | KEY | (id) |
| ) | ENGINE=InnoDB | CHARSET=utf8 |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_admin_external |
| id | int(11) |  |
| name | varchar(255) | 机构名称 |
| created_at | int(11) |  |
| updated_at | int(11) |  |
| PRIMARY | KEY | (id) |
| ) | ENGINE=InnoDB | CHARSET=utf8 |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_admin_menu |
| id | int(11) |  |
| parent_id | int(11) | 0 |
| route | varchar(64) | 路由 |
| name | varchar(64) | 名称 |
| priority | int(11) | 0 |
| gmt_create | int(11) |  |
| is_deleted | tinyint(4) | 0 |
| PRIMARY | KEY | (id) |
| ) | ENGINE=InnoDB | CHARSET=utf8 |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_admin_menu_has_permission |
| menu_id | int(10) | unsigned |
| permission_id | int(10) | unsigned |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_admin_model_has_permissions |
| permission_id | int(10) | unsigned |
| model_type | varchar(255) | COLLATE |
| model_id | bigint(20) | unsigned |
| ) | ENGINE=InnoDB | CHARSET=utf8mb4 |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_admin_model_has_roles |
| role_id | int(10) | unsigned |
| model_type | varchar(255) | COLLATE |
| model_id | bigint(20) | unsigned |
| ) | ENGINE=InnoDB | CHARSET=utf8mb4 |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_admin_permissions |
| id | int(10) | unsigned |
| parent_id | int(11) | 0 |
| name | varchar(255) | COLLATE |
| show_name | varchar(64) | COLLATE |
| guard_name | varchar(255) | COLLATE |
| created_at | timestamp |  |
| updated_at | timestamp |  |
| ) | ENGINE=InnoDB | CHARSET=utf8mb4 |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_admin_role_has_permissions |
| permission_id | int(10) | unsigned |
| role_id | int(10) | unsigned |
| ) | ENGINE=InnoDB | CHARSET=utf8mb4 |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_admin_roles |
| id | int(10) | unsigned |
| name | varchar(255) | COLLATE |
| show_name | varchar(64) | COLLATE |
| guard_name | varchar(255) | COLLATE |
| created_at | timestamp |  |
| updated_at | timestamp |  |
| ) | ENGINE=InnoDB | CHARSET=utf8mb4 |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_admin_users |
| id | int(10) | unsigned |
| name | varchar(255) | COLLATE |
| email | varchar(255) | COLLATE |
| email_verified_at | timestamp |  |
| password | varchar(255) | COLLATE |
| remember_token | varchar(100) | COLLATE |
| created_at | timestamp |  |
| updated_at | timestamp |  |
| type | tinyint(4) | 2 |
| external_id | int(11) | 0 |
| ) | ENGINE=InnoDB | CHARSET=utf8mb4 |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_award |
| id | int(11) |  |
| uid | bigint(20) |  |
| source | tinyint(4) | 来源，例如微信、微博 |
| ext_id | varchar(64) | 不同来源的唯一区分id，例如微信就是unionid |
| award | varchar(255) | 具体奖品 |
| award_status | tinyint(4) | 0 |
| gmt_create | int(11) |  |
| gmt_modify | int(11) |  |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_business_activity |
| id | int(11) |  |
| activity_name | varchar(255) | 商业活动名称 |
| coupon_id | int(11) | 优惠券id |
| gmt_start | int(11) | 活动开始时间（也是优惠券开始时间) |
| gmt_end | int(11) | 活动结束时间（也是优惠券过期时间） |
| gmt_create | int(11) | 创建时间 |
| gmt_modified | int(11) | 更新时间 |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_card |
| id | int(11) |  |
| subject | varchar(128) | CHARACTER |
| key | varchar(64) | CHARACTER |
| priority | varchar(255) | CHARACTER |
| price | float(100) | 0 |
| storage | int(11) | 99999 |
| expire_type | tinyint(4) | 1 |
| expire_date | varchar(32) | CHARACTER |
| validity | varchar(32) | CHARACTER |
| is_active | tinyint(4) | 1 |
| registration_time | timestamp | CURRENT_TIMESTAMP |
| update_time | varchar(48) | CHARACTER |
| card_img | varchar(128) | 学习卡图片链接 |
| ) | ENGINE=InnoDB | CHARSET=latin1; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_card_user |
| id | int(11) |  |
| uid | bigint(20) | 用户id |
| card_id | int(11) | 学习卡id |
| card_count | int(11) | 1 |
| expire_time | int(11) | 过期时间 |
| registration_time | int(11) |  |
| update_time | int(11) |  |
| win_prize | tinyint(4) | 活动是否中奖 |
| prize_name | varchar(255) | CHARACTER |
| ) | ENGINE=InnoDB | CHARSET=latin1; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_catalogue |
| id | int(11) |  |
| course_id | int(11) |  |
| name | varchar(255) |  |
| priority | tinyint(4) |  |
| registration_time | timestamp | 0000-00-00 |
| update_time | timestamp | 0000-00-00 |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_channel |
| id | int(11) |  |
| channel | varchar(64) | 渠道 |
| action | varchar(64) | 该条记录所关联的动作 |
| uid | bigint(20) |  |
| class_id | varchar(8) | 班级号 |
| registration_time | timestamp | CURRENT_TIMESTAMP |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_code |
| id | int(11) |  |
| batch_id | int(11) | 批次id |
| code_status | tinyint(4) | 0 |
| code | varchar(32) | code值 |
| used_uid | bigint(20) | 使用uid |
| update_time | int(11) | 更新时间 |
| registration_time | int(11) | 注册时间 |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_code_batch |
| id | int(11) |  |
| process_json | varchar(1024) | 后处理方式 |
| total_num | int(11) | 兑换码总数 |
| checked_num | int(11) | 0 |
| expire_time | int(11) | 过期时间 |
| registration_time | int(11) | 注册时间 |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_collect |
| id | int(11) |  |
| collect_uid | mediumtext |  |
| collect_module | tinyint(4) |  |
| module_id | int(11) |  |
| collect_status | tinyint(4) | 0 |
| registration_time | timestamp | 0000-00-00 |
| update_time | timestamp | 0000-00-00 |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_comment |
| id | int(11) |  |
| comment_uid | bigint(20) |  |
| comment_module | int(11) |  |
| module_id | int(11) |  |
| content | text |  |
| star | tinyint(4) | 5 |
| comment_status | tinyint(4) | 0 |
| registration_time | timestamp | 0000-00-00 |
| update_time | timestamp | 0000-00-00 |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_company_training |
| id | int(11) |  |
| company_name | varchar(64) | 企业名称 |
| company_scale | varchar(32) | 公司规模 |
| company_industry | varchar(32) | 所在行业 |
| contact_name | varchar(64) |  |
| contact_mobile | varchar(32) | 联系方式 |
| has_contacted | tinyint(4) | 0 |
| remarks | varchar(255) | 后台运营人员的备注 |
| registration_time | timestamp | CURRENT_TIMESTAMP |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_config |
| id | int(11) |  |
| config_key | varchar(36) | 配置键 |
| config_value | text | 配置值 |
| create_uid | bigint(20) |  |
| modified_uid | bigint(20) |  |
| gmt_create | int(11) |  |
| gmt_modified | int(11) |  |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_cooperate |
| id | int(11) |  |
| uid | bigint(11) | uid |
| schoole_name | varchar(50) | 学校名称 |
| addr | varchar(250) | 学校地址 |
| apply_person | varchar(1024) |  |
| regard | varchar(1024) | 合作目的 |
| remarks | varchar(1024) | 备注 |
| coo_status | tinyint(1) | 1是审核通过0审核中-1审核未通过 |
| gmt_create | int(11) | 创建时间 |
| gmt_modified | int(11) | 修改时间 |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_coupon |
| id | int(11) |  |
| type | int(11) | 优惠券类型，1:满减；2:满折 |
| condition | varchar(255) | 优惠券条件 |
| value | varchar(255) | 优惠额度 |
| name | varchar(255) | 优惠券名称 |
| quantity | int(11) | 0 |
| img_url | varchar(255) | 优惠券图片 |
| suit_type | int(11) | 1 |
| suit_ids | varchar(255) | 课程或老师的id集合 |
| status | int(11) | 0 |
| gmt_create | int(11) | 创建时间 |
| gmt_modified | int(11) | 更新时间 |
| creator | int(11) | 0 |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_course |
| id | int(11) |  |
| course_name | varchar(255) |  |
| course_desc | text |  |
| search_desc | varchar(500) |  |
| teacher_uid | bigint(20) |  |
| teacher_name | varchar(255) |  |
| course_fee | int(11) | 0 |
| course_priority | tinyint(4) | 0 |
| course_degree | tinyint(4) | 0 |
| course_score | int(11) | 0 |
| complete_condition | tinyint(4) | 0 |
| max_sign_num | int(11) | 0 |
| signed_num | int(11) | 0 |
| studying_num | int(11) | 0 |
| studied_num | int(11) | 0 |
| cover | varchar(255) | 0 |
| mobile_cover | varchar(255) |  |
| cover_bk | varchar(255) | 备选封面 |
| post_date | varchar(255) | 0 |
| post_flg | tinyint(4) | 0 |
| vote_star_1 | int(11) | 0 |
| vote_star_2 | int(11) | 0 |
| vote_star_3 | int(11) | 0 |
| vote_star_4 | int(11) | 0 |
| vote_star_5 | int(11) | 0 |
| registration_time | timestamp | 0000-00-00 |
| update_time | timestamp | 0000-00-00 |
| course_type | varchar(128) | 后台展示需要 |
| valid_date | int(11) | 付费课程的有效天数，以天为单位 |
| course_serial | tinyint(4) | 0 |
| course_status | tinyint(4) | 0 |
| release_time | timestamp | 0000-00-00 |
| created_uid | int(11) | 0 |
| operator_uid | bigint(20) | 0 |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_course_label |
| id | int(11) |  |
| course_id | int(11) |  |
| course_type | varchar(48) |  |
| registration_time | timestamp | 0000-00-00 |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_course_map |
| id | int(11) |  |
| name | varchar(12) |  |
| parent_id | int(11) | 0 |
| url | varchar(255) |  |
| priority | tinyint(4) | 0 |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_course_permission |
| id | int(11) |  |
| course_id | int(11) |  |
| uid | bigint(20) |  |
| trade_id | int(11) |  |
| start_time | int(11) |  |
| end_time | int(11) |  |
| gmt_create | int(11) |  |
| PRIMARY | KEY | (id) |
| ) | ENGINE=InnoDB | CHARSET=utf8 |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_course_prom |
| id | int(11) |  |
| item_type | varchar(255) | 商品类型 |
| item_id | int(11) | 商品id |
| prom_type | varchar(255) | 折扣类型 |
| prom_value | varchar(255) | 折扣信息 |
| coupon_forbidden | tinyint(4) | 0 |
| gmt_create | int(11) | 创建时间 |
| gmt_modified | int(11) | 更新时间 |
| gmt_start | int(11) | 折扣开始时间 |
| gmt_end | int(11) | 折扣结束时间 |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_course_stack |
| id | int(11) | 课栈id |
| name | varchar(16) | 名称 |
| location | varchar(32) | 所在城市 |
| start_time | timestamp | 0000-00-00 |
| end_time | timestamp | 0000-00-00 |
| apply_start_time | timestamp | 0000-00-00 |
| apply_end_time | timestamp | 0000-00-00 |
| maxpopulation | int(11) | 最大报名人数 |
| cover | varchar(128) | 封面图 |
| video_src | varchar(128) | 视频链接 |
| video_cover | varchar(128) | 视频封面 |
| live_src | varchar(128) | 视频直播链接 |
| live_cover | varchar(128) | 视频直播封面 |
| video_show | tinyint(4) | 是否展示视频区域 |
| introduce | varchar(255) | 每期介绍 |
| agenda | mediumtext | 议程 |
| guide | mediumtext | 大会指南 |
| partner | varchar(128) | 合作伙伴 |
| mobile_pic | mediumtext | 移动端首页长图 |
| applied_num | int(11) | 0 |
| index_show | tinyint(4) | 是否展示在首页：-1：否；1：是 |
| status | tinyint(4) | 1 |
| registration_date | timestamp | CURRENT_TIMESTAMP |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_course_stack_apply |
| id | int(11) | unsigned |
| stack_id | int(11) | 课栈id |
| uid | bigint(20) | 用户id |
| username | varchar(48) | 姓名 |
| telephone | varchar(24) | 手机号 |
| email | varchar(48) | 邮箱 |
| location | varchar(96) | 地区 |
| industry | varchar(48) | 行业 |
| organization | varchar(48) | 单位名称 |
| job | varchar(24) | 岗位 |
| is_vip | tinyint(4) | 0 |
| contact | tinyint(4) | 1 |
| purpose | varchar(120) | 与会需求 |
| apply_channel | tinyint(4) | 1 |
| apply_num | tinyint(4) | 1 |
| apply_status | tinyint(4) | 0 |
| sign_channel | tinyint(4) | 签到渠道：1:online;2:offline |
| registration_time | timestamp | CURRENT_TIMESTAMP |
| update_time | timestamp | 0000-00-00 |
| PRIMARY | KEY | (id) |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_course_stack_cooperation |
| id | int(11) |  |
| stack_id | int(11) | 课栈id |
| contact_name | varchar(48) | 姓名 |
| telephone | varchar(24) | 手机号 |
| email | varchar(48) | 邮箱 |
| industry | varchar(48) | 行业 |
| organization | varchar(48) | 单位名称 |
| job | varchar(24) | 岗位 |
| message | mediumtext | 留言 |
| comment | mediumtext |  |
| registration_time | timestamp | CURRENT_TIMESTAMP |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_course_stack_guest |
| id | int(11) |  |
| stack_id | int(11) | 课栈id |
| guest_name | varchar(24) | 嘉宾姓名 |
| guest_pic | varchar(128) | 嘉宾照片 |
| guest_position | varchar(255) | 嘉宾头衔 |
| guest_introduce | varchar(255) | 嘉宾简介 |
| priority | tinyint(4) | 0 |
| status | tinyint(4) | 1 |
| registration_time | timestamp | CURRENT_TIMESTAMP |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_course_stack_subscribe |
| id | int(11) |  |
| telephone | varchar(20) |  |
| gmt_create | int(11) |  |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_course_study |
| id | int(11) |  |
| course_id | int(11) |  |
| uid | bigint(20) |  |
| study_status | tinyint(4) | 0 |
| registration_time | timestamp | 0000-00-00 |
| update_time | timestamp | 0000-00-00 |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_course_tag |
| id | int(11) |  |
| course_id | int(11) |  |
| tag_id | int(11) |  |
| priority | tinyint(1) | 展示优先级 |
| gmt_create | int(11) |  |
| gmt_modified | int(11) |  |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_course_type |
| id | int(11) |  |
| parent_id | int(11) | 0 |
| type_name | varchar(255) | CHARACTER |
| priority | int(11) | 0 |
| tag | tinyint(4) | 0 |
| show_status | tinyint(4) | 1 |
| type_remark | text | CHARACTER |
| registration_time | timestamp | CURRENT_TIMESTAMP |
| ) | ENGINE=InnoDB | CHARSET=latin1; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_dsu_aicollege |
| uid | bigint(20) |  |
| time | int(10) |  |
| days | int(5) | 0 |
| lasted | int(5) | 0 |
| mdays | int(5) | 0 |
| reward | int(12) | 0 |
| lastreward | int(12) | 0 |
| ) | ENGINE=InnoDB | CHARSET=latin1 |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_dsu_aicollege_time |
| id | bigint(20) |  |
| uid | bigint(20) |  |
| time | int(10) |  |
| ) | ENGINE=InnoDB | CHARSET=latin1 |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_exhibits |
| id | int(11) |  |
| thumb | int(8) | 点赞数 |
| gmt_create | int(11) | 创建时间 |
| gmt_modified | int(11) | 修改时间 |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_file |
| id | int(11) |  |
| external_id | int(11) | 0: |
| parent_id | int(11) | 0 |
| name | varchar(32) | 文件夹或文件名称 |
| type | tinyint(4) | 1 |
| mime_type | varchar(32) | type=2时，文件类型 |
| size | int(11) | 文件大小单位M |
| resource_url | varchar(255) | 文件地址 |
| original_url | varchar(255) | 原链接 |
| is_video | tinyint(4) | 0 |
| is_hls | tinyint(4) | 0 |
| gmt_create | int(11) | 创建时间 |
| operator_uid | int(11) | 操作者 |
| status | int(11) | 0 |
| ) | ENGINE=InnoDB | CHARSET=utf8 |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_hot_words |
| id | int(11) |  |
| hot_word | varchar(50) |  |
| display | tinyint(1) | 是否前台展示 |
| priority | tinyint(1) | 展示优先级 |
| words_type | tinyint(1) | 热词类型 |
| gmt_create | int(11) |  |
| gmt_modified | int(11) |  |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_idea |
| id | int(11) |  |
| uid | bigint(20) |  |
| name | varchar(36) | 创意名称 |
| desc | varchar(1024) |  |
| portal | varchar(255) | 创意官网 |
| pic | varchar(255) | 创意图片 |
| contacts | varchar(12) | 联系人 |
| telephone | varchar(24) | 联系电话 |
| email | varchar(36) | 联系邮箱 |
| idea_status | tinyint(4) | 0 |
| priority | tinyint(4) | 1 |
| thumbs | int(11) | 0 |
| gmt_create | int(11) |  |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_idea_view |
| id | int(11) |  |
| idea_title | varchar(64) | 标题 |
| username | varchar(32) | 分享人 |
| position | varchar(32) | 职位 |
| content | varchar(1024) | 内容 |
| desc | varchar(1024) | 详细内容 |
| idea_image | varchar(64) | 图片链接 |
| idea_like | int(11) | 0 |
| idea_status | tinyint(1) | 1 |
| priority | int(8) | 0 |
| gmt_create | int(11) | 创建时间 |
| gmt_modified | int(11) | 修改时间 |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_invite |
| id | int(11) |  |
| uid | bigint(20) | 邀请人uid |
| invited_uid | bigint(20) | 被邀请人uid |
| invited_nickname | varchar(64) | 被邀请人昵称 |
| invited_headerimgurl | varchar(255) | 被邀请人头像 |
| register_from | varchar(36) | 注册来源，同msp_userapp.user_profile中的register_from |
| gmt_create | int(11) |  |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_login_info |
| id | int(11) |  |
| uid | bigint(20) |  |
| login_type | varchar(12) | 登陆方式 |
| is_pc | tinyint(4) | pc |
| login_time | int(11) | 登陆时间 |
| ip | varchar(32) | 用户ip |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_login_info_copy |
| id | int(11) |  |
| uid | int(11) |  |
| login_type | varchar(12) | 登陆方式 |
| is_pc | tinyint(4) | pc |
| login_time | int(11) | 登陆时间 |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_lottery |
| id | int(11) |  |
| product | varchar(12) | 名称 |
| num | int(8) | 奖品数量 |
| type | tinyint(1) | 奖品等级 |
| gmt_create | int(11) | 创建时间 |
| gmt_modified | int(11) | 修改时间 |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_megagame_apply |
| id | int(11) |  |
| name | varchar(36) | 姓名 |
| telephone | varchar(16) | 手机号 |
| email | varchar(36) | 邮箱 |
| region | varchar(24) | 地区 |
| job | tinyint(4) | 职业 |
| industry | varchar(36) | 单位 |
| position | varchar(24) | 职位 |
| team_name | varchar(24) | 团队名称 |
| team_size | tinyint(4) | 团队规模 |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_mobile_suggest |
| id | int(11) |  |
| suggest_uid | bigint(20) |  |
| suggest_type | tinyint(4) |  |
| suggest_desc | text |  |
| suggest_images | varchar(500) |  |
| contact | varchar(48) |  |
| registration_time | timestamp | 0000-00-00 |
| update_time | timestamp | 0000-00-00 |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_mycoupon |
| id | int(11) |  |
| uid | bigint(20) |  |
| coupon_id | int(11) | 优惠券id |
| coupon_status | int(11) | 0 |
| item_type | varchar(255) |  |
| item_id | int(11) |  |
| trade_id | int(11) | 交易id |
| gmt_create | int(11) | 创建时间 |
| gmt_start | int(11) | 优惠券有效期开始时间 |
| gmt_end | int(11) | 优惠券有效期过期时间 |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_new_term_class |
| id | int(11) |  |
| class_id | varchar(8) | 班级id |
| province | varchar(32) |  |
| school_name | varchar(64) | 学校名称 |
| class_name | varchar(128) | 班级名称 |
| registration_time | timestamp | CURRENT_TIMESTAMP |
| is_deleted | tinyint(4) | 0 |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_new_term_student |
| id | int(11) |  |
| uid | bigint(20) |  |
| is_monitor | tinyint(4) | 0 |
| class_id | varchar(8) | 班级号 |
| province | varchar(32) |  |
| nickname | varchar(128) | 昵称 |
| school | varchar(64) | 学校 |
| student_number | varchar(32) |  |
| registration_time | timestamp | CURRENT_TIMESTAMP |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_operation |
| id | int(11) |  |
| ope_position | int(4) | 推广位置 |
| ope_num | int(4) | 卡片数量 |
| ope_image | varchar(500) | 图片地址 |
| ope_url | varchar(500) | 跳转地址 |
| ope_title1 | varchar(200) | 标题1 |
| ope_title_url1 | varchar(200) | 标题1跳转地址 |
| ope_title2 | varchar(200) | 标题2 |
| ope_title_url2 | varchar(200) | 标题2跳转地址 |
| ope_title3 | varchar(200) | 标题3 |
| ope_title_url3 | varchar(200) | 标题3跳转地址 |
| ope_title4 | varchar(200) | 标题4 |
| ope_title_url4 | varchar(200) | 标题4跳转地址 |
| is_display | tinyint(1) | 是否隐藏 |
| gmt_create | int(11) |  |
| gmt_modified | int(11) |  |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_order |
| id | int(11) |  |
| trade_id | int(11) | 交易id |
| item_type | tinyint(1) | 商品类型 |
| item_id | int(11) | 商品id |
| goods_name | varchar(255) | 商品名称 |
| total_price | bigint(10) | 总价格 |
| prom_price | bigint(10) | 优惠后价格 |
| payed_price | bigint(10) | 实际应付金额 |
| order_status | tinyint(4) | 1 |
| is_canceled | tinyint(4) | 0 |
| gmt_create | int(11) | 订单创建时间 |
| gmt_modified | int(11) | 更新时间 |
| gmt_cancel | int(11) | 取消时间 |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_paper |
| id | int(11) |  |
| video_id | int(11) |  |
| paper_content | text |  |
| pass_score | int(11) | 60 |
| test_times | tinyint(4) | 0 |
| registration_time | timestamp | 0000-00-00 |
| update_time | timestamp | 0000-00-00 |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_paper_test |
| id | int(11) |  |
| paper_id | int(11) |  |
| uid | bigint(20) |  |
| course_id | int(11) |  |
| score | int(11) |  |
| is_passed | tinyint(4) |  |
| registration_time | timestamp | 0000-00-00 |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_president |
| id | int(11) |  |
| uid | bigint(11) | uid |
| username | varchar(12) | 名称 |
| nation | varchar(30) | 名族 |
| card_num | varchar(30) | 身份证号 |
| phone | varchar(15) | 手机号 |
| email | varchar(30) | 邮箱 |
| sex | tinyint(1) | 0 |
| school | varchar(3096) |  |
| addr | varchar(128) | 当前地址 |
| intership | text |  |
| pre_status | tinyint(1) | 0 |
| gmt_create | int(11) | 创建时间 |
| gmt_modified | int(11) | 修改时间 |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_score |
| id | int(11) |  |
| uid | bigint(20) |  |
| score | int(11) | 0 |
| type | tinyint(4) | 1:语点；2:学分 |
| extend | varchar(255) | CHARACTER |
| registration_time | datetime | 1970-00-00 |
| update_time | datetime | 1970-00-00 |
| ) | ENGINE=InnoDB | CHARSET=latin1; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_subscribe |
| id | int(11) |  |
| uid | int(11) |  |
| mobile | varchar(32) | 手机号码 |
| email | varchar(64) | 邮箱 |
| module | tinyint(4) | 0 |
| is_always | tinyint(4) | 0 |
| module_batch_id | int(11) | 0 |
| gmt_create | int(11) |  |
| ) | ENGINE=InnoDB | CHARSET=utf8 |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_tag |
| id | int(11) |  |
| tag_name | varchar(12) |  |
| display | tinyint(1) | 是否前台展示 |
| priority | tinyint(1) | 展示优先级 |
| tag_type | tinyint(1) | 标签类型 |
| gmt_create | int(11) |  |
| gmt_modified | int(11) |  |
| ) | ENGINE=InnoDB | CHARSET=utf8; |
| # | Dump | of |
| # | ------------------------------------------------------------ |  |
| CREATE | TABLE | pro_trade |
| id | int(10) | unsigned |
| uid | bigint(20) |  |
| trade_no | varchar(255) | 交易订单号 |
| product_name | varchar(32) |  |
| total_price | bigint(10) | 总价格 |
| prom_price | bigint(10) | 优惠后价格 |
| my_coupon_id | int(11) | 优惠券id |
| payed_price | bigint(10) | 实际应付金额 |
| payed_type | varchar(255) | 支付类型 |
| payed_trade_no | varchar(255) | 付款订单号 |
| trade_status | tinyint(4) | 1 |
| channel | varchar(255) | 下单渠道 |
| invoice_id | int(11) | 发票id |
| is_canceled | tinyint(4) | 0 |
| gmt_create | int(11) | 交易创建时间 |
| gmt_pay | int(11) | 付款时间 |
| gmt_modified | int(11) | 更新时间 |
| gmt_cancel | int(11) | 交易取消时间 |
######([^ ([^
| 字段 | 类型 | 注解 |
| ---- | ---- | ---- |
