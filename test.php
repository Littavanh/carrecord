create view v_drc_dept_ub2 as select `a`.`car_reg` AS `car_reg`,`a`.`yearRecord` AS `yearRecord`,
`a`.`monthRecord` AS `monthRecord`,sum((`a`.`meter_end` - `a`.`meter_start`)) AS `kmUsage`,`a`.`b_id` AS `b_id`,
`a`.`ub_id` AS `ub_id`,`a`.`ub_name` AS `ub_name` from `db_car_record`.`v_diary_record_car` `a` 
where ((`a`.`isDelete` = 'no') and (`a`.`ub_id` = 2)) group by `a`.`car_reg`,`a`.`yearRecord`,`a`.`monthRecord`,`a`.`ub_id`

create view v_drc_dept_ub3 as select `a`.`car_reg` AS `car_reg`,`a`.`yearRecord` AS `yearRecord`,
`a`.`monthRecord` AS `monthRecord`,sum((`a`.`meter_end` - `a`.`meter_start`)) AS `kmUsage`,`a`.`b_id` AS `b_id`,
`a`.`ub_id` AS `ub_id`,`a`.`ub_name` AS `ub_name` from `db_car_record`.`v_diary_record_car` `a` 
where ((`a`.`isDelete` = 'no') and (`a`.`ub_id` = 3)) group by `a`.`car_reg`,`a`.`yearRecord`,`a`.`monthRecord`,`a`.`ub_id`

create view v_drc_dept_ub4 as select `a`.`car_reg` AS `car_reg`,`a`.`yearRecord` AS `yearRecord`,
`a`.`monthRecord` AS `monthRecord`,sum((`a`.`meter_end` - `a`.`meter_start`)) AS `kmUsage`,`a`.`b_id` AS `b_id`,
`a`.`ub_id` AS `ub_id`,`a`.`ub_name` AS `ub_name` from `db_car_record`.`v_diary_record_car` `a` 
where ((`a`.`isDelete` = 'no') and (`a`.`ub_id` = 4)) group by `a`.`car_reg`,`a`.`yearRecord`,`a`.`monthRecord`,`a`.`ub_id`

create view v_drc_dept_ub5 as select `a`.`car_reg` AS `car_reg`,`a`.`yearRecord` AS `yearRecord`,
`a`.`monthRecord` AS `monthRecord`,sum((`a`.`meter_end` - `a`.`meter_start`)) AS `kmUsage`,`a`.`b_id` AS `b_id`,
`a`.`ub_id` AS `ub_id`,`a`.`ub_name` AS `ub_name` from `db_car_record`.`v_diary_record_car` `a` 
where ((`a`.`isDelete` = 'no') and (`a`.`ub_id` = 5)) group by `a`.`car_reg`,`a`.`yearRecord`,`a`.`monthRecord`,`a`.`ub_id`

create view v_drc_dept_ub6 as select `a`.`car_reg` AS `car_reg`,`a`.`yearRecord` AS `yearRecord`,
`a`.`monthRecord` AS `monthRecord`,sum((`a`.`meter_end` - `a`.`meter_start`)) AS `kmUsage`,`a`.`b_id` AS `b_id`,
`a`.`ub_id` AS `ub_id`,`a`.`ub_name` AS `ub_name` from `db_car_record`.`v_diary_record_car` `a` 
where ((`a`.`isDelete` = 'no') and (`a`.`ub_id` = 6)) group by `a`.`car_reg`,`a`.`yearRecord`,`a`.`monthRecord`,`a`.`ub_id`

create view v_drc_dept_ub7 as select `a`.`car_reg` AS `car_reg`,`a`.`yearRecord` AS `yearRecord`,
`a`.`monthRecord` AS `monthRecord`,sum((`a`.`meter_end` - `a`.`meter_start`)) AS `kmUsage`,`a`.`b_id` AS `b_id`,
`a`.`ub_id` AS `ub_id`,`a`.`ub_name` AS `ub_name` from `db_car_record`.`v_diary_record_car` `a` 
where ((`a`.`isDelete` = 'no') and (`a`.`ub_id` = 7)) group by `a`.`car_reg`,`a`.`yearRecord`,`a`.`monthRecord`,`a`.`ub_id`

create view v_drc_dept_ub8 as select `a`.`car_reg` AS `car_reg`,`a`.`yearRecord` AS `yearRecord`,
`a`.`monthRecord` AS `monthRecord`,sum((`a`.`meter_end` - `a`.`meter_start`)) AS `kmUsage`,`a`.`b_id` AS `b_id`,
`a`.`ub_id` AS `ub_id`,`a`.`ub_name` AS `ub_name` from `db_car_record`.`v_diary_record_car` `a` 
where ((`a`.`isDelete` = 'no') and (`a`.`ub_id` = 8)) group by `a`.`car_reg`,`a`.`yearRecord`,`a`.`monthRecord`,`a`.`ub_id`

create view v_drc_dept_ub9 as select `a`.`car_reg` AS `car_reg`,`a`.`yearRecord` AS `yearRecord`,
`a`.`monthRecord` AS `monthRecord`,sum((`a`.`meter_end` - `a`.`meter_start`)) AS `kmUsage`,`a`.`b_id` AS `b_id`,
`a`.`ub_id` AS `ub_id`,`a`.`ub_name` AS `ub_name` from `db_car_record`.`v_diary_record_car` `a` 
where ((`a`.`isDelete` = 'no') and (`a`.`ub_id` = 9)) group by `a`.`car_reg`,`a`.`yearRecord`,`a`.`monthRecord`,`a`.`ub_id`