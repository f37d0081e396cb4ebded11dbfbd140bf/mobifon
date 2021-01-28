select
    users.name as username,
    coms.name as community_name,
    cm.joined_at
from users

join community_members as cm
on users.id = cm.user_id

join communities as coms
on coms.id = cm.community_id and coms.created_at >= '2013-01-01 00:00:00'

order by cm.joined_at desc