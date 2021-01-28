select
    cms.community_id,
    coms.name as community_name,
    ps.name as permission_name,
    (select count(id) from community_member_permissions where member_id = users.id) as users_having_this_permission
from communities as coms
join community_members as cms on coms.id = cms.community_id
join users on users.id = cms.user_id
join community_member_permissions as cmps on cmps.member_id = cms.user_id
join permissions as ps on ps.id = cmps.permission_id
group by cmps.member_id, cmps.permission_id
having users_having_this_permission >= 5
order by cms.community_id desc, users_having_this_permission asc
limit 100
