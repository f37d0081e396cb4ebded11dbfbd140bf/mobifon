select
	users.name as username,
    coms.name as community_name,
    ps.name as permission_name
from users

join community_members as cms on users.id = cms.user_id
join communities as coms on coms.id = cms.community_id and length(coms.name) >= 15
join community_member_permissions as cmps on cmps.member_id = cms.user_id
join permissions as ps on ps.id = cmps.permission_id

where
	lower(users.name) like '%t%'
    or lower(ps.name) like '%articles%'